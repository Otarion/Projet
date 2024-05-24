--Création de la base de donnée
CREATE DATABASE IF NOT EXISTS projet;

--Utilisation de la base de données
USE projet;

--Création de la table "posts"
CREATE TABLE IF NOT EXISTS posts (
    id BIGINT unsigned PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR (255) NOT NULL,
    slug VARCHAR (255) NOT NULL,
    excerpt VARCHAR (255) NOT NULL,
    content TEXT NOT NULL,
    thumbnail VARCHAR (255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    uptated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

--Création de la table "categories"
