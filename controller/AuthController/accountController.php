<?php
    $db = new Database();

    //LOGIN
    function show_account($userid)
    {
        global $db;
        $sql = "SELECT users.*, address.*
                FROM users
                INNER JOIN address ON users.id = address.userid
                WHERE users.id = $userid";
        $result = $db->select($sql);
        return $result[0];
    }
    //Show user admin
    function load_admin($userid)
    {
        global $db;
        $result = $db->select("SELECT * FROM users WHERE id = $userid");
        return $result[0];
    }
    //SHOW ADDRESS
    function show_address($userid)
    {
        global $db;
        $sql = "SELECT address.*, users.fullname
                FROM users
                INNER JOIN address ON users.addressID = address.id
                WHERE users.id = $userid";
        $result = $db->select($sql);
        return $result;
    }
    //LUPDATE ADDRESS
    function update_address($street,$ward,$district,$city,$phone,$fullname,$userid)
    {
        global $db;
        $result = $db->select("SELECT * FROM address WHERE userid = $userid");
        if(count($result) == 0) {
            $db->query("INSERT INTO address (street,ward,district,city,phonenumber,userid)
                        VALUES ('$street','$ward','$district','$city','$phone',$userid)");
            $idaddress = mysqli_insert_id($db->getConnection());
            $db->query("UPDATE users SET addressID = $idaddress WHERE id = $userid");
        } else {
            $db->query("UPDATE address SET street = '$street', 
            ward = '$ward', district = '$district', 
            city = '$city', phonenumber = '$phone'
            WHERE userid = $userid");
        }
        $db->query("UPDATE users SET fullname = '$fullname' WHERE id = $userid");
    }

    function login($username,$password)
    {
        global $db;
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = $db->select($sql);
        return $result;
    }

    //FORGOT PASSWORD
    function forgot_pass($email)
    {
        global $db;
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = $db->select($sql);
        return $result;
    }

    //REGISTER
    function register($username,$email,$password,$role,$date,$picture)
    {
        global $db;
        $checkUserName = $db->select("SELECT * FROM users WHERE username = '$username'");
        $checkEmail = $db->select("SELECT * FROM users WHERE email = '$email'");
        if($checkUserName != null) {
            return "duplicateUser";
        } else if($checkEmail != null) {
            return "duplicateEmail";
        } else {
            $path = __DIR__ . '/../../image/products/';

            if (!is_dir($path)) {
                mkdir($path);
            }  
    
            // Hàm di chuyển file
            if (move_uploaded_file($picture['tmp_name'], $path . $picture['name'])) {
            }
    
            $querry = "INSERT INTO users(username,email,password,fullname,status,image,role,date) 
            VALUES ('$username', '$email', '$password', '', 1, '$picture[name]', '$role', '$date')";
            $db->query($querry);
            return "success";
        }
        
    }
?>