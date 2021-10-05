<html>

<head>
    <style>
        table,
        div {
            width: 100%;
            height: 100%;
        }
    </style>

</head>
<div class="container">
<?php

$time = array();
array_push($time, "", "08:00-09:40","10:00-11:40","11:50-13:30","13:40-15:20","15:30-17:10","17:20-19:00","18:30-19:55");

echo "<br><h2>Órarendem</h2><div><table class='table table-sm table-dark text-center'>
<th></th><th>Hétfő</th><th>Kedd</th><th>Szerda</th><th>Csütörtök</th><th>Péntek</th>";
for ($i = 1; $i <= 7; $i++) { //órák
    echo "<tr>";

    echo "<th>$time[$i]</th>";

    for ($j = 1; $j <= 5; $j++) {
        $sql = 'select * from felhasznalok_ora,ora WHERE felhasznaloid = ' . $_SESSION["uid"] . ' and ora.id=oraid and ora.nap=' . $j . ' and ido like "' . $time[$i] . '"';
        $result = classList($sql);
        if ($result === NULL || empty($result)) {
            echo "<td> </td>";
        } else {
            echo "<td>";

            foreach ($result as $row) { //ez általában 1szer fut le viszont azért így van megoldva, hogy ha óraütközés van majd itt lehet kezelni
                $nap = $row['nap'];
                $nev = $row['nev'];
                $hely = $row['hely'];
                $tanar = $row["tanarnev"];
                $ido = $row['ido'];
                echo "<span style='display: block'>$nev<br>$hely<br>$tanar</span>";
                if(count($result) > 1)
                {
                    echo "<br>"; //az átláthatóság miatt
                }
            }
        }
        echo "</td>";
    }
    echo "</tr>";
}
echo "</tr>";

echo "</table></div>";
?>
</div>
</html>