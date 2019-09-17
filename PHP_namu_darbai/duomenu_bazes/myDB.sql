
/*KLIJUOJAM Į TERMINALĄ*/
CREATE TABLE pets(
    id INT,
    pet VARCHAR(50)
);
/*TERMINALE:
desc pets;
 */

/*KLIJUOJAM Į TERMINALĄ*/
INSERT INTO pets(id, pet)
VALUES(1, 'Cat');

/*KLIJUOJAM Į TERMINALĄ*/
INSERT INTO pets(id, pet)
VALUES
    (2, 'Dog'),
    (3, 'Cow'),
    (4, 'horse');

/*KLIJUOJAM Į TERMINALĄ(* - viską)*/
SELECT * FROM pets;

/*KLIJUOJAM Į TERMINALĄ */
SELECT * FROM pets
WHERE pet = 'horse';

/*KLIJUOJAM Į TERMINALĄ */
SELECT * FROM pets
WHERE id < 4;

/*KLIJUOJAM Į TERMINALĄ */
DELETE FROM pets
WHERE id > 3;

/*KLIJUOJAM Į TERMINALĄ */
UPDATE pets
SET pet = 'Dog'
WHERE id = 1;

/*kad matytume duomenis grafiškai naudojame myPHPadmin (per xampp)*/

-- lentele id, vardas, pavarde, gimimo_metai, lytis, akiu_spalva

CREATE TABLE people(
    id INT AUTO_INCREMENT PRIMARY KEY,
    vardas VARCHAR(50),
    pavarde VARCHAR(50),
    gimimo_metai DATE NOT NULL,
    lytis BOOLEAN,
    akiu_spalva VARCHAR(50)
);
INSERT INTO people(vardas, pavarde, gimimo_metai, lytis, akiu_spalva)
VALUES('Tomas', 'Lukstaraupsis', '1950-05-03', false, 'geltona');

INSERT INTO people(vardas, pavarde, gimimo_metai, lytis, akiu_spalva)
VALUES('Aurelija', 'Kajotienė', '1985-03-27', true, 'pilka');