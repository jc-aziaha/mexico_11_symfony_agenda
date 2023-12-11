# Symfony agenda 

Pour créer un formulaire dans symfony : 
- Créer l'entité
- Se baser sur cette entité pour générer le type du formulaire
- Se baser sur ce type du formulaire pour créer le formulaire
- Passer la partie visible de ce formulaire à la page
- Afficher le formulaire

## Procédure de récupération du projet symfony sur GitHub
- Dans le terminal: git clone lien
- Charger le dossier cloné avec l'editeur de code
- composer install
- Créer le .env.local
- Y configurer les pilotes pour se connecter à la base de données
- Créer la base de données
- Migrer les données: symfony console doctrine:migrations:migrate
- Démarrer le serveur: symfony server:start 
- Se rendre dans le navigateur à l'adresse 
    - http://127.0.1:8000 ou  https://127.0.1:8000