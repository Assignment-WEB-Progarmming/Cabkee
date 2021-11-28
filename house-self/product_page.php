<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sản phẩm</title>
    <link href="./custom/images/logo.png" rel="icon" type="image/x-icon" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="house-self/bootstrap/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="custom/css/products/header.css">
    <link rel="stylesheet" href="custom/css/products/products_page.css">
    <script src="custom/js/products.js"></script>
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
                        <span id="stt_item" style="display: none;"> 0 </span>
                        <li class="nav-item dropdown show " >
                            <div   >
                                <a class="nav-link" href="#" onmouseover="set_show_index(0)" >Phòng Khách</a>
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
        <script src="custom/js/header.js"></script>
    </header>
    <main >
        <div class="container">
            <div class="main-nav">
                <div class="row">
                    <div class="col-sm-3 main-nav_menu">
                        <h1 class="main-nav_menu-header">
                            Danh mục
                        </h1>
                        <ul class="navbar-nav main-nav_menu-list ">
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
                                <a class="nav-link" href="#">Bàn</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Ghế</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Đồ trang trí</a>
                            </li>
                        </ul>  
                    </div>
                    <div class="col-sm-9 ">
                        <img src="custom/images/bg-2.jpg" alt="" class="main-nav_menu-img">
                    </div>
                </div>
            </div>
            <div class="department">
                <div class="department-link">
                    <a href="product_list.php" class="department-card">
                        <img class="department-card_img" src="./custom/images/products/living/bg-2.jpg" alt="#">
                        <div class="department-card_name">Phòng Khách</div>
                    </a>
                    <ul class="topic-text-list">
                        <li class="topic-text-list_item">
                            <a href="product_list.php" class="topic-text-list_item-link">Sofa</a>
                        </li>
                        <li class="topic-text-list_item">
                            <a href="product_list.php" class="topic-text-list_item-link">Ghế bành (Armchair)</a>
                        </li>
                        <li class="topic-text-list_item">
                            <a href="product_list.php" class="topic-text-list_item-link">Bàn Coffee</a>
                        </li>
                        <li class="topic-text-list_item">
                            <a href="product_list.php" class="topic-text-list_item-link">Tấm thảm</a>
                        </li>
                        <li class="topic-text-list_item">
                            <a href="product_list.php" class="topic-text-list_item-link">Kệ tủ</a>
                        </li>
                        <li class="topic-text-list_item">
                            <a href="product_list.php" class="topic-text-list_item-link" style="font-weight: bold;">Tất cả sản phẩm > </a>
                        </li>
                    </ul>
                </div>
                <div class="department-link">
                    <a href="#" class="department-card" >
                        <img class="department-card_img" src="./custom/images/products/office/bg-1.jpg" alt="#" >
                        <div class="department-card_name">Phòng Làm việc</div>
                    </a>
                    <ul class="topic-text-list">
                        <li class="topic-text-list_item">
                            <a href="" class="topic-text-list_item-link">Bàn làm việc</a>
                        </li>
                        <li class="topic-text-list_item">
                            <a href="" class="topic-text-list_item-link">Kệ sách</a>
                        </li>
                        <li class="topic-text-list_item">
                            <a href="" class="topic-text-list_item-link">Ghế văn phòng</a>
                        </li>
                        <li class="topic-text-list_item">
                            <a href="" class="topic-text-list_item-link">Tủ hồ sơ</a>
                        </li>
                        <li class="topic-text-list_item">
                            <a href="" class="topic-text-list_item-link"></a>
                        </li>
                        <li class="topic-text-list_item">
                            <a href="" class="topic-text-list_item-link" style="font-weight: bold;">Tất cả sản phẩm > </a>
                        </li>
                    </ul>
                </div>
                <div class="department-link">
                    <a href="#" class="department-card">
                        <img class="department-card_img" src="./custom/images/products/bed/bg-1.jpg" alt="#">
                        <div class="department-card_name">Phòng Ngủ</div>
                    </a>
                    <ul class="topic-text-list">
                        <li class="topic-text-list_item">
                            <a href="" class="topic-text-list_item-link">Giường ngủ</a>
                        </li>
                        <li class="topic-text-list_item">
                            <a href="" class="topic-text-list_item-link">Tủ đầu giường</a>
                        </li>
                        <li class="topic-text-list_item">
                            <a href="" class="topic-text-list_item-link">Tủ quần áo</a>
                        </li>
                        <li class="topic-text-list_item">
                            <a href="" class="topic-text-list_item-link">Chăn gối</a>
                        </li>
                        <li class="topic-text-list_item">
                            <a href="" class="topic-text-list_item-link">Gương soi</a>
                        </li>
                        <li class="topic-text-list_item">
                            <a href="" class="topic-text-list_item-link" style="font-weight: bold;">Tất cả sản phẩm > </a>
                        </li>
                    </ul>
                </div>
                <div class="department-link">
                    <a href="#" class="department-card">
                        <img class="department-card_img" src="custom/images/products/light/bg-1.jpg" alt="#">
                        <div class="department-card_name">Đèn Trang trí</div>
                    </a>
                    <ul class="topic-text-list">
                        <li class="topic-text-list_item">
                            <a href="" class="topic-text-list_item-link">Đèn trần</a>
                        </li>
                        <li class="topic-text-list_item">
                            <a href="" class="topic-text-list_item-link">Đèn tường</a>
                        </li>
                        <li class="topic-text-list_item">
                            <a href="" class="topic-text-list_item-link">Đèn để bàn</a>
                        </li>
                        <li class="topic-text-list_item">
                            <a href="" class="topic-text-list_item-link">Đèn ngủ</a>
                        </li>
                        <li class="topic-text-list_item">
                            <a href="" class="topic-text-list_item-link">Đèn ngoài trời</a>
                        </li>
                        <li class="topic-text-list_item">
                            <a href="" class="topic-text-list_item-link" style="font-weight: bold;">Tất cả sản phẩm > </a>
                        </li>
                    </ul>
                </div>
                <div class="department-link">
                    <a href="#" class="department-card">
                        <img class="department-card_img" src="custom/images/products/chair_table/bg-1.jpg" alt="#" >
                        <div class="department-card_name">Bàn & Ghế</div>
                    </a>
                    <ul class="topic-text-list">
                        <li class="topic-text-list_item">
                            <a href="" class="topic-text-list_item-link">Bàn ăn</a>
                        </li>
                        <li class="topic-text-list_item">
                            <a href="" class="topic-text-list_item-link">Ghế phòng bếp </a>
                        </li>
                        <li class="topic-text-list_item">
                            <a href="" class="topic-text-list_item-link">Bàn tròn</a>
                        </li>
                        <li class="topic-text-list_item">
                            <a href="" class="topic-text-list_item-link">Ghế lười</a>
                        </li>
                        <li class="topic-text-list_item">
                            <a href="" class="topic-text-list_item-link">Ghế gỗ</a>
                        </li>
                        <li class="topic-text-list_item">
                            <a href="" class="topic-text-list_item-link" style="font-weight: bold;">Tất cả sản phẩm > </a>
                        </li>
                    </ul>
                </div>
                <div class="department-link">
                    <a href="#" class="department-card">
                        <img class="department-card_img" src="custom/images/products/decor/bg-1.jpg" alt="#">
                        <div class="department-card_name">Đồ trang trí</div>
                    </a>
                    <ul class="topic-text-list">
                        <li class="topic-text-list_item">
                            <a href="" class="topic-text-list_item-link">Đèn led</a>
                        </li>
                        <li class="topic-text-list_item">
                            <a href="" class="topic-text-list_item-link">Giấy dán tường</a>
                        </li>
                        <li class="topic-text-list_item">
                            <a href="" class="topic-text-list_item-link">Thảm lót chân</a>
                        </li>
                        <li class="topic-text-list_item">
                            <a href="" class="topic-text-list_item-link">Cây cảnh</a>
                        </li>
                        <li class="topic-text-list_item">
                            <a href="" class="topic-text-list_item-link">Rèm cửa</a>
                        </li>
                        <li class="topic-text-list_item">
                            <a href="" class="topic-text-list_item-link" style="font-weight: bold;">Tất cả sản phẩm > </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="img-sale">
                <img src="./custom/images/bg-3.jpg" alt="" class="img-item container" style="height:100px">
            </div>
            <div class="best-seller">
                <h2 class="best-seller_header">Best Sellers</h2>
                <div class="best-seller_card">
                    <ul class="best-seller_list">
                        <li class="best-seller_item">
                            <a href="#" class="best-seller_link">
                                <img src="./custom/images/products/living/A001-1.jpg" alt="" class="best-seller_img">
                                <div class="best-seller_link-name">Bàn coffee Madison-gỗ tự nhiên</div>
                                <div class="best-seller_price">
                                    <div class="price-old">1.600.000đ</div>
                                    <div class="price-new">1.199.000đ</div>
                                </div>
                            </a>
                        </li>
                        <li class="best-seller_item">
                            <a href="#" class="best-seller_link">
                                <img src="./custom/images/products/chair_table/E101.jpg" alt="" class="best-seller_img">
                                <div class="best-seller_link-name">Ghế ăn hiện đại Modrest-sang trọng</div>
                                <div class="best-seller_price">
                                    <div class="price-old">1.400.000đ</div>
                                    <div class="price-new">1.099.000đ</div>
                                </div>
                            </a>
                        </li>
                        <li class="best-seller_item">
                            <a href="#" class="best-seller_link">
                                <img src="./custom/images/products/light/D001.jpg" alt="" class="best-seller_img">
                                <div class="best-seller_link-name">Đèn thanh 3 đèn</div>
                                <div class="best-seller_price">
                                    <div class="price-old">1.200.000đ</div>
                                    <div class="price-new">999.000đ</div>
                                </div>
                            </a>
                        </li>
                        <li class="best-seller_item">
                            <a href="#" class="best-seller_link">
                                <img src="./custom/images/products/chair_table/E001.jpg" alt="" class="best-seller_img">
                                <div class="best-seller_link-name">Bàn kiểu C-Acrylic-Hiện đại</div>
                                <div class="best-seller_price">
                                    <div class="price-old">1.600.000đ</div>
                                    <div class="price-new">1.159.000đ</div>
                                </div>
                            </a>
                        </li>
                        <li class="best-seller_item">
                            <a href="#" class="best-seller_link">
                                <img src="./custom/images/products/decor/F001.jpg" alt="" class="best-seller_img">
                                <div class="best-seller_link-name">Gương gắn tường đèn LED-Tiết kiệm điện</div>
                                <div class="best-seller_price">
                                    <div class="price-old">1.500.000đ</div>
                                    <div class="price-new">1.119.000đ</div>
                                </div>
                            </a>
                        </li>
                        <li class="best-seller_item">
                            <a href="#" class="best-seller_link">
                                <img src="./custom/images/products/office/C001.jpg" alt="" class="best-seller_img">
                                <div class="best-seller_link-name">Kệ sách Coaster Cappuccinoo</div>
                                <div class="best-seller_price">
                                    <div class="price-old">1.800.000đ</div>
                                    <div class="price-new">1.599.000đ</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="recommended-products" >
                <h2 class="recommended-products_header best-seller_header">Recommended Products</h2>
                <div class="recommended-products_card">
                    <ul class="recommended-products_list">
                        <li class="recommended-products_item">
                            <a href="#" class="recommended-products_link">
                                <img src="./custom/images/products/living/A101-1.jpg" alt="" class="recommended-products_img best-seller_img" onload="rate_star('A101-1',4.4,39)">
                                <div class="recommended-products_link-name">Sutton Sofa, Green Apple  </div>
                                <div class="recommended-products_price ">15.030.000đ</div>
                                <div class="products-review" id="A101-1">
                                </div>
                            </a>
                        </li>
                        <li class="recommended-products_item">
                            <a href="#" class="recommended-products_link">
                                <img src="./custom/images/products/living/A102-1.jpg" alt="" class="recommended-products_img best-seller_img" onload="rate_star('A102-1',4.0,56)">
                                <div class="recommended-products_link-name">Logan Apartment Sofa, Chicago Blue</div>
                                <div class="recommended-products_price ">13.840.000đ </div>
                                <div class="products-review" id="A102-1">
                                </div>
                            </a>
                        </li>
                        <li class="recommended-products_item">
                            <a href="#" class="recommended-products_link">
                                <img src="./custom/images/products/living/A001-1.jpg" alt="" class="recommended-products_img best-seller_img" onload="rate_star('A001-1',4.5,69)">
                                <div class="recommended-products_link-name">Bàn coffee Madison-gỗ tự nhiên</div>
                                <div class="recommended-products_price ">1.999.000đ </div>
                                <div class="products-review" id="A001-1">
                                </div>
                            </a>
                        </li>
                        <li class="recommended-products_item">
                            <a href="#" class="recommended-products_link">
                                <img src="./custom/images/products/living/A104-1.jpg" alt="" class="recommended-products_img best-seller_img" onload="rate_star('A104-1',4.5,102)">
                                <div class="recommended-products_link-name">Fabric Club Chair, Wheat</div>
                                <div class="recommended-products_price ">1.700.000đ </div>
                                <div class="products-review" id="A104-1">
                                </div>
                            </a>
                        </li>
                        <li class="recommended-products_item">
                            <a href="#" class="recommended-products_link">
                                <img src="./custom/images/products/living/A205-1.jpg" alt="" class="recommended-products_img best-seller_img" onload="rate_star('A205-1',4.5,109)">
                                <div class="recommended-products_link-name">Rockwell Chair, Orange</div>
                                <div class="recommended-products_price ">4.400.000đ </div>
                                <div class="products-review" id="A205-1">
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container">
            Footer
        </div>
    </footer>
</body>
</html>