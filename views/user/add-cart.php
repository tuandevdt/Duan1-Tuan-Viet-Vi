<?php
    include '../../model/DatabaseModel.php';
    include '../../controller/UserController/productController.php';
    if(isset($_POST['number-detail'])) {
        $idproduct = $_POST['id'];
        $so_luong = $_POST['number-detail']; 
        $price = $_POST['price-add']; 
        session_start();
        $row = $_SESSION['user'];
        $userid = $row[0]['id'];

        add_cart($idproduct,$userid,$so_luong,$price);
        header('location: index.php?route=cart');
    }
?>