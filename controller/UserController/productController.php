<?php
    $db = new Database();

    //Show list product from categoryid
    function load_product($categoryID)
    {
        global $db;
        $result = $db->select("SELECT * FROM products WHERE categoryid = $categoryID");
        return $result;
    }
    //Show detail product from id
    function detail($idproduct)
    {
        global $db;
        $result = $db->select("SELECT * FROM products WHERE id = '$idproduct'");
        $db->query("UPDATE products SET viewcount = viewcount + 1 WHERE id = '$idproduct'");
        return $result[0];
    }

    //Show cart
    function show_cart($userid)
    {
        global $db;
        $results = $db->select("SELECT cart.*, products.image, products.price, products.productname 
                                FROM cart INNER JOIN products 
                                ON cart.productID = products.id 
                                WHERE cart.userID = $userid");
        return $results;
    }

    //Add to Cart
    function add_cart($idproduct,$userid,$so_luong,$price)
    {
        global $db;
        // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng của người dùng chưa
        $result_check = $db->select("SELECT * FROM cart WHERE userid = $userid AND productid = '$idproduct'");
        
        if (!empty($result_check)) {
            // Sản phẩm đã tồn tại trong giỏ hàng, cập nhật số lượng
            $so_luong_moi = $so_luong + $result_check[0]['totalItem'];
            $totalPrice = $so_luong_moi * $price;
            $sql_insert = "UPDATE cart SET totalItem = $so_luong_moi, totalPrice = $totalPrice WHERE userid = $userid AND productid = '$idproduct'";
        } else {
            // Sản phẩm chưa có trong giỏ hàng, thêm mới
            $sql_insert = "INSERT INTO cart (productid, userid, totalItem, totalPrice) VALUES ('$idproduct', $userid, $so_luong, $price)";
        }

        $db->query($sql_insert);
    }


    //Update carrt
    function update_cart($productIds,$quantities,$prices,$userid)
    {
        global $db;
        for($i = 0; $i < count($productIds); $i++) {
            $productId = $productIds[$i];
            $quantity = $quantities[$i];
            $totalPrice = $prices[$i] * $quantity;
            
            // Cập nhật số lượng sản phẩm trong giỏ hàng
            $db->query("UPDATE cart SET totalItem = $quantity, totalPrice = $totalPrice
                        WHERE productid = '$productId' AND userid = $userid");           
        }  
    }

    //Delete cart
    function delete_cart($id)
    {
        global $db;
        $db->query("DELETE FROM cart WHERE id = $id");
    }
?>