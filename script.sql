CREATE DATABASE simple_crud;

USE simple_crud;

CREATE TABLE teacher (
    id INT PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    email   VARCHAR(50)  NULL,
    department VARCHAR(50) DEFAULT 'CS'


);