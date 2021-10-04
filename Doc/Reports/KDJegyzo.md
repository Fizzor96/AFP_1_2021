# Teszt jegyzőkönyv
#### Készítette: WIP - Kónya Donát

Lépés | Funkció | Tesztelés leírása | Státusz | Megjegyzés | Aláírás | Időpont
--- | --- | --- | --- | --- | --- | --- 
1 | Tárgy törlése jogosultság nélkül | Az oldal nem jelenik meg az admin jog hiányában | Siker | - | Kónya Donát | 10.04
2 | Tárgy törlése jogosultsággal | Az oldal megfelelően működik | Siker | - | Kónya Donát | 10.04
3 | Óra törlése a rendszerből, ami fel van véve az órarendbe | SQL hiba | Fail | A hibát a kapcsolótábla okozta, először onnan kell törölni | Kónya Donát | 10.04
4 | Óra törlése a rendszerből, ami fel van véve az órarendbe | SQL hiba javítva | Siker | - | Kónya Donát | 10.04
5 | Adott óra adatainak szerkesztése | A szerkesztés megfelelően működött | Siker | - | Kónya Donát | 10.04
6 | Adott óra adatainak szerkesztése jogosultásgok nélkül | A szerkesztés menüpont nem elérhető felhasználóként| Siker | - | Kónya Donát | 10.04
7 | Adott óra adatainak szerkesztése string tipusú idvel | Az oldal ellenőrizte, hogy a paraméterként kapott id int-e| Siker | - | Kónya Donát | 10.04
8 | Adott óra adatainak szerkesztése negatív idvel | A negatív paraméter nem volt kezelve | Fail | Paraméter vizsgálattal könnyen megoldható | Kónya Donát | 10.04
9 | Adott óra adatainak szerkesztése negatív idvel | A negatív számok vizsgálata hozzáadva a paraméterhez  | Siker | - | Kónya Donát | 10.04
10 | Felhasználói adatok szerkesztése, jelszó változtatása | Jelszó változtatás | Siker | - | Kónya Donát | 10.04 
11 | Felhasználói adatok szerkesztése, email változtatása | Email változtatás | Siker | Az email cím változtatás megtörtént, a régi email cím mező nem frissül | Kónya Donát | 10.04 
    