DROP TABLE IF EXISTS `felhasznalok`;
DROP TABLE IF EXISTS `orarend`;
DROP TABLE IF EXISTS `ora`;


CREATE TABLE `felhasznalok` (
`id` INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
`felhasznalonev` VARCHAR(255) NOT NULL,
`jelszo` VARCHAR(255) NOT NULL,
`email` VARCHAR(255) NOT NULL,
`jog` INT(2) NOT NULL);

CREATE TABLE `orarend` (
`id` INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
`felhasznaloid` INT NOT NULL,
`oraid` INT NOT NULL);

CREATE TABLE `ora` (
`id` INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
`nev` VARCHAR(100) NOT NULL,
`ido` TIME NOT NULL,
`nap` VARCHAR(55) NOT NULL,
`tanarnev` VARCHAR(255) NOT NULL);

ALTER TABLE `orarend` ADD CONSTRAINT `orarend_felhasznaloid_felhasznalok_id` FOREIGN KEY (`felhasznaloid`) REFERENCES `felhasznalok`(`id`);
ALTER TABLE `orarend` ADD CONSTRAINT `orarend_oraid_ora_id` FOREIGN KEY (`oraid`) REFERENCES `ora`(`id`);