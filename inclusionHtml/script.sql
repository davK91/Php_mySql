DROP DATABASE IF EXISTS videogames;

-- Créer la base de données videogames
CREATE DATABASE videogames;

-- Utiliser la base de données videogames
USE videogames;

-- Créer la table game
CREATE TABLE game (
  id TINYINT PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(255),
  description TEXT,
  release_date DATE,
  poster VARCHAR(255),
  price DECIMAL(5,2)
);

-- Insérer quelques jeux vidéo dans la table game
INSERT INTO game (id, title, description, release_date, poster, price)
VALUES
  (1, 'Super Mario Bros.', 'Un jeu de plateforme classique de Nintendo.', '1985-09-13', 'https://example.com/super-mario-bros.jpg', 29.99),
  (2, 'The Legend of Zelda: Breath of the Wild', 'Un jeu d\'aventure de Nintendo pour la Nintendo Switch.', '2017-03-03', 'https://example.com/breath-of-the-wild.jpg', 59.99),
  (3, 'Minecraft', 'Un jeu de sandbox populaire développé par Mojang.', '2011-11-18', 'https://example.com/minecraft.jpg', 24.99);
