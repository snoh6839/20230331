-- CREATE TABLE todo_members (
-- Id_no INT PRIMARY KEY AUTO_INCREMENT,
-- username VARCHAR(50) NOT NULL,
-- password VARCHAR(50) NOT NULL
-- );

CREATE TABLE todo_items (
Id_no INT PRIMARY KEY AUTO_INCREMENT,
member_id INT NOT NULL,
title VARCHAR(100) NOT NULL,
description TEXT,
start_date DATE,
due_date DATE,
status ENUM('Incomplete', 'Complete') NOT NULL DEFAULT 'Incomplete',
FOREIGN KEY (member_id) REFERENCES todo_members(id_no)
);
