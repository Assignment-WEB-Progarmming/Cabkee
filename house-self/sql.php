<?php
    $host="localhost";
    $username="root";
    $password="";
    $database="assWeb";
    $connect = mysqli_connect($host, $username, $password, $database);
    mysqli_set_charset($connect, "utf8");
    if($connect->connect_error) {
        var_dump($connect->connect_error);
        die();
    }

    /* Tạo bảng db_product */

    $query = "
    CREATE TABLE db_product (
        id int not null primary key auto_increment,
        id_sp varchar(10),
        title varchar(100),
        thumbnail varchar(500),
        price int,
        rate float,
        category varchar(50),
        description varchar(2000),
        color varchar(20),
        special varchar(50)
    );";

    /* Tạo bảng db_category */

    $query .= "
    CREATE TABLE db_category (
        id int not null primary key auto_increment,
        title varchar(100),
        thumbnail varchar(500)
    );";

    /* Tạo bảng db_user */

    $query .= "
    CREATE TABLE db_user (
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        hoTen varchar(50),
        diaChi varchar(500),
        username varchar(50),
        password varchar(50),
        email varchar(100),
        phone varchar(15)
    );";

    /* Tạo bảng db_order */

    $query .= "
    CREATE TABLE db_order (
        id int not null primary key auto_increment,
        idKH int,
        daMua varchar(2000),
        ngayGioMua datetime,
        tongThanhToan int,
        diaChi varchar(500)
    );";

    /* Insert into db_product */

    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color, special) values ('Fabric Reversible Sectional Sofa', '../house-self/custom/images/products/living/A104-1.jpg', '17070000', 'Căn hộ cửa bạn nhỏ chật chội, cửa hàng kinh doanh của bạn không gian bé, nơi làm việc của bạn không có chỗ nằm nghỉ ngơi, với chiếc Sofa tiện ích có đủ yếu tố và chế độ để phục vụ những nhu cầu thiết yếu của bạn. ', 'A104-1', '4.5', 'Sofa', 'Xám', 'bestSeller');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color, special) values ('Logan Apartment Sofa', '../house-self/custom/images/products/living/A102-1.jpg', '13840000', 'Ghế sofa thông minh thiết kế phần tựa lưng ngả được ra để làm giường cá nhân hay nhà có khách. ', 'A102-1', '4.5', 'Sofa', 'Chicago Blue', 'recommend');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color, special) values ('Sutton Sofa', '../house-self/custom/images/products/living/A101-1.jpg', '15030000', 'Căn hộ cửa bạn nhỏ chật chội, cửa hàng kinh doanh của bạn không gian bé, nơi làm việc của bạn không có chỗ nằm nghỉ ngơi, với chiếc Sofa tiện ích có đủ yếu tố và chế độ để phục vụ những nhu cầu thiết yếu của bạn. ', 'A101-1', '4.5', 'Sofa', 'Green Apple', '');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color, special) values ('Tokio Maxi Sectional Sofa', '../house-self/custom/images/products/living/A105-1.jpg', '28870000', 'Đệm mềm và thoải mái, ngồi lâu ko bị nóng hay bí lưng hay mỏi người. Thiết kế góc nghiêng phù hợp với đường cong của cơ thể giúp giảm áp lực tối đa đến cột sống. ', 'A105-1', '3.5', 'Sofa', 'Left Corner', 'bestSeller');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color, special) values ('Century Accent Side Chair', '../house-self/custom/images/products/living/A201-1.jpg', '2610000', 'Một chiếc ghế tựa bọc nhỏ gọn, sang trọng. Phù hợp với nhiều không gian ', 'A201-1', '5', 'Ghế bành', 'Grey', '');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color, special) values ('Grand Accent Chair', '../house-self/custom/images/products/living/A203-1.jpg', '1180000', 'Hãy tìm sự bổ sung hoàn hảo cho trang trí nhà của bạn với chiếc ghế nệm Astoria Grand đầy phong cách này. Món đồ nội thất đa năng này mang đến cho bạn cảm giác thoải mái như một chiếc ghế dài nhưng với phần lưng cao của một chiếc ghế thông thường. ', 'A203-1', '4.5', 'Ghế bành', 'Grey', '');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color, special) values ('Julian Velvet Chair', '../house-self/custom/images/products/living/A204-1.jpg', '1400000', 'Bộ sưu tập Julian của Nội thất Meridian. Có lớp nhung bọc đẹp mắt với phần đế bằng thép không gỉ mạ crom sáng bóng. Sử dụng chất liệu nhung chất lượng cao nhất, bộ sản phẩm này chắc chắn sẽ khiến khách của bạn choáng váng. ', 'A204-1', '5', 'Ghế bành', 'Pink, Gold base', 'recommend');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color, special) values ('Rockwell Chair', '../house-self/custom/images/products/living/A205-1.jpg', '5470000', 'Thoải mái nhưng vẫn cực kỳ phong cách, Ghế LumiSource Rockwell là sản phẩm hoàn hảo để tạo điểm nhấn cho bất kỳ khu vực nào. Đa năng và chắc chắn, chiếc ghế lấy cảm hứng từ phong cách cổ điển. ', 'A205-1', '3.5', 'Ghế bành', 'Orange', 'bestSeller');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color, special) values ('Coffee Madison Table', '../house-self/custom/images/products/living/A001-1.jpg', '1199000', 'Thêm phong cách thanh lịch cho không gian sống của bạn với thiết kế Old World của bàn cà phê Madison của Crown Mark. Chiếc bàn được chế tác tinh xảo này có phần đầu bằng kính và phần kệ phía dưới cùng với các chi tiết cuộn trên chân. Chiếc bàn này là một sự bổ sung thông minh cho trang trí nhà của bạn. ', 'A001-1', '5', 'Bàn coffee', 'Original', '');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color, special) values ('Faux Wood Circular Coffee Table', '../house-self/custom/images/products/living/A003-1.jpg', '1680000', 'Một thiết kế bàn cà phê vượt thời gian. Bạn sẽ đánh giá cao các chi tiết thông minh ở đây như phần cắt chứ không phải phần chân, và mặt bàn có viền. Chắc chắn sẽ làm bừng sáng phòng khách của bạn và khơi gợi những lời khen ngợi từ khách của bạn. ', 'A003-1', '4.5', 'Bàn coffee', 'Original', 'recommend');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color, special) values ('Stainless Steel Round Coffee Table', '../house-self/custom/images/products/living/A004-1.jpg', '1550000', ' ', 'A004-1', 'Chiếc bàn được chế tác tinh xảo này có phần đầu bằng kính và phần kệ phía dưới cùng với các chi tiết cuộn trên chân. Chiếc bàn này là một sự bổ sung thông minh cho trang trí nhà của bạn.', 'Bàn coffee', 'Original', 'bestSeller');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color, special) values ('Stylist Red Oval Shape Coffee Table', '../house-self/custom/images/products/living/A005-1.jpg', '3920000', 'Bàn cà phê hình bầu dục màu đen này có phần trên nhìn xuyên qua cho thấy toàn bộ phần đế độc đáo. Kính dễ dàng đựng đồ ăn thức uống mà không có nguy cơ bị ố. Sử dụng bàn mặt kính này cho gia đình hoặc doanh nghiệp, cho khu vực ăn uống thân mật, không gian họp, bàn cà phê, bàn làm việc hoặc trước TV. ', 'A005-1', '4', 'Bàn coffee', 'Red-Original', '');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color, special) values ('Waverly Sun Rug', '../house-self/custom/images/products/living/A301-1.jpg', '222000', ' ', 'A301-1', '4.5', 'Thảm trải sàn', '', '');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color, special) values ('Safavieh Hudson Rug', '../house-self/custom/images/products/living/A302-1.jpg', '573000', ' ', 'A303-1', '3.5', 'Thảm trải sàn', '', 'recommend');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color, special) values ('Lexie Ombre Rug', '../house-self/custom/images/products/living/A304-1.jpg', '268000', '', 'A304-1', '4.5', 'Thảm trải sàn', 'Xám', 'bestSeller');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color, special) values ('Hand Carved Stones Rug', '../house-self/custom/images/products/living/A305-1.jpg', '463000', '', 'A305-1', '3.5', 'Thảm trải sàn', 'Brow', '');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color, special) values ('Spanish Bay Console', '../house-self/custom/images/products/living/A401-1.jpg', '15910000', '', 'A401-1', '4.5', 'Kệ tủ', 'Grey', 'recommend');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color, special) values ('Turnberry Console', '../house-self/custom/images/products/living/A402-1.jpg', '18990000', '', 'A402-1', '4', 'Kệ tủ', 'Original', '');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color, special) values ('Modrest Mali TV stand', '../house-self/custom/images/products/living/A403-1.jpg', '13990000', '', 'A403-1', '4.5', 'Kệ tủ', 'Grey', 'bestSeller');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color, special) values ('Musical Console', '../house-self/custom/images/products/living/A405-1.jpg', '10890000', '', 'A405-1', '4.5', 'Kệ tủ', 'Original', '');";
    
    /* Insert into db_category */

    $query .= "
    insert into db_category(title, thumbnail) values ('Sofa', '../house-self/custom/images/products/living/bg-sofa-1.jpg');";
    $query .= "
    insert into db_category(title, thumbnail) values ('Ghế bành', '../house-self/custom/images/products/living/bg-armchair-1.jpg');";
    $query .= "
    insert into db_category(title, thumbnail) values ('Bàn coffee', '../house-self/custom/images/products/living/bg-cf-table-2.jpg');";
    $query .= "
    insert into db_category(title, thumbnail) values ('Thảm trải sàn', '../house-self/custom/images/products/living/bg-rug-2.jpg');";
    $query .= "
    insert into db_category(title, thumbnail) values ('Kệ tủ', '../house-self/custom/images/products/living/bg-console-1.jpg');";

    mysqli_multi_query($connect, $query);

    //dong ket noi
    $connect->close();
?>