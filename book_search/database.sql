-- the book_db needs should be connected to db_name in your php file
-- http://localhost/phpmyadmin/ 
-- book_db

CREATE DATABASE book_db;
USE book_db;

CREATE TABLE books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    author VARCHAR(255) NOT NULL,
    year_published YEAR NOT NULL
);

INSERT INTO books (title, author, year_published) VALUES
('PHP for Beginners', 'John Doe', 2020),
('Advanced PHP Programming', 'Jane Smith', 2019),
('Learning MySQL', 'Alex Johnson', 2018),
('Web Development with PHP and MySQL', 'Emily Davis', 2021);
