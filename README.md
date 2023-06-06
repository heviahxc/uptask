# uptask
php

PROYECTO PENDIENTE

PASOS:

- npm install node
- npm i
- composer update

# sql:

CREATE TABLE usuarios (
  id INT(11) NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(30) NOT NULL,
  email VARCHAR(30) NOT NULL,
  password VARCHAR(60) NOT NULL,
  token VARCHAR(15),
  confirmado TINYINT(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (id),
  UNIQUE KEY (email)
);


