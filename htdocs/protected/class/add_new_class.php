<?php
require "../database.php";
if(isset($_POST["in"]) && $_POST["name"]!=null && $_POST["place"] != null && $_POST["time"] != null && $_POST["prof"] != null)
{
    if($_POST["name"]!="" && $_POST["place"] != "" && $_POST["time"] != "" && $_POST["prof"] != "")
    {
            //toltsd fel az adatokat
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
