-- Création de la base de données
CREATE DATABASE IF NOT EXISTS ecommerce;
USE ecommerce;

-- Création de la table "products"
CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    image VARCHAR(255) NOT NULL
);

-- Insertion des données dans "products"
INSERT INTO products (name, description, price, image)
VALUES
('T-shirt blanc', 'Un t-shirt en coton blanc pour un look décontracté.', 15.99, 'tshirt_blanc.jpg'),
('Jeans Slim', 'Jeans slim fit pour un style moderne.', 39.99, 'jeans_slim.jpg');
