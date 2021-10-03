<br/>

<div class="container-fluid">


<?php 

$query = "SELECT id, felhasznalonev, email, jog FROM felhasznalok";

$result = classList($query);

if (isset($_POST["del"]))
   {
       $query2 = "DELETE FROM felhasznalok WHERE id = " . $_POST["del"];

       
       //executeQuery($query2);
       header("Refresh:0");

        //nincs tesztelve, de működik majd, ha lesz az adatbázis cascade-elve

      
   }


   if(isset($_POST["edit"]))
   {
      // header("Location:index.php?P=edit_class&G=".$_POST["edit"]);
   }
?>

<?php if($result === NULL || empty($result)): ?>
    <p>Nincs rekord</p>
    <?php else: ?>
        
        <h2>Felhasználók listája</2>
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
                            <td><?=$row['felhasznalonev']?></td>
                            
                            
                            <td><button class="btn btn-dark" name = "del" value =<?= $row['id']?>>Törlés</button></td>
                        </tr>
                    <?php endforeach;?>
            </tbody>
            </form>
        </table>
                            </div>
<?php endif; ?>

<?php

?>