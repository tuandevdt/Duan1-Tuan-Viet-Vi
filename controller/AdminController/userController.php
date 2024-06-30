<?php
    // include '../../model/DatabaseModel.php';
    $db = new Database();
    //Show list users
    function show_users()
    {
        global $db;
        $result = $db->select("SELECT * FROM users");
        return $result;
    }

    //UPDATE STATUS USERS
    function update_users($status,$idupdate)
    {
        global $db;
        $db->query("UPDATE users SET status = $status WHERE id = $idupdate");
    }
?>