<?php
function get_g(){
    if(!filter_has_var(INPUT_GET, 'G')){
        die('Helytelen paraméter!');
    }
    $id = filter_input(INPUT_GET, 'G', FILTER_VALIDATE_INT);
    if($id === false){
        die('Helytelen paraméter!');
    }
    if($id <= 0){
        die('Az id legalább 1!');
    }
    return $id;

}
$id = get_g();
?>


<HTML>
    <HEAD>
        <link rel="stylesheet" href="<?php echo PUBLIC_DIR."style.css";?>">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body {
            background-color: rgba(222, 184, 135, 0.3);
            }
        </style>
        <script>
            function alertText(id,msg,alertType)
            {
                if(alertType == "success")
                {
                document.getElementById(id).style.color = "#66CD00";
                }
                else
                {
                    document.getElementById(id).style.color = "crimson";
                }
                document.getElementById (id). innerHTML = msg;
            }
        </script>
    </HEAD>

    <BODY>
        <br>
        <div class="container">
            <h2>Óra szerkesztése</h2>
            <form action="" method="POST" accept-charset="UTF-8">
                <span id = "alertText"></span>
                <div class="form-group">
                    <label for="nev">Óra név: </label>
                    <input type="text" class="form-control" name="nev" id="nev" maxlength="255"/> <br/>
                </div>
                <div class="form-group">
                    <label for="ido">Időpont: </label>
                    <select name="ido">
                        <option value="8:00-10:00">8:00-10:00</option>
                        <option value="10:00-12:00">10:00-12:00</option>
                        <option value="12:00-14:00">12:00-14:00</option>
                        <option value="14:00-16:00">14:00-16:00</option>
                        <option value="16:00-18:00">16:00-18:00</option>
                        <option value="18:00-20:00">18:00-20:00</option>
                        </select>
                </div>
                <div class="form-group">
                    <label for="nap">Nap: </label>
                    <select name="nap">
                        <option value="1">Hétfő</option>
                        <option value="2">Kedd</option>
                        <option value="3">Szerda</option>
                        <option value="4">Csütörtök</option>
                        <option value="5">Péntek</option>
                        </select>
                </div>
                <div class="form-group">
                    <label for="hely">Helyszín: </label>
                    <input type="text" class="form-control" name="hely" id="hely" maxlength="255"/> <br/>
                </div>
                <div class="form-group">
                    <label for="tanarnev">Tanár neve: </label>
                    <input type="text" class="form-control" name="tanarnev" id="tanarnev" maxlength="255"/> <br/>
                </div>
                <button type="submit" name="submit" >Mentés </button>
            </form>
        </div>
    </BODY>
</HTML>


<?php 


if(isset($_POST["submit"]))
{
    if($_POST["hely"] == "") echo "<script>alertText('alertText','Az óra helye nem lehet üres!','error')</script>";
    else if($_POST["tanarnev"] == "") echo "<script>alertText('alertText','A tanár neve nem lehet üres!','error')</script>";
    else
    {
        echo "<script>alertText('alertText','Sikeres adatváltoztatás!','success')</script>";
        $id = get_g();
        $nev = $_POST["nev"];
        $ido = $_POST["ido"];
        $nap = $_POST["nap"];
        $hely = $_POST["hely"];
        $tanarnev = $_POST["tanarnev"];
        $email = $_POST["email"];
        $updateQuery = "UPDATE ora SET nev='".$nev."', ido='".$ido."', nap='".$nap."', hely='".$hely."', tanarnev='".$tanarnev."' WHERE id =".$id."";
        executeQuery($updateQuery);
    }
}
?>