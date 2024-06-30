<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/css/admin-a.css?v= <?php echo time()?>">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Admin Manager</title>
</head>
<body>
    <div class="container">
        <aside>
            <div class="title-aside">
                <h2>M-Watch Store</h2>
            </div> 
            <div class="content-aside">
                <div class="menu-aside">
                    <ul class="menu">
                        <li class="li-menu"><a href="index.php">Dashboard</a></li>
                        <li class="li-menu"><a href="index.php?route=user">User Manager</a></li>
                        <li class="li-menu"><a href="index.php?route=category">Category Manager</a></li>
                        <li class="li-menu"><a href="index.php?route=product">Product Manager</a></li>
                        <li class="li-menu"><a href="index.php?route=order">The Order Manager</a></li>
                        <li class="li-menu"><a href="index.php?route=comment">Comment Manager</a></li>
                    </ul>
                    <ul>
                        <li class="li-menu">Setting</li>
                    </ul>
                </div>
            </div>
            <div class="bottom-aside">
                <div class="date-a">
                    <span id="timeDisplay"></span>
                </div>
            </div>
        </aside>
        <article>
            <nav class="navbar navbar-light bg-light">
                <div class="go-home"><h5><a href="../../views/user/index.php">Home Page</a></h5></div>
                
                <div class="account-admin">
                    <div class="vietnamese">
                        <div class="img-logo">
                            <img src="../../image/vietnam.png" alt="">
                        </div>
                        <div class="name">
                            Vietnamese <i class='bx bx-chevron-down'></i>
                        </div>
                    </div>
                    <span class="navbar-brand"><i class='bx bxs-bell-ring'></i></span>
                    <div class="content-admin">
                        <ul class="login-admin">
                            <li class="li-admin" style="font-size: 1.1rem;"><?php echo $row_admin['username']?>
                                <ul class="small-li none-li">
                                    <li><a href="index.php?route=logout">Log-Out</a></li>
                                </ul>
                            </li>
                            
                        </ul>
                    </div>
                    

                </div>
                
            </nav>

            <div class="content-container">