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
        color varchar(20)
    );";

    /* Tạo bảng db_category */

    $query .= "
    CREATE TABLE db_category (
        id int not null primary key auto_increment,
        title varchar(100)
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
        phone varchar(15),
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
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color) values ('Fabric Club Chair, Wheat', 'http://localhost/ass_web/house-self/house-self/custom/images/products/living/A104-1.jpg', '1700000', 
    'Căn hộ cửa bạn nhỏ chật trội, cửa hàng kinh doanh của bạn không gian bé, nơi làm việc của bạn không có chỗ nằm nghỉ ngơi, với chiếc Sofa tiện ích có đủ yếu tố và chế độ để phục vụ những nhu cầu thiết yếu của bạn. 
    Nếu không gian của bạn không đủ cho 1 bộ bàn ghế và 1 chiếc giường hoặc nơi làm việc cần có 1 chiếc giường để nghỉ ngơi. Nay đã có giường Sofa gấp gọn thành ghế. 
    Khi bạn cần nằm nghỉ ngơi chỉ cần trảu ra thành giường,khi bạn không nằm nghỉ ngơi thì bạn có thể gấp gọn thành ghế ngồi. 
    Chất liệu: Ghế bọc nhung polyester bền bỉ ( thoáng khí, không bóng, không bám bụi. Đệm mềm và thoải mái, ngồi lâu ko bị nóng hay bí lưng hay mỏi người. 
    Thiết kế góc nghiêng phù hợp với đường cong của cơ thể giúp giảm áp lực tối đa đến cột sống. 
    Ghế sofa thông minh thiết kế phần tựa lưng ngả được ra để làm giường cá nhân hay nhà có khách', 
    'A104-1', '4.5', 'Sofa', 'Xám');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color) values ('Fabric Club Chair, Wheat', 'http://localhost/ass_web/house-self/house-self/custom/images/products/living/A102-1.jpg', '1700000', 'Căn hộ cửa bạn nhỏ chật trội, cửa hàng kinh doanh của bạn không gian bé, nơi làm việc của bạn không có chỗ nằm nghỉ ngơi, với chiếc Sofa tiện ích có đủ yếu tố và chế độ để phục vụ những nhu cầu thiết yếu của bạn. Nếu không gian của bạn không đủ cho 1 bộ bàn ghế và 1 chiếc giường hoặc nơi làm việc cần có 1 chiếc giường để nghỉ ngơi. Nay đã có giường Sofa gấp gọn thành ghế. Khi bạn cần nằm nghỉ ngơi chỉ cần trảu ra thành giường,khi bạn không nằm nghỉ ngơi thì bạn có thể gấp gọn thành ghế ngồi. Chất liệu: Ghế bọc nhung polyester bền bỉ ( thoáng khí, không bóng, không bám bụi. Đệm mềm và thoải mái, ngồi lâu ko bị nóng hay bí lưng hay mỏi người. Thiết kế góc nghiêng phù hợp với đường cong của cơ thể giúp giảm áp lực tối đa đến cột sống. Ghế sofa thông minh thiết kế phần tựa lưng ngả được ra để làm giường cá nhân hay nhà có khách', 'A102-1', '4.5', 'Sofa', 'Xám');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color) values ('Fabric Club Chair, Wheat', 'http://localhost/ass_web/house-self/house-self/custom/images/products/living/A101-1.jpg', '1700000', 'Căn hộ cửa bạn nhỏ chật trội, cửa hàng kinh doanh của bạn không gian bé, nơi làm việc của bạn không có chỗ nằm nghỉ ngơi, với chiếc Sofa tiện ích có đủ yếu tố và chế độ để phục vụ những nhu cầu thiết yếu của bạn. Nếu không gian của bạn không đủ cho 1 bộ bàn ghế và 1 chiếc giường hoặc nơi làm việc cần có 1 chiếc giường để nghỉ ngơi. Nay đã có giường Sofa gấp gọn thành ghế. Khi bạn cần nằm nghỉ ngơi chỉ cần trảu ra thành giường,khi bạn không nằm nghỉ ngơi thì bạn có thể gấp gọn thành ghế ngồi. Chất liệu: Ghế bọc nhung polyester bền bỉ ( thoáng khí, không bóng, không bám bụi. Đệm mềm và thoải mái, ngồi lâu ko bị nóng hay bí lưng hay mỏi người. Thiết kế góc nghiêng phù hợp với đường cong của cơ thể giúp giảm áp lực tối đa đến cột sống. Ghế sofa thông minh thiết kế phần tựa lưng ngả được ra để làm giường cá nhân hay nhà có khách', 'A101-1', '4.5', 'Sofa', 'Xám');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color) values ('Fabric Club Chair, Wheat', 'http://localhost/ass_web/house-self/house-self/custom/images/products/living/A105-1.jpg', '1700000', 'Căn hộ cửa bạn nhỏ chật trội, cửa hàng kinh doanh của bạn không gian bé, nơi làm việc của bạn không có chỗ nằm nghỉ ngơi, với chiếc Sofa tiện ích có đủ yếu tố và chế độ để phục vụ những nhu cầu thiết yếu của bạn. Nếu không gian của bạn không đủ cho 1 bộ bàn ghế và 1 chiếc giường hoặc nơi làm việc cần có 1 chiếc giường để nghỉ ngơi. Nay đã có giường Sofa gấp gọn thành ghế. Khi bạn cần nằm nghỉ ngơi chỉ cần trảu ra thành giường,khi bạn không nằm nghỉ ngơi thì bạn có thể gấp gọn thành ghế ngồi. Chất liệu: Ghế bọc nhung polyester bền bỉ ( thoáng khí, không bóng, không bám bụi. Đệm mềm và thoải mái, ngồi lâu ko bị nóng hay bí lưng hay mỏi người. Thiết kế góc nghiêng phù hợp với đường cong của cơ thể giúp giảm áp lực tối đa đến cột sống. Ghế sofa thông minh thiết kế phần tựa lưng ngả được ra để làm giường cá nhân hay nhà có khách', 'A105-1', '4.5', 'Sofa', 'Xám');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color) values ('Fabric Club Chair, Wheat', 'http://localhost/ass_web/house-self/house-self/custom/images/products/living/A103-1.jpg', '1700000', 'Căn hộ cửa bạn nhỏ chật trội, cửa hàng kinh doanh của bạn không gian bé, nơi làm việc của bạn không có chỗ nằm nghỉ ngơi, với chiếc Sofa tiện ích có đủ yếu tố và chế độ để phục vụ những nhu cầu thiết yếu của bạn. Nếu không gian của bạn không đủ cho 1 bộ bàn ghế và 1 chiếc giường hoặc nơi làm việc cần có 1 chiếc giường để nghỉ ngơi. Nay đã có giường Sofa gấp gọn thành ghế. Khi bạn cần nằm nghỉ ngơi chỉ cần trảu ra thành giường,khi bạn không nằm nghỉ ngơi thì bạn có thể gấp gọn thành ghế ngồi. Chất liệu: Ghế bọc nhung polyester bền bỉ ( thoáng khí, không bóng, không bám bụi. Đệm mềm và thoải mái, ngồi lâu ko bị nóng hay bí lưng hay mỏi người. Thiết kế góc nghiêng phù hợp với đường cong của cơ thể giúp giảm áp lực tối đa đến cột sống. Ghế sofa thông minh thiết kế phần tựa lưng ngả được ra để làm giường cá nhân hay nhà có khách', 'A103-1', '4.5', 'Sofa', 'Xám');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color) values ('Fabric Club Chair, Wheat', 'http://localhost/ass_web/house-self/house-self/custom/images/products/living/A201-1.jpg', '1700000', 'Căn hộ cửa bạn nhỏ chật trội, cửa hàng kinh doanh của bạn không gian bé, nơi làm việc của bạn không có chỗ nằm nghỉ ngơi, với chiếc Sofa tiện ích có đủ yếu tố và chế độ để phục vụ những nhu cầu thiết yếu của bạn. Nếu không gian của bạn không đủ cho 1 bộ bàn ghế và 1 chiếc giường hoặc nơi làm việc cần có 1 chiếc giường để nghỉ ngơi. Nay đã có giường Sofa gấp gọn thành ghế. Khi bạn cần nằm nghỉ ngơi chỉ cần trảu ra thành giường,khi bạn không nằm nghỉ ngơi thì bạn có thể gấp gọn thành ghế ngồi. Chất liệu: Ghế bọc nhung polyester bền bỉ ( thoáng khí, không bóng, không bám bụi. Đệm mềm và thoải mái, ngồi lâu ko bị nóng hay bí lưng hay mỏi người. Thiết kế góc nghiêng phù hợp với đường cong của cơ thể giúp giảm áp lực tối đa đến cột sống. Ghế sofa thông minh thiết kế phần tựa lưng ngả được ra để làm giường cá nhân hay nhà có khách', 'A201-1', '4.5', 'Armchair', 'Xám');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color) values ('Fabric Club Chair, Wheat', 'http://localhost/ass_web/house-self/house-self/custom/images/products/living/A202-1.jpg', '1700000', 'Căn hộ cửa bạn nhỏ chật trội, cửa hàng kinh doanh của bạn không gian bé, nơi làm việc của bạn không có chỗ nằm nghỉ ngơi, với chiếc Sofa tiện ích có đủ yếu tố và chế độ để phục vụ những nhu cầu thiết yếu của bạn. Nếu không gian của bạn không đủ cho 1 bộ bàn ghế và 1 chiếc giường hoặc nơi làm việc cần có 1 chiếc giường để nghỉ ngơi. Nay đã có giường Sofa gấp gọn thành ghế. Khi bạn cần nằm nghỉ ngơi chỉ cần trảu ra thành giường,khi bạn không nằm nghỉ ngơi thì bạn có thể gấp gọn thành ghế ngồi. Chất liệu: Ghế bọc nhung polyester bền bỉ ( thoáng khí, không bóng, không bám bụi. Đệm mềm và thoải mái, ngồi lâu ko bị nóng hay bí lưng hay mỏi người. Thiết kế góc nghiêng phù hợp với đường cong của cơ thể giúp giảm áp lực tối đa đến cột sống. Ghế sofa thông minh thiết kế phần tựa lưng ngả được ra để làm giường cá nhân hay nhà có khách', 'A202-1', '4.5', 'Armchair', 'Xám');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color) values ('Fabric Club Chair, Wheat', 'http://localhost/ass_web/house-self/house-self/custom/images/products/living/A203-1.jpg', '1700000', 'Căn hộ cửa bạn nhỏ chật trội, cửa hàng kinh doanh của bạn không gian bé, nơi làm việc của bạn không có chỗ nằm nghỉ ngơi, với chiếc Sofa tiện ích có đủ yếu tố và chế độ để phục vụ những nhu cầu thiết yếu của bạn. Nếu không gian của bạn không đủ cho 1 bộ bàn ghế và 1 chiếc giường hoặc nơi làm việc cần có 1 chiếc giường để nghỉ ngơi. Nay đã có giường Sofa gấp gọn thành ghế. Khi bạn cần nằm nghỉ ngơi chỉ cần trảu ra thành giường,khi bạn không nằm nghỉ ngơi thì bạn có thể gấp gọn thành ghế ngồi. Chất liệu: Ghế bọc nhung polyester bền bỉ ( thoáng khí, không bóng, không bám bụi. Đệm mềm và thoải mái, ngồi lâu ko bị nóng hay bí lưng hay mỏi người. Thiết kế góc nghiêng phù hợp với đường cong của cơ thể giúp giảm áp lực tối đa đến cột sống. Ghế sofa thông minh thiết kế phần tựa lưng ngả được ra để làm giường cá nhân hay nhà có khách', 'A203-1', '4.5', 'Armchair', 'Xám');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color) values ('Fabric Club Chair, Wheat', 'http://localhost/ass_web/house-self/house-self/custom/images/products/living/A204-1.jpg', '1700000', 'Căn hộ cửa bạn nhỏ chật trội, cửa hàng kinh doanh của bạn không gian bé, nơi làm việc của bạn không có chỗ nằm nghỉ ngơi, với chiếc Sofa tiện ích có đủ yếu tố và chế độ để phục vụ những nhu cầu thiết yếu của bạn. Nếu không gian của bạn không đủ cho 1 bộ bàn ghế và 1 chiếc giường hoặc nơi làm việc cần có 1 chiếc giường để nghỉ ngơi. Nay đã có giường Sofa gấp gọn thành ghế. Khi bạn cần nằm nghỉ ngơi chỉ cần trảu ra thành giường,khi bạn không nằm nghỉ ngơi thì bạn có thể gấp gọn thành ghế ngồi. Chất liệu: Ghế bọc nhung polyester bền bỉ ( thoáng khí, không bóng, không bám bụi. Đệm mềm và thoải mái, ngồi lâu ko bị nóng hay bí lưng hay mỏi người. Thiết kế góc nghiêng phù hợp với đường cong của cơ thể giúp giảm áp lực tối đa đến cột sống. Ghế sofa thông minh thiết kế phần tựa lưng ngả được ra để làm giường cá nhân hay nhà có khách', 'A204-1', '4.5', 'Armchair', 'Xám');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color) values ('Fabric Club Chair, Wheat', 'http://localhost/ass_web/house-self/house-self/custom/images/products/living/A205-1.jpg', '1700000', 'Căn hộ cửa bạn nhỏ chật trội, cửa hàng kinh doanh của bạn không gian bé, nơi làm việc của bạn không có chỗ nằm nghỉ ngơi, với chiếc Sofa tiện ích có đủ yếu tố và chế độ để phục vụ những nhu cầu thiết yếu của bạn. Nếu không gian của bạn không đủ cho 1 bộ bàn ghế và 1 chiếc giường hoặc nơi làm việc cần có 1 chiếc giường để nghỉ ngơi. Nay đã có giường Sofa gấp gọn thành ghế. Khi bạn cần nằm nghỉ ngơi chỉ cần trảu ra thành giường,khi bạn không nằm nghỉ ngơi thì bạn có thể gấp gọn thành ghế ngồi. Chất liệu: Ghế bọc nhung polyester bền bỉ ( thoáng khí, không bóng, không bám bụi. Đệm mềm và thoải mái, ngồi lâu ko bị nóng hay bí lưng hay mỏi người. Thiết kế góc nghiêng phù hợp với đường cong của cơ thể giúp giảm áp lực tối đa đến cột sống. Ghế sofa thông minh thiết kế phần tựa lưng ngả được ra để làm giường cá nhân hay nhà có khách', 'A205-1', '4.5', 'Armchair', 'Xám');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color) values ('Fabric Club Chair, Wheat', 'http://localhost/ass_web/house-self/house-self/custom/images/products/living/A001-1.jpg', '1700000', 'Căn hộ cửa bạn nhỏ chật trội, cửa hàng kinh doanh của bạn không gian bé, nơi làm việc của bạn không có chỗ nằm nghỉ ngơi, với chiếc Sofa tiện ích có đủ yếu tố và chế độ để phục vụ những nhu cầu thiết yếu của bạn. Nếu không gian của bạn không đủ cho 1 bộ bàn ghế và 1 chiếc giường hoặc nơi làm việc cần có 1 chiếc giường để nghỉ ngơi. Nay đã có giường Sofa gấp gọn thành ghế. Khi bạn cần nằm nghỉ ngơi chỉ cần trảu ra thành giường,khi bạn không nằm nghỉ ngơi thì bạn có thể gấp gọn thành ghế ngồi. Chất liệu: Ghế bọc nhung polyester bền bỉ ( thoáng khí, không bóng, không bám bụi. Đệm mềm và thoải mái, ngồi lâu ko bị nóng hay bí lưng hay mỏi người. Thiết kế góc nghiêng phù hợp với đường cong của cơ thể giúp giảm áp lực tối đa đến cột sống. Ghế sofa thông minh thiết kế phần tựa lưng ngả được ra để làm giường cá nhân hay nhà có khách', 'A001-1', '4.5', 'Table', 'Xám');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color) values ('Fabric Club Chair, Wheat', 'http://localhost/ass_web/house-self/house-self/custom/images/products/living/A002-1.jpg', '1700000', 'Căn hộ cửa bạn nhỏ chật trội, cửa hàng kinh doanh của bạn không gian bé, nơi làm việc của bạn không có chỗ nằm nghỉ ngơi, với chiếc Sofa tiện ích có đủ yếu tố và chế độ để phục vụ những nhu cầu thiết yếu của bạn. Nếu không gian của bạn không đủ cho 1 bộ bàn ghế và 1 chiếc giường hoặc nơi làm việc cần có 1 chiếc giường để nghỉ ngơi. Nay đã có giường Sofa gấp gọn thành ghế. Khi bạn cần nằm nghỉ ngơi chỉ cần trảu ra thành giường,khi bạn không nằm nghỉ ngơi thì bạn có thể gấp gọn thành ghế ngồi. Chất liệu: Ghế bọc nhung polyester bền bỉ ( thoáng khí, không bóng, không bám bụi. Đệm mềm và thoải mái, ngồi lâu ko bị nóng hay bí lưng hay mỏi người. Thiết kế góc nghiêng phù hợp với đường cong của cơ thể giúp giảm áp lực tối đa đến cột sống. Ghế sofa thông minh thiết kế phần tựa lưng ngả được ra để làm giường cá nhân hay nhà có khách', 'A002-1', '4.5', 'Table', 'Xám');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color) values ('Fabric Club Chair, Wheat', 'http://localhost/ass_web/house-self/house-self/custom/images/products/living/A003-1.jpg', '1700000', 'Căn hộ cửa bạn nhỏ chật trội, cửa hàng kinh doanh của bạn không gian bé, nơi làm việc của bạn không có chỗ nằm nghỉ ngơi, với chiếc Sofa tiện ích có đủ yếu tố và chế độ để phục vụ những nhu cầu thiết yếu của bạn. Nếu không gian của bạn không đủ cho 1 bộ bàn ghế và 1 chiếc giường hoặc nơi làm việc cần có 1 chiếc giường để nghỉ ngơi. Nay đã có giường Sofa gấp gọn thành ghế. Khi bạn cần nằm nghỉ ngơi chỉ cần trảu ra thành giường,khi bạn không nằm nghỉ ngơi thì bạn có thể gấp gọn thành ghế ngồi. Chất liệu: Ghế bọc nhung polyester bền bỉ ( thoáng khí, không bóng, không bám bụi. Đệm mềm và thoải mái, ngồi lâu ko bị nóng hay bí lưng hay mỏi người. Thiết kế góc nghiêng phù hợp với đường cong của cơ thể giúp giảm áp lực tối đa đến cột sống. Ghế sofa thông minh thiết kế phần tựa lưng ngả được ra để làm giường cá nhân hay nhà có khách', 'A003-1', '4.5', 'Table', 'Xám');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color) values ('Fabric Club Chair, Wheat', 'http://localhost/ass_web/house-self/house-self/custom/images/products/living/A004-1.jpg', '1700000', 'Căn hộ cửa bạn nhỏ chật trội, cửa hàng kinh doanh của bạn không gian bé, nơi làm việc của bạn không có chỗ nằm nghỉ ngơi, với chiếc Sofa tiện ích có đủ yếu tố và chế độ để phục vụ những nhu cầu thiết yếu của bạn. Nếu không gian của bạn không đủ cho 1 bộ bàn ghế và 1 chiếc giường hoặc nơi làm việc cần có 1 chiếc giường để nghỉ ngơi. Nay đã có giường Sofa gấp gọn thành ghế. Khi bạn cần nằm nghỉ ngơi chỉ cần trảu ra thành giường,khi bạn không nằm nghỉ ngơi thì bạn có thể gấp gọn thành ghế ngồi. Chất liệu: Ghế bọc nhung polyester bền bỉ ( thoáng khí, không bóng, không bám bụi. Đệm mềm và thoải mái, ngồi lâu ko bị nóng hay bí lưng hay mỏi người. Thiết kế góc nghiêng phù hợp với đường cong của cơ thể giúp giảm áp lực tối đa đến cột sống. Ghế sofa thông minh thiết kế phần tựa lưng ngả được ra để làm giường cá nhân hay nhà có khách', 'A004-1', '4.5', 'Table', 'Xám');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color) values ('Fabric Club Chair, Wheat', 'http://localhost/ass_web/house-self/house-self/custom/images/products/living/A005-1.jpg', '1700000', 'Căn hộ cửa bạn nhỏ chật trội, cửa hàng kinh doanh của bạn không gian bé, nơi làm việc của bạn không có chỗ nằm nghỉ ngơi, với chiếc Sofa tiện ích có đủ yếu tố và chế độ để phục vụ những nhu cầu thiết yếu của bạn. Nếu không gian của bạn không đủ cho 1 bộ bàn ghế và 1 chiếc giường hoặc nơi làm việc cần có 1 chiếc giường để nghỉ ngơi. Nay đã có giường Sofa gấp gọn thành ghế. Khi bạn cần nằm nghỉ ngơi chỉ cần trảu ra thành giường,khi bạn không nằm nghỉ ngơi thì bạn có thể gấp gọn thành ghế ngồi. Chất liệu: Ghế bọc nhung polyester bền bỉ ( thoáng khí, không bóng, không bám bụi. Đệm mềm và thoải mái, ngồi lâu ko bị nóng hay bí lưng hay mỏi người. Thiết kế góc nghiêng phù hợp với đường cong của cơ thể giúp giảm áp lực tối đa đến cột sống. Ghế sofa thông minh thiết kế phần tựa lưng ngả được ra để làm giường cá nhân hay nhà có khách', 'A005-1', '4.5', 'Table', 'Xám');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color) values ('Fabric Club Chair, Wheat', 'http://localhost/ass_web/house-self/house-self/custom/images/products/living/A301-1.jpg', '1700000', 'Căn hộ cửa bạn nhỏ chật trội, cửa hàng kinh doanh của bạn không gian bé, nơi làm việc của bạn không có chỗ nằm nghỉ ngơi, với chiếc Sofa tiện ích có đủ yếu tố và chế độ để phục vụ những nhu cầu thiết yếu của bạn. Nếu không gian của bạn không đủ cho 1 bộ bàn ghế và 1 chiếc giường hoặc nơi làm việc cần có 1 chiếc giường để nghỉ ngơi. Nay đã có giường Sofa gấp gọn thành ghế. Khi bạn cần nằm nghỉ ngơi chỉ cần trảu ra thành giường,khi bạn không nằm nghỉ ngơi thì bạn có thể gấp gọn thành ghế ngồi. Chất liệu: Ghế bọc nhung polyester bền bỉ ( thoáng khí, không bóng, không bám bụi. Đệm mềm và thoải mái, ngồi lâu ko bị nóng hay bí lưng hay mỏi người. Thiết kế góc nghiêng phù hợp với đường cong của cơ thể giúp giảm áp lực tối đa đến cột sống. Ghế sofa thông minh thiết kế phần tựa lưng ngả được ra để làm giường cá nhân hay nhà có khách', 'A301-1', '4.5', 'Carpet', 'Xám');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color) values ('Fabric Club Chair, Wheat', 'http://localhost/ass_web/house-self/house-self/custom/images/products/living/A302-1.jpg', '1700000', 'Căn hộ cửa bạn nhỏ chật trội, cửa hàng kinh doanh của bạn không gian bé, nơi làm việc của bạn không có chỗ nằm nghỉ ngơi, với chiếc Sofa tiện ích có đủ yếu tố và chế độ để phục vụ những nhu cầu thiết yếu của bạn. Nếu không gian của bạn không đủ cho 1 bộ bàn ghế và 1 chiếc giường hoặc nơi làm việc cần có 1 chiếc giường để nghỉ ngơi. Nay đã có giường Sofa gấp gọn thành ghế. Khi bạn cần nằm nghỉ ngơi chỉ cần trảu ra thành giường,khi bạn không nằm nghỉ ngơi thì bạn có thể gấp gọn thành ghế ngồi. Chất liệu: Ghế bọc nhung polyester bền bỉ ( thoáng khí, không bóng, không bám bụi. Đệm mềm và thoải mái, ngồi lâu ko bị nóng hay bí lưng hay mỏi người. Thiết kế góc nghiêng phù hợp với đường cong của cơ thể giúp giảm áp lực tối đa đến cột sống. Ghế sofa thông minh thiết kế phần tựa lưng ngả được ra để làm giường cá nhân hay nhà có khách', 'A302-1', '4.5', 'Carpet', 'Xám');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color) values ('Fabric Club Chair, Wheat', 'http://localhost/ass_web/house-self/house-self/custom/images/products/living/A303-1.jpg', '1700000', 'Căn hộ cửa bạn nhỏ chật trội, cửa hàng kinh doanh của bạn không gian bé, nơi làm việc của bạn không có chỗ nằm nghỉ ngơi, với chiếc Sofa tiện ích có đủ yếu tố và chế độ để phục vụ những nhu cầu thiết yếu của bạn. Nếu không gian của bạn không đủ cho 1 bộ bàn ghế và 1 chiếc giường hoặc nơi làm việc cần có 1 chiếc giường để nghỉ ngơi. Nay đã có giường Sofa gấp gọn thành ghế. Khi bạn cần nằm nghỉ ngơi chỉ cần trảu ra thành giường,khi bạn không nằm nghỉ ngơi thì bạn có thể gấp gọn thành ghế ngồi. Chất liệu: Ghế bọc nhung polyester bền bỉ ( thoáng khí, không bóng, không bám bụi. Đệm mềm và thoải mái, ngồi lâu ko bị nóng hay bí lưng hay mỏi người. Thiết kế góc nghiêng phù hợp với đường cong của cơ thể giúp giảm áp lực tối đa đến cột sống. Ghế sofa thông minh thiết kế phần tựa lưng ngả được ra để làm giường cá nhân hay nhà có khách', 'A303-1', '4.5', 'Carpet', 'Xám');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color) values ('Fabric Club Chair, Wheat', 'http://localhost/ass_web/house-self/house-self/custom/images/products/living/A304-1.jpg', '1700000', 'Căn hộ cửa bạn nhỏ chật trội, cửa hàng kinh doanh của bạn không gian bé, nơi làm việc của bạn không có chỗ nằm nghỉ ngơi, với chiếc Sofa tiện ích có đủ yếu tố và chế độ để phục vụ những nhu cầu thiết yếu của bạn. Nếu không gian của bạn không đủ cho 1 bộ bàn ghế và 1 chiếc giường hoặc nơi làm việc cần có 1 chiếc giường để nghỉ ngơi. Nay đã có giường Sofa gấp gọn thành ghế. Khi bạn cần nằm nghỉ ngơi chỉ cần trảu ra thành giường,khi bạn không nằm nghỉ ngơi thì bạn có thể gấp gọn thành ghế ngồi. Chất liệu: Ghế bọc nhung polyester bền bỉ ( thoáng khí, không bóng, không bám bụi. Đệm mềm và thoải mái, ngồi lâu ko bị nóng hay bí lưng hay mỏi người. Thiết kế góc nghiêng phù hợp với đường cong của cơ thể giúp giảm áp lực tối đa đến cột sống. Ghế sofa thông minh thiết kế phần tựa lưng ngả được ra để làm giường cá nhân hay nhà có khách', 'A304-1', '4.5', 'Carpet', 'Xám');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color) values ('Fabric Club Chair, Wheat', 'http://localhost/ass_web/house-self/house-self/custom/images/products/living/A305-1.jpg', '1700000', 'Căn hộ cửa bạn nhỏ chật trội, cửa hàng kinh doanh của bạn không gian bé, nơi làm việc của bạn không có chỗ nằm nghỉ ngơi, với chiếc Sofa tiện ích có đủ yếu tố và chế độ để phục vụ những nhu cầu thiết yếu của bạn. Nếu không gian của bạn không đủ cho 1 bộ bàn ghế và 1 chiếc giường hoặc nơi làm việc cần có 1 chiếc giường để nghỉ ngơi. Nay đã có giường Sofa gấp gọn thành ghế. Khi bạn cần nằm nghỉ ngơi chỉ cần trảu ra thành giường,khi bạn không nằm nghỉ ngơi thì bạn có thể gấp gọn thành ghế ngồi. Chất liệu: Ghế bọc nhung polyester bền bỉ ( thoáng khí, không bóng, không bám bụi. Đệm mềm và thoải mái, ngồi lâu ko bị nóng hay bí lưng hay mỏi người. Thiết kế góc nghiêng phù hợp với đường cong của cơ thể giúp giảm áp lực tối đa đến cột sống. Ghế sofa thông minh thiết kế phần tựa lưng ngả được ra để làm giường cá nhân hay nhà có khách', 'A305-1', '4.5', 'Carpet', 'Xám');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color) values ('Fabric Club Chair, Wheat', 'http://localhost/ass_web/house-self/house-self/custom/images/products/living/A401-1.jpg', '15910000', 'Fabric Club Chair, Wheat', 'A401-1', '4.5', 'Cabinet', 'Xám');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color) values ('Fabric Club Chair, Wheat', 'http://localhost/ass_web/house-self/house-self/custom/images/products/living/A402-1.jpg', '18990000', 'Fabric Club Chair, Wheat', 'A402-1', '4.5', 'Cabinet', 'Xám');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color) values ('Fabric Club Chair, Wheat', 'http://localhost/ass_web/house-self/house-self/custom/images/products/living/A403-1.jpg', '13990000', 'Fabric Club Chair, Wheat', 'A403-1', '4.5', 'Cabinet', 'Xám');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color) values ('Fabric Club Chair, Wheat', 'http://localhost/ass_web/house-self/house-self/custom/images/products/living/A404-1.jpg', '8590000', 'Fabric Club Chair, Wheat', 'A404-1', '4.5', 'Cabinet', 'Xám');";
    $query .= "
    insert into db_product(title, thumbnail, price, description, id_sp, rate, category, color) values ('Fabric Club Chair, Wheat', 'http://localhost/ass_web/house-self/house-self/custom/images/products/living/A405-1.jpg', '10890000', 'Fabric Club Chair, Wheat', 'A405-1', '4.5', 'Cabinet', 'Xám');";
    
    /* Insert into db_category */

    $query .= "
    insert into db_category(title) values ('Sofa');";
    $query .= "
    insert into db_category(title) values ('Armchair');";
    $query .= "
    insert into db_category(title) values ('Table');";
    $query .= "
    insert into db_category(title) values ('Carpet');";
    $query .= "
    insert into db_category(title) values ('Cabinet');";

    mysqli_multi_query($connect, $query);

    //dong ket noi
    $connect->close();
?>