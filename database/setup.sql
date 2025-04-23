-- Create database and users table
CREATE DATABASE sneaker_db;
USE sneaker_db;

CREATE TABLE users (
  id INT PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(100),
  password VARCHAR(100)
);

INSERT INTO users (username, password) VALUES ('admin', 'admin123');
CREATE TABLE reviews (
    id INT AUTO_INCREMENT PRIMARY KEY,
    content TEXT
);
