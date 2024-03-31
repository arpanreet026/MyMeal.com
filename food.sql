
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

Database- onfood

CREATE TABLE `onfood`.`items` (`id` INT(20) NOT NULL AUTO_INCREMENT ,
  `Name` VARCHAR(50) NOT NULL ,
  `Price` INT(20) NOT NULL ,
  `qty` INT(11) NOT NULL DEFAULT '1' ,
  `image_name` VARCHAR(255) NOT NULL ,
  `Active` VARCHAR(11) NOT NULL DEFAULT 'Yes' ,
  `item_code` VARCHAR(30) NOT NULL , PRIMARY KEY (`id`)) 
  ENGINE = InnoDB;

CREATE TABLE `onfood`.`cart` (`id` INT(11) NOT NULL AUTO_INCREMENT ,
  `product_name` VARCHAR(100) NOT NULL ,
  `product_price` VARCHAR(50) NOT NULL ,
  `product_image` VARCHAR(255) NOT NULL ,
  `qty` INT(10) NOT NULL ,
  `total_price` VARCHAR(100) NOT NULL ,
  `product_code` VARCHAR(10) NOT NULL , PRIMARY KEY (`id`))
  ENGINE = InnoDB;

CREATE TABLE `onfood`.`tbl_admin` (`username` VARCHAR(100) NOT NULL ,
  `password` VARCHAR(100) NOT NULL)
  ENGINE = InnoDB;

CREATE TABLE `onfood`.`users` (`username` VARCHAR(50) NOT NULL ,
  `name` VARCHAR(50) NOT NULL , 
  `phone TEXT NOT NULL ,
  `email` VARCHAR(50) NOT NULL ,
  `password` TEXT NOT NULL , `dt` TIMESTAMP NOT NULL )
  ENGINE = InnoDB;

CREATE TABLE `onfood`.`tbl_order` (`id` INT(10) NOT NULL AUTO_INCREMENT ,
  `customer_name` VARCHAR(150) NOT NULL ,
  `customer_email` VARCHAR(150) NOT NULL ,
  `customer_contact` VARCHAR(20) NOT NULL ,
  `customer_address` VARCHAR(255) NOT NULL DEFAULT 'Address' ,
  `pmode` VARCHAR(50) NOT NULL DEFAULT 'Cash on Delivery' ,
  `food` VARCHAR(150) NOT NULL ,
  `order_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  `status` VARCHAR(50) NOT NULL DEFAULT 'Delivered' ,
  `total` DECIMAL(10,2) NOT NULL , PRIMARY KEY (`id`))
  ENGINE = InnoDB;
