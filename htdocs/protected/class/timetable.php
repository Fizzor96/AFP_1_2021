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

</html>
<?php


$time = array();
array_push($time, "", "08:00-10:00", "10:00-12:00", "12:00-14:00", "14:00-16:00", "16:00-18:00", "18:00-20:00");

//            print_r($days);
//            echo $days[0][0];
echo "<div><table class='table table-sm table-dark text-center'>
<th></th><th>Hétfő</th><th>Kedd</th><th>Szerda</th><th>Csütörtök</th><th>Péntek</th>";
for ($i = 1; $i <= 6; $i++) { //órák
    echo "<tr>";

    echo "<th>$time[$i]</th>";

    for ($j = 1; $j <= 5; $j++) {
        $sql = 'select * from felhasznalok_ora,ora WHERE felhasznaloid = ' . $_SESSION["uid"] . ' and ora.id=oraid and ora.nap=' . $j . ' and ido like "' . $time[$i] . '"';
        $result = classList($sql);
       // echo "$j.nap: $i.óra: " . count($result) . "<br>";
        if ($result === NULL || empty($result)) {
            echo "<td> </td>";
        } else {
            echo "<td>";
            foreach ($result as $row) { //ez általában 1szer fut le viszont azért így van megoldva, hogy ha óraütközés van majd itt kell kezelni
                //echo "foreach kör<br>";
                $nap = $row['nap'];
                $nev = $row['nev'];
                $hely = $row['hely'];
                $tanar = $row["tanarnev"];
                $ido = $row['ido'];
                //if ($nap == $j && $ido == $i)
                    echo "<span>$nev<br>$hely<br>$tanar<br>$nap<br>$ido</span>";
                //else {
                //    echo "Nincs";
                //}
            }
        }
        echo "</td>";
    }
   // echo "<br>";
    echo "</tr>";

}



echo "</tr>";



echo "</table></div>";
