# issatex

Mini Projet pour Atelier Conception - Scrum Organisation: Master Pro

## Technologies utilisé:
- BackEnd: Symfony 5.4
- Containerization: Docker/Docker-Compose
- FrontEnd: Bootstrap 5

## Fonctionnalités:
- gestion des ilots
- gestion des Ordres de Fabrication habituelle/urgent
- planification des Ordres de Fabrication
- traitement des Quantité/Qualité journalièrement des articles
- calcul du rendement journalier/hebdomadaire/mensuel/annuel de chaque ilot
- gestion du stock des articles(tisu, fourniture, produit finis)
- système de notification envoyer au client/donneur d’ordre (si OF change d’etat)

## Requirements:

- php 8.3 
- composer 
- nodejs >= 20
- yarn
- Docker

## Setup:
```bash
> git clone https://github.com/MarwenTlili/issatex_docker.git
> cd issatex_docker
```

```bash
# install yarn dependencies
yarn install

# install composer dependencies
composer install

# create database
symfony console doctrine:database:create

# make a new migration files
symfony console make:migration

# execute migrations
symfony console doctrine:migrations:migrate

# load fixtures for test
symfony console doctrine:fixtures:load

# run docker containers
docker compose up -d
```

for test you can use those logins  
client:
email: client1@gmail.com pw: client1

gerant:
email: gerant@gmail.com pw: gerant

secretaire:
email: secretaire@gmail.com pw: secretaire

```bash
# mysql root user 
# see mysql logs to check your own generated root password
> docker logs issatex_docker-database -f
> mysql -u root -p 
Enter password: r3TTtpIZ3MH2iNhQcRp+eJcAkXIzxtRJ
```
