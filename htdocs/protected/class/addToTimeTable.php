<br/>

<div class="container-fluid">


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
        
        <h2>Tárgyak listája</2>
        <table class="table table-sm table-dark text-center ">
        <form method="post">
            <thead>
                <tr scope="row">
                    <th scope="col">ID</th>
                    <th scope="col">Név</th>
                    <th scope="col" colspan=2>Műveletek</th>
                </tr>
            </thead>
            <tbody>
                    <?php foreach($result as $row): ?>
                        <tr scope="row">
                            <td><?=$row['id']?></td>
                            <td><?=$row['nev']?></td>
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