-- Création de la base de données
CREATE DATABASE IF NOT EXISTS projet;

-- Utilisation de la base de données
USE projet;

-- Création de la table "posts"
CREATE TABLE IF NOT EXISTS posts (
    id BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    slug VARCHAR(255) NOT NULL,
    excerpt VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    thumbnail VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Création de la table "categories"
CREATE TABLE IF NOT EXISTS categories (
    id BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    slug VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Création de la table "encyclopedias"
CREATE TABLE IF NOT EXISTS encyclopedias (
    id BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    thumbnail VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Création de la table "types"
CREATE TABLE IF NOT EXISTS types (
    id BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    slug VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Création de la table "sub_types"
CREATE TABLE IF NOT EXISTS sub_types (
    id BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    slug VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Création de la table "users"
CREATE TABLE IF NOT EXISTS users (
    id BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    pseudo VARCHAR(100) NOT NULL,
    avatar VARCHAR(255) NOT NULL,
    rgpd BOOLEAN NOT NULL,
    newsletters BOOLEAN NOT NULL,
    role ENUM('admin', 'redactor', 'default') NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Création de la table "contacts"
CREATE TABLE IF NOT EXISTS contacts (
    id BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    subject VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    rgpd BOOLEAN NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Création de la table "faqs"
CREATE TABLE IF NOT EXISTS f_a_q_s (
    id BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    question TEXT NOT NULL,
    answer TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Création de la table "comments"
CREATE TABLE IF NOT EXISTS comments (
    id BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    content VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Création de la table "encyclopedia_sub_types" pour la relation many-to-many
CREATE TABLE IF NOT EXISTS encyclopedia_sub_types (
    encyclopedia_id BIGINT UNSIGNED NOT NULL,
    sub_type_id BIGINT UNSIGNED NOT NULL,
    PRIMARY KEY (encyclopedia_id, sub_type_id),
    FOREIGN KEY (encyclopedia_id) REFERENCES encyclopedias(id) ON DELETE CASCADE,
    FOREIGN KEY (sub_type_id) REFERENCES sub_types(id) ON DELETE CASCADE
);

-- Ajout de la clé étrangère "category_id" à la table "posts"
ALTER TABLE posts
ADD COLUMN category_id BIGINT UNSIGNED,
ADD CONSTRAINT FK_posts_categories FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE SET NULL;

-- Ajout de la clé étrangère "type_id" à la table "encyclopedias"
ALTER TABLE encyclopedias
ADD COLUMN type_id BIGINT UNSIGNED,
ADD CONSTRAINT FK_encyclopedias_types FOREIGN KEY (type_id) REFERENCES types(id) ON DELETE SET NULL;

-- Ajout de la clé étrangère "post_id" à la table "comments"
ALTER TABLE comments
ADD COLUMN post_id BIGINT UNSIGNED,
ADD CONSTRAINT FK_comments_posts FOREIGN KEY (post_id) REFERENCES posts(id) ON DELETE SET NULL;

-- Ajout de la clé étrangère "user_id" à la table "comments"
ALTER TABLE comments
ADD COLUMN user_id BIGINT UNSIGNED,
ADD CONSTRAINT FK_comments_users FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE SET NULL;
