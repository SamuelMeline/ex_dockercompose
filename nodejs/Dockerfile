# Utiliser l'image officielle de Node.js comme base
FROM node

# Définir le répertoire de travail dans le conteneur
WORKDIR /app

# Copier le fichier package.json et package-lock.json dans le répertoire de travail
COPY ./esport-api/package.json /app

# Installer les dépendances de l'application
RUN npm install

# Copier le reste de l'application dans le répertoire de travail
COPY ./esport-api /app

# Exposer le port sur lequel l'application sera exécutée
EXPOSE 3000

# Démarrer l'application
CMD ["npm", "start"]
