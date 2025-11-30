CREATE DATABASE verona;
USE verona;

CREATE TABLE verona_comments (
	comment_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100),
    comment VARCHAR(1000)
);