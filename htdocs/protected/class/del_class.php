<br/>

<h2>Tárgyak listája</2>

<?php 

$query = "SELECT o.id, o.nev FROM ora o, felhasznalok_ora f WHERE f.felhasznaloid=" . $_SESSION["uid"] . "  AND f.oraid=o.id";

$result = classList($query);

if (isset($_POST["del"]))
   {
       $query2 = "DELETE FROM felhasznalok_ora WHERE oraid = " . $_POST["del"] . " AND felhasznaloid = " . $_SESSION["uid"];

       
       executeQuery($query2);
       header("Refresh:0");


      
   }


   if(isset($_POST["edit"]))
   {
       header("Location:index.php?P=edit_class&G=".$_POST["edit"]);
   }
?>

<?php if($result === NULL || empty($result)): ?>
    <p>Nincs rekord</p>
    <?php else: ?>
        <table>
        <form method="post">
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
                            <td><button name = "edit" value =<?= $row['id']?>>Módosít</button></td>
                            <td><button name = "del" value =<?= $row['id']?>>Törlés</button></td>
                        </tr>
                    <?php endforeach;?>
            </tbody>
            </form>
        </table>
<?php endif; ?>

<?php

?>