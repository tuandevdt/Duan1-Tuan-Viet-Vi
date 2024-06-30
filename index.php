<?php
    if(isset($_GET['login'])) {
        header('location: ./views/user/login.php?login=not_found');
    } else if(isset($_GET['register'])) {
        if($_GET['register'] == 'success') {
            header('location: ./views/user/login.php?register=success');
        }
    } else {
        header('location: ./views/user/login.php');
    }

?>