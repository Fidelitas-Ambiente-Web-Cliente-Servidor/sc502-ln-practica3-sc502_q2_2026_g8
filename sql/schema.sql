SET NAMES utf8mb4;

-- Crear y seleccionar la base de datos
CREATE DATABASE IF NOT EXISTS proyecto_db
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE proyecto_db;


-- TABLA: cursos_destacados (Estudiante 1 - Index)

CREATE TABLE IF NOT EXISTS cursos_destacados (
  id           INT           NOT NULL AUTO_INCREMENT,
  nombre       VARCHAR(100)  NOT NULL,
  descripcion  TEXT,
  imagen       VARCHAR(255),
  categoria    VARCHAR(50),
  duracion     INT,
  nivel        VARCHAR(30),
  created_at   TIMESTAMP     NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO cursos_destacados (nombre, descripcion, imagen, categoria, duracion, nivel) VALUES
  ('Desarrollo Web Full Stack', 'Aprende HTML, CSS, JavaScript, PHP y MySQL desde cero', 'Desarrolo web (1).jpg', 'Programación', 120, 'Intermedio'),
  ('Diseño UX/UI Profesional', 'Domina Figma, Adobe XD y principios de diseño centrado en el usuario', 'uxui (1).jpg', 'Diseño', 60, 'Principiante'),
  ('Node.js y Express', 'Desarrollo backend con Node.js, Express y MongoDB', 'node (1).jpg', 'Backend', 80, 'Avanzado');


-- TABLA: cursos (Estudiante 2 - Cursos) 

CREATE TABLE IF NOT EXISTS cursos (
  id           INT           NOT NULL AUTO_INCREMENT,
  nombre       VARCHAR(100)  NOT NULL,
  descripcion  TEXT,
  categoria    VARCHAR(50)   NOT NULL,
  duracion     INT           NOT NULL,
  precio       DECIMAL(10,2) NOT NULL,
  imagen       VARCHAR(255),
  created_at   TIMESTAMP     NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO cursos (nombre, descripcion, categoria, duracion, precio, imagen) VALUES
  ('PHP Básico', 'Curso introductorio de PHP con POO y MySQL', 'Programación', 40, 150.00, 'datos.jpg'),
  ('JavaScript Avanzado', 'Curso de JavaScript con ES6+, async/await y APIs', 'Programación', 50, 200.00, 'frontend.jpg'),
  ('Docker para Desarrolladores', 'Introducción a contenedores y orquestación básica', 'DevOps', 30, 180.00, 'datos.jpg'),
  ('Bases de Datos SQL', 'MySQL, PostgreSQL y consultas avanzadas', 'Bases de Datos', 45, 170.00, 'sql.jpg'),
  ('HTML y CSS Moderno', 'Diseño web responsivo con Flexbox, Grid y animaciones', 'Frontend', 35, 120.00, 'frontend.jpg'),
  ('UX/UI Design', 'Principios de diseño centrado en el usuario', 'Diseño', 30, 160.00, 'uxui.jpg'),
  ('Node.js desde Cero', 'Desarrollo backend con Node.js y Express', 'Backend', 50, 210.00, 'node.jpg');


-- TABLA: profesores (Estudiante 3 - Profesores)

CREATE TABLE IF NOT EXISTS profesores (
  id           INT           NOT NULL AUTO_INCREMENT,
  nombre       VARCHAR(100)  NOT NULL,
  apellido     VARCHAR(100)  NOT NULL,
  email        VARCHAR(100)  NOT NULL,
  especialidad VARCHAR(100),
  biografia    TEXT,
  foto         VARCHAR(255),
  created_at   TIMESTAMP     NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO profesores (nombre, apellido, email, especialidad, biografia, foto) VALUES
  ('Carlos', 'Méndez', 'carlos.mendez@cursos.com', 'Programación', 'Ingeniero en Sistemas con 15 años de experiencia en desarrollo web', ''),
  ('Ana', 'Rodríguez', 'ana.rodriguez@cursos.com', 'Diseño UX/UI', 'Diseñadora con experiencia en empresas internacionales', ''),
  ('Luis', 'Fernández', 'luis.fernandez@cursos.com', 'Bases de Datos', 'Administrador de bases de datos con certificación en MySQL y PostgreSQL', ''),
  ('María', 'Castro', 'maria.castro@cursos.com', 'Backend', 'Especialista en Node.js y arquitectura de microservicios', ''),
  ('Javier', 'Solano', 'javier.solano@cursos.com', 'DevOps', 'Ingeniero con más de 10 años en infraestructura y contenedores', '');
