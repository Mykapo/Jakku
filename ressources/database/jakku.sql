DROP DATABASE jakku_database_name;

CREATE DATABASE IF NOT EXISTS jakku_database_name
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

use jakku_database_name;

CREATE TABLE user (
  `id` SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `company_name` VARCHAR(255),
  `siret` VARCHAR(14),
  `name` VARCHAR(150),
  `address` TEXT,
  `email` TEXT,
  `logo` VARCHAR(36),
  `theme` TINYINT UNSIGNED,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE client (
  `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(150),
  `first_name` VARCHAR(150),
  `email` TEXT,
  `phone` VARCHAR(15),
  `website` TEXT,
  `createdAt` DATETIME DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE project (
  `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `client` BIGINT UNSIGNED,
  `title` VARCHAR(255),
  `status` TINYINT UNSIGNED,
  `price` INT,
  `devise` VARCHAR(10) DEFAULT "€",
  `deadline` DATETIME,
  `note` BIGINT UNSIGNED,
  `is_finished` BOOL DEFAULT FALSE,
  `createdAt` DATETIME DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`client`) REFERENCES client(`id`),
  INDEX client_index (`client`),
  INDEX notes_index (`note`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE document (
  `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` TINYINT UNSIGNED,
  `is_validated` BOOLEAN DEFAULT TRUE,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE project_document (
  `project_id` BIGINT UNSIGNED NOT NULL,
  `document_id` BIGINT UNSIGNED NOT NULL,
  PRIMARY KEY (`project_id`, `document_id`),
  INDEX reverse_pk_index (`document_id`, `project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE content (
  `id` BIGINT UNSIGNED NOT NULL,
  `title` VARCHAR(255),
  `description` TEXT,
  `document` BIGINT UNSIGNED NOT NULL,
  `price` INT,
  `devise` VARCHAR(10) DEFAULT "€",
  `createdAt` DATETIME DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`document`) REFERENCES document(`id`),
  INDEX document_index (`document`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE note (
  `id` BIGINT UNSIGNED NOT NULL,
  `file` VARCHAR(36),
  `post_it` TEXT,
  `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE USER 'jakku_user_name'@'jakku_host' IDENTIFIED BY "jakku_password";
GRANT ALL PRIVILEGES ON `jakku_database_name`.* TO 'jakku_user_name'@'jakku_host';
FLUSH PRIVILEGES;
