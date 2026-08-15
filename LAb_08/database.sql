CREATE DATABASE crud_db;

USE crud_db;

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    email VARCHAR(100),
    course VARCHAR(50)
);