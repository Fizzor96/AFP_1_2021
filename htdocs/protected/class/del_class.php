<br/>

<h2>Felhasználók listája</2>

<?php 

$query = "SELECT o.id, o.nev FROM ora o, felhasznalok_ora f WHERE " . $_SESSION["uid"] . " = f.felhasznaloid AND f.oraid=o.id";

$result = classList($query);

?>

<?php if($result === NULL || empty($result)): ?>
    <p>Nincs rekord</p>
<?php endif; ?>