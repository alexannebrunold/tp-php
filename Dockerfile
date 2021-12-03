FROM php:7.4

WORKDIR /app

COPY package*.json ./

RUN apt-get update && apt-get install -y curl

RUN curl --silent --location https://deb.nodesource.com/setup_12.x | bash -
RUN apt-get install -y \
  nodejs
RUN echo "Node: " && node -v
RUN echo "NPM: " && npm -v

RUN npm install

COPY . .

ENV PORT=8080

EXPOSE 8080

CMD ["npm", "start"]