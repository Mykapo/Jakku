CREATE DATABASE IF NOT EXISTS jakku_database_name
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

use jakku_database_name;

CREATE TABLE user(
  `id` SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `company_name` VARCHAR(255),
  `siret` VARCHAR(14),
  `name` VARCHAR(150),
  `address` TEXT,
  `email` TEXT,
  `logo` VARCHAR(36),
  `theme` TINYINT UNSIGNED
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE client (
  `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(150) NOT NULL,
  `first_name` VARCHAR(150),
  `email` TEXT,
  `phone` VARCHAR(15),
  `website` TEXT,
  `createdAt` DATE DEFAULT NOW(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


