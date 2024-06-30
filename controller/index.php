<?php 
    if(isset($_GET['role'])) {
        switch($_GET['role']) {
            case 'admin':
                if(isset($_GET['handle'])) {
                    switch($_GET['handle']) {
                        //CATEGORY
                        case 'create-category':
                            header('location: ../views/admin/category/create-category.php');
                            break 2;
                        case 'create-category-success':
                            header('location: ../views/admin/index.php?route=category');
                            break 2;
                        case 'update_category':
                            session_start();
                            $_SESSION['update'] = $_GET;
                            header('location: ../views/admin/category/update-category.php');
                            break 2;
                        case 'update_category_success':
                            header('location: ../views/admin/index.php?route=category');
                            break 2;
                        case 'delete_category':
                            session_start();
                            $_SESSION['delete-category'] = $_GET;
                            header('location: ../views/admin/category/delete-category.php');
                            break 2;
                        case 'delete_category_success':
                            header('location: ../views/admin/index.php?route=category');
                            break 2;
                        case 'delete_category_error':
                            header('location: ../views/admin/index.php?route=category');
                            break 2;         

                        //PRODUCTS
                        case 'create-product':
                            header('location: ../views/admin/product/create-product.php');
                            break 2;
                        case 'create-product-success':
                            header('location: ../views/admin/index.php?route=product');
                            break 2;
                        case 'create-product-error':
                            header('location: ../views/admin/product/create-product.php?create=error');
                            break 2;
                        case 'create-product-errorss':
                            header('location: ../views/admin/product/create-product.php?create=errorss');
                            break 2;
                        case 'update-product':
                            session_start();
                            $_SESSION['update'] = $_GET;
                            header('location: ../views/admin/product/update-product.php');
                            break 2;
                        case 'update-product-success':
                            header('location: ../views/admin/index.php?route=product&oke');
                            break 2;
                        case 'update-product-error':
                            header('location: ../views/admin/product/update-product.php?update=error');
                            break 2;
                        case 'delete-product':
                            session_start();
                            $_SESSION['delete'] = $_GET;
                            header('location: ../views/admin/product/delete-product.php');
                            break 2;
                        case 'delete-product-success':
                            header('location: ../views/admin/index.php?route=product');
                            break 2;
                        case 'show-products':
                            session_start();
                            $_SESSION['show-product'] = $_GET;
                            header('location: ../views/admin/index.php?route=product');
                            break 2;
                        
                            
                    }
                } else {
                    header('location: ../views/admin/user/user-manager.php');
                }

            case 'user':
                if(isset($_GET['handle'])) {
                    switch($_GET['handle']) {
                        case 'add-cart-success':
                            header('location: ../views/user/index.php?route=cart');
                            break 2;
                        case 'update-cart-success':
                            header('location: ../views/user/index.php?route=cart');
                            break 2;
                        case 'delete-cart-success':
                            header('location: ../views/user/index.php?route=cart');
                            break 2;
                        case 'pay':
                            header('location: ../views/user/index.php?route=pay');
                            break 2;
                        case 'register-success':
                            header('location: ../index.php?register=success');
                            break 2;
                        case 'show-order-item':
                            session_start();
                            $_SESSION['orderID'] = $_GET;
                            header('location: ../views/user/index.php?route=orderitem');
                            break 2;
                    }
                } else {
                    header('location: ../views/user/index.php');
                }
        }
    }
    if(isset($_GET['url'])) {
        switch($_GET['url']) {
            //ADMIN
            case 'admin':
                header('location: ../views/admin/index.php');
                break;
            case 'index':
                header('location: ../views/user/index.php');
                break;
            case 'category':
                header('location: ../views/admin/index.php?route=category');
                break;
            case 'product':
                header('location: ../views/admin/index.php?route=product');
                break;
            case 'order':
                header('location: ../views/admin/index.php?route=order');
                break;
            case 'dashboard':
                header('location: ../views/admin/index.php?route=dashboard');
                break;
            case 'user':
                header('location: ../views/admin/index.php?route=user');
                break;
            case 'comment':
                header('location: ../views/admin/index.php?route=comment');
                break;
            //USERS
            case 'logout':
                header('location: ../model/user/handle-logout.php');
                break;
            case 'introduce':
                header('location: ../views/user/index.php?route=introduce');
                break;
            case 'list-products':
                header('location: ../views/user/index.php?route=list-products');
                break;
            case 'cart':
                header('location: ../views/user/index.php?route=cart');
                break;
            case 'detail':
                session_start();
                $_SESSION['idproduct'] = $_GET;
                header('location: ../views/user/index.php?route=detail');
                break; 
            case 'my-order':
                header('location: ../views/user/index.php?route=my-order');
                break; 
            case 'order-success':
                header('location: ../views/user/index.php?route=my-order&delete_order=success');
                break;
            case 'order-false':
                header('location: ../views/user/index.php?route=my-order&delete_order=cancel');
                break;
            case 'my-account':
                header('location: ../views/user/index.php?route=my-account');
                break; 
        }
    }
?>