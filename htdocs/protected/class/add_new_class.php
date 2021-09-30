<?php

require_once DATABASE_CONTROLLER;

if(isset($_POST["in"]) && $_POST["name"]!=null && $_POST["place"] != null && $_POST["time"] != null && $_POST["prof"] != null)
{
    if($_POST["name"]!="" && $_POST["place"] != "" && $_POST["time"] != "" && $_POST["prof"] != "")
    {
            $name = $_POST["name"];
            $place = $_POST["place"];
            $time = $_POST["time"];
            $prof = $_POST["prof"];

            //az adatbázis tábla nevét majd át kell írni a valódira, meg lehet kell még ezen az sql-n alakítani mivel a nap is kellene
            //de valahogy így fog kinézni

            $sql = "INSERT INTO targy (nev, hely, ora, tanar) VALUES ('" . $name . "', '". $place ."', '" . $time . "', '" . $prof . "')";
            
            executeQuery($sql);
    }

}
?>
<html>
<body>
    <table>
    <form method='post' action=''>
    <tr>
        <td>
            <input type = "text" placeholder="Tárgy neve" name="name">
        </td>
    </tr>
    <tr>
        <td>
            <input type = "text" placeholder="Óra helye" name="place">
        </td>
    </tr>
    <tr>
        <td>
            <input type = "text" placeholder="Időpont" name="time">
        </td>
    </tr>
    <tr>
        <td>
            <input type = "text" placeholder="Tanár neve" name="prof">
        </td>
    </tr>
    <tr>
        <td>
            <input type = "submit" value = "Beküldés" name="in"> 
        </td>
    </tr>
 

    </form>
    </table>
</body>
</html>
