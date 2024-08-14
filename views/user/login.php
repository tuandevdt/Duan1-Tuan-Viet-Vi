<?php
    $show_error = "";
    $class = "";
    $sendPass = "";
    $nonewrapper = '';
    $classSendPass = '';
    $noneReturnLogin = 'wrapper-turn-off';
    $register = "";
    $error_Username = "";
    $error_Email = "";

    if(isset($_GET['login'])) {
        switch($_GET['login']) {
            case 'cart':
                header('location: cart.php?login=oke');
                break;
            case 'not_found':
                $show_error ="Login information is incorrect!";
                $class = 'wrapper';
                break;
            case 'block-account':
                $show_error ="Your account is block!";
                $class = 'wrapper';
        }
    }
    if(isset($_GET['register'])) {
        switch($_GET['register']) {
            case 'success':
                $register = "Register Success, Please Login!";
                break;
            case 'duplicateEmail':
                $error_Email = "Email already exists in account!";
                $nonewrapper = 'wrapper-turn-off';
                $none_register = 'block-wrapper wrapper';
                break;
            case 'duplicateUser':
                $error_Username = "Username already exists in account!";
                $nonewrapper = 'wrapper-turn-off';
                $none_register = 'block-wrapper wrapper';
                break;
        }
    }

    if(isset($_GET['password'])) {
        switch($_GET['password']) {
            case 'respacesucces':
                $sendPass = 'Check your email to get your password!';
                $nonewrapper = 'wrapper-turn-off';
                $classSendPass = 'wrapper';
                $noneReturnLogin = '';
                break;
            case 'error':
                $sendPass = 'Email information does not match any account!';
                $nonewrapper = 'wrapper-turn-off';
                $classSendPass = 'wrapper';
                $noneReturnLogin = '';
                break;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../public/css/style.css?v= <?php echo time()?>" >
    <title>Login M-Watch Store</title>
</head>
<body>
    <div class="container">
        <div id="login">
            <div class="Login-register">
                    <!-- LOGIN -->
                    <div id="login-index" class="wrapper wrapper-login <?php echo $nonewrapper?>">
                        <div class="login-btn">
                            <form action="index.php?route=login" id="form-login" method="POST">
                                <h1 class="form-heading">Login</h1>
                                <div class="form-group">
                                    <input id="username" name="user" type="text" class="form-input" placeholder="Username" value="">
                                    <small class="error"><?php echo $show_error ?></small>
                                    <span></span>
                                </div>

                                <div class="form-group">
                                <input id="password" name="pass" type="password" class="form-input" placeholder="Password" value="">
                                    <small class="error"><?php echo $register ?></small>
                                    <span></span>
                                </div>


                                <div class="forgot-pass-a">
                                    <span class="forgot-pass-index">Forgot password?</span>
                                </div>

                                <div class="login">
                                    <button  id="submit" type="submit" class="nut-login">Login</button>
                                </div>

                                <div class="or-login-by">
                                    Not a member? 
                                    <span id="now-register">Register Now</span> 
                                </div>
                            </form> 
                        </div>
                    </div>

                    <!-- RETURN TO LOGIN -->
                    <div id="" class="return-pass <?php echo $classSendPass . ' ' . $noneReturnLogin ?>">
                        <div class="login-btn">
                            <form  id="form-check-pass" action="index.php?route=forgot-password" method="POST">
                                <h2 style="font-size: 23px; line-height: 80px; margin-bottom: 50px;" class="form-heading">Nhập thông tin Email của bạn</h2>
                                <div class="form-group">
                                    <input type="email" class="form-control input form-input"  name="email-forgot" id="exampleInputPassword1" placeholder="Email">
                                    <small class="error"><?php echo $sendPass ?></small>
                                    <span> </span>
                                </div>

                                <div class="forgot-pass">
                                    <span class="return-login">Return To Login</span>
                                </div>


                                <div class="login">
                                    <button type="submit" name="submit" class="nut-login">Submit</button>
                                </div>

                            </form> 
                        </div>
                    </div>
        
                    <!-- REGISTER -->
                    <div id="register-index" class="wrapper-turn-off <?php echo $none_register?>">
                        <div class="login-btn">
                            <form action="index.php?route=register" id="form-login-register" method="POST" enctype="multipart/form-data">
                                <h1 class="form-heading">Register</h1>
                            
                                <div class="form-group">
                                    <input id="username-register" name="user" type="text" class="form-input" placeholder="Username" value="">
                                    <small class="error"><?php echo $error_Username?></small>
                                    <span></span>
                                </div>

            
                                <div class="form-group">
                                    <input id="email-register" name="email" type="text" class="form-input" placeholder="E-mail" value="">
                                    <small class="error"><?php echo $error_Email?></small>
                                    <span></span>
                                </div>
            
                                <div class="form-group">
                                    <input id="image-register" name="image" type="file" class="form-input" placeholder="Image" value="">
                                    <span></span>
                                </div>
                
                                <div class="form-group">
                                    <input  id="password-register" name="pass" type="password" class="form-input" placeholder="Password" value="">
                                    <small class="error"></small>
                                    <span></span>
                                </div>
                
                                <div class="form-group">
                                    <input  id="repassword-register" name="confirmpass" type="password" class="form-input" placeholder="Confirm Password" value="">
                                    <small class="error"></small>
                                    <span></span>
                                </div>
                
                                <div class="login-register">
                                    <button id="submit-register" type="submit" class="nut-login">Register</button>
                                </div>
                
                                <div class="or-login-by">
                                    You have an acount?
                                    <span id="now-login">
                                        Login Now
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</body>
<script src="../../public/Js/login.js?v= <?php echo time();?>"></script>
</html>