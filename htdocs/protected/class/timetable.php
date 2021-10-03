<?php
echo "<table class='table'><th>Hétfő</th><th>Kedd</th><th>Szerda</th><th>Csütörtök</th><th>Péntek</th>";
for ($i = 1; $i <= 6; $i++) 
{
    echo "<tr>";
    for ($j = 1; $j <= 5; $j++) 
    {
    echo "<td> óra </td>";
    }
echo "</tr>";
}

echo "</table>";



?>