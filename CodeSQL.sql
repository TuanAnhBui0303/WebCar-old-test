CREATE DATABASE IF NOT EXISTS toyota_db;
USE toyota_db;

CREATE TABLE IF NOT EXISTS `user` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `ten_nguoi_dung` VARCHAR(100) NOT NULL,
    `ten_dang_nhap` VARCHAR(50) NOT NULL UNIQUE,
    `mat_khau` VARCHAR(255) NOT NULL,
    `quyen` VARCHAR(50) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `user` (`id`, `ten_nguoi_dung`, `ten_dang_nhap`, `mat_khau`, `quyen`) VALUES
(1, 'admin', 'admin', 'ad@123', 'Quản trị'),
(2, 'customer', 'customer', 'kh@123', 'Khách hàng');