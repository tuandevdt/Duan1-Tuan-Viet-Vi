<?php
    $db = new Database();

    //Show list product from categoryid
    function add_order($total_price,$id_address,$userid,$note)
    {
        global $db;
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date('Y-m-d H:i:s');
        $db->query("INSERT INTO orders (orderdate, totalamount, shippingaddressID , orderstatus, userid, note) 
                    VALUES ('$date', '$total_price', $id_address, 'Chờ xử lý', $userid, '$note')");
        // Lấy ID của bản ghi vừa chèn vào bảng orders
        $orderID = mysqli_insert_id($db->getConnection());

        $result = $db->select("SELECT cart.*, products.price
                                FROM cart
                                INNER JOIN products ON cart.productid = products.id
                                WHERE cart.userid = $userid");
        for($i = 0; $i < count($result); $i++) {
            $productId = $result[$i]['productid'];
            $quantity = $result[$i]['totalItem'];
            $price = $result[$i]['price'];
            $sum_price = $price * $quantity;

            $db->query("INSERT INTO orderitem (orderID, productID, quantity, price, totalprice) 
                    VALUES ($orderID, '$productId', $quantity, '$price', '$sum_price')"); 
        } 
        $db->query("DELETE FROM cart WHERE userid = $userid");
    }

    //SHOW MY ORDERS
    function my_orders($userid) {
        global $db;
        $result = $db->select("SELECT * FROM orders WHERE userid = $userid");
        return $result;
    }

    //SHOW MY ORDER ITEMS
    function order_items($orderID,$userid) {
        global $db;
        $result = $db->select("SELECT orderitem.*, address.phonenumber, address.street, address.ward, 
                                address.district, address.city, users.fullname, products.productname, 
                                products.price, products.image
                                FROM orderitem
                                INNER JOIN orders ON orderitem.orderID = orders.id
                                INNER JOIN address ON orders.shippingaddressID = address.id
                                INNER JOIN users ON orders.userid = users.id
                                INNER JOIN products ON orderitem.productID = products.id
                                WHERE orderitem.orderID = $orderID AND orders.userid = $userid");
        return $result;
    }
?>