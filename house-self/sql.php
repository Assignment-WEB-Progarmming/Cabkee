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
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color, special) values ('Fabric Club Chair, Wheat', 'http://localhost/clone_assweb_2/house-self/house-self/custom/images/products/living/A104-1.jpg', '15030000', 
    'Căn hộ cửa bạn nhỏ chật trội, cửa hàng kinh doanh của bạn không gian bé, nơi làm việc của bạn không có chỗ nằm nghỉ ngơi, với chiếc Sofa tiện ích có đủ yếu tố và chế độ để phục vụ những nhu cầu thiết yếu của bạn. 
    Nếu không gian của bạn không đủ cho 1 bộ bàn ghế và 1 chiếc giường hoặc nơi làm việc cần có 1 chiếc giường để nghỉ ngơi. Nay đã có giường Sofa gấp gọn thành ghế. 
    Khi bạn cần nằm nghỉ ngơi chỉ cần trảu ra thành giường,khi bạn không nằm nghỉ ngơi thì bạn có thể gấp gọn thành ghế ngồi. 
    Chất liệu: Ghế bọc nhung polyester bền bỉ ( thoáng khí, không bóng, không bám bụi. Đệm mềm và thoải mái, ngồi lâu ko bị nóng hay bí lưng hay mỏi người. 
    Thiết kế góc nghiêng phù hợp với đường cong của cơ thể giúp giảm áp lực tối đa đến cột sống. 
    Ghế sofa thông minh thiết kế phần tựa lưng ngả được ra để làm giường cá nhân hay nhà có khách', 
    'A104-1', '4.5', 'Sofa', 'Xám', 'bestSeller');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color, special) values ('Fabric Club Chair, Wheat', 'http://localhost/clone_assweb_2/house-self/house-self/custom/images/products/living/A102-1.jpg', '17070000', 'Căn hộ cửa bạn nhỏ chật trội, cửa hàng kinh doanh của bạn không gian bé, nơi làm việc của bạn không có chỗ nằm nghỉ ngơi, với chiếc Sofa tiện ích có đủ yếu tố và chế độ để phục vụ những nhu cầu thiết yếu của bạn. Nếu không gian của bạn không đủ cho 1 bộ bàn ghế và 1 chiếc giường hoặc nơi làm việc cần có 1 chiếc giường để nghỉ ngơi. Nay đã có giường Sofa gấp gọn thành ghế. Khi bạn cần nằm nghỉ ngơi chỉ cần trảu ra thành giường,khi bạn không nằm nghỉ ngơi thì bạn có thể gấp gọn thành ghế ngồi. Chất liệu: Ghế bọc nhung polyester bền bỉ ( thoáng khí, không bóng, không bám bụi. Đệm mềm và thoải mái, ngồi lâu ko bị nóng hay bí lưng hay mỏi người. Thiết kế góc nghiêng phù hợp với đường cong của cơ thể giúp giảm áp lực tối đa đến cột sống. Ghế sofa thông minh thiết kế phần tựa lưng ngả được ra để làm giường cá nhân hay nhà có khách', 'A102-1', '4.5', 'Sofa', 'Xám', 'recommend');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color, special) values ('Fabric Club Chair, Wheat', 'http://localhost/clone_assweb_2/house-self/house-self/custom/images/products/living/A101-1.jpg', '13840000', 'Căn hộ cửa bạn nhỏ chật trội, cửa hàng kinh doanh của bạn không gian bé, nơi làm việc của bạn không có chỗ nằm nghỉ ngơi, với chiếc Sofa tiện ích có đủ yếu tố và chế độ để phục vụ những nhu cầu thiết yếu của bạn. Nếu không gian của bạn không đủ cho 1 bộ bàn ghế và 1 chiếc giường hoặc nơi làm việc cần có 1 chiếc giường để nghỉ ngơi. Nay đã có giường Sofa gấp gọn thành ghế. Khi bạn cần nằm nghỉ ngơi chỉ cần trảu ra thành giường,khi bạn không nằm nghỉ ngơi thì bạn có thể gấp gọn thành ghế ngồi. Chất liệu: Ghế bọc nhung polyester bền bỉ ( thoáng khí, không bóng, không bám bụi. Đệm mềm và thoải mái, ngồi lâu ko bị nóng hay bí lưng hay mỏi người. Thiết kế góc nghiêng phù hợp với đường cong của cơ thể giúp giảm áp lực tối đa đến cột sống. Ghế sofa thông minh thiết kế phần tựa lưng ngả được ra để làm giường cá nhân hay nhà có khách', 'A101-1', '4.5', 'Sofa', 'Xám', '');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color, special) values ('Fabric Club Chair, Wheat', 'http://localhost/clone_assweb_2/house-self/house-self/custom/images/products/living/A105-1.jpg', '28870000', 'Căn hộ cửa bạn nhỏ chật trội, cửa hàng kinh doanh của bạn không gian bé, nơi làm việc của bạn không có chỗ nằm nghỉ ngơi, với chiếc Sofa tiện ích có đủ yếu tố và chế độ để phục vụ những nhu cầu thiết yếu của bạn. Nếu không gian của bạn không đủ cho 1 bộ bàn ghế và 1 chiếc giường hoặc nơi làm việc cần có 1 chiếc giường để nghỉ ngơi. Nay đã có giường Sofa gấp gọn thành ghế. Khi bạn cần nằm nghỉ ngơi chỉ cần trảu ra thành giường,khi bạn không nằm nghỉ ngơi thì bạn có thể gấp gọn thành ghế ngồi. Chất liệu: Ghế bọc nhung polyester bền bỉ ( thoáng khí, không bóng, không bám bụi. Đệm mềm và thoải mái, ngồi lâu ko bị nóng hay bí lưng hay mỏi người. Thiết kế góc nghiêng phù hợp với đường cong của cơ thể giúp giảm áp lực tối đa đến cột sống. Ghế sofa thông minh thiết kế phần tựa lưng ngả được ra để làm giường cá nhân hay nhà có khách', 'A105-1', '3.5', 'Sofa', 'Xám', 'bestSeller');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color, special) values ('Fabric Club Chair, Wheat', 'http://localhost/clone_assweb_2/house-self/house-self/custom/images/products/living/A201-1.jpg', '15030000', 'Căn hộ cửa bạn nhỏ chật trội, cửa hàng kinh doanh của bạn không gian bé, nơi làm việc của bạn không có chỗ nằm nghỉ ngơi, với chiếc Sofa tiện ích có đủ yếu tố và chế độ để phục vụ những nhu cầu thiết yếu của bạn. Nếu không gian của bạn không đủ cho 1 bộ bàn ghế và 1 chiếc giường hoặc nơi làm việc cần có 1 chiếc giường để nghỉ ngơi. Nay đã có giường Sofa gấp gọn thành ghế. Khi bạn cần nằm nghỉ ngơi chỉ cần trảu ra thành giường,khi bạn không nằm nghỉ ngơi thì bạn có thể gấp gọn thành ghế ngồi. Chất liệu: Ghế bọc nhung polyester bền bỉ ( thoáng khí, không bóng, không bám bụi. Đệm mềm và thoải mái, ngồi lâu ko bị nóng hay bí lưng hay mỏi người. Thiết kế góc nghiêng phù hợp với đường cong của cơ thể giúp giảm áp lực tối đa đến cột sống. Ghế sofa thông minh thiết kế phần tựa lưng ngả được ra để làm giường cá nhân hay nhà có khách', 'A201-1', '5', 'Armchair', 'Xám', '');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color, special) values ('Fabric Club Chair, Wheat', 'http://localhost/clone_assweb_2/house-self/house-self/custom/images/products/living/A203-1.jpg', '17070000', 'Căn hộ cửa bạn nhỏ chật trội, cửa hàng kinh doanh của bạn không gian bé, nơi làm việc của bạn không có chỗ nằm nghỉ ngơi, với chiếc Sofa tiện ích có đủ yếu tố và chế độ để phục vụ những nhu cầu thiết yếu của bạn. Nếu không gian của bạn không đủ cho 1 bộ bàn ghế và 1 chiếc giường hoặc nơi làm việc cần có 1 chiếc giường để nghỉ ngơi. Nay đã có giường Sofa gấp gọn thành ghế. Khi bạn cần nằm nghỉ ngơi chỉ cần trảu ra thành giường,khi bạn không nằm nghỉ ngơi thì bạn có thể gấp gọn thành ghế ngồi. Chất liệu: Ghế bọc nhung polyester bền bỉ ( thoáng khí, không bóng, không bám bụi. Đệm mềm và thoải mái, ngồi lâu ko bị nóng hay bí lưng hay mỏi người. Thiết kế góc nghiêng phù hợp với đường cong của cơ thể giúp giảm áp lực tối đa đến cột sống. Ghế sofa thông minh thiết kế phần tựa lưng ngả được ra để làm giường cá nhân hay nhà có khách', 'A203-1', '4.5', 'Armchair', 'Xám', '');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color, special) values ('Fabric Club Chair, Wheat', 'http://localhost/clone_assweb_2/house-self/house-self/custom/images/products/living/A204-1.jpg', '13840000', 'Căn hộ cửa bạn nhỏ chật trội, cửa hàng kinh doanh của bạn không gian bé, nơi làm việc của bạn không có chỗ nằm nghỉ ngơi, với chiếc Sofa tiện ích có đủ yếu tố và chế độ để phục vụ những nhu cầu thiết yếu của bạn. Nếu không gian của bạn không đủ cho 1 bộ bàn ghế và 1 chiếc giường hoặc nơi làm việc cần có 1 chiếc giường để nghỉ ngơi. Nay đã có giường Sofa gấp gọn thành ghế. Khi bạn cần nằm nghỉ ngơi chỉ cần trảu ra thành giường,khi bạn không nằm nghỉ ngơi thì bạn có thể gấp gọn thành ghế ngồi. Chất liệu: Ghế bọc nhung polyester bền bỉ ( thoáng khí, không bóng, không bám bụi. Đệm mềm và thoải mái, ngồi lâu ko bị nóng hay bí lưng hay mỏi người. Thiết kế góc nghiêng phù hợp với đường cong của cơ thể giúp giảm áp lực tối đa đến cột sống. Ghế sofa thông minh thiết kế phần tựa lưng ngả được ra để làm giường cá nhân hay nhà có khách', 'A204-1', '5', 'Armchair', 'Xám', 'recommend');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color, special) values ('Fabric Club Chair, Wheat', 'http://localhost/clone_assweb_2/house-self/house-self/custom/images/products/living/A205-1.jpg', '28870000', 'Căn hộ cửa bạn nhỏ chật trội, cửa hàng kinh doanh của bạn không gian bé, nơi làm việc của bạn không có chỗ nằm nghỉ ngơi, với chiếc Sofa tiện ích có đủ yếu tố và chế độ để phục vụ những nhu cầu thiết yếu của bạn. Nếu không gian của bạn không đủ cho 1 bộ bàn ghế và 1 chiếc giường hoặc nơi làm việc cần có 1 chiếc giường để nghỉ ngơi. Nay đã có giường Sofa gấp gọn thành ghế. Khi bạn cần nằm nghỉ ngơi chỉ cần trảu ra thành giường,khi bạn không nằm nghỉ ngơi thì bạn có thể gấp gọn thành ghế ngồi. Chất liệu: Ghế bọc nhung polyester bền bỉ ( thoáng khí, không bóng, không bám bụi. Đệm mềm và thoải mái, ngồi lâu ko bị nóng hay bí lưng hay mỏi người. Thiết kế góc nghiêng phù hợp với đường cong của cơ thể giúp giảm áp lực tối đa đến cột sống. Ghế sofa thông minh thiết kế phần tựa lưng ngả được ra để làm giường cá nhân hay nhà có khách', 'A205-1', '3.5', 'Armchair', 'Xám', 'bestSeller');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color, special) values ('Bàn coffee Madison-gỗ tự nhiên', 'http://localhost/clone_assweb_2/house-self/house-self/custom/images/products/living/A001-1.jpg', '15030000', 'Căn hộ cửa bạn nhỏ chật trội, cửa hàng kinh doanh của bạn không gian bé, nơi làm việc của bạn không có chỗ nằm nghỉ ngơi, với chiếc Sofa tiện ích có đủ yếu tố và chế độ để phục vụ những nhu cầu thiết yếu của bạn. Nếu không gian của bạn không đủ cho 1 bộ bàn ghế và 1 chiếc giường hoặc nơi làm việc cần có 1 chiếc giường để nghỉ ngơi. Nay đã có giường Sofa gấp gọn thành ghế. Khi bạn cần nằm nghỉ ngơi chỉ cần trảu ra thành giường,khi bạn không nằm nghỉ ngơi thì bạn có thể gấp gọn thành ghế ngồi. Chất liệu: Ghế bọc nhung polyester bền bỉ ( thoáng khí, không bóng, không bám bụi. Đệm mềm và thoải mái, ngồi lâu ko bị nóng hay bí lưng hay mỏi người. Thiết kế góc nghiêng phù hợp với đường cong của cơ thể giúp giảm áp lực tối đa đến cột sống. Ghế sofa thông minh thiết kế phần tựa lưng ngả được ra để làm giường cá nhân hay nhà có khách', 'A001-1', '5', 'Table', 'Xám', '');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color, special) values ('Fabric Club Chair, Wheat', 'http://localhost/clone_assweb_2/house-self/house-self/custom/images/products/living/A003-1.jpg', '17070000', 'Căn hộ cửa bạn nhỏ chật trội, cửa hàng kinh doanh của bạn không gian bé, nơi làm việc của bạn không có chỗ nằm nghỉ ngơi, với chiếc Sofa tiện ích có đủ yếu tố và chế độ để phục vụ những nhu cầu thiết yếu của bạn. Nếu không gian của bạn không đủ cho 1 bộ bàn ghế và 1 chiếc giường hoặc nơi làm việc cần có 1 chiếc giường để nghỉ ngơi. Nay đã có giường Sofa gấp gọn thành ghế. Khi bạn cần nằm nghỉ ngơi chỉ cần trảu ra thành giường,khi bạn không nằm nghỉ ngơi thì bạn có thể gấp gọn thành ghế ngồi. Chất liệu: Ghế bọc nhung polyester bền bỉ ( thoáng khí, không bóng, không bám bụi. Đệm mềm và thoải mái, ngồi lâu ko bị nóng hay bí lưng hay mỏi người. Thiết kế góc nghiêng phù hợp với đường cong của cơ thể giúp giảm áp lực tối đa đến cột sống. Ghế sofa thông minh thiết kế phần tựa lưng ngả được ra để làm giường cá nhân hay nhà có khách', 'A003-1', '4.5', 'Table', 'Xám', 'recommend');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color, special) values ('Fabric Club Chair, Wheat', 'http://localhost/clone_assweb_2/house-self/house-self/custom/images/products/living/A004-1.jpg', '13840000', 'Căn hộ cửa bạn nhỏ chật trội, cửa hàng kinh doanh của bạn không gian bé, nơi làm việc của bạn không có chỗ nằm nghỉ ngơi, với chiếc Sofa tiện ích có đủ yếu tố và chế độ để phục vụ những nhu cầu thiết yếu của bạn. Nếu không gian của bạn không đủ cho 1 bộ bàn ghế và 1 chiếc giường hoặc nơi làm việc cần có 1 chiếc giường để nghỉ ngơi. Nay đã có giường Sofa gấp gọn thành ghế. Khi bạn cần nằm nghỉ ngơi chỉ cần trảu ra thành giường,khi bạn không nằm nghỉ ngơi thì bạn có thể gấp gọn thành ghế ngồi. Chất liệu: Ghế bọc nhung polyester bền bỉ ( thoáng khí, không bóng, không bám bụi. Đệm mềm và thoải mái, ngồi lâu ko bị nóng hay bí lưng hay mỏi người. Thiết kế góc nghiêng phù hợp với đường cong của cơ thể giúp giảm áp lực tối đa đến cột sống. Ghế sofa thông minh thiết kế phần tựa lưng ngả được ra để làm giường cá nhân hay nhà có khách', 'A004-1', '3', 'Table', 'Xám', 'bestSeller');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color, special) values ('Fabric Club Chair, Wheat', 'http://localhost/clone_assweb_2/house-self/house-self/custom/images/products/living/A005-1.jpg', '28870000', 'Căn hộ cửa bạn nhỏ chật trội, cửa hàng kinh doanh của bạn không gian bé, nơi làm việc của bạn không có chỗ nằm nghỉ ngơi, với chiếc Sofa tiện ích có đủ yếu tố và chế độ để phục vụ những nhu cầu thiết yếu của bạn. Nếu không gian của bạn không đủ cho 1 bộ bàn ghế và 1 chiếc giường hoặc nơi làm việc cần có 1 chiếc giường để nghỉ ngơi. Nay đã có giường Sofa gấp gọn thành ghế. Khi bạn cần nằm nghỉ ngơi chỉ cần trảu ra thành giường,khi bạn không nằm nghỉ ngơi thì bạn có thể gấp gọn thành ghế ngồi. Chất liệu: Ghế bọc nhung polyester bền bỉ ( thoáng khí, không bóng, không bám bụi. Đệm mềm và thoải mái, ngồi lâu ko bị nóng hay bí lưng hay mỏi người. Thiết kế góc nghiêng phù hợp với đường cong của cơ thể giúp giảm áp lực tối đa đến cột sống. Ghế sofa thông minh thiết kế phần tựa lưng ngả được ra để làm giường cá nhân hay nhà có khách', 'A005-1', '4', 'Table', 'Xám', '');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color, special) values ('Fabric Club Chair, Wheat', 'http://localhost/clone_assweb_2/house-self/house-self/custom/images/products/living/A301-1.jpg', '15030000', 'Căn hộ cửa bạn nhỏ chật trội, cửa hàng kinh doanh của bạn không gian bé, nơi làm việc của bạn không có chỗ nằm nghỉ ngơi, với chiếc Sofa tiện ích có đủ yếu tố và chế độ để phục vụ những nhu cầu thiết yếu của bạn. Nếu không gian của bạn không đủ cho 1 bộ bàn ghế và 1 chiếc giường hoặc nơi làm việc cần có 1 chiếc giường để nghỉ ngơi. Nay đã có giường Sofa gấp gọn thành ghế. Khi bạn cần nằm nghỉ ngơi chỉ cần trảu ra thành giường,khi bạn không nằm nghỉ ngơi thì bạn có thể gấp gọn thành ghế ngồi. Chất liệu: Ghế bọc nhung polyester bền bỉ ( thoáng khí, không bóng, không bám bụi. Đệm mềm và thoải mái, ngồi lâu ko bị nóng hay bí lưng hay mỏi người. Thiết kế góc nghiêng phù hợp với đường cong của cơ thể giúp giảm áp lực tối đa đến cột sống. Ghế sofa thông minh thiết kế phần tựa lưng ngả được ra để làm giường cá nhân hay nhà có khách', 'A301-1', '4.5', 'Carpet', 'Xám', '');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color, special) values ('Fabric Club Chair, Wheat', 'http://localhost/clone_assweb_2/house-self/house-self/custom/images/products/living/A303-1.jpg', '17070000', 'Căn hộ cửa bạn nhỏ chật trội, cửa hàng kinh doanh của bạn không gian bé, nơi làm việc của bạn không có chỗ nằm nghỉ ngơi, với chiếc Sofa tiện ích có đủ yếu tố và chế độ để phục vụ những nhu cầu thiết yếu của bạn. Nếu không gian của bạn không đủ cho 1 bộ bàn ghế và 1 chiếc giường hoặc nơi làm việc cần có 1 chiếc giường để nghỉ ngơi. Nay đã có giường Sofa gấp gọn thành ghế. Khi bạn cần nằm nghỉ ngơi chỉ cần trảu ra thành giường,khi bạn không nằm nghỉ ngơi thì bạn có thể gấp gọn thành ghế ngồi. Chất liệu: Ghế bọc nhung polyester bền bỉ ( thoáng khí, không bóng, không bám bụi. Đệm mềm và thoải mái, ngồi lâu ko bị nóng hay bí lưng hay mỏi người. Thiết kế góc nghiêng phù hợp với đường cong của cơ thể giúp giảm áp lực tối đa đến cột sống. Ghế sofa thông minh thiết kế phần tựa lưng ngả được ra để làm giường cá nhân hay nhà có khách', 'A303-1', '3.5', 'Carpet', 'Xám', 'recommend');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color, special) values ('Fabric Club Chair, Wheat', 'http://localhost/clone_assweb_2/house-self/house-self/custom/images/products/living/A304-1.jpg', '13840000', 'Căn hộ cửa bạn nhỏ chật trội, cửa hàng kinh doanh của bạn không gian bé, nơi làm việc của bạn không có chỗ nằm nghỉ ngơi, với chiếc Sofa tiện ích có đủ yếu tố và chế độ để phục vụ những nhu cầu thiết yếu của bạn. Nếu không gian của bạn không đủ cho 1 bộ bàn ghế và 1 chiếc giường hoặc nơi làm việc cần có 1 chiếc giường để nghỉ ngơi. Nay đã có giường Sofa gấp gọn thành ghế. Khi bạn cần nằm nghỉ ngơi chỉ cần trảu ra thành giường,khi bạn không nằm nghỉ ngơi thì bạn có thể gấp gọn thành ghế ngồi. Chất liệu: Ghế bọc nhung polyester bền bỉ ( thoáng khí, không bóng, không bám bụi. Đệm mềm và thoải mái, ngồi lâu ko bị nóng hay bí lưng hay mỏi người. Thiết kế góc nghiêng phù hợp với đường cong của cơ thể giúp giảm áp lực tối đa đến cột sống. Ghế sofa thông minh thiết kế phần tựa lưng ngả được ra để làm giường cá nhân hay nhà có khách', 'A304-1', '4.5', 'Carpet', 'Xám', 'bestSeller');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color, special) values ('Fabric Club Chair, Wheat', 'http://localhost/clone_assweb_2/house-self/house-self/custom/images/products/living/A305-1.jpg', '28870000', 'Căn hộ cửa bạn nhỏ chật trội, cửa hàng kinh doanh của bạn không gian bé, nơi làm việc của bạn không có chỗ nằm nghỉ ngơi, với chiếc Sofa tiện ích có đủ yếu tố và chế độ để phục vụ những nhu cầu thiết yếu của bạn. Nếu không gian của bạn không đủ cho 1 bộ bàn ghế và 1 chiếc giường hoặc nơi làm việc cần có 1 chiếc giường để nghỉ ngơi. Nay đã có giường Sofa gấp gọn thành ghế. Khi bạn cần nằm nghỉ ngơi chỉ cần trảu ra thành giường,khi bạn không nằm nghỉ ngơi thì bạn có thể gấp gọn thành ghế ngồi. Chất liệu: Ghế bọc nhung polyester bền bỉ ( thoáng khí, không bóng, không bám bụi. Đệm mềm và thoải mái, ngồi lâu ko bị nóng hay bí lưng hay mỏi người. Thiết kế góc nghiêng phù hợp với đường cong của cơ thể giúp giảm áp lực tối đa đến cột sống. Ghế sofa thông minh thiết kế phần tựa lưng ngả được ra để làm giường cá nhân hay nhà có khách', 'A305-1', '5', 'Carpet', 'Xám', '');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color, special) values ('Fabric Club Chair, Wheat', 'http://localhost/clone_assweb_2/house-self/house-self/custom/images/products/living/A401-1.jpg', '15910000', 'Căn hộ cửa bạn nhỏ chật trội, cửa hàng kinh doanh của bạn không gian bé, nơi làm việc của bạn không có chỗ nằm nghỉ ngơi, với chiếc Sofa tiện ích có đủ yếu tố và chế độ để phục vụ những nhu cầu thiết yếu của bạn. Nếu không gian của bạn không đủ cho 1 bộ bàn ghế và 1 chiếc giường hoặc nơi làm việc cần có 1 chiếc giường để nghỉ ngơi. Nay đã có giường Sofa gấp gọn thành ghế. Khi bạn cần nằm nghỉ ngơi chỉ cần trảu ra thành giường,khi bạn không nằm nghỉ ngơi thì bạn có thể gấp gọn thành ghế ngồi. Chất liệu: Ghế bọc nhung polyester bền bỉ ( thoáng khí, không bóng, không bám bụi. Đệm mềm và thoải mái, ngồi lâu ko bị nóng hay bí lưng hay mỏi người. Thiết kế góc nghiêng phù hợp với đường cong của cơ thể giúp giảm áp lực tối đa đến cột sống. Ghế sofa thông minh thiết kế phần tựa lưng ngả được ra để làm giường cá nhân hay nhà có khách', 'A401-1', '4.5', 'Cabinet', 'Xám', 'recommend');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color, special) values ('Fabric Club Chair, Wheat', 'http://localhost/clone_assweb_2/house-self/house-self/custom/images/products/living/A402-1.jpg', '17070000', 'Căn hộ cửa bạn nhỏ chật trội, cửa hàng kinh doanh của bạn không gian bé, nơi làm việc của bạn không có chỗ nằm nghỉ ngơi, với chiếc Sofa tiện ích có đủ yếu tố và chế độ để phục vụ những nhu cầu thiết yếu của bạn. Nếu không gian của bạn không đủ cho 1 bộ bàn ghế và 1 chiếc giường hoặc nơi làm việc cần có 1 chiếc giường để nghỉ ngơi. Nay đã có giường Sofa gấp gọn thành ghế. Khi bạn cần nằm nghỉ ngơi chỉ cần trảu ra thành giường,khi bạn không nằm nghỉ ngơi thì bạn có thể gấp gọn thành ghế ngồi. Chất liệu: Ghế bọc nhung polyester bền bỉ ( thoáng khí, không bóng, không bám bụi. Đệm mềm và thoải mái, ngồi lâu ko bị nóng hay bí lưng hay mỏi người. Thiết kế góc nghiêng phù hợp với đường cong của cơ thể giúp giảm áp lực tối đa đến cột sống. Ghế sofa thông minh thiết kế phần tựa lưng ngả được ra để làm giường cá nhân hay nhà có khách', 'A402-1', '4.5', 'Cabinet', 'Xám', '');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color, special) values ('Fabric Club Chair, Wheat', 'http://localhost/clone_assweb_2/house-self/house-self/custom/images/products/living/A403-1.jpg', '13990000', 'Căn hộ cửa bạn nhỏ chật trội, cửa hàng kinh doanh của bạn không gian bé, nơi làm việc của bạn không có chỗ nằm nghỉ ngơi, với chiếc Sofa tiện ích có đủ yếu tố và chế độ để phục vụ những nhu cầu thiết yếu của bạn. Nếu không gian của bạn không đủ cho 1 bộ bàn ghế và 1 chiếc giường hoặc nơi làm việc cần có 1 chiếc giường để nghỉ ngơi. Nay đã có giường Sofa gấp gọn thành ghế. Khi bạn cần nằm nghỉ ngơi chỉ cần trảu ra thành giường,khi bạn không nằm nghỉ ngơi thì bạn có thể gấp gọn thành ghế ngồi. Chất liệu: Ghế bọc nhung polyester bền bỉ ( thoáng khí, không bóng, không bám bụi. Đệm mềm và thoải mái, ngồi lâu ko bị nóng hay bí lưng hay mỏi người. Thiết kế góc nghiêng phù hợp với đường cong của cơ thể giúp giảm áp lực tối đa đến cột sống. Ghế sofa thông minh thiết kế phần tựa lưng ngả được ra để làm giường cá nhân hay nhà có khách', 'A403-1', '4.5', 'Cabinet', 'Xám', 'bestSeller');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color, special) values ('Fabric Club Chair, Wheat', 'http://localhost/clone_assweb_2/house-self/house-self/custom/images/products/living/A405-1.jpg', '28870000', 'Căn hộ cửa bạn nhỏ chật trội, cửa hàng kinh doanh của bạn không gian bé, nơi làm việc của bạn không có chỗ nằm nghỉ ngơi, với chiếc Sofa tiện ích có đủ yếu tố và chế độ để phục vụ những nhu cầu thiết yếu của bạn. Nếu không gian của bạn không đủ cho 1 bộ bàn ghế và 1 chiếc giường hoặc nơi làm việc cần có 1 chiếc giường để nghỉ ngơi. Nay đã có giường Sofa gấp gọn thành ghế. Khi bạn cần nằm nghỉ ngơi chỉ cần trảu ra thành giường,khi bạn không nằm nghỉ ngơi thì bạn có thể gấp gọn thành ghế ngồi. Chất liệu: Ghế bọc nhung polyester bền bỉ ( thoáng khí, không bóng, không bám bụi. Đệm mềm và thoải mái, ngồi lâu ko bị nóng hay bí lưng hay mỏi người. Thiết kế góc nghiêng phù hợp với đường cong của cơ thể giúp giảm áp lực tối đa đến cột sống. Ghế sofa thông minh thiết kế phần tựa lưng ngả được ra để làm giường cá nhân hay nhà có khách', 'A405-1', '4.5', 'Cabinet', 'Xám', '');";
    
    /* Insert into db_category */

    $query .= "
    insert into db_category(title, thumbnail) values ('Sofa', 'http://localhost/clone_assweb_2/house-self/house-self/custom/images/products/living/bg-sofa-1.jpg');";
    $query .= "
    insert into db_category(title, thumbnail) values ('Armchair', 'http://localhost/clone_assweb_2/house-self/house-self/custom/images/products/living/bg-armchair-1.jpg');";
    $query .= "
    insert into db_category(title, thumbnail) values ('Table', 'http://localhost/clone_assweb_2/house-self/house-self/custom/images/products/living/bg-cf-table-2.jpg');";
    $query .= "
    insert into db_category(title, thumbnail) values ('Carpet', 'http://localhost/clone_assweb_2/house-self/house-self/custom/images/products/living/bg-rug-2.jpg');";
    $query .= "
    insert into db_category(title, thumbnail) values ('Cabinet', 'http://localhost/clone_assweb_2/house-self/house-self/custom/images/products/living/bg-console-1.jpg');";

    mysqli_multi_query($connect, $query);

    //dong ket noi
    $connect->close();
?>