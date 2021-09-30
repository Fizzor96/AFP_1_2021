DROP TABLE IF EXISTS felhasznalok;
DROP TABLE IF EXISTS felhasznalok_ora;
DROP TABLE IF EXISTS ora;


CREATE TABLE felhasznalok (
id INT NOT NULL PRIMARY KEY,
felhasznalonev VARCHAR(255) NOT NULL,
jelszo VARCHAR(255) NOT NULL,
email VARCHAR(255) NOT NULL,
jog BOOLean NOT NULL);

CREATE TABLE felhasznalok_ora (
id INT NOT NULL PRIMARY KEY,
felhasznaloid INT NOT NULL,
oraid INT NOT NULL);

CREATE TABLE ora (
id INT NOT NULL PRIMARY KEY,
nev VARCHAR(100) NOT NULL,
ido ENUM ("08:00-10:00","10:00-12:00","12:00-14:00","14:00-16:00","16:00-18:00","18:00-20:00") NOT NULL,
nap ENUM ("1","2","3","4","5") NOT NULL,
hely VARCHAR(255) NOT NULL,
tanarnev VARCHAR(255) NOT NULL);

ALTER TABLE felhasznalok_ora ADD CONSTRAINT felhasznalok_ora_felhasznaloid_felhasznalok_id FOREIGN KEY (felhasznaloid) REFERENCES felhasznalok(id);
ALTER TABLE felhasznalok_ora ADD CONSTRAINT felhasznalok_ora_oraid_ora_id FOREIGN KEY (oraid) REFERENCES ora(id);
