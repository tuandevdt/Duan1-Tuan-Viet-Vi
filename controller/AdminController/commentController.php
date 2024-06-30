<?php
    // include '../../model/DatabaseModel.php';
    $db = new Database();
    //Show list comment
    function show_comments()
    {
        global $db;
        $result = $db->select("SELECT products.productname, comment.productid,
                                COUNT(comment.productid) AS comment_count,
                                MAX(comment.commentAt) AS newest_commentAt,
                                MIN(comment.commentAt) AS oldest_commentAt,
                                GROUP_CONCAT(comment.text) AS comments
                                FROM comment
                                INNER JOIN products ON comment.productid = products.id
                                GROUP BY comment.productid, products.productname");
        return $result;
    }

    //Show COMMENT DETAIL FROM ID PRODUCT
    function detail_comments($productid)
    {
        global $db;
        $result = $db->select("SELECT comment.*, users.username, products.productname 
                                FROM comment INNER JOIN users on users.id = comment.userid
                                INNER JOIN products on products.id = comment.productid
                                WHERE comment.productid = '$productid'");
        return $result;
    }

    //DELETE COMMENTS
    function delete_comment($id)
    {
        global $db;
        $db->query("DELETE FROM comment WHERE id = $id");
    }
?>