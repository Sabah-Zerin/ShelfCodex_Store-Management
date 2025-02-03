to run : php -S localhost:8000

to create database table  :

    1) mysql -u root
    2) USE shelfcodex;     or    CREATE DATABASE shelfcodex;
    3) 
        CREATE TABLE user (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        fullName VARCHAR(255) NOT NULL,
        username VARCHAR(100) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL
        );

    4)  SHOW TABLES;



