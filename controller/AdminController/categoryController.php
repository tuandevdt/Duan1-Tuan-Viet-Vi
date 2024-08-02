<?php
    // include '../../model/DatabaseModel.php';
    $db = new Database();
    //Show list categories
    function show_categories()
    {
        global $db;
        $result = $db->select("SELECT * FROM categories");
        return $result;
    }

    //Show categories FROM ID
    function show_category($id)
    {
        global $db;
        $result = $db->select("SELECT * FROM categories WHERE id = $id");
        return $result[0];
    }

    //CREATE CATEGORY
    function create_category($categoryname,$description)
    {
        global $db;
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date('Y-m-d H:i:s');
        $db->query("INSERT INTO categories (categoryname,createdate,description)
                                VALUES ('$categoryname','$date','$description')");
    }

    //UPDATE CATEGORY
    function update_category($categoryname,$description,$id)
    {
        global $db;
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date('Y-m-d H:i:s');
        $db->query("UPDATE categories SET categoryname = '$categoryname',createdate = '$date',description = '$description'
                    WHERE id = $id");
    }

    //DELETE CATEGORY
    function delete_category($id)
    {
        global $db;
        $db->query("DELETE FROM categories WHERE id = $id");
    }

    //CHECK CATEGORY BEFORE DELETE
    function check_category_before_delete($id)
    {
        global $db;
        $result = $db->select("SELECT * FROM products WHERE categoryid = $id");
        if($result == null) {
            return true;
        } else {
            return false;
        }
    }

?>
