CREATE DATABASE schemadb;
USE schemadb;


DROP TABLE IF EXISTS users;
CREATE TABLE users(
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname varchar(50) DEFAULT NULL,
    lastname varchar(50) DEFAULT NULL,
    password varchar(100) DEFAULT NULL,
    email varchar(100) DEFAULT NULL,
    date_joined timestamp NOT NULL
    
);

DROP TABLE IF EXISTS issues;
CREATE TABLE issues(
    id int (10) UNSIGNED NOT NULL PRIMARY KEY,
    title varchar(50) DEFAULT NULL,
    description text DEFAULT NULL,
    type varchar(50) DEFAULT NULL,
    priority varchar(50) DEFAULT NULL,
    status varchar(50) DEFAULT NULL,
    assigned_to int(10) DEFAULT NULL,
    created_by int (10) DEFAULT NULL,
    created DATE DEFAULT NULL,
    updated DATE DEFAULT NULL
);