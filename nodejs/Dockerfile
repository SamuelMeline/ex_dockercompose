FROM node

WORKDIR /app

COPY ./esport-api/package.json /app

RUN npm install

COPY ./esport-api /app

EXPOSE 3000

CMD ["npm", "start"]
