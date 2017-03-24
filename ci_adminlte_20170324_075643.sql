-- Valentina Studio --
-- MySQL dump --
-- ---------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- ---------------------------------------------------------


-- CREATE DATABASE "ci_adminlte" ---------------------------
CREATE DATABASE IF NOT EXISTS `ci_adminlte` CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ci_adminlte`;
-- ---------------------------------------------------------


-- CREATE TABLE "admin_preferences" ------------------------
-- DROP TABLE "admin_preferences" ------------------------------
DROP TABLE IF EXISTS `admin_preferences` CASCADE;
-- -------------------------------------------------------------


-- CREATE TABLE "admin_preferences" ----------------------------
CREATE TABLE `admin_preferences` ( 
	`id` TinyInt( 1 ) AUTO_INCREMENT NOT NULL,
	`user_panel` TinyInt( 1 ) NOT NULL DEFAULT '0',
	`sidebar_form` TinyInt( 1 ) NOT NULL DEFAULT '0',
	`messages_menu` TinyInt( 1 ) NOT NULL DEFAULT '0',
	`notifications_menu` TinyInt( 1 ) NOT NULL DEFAULT '0',
	`tasks_menu` TinyInt( 1 ) NOT NULL DEFAULT '0',
	`user_menu` TinyInt( 1 ) NOT NULL DEFAULT '1',
	`ctrl_sidebar` TinyInt( 1 ) NOT NULL DEFAULT '0',
	`transition_page` TinyInt( 1 ) NOT NULL DEFAULT '0',
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 2;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "categories" -------------------------------
-- DROP TABLE "categories" -------------------------------------
DROP TABLE IF EXISTS `categories` CASCADE;
-- -------------------------------------------------------------


-- CREATE TABLE "categories" -----------------------------------
CREATE TABLE `categories` ( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`name` VarChar( 100 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = latin1
COLLATE = latin1_swedish_ci
COMMENT 'latin1_swedish_ci'
ENGINE = InnoDB
AUTO_INCREMENT = 3;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "ci_sessions" ------------------------------
-- DROP TABLE "ci_sessions" ------------------------------------
DROP TABLE IF EXISTS `ci_sessions` CASCADE;
-- -------------------------------------------------------------


-- CREATE TABLE "ci_sessions" ----------------------------------
CREATE TABLE `ci_sessions` ( 
	`id` VarChar( 40 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`ip_address` VarChar( 45 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`timestamp` Int( 10 ) UNSIGNED NOT NULL DEFAULT '0',
	`data` Blob NOT NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = latin1
COLLATE = latin1_swedish_ci
ENGINE = InnoDB;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "groups" -----------------------------------
-- DROP TABLE "groups" -----------------------------------------
DROP TABLE IF EXISTS `groups` CASCADE;
-- -------------------------------------------------------------


-- CREATE TABLE "groups" ---------------------------------------
CREATE TABLE `groups` ( 
	`id` MediumInt( 8 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`name` VarChar( 20 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`description` VarChar( 100 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`bgcolor` Char( 7 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '#607D8B',
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 3;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "home_images" ------------------------------
-- DROP TABLE "home_images" ------------------------------------
DROP TABLE IF EXISTS `home_images` CASCADE;
-- -------------------------------------------------------------


-- CREATE TABLE "home_images" ----------------------------------
CREATE TABLE `home_images` ( 
	`id` Int( 255 ) AUTO_INCREMENT NOT NULL,
	`file` VarChar( 255 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`status` Int( 255 ) NOT NULL DEFAULT '0',
	PRIMARY KEY ( `id` ) )
CHARACTER SET = latin1
COLLATE = latin1_swedish_ci
ENGINE = InnoDB
AUTO_INCREMENT = 8;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "login_attempts" ---------------------------
-- DROP TABLE "login_attempts" ---------------------------------
DROP TABLE IF EXISTS `login_attempts` CASCADE;
-- -------------------------------------------------------------


-- CREATE TABLE "login_attempts" -------------------------------
CREATE TABLE `login_attempts` ( 
	`id` Int( 11 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`ip_address` VarChar( 15 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`login` VarChar( 100 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`time` Int( 11 ) UNSIGNED NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "menu" -------------------------------------
-- DROP TABLE "menu" -------------------------------------------
DROP TABLE IF EXISTS `menu` CASCADE;
-- -------------------------------------------------------------


-- CREATE TABLE "menu" -----------------------------------------
CREATE TABLE `menu` ( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`id_categories` Int( 11 ) NOT NULL,
	`name` VarChar( 100 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = latin1
COLLATE = latin1_swedish_ci
COMMENT 'latin1_swedish_ci'
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "products" ---------------------------------
-- DROP TABLE "products" ---------------------------------------
DROP TABLE IF EXISTS `products` CASCADE;
-- -------------------------------------------------------------


-- CREATE TABLE "products" -------------------------------------
CREATE TABLE `products` ( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`name` VarChar( 255 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`file` Text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`id_categories` Int( 11 ) NOT NULL,
	`description` Text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = latin1
COLLATE = latin1_swedish_ci
COMMENT 'latin1_swedish_ci'
ENGINE = InnoDB
AUTO_INCREMENT = 6;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "public_preferences" -----------------------
-- DROP TABLE "public_preferences" -----------------------------
DROP TABLE IF EXISTS `public_preferences` CASCADE;
-- -------------------------------------------------------------


-- CREATE TABLE "public_preferences" ---------------------------
CREATE TABLE `public_preferences` ( 
	`id` Int( 1 ) AUTO_INCREMENT NOT NULL,
	`transition_page` TinyInt( 1 ) NOT NULL DEFAULT '0',
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 2;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "users" ------------------------------------
-- DROP TABLE "users" ------------------------------------------
DROP TABLE IF EXISTS `users` CASCADE;
-- -------------------------------------------------------------


-- CREATE TABLE "users" ----------------------------------------
CREATE TABLE `users` ( 
	`id` Int( 11 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`ip_address` VarChar( 15 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`username` VarChar( 100 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`password` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`salt` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`email` VarChar( 100 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`activation_code` VarChar( 40 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`forgotten_password_code` VarChar( 40 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`forgotten_password_time` Int( 11 ) UNSIGNED NULL,
	`remember_code` VarChar( 40 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`created_on` Int( 11 ) UNSIGNED NOT NULL,
	`last_login` Int( 11 ) UNSIGNED NULL,
	`active` TinyInt( 1 ) UNSIGNED NULL,
	`first_name` VarChar( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`last_name` VarChar( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`company` VarChar( 100 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`phone` VarChar( 20 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 2;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "users_groups" -----------------------------
-- DROP TABLE "users_groups" -----------------------------------
DROP TABLE IF EXISTS `users_groups` CASCADE;
-- -------------------------------------------------------------


-- CREATE TABLE "users_groups" ---------------------------------
CREATE TABLE `users_groups` ( 
	`id` Int( 11 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`user_id` Int( 11 ) UNSIGNED NOT NULL,
	`group_id` MediumInt( 8 ) UNSIGNED NOT NULL,
	PRIMARY KEY ( `id` ),
	CONSTRAINT `uc_users_groups` UNIQUE( `user_id`, `group_id` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 2;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- Dump data of "admin_preferences" ------------------------
BEGIN;

INSERT INTO `admin_preferences`(`id`,`user_panel`,`sidebar_form`,`messages_menu`,`notifications_menu`,`tasks_menu`,`user_menu`,`ctrl_sidebar`,`transition_page`) VALUES ( '1', '0', '0', '0', '0', '0', '1', '1', '1' );
COMMIT;
-- ---------------------------------------------------------


-- Dump data of "categories" -------------------------------
BEGIN;

INSERT INTO `categories`(`id`,`name`) VALUES ( '1', 'aqiqah' );
INSERT INTO `categories`(`id`,`name`) VALUES ( '2', 'catering' );
COMMIT;
-- ---------------------------------------------------------


-- Dump data of "ci_sessions" ------------------------------
BEGIN;

INSERT INTO `ci_sessions`(`id`,`ip_address`,`timestamp`,`data`) VALUES ( '53958c2c103695e538a00af4621cc49c69bb1df9', '172.17.0.1', '1490251672', 0x5F5F63695F6C6173745F726567656E65726174657C693A313439303235313533393B );
INSERT INTO `ci_sessions`(`id`,`ip_address`,`timestamp`,`data`) VALUES ( 'c97fa55cca55bc01f236eef746084a396c5d1b37', '172.17.0.1', '1490255740', 0x5F5F63695F6C6173745F726567656E65726174657C693A313439303235353531333B6964656E746974797C733A31353A2261646D696E4061646D696E2E636F6D223B656D61696C7C733A31353A2261646D696E4061646D696E2E636F6D223B757365725F69647C733A313A2231223B6F6C645F6C6173745F6C6F67696E7C733A31303A2231343839363639313433223B );
INSERT INTO `ci_sessions`(`id`,`ip_address`,`timestamp`,`data`) VALUES ( 'eaad745dbec566367cfa7cc12c964bc06bf6b79c', '172.17.0.1', '1490261911', 0x5F5F63695F6C6173745F726567656E65726174657C693A313439303236313633323B6964656E746974797C733A31353A2261646D696E4061646D696E2E636F6D223B656D61696C7C733A31353A2261646D696E4061646D696E2E636F6D223B757365725F69647C733A313A2231223B6F6C645F6C6173745F6C6F67696E7C733A31303A2231343930323531353533223B );
INSERT INTO `ci_sessions`(`id`,`ip_address`,`timestamp`,`data`) VALUES ( 'fbe731494cf8d482caba9f0959a1e5790509dd33', '172.17.0.1', '1490261913', 0x5F5F63695F6C6173745F726567656E65726174657C693A313439303236313633363B );
COMMIT;
-- ---------------------------------------------------------


-- Dump data of "groups" -----------------------------------
BEGIN;

INSERT INTO `groups`(`id`,`name`,`description`,`bgcolor`) VALUES ( '1', 'admin', 'Administrator', '#000000' );
INSERT INTO `groups`(`id`,`name`,`description`,`bgcolor`) VALUES ( '2', 'members', 'General User', '#2196F3' );
COMMIT;
-- ---------------------------------------------------------


-- Dump data of "home_images" ------------------------------
BEGIN;

INSERT INTO `home_images`(`id`,`file`,`status`) VALUES ( '6', 'l.jpg', '1' );
INSERT INTO `home_images`(`id`,`file`,`status`) VALUES ( '7', 'jCCsCae7RwCDOKTCA2Ji_reggeli_-_sonkás_szendvics.jpg', '2' );
COMMIT;
-- ---------------------------------------------------------


-- Dump data of "login_attempts" ---------------------------
-- ---------------------------------------------------------


-- Dump data of "menu" -------------------------------------
-- ---------------------------------------------------------


-- Dump data of "products" ---------------------------------
BEGIN;

INSERT INTO `products`(`id`,`name`,`file`,`id_categories`,`description`) VALUES ( '5', 'amal1', 'bismillah_by_cccmematiccc.png', '1', '<h1><em>=dasdasdsad</em></h1>' );
COMMIT;
-- ---------------------------------------------------------


-- Dump data of "public_preferences" -----------------------
BEGIN;

INSERT INTO `public_preferences`(`id`,`transition_page`) VALUES ( '1', '1' );
COMMIT;
-- ---------------------------------------------------------


-- Dump data of "users" ------------------------------------
BEGIN;

INSERT INTO `users`(`id`,`ip_address`,`username`,`password`,`salt`,`email`,`activation_code`,`forgotten_password_code`,`forgotten_password_time`,`remember_code`,`created_on`,`last_login`,`active`,`first_name`,`last_name`,`company`,`phone`) VALUES ( '1', '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, '.qXhVex.3CLixvHqxX4kru', '1268889823', '1490261267', '1', 'Admin', 'istrator', 'ADMIN', '0' );
COMMIT;
-- ---------------------------------------------------------


-- Dump data of "users_groups" -----------------------------
BEGIN;

INSERT INTO `users_groups`(`id`,`user_id`,`group_id`) VALUES ( '1', '1', '1' );
COMMIT;
-- ---------------------------------------------------------


-- CREATE INDEX "ci_sessions_timestamp" --------------------
-- CREATE INDEX "ci_sessions_timestamp" ------------------------
CREATE INDEX `ci_sessions_timestamp` USING BTREE ON `ci_sessions`( `timestamp` );
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE INDEX "fk_users_groups_groups1_idx" --------------
-- CREATE INDEX "fk_users_groups_groups1_idx" ------------------
CREATE INDEX `fk_users_groups_groups1_idx` USING BTREE ON `users_groups`( `group_id` );
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE INDEX "fk_users_groups_users1_idx" ---------------
-- CREATE INDEX "fk_users_groups_users1_idx" -------------------
CREATE INDEX `fk_users_groups_users1_idx` USING BTREE ON `users_groups`( `user_id` );
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE LINK "fk_users_groups_groups1" -------------------
-- DROP LINK "fk_users_groups_groups1" -------------------------
ALTER TABLE `users_groups` DROP FOREIGN KEY `fk_users_groups_groups1`;
-- -------------------------------------------------------------


-- CREATE LINK "fk_users_groups_groups1" -----------------------
ALTER TABLE `users_groups`
	ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY ( `group_id` )
	REFERENCES `groups`( `id` )
	ON DELETE Cascade
	ON UPDATE No Action;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE LINK "fk_users_groups_users1" --------------------
-- DROP LINK "fk_users_groups_users1" --------------------------
ALTER TABLE `users_groups` DROP FOREIGN KEY `fk_users_groups_users1`;
-- -------------------------------------------------------------


-- CREATE LINK "fk_users_groups_users1" ------------------------
ALTER TABLE `users_groups`
	ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY ( `user_id` )
	REFERENCES `users`( `id` )
	ON DELETE Cascade
	ON UPDATE No Action;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- ---------------------------------------------------------


