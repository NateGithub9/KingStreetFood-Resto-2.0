# Bootstrap website "KINGSTREEFOOD" v2

Mon site est celui d'un restaurant s'aventurant dans un concept "food truck".

Les images que j'ai utilisées sont libres de droits.

J'ai décidé de créer une page HTML par lien.

- Page d'accueil
- Menu
- Notre histoire
- Emplacements
- Photos (3 pages séparées pour la pagination)
- Contact

## Mise à jour effectuée au site de base

* Envoi et lecture des informations de la base de données
* Création d'une interface admin

## Info et tests Localhost Backend

En local, les informations sont bien reçues dans la base de données.

1) Création de la table de la base de données :

![MySQL Workbench](https://i.ibb.co/PxWzVJB/table.png)

2) Réception des données du formulaire "contact" :

![Réception des données](https://i.ibb.co/4JCS7vS/table1.png)

3) Les infos peuvent également être accessibles dans le "admin panel" où elles sont répertoriées par ID et dates. Il y a également la possibilité d'effacer des entrées de la base de données via le script PHP "delete_contact.php" :

![Interface Admin](https://i.ibb.co/9cwZ7Pr/admin-panel.png)

## Info et tests pour le site déployé

Le déploiement a été effectué avec succès sur Heroku.

L'option de base de données gratuite (7 Go) pour la gestion de la partie backend (base de données) est liée.

J'ai caché les informations sensibles avec .gitignore et .env.

## Points à améliorer/prochaines étapes

Les fonctionnalités PHP ne réagissent pas comme celles qui sont sur le serveur local.

J'ai réussi à obtenir toutes les informations de connexion "Heroku Postgres", mais il y a sûrement une erreur de connexion. 

---

J'ai effectué des corrections grammaticales et orthographiques pour améliorer la clarté et la lisibilité de votre document.