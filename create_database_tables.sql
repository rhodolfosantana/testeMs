CREATE DATABASE testeMs;

create table client(
    id_user int NOT NULL AUTO_INCREMENT,
    name varchar(100) NOT NULL,
    age int NOT NULL,

    PRIMARY KEY (id_user)

);

create table product(
	id_product int NOT NULL AUTO_INCREMENT,
    name_product varchar(50) NOT NULL,

    PRIMARY KEY (id_product)
);