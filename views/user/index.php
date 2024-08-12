<?php
    session_start();
    use PHPMailer\PHPMailer\PHPMailer;
    include '../../model/DatabaseModel.php';
    include '../../controller/AuthController/accountController.php';
    include '../../controller/UserController/productController.php';
    include '../../controller/UserController/categoryController.php';
    include '../../controller/UserController/orderController.php';


    //Login LogOut
    $none_logout = "none-logout";
    $login = "Đăng nhập";
    $admin = "";

    //Comment Product
    $edit_cmt = "";
    //Menu
    $introduce = '';
    $products = '';
    $news = '';
    $contact = '';
    $home = 'style="color: red;"';
    //Total Price At Cart
    $sum_price = 0;

    //Show Address At Pay
    $fullname = "";
    $city = "";
    $district = "";
    $ward = "";
    $street = "";
    $phonenumber = "";

    // ACCOUNT //PAY //MY ORDERS
    $none_address = "";
    $block_form_address = "none-address";



    if(isset($_SESSION['user'])) {
        $row = $_SESSION['user'];
        $userid = $row[0]['id'];
        if($row[0]['role'] == 'admin') {
            $admin = "Admin Manager";
        }
        $login = $row[0]['username'];
        $none_logout = "";
    } else {
        echo "no id";
    }
    ob_start();
    include '../../layout/header.php';

    if (isset($_GET['route'])) {
        switch ($_GET['route']) {
            case 'register':
                if(isset($_POST['user'])) {
                    $username = $_POST['user'];
                    $email = $_POST['email'];
                    $password = $_POST['pass'];
                    $role = 'user';     
                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                    $date = date('H:i:s d-m-Y');
                    $picture = $_FILES['image'];
                    $register = register($username,$email,$password,$role,$date,$picture);
                    if($register == 'duplicateEmail') {
                        header('location: login.php?register=duplicateEmail');
                    } else if($register == 'duplicateUser') {
                        header('location: login.php?register=duplicateUser');
                    } else {
                        header('location: login.php?register=success');
                    }
                }          
                break;
            case 'login':
                if(isset($_POST['user'])) {
                    $username = $_POST['user'];
                    $password = $_POST['pass'];
                    $result = login($username,$password);
                    if (count($result) == 0) {
                        header('location: login.php?login=not_found');
                        ob_end_flush();
                        exit;
                    } else {
                        $_SESSION['user'] = $result;
                        if($result[0]['role'] == 'admin') {
                            echo "admin";
                            header('location: ../admin/index.php');
                        } else {
                            header('location: index.php?route=index');
                        }
                    }
                }  else {
                    header('location: login.php?login=not_found');
                }        
                break;
            case 'logout':
                unset($_SESSION['user']);
                header('location: login.php');
                break;
            case 'forgot-password':
                
                if(isset($_POST['email-forgot'])) {
                    $email = $_POST['email-forgot'];
                    $result = forgot_pass($email);    
                    if (!empty($result)) {
                        $row = $result[0];
                        $email = $row['email'];
                        $password = $row['password'];
                        require_once "./PHPMailer/src/Exception.php";
                                    require_once "./PHPMailer/src/PHPMailer.php";
                                    require_once "./PHPMailer/src/SMTP.php";	
                                        $mail = new PHPMailer(true);
                                        $mail->isSMTP();
                                        $mail->Host = 'smtp.gmail.com';
                                        $mail->SMTPAuth = true;
                                        $mail->Username = "tuandtpd09812@fpt.edu.vn";
                                        $mail->Password = "avzu vpul ftnd fwfu";
                                        $mail->SMTPSecure = 'ssl';
                                        $mail->Port = 465;
                                        $mail->addAddress($email);
                                        $mail->isHTML(true);
                                        $mail->Subject ="Your password information was sent by administrator";
                                        $mail->Body = "Your password is: " . $password;
                                        $mail->send();
                                    header('location: login.php?password=respacesucces');
                    } else {
                        sleep(1);
                        header('location: login.php?password=error');
                    }
                }          
                break;
            case 'index':
                $resultsProductGAIR = load_product(2);
                $resultsProductGLAND = load_product(3);
                include 'home.php';
                break;      
            case 'my-account':
                $row = show_account($userid);
                if($row == null) {
                    $row['fullname'] = "";
                    $row['city'] = "";
                    $row['district'] = "";
                    $row['ward'] = "";
                    $row['street'] = "";
                    $row['phonenumber'] = "";
                    $none_address = "none-address";
                    $block_form_address = "";
                }    
                include 'my-account.php';
                break;      
            case 'edit-my-account':
                    $none_address = "none-address";
                    $block_form_address = "";
                    $row = show_account($userid);
                include 'my-account.php';
                break;      
            case 'update-my-account':
                    $street = $_POST['address-detail'];
                    $ward = $_POST['ward'];
                    $district = $_POST['district'];
                    $city = $_POST['city'];
                    $phone = $_POST['phone'];
                    $fullname = $_POST['firstname'];
                    update_address($street,$ward,$district,$city,$phone,$fullname,$userid);
                    $row = show_account($userid);
                include 'my-account.php';
                break;      
            case 'introduce':
                include 'introduce.php';
                break;      
            case 'list-products':
                $resultsCategory = list_categories();
                $resultsProductGSTEEL = load_product(1);
                $resultsProductGAIR = load_product(2);
                $resultsProductGLAND = load_product(3);
                include 'product.php';
                break;      
            case 'search-product':
                $name_product = $_POST['product-insearch'];
                $resultsCategory = list_categories();
                $resultsProductGSTEEL = search_product($name_product);
                $resultsProductGAIR = load_product(2);
                $resultsProductGLAND = load_product(3);
                include 'product.php';
                break;      
            case 'news':
                include 'news.php';
                break;      
            case 'contact':
                include 'contact.php';
                break;      
            case 'detail':
                if(isset($_GET['idproduct'])) {
                    $idproduct = $_GET['idproduct'];
                    $rows = detail($idproduct);
                }
                include 'detail.php';
                break;      
            case 'new-comment':
                if(isset($_POST['comment'])) {
                    $text = $_POST['comment'];
                    $idProduct = $_POST['productid'];
                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                    $date = date('Y-m-d H:i:s');
                    add_comment($text, $idProduct, $userid, $date);
                }
                header('location: index.php?route=detail&idproduct=' . $idProduct);                
                break;
            case 'edit-comment':
                if(isset($_POST['editedCommentText'])) {
                    $id = $_POST['commentID'];
                    $text = $_POST['editedCommentText'];
                    $productid = $_POST['productid'];
                    update_comment($id,$text);
                }
                header('location: index.php?route=detail&idproduct=' . $productid);     
                break;
            case 'delete-comment':
                    if(isset($_GET['cmtid'])) {
                        $id = $_GET['cmtid'];
                        $productid = $_GET['productid'];
                        delete_comment($id);
                    }
                    header('location: index.php?route=detail&idproduct=' . $productid); 
                break;     
            case 'cart':
                $results = show_cart($userid);
                include 'cart.php';
                break;      
            case 'update-cart':
                if(isset($_POST['submit'])) {
                    switch($_POST['submit']) {
                        case 'update':
                            if(isset($_POST['productid']) && is_array($_POST['productid'])) {
                                $productIds = is_array($_POST['productid']) ? $_POST['productid'] : [];
                                $quantities = is_array($_POST['totalItem']) ? $_POST['totalItem'] : [];
                                $prices = is_array($_POST['price-check']) ? $_POST['price-check'] : [];
                                $a = update_cart($productIds,$quantities,$prices,$userid);
                                if($a == "exceed quantity") {
                                    echo "<script>
                                            alert('Có sản phẩm vượt quá số lượng nên đã được đưa về số lượng lớn nhất!');
                                        </script>";
                                } else if ($a == "negative") {
                                    echo "<script>
                                            alert('Số lượng sản phẩm không thể là số âm!');
                                        </script>";
                                }
                            }
                            break;
                        case 'pay':
                            header('location: index.php?route=pay');
                            break;
                    }
                }
                $results = show_cart($userid);
                include 'cart.php';
                break;      
            case 'pay':
                $result = show_cart($userid);
                if(count(show_address($userid)) != 0) {
                    $none_address = "none-address";
                    $block_form_address = "";
                    $row_address = show_address($userid)[0];
                } 
                if(isset($_GET['edit-address'])) {
                    $none_address = "";
                    $block_form_address = "none-address";
                    $row_address = show_address($userid)[0];

                    $fullname = $row_address['fullname'];
                    $city = $row_address['city'];
                    $district = $row_address['district'];
                    $ward = $row_address['ward'];
                    $street = $row_address['street'];
                    $phonenumber = $row_address['phonenumber'];
                }
                include 'pay.php';
                break;      
            case 'update-address-order':
                $result = show_cart($userid);
                if(isset($_POST['btn-update-address'])) {
                    $fullname = $_POST['firstname'];
                    $street = $_POST['address-detail'];
                    $ward = $_POST['ward'];
                    $district = $_POST['district'];
                    $city = $_POST['city'];
                    $phone = $_POST['phone'];
                    update_address($street,$ward,$district,$city,$phone,$fullname,$userid);
                    header('location: index.php?route=pay');
                }
                if(isset($_POST['submit'])) { //Đặt hàng
                    $fullname = $_POST['firstname-a'];
                    $address = $_POST['address'];
                    $phone = $_POST['phone-a'];
                    $id_address = $_POST['id-address'];
                    if(isset($_POST['note'])) {
                        $note = $_POST['note'];
                    } else {
                        $note = "";
                    }
                    
                    $total_price = $_POST['sum_price'];
                    add_order($total_price,$id_address,$userid,$note);
                }
                $result = my_orders($userid);
                include 'order-detail.php';
                break;      
            case 'my-orders':
                $result = my_orders($userid);
                if(isset($_GET['cancel'])) {
                    if($_GET['cancel'] == 'error') {
                        echo "<script>
                                    alert('Không thể hủy đơn do đơn đã được xử lý bởi admin!!!')
                                </script>";
                    } else if($_GET['cancel'] == 'success') {
                        echo "<script>
                                    alert('Đã hủy đơn thành công!')
                                </script>";
                    } else if($_GET['cancel'] == 'delete-oke') {
                        echo "<script>
                                    alert('Đã xóa đơn thành công!')
                                </script>";
                    }
                    
                }
                include 'order-detail.php';
                break;
            case 'cancel-order':
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $status = $_GET['status'];
                    if($status === "Chờ xử lý") {
                        cancel_order($id);
                        header('location: index.php?route=my-orders&cancel=success');
                    } else {
                        header('location: index.php?route=my-orders&cancel=error');
                    }
                }
                break;
            case 'delete-order':
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    delete_order($id);
                    header('location: index.php?route=my-orders&cancel=delete-oke');
                }
                break;
            case 'show-order-item':
                if($_GET['orderID']) {
                    $orderID = $_GET['orderID'];
                    $result = order_items($orderID,$userid);
                }
                include 'order-item.php';
                break;      
            case 'delete-cart':
                if(isset($_GET['id'])) {
                    $id = $_GET['id'];
                    delete_cart($id);
                }
                $results = show_cart($userid);
                include 'cart.php';
                break;      
            default:
                echo 'loi';
                exit;
                break;
        }
    } else {
        $resultsProductGAIR = load_product(2);
        $resultsProductGLAND = load_product(3);
        include 'home.php';
    }
    include '../../layout/footer.php';
?>
