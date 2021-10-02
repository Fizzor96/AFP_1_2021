<br/>

<h2>Felhasználók listája</2>

<?php 

$query = "SELECT o.id, o.nev FROM ora o, felhasznalok_ora f WHERE f.felhasznaloid=1  AND f.oraid=o.id";

$result = classList($query);
?>

<?php if($result === NULL || empty($result)): ?>
    <p>Nincs rekord</p>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Név</th>
                    <th>Műveletek</th>
                </tr>
            </thead>
            <tbody>
                    <?php foreach($result as $row): ?>
                        <tr>
                            <td><?=$row['id']?></td>
                            <td><?=$row['nev']?></td>
                            <td><a name = <?=$_SESSION["uid"]?> >Töröl</a></td>
                        </tr>
                    <?php endforeach;?>
            </tbody>
        </table>
<?php endif; ?>

<?php

?>