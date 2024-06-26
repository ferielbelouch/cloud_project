<h1>Projet Symfony - Vente de Billets d'Événements </h1>

<p>Bienvenue dans notre projet Symfony de vente de billets d'événements ! Ce projet vous permettra de gérer la vente de billets pour différents types d'événements et spectacles. </p>

Comment lancer le projet : <br>

Suivez ces étapes simples pour lancer le projet depuis le dépôt GitHub :

<h4>Prérequis</h4>
Assurez-vous d'avoir installé les éléments suivants sur votre système :

<ul>
  <li>
    PHP (version >= 7.4)
  </li>
   <li>
    Composer
  </li>
   <li>
    Symfony CLI
  </li>
   <li>
    MySQL (ou tout autre SGBD supporté par Symfony)
  </li>
</ul>




<h4>Étapes</h4>

1. Clonez le dépôt
```bash
git clone https://github.com/votre-utilisateur/vente-billets-projet.git
```

Installez les dépendancesDéplacez-vous dans le répertoire du projet et exécutez la commande suivante pour installer les dépendances via Composer :
```bash
cd vente-billets-projet
```
composer install
Configurer l'environnement
Dupliquez le fichier .env pour créer un fichier .env.local :
```bash
cp .env .env.local
```

Modifiez les paramètres de connexion à la base de données dans le fichier .env.local selon votre configuration locale :
plaintext
```.env
DATABASE_URL=mysql://user:password@127.0.0.1:3306/db_name
```

Créez la base de donnéesExécutez les commandes suivantes pour créer la base de données et les tables :
```bash

php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
```

Lancez le serveur SymfonyLancez le serveur Symfony avec la commande suivante :
```bash

symfony serve
```

Accédez au siteOuvrez votre navigateur et accédez à l'URL suivante :
```navigateur
http://localhost:8000
```

Accédez au panel adminPour accéder au panel admin, allez à l'URL suivante :
```navigateur

http://localhost:8000/admin
```

