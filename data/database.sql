CREATE DATABASE IF NOT EXISTS gameroom;

USE gameroom;

/*************/
/*ADMINS TABLE*/
/*************/
CREATE TABLE IF NOT EXISTS admins(
    adminID int NOT NULL AUTO_INCREMENT,
    adminName varchar(255) NOT NULL,
    adminEmail varchar(255) NOT NULL,
    adminPassword varchar(255) NOT NULL,
    PRIMARY KEY (adminID)
);