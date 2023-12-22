# projet de restaurant o Cnamo

ce projet est un site web test pour le formation Devweb du cnam

## prérequis
Apache 2.4.54
MariDB 10.10.2
PHP 8.1.7
composer 2.6.5
NodeJS et NPM @TODO


## Installation

### Version dev
 il faut d'abord cloner l'application en local :
 ```
 ```
 git clone adresse du repo github
 ```
 ```
 Ensuite, il faut creer une BDD puis configurer les accès dans le fichier .env :
 ```
 ```
 DB_CONNECTION=mysql
 DB_HOST=127.0.0.1
 DB_PORT=3306
 DB_DATABASE=mon_application
 DB_USERNAME=mon_application
 DB_PASSWORD=123
```
```
Pour créer les tables et injecter des données de test, vous pouvez utiliser un script bash : 
```

```
./mkdb.sh
```
```
vous pouvez donner un nom à l'application dans le fichier .env : 
```
```
APP_NAME="Mon Application"
```

## utilistaion

dans le terminal

```
php artisan serve
```
Aller sur la page   [http://127.0.0.1:8000]
## Recommandations
### images d'ambiance

la taille recomandées 

Largeur : 1024 px
Hauteur : 768px

il vaut mieux utiliser des fichiers jpeg car il sont plus légers 

##Mentions légales

### Licences du projet

TODO

### droits d'auteur

toutes lse photosdu site en été réalisé par


