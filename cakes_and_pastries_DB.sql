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

insert into reviews (id, user, review) values (2, "bob@gmail.com", "poggers");

select user, review, date_entered from reviews where id=1 order by date_entered desc;

drop table user_info;

insert into user_login (Email, Password) values ("yeet@gmail.com","yeet123");

select * from user_login;

select * from cakes;

insert into cakes (Product_ID, Product_Name, Description, Quantity, Price, avail) values
	(1, "Chocolate Cake", "Moist chocolate sponge cake with swiss meringue chocolate buttercream, garnished in chocolate chips for all lovers of chocolate.",
		100, 100.00, "1"),
	(2,"German Chocolate Cake", "Moist chocolate sponge cake with swiss meringue chocolate buttercream, garnished in chocolate chips for all lovers of chocolate.",
		100, 150.00, "1"),
    (3,"Wedding Cake", "no description yet", 100, 100.00, "1"),
    (4,"Bridal Cake", "no description yet", 100, 69.69, "1");

alter table cakes
	add avail enum('0','1') NOT NULL;

select * from reviews;

select Password from user_login where Email = "yeet@gmail.com";

select count(*) as total from user_login where Email = "yeet@gmail.com" and Password = "yeet123";