CREATE DATABASE olympic_medals;

USE olympic_medals;

CREATE TABLE medals (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pais VARCHAR(255) NOT NULL,
    oro INT NOT NULL,
    plata INT NOT NULL,
    bronce INT NOT NULL
);
