
USE darwinArt_db;

DROP TABLE IF EXISTS Customer,Purchase,PurchaseItem,Product;

CREATE TABLE Customer (
 CustEmail Char (30),
 id INT(11) NOT NULL,
 CustFname CHAR(50) NOT NULL,
 CustLName CHAR(50) NOT Null,
 Title CHAR(50),
 Address CHAR (50),
 City CHAR(40) NOT NULL,
 State CHAR (40) NOT NULL,
 Country CHAR(30) NOT NULL,
 PostCode INT(4) NOT NULL,
 Phone INT,
 PRIMARY KEY (CustEmail)
)ENGINE=InnoDB, DEFAULT CHARACTER SET utf8;

CREATE TABLE Purchase (
CustEmail Char,
PurchaseNo INT,
Date DATE,
FOREIGN KEY (CustEmail) REFERENCES Customer (CustEmail),
PRIMARY Key (PurchaseNo)
)ENGINE=InnoDB, DEFAULT CHARACTER SET utf8;

CREATE TABLE PurchaseItem (
    Primary Key (ItemNo),
    ItemNo Int,
    Quantity INT,
    PurchaseNo INT,
    ProductNo INT,
    FOREIGN KEY (PurchaseNo) REFERENCES Purchase (PurchaseNo),
    FOREIGN KEY (ProductNo) REFERENCES Product (ProductNo)    
)ENGINE=InnoDB, DEFAULT CHARACTER SET utf8;

CREATE TABLE Product (
    ProductNo INT,
    Description CHAR (50),
    Price Int (20),
    Category CHAR (20),
    Colour CHAR (20),
    Size CHAR (20)
    PRIMARY KEY (ProductNo) AUTOINCREMENT
)ENGINE=InnoDB, DEFAULT CHARACTER SET utf8;