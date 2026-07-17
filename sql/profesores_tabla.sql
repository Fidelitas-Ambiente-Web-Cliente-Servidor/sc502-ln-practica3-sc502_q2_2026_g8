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
