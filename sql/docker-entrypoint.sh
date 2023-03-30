#!/bin/bash
set -e

# Inicia MySQL
mysqld --user=mysql --console &

# Espera a que MySQL esté en línea
until mysqladmin ping &>/dev/null; do
  echo "Esperando a que MySQL esté en línea ..."
  sleep 1
done

# Crea la tabla "peliculas"
mysql -uroot -p1234 cine -e "CREATE TABLE peliculas (
  id INT(11) NOT NULL AUTO_INCREMENT,
  titulo VARCHAR(255) NOT NULL,
  director VARCHAR(255) NOT NULL,
  sinopsis TEXT NOT NULL,
  nacionalidad VARCHAR(20),NOT NULL,
  anyo VARCHAR(20),NOT NULL,
  id_genero INT(11) ,NOT NULL,
  poster VARCHAR(255) ,NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;"

# Ejecuta el script de inserción de datos
mysql -uroot -p1234 cine < /docker-entrypoint-initdb.d/peliculas.sql

# Detiene MySQL
mysqladmin shutdown
