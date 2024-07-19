<?php
    $db = new Database();
    //Show list orders
    function show_orders()
    {
        global $db;
        $result = $db->select("SELECT * FROM orders");
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

?>