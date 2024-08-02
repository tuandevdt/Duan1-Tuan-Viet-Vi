<?php
    // include '../../model/DatabaseModel.php';

use function PHPSTORM_META\elementType;

    $db = new Database();
    //Show list product
    function show_products()
    {
        global $db;
        $result = $db->select("SELECT * FROM products");
        return $result;
    }

    //SEARCH product
    function search_products($keyword)
    {
        global $db;
        $result = $db->select("SELECT * FROM products WHERE productname LIKE '%$keyword%'");
        return $result;
    }

    //TOTAL VIEWS product
    function total_views_products()
    {
        global $db;
        $result = $db->select("SELECT SUM(viewcount) AS total_viewcount FROM products");
        return $result[0]['total_viewcount'];
    }

    //KIỂM TRA ID XEM ĐÃ TỒN TẠI TRONG BẢNG PRODUCTS CHƯA
    function check_product($id)
    {
        global $db;
        $result = $db->select("SELECT id FROM products WHERE id = '$id'");
        return $result;
    }

    //SHOW PRODUCTS FROM ID
    function product($id)
    {
        global $db;
        $result = $db->select("SELECT * FROM products WHERE id = '$id'");
        return $result[0];
    }

    //CREATE PRODUCT
    function create_product($id,$productname,$picture,$price,$date,$description,$quantity,$categoryid)
    {
        global $db;
        $db->query("INSERT INTO products(id,productname,image,price,createdate,description,quantity,salescount,viewcount,categoryid) 
                            VALUES ('$id','$productname','$picture[name]','$price','$date','$description','$quantity',0,0,'$categoryid')");
    }

    //UPDATE PRODUCT
    function update_product($id,$productname,$picture,$price,$description,$quantity,$categoryid)
    {
        global $db;
        $db->query("UPDATE products SET 
                        productname = '$productname',
                        image = '$picture[name]',
                        price = '$price', 
                        description = '$description',
                        quantity = $quantity,
                        categoryid = '$categoryid'
                        WHERE id = '$id'");
    }

    //DELETE PRODUCT
    function delete_product($id)
    {
        global $db;
        $db->query("DELETE FROM products WHERE id = '$id'");
    }

    //CHECK PRODUCT BEFORE DELETE
    function check_product_before_delete($id)
    {
        global $db;
        $resultOrder = $db->select("SELECT * FROM orderitem WHERE productID = '$id'");
        $resultCart = $db->select("SELECT * FROM cart WHERE productid = '$id'");
        if($resultCart == null && $resultOrder == null) {
            return true;
        } else {
            return false;
        }
    }

?>