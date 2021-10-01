<?php

require_once DATABASE_CONTROLLER;

if (isset($_POST["in"]) && $_POST["name"] != null && $_POST["building"] != null && $_POST["room"] != null && $_POST["date"] != null && $_POST["time"] != null && $_POST["prof"] != null) {
    if ($_POST["name"] != "" && $_POST["building"] != "" $_POST["room"] != "" && $_POST["date"] != "" && && $_POST["time"] != "" && $_POST["prof"] != "") {
        $name = $_POST["name"];
        $building = $_POST["building"];
        $room = $_POST["room"];
        $date = $_POST["date"];
        $time = $_POST["time"];
        $prof = $_POST["prof"];
        $place = $building . ":" . $room;

        //az adatbázis tábla nevét majd át kell írni a valódira, meg lehet kell még ezen az sql-n alakítani mivel a nap is kellene
        //nincs még tesztelve, hogy működik vagy sem

        $sql = "iNSERT INTO ora (nev, ido, nap, hely, tanarnev) VALUES ('" . $name . "', '" . $time . "', '" . $date . "', '" . $place . "', '" . $prof . "')";

        //insert into ora( nev, ido, nap, hely, tanarnev) VALUES ("Algo2","08:00-10:00","2","C:104","Geda Gábor");
        
        executeQuery($sql);
    }
}
?>
<html>

<HEAD>
        <link rel="stylesheet" href="<?php echo PUBLIC_DIR."style.css";?>">
        <link rel="stylesheet" href="../../public/style.css">
</HEAD>

<body>
    <div class="oDiv">
        <table class="oForm">
            <form method='post' action=''>
                <tr>
                    <td>
                        <input type="text" placeholder="Tárgy neve" name="name">
                    </td>
                </tr>
                <tr>
                    <td>
                        <span> Óra helye: </span><br>
                        <select name="building" placeholder="Épület">
                        <option value="" disabled selected hidden>Épület</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="C*">C*</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        </select> <br>
                        <input type="number" min=1 max=400 placeholder="Terem száma" name="room"> <!-- Az óra helyét úgy kapod meg, hogy nézed a select value-jét, hozzá fűzöl egy :-ot és utána hozzá fűzöd ezt a terem számát-->
                    </td>
                </tr>
                <tr>
                    <td>
                        <span> Óra időpontja: </span><br>
                        <select name="date">
                        <option value="1">Hétfő</option>
                        <option value="2">Kedd</option>
                        <option value="3">Szerda</option>
                        <option value="4">Csütörtök</option>
                        <option value="5">Péntek</option>
                        </select>
                        <select name="time">
                        <option value="8:00-10:00">8:00-10:00</option>
                        <option value="10:00-12:00">10:00-12:00</option>
                        <option value="12:00-14:00">12:00-14:00</option>
                        <option value="14:00-16:00">14:00-16:00</option>
                        <option value="16:00-18:00">16:00-18:00</option>
                        <option value="18:00-20:00">18:00-20:00</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" placeholder="Tanár neve" name="prof">
                    </td>
                </tr>
                <tr>
                    <td colspan = 2><button>Feltöltés</button></td>
                </tr>


            </form>
        </table>
    </div>
</body>

</html>