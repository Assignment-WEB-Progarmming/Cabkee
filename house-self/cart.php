<?php
require_once('../db/dbhelper.php');
require_once('../utils/utilities.php');
$count = 0;
$total = 0;
$ship = 18000;
$soSP = 0;

$cart = [];
if (isset($_COOKIE['cart'])) {
    $json = $_COOKIE['cart'];
    $cart = json_decode($json, true);
}
$idList = [];
foreach ($cart as $item) {
    $idList[] = $item['id'];
}
if (count($idList) > 0) {
    $idList = implode(',', $idList);
    //[2, 5, 6] => 2,5,6

    $sql = "select * from db_product where id in ($idList)";
    $cartList = executeResult($sql);
} else {
    $cartList = [];
}
//var_dump($cartList)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Giỏ hàng</title>
    <link href="./custom/images/logo.png" rel="icon" type="image/x-icon" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="custom/css/products/header.css">
    <link rel="stylesheet" href="custom/css/cart.css">
    <script src="custom/js/products.js"></script>
</head>

<body>
    <header class="fixed-top">
        <div class="header__first">
            <nav class="navbar justify-content-between navbar-expand-sm bg-light navbar-light ">
                <a class="navbar-brand" href="#">
                    <img src="./custom/images/logo-nobrand.png" alt="" style="width: 40px">
                    <span><img src="./custom/images/brand3.png" alt="" style="height: 20px"></span>
                </a>
                <!--Collapse-->
                <form class="form-inline">
                    <div class=" md-form my-0 in-search">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search products ..." aria-label="Search" style="width:100%">
                    </div>
                </form>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
        <div class="header__second  ">
            <nav class="navbar-expand-sm ">
                <ul class="navbar-nav header-menu-list ">
                    <li class="nav-item">
                        <a class="nav-link" href="product_list.php">Phòng Khách</a>
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
            </nav>
        </div>
    </header>
    <main>
        <div class="container d-flex flex-column">
            <div class="cart-background">
                <div class="title"><span> Giỏ hàng </span></div>
                <hr style="width: 100px; margin: auto; border-bottom: 2px solid #F57224;border-top:none;">
            </div>
            <div class="d-flex flex-row justify-content-between">
                <div class="list-products">
                    <div style="padding: 5px 0; border-bottom: 1px solid #E6E6E6;">
                        <input type="checkbox" name="select-products" style="width: 16px; height: 16px;margin: auto 10px;" id="">
                        <span> Chọn tất cả ( </span>
                        <span> 1</span>
                        <span> sản phẩm )</span>
                    </div>
                    <?php
                    if (count($cartList) != 0) {
                        foreach ($cartList as $item) {
                            $num = 0;
                            foreach ($cart as $value) {
                                if ($value['id'] == $item['id']) {
                                    $num += $value['num'];
                                    break;
                                }
                            }
                            $soSP += $num;
                            $total += $num * $item['price'];
                            echo
                            '
                            <div class="product-item d-flex ">
                                <div class="product-img" style="flex-basis: 100px; margin:auto 10px;"><img
                                    src="'.$item['thumbnail'].'" alt=""
                                    style="width: 80px; height:80px; border: 1px solid #E6E6E6;"></div>
                                <div class="product-title"><span>' . $item['title'] . '</span></div>
                                <div class="product-price">' . number_format($num * $item['price'], 0, ',', '.') . ' đ</div>
                                <div class="product-quality">
                                    <div class="d-flex align-content-center" style="height: 30px; flex-basis: 75%;">
                                        <input type="number" name="quality" id="textQuality" value="' . $num . '"
                                        style="width: 50px; height: 100%; text-align: center;border:0;" readonly>
                                    </div>
                                </div>
                                <div class="btnDelete" style="width: 30px;">
                                    <span class="fa fa-trash" onclick="deleteCart('.$item['id'].')"></span>
                                </div>
                            </div>
                            ';
                        }
                    }
                    ?>
                </div>
                <div class="pay">
                    <div class="address" style="border-bottom: 1.5px solid #cecece;">
                        <div class="address-title" style="padding: 10px;color: #969696;"><span>Địa chỉ giao hàng</span>
                        </div>
                        <div class="address-content">
                            <span class="fa fa-map-marker" style="padding: 10px;"></span>
                            <span class="address-text">TP.HCM, Bình Thạnh, Phường 5</span>
                        </div>
                    </div>
                    <div class="cart-information">
                        <div class="cart-title" style="padding : 10px;font-size: 20px;  font-weight: 500"><span>Thông
                                tin đơn hàng</span></div>
                        <div class="cart-quality d-flex justify-content-between " style="padding:5px 10px">
                            <span>Số sản phẩm: </span>
                            <span><?php echo $soSP ?></span>
                        </div>
                        <div class="cart-price-temp d-flex justify-content-between" style="padding:5px 10px">
                            <span>Tạm tính :</span>
                            <span><?php echo number_format($total, 0, ',', '.'); echo 'đ' ?></span>
                        </div>
                        <div class="cart-ship-price d-flex justify-content-between" style="padding:5px 10px">
                            <span>Phí giao hàng :</span>
                            <span><?php echo number_format($ship, 0, ',', '.'); echo 'đ' ?></span>
                        </div>
                        <div class="cart-discount d-flex justify-content-between" style="padding:5px 10px">
                            <div style="flex-basis: 65%;">
                                <input disabled="disabled" type="text" name="discount-id" id="" placeholder="Mã giảm giá" style="width: 100%;padding: 5px;">
                            </div>
                            <div style="flex-basis: 33%;">
                                <input type="button" value="Áp dụng" class="flex-grow-1 btnApply btn ">
                            </div>
                        </div>
                        <div class="cart-total d-flex justify-content-between" style="padding:5px 10px">
                            <span style="font-weight: bold;">Tổng cộng:</span>
                            <span style="font-weight: bold; color: #F57224; font-size: 20px;"><?php echo number_format($ship + $total, 0, ',', '.'); echo 'đ' ?></span>
                        </div>
                        <div style="font-size: 12px; text-align: right;">
                            <span>Đã bao gồm VAT (nếu có)</span>
                        </div>
                        <div class="pay-btn" style="padding:5px 10px">
                            <a href="payment.php"><input type="button" value="Thanh toán" class="flex-grow-1 btnPay btn "></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container">
            Footer
        </div>
    </footer>
    <script src="custom/js/cart.js"></script>
</body>

</html>