use heroku_32ded4d6f46196f;

create table user_login (
    Email VARCHAR(255) NOT NULL PRIMARY KEY,
    Password VARCHAR(64) NOT NULL
);

create table user_info (
    Email VARCHAR(255) NOT NULL PRIMARY KEY,
    FirstName VARCHAR(64),
    LastName VARCHAR(64),
    Address VARCHAR(512),
    CreditCardNumber INT,
    CreditDate INT,
    SecurityCode INT
);

create table products (
    Product_ID INT NOT NULL PRIMARY KEY,
    Product_Name VARCHAR(64) NOT NULL
);

create table cakes (
    Product_ID INT NOT NULL PRIMARY KEY,
    Product_Name VARCHAR(64) NOT NULL,
    Description VARCHAR(255),
    Quantity INT,
    Price DECIMAL(5,2)
);

create table chocolates (
    Product_ID INT NOT NULL PRIMARY KEY,
    Product_Name VARCHAR(64) NOT NULL,
    Description VARCHAR(255),
    Quantity INT,
    Price DECIMAL(5,2)
);

create table breads (
    Product_ID INT NOT NULL PRIMARY KEY,
    Product_Name VARCHAR(64) NOT NULL,
    Description VARCHAR(255),
    Quantity INT,
    Price DECIMAL(5,2)
);

create table cinnamon_rolls (
    Product_ID INT NOT NULL PRIMARY KEY,
    Product_Name VARCHAR(64) NOT NULL,
    Description VARCHAR(255),
    Quantity INT,
    Price DECIMAL(5,2)
);

create table cookies (
    Product_ID INT NOT NULL PRIMARY KEY,
    Product_Name VARCHAR(64) NOT NULL,
    Description VARCHAR(255),
    Quantity INT,
    Price DECIMAL(5,2)
);

create table pies (
    Product_ID INT NOT NULL PRIMARY KEY,
    Product_Name VARCHAR(64) NOT NULL,
    Description VARCHAR(255),
    Quantity INT,
    Price DECIMAL(5,2)
);

create table orders (
    order_id INT NOT NULL PRIMARY KEY,
    Email VARCHAR(255) NOT NULL
);

create table reviews (
	id INT NOT NULL,
    user VARCHAR(255) NOT NULL,
    review VARCHAR(3000) NOT NULL,
    date_entered timestamp DEFAULT CURRENT_TIMESTAMP
);

drop table reviews;

insert into reviews (id, user, review) values (1, "yeet@gmail.com", "This cake is great!");

drop table user_info;

insert into user_login (Email, Password) values ("yeet@gmail.com","yeet123");

select * from user_login;

select * from reviews;

select Password from user_login where Email = "yeet@gmail.com";

select count(*) as total from user_login where Email = "yeet@gmail.com" and Password = "yeet123";