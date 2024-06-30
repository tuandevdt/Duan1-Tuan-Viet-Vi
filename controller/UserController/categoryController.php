<?php
    $db = new Database();

    //Show categories
    function list_categories()
    {
        global $db;
        $sql = "SELECT * FROM categories";
        $result = $db->select($sql);
        return $result;
    }
?>