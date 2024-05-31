CREATE DATABASE IF NOT EXISTS gameroom;

USE gameroom;

/******************/
/* ADMINS TABLE   */
/******************/
CREATE TABLE IF NOT EXISTS admins(
    adminID int NOT NULL AUTO_INCREMENT,
    adminName varchar(255) NOT NULL,
    adminEmail varchar(255) NOT NULL,
    adminPassword varchar(255) NOT NULL,
    PRIMARY KEY (adminID)
);

/*INSERT INTO admins(adminName, adminPassword, adminEmail)
VALUES ('admin', 'admin', 'admin@admin.com');*/

/***************/
/* SUBSCRIBERS */
/***************/

CREATE TABLE IF NOT EXISTS subscribers(
    subscriberID int NOT NULL AUTO_INCREMENT,
    subscriberMail varchar(255) NOT NULL,
    PRIMARY KEY (subscriberID)
);

/**************/
/* PS1 SYSTEM */
/**************/

Create TABLE IF NOT EXISTS ps1system(
    systemID int NOT NULL AUTO_INCREMENT,
    systemName varchar(255) NOT NULL,
    systemCondition varchar(255) NOT NULL,
    systemPrice int NOT NULL,
    systemImageName varchar(255) NOT NULL,
    PRIMARY KEY (systemID)
);