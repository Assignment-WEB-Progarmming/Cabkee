<?php
require_once('../db/dbhelper.php');
require_once('../utils/utilities.php');

$id = getGet('id');
$category = getGet('category');
$productByID = executeResult("select * from db_product where id = $id");
$relevantProducts = executeResult("select * from db_product where category = '$category'");
$danhMucID = executeResult("select id from db_category where title = '$category'");
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
    <link rel="stylesheet" href="./custom/css/products/products_item.css">
    <script src="./custom/js/products.js"></script>
</head>
<body >
    <header class="fixed-top" >
        <div id="success"></div>
        <link rel="stylesheet" href="./custom/css/products/header.css">
        <div class="header__first" onmouseover="hide_all_content()">
            <nav class="navbar justify-content-between navbar-expand-sm bg-light navbar-light ">
                <a class="navbar-brand" href="/index.html">
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
                <div class="shopping-cart">
                    <a href="cart.php" class="cart-link">
                        <span class="fa fa-shopping-cart cart-icon "></span>
                        <span class="cart-count">0</span>
                    </a>
                </div>
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
        <div class="container">
            <div class="item-view">
                <?php
                echo
                '
                    <div class="item-view-img d-flex flex-column flex-grow-1 ">
                        <div class="result-set-header">
                            <div class="result-set-header_filter">
                                <ul class="brower-list">
                                    <li class="brower-list_item"><a href="product_page.php" class="browwer_item-link">Tất cả sản phẩm</a></li>
                                    <li class="brower-list_item"><a href="product_list.php" class="browwer_item-link">Phòng Khách</a></li>
                                    <li class="brower-list_item"><a href="product_menu.php?id='.$danhMucID[0]['id'].'" class="browwer_item-link">' . $productByID[0]['category'] . '</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item-view-content d-flex flex-row flex-grow-1">
                            <img src="' . $productByID[0]['thumbnail'] . '" alt="" class="products-img" style="margin:auto">
                        </div>
                    </div>
                    <div class="item-information" style="margin-top: 50px;">
                        <h1 class="item-title" style="font-size:24px">' . $productByID[0]['title'] . '</h1>
                        <div class="product-review" id="' . $productByID[0]['id_sp'] . '"></div>
                        <div class="item-card_price">
                            <div class="price-new">' . number_format($productByID[0]['price'], 0, ',', '.') . 'đ</div>
                            <div class="price-old">27.890.000 đ</div>
                        </div>
                        <div class="item-color"  style="margin: 10px 0">
                            <span class="item-color-text" >Màu sắc:</span>
                            <span class="item-color-name" style="margin-left:46px;font-weight: 500;">' . $productByID[0]['color'] . '</span>
                        </div>
                        <div class="d-flex flex-column justify-content-between align-content-center" >
                            <div class="item-quality d-flex flex-row flex-grow-1" style="margin: 5px 0">
                                <span style="margin:auto; flex-basis: 25%;">Số lượng:</span>
                                <div class="d-flex align-content-center" style="height: 30px; flex-basis: 75%;">
                                    <button id="btnSub" class="btnQuality" style="height: 100%; width:30px; font-weight: bold;" onclick="downSL()">-</button>
                                    <input type="number" min="0" max="100" name="quality" id="textQuality" value="1" style="width: 30px; height: 100%; text-align: center;border:0;">
                                    <button id="btnPlus" class="btnQuality" style="height: 100%;width:30px;font-weight: bold;">+</button>
                                </div>
                            </div>
                            <input type="button" value="Thêm vào Giỏ hàng" class="flex-grow-1 btnAdd btn" style="margin: 10px auto;width: 50%;" onclick="addToCart(' . $productByID[0]['id'] . ')"> 
                        </div>
                    </div>';
                echo '<script>';
                echo 'rate_star_2("' . $productByID[0]['id_sp'] . '", ' . $productByID[0]['rate'] . ', 102)';
                echo '</script>';
                ?>
            </div>
            <div class="item-detail d-flex flex-row justify-content-between" style="margin-top:20px">
                <div class="item-description">
                    <div class="title">Mô tả sản phẩm</div>
                    <div class="item-description-content" style="margin: 0 0 0 20px ;">
                        <ul>
                            <li>
                                Căn hộ cửa bạn nhỏ chật trội, cửa hàng kinh doanh của bạn không gian bé, nơi làm việc của bạn không có chỗ nằm nghỉ ngơi, với chiếc Sofa tiện ích có đủ yếu tố và chế độ để phục vụ những nhu cầu thiết yếu của bạn.
                            </li>
                            <li>
                                Nếu không gian của bạn không đủ cho 1 bộ bàn ghế và 1 chiếc giường hoặc nơi làm việc cần có 1 chiếc giường để nghỉ ngơi. Nay đã có giường Sofa gấp gọn thành ghế. Khi bạn cần nằm nghỉ ngơi chỉ cần trảu ra thành giường,khi bạn không nằm nghỉ ngơi thì bạn có thể gấp gọn thành ghế ngồi.
                            </li>
                            <li>
                                Chất liệu: Ghế bọc nhung polyester bền bỉ ( thoáng khí, không bóng, không bám bụi)
                            </li>
                            <li>
                                Đệm mềm và thoải mái, ngồi lâu ko bị nóng hay bí lưng hay mỏi người
                            </li>
                            <li>
                                Thiết kế góc nghiêng phù hợp với đường cong của cơ thể giúp giảm áp lực tối đa đến cột sống
                            </li>
                            <li>
                                Ghế sofa thông minh thiết kế phần tựa lưng ngả được ra để làm giường cá nhân hay nhà có khách
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="item-specific">
                    <div class="title">Thông số sản phẩm</div>
                    <div class="item-specific-content">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td class="col-3 ">Mẫu thiết kế </td>
                                    <td>KS-297-GRY</td>
                                </tr>
                                <tr>
                                    <td class="col-3">Mã sản phẩm</td>
                                    <td>118372372</td>
                                </tr>
                                <tr>
                                    <td class="col-3">Sản xuất bởi</td>
                                    <td>Abbyson Living</td>
                                </tr>
                                <tr>
                                    <td class="col-3">Kích thước</td>
                                    <td>203cm * 91cm / 67 kg </td>
                                </tr>
                                <tr>
                                    <td class="col-3">Màu sắc</td>
                                    <td>Xám </td>
                                </tr>
                                <tr>
                                    <td class="col-3">Chất liệu</td>
                                    <td>Polyester, Ván ép, Khung gỗ cứng, Chân gỗ cao su</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="topic-item d-flex flex-column">
                <div class="department-title">
                    <h4 class="department-title_text">Sản phẩm liên quan</h4>
                </div>
                <ul class="department-list d-flex flex-row justify-content-between">
                <?php
                    foreach ($relevantProducts as $item) {
                        echo
                        '  
                        <li class="department-card">
                            <a href="product_item.php?id=' . $item['id'] . '&category=' . $item['category'] . '" class="department-card_link">
                                <img src="' . $item['thumbnail'] . '" alt="" class="department-card_img best-seller_img">
                                <div class="department-card_link-name">' . $item['title'] . '</div>
                                <div class="department-card_price ">' . number_format($item['price'], 0, ',', '.') . '</div>
                                <div class="products-review" id="' . $item['id_sp'] . '1">
                                </div>
                            </a>
                        </li>
                        ';
                        echo '<script>';
                        echo 'rate_star("' . $item['id_sp'] . '1", ' . $item['rate'] . ', 102)';
                        echo '</script>';
                    }
                    ?>
                </ul>
            </div>
            <img src="./custom/images/products/living/bg-A1.png" alt="" class="banner-page" style="width: 100%;margin: 10px 0;">
        </div>
    </main>
    <iframe id="footer-page" src="./footer.php" height="500px" frameborder="0" scrolling="no"></iframe>
    <script src="custom/js/category.js"></script>
</body>
</html>