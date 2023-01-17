# appMultilingue
Un mini projet de gestion d'école, développé avec Symfony 6
<hr>
//version php Utilise php8.1.14

//Creer une nouvelle application Symfony
symfony new Nom-Votre-App --full --version=6.0

Les Entity (Enseignant - Module - Semestre - Secteur - Etudiant - Notes)
   - L'enseignant enseigne des modules
   - Le module appartient à un secteur
   - Le module concerne un semestre
   - L'étudiant peut avoir des notes dans plusieurs modules
   - Le module contient plusieurs notes d'étudiants

//Lancer l'application
symfony serve

//navigate to server
http://127.0.0.1:8000

//modifier le fichier .env
 DATABASE_URL="mysql://root:votrepassword@127.0.0.1:3306/nomdepasededonnee?serverVersion=8&charset=utf8mb4"

//creation de la base de données selon les paramètres du fichier .env
symfony console doctrine:database:create

//creation de toutes les entités et des relation
symfony console make:entity

//creation des tables sur la base de données
symfony console make:migration
symfony console doctrine:migrations:migrate

//Creation des utilisateurs de systems
symfony console make:user

//Installation authenticator
symfony console make:auth 

//Formulaire Inscription
symfony console make:registration 

//Instalattion de bundle reset-password
composer require symfonycasts/reset-password-bundle 
symfony console make:reset-password

//Dans le fichie .env decommander 
MAILER_DSN=null://null

//installer les fixtures: 
vont permettre d'insérer de fausses données en base de données pour nous aider à développer plus facilement
composer require zenstruck/foundry --dev
composer require orm-fixtures --dev

//Pour remplir les tables 
symfony console make:factory

//Lancer les fixtures 
symfony console doctrine:fixtures:load

//Installation de dashboard
composer require admin

//Ajouter le controller admin a toutes les entités
symfony console make:admin:crud

installer node js  https://nodejs.org/en/download/
composer require symfony/webpack-encore-bundle
yarn install
yarn add jquery
yarn add sass-loader  sass --dev
yarn add postcss-loader  autoprefixer --dev
npm install --save-dev @fortawesome/fontawesome-free
yarn add file-loader@^6.0.0 --dev
yarn add bootstrap
