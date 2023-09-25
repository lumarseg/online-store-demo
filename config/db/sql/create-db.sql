/*
	Database Creation Script for the cafe database
*/
DROP DATABASE IF EXISTS cafe_db;

CREATE DATABASE cafe_db;

USE cafe_db;

/* Create PRODUCT_GROUP table. */

CREATE TABLE product_group (
  product_group_number INT(3) NOT NULL PRIMARY KEY,
  product_group_name VARCHAR(25) NOT NULL DEFAULT ''
  );

/* INSERT initialization data into the PRODUCT_GROUP table. */

INSERT INTO product_group (product_group_number, product_group_name) VALUES
	  (1, 'Reposteria')
	, (2, 'Bebidas');

/* Create PRODUCT table. */

CREATE TABLE product (
  id INT(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  product_name VARCHAR(40) NOT NULL DEFAULT '',
  description VARCHAR(200) NOT NULL DEFAULT '',
  price DECIMAL(10,2) NOT NULL DEFAULT 0.0,
  product_group INT(2) NOT NULL DEFAULT 1,
  image_url VARCHAR(256) DEFAULT 'images/default-image.jpg',
  FOREIGN KEY (product_group) REFERENCES product_group (product_group_number)
  );

/* INSERT initialization data into the PRODUCT table. */

INSERT INTO product (product_name, description, price, product_group, image_url) VALUES
	  ('Croissant', 'Fresco, suave y esponjoso ... Simplemente delicioso!', 1.50, 1, 'images/Croissants.jpg')
	, ('Donas', '¡Tenemos más de media docena de sabores!', 1.00, 1, 'images/Donuts.jpg')
	, ('Chocolate Chip Cookie', 'Elaborado con chocolate suizo con un toque de vainilla de Madagascar.', 2.50, 1, 'images/Chocolate-Chip-Cookies.jpg')
	, ('Muffin', 'Pan de banano, arándanos, arándanos o manzana', 3.00, 1, 'images/Muffins.jpg')
	, ('Strawberry Blueberry Tart', 'Rebosante del sabor y aroma de la fruta fresca.', 3.50, 1, 'images/Strawberry-Blueberry-Tarts.jpg')
    , ('Strawberry Tart', 'Elaborado con fresas frescas maduras y una deliciosa crema batida.', 3.50, 1, 'images/Strawberry-Tarts.jpg')
	, ('Coffee', 'Café Costarricense negro recién molido', 3.00, 2, 'images/Coffee.jpg')
	, ('Hot Chocolate', 'Rico y cremoso, y elaborado con chocolate real.', 3.00, 2, 'images/Cup-of-Hot-Chocolate.jpg')
	, ('Latte', 'Se ofrece frío o caliente y en varios sabores deliciosos.', 3.50, 2, 'images/Latte.jpg');

/* Create ORDER table. */

CREATE TABLE `order` (
  order_number INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  order_date_time TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  amount DECIMAL(10,2) NOT NULL DEFAULT 0.0
  );

/* Create ORDER_ITEM table. */

CREATE TABLE order_item (
  order_number INT(5) NOT NULL,
  order_item_number INT(5) NOT NULL,
  product_id INT(3),
  quantity INT(2),
  amount DECIMAL(10,2) NOT NULL,
  PRIMARY KEY (order_number, order_item_number),
  FOREIGN KEY (order_number) REFERENCES `order` (order_number),
  FOREIGN KEY (product_id) REFERENCES product (id)
  );
