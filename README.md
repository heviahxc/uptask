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

CREATE TABLE proyectos (
  id INT PRIMARY KEY,
  proyecto VARCHAR(255),
  url VARCHAR(255),
  propietarioId INT
);

ALTER TABLE proyectos ADD CONSTRAINT fk_propietarioId FOREIGN KEY (propietarioId) REFERENCES usuarios(id);

CREATE TABLE tareas (
  id INT PRIMARY KEY,
  nombre VARCHAR(255),
  estado VARCHAR(255),
  proyectoId INT
);

ALTER TABLE tareas
ADD CONSTRAINT fk_proyectoId
FOREIGN KEY (proyectoId)
REFERENCES proyectos(id);
