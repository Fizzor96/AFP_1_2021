<br/>

<div class="container-fluid">


<?php 

$query = "SELECT id, nev, ido FROM ora WHERE id NOT IN  (SELECT o.id FROM ora o, felhasznalok_ora f WHERE f.felhasznaloid=" . $_SESSION["uid"] . "  AND f.oraid=o.id)";


$result = classList($query);

if (isset($_POST["add"]))
   {
       $query2 = "INSERT INTO felhasznalok_ora (felhasznaloid, oraid) VALUES (" . $_SESSION["uid"] . "," . $_POST["add"] . ")";

       
       executeQuery($query2);
       header("Refresh:0");


      
   }

   if(isset($_POST["del"]))
   {
    $query3 = "DELETE FROM ora WHERE id = " . $_POST["del"];

       
    executeQuery($query3);
    header("Refresh:0");
   }
  
?>

<?php if($result === NULL || empty($result)): ?>
    <p>Nincs felvehető tárgy</p>
    <?php else: ?>
        
        <h2>Tárgyak listája</2>
        <table class="table table-sm table-dark text-center ">
        <form method="post">
            <thead>
                <tr scope="row">
                    <th scope="col">ID</th>
                    <th scope="col">Név</th>
                    <th scope="col">Időpont</th>
                    <th scope="col" colspan=2>Műveletek</th>
                </tr>
            </thead>
            <tbody>
                    <?php foreach($result as $row): ?>
                        <tr scope="row">
                            <td><?=$row['id']?></td>
                            <td><?=$row['nev']?></td>
                            <td><?=$row['ido']?></td>
                            <?php if($_SESSION['jog'] == 1):?>
                            <td><button class="btn btn-dark" name = "del" value =<?= $row['id']?>>Óra törlése</button></td>
                            <?php endif; ?>
                            <td><button class="btn btn-dark" name = "add" value =<?= $row['id']?>>Hozzáad</button></td>
                        </tr>
                    <?php endforeach;?>
            </tbody>
            </form>
        </table>
                            </div>
<?php endif; ?>

<?php

?>