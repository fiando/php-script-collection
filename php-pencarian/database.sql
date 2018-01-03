CREATE DATABASE IF NOT EXISTS `pencarian`;
USE pencarian;

CREATE TABLE IF NOT EXISTS `people`(
  id INT NOT NULL AUTO_INCREMENT,
  nama VARCHAR(50) NOT NULL,
  jkelamin CHAR(1) NOT NULL,
  kota VARCHAR(50) NOT NULL,
  PRIMARY KEY (id)
);

INSERT INTO people VALUES
  (NULL,'Bobby','L','Yogyakarta'),
  (NULL,'Fiando','L','Bandung'),
  (NULL,'Sadela','L','Jakarta'),
  (NULL,'Abu','L','Yogyakarta'),
  (NULL,'Kar','P','Surabaya')
