# Utiliser l'image officielle d'ubuntu comme base
FROM ubuntu:latest

# Empêcher les interactions lors de l'installation des paquets
# ENV DEBIAN_FRONTEND=noninteractive

# Mettre à jour et installer Apache, PHP et les extensions nécessaires
RUN apt-get update && apt-get install -y \
    apache2 \
    php \
    libapache2-mod-php \
    php-mysql \
    php-gd \
    php-xml \
    php-mbstring \
    php-zip \
    php-curl \
    && apt-get clean

# Copier les applications front-end dans le répertoire web d'Apache
COPY esport-front /var/www/html/esport
COPY biblio /var/www/html/biblio

# Changer les droits pour le répertoire web
RUN chown -R www-data:www-data /var/www/html

# Activer le module rewrite d'Apache
RUN a2enmod rewrite

# Exposer le port 80 pour Apache
EXPOSE 80

# Démarrer Apache en tant que processus principal
CMD ["apachectl", "-D", "FOREGROUND"]