# Bootstrap website "KINGSTREEFOOD" v2

Mon site est celui d'un restaurant s'aventurant dans un concept "food truck". 

Les images que j'ai utilisé sont libre de droit.

J'ai décidé de créer une page html par lien.

    - Page d'acceuil
    - Menu
    - Notre histoire
    - Emplacements
    - Photos (3 pages séparées pour la pagination)
    - Contact

## Mise à jour effectués au site de base

* Envoi et lecture des informations de database
* Création d'une interface admin

## Info et tests Localhost Backend 

En local, les informations sont bien réceptionnés dans la base de données. 

1) Création du "table" de la base de donnée:

![MySQLworkbench.](https://i.ibb.co/PxWzVJB/table.png)

2) Réception des données du formulaire "contact":

![Réception des données](https://i.ibb.co/4JCS7vS/table1.png)

3) Les infos peuvent également être accesible dans le "admin panel" où elles sont répertoriées par ID et dates. Il y a également la possibilité d'effacer des entrées de la base de données via le script php "delete_contact.php":

![Interface Admin](https://i.ibb.co/9cwZ7Pr/admin-panel.png)

## Info et tests pour le sité dépoyé

Le déploiement a été effectué succès avec Heroku.

L'option de database gratuite (7giga)  pour la gestion de la partie backend (database) est lié.

J'ai caché les informations sensibles avec .gitignore et .env

## Points à améliorer/prohcaines étapes

Les fonctionnalités php ne réagissent pas comme celles qui sont sur le local server.

J'ai réussi à avoir toutes les infos de connection "Heroku Postgres" mais il y a surêment une erreur de connection.

