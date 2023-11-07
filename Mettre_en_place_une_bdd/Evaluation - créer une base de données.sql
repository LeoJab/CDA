--Gescom

--Créer la base de données
CREATE TABLE suppliers(
   sup_id INT AUTO_INCREMENT,
   sup_name VARCHAR(50) NOT NULL,
   sup_city VARCHAR(50) NOT NULL,
   sup_adresse VARCHAR(150) NOT NULL,
   sup_mail VARCHAR(75),
   sup_phone VARCHAR(10),
   PRIMARY KEY(sup_id)
);

CREATE TABLE customers(
   cus_id INT AUTO_INCREMENT,
   cus_lastname VARCHAR(50) NOT NULL,
   cus_firstname VARCHAR(50) NOT NULL,
   cus_adresse VARCHAR(150) NOT NULL,
   cus_zipcode VARCHAR(5) NOT NULL,
   cus_city VARCHAR(50) NOT NULL,
   cus_mail VARCHAR(75) ,
   cus_phone VARCHAR(10) ,
   PRIMARY KEY(cus_id)
);

CREATE TABLE orders(
   ord_id INT AUTO_INCREMENT,
   ord_order_date DATE NOT NULL,
   prd_ship_date DATE,
   ord_bill_date DATE,
   ord_reception_date DATE,
   ord_status VARCHAR(25) NOT NULL,
   cus_id INT NOT NULL,
   PRIMARY KEY(ord_id),
   FOREIGN KEY(cus_id) REFERENCES customers(cus_id)
);

CREATE TABLE categories(
   cat_id INT AUTO_INCREMENT,
   cat_name VARCHAR(50) ,
   cat_parent_id INT,
   PRIMARY KEY(cat_id),
   FOREIGN KEY(cat_parent_id) REFERENCES categories(cat_id)
);

CREATE TABLE products(
   pro_id INT AUTO_INCREMENT,
   pro_ref VARCHAR(10) NOT NULL,
   pro_name VARCHAR(200) NOT NULL,
   pro_desc TEXT NOT NULL,
   pro_price DECIMAL(6,2) NOT NULL,
   pro_stock SMALLINT,
   pro_color VARCHAR(30) ,
   pro_picture VARCHAR(40) ,
   pro_add_date DATE,
   pro_update_date DATETIME,
   pro_publish TINYINT NOT NULL,
   sup_id INT,
   cat_id INT NOT NULL,
   PRIMARY KEY(pro_id),
   FOREIGN KEY(sup_id) REFERENCES suppliers(sup_id),
   FOREIGN KEY(cat_id) REFERENCES categories(cat_id)
);

CREATE TABLE details(
   ord_id INT,
   pro_id INT,
   det_id INT AUTO_INCREMENT,
   det_price DECIMAL(6,2)  NOT NULL,
   det_quantity INT(100) NOT NULL,
   PRIMARY KEY(det_id),
   FOREIGN KEY(ord_id) REFERENCES oders(ord_id),
   FOREIGN KEY(pro_id) REFERENCES products(pro_id)
);

create trigger products_add_date before insert on products for each row set new.pro_add_date = CURRENT_DATE();
create trigger products_update_date before update on products for each row set new.pro_update_date = CURRENT_DATE();
create trigger orders_order_date before insert on orders for each row set new.ord_order_date = CURRENT_DATE();

CREATE INDEX pro_ref ON products(pro_ref);

-- Utilisateur et droits
CREATE USER 'util4'@'localhost' IDENTIFIED BY 'mdp1234';
CREATE USER 'util5'@'localhost' IDENTIFIED BY 'mdp1234';
CREATE USER 'util6'@'localhost' IDENTIFIED BY 'mdp1234'

GRANT ALL PRIVILEGES ON gescom.* TO 'util4'@'localhost';
GRANT select ON gescom.* TO 'util5'@'localhost';
GRANT select ON gescom.customers TO 'util6'@'localhost'

--Alimenter la base de données
INSERT INTO categories(cat_name, cat_parent_id)
VALUES 
   ('électronique', 0),
   ('téléphone', 1),
   ('télévision', 1)

INSERT INTO products(pro_ref, pro_name, pro_desc, pro_price, pro_stock, pro_color, pro_publish, cat_id)
VALUES
   ('B100', 'Samsung s22', 'Téléphone SamSung s22', 800, 5, 'red', 1, 2),
   ('A100', 'Samsung TV 50"', 'Télévision Samsung TV 50"', 900, 2, 'black', 1, 3),
   ('B200', 'Samsung Galaxy Z flip', 'Téléphone SamSung Galaxy Z flip', 1600, 5, 'Blue', 1, 2)

--Importer des fichiers
use gescom;
LOAD DATA LOCAL INFILE 'C:\Users\leoja\OneDrive\Bureau\Afpa\CDA\Mettre_en_place_une_bdd\customers.csv'
INTO TABLE customers
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\r\n'
IGNORE 1 LINES
(cus_id, cus_lastname, cus_firstname, cus_address, cus_zipcode, cus_city, cus_countries_id, cus_mail, cus_phone);