-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema epiz_22929878_pweb2_cms
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema epiz_22929878_pweb2_cms
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `epiz_22929878_pweb2_cms` DEFAULT CHARACTER SET utf8 ;
USE `epiz_22929878_pweb2_cms` ;

-- -----------------------------------------------------
-- Table `epiz_22929878_pweb2_cms`.`banners`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `epiz_22929878_pweb2_cms`.`banners` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(45) NOT NULL,
  `subtitle` VARCHAR(45) NOT NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  `updated_at` TIMESTAMP NULL ON UPDATE CURRENT_TIMESTAMP(),
  `active` TINYINT NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`))
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `epiz_22929878_pweb2_cms`.`pages`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `epiz_22929878_pweb2_cms`.`pages` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(45) NOT NULL,
  `text` TEXT NOT NULL,
  `slug` VARCHAR(45) NOT NULL,
  `banner_id` INT UNSIGNED NULL,
  `photos_id` INT UNSIGNED NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  `updated_at` TIMESTAMP NULL ON UPDATE CURRENT_TIMESTAMP(),
  `active` TINYINT NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  INDEX `pages_banners_fk_idx` (`banner_id` ASC),
  CONSTRAINT `pages_banners_fk`
    FOREIGN KEY (`banner_id`)
    REFERENCES `epiz_22929878_pweb2_cms`.`banners` (`id`)
    ON DELETE RESTRICT
    ON UPDATE NO ACTION)
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `epiz_22929878_pweb2_cms`.`pages_photos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `epiz_22929878_pweb2_cms`.`pages_photos` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `page_id` INT UNSIGNED NULL,
  `photo_id` INT UNSIGNED NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  `update_at` TIMESTAMP NULL ON UPDATE CURRENT_TIMESTAMP(),
  `active` TINYINT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  INDEX `pagesphotos_pages_fk_idx` (`page_id` ASC),
  CONSTRAINT `pagesphotos_pages_fk`
    FOREIGN KEY (`page_id`)
    REFERENCES `epiz_22929878_pweb2_cms`.`pages` (`id`)
    ON DELETE RESTRICT
    ON UPDATE NO ACTION)
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `epiz_22929878_pweb2_cms`.`banners_photos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `epiz_22929878_pweb2_cms`.`banners_photos` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `banners_id` INT UNSIGNED NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  `updated_at` TIMESTAMP NULL ON UPDATE CURRENT_TIMESTAMP(),
  `active` TINYINT NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  INDEX `bannersphotos_banners_fk_idx` (`banners_id` ASC),
  CONSTRAINT `bannersphotos_banners_fk`
    FOREIGN KEY (`banners_id`)
    REFERENCES `epiz_22929878_pweb2_cms`.`banners` (`id`)
    ON DELETE RESTRICT
    ON UPDATE NO ACTION)
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `epiz_22929878_pweb2_cms`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `epiz_22929878_pweb2_cms`.`users` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `login` VARCHAR(45) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  `updated_at` TIMESTAMP NULL ON UPDATE CURRENT_TIMESTAMP(),
  `active` TINYINT NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `login_UNIQUE` (`login` ASC))
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `epiz_22929878_pweb2_cms`.`news`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `epiz_22929878_pweb2_cms`.`news` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(90) NOT NULL,
  `content` TEXT NOT NULL,
  `date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  `id_users` INT UNSIGNED NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  `updated_at` TIMESTAMP NULL ON UPDATE CURRENT_TIMESTAMP(),
  `active` INT NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  INDEX `news_users_fk_idx` (`id_users` ASC),
  CONSTRAINT `news_users_fk`
    FOREIGN KEY (`id_users`)
    REFERENCES `epiz_22929878_pweb2_cms`.`users` (`id`)
    ON DELETE RESTRICT
    ON UPDATE NO ACTION)
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `epiz_22929878_pweb2_cms`.`photos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `epiz_22929878_pweb2_cms`.`photos` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `photo_name` VARCHAR(255) NOT NULL,
  `photo_title` VARCHAR(45) NOT NULL,
  `page_id` INT UNSIGNED NULL,
  `news_id` INT UNSIGNED NULL,
  `banners_id` INT UNSIGNED NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  `updated_at` TIMESTAMP NULL ON UPDATE CURRENT_TIMESTAMP(),
  `active` TINYINT NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  INDEX `photos_pagesphotos_fk_idx` (`page_id` ASC),
  INDEX `photos_bannersphotos_fk_idx` (`banners_id` ASC),
  CONSTRAINT `photos_pagesphotos_fk`
    FOREIGN KEY (`page_id`)
    REFERENCES `epiz_22929878_pweb2_cms`.`pages_photos` (`id`)
    ON DELETE RESTRICT
    ON UPDATE NO ACTION,
  CONSTRAINT `photos_bannersphotos_fk`
    FOREIGN KEY (`banners_id`)
    REFERENCES `epiz_22929878_pweb2_cms`.`banners_photos` (`id`)
    ON DELETE RESTRICT
    ON UPDATE NO ACTION,
  CONSTRAINT `photos_newsphotos_fk`
    FOREIGN KEY (`id`)
    REFERENCES `epiz_22929878_pweb2_cms`.`news` (`id`)
    ON DELETE RESTRICT
    ON UPDATE NO ACTION)
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `epiz_22929878_pweb2_cms`.`faqs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `epiz_22929878_pweb2_cms`.`faqs` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `question` VARCHAR(255) NOT NULL,
  `answer` VARCHAR(255) NOT NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  `updated_at` TIMESTAMP NULL ON UPDATE CURRENT_TIMESTAMP(),
  `active` TINYINT NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`))
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `epiz_22929878_pweb2_cms`.`contact_us`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `epiz_22929878_pweb2_cms`.`contact_us` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(90) NOT NULL,
  `email` VARCHAR(90) NOT NULL,
  `message` TEXT NOT NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  `updated_at` TIMESTAMP NULL ON UPDATE CURRENT_TIMESTAMP(),
  `active` TINYINT NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`))
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `epiz_22929878_pweb2_cms`.`videos_gallery`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `epiz_22929878_pweb2_cms`.`videos_gallery` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `news_id` INT UNSIGNED NULL,
  `name` VARCHAR(45) NOT NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  `updated_at` TIMESTAMP NULL ON UPDATE CURRENT_TIMESTAMP(),
  `active` INT NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  INDEX `videosgallery_news_id_idx` (`news_id` ASC),
  CONSTRAINT `videosgallery_news_id`
    FOREIGN KEY (`news_id`)
    REFERENCES `epiz_22929878_pweb2_cms`.`news` (`id`)
    ON DELETE NO ACTION
    ON UPDATE RESTRICT)
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `epiz_22929878_pweb2_cms`.`videos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `epiz_22929878_pweb2_cms`.`videos` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `gallery_id` INT UNSIGNED NULL,
  `name` VARCHAR(45) NOT NULL,
  `youtube_url` VARCHAR(135) NOT NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  `updated_at` TIMESTAMP NULL ON UPDATE CURRENT_TIMESTAMP(),
  `active` INT NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  INDEX `videos_videosgallery_fk_idx` (`gallery_id` ASC),
  CONSTRAINT `videos_videosgallery_fk`
    FOREIGN KEY (`gallery_id`)
    REFERENCES `epiz_22929878_pweb2_cms`.`videos_gallery` (`id`)
    ON DELETE RESTRICT
    ON UPDATE NO ACTION)
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `epiz_22929878_pweb2_cms`.`info`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `epiz_22929878_pweb2_cms`.`info` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(45) NOT NULL,
  `phone` VARCHAR(20) NOT NULL,
  `facebook` VARCHAR(100) NULL,
  `twitter` VARCHAR(100) NULL,
  `instagram` VARCHAR(100) NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  `updated_at` TIMESTAMP NULL ON UPDATE CURRENT_TIMESTAMP(),
  `active` TINYINT(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`))
ENGINE = MyISAM;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `epiz_22929878_pweb2_cms`.`users`
-- -----------------------------------------------------
START TRANSACTION;
USE `epiz_22929878_pweb2_cms`;
INSERT INTO `epiz_22929878_pweb2_cms`.`users` (`id`, `login`, `password`, `created_at`, `updated_at`, `active`) VALUES (1, 'admin', 'boss', DEFAULT, NULL, DEFAULT);

COMMIT;

