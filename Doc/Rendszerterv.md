## 1. Rendszer célja

## 2. Projektterv


## 3. Üzleti folyamatok modellje

![Üzleti folyamatok modellje](../Doc/Pictures/business_model.png)

## 4. Követelmények

**Funkcionális követelmények**
  - **Felhasználók adatainak tárolása**
  - **Felhasználók tudják változtatni adataikat**
  - **Felhasználók órarendjének tárolása**
  - **Tárgyak tárolása**
  - **Tárgyakhoz tartozó adatok tárolása**
  - **Adminisztrátor tudja szerkeszteni a tárgyak adatait és a felhasználók adatait**

  **Nem funkcionális követelmények**
  - **A felhasználók nem férnek hozzá egymás adataihoz**
  - **A felhasználók nem férnek hozzá az admin felülethet**

  **Törvényi előírások, szabványok:**
  - **GDPR-nek való megfelelés**

## 5. Funkcionális terv

**Rendszerszereplők:**
  - **Adminisztrátor**
  - **Felhasználó**
  - **Vendég**

  **Rendszerhasználati esetek és lefutásaik:**
  - **Adminisztrátor**
    - **Képes felhasználókat törölni**
    - **Tudja módosítani a felhasználók jelszavát és adatait is**
    - **Látja az összes regisztrált felhasználót**
    - **Módosítani tudja a tárgyakat, azok adatait**
    - **Teljes hozzáférése van a rendszerhez**
  - **Felhasználó**
    - **Megtekintheti a tárgyait**
    - **Megtekintheti az órarendjét**
    - **Felvehet új tárgyakat az órarendjébe**
    - **Törölhet tárgyakat az órarendjéből**
    - **Új tárgyakat tud felvenni**
    - **Tárgyakat tud törölni**
    - **Felvett tárgyainak tudja az adatait módosítani**
    - **Módosíthatja a saját adatait**
    - **Módosíthatja jelszavát**
  - **Vendég**
    - **Láthat egy generált órarendet minta képpen**
    - **Képes regisztrálni és bejelentkezni**

  - **Menü-hierarchiák:**
    - **Bejelentkezés**
    - **Regisztráció**
    - **Betekintő**

    - **Bejelentkezés után:**
      - **Felhasználók listája:** kizárólag admin joggal rendelkező felhasználóknak
        - **Felhasználó adatainak módosítása**
        - **Felhasználók törlése**

      - **Profil**
      - **Órarend**
      - **Új tárgy felvétele**
        - **Tárgy felvétele az órarendbe**
        - **Tárgy törlése az órarendből**
      - **Kijelentkezés**

## 6. Fizikai környezet

- **Az alkalmazás csak web platformra készül, AWS EC2 instance-ra telepített Apache szerveren, MySQL adatbázissal lesz futtatva.**
  - **Nincsenek megvásárolt komponensek.**
  - **Fejlesztői eszközök:**
    - **Visual Studio Code**
    - **Notepad++**
    - **Sublime text 3**
    - **MySQL Workbench**
    - **HeidiSQL**

## 7. Architekturális terv

## 8. Adatbázis terv

## 9. Implementációs terv

A webes felület HTML, CSS és PHP nyelven fog elkészülni. A különböző technológiákat amennyire csak lehet, külön fájlokba írva készítjük el, úgy csatoljuk egymáshoz ezzel is egy átláthatóbb, könnyebben változtatható és bővíthető weboldal lesz. Az adatokat egy MYSQL adatbázisban fogjuk tárolni.

## 10. Tesztterv

## 11. Telepítési terv

## 12. Karbantartási terv

A felhasználók egy report formájában tudják jelenteni a felmerűlő funkcionális hibákat az adminok felé, amit a fejlesztők fognak kijavítani.
A javított hibák egy oldalon Changelog vagy hír formában meg fognak jelenni visszajelzésként a felhasználók felé, az új funkciók / frissítésekkel együtt.
A karbantartási időkről a felhasználókat egy e-mail formájában előre tájékoztatjuk.
