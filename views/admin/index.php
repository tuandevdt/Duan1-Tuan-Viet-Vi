<?php
    include '../../model/DatabaseModel.php';
    include '../../controller/AdminController/productController.php';
    include '../../controller/AdminController/categoryController.php';
    include '../../controller/AdminController/commentController.php';
    include '../../controller/AdminController/userController.php';
    include '../../controller/AdminController/orderController.php';
    include '../../controller/AuthController/accountController.php';
    $user_none = "";
    session_start(); 
    $row = $_SESSION['user'];
    $userid = $row[0]['id'];
    $row_admin = load_admin($userid);

?>
                <?php include '../../layout/header-admin.php' ?>
                <?php 
                    if(isset($_GET['route'])) {
                        switch($_GET['route']) {                                
                            case 'logout':
                                unset($_SESSION['user']);
                                header('location: ../user/login.php');
                                break;
                            case 'user':
                                $results = show_users();
                                include "user/user-manager.php";
                                break;
                            case 'update-status-users':
                                if(isset($_POST['status'])) {
                                    $status = $_POST['status'];
                                    $idupdate = $_POST['id'];
                                    update_users($status,$idupdate);
                                }
                                $results = show_users();
                                include "user/user-manager.php";
                                break;                           
                            case 'category':
                                $error = "";
                                $not404 = "";
                                $results = show_categories();
                                include "category/category-manager.php";
                                if(isset($_GET['update'])) {
                                    if($_GET['update'] === 'error') {
                                        $error = "Lỗi chưa nhập CategoryName hoặc Description!";
                                    } else {
                                        $not404 = "Lỗi không xác định!";
                                    }
                                } 

                                if(isset($_GET['delete'])) {
                                    echo "<script> alert('Danh mục đã được ràng buộc bởi các sản phẩm!')</script>";
                                }
                                break;
                            case 'create-category':
                                include "category/create-category.php";
                                break;
                            case 'handle-create-category':
                                if(isset($_POST['category-name'])) {
                                    $categoryname = $_POST['category-name'];
                                    $description = $_POST['description'];
                                    create_category($categoryname,$description);
                                    header('location: index.php?route=category');
                                }
                                break;
                            case 'update-category':
                                if(isset($_GET['id'])) {
                                    $id = $_GET['id'];
                                    $update = show_category($id);
                                }
                                include 'category/update-category.php';
                                break;
                            case 'handle-update-category':
                                if(isset($_POST['name-category'])) {
                                    $categoryname = $_POST['name-category'];
                                    $description = $_POST['description'];
                                    $id = $_POST['id'];
                                    update_category($categoryname,$description,$id);
                                    header('location: index.php?route=category');
                                }
                                break;
                            case 'handle-delete-category':
                                if(isset($_POST['submit'])) {
                                    if($_POST['submit'] == 'yes') {
                                        $id = $_POST['id-xoa'];
                                        $check = check_category_before_delete($id);
                                        if($check == false) {
                                            header('location: index.php?route=category&delete=false');
                                        } else {
                                            delete_category($id);
                                            header('location: index.php?route=category');
                                        }
                                    }
                                }
                                break;
                            case 'product':
                                $result = show_products();
                                $total_items = count($result);
                                $back = "";

                                $current_page = isset($_GET['page']) ? $_GET['page'] : 1;// Xác định trang hiện tại
                                $items_per_page = 10;// Số lượng mục hiển thị trên mỗi trang
                                $offset = ($current_page - 1) * $items_per_page;// Tính toán OFFSET
                                // Thực hiện truy vấn dữ liệu với LIMIT và OFFSET
                                $result = $db->select("SELECT * FROM products LIMIT $items_per_page OFFSET $offset");                            
                                $total_pages = ceil($total_items / $items_per_page);// Tính toán số lượng trang
                                
                                if(isset($_POST['btnSearch'])) {
                                    $keyword = $_POST['search'];
                                        if($keyword !== '') {
                                            $result = search_products($keyword);
                                            $back = "Quay Lại";
                                        }
                                }
                                include "product/product-manager.php";
                                if(isset($_GET['page'])) {
                                    $active = $_GET['page'];
                                    echo "<script>document.querySelector('.active$active').style.background = 'white';</script>";
                                } else {
                                    echo "<script>document.querySelector('.active1').style.background = 'white';</script>";
                                }
                                
                                if(isset($_GET['delete'])) {
                                    echo "<script> alert('Sản phẩm đang được xử lý trong giỏ hàng hoặc đơn hàng!')</script>";
                                }
                                
                                break;
                            case 'create-product':
                                $duplicateID = '';
                                if(isset($_GET['create'])) {
                                    $duplicateID = "Duplicate ID, please re-enter ID";
                                }
                                $result = show_categories();
                                include "product/create-product.php";
                                break;
                            case 'handle-create-product':
                                if(isset($_POST['submit'])) {
                                    $id = $_POST['product-id'];
                                    //Kiểm tra id đã tồn tại chưa
                                    $result = check_product($id);
                                    if($result != null) {
                                        $duplicateID = "Duplicate ID, please re-enter ID";
                                        header('location: index.php?route=create-product&create=error');
                                    } else {
                                        $productname = $_POST['product-name'];
                                        $price = $_POST['price'];
                                        $description = $_POST['description'];
                                        $quantity = $_POST['quantity'];
                                        $categoryid = $_POST['categoryid'];
                                        $picture = $_FILES['image-a'];
                                        date_default_timezone_set('Asia/Ho_Chi_Minh');
                                        $date = date('Y-m-d H:i:s');

                                        // //IMAGE
                                        $path = __DIR__ . '/../../image/products/';

                                        if (!is_dir($path)) {
                                            mkdir($path);
                                        }  
                                        
                                        // Hàm di chuyển file
                                        if (move_uploaded_file($picture['tmp_name'], $path . $picture['name'])) {
                                        }
                                        create_product($id,$productname,$picture,$price,$date,$description,$quantity,$categoryid);
                                        header('location: index.php?route=product');
                                    }

                                    


                                }
                                break;
                            case 'update-product':
                                if(isset($_GET['id'])) {
                                    $id = $_GET['id'];
                                    $row = product($id);
                                    $resultCategory = show_categories();
                                }
                                $quantityError = '';
                                if(isset($_GET['update'])) {
                                    if($_GET['update'] == 'quantityError') {
                                        $quantityError = 'The quantity of products must be positive!';
                                    }
                                }
                                include "product/update-product.php";
                                
                                break;
                            case 'handle-update-product':
                                if(isset($_FILES['image'])){
                                    $id = $_POST['id'];
                                    $productname = $_POST['productname'];
                                    $picture = $_FILES['image'];
                                    $price = $_POST['price'];
                                    $description = $_POST['description'];
                                    $quantity = $_POST['quantity'];
                                    if($quantity < 0) {
                                        header('location: index.php?route=update-product&update=quantityError&id='. $id);
                                    } else {
                                        $categoryid = $_POST['categoryid'];
                                        // //IMAGE
                                        $path = __DIR__ . '/../../image/products/';
                                        if (!is_dir($path)) {
                                            mkdir($path);
                                        }       
                                        // Hàm di chuyển file
                                        move_uploaded_file($picture['tmp_name'], $path . $picture['name']);
                                        update_product($id,$productname,$picture,$price,$description,$quantity,$categoryid);
                                        header('location: index.php?route=product');
                                    }
                                    
                                } else {
                                    header('location: index.php?route=update-product&update=error');
                                }
                                break;
                            case 'handle-delete-product':
                                if(isset($_POST['submit'])) {
                                    if($_POST['submit'] == 'yes') {
                                        $id = $_POST['id-xoa'];
                                        //check xem sản phẩm có nằm trong giỏ hàng hay đã được đặt hay không
                                        $check = check_product_before_delete($id);
                                        if($check == false) {
                                            //đã tồn tại
                                            header('location: index.php?route=product&delete=false');
                                        } else {
                                            delete_product($id);
                                            header('location: index.php?route=product');
                                        } 
                                    }
                                }
                                break;
                            case 'order':
                                $result = show_orders();
                                    include "order/the-order-manager.php";
                                break;
                            case 'update-orders':
                                if(isset($_POST['btn-update-status'])) {
                                    $status = $_POST['status'];
                                    $id = $_POST['id'];
                                    
                                        update_orders($status,$id);
                                        header('location: index.php?route=order');
                                    
                                }
                                break;
                            case 'order-detail':
                                if(isset($_GET['id'])) {
                                    $orderId = $_GET['id'];
                                    $result = show_order_detail($orderId);
                                    $customer = show_user_address($orderId)[0];
                                    include "order/order-detail.php";
                                }
                                
                                break;
                            case 'comment':
                                $results = show_comments();
                                include "comment/comment-manager.php";
                                break;
                            case 'comment-detail':
                                if (isset($_GET['productid'])) {
                                    $productid = $_GET['productid'];
                                    $result = detail_comments($productid);
                                    include "comment/comment-detail.php";
                                }
                                break;
                            case 'handle-delete-comment':
                                if (isset($_POST['id-xoa'])) {
                                    $id = $_POST['id-xoa'];
                                    $productid = $_POST['productid'];
                                    delete_comment($id);
                                    header('location: index.php?route=comment-detail&productid='. $productid);
                                }
                                break;
                            default:
                                $countUsers = count(show_users());
                                $countProducts = count(show_products());
                                $countViews = total_views_products();
                                $countOrders = count(show_orders());
                                $newOrders = top5_new_orders();
                                include "dashboard/dashboard.php";
                                break;
                        }
                    } else {
                        $countUsers = count(show_users());
                        $countProducts = count(show_products());
                        $countViews = total_views_products();
                        $countOrders = count(show_orders());
                        $newOrders = top5_new_orders();
                        include "dashboard/dashboard.php";
                    }
                ?>
                <?php include '../../layout/footer-admin.php' ?>
 
<script src="../../public/Js/admin.js?v=<?php echo time()?>"></script>


