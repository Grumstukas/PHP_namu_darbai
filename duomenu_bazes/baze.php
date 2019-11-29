<?php

/*duomenu baze - programa

kurioje  galime priskirtu daug duomenubazių.

šios duomenu bazes nieko nežino viena apie kitą.

viena duomenu baze kaip excel. Joje daug lentelių kurios jau kaip sheet bendrauja tarpusavyje.

duomenu bazes klaba - SQL

**************************************************************
XAMPP - įjungiam MySQL "start"

editoriaus terminale rašomos komandos :

ls - kur aš dabar esu?
cd.. lipti aukstyn
cd folderiovadas - lipti zamyn į folderį

C:\xampp>cd mysql

C:\xampp\mysql>cd bin

C:\xampp\mysql\bin> (čia galima jungtis ir kurti duomenu bazę)

Žingsniai kad pradėti:

1)  jungimasis prie SQL:
        C:\xampp\mysql\bin> .\mysql -u root -p
2)  slaptazodis
        jokio (enter)
3)  sukurti duomenu baze:
        create database dd; (dd - pavadinimas);
4)  naudoti duomenu baze:
        USE dd


6)  rašom į terminalą: (sukuriam lentelę jau sukurtoje duomenu bazeje)

CREATE TABLE pets(
    id INT,
    name VARCHAR(50)
);

CREATE TABLE b_clients(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    surname VARCHAR(50),
    amount INT
);


7)  rašom į terminalą:
desc pets;

8)  rašom į terminalą: (pridedam į duomanu baze informacija)
INSERT INTO pets(id, pet)
VALUES(1, 'Cat');

9) rašom į terminalą:
INSERT INTO pets(id, pet)
VALUES
    (2, 'Dog'),
    (3, 'Cow'),
    (4, 'horse');

10) rašom į terminalą: (kad pamatytume tą savo duomenu baze)
SELECT * FROM pets;

11) rašom į terminalą (kad gautume konkrečią reikšmę iš davo duomenu bazes)
SELECT * FROM pets
WHERE pet = 'horse';

12) rašom į terminalą (kad gautume konkrečią reikšmę iš davo duomenu bazes)
SELECT * FROM pets
WHERE id < 4;

13) rašom į terminalą (kad ištrinti reikšmę su kažkokiu požymiu)
DELETE FROM pets
WHERE id > 3;

14) rašom į terminalą (kad atnaujinti informaciją)
UPDATE pets
SET pet = 'Dog'
WHERE id = 1;

kad matytume duomenis grafiškai naudojame myPHPadmin (per xampp)


toliau žingsniai aprašomi myDB.sql (failas turetu buti šalia ;) )
*/
