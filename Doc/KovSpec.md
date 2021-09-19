## 1. Áttekintés

A rendszer egy online órarend tervezőt valósít meg, ahol a felhasználók saját, személyes órarendjüket tudják feltölteni, ezzel megkönnyítve dolgukat, hiszen ezáltal gyorsabban elérhetővé válik számukra órarendjük megtekintése. 
A rendszert teljes mértékben online formában kell megvalósítani, weblap keretében. 
A weblap teljes értékű kihasználásához szüksége lesz a felhasználónak regisztrálni. 
Regisztráció nélkül semmilyen funkciót nem ér el, számára csak betekintő áll rendelkezésre.

## 2. Jelenlegi helyzet

Jelenleg az online és személyes oktatásnak is fontos szerepe van a tanulók és tanárok életében. Szinte már mindenkinek van okostelefonja és számítógépe otthon. 
Ezek mellett pedig az internet az, ami körbe vesz minket. Manapság már nem meglepő az, ha van mobilinternete egyeseknek, sőt lassan már az lenne a meglepő, ha nem lenne. 
Emiatt már nagyon kevés ember ül le az asztalához az iskola első hetében, hogy szépen kézzel megírja az órarendjét.
Mellesleg ha valaki esetleg mégis ezt teszi, annak van egy nagy hátránya; nem minden esetben tudja elővenni azt a lapot, így nem tudja megnézni bármikor azt, hogy mikor, hogyan és hol lesznek az órái.
Vannak akik telefonos alkalmazásokban tárolják az órarendjüket viszont mi történik ha elromlik a telefonjuk és nem kapcsol be?
(Az esetek nagy részében ezek az alkalmazások nem rendelkeznek felhő alapú adatmentéssel mentéssel ha az alkalmazás ingyenes verzióját használjuk.) 
Muszáj támogatnunk azokat, akik ebbe a problémába estek, így úgy gondoltuk, hogy csinálunk egy weboldalt, ahol minden egyes ember be tud regisztrálni és fel tudja tölteni az adatbázisba, hogy mettől-meddig, hol és milyen órája lesz. Ha elromlik a telefonunk, leülünk egy számítógéphez és betöltjük a weboldalt. 
Bejelentkezünk és újra láthatjuk, módosíthatjuk, törölhetjük csodás óráinkat.

## 4. Funkcionális követelmények

1. Bejelentkezési felület:
 * A felhasználók ezen a felületen tudnak bejelentkezni a weboldalra a bővebb elérhetőség érdekében.
2. Regisztrációs felület:
 * A felhasználók ezen a felületen tudnak beregisztrálni a weboldalra.
3. Órarend menüpont:
 * A felhasználók itt érik el a bővebb funkciókat
 * Új tárgyakat tudnak rögzíteni és annak a tárgynak az adatait tudják felvenni.
 * Meglévő tárgyakat tudnak törölni és annak a tárgynak az adatait tudják módosítani
 * A tárgy felvétele és törlése az órarendbe/órarendből is itt történik
 * Ugyanitt valósul meg az órarend megtekintése is
4. Jogosultságok:
 * Admin: Teljes hozzáférése van a weboldalhoz, szerkesztheti, kilistázhatja és törölheti a felhasználók adatait is.
 * Felhasználó: Tud a személyes órarendjében új tárgyakat rögzíteni illetve a tárgy adatait felvenni hozzá, tud tárgyakat törölni, tudja a tárgyainak adatai módosítását, tud tárgyat felvenni az órarendjébe, tud tárgyat törölni az órarendjéből, megtudja tekinteni az órarendjét.
 * Vendég: Csak egy betekintő áll rendelkezésére amikor megnyitja a weblapot.

## 5. Rendszerre vonatkozó törvények, szabványok, ajánlások

Opensource szoftver. Bárki által letölthető és felhasználható. Az értékesítése nem megengedett!

## 6. Jelenlegi üzleti folyamatok modellje
    6.1 Az órarend és tárgyak adatainak nyilvántartása
        6.1.1 Új tárgy rögzítése: regisztrált felhasználó végzi -> Tárgy rendszerbe való rögzítése
        6.1.2 Tárgy törlése: regisztrált felhasználó végzi -> Tárgy törlése a rendszerből
        6.1.3 Meglévő tárgy órarendbe helyezése: regisztrált felhasználó végzi -> A felvett tárgy megjelenik az órarendben
        6.1.4 Meglévő tárgy leadása órarendből: regisztrált felhasználó végzi -> Az adott tárgy eltűnik az órarendből
        6.1.5 Tárgy adataiank szerkesztése: regisztrált felhasználó végzi -> Tárgy adatai módosulnak

## 7. Igényelt üzleti folyamatok modellje
    7.1 Bejelentkezés
        7.1.1 Órarend menüpont 
                7.1.1.1 Új tárgy rögzítése
                     7.1.1.1.1 Tárgy adatainak felvétele
                7.1.1.2 Tárgy felvétele az órarendbe
                7.1.1.3 Tárgy törlése az órarendből
                7.1.1.4 Órarend megtekintése
        Admin joggal rendelkezőknek:
        7.1.2 Felhasználók szerkesztése
        7.1.3 Felhasználók listázása
        7.1.4 Felhasználók törlése
        7.1. Kijelentkezés
    7.2 Regisztráció

## 8. Követelménylista

Modul | ID | Név | Kifejtés
--- | --- | --- | ----------------------------------------------------------------------
Jogosultság | K1 | Bejelentkezési felület | A felhasználó a felhasználónevével és jelszava segítségével jelentkezhet be. Nem megfelelő felhasználónév vagy jelszó esetén, a felhasználó hibaüzenetet kap.
Jogosultság | K2 | Regisztrációs felület | A felhasználó felhasználónév, e-mail cím és jelszó megadásával regisztrálhatja magát. A jelszó tárolása titkosított formában történik az adatbázisban. Bármely adat hiánya vagy a követelményeknek való nem megfelelése esetén, a felhasználó hibaüzenetet kap.
Jogosultság | K3 | Jogosultsági szintek | -Admin: Teljes hozzáférése van a weboldalhoz, szerkesztheti, kilistázhatja és törölheti a felhasználók adatait is. <br> -Felhasználó: Tud a személyes órarendjében új tárgyakat rögzíteni illetve a tárgy adatait felvenni hozzá, tud tárgyakat törölni, tudja a tárgyainak adatai módosítását, tud tárgyat felvenni az órarendjébe, tud tárgyat törölni az órarendjéből, megtudja tekinteni az órarendjét. <br> -Vendég: Csak egy betekintő áll rendelkezésére amikor megnyitja a weblapot.
Felület | K4 | Felhasználók listája | Admin jogosultsággal megtekinthető és megváltoztatható a felhasználók felhasználóneve, e-mail címe és jogosultsági szintje.
Felület | K5 | Órarend | Felhasználó jogosultsággal lehet tárgyakat felvenni és törölni az órarendből, továbbá meg lehet tekinteni az órarendet.
Felület | K6 | Tárgy | Regisztrált felhasználó tud új tárgyakat rögzíteni, vagy meglévőt módosítani.

## 9. Fogalomtár

- **UML** - Unified Modeling Language
- **Reszponzív felület** - Mobilon, Tableten, PC-n igazodik a
képernyőhöz a felület mérete, azaz több eszközön is probléma nélkül
üzemelhet
- **Releváns** - fontos, lényeges, meghatározó, jelentős
- **Corrective Maintenance:** A felhasználók által felfedezett és "user reportban"
elküldött hibák kijavítása.
- **Adaptive Maintenance:** A program naprakészen tartása és finomhangolása.
- **Perfective Maintenance:** A szoftver hosszútávú használata érdekében végzett
módosítások, új funkciók, a szoftver teljesítményének és működési
megbízhatóságának javítása.
- **Preventive Maintenance:** Olyan problémák elhárítása, amelyek még nem
tűnnek fontosnak, de később komoly problémákat okozhatnak.