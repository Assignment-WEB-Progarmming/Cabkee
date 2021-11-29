<?php
require_once('../db/dbhelper.php');
require_once('../utils/utilities.php');

$id = getGet('id');
$productByCategory = executeResult("select * from db_product where category in (select title from db_category where id = $id)");

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
    <link rel="stylesheet" href="./custom/css/products/products_menu.css">
    <script src="./custom/js/products.js"></script>
</head>
<body >
    <header class="fixed-top" >
        <link rel="stylesheet" href="./custom/css/products/header.css">
        <div class="header__first" onmouseover="hide_all_content()">
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
                <button class="navbar-toggler" type="button" onclick=collapse_menu()>
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="user-action">
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
        <div class="header__second navbar-collapse " id="navbarSupportedContent">
            <nav class="navbar-expand-sm ">
                    <ul class="navbar-nav header-menu-list ">
                        <span id="stt_item" style="display: none;"> 0 </span>
                        <li class="nav-item dropdown show " >
                            <div   >
                                <a class="nav-link" href="product_list.php" onmouseover="set_show_index(0)" >Phòng Khách</a>
                                <div class="dropdown-menu"  onmouseleave="hide_content(0)" >
                                    <a class="dropdown-item" href="product_list.php">Sofa</a>
                                    <a class="dropdown-item" href="product_list.php">Ghế bành</a>
                                    <a class="dropdown-item" href="product_list.php">Bàn Coffee</a>
                                    <a class="dropdown-item" href="product_list.php">Tấm thảm</a>
                                    <a class="dropdown-item" href="product_list.php">Kệ tủ</a>
                                </div>
                            </div>
                        <li class="nav-item dropdown show">
                            <a class="nav-link" href="#" onmouseover="set_show_index(1)">Phòng Làm việc</a>
                            <div class="dropdown-menu" onmouseleave="hide_content(1)" >
                                <a class="dropdown-item" href="#">Bàn làm việc</a>
                                <a class="dropdown-item" href="#">Kệ sách</a>
                                <a class="dropdown-item" href="#">Ghế văn phòng</a>
                                <a class="dropdown-item" href="#">Tủ hồ sơ</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown show">
                            <a class="nav-link" href="#" onmouseover="set_show_index(2)">Phòng Ngủ</a>
                            <div class="dropdown-menu" onmouseleave="hide_content(2)" >
                                <a class="dropdown-item" href="#">Giường ngủ</a>
                                <a class="dropdown-item" href="#">Tủ đầu giường</a>
                                <a class="dropdown-item" href="#">Tủ quần áo</a>
                                <a class="dropdown-item" href="#">Chăn gối</a>
                                <a class="dropdown-item" href="#">Gương soi</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown show">
                            <a class="nav-link" href="#" onmouseover="set_show_index(3)">Đèn trang trí</a>
                            <div class="dropdown-menu" onmouseleave="hide_content(3)" >
                                <a class="dropdown-item" href="#">Đèn trần</a>
                                <a class="dropdown-item" href="#">Đèn tường</a>
                                <a class="dropdown-item" href="#">Đèn để bàn</a>
                                <a class="dropdown-item" href="#">Đèn ngủ</a>
                                <a class="dropdown-item" href="#">Đèn ngoài trời</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown show">
                            <a class="nav-link" href="#" onmouseover="set_show_index(4)">Bàn & Ghế</a>
                            <div class="dropdown-menu" onmouseleave="hide_content(4)" >
                                <a class="dropdown-item" href="#">Bàn ăn</a>
                                <a class="dropdown-item" href="#">Ghế phòng bếp</a>
                                <a class="dropdown-item" href="#">Bàn tròn</a>
                                <a class="dropdown-item" href="#">Ghế lười</a>
                                <a class="dropdown-item" href="#">Ghế gỗ</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown show">
                            <a class="nav-link" href="#" onmouseover="set_show_index(5)">Đồ trang trí</a>
                            <div class="dropdown-menu" onmouseleave="hide_content(5)" >
                                <a class="dropdown-item" href="#">Đèn led</a>
                                <a class="dropdown-item" href="#">Giấy dán tường</a>
                                <a class="dropdown-item" href="#">Thảm lót chân</a>
                                <a class="dropdown-item" href="#">Cây cảnh</a>
                                <a class="dropdown-item" href="#">Rèm cửa</a>
                            </div>
                        </li>
                    </ul>  
                </div>
            </nav>
        </div>
        <script src="./custom/js/header.js"></script>
    </header>
    <main >
        <div class="container d-flex flex-column">
            <div class="product-background">
                <img src="./custom/images/products/living/bg-5.jpg" width="100%"  alt="">
            </div>
            <div class="product-main-title justify-content-center">
                <div class="title" style="font-size:26px; font-weight: bold;text-align: center;padding: 10px;"><?php echo $productByCategory[0]['category'] ?></div>
                <hr style="width: 100px; margin: auto; border-bottom: 2px solid #F57224;border-top:none;">
                <div class="brower-top-nav">
                    <div class="result-set-header">
                        <div class="result-set-header_filter">
                            <ul class="brower-list">
                                <li class="brower-list_item"><a href="product_page.php" class="browwer_item-link">Tất cả sản phẩm</a></li>
                                <li class="brower-list_item"><a href="product_list.php" class="browwer_item-link">Phòng Khách</a></li>
                                <li class="brower-list_item last-item"><?php echo $productByCategory[0]['category'] ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list_product">
                <ul class="department-list">
                    <?php
                    for ($i = 0; $i < count($productByCategory); $i++) {
                        echo
                        '<li class="department-card">
                            <a href="product_item.php?id=' . $productByCategory[$i]['id'] . '&category=' . $productByCategory[$i]['category'] . '" class="department-card_link">
                                <img src="' . $productByCategory[$i]['thumbnail'] . '" alt="" class="department-card_img best-seller_img">
                                <div class="department-card_content" style="padding-left: 5px;">
                                    <div class="department-card_link-name">' . $productByCategory[$i]['title'] . '</div>
                                    <div class="products-review" id="' . $productByCategory[$i]['id_sp'] . '"></div>
                                    <div class="department-card_price">
                                        <div class="price-old">17.070.000đ</div>
                                        <div class="price-new">' . number_format($productByCategory[$i]['price'], 0, ',', '.') . 'đ</div>
                                    </div>
                                </div>
                            </a>
                        </li>';
                        echo '<script>';
                        echo 'rate_star("' . $productByCategory[$i]['id_sp'] . '", ' . $productByCategory[$i]['rate'] . ', 102)';
                        echo '</script>';
                    }
                    ?>
                </ul>
                <ul class="pagination justify-content-center" style="margin:20px 0">
                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#" style="background-color: #007562;color:white;" >Next</a></li>
                </ul>
            </div>
            <img src="./custom/images/products/living/bg-A1.png" alt="" class="banner-page" style="width: 100%;margin: 10px 0;">
        </div>
    </main>
    <iframe id="footer-page" src="./footer.php" height="500px" frameborder="0" scrolling="no"></iframe>
</body>
</html>