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
    <title>Thanh toán</title>
    <link href="./custom/images/logo.png" rel="icon" type="image/x-icon" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="./custom/css/products/header.css">
    <link rel="stylesheet" href="./custom/css/products/payment.css">
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
    <main>
        <div class="container d-flex flex-column">
            <div class="cart-background">
                <div class="title"><span> Thanh toán </span></div>
                <hr style="width: 100px; margin: auto; border-bottom: 2px solid #F57224;border-top:none;">
            </div>
            <div class="d-flex flex-row justify-content-between" style="background-color: #E6E6E6;">
                <div class="left-col" style="background-color: #E6E6E6; margin: 10px 0;">
                    <div class="information left-row">
                        <div class="d-flex justify-content-between" style="padding:0 10px;">
                            <span style="font-size: 20px; font-weight: 500;">Thông tin giao hàng</span>
                            <a href="#" style="color: #1A9CB7">Chỉnh sửa</a>
                        </div>
                        <div class="user-infor-sum">
                            <div>
                                <span class="user-name" style="margin-right: 20px; padding-left: 10px;">HUỲNH KIM HƯNG</span>
                                <span class="tel-num">0378242406</span>
                            </div>
                            <div>
                                <span class="fa fa-map-marker" style="padding: 10px;"></span>
                                <span class="address" style="padding-left: 10px 0;">143B/1, đường Nguyễn Trung Trực, khu phố 8, Thị trấn Bến Lức, Huyện Bến Lức, Long An</span>
                            </div>
                        </div>
                    </div>
                    <div class="cart left-row">
                        <div style="text-align: center; margin-bottom: 10px;">
                            <span style="font-size: 20px; font-weight: 500; padding-bottom: 5px;border-bottom: 2px solid #007562;">Đơn hàng của bạn</span>
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
                            <div class="product-item d-flex" style="align-items: center;">
                                <div class="product-img"><img src="' . $item['thumbnail'] . '" alt=""
                                    style="width: 80px; height:80px; border: 1px solid #E6E6E6;"></div>
                                <div class="product-title"><span>' . $item['title'] . '</span></div>
                                <div class="product-price">' . number_format($num * $item['price'], 0, ',', '.') . ' đ</div>
                                <div class="product-quatity">
                                    <span style="opacity: 0.8;">Số lượng: </span>
                                    <span>'.$num.'</span>
                                </div>
                            </div>
                            ';
                            }
                        }
                        ?>
                    </div>
                    <div class="note left-row">
                        <div style="padding-left: 10px; font-size: 20px; font-weight: 500;"><span>Ghi chú</span></div>
                        <textarea name="note" id="order-note" cols="5" rows="3" placeholder="Ghi chú đơn hàng"></textarea>
                    </div>
                </div>
                <div class="right-col" style="background-color: white; margin: 20px 0; padding: 5px 10px">
                    <div class="payment-way">
                        <div style="font-size: 20px; font-weight: 500;">Phương thức thanh toán</div>
                        <hr style="width: 100px; margin: 5px 0; border-bottom: 3px solid #007562;border-top:none;">
                        <div class="d-flex justify-content-between">
                            <img src="./custom/images/cash-icon.png" id="payment-way-icon" alt="" style="width:10%; height: 10%">
                            <select name="" id="payment-way-content" value="way-1" onchange=payment_way()>
                                <option value="way-1">Thanh toán khi nhận hàng</option>
                                <option value="way-2">Thanh toán qua thẻ tín dụng</option>
                                <option value="way-3">Thanh toán qua ZaloPay</option>
                                <option value="way-4">Thanh toán qua MoMo</option>
                            </select>
                        </div>
                        <div class="payment-way-expand" style="display:none;">
                            <div id="payment-way-expand-text" style="width: 30%; height:fit-content;align-self:center;">Số điện thoại</div>
                            <input type="text" name="" id="payment-way-expand-content" class="flex-grow-1" style="padding: 5px; font-size:14px;" placeholder=". . .">
                        </div>
                    </div>
                    <div class="ship-service" id="dvvc">
                        <div style="font-size: 20px; font-weight: 500;">Dịch vụ vận chuyển</div>
                        <hr style="width: 100px; margin: 5px 0; border-bottom: 3px solid #007562;border-top:none;">
                        <ul class="ship-service-list d-flex justify-content-between">
                            <li class="ship-service-item d-flex flex-row ">
                                <input type="radio" name="ship-service-item" id="way-1" style="align-self: center;" checked value="1">
                                <div class="d-flex flex-column flex-grow-1 ship-service-content">
                                    <span class="ship-service-title">GH tiêu chuẩn</span>
                                    <span class="ship-service-price">18.700đ</span>
                                    <span class="ship-service-time">3-4 ngày</span>
                                </div>
                            </li>
                            <li class="ship-service-item d-flex flex-row ">
                                <input type="radio" name="ship-service-item" id="way-2" style="align-self: center;" value="2">
                                <div class="d-flex flex-column flex-grow-1 ship-service-content">
                                    <span class="ship-service-title">GH nhanh</span>
                                    <span class="ship-service-price">36.400đ</span>
                                    <span class="ship-service-time">1-2 ngày</span>
                                </div>
                            </li>
                            <li class="ship-service-item d-flex flex-row ">
                                <input type="radio" name="ship-service-item" id="way-3" style="align-self: center;" value="3">
                                <div class="d-flex flex-column flex-grow-1 ship-service-content">
                                    <span class="ship-service-title">GH hoả tốc</span>
                                    <span class="ship-service-price">63.000đ</span>
                                    <span class="ship-service-time">3-5 tiếng</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="cart-information">
                        <div class="cart-title" style="padding : 10px;font-size: 20px;  font-weight: 500"><span>Thông tin đơn hàng</span></div>
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
                            <span id="phiShip"><?php echo number_format($ship, 0, ',', '.'); echo 'đ' ?></span>
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
                            <input type="button" value="Đặt hàng" class="flex-grow-1 btnPay btn ">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>

    </footer>
    <script src="./custom/js/payment.js"></script>
    <!-- <script>
        var z = 18700;
        $('#dvvc input').on('change', function() {
            var x = $("input[name='ship-service-item']:checked").val(); 
            if(x == '1') {
                z = 18700
            } else if (x == '2') {
                z = 36400
            } else if (x == '3') {
                z = 63000
            }
            $('#phiShip').html(z.toLocaleString('vi-VN', {
                style: 'currency',
                currency: 'VND'
            }));
        });
    </script> -->
</body>

</html>