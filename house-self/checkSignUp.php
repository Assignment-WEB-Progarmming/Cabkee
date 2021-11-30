<?php

function register()
{
    if (!empty($_POST['phone_signup'])) {
        $phone_signup = $_POST['phone_signup'];
        $email_signup = $_POST['email_signup'];
        $pass_signup = $_POST['pass_signup'];
        $user_signup = $_POST['user_signup'];
        $address_signup = $_POST['address_signup'];
        $name_signup = $_POST['name_signup'];

        $connect = new mysqli("localhost", "root", "", "assWeb");
        mysqli_set_charset($connect, "utf8");
        if($connect->connect_error) {
            var_dump($connect->connect_error);
            die();
        }

        $query = "INSERT INTO db_user(hoTen, diaChi, username, password, email, phone) VALUES('".$name_signup."', '".$address_signup."', '".$user_signup."', '".$pass_signup."', '".$email_signup."', '".$phone_signup."')";
        mysqli_query($connect, $query);

        //dong ket noi
        $connect->close();

        /* for ($i = 0; $i < count($arr); $i++) {
            if ($username == $arr[$i]['username']) {
                if ($password == $arr[$i]['password']) {
                    header("Location: welcome.php");
                }
            }
        } */
    }
}
