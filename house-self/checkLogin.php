<?php

function access()
{
    if (!empty($_POST['user_login'])) {
        $tenDangNhap = $_POST['user_login'];
        $matKhau = $_POST['pass_login'];

        $connect = new mysqli("localhost", "root", "", "assWeb");
        mysqli_set_charset($connect, "utf8");
        if($connect->connect_error) {
            var_dump($connect->connect_error);
            die();
        }

        $query = "SELECT * FROM db_user WHERE username = '".$tenDangNhap."' AND password = '".$matKhau."'";
        $result = mysqli_query($connect, $query);
        $data = array();
        while($row = mysqli_fetch_array($result, 1)) {
            $data[] = $row;
        }

        $connect->close();

        if($data != NULL) {
            if(isset($_POST['admin'])) header("Location: admin.php");
            else header("Location: ../index.php");
            setcookie('idUser', $data[0]['id'], time() + 3600*24*30, '/');
            //if($loaiNguoiDung == 'user') header("Location: index.php");
            //else header("Location: admin.php");
        }
    }
}
