<?php

require_once('../db/dbhelper.php');
require_once('../utils/utilities.php');

$list_category = executeResult('select * from db_category');
$list_product = executeResult('select * from db_product');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sản phẩm</title>
    <link href="/house-self/custom/images/logo.png" rel="icon" type="image/x-icon" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="./custom/css/products/header.css">
    <link rel="stylesheet" href="./custom/css/products/products_list.css">
    <script src="./custom/js/products.js"></script>
</head>
<body >
    <header class="fixed-top" >
        <div class="header__first">
            <nav class="navbar justify-content-between navbar-expand-sm bg-light navbar-light ">
                <a class="navbar-brand" href="#">
                    <img src="./custom/images/logo-nobrand.png" alt="" style="width: 40px">
                    <span><img src="./custom/images/brand3.png" alt="" style="height: 20px" ></span>
                </a>
                <!--Collapse-->
                <form class="form-inline" >
                    <div class=" md-form my-0 in-search">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search products ..." aria-label="Search" style="width:100%">
                    </div>
                </form>        
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="user-ac tion">
                    <i class="glyphicon glyphicon-user"></i>
                    <a href="#" class="login">
                        <span class="login_icon">
                            <img src="./custom/images/icon_login.png" alt="" style="width: 30px">
                        </span>
                        <span class="login_content">
                            Sign In 
                        </span>
                    </a>
                </div>
            </nav>
        </div>
        <div class="header__second  ">
            <nav class="navbar-expand-sm ">
                    <ul class="navbar-nav header-menu-list ">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Phòng Khách</a>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Phòng Làm việc</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Phòng Ngủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Đèn trang trí</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Bàn & Ghế</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Đồ trang trí</a>
                        </li>
                    </ul>  
                </div>
            </nav>
        </div>
    </header>
    <main >
        <div class="container">
            <div class="brower-top-nav">
                <div class="result-set-header">
                    <div class="result-set-header_filter">
                        <ul class="brower-list">
                            <li class="brower-list_item"><a href="product_page.php" class="browwer_item-link">Trang danh mục</a></li>
                            <li class="brower-list_item last-item">Phòng Khách</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="list_product">
                <div class="topic-list">
                    <?php
                    for ($i = 0; $i < count($list_category); $i++) {
                        echo
                        '
                        <div class="topic-item all ' . $list_category[$i]['title'] . '">
                            <div class="department-title">
                                <h4 class="department-title_text">' . $list_category[$i]['title'] . '</h4>
                                <a href="product_menu.php?id='.$list_category[$i]['id'].'" class="department-title_link" style="color: black">Xem tất cả ></a>
                            </div> 
                            <ul class="department-list">
                        ';
                        for ($j = 5 * $i; $j < 5 * ($i + 1); $j++) {
                            echo
                            '<li class="department-card">
                                <a href="#" class="department-card_link">
                                    <img src="' . $list_product[$j]['thumbnail'] . '" alt="" class="department-card_img best-seller_img">
                                    <div class="department-card_link-name">' . $list_product[$j]['title'] . '</div>
                                    <div class="department-card_price ">' . number_format($list_product[$j]['price'], 0, ',', '.') . 'đ</div>
                                    <div class="products-review" id="' . $list_product[$j]['id_sp'] . '">
                                    </div>
                                </a>
                            </li>
                            ';
                            echo '<script>';
                            echo 'rate_star("' . $list_product[$j]['id_sp'] . '", ' . $list_product[$j]['rate'] . ', 102)';
                            echo '</script>';
                        }
                        echo
                        '
                            </ul>
                        </div>
                        ';
                    }
                    ?>
                </div>
            </div>
            <img src="./custom/images/products/living/bg-A1.png" alt="" class="banner-page" style="width: 100%;">
        </div>
    </main>
    <footer>
        <div class="container">
            Footer
        </div>
    </footer>
    <script src="custom/js/category.js"></script>
</body>

</html>