-- CREATE DATABASE heroku_9df057ec49d00a5;

use heroku_9df057ec49d00a5;

CREATE TABLE users (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
age INT(3),
location VARCHAR(50),
date TIMESTAMP
);