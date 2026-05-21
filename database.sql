CREATE DATABASE form_db;

USE form_db;

CREATE TABLE messages (

  id INT AUTO_INCREMENT PRIMARY KEY,

  name VARCHAR(100),

  email VARCHAR(100),

  phone VARCHAR(20),

  message TEXT

);