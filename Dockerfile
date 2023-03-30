# Establece la imagen base
FROM php:7.4-apache

# Instala las extensiones PHP necesarias
RUN docker-php-ext-install mysqli

# Copia los archivos de la aplicación al contenedor
COPY . /var/www/html

# Configura las variables de entorno para la base de datos
ENV DB_HOST=localhost \
    DB_USER=Root \
    DB_PASSWORD=1234 \
    DB_NAME=cine

# Expone el puerto 80 para que pueda ser accesible desde fuera del contenedor
EXPOSE 80