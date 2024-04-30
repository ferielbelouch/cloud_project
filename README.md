<h1>Projet Symfony - Vente de Billets d'Événements </h1>

Bienvenue dans notre projet Symfony de vente de billets d'événements ! Ce projet vous permettra de gérer la vente de billets pour différents types d'événements et spectacles.

Comment lancer le projet
Suivez ces étapes simples pour lancer le projet depuis le dépôt GitHub :

Prérequis
Assurez-vous d'avoir installé les éléments suivants sur votre système :

PHP (version >= 7.4)
Composer
Symfony CLI
MySQL (ou tout autre SGBD supporté par Symfony)
Étapes
Clonez le dépôt
bash
Copy code
git clone https://github.com/votre-utilisateur/vente-billets-projet.git
Installez les dépendancesDéplacez-vous dans le répertoire du projet et exécutez la commande suivante pour installer les dépendances via Composer :
bash
Copy code
cd vente-billets-projet
composer install
Configurer l'environnement
Dupliquez le fichier .env pour créer un fichier .env.local :
bash
Copy code
cp .env .env.local
Modifiez les paramètres de connexion à la base de données dans le fichier .env.local selon votre configuration locale :
plaintext
Copy code
DATABASE_URL=mysql://user:password@127.0.0.1:3306/db_name
Créez la base de donnéesExécutez les commandes suivantes pour créer la base de données et les tables :
bash
Copy code
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
Lancez le serveur SymfonyLancez le serveur Symfony avec la commande suivante :
bash
Copy code
symfony serve
Accédez au siteOuvrez votre navigateur et accédez à l'URL suivante :
plaintext
Copy code
http://localhost:8000
Accédez au panel adminPour accéder au panel admin, allez à l'URL suivante :
plaintext
Copy code
http://localhost:8000/admin
Contribuer
Si vous souhaitez contribuer à ce projet, nous vous encourageons à :

Forker le dépôt
Créer une branche pour votre fonctionnalité (git checkout -b feature/NomDeLaFonctionnalite)
Committer vos changements (git commit -am 'Ajout d'une nouvelle fonctionnalité')
Pousser la branche (git push origin feature/NomDeLaFonctionnalite)
Créer une nouvelle Pull Request
