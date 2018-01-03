CREATE DATABASE IF NOT EXISTS crud_test;
use crud_test;

CREATE TABLE IF NOT EXISTS blog(
  id_post INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(120),
  content TEXT,
  created DATETIME,
  updated DATETIME
);
INSERT INTO blog(title,content,created,updated) VALUES ('tester','halo ini content',NOW(),NOW());
