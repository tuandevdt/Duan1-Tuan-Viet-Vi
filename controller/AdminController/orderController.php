<?php
    $db = new Database();
    //Show list orders
    function show_orders()
    {
        global $db;
        $result = $db->select("SELECT * FROM orders ORDER BY orderdate DESC");
        return $result;
    }

    //TOP 5 NEW ORDERS
    function top5_new_orders()
    {
        global $db;
        $result = $db->select("SELECT * FROM orders ORDER BY orderdate DESC LIMIT 5");
        return $result;
    }

    //UPDATE ORDERS
    function update_orders($status,$id)
    {
        global $db;
            $db->query("UPDATE orders SET orderstatus = '$status' WHERE id = $id");
    }

    //SHOW ORDER-DETAIL FROM ORDERID
    function show_order_detail($orderId) {
        global $db;
        $result = $db->select("SELECT 
                                    orderitem.id,
                                    orderitem.quantity, 
                                    orderitem.price, 
                                    products.image
                                FROM orderitem
                                INNER JOIN products ON products.id = orderitem.productID
                                WHERE orderitem.orderID = $orderId");
        return $result;
    }
    //GET USERS AND ADDRESS FROM ORDERID
    function show_user_address($orderId) {
        global $db;
        $result = $db->select("SELECT
                                    users.fullname,
                                    address.street,
                                    address.ward,
                                    address.district,
                                    address.city,
                                    address.phonenumber
                                FROM users
                                INNER JOIN address ON address.userid = users.id
                                INNER JOIN orders ON orders.userid = users.id
                                WHERE orders.id = $orderId");
        return $result;
    }
?>