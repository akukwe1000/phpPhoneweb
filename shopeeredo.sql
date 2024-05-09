-- Database shopee

-- TABLE  structure for table cart

CREATE TABLE `cart` (
    `cart_id` int(11) NOT NULL,
    `user_id` int(11) NOT NULL,
    `item_id` int(11) NOT NULL
) ENGINE = innoDB DEFAULT CHARSET = utf8mb4;

-- TABLE  structure for table cart



-- TABLE  structure for table PRODUCT

CREATE  TABLE  `product` (
    `item_id` int(11) NOT NULL,
    `item_brand` varchar(200) NOT NULL,
    `item_name` varchar(255) NOT NULL,
    `item_price` double(10,2) NOT NULL,
    `item_image` varchar(255) NOT NULL,
    `item_register` DATETIME DEFAULT NULL
) ENGINE = innoDB DEFAULT CHARSET = utf8mb4;

-- TABLE  structure for table PRODUCT
-- DUMPING DATA FOR product table
INSERT  INTO  `product` (item_id, item_brand, item_name, item_price, item_image,item_register) VALUES
(1,'Samsung', 'Samsung Galaxy 10', 152.00, './Asset/phone1.png', NOW()),
(2,'Redmi', 'Redmi 10', 152.00, './Asset/phone2.png', NOW()),
(3,'Apple', 'iphone 10', 152.00, './Asset/phone3.jpg', NOW()),
(4,'Apple', 'iphone 10', 152.00, './Asset/iphone.jpg', NOW());


-- create user table
CREATE TABLE `user` (
        `user_id` int(11) NOT NULL,
        `first_name` varchar(100) NOT NULL,
        `last_name` varchar(100) NOT NULL,
        `register_date` DATETIME DEFAULT NULL

) ENGINE = innoDB DEFAULT CHARSET = utf8mb4;

-- dumping data for table user
INSERT INTO `user`  (user_id, first_name, last_name,register_date)  VALUES
(1, 'Daily', 'Tuition', NOW()),
(1, 'Akshay', 'Kashyap', NOW());



-- creatin wish list table
CREATE TABLE `wishList` (
                        `cart_id` int(11) NOT NULL,
                        `user_id` int(11) NOT NULL,
                        `item_id` int(11) NOT NULL
) ENGINE = innoDB DEFAULT CHARSET = utf8mb4;
