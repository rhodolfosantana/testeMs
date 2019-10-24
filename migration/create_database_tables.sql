CREATE DATABASE testeMs;

USE testeMs;

create table client(
    id_user int NOT NULL AUTO_INCREMENT,
    name varchar(100) NOT NULL,
    password varchar(255) NOT NULL,


    PRIMARY KEY (id_user)

);

create table product(
    id_product int NOT NULL AUTO_INCREMENT,
    image varchar(100) NOT NULL,
    name_product varchar(50) NOT NULL,
    valor VARCHAR(1000) NOT NULL,

    PRIMARY KEY (id_product)

);

create table request(
    id_request int NOT NULL AUTO_INCREMENT,
    date DATETIME NOT NULL,
    product_id int NOT NULL,
    client_id int NOT NULL, 

    PRIMARY KEY(id_request),
    CONSTRAINT fk_product FOREIGN KEY (product_id) REFERENCES product(id_product),
    CONSTRAINT fk_client FOREIGN KEY (client_id) REFERENCES client(id_user)

);