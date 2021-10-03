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
            <h2>Felhasználó szerkesztése</h2>
            <form action="" method="POST" accept-charset="UTF-8">
                <input type="hidden" name="id" value=<?= $_SESSION["uid"] ?> >
                <span id = "alertText"></span>
                <div class="form-group">
                    <label for="ujjelszo">Új jelszó: </label>
                    <input type="password" class="form-control" name="ujjelszo" id="ujjelszo" maxlength="255"/> <br/>
                </div>
                <div class="form-group">
                    <label for="ujjelszo_megerosites">Új jelszó megerősítése: </label>
                    <input type="password" class="form-control" name="ujjelszo_megerosites"  id="ujjelszo_megerosites" maxlength="255"/> <br/>
                </div>
                <div class="form-group">
                    <label for="regi_jelszo">Régi jelszó megerősítése: </label>
                    <input type="password" class="form-control" name="regi_jelszo"  id="regi_jelszo" maxlength="255"/> <br/>
                </div>
                <button type="button" name="submitjelszo" class="btn btn-primary btn-lg btn-block">Mentés</button>
        </form>
        <br>
        <form action="" method="POST" accept-charset="UTF-8">
                <div class="form-group">
                    <label for="email">Régi e-mail cím: </label>
                    <input type="email" class="form-control" name="email" value="<?= $_SESSION['email'] ?>" id="email" maxlength="255" disabled/> <br/>
                </div>
                <div class="form-group">
                    <label for="email_uj">Új e-mail cím: </label>
                    <input type="email" class="form-control" name="email_uj" id="email_uj" maxlength="255"/> <br/>
                </div>
                <button id ="submitemail" type="submitemail" name="submitemail" class="btn btn-primary btn-lg btn-block">Mentés</button>
                <br>
            </form>
        </div>
    </BODY>
</HTML>



<?php
$oldpw = $_SESSION['jelszo'];
require_once DATABASE_CONTROLLER;
if(isset($_POST["submitjelszo"]))
{
    if($_POST["ujjelszo"] == "") echo "<script>alertText('alertText','Az új jelszó mező nem lehet üres!','error')</script>";
    else if(sha1($_POST["regi_jelszo"]) != $oldpw) echo"<script>alertText('alertText','A régi jelszó nem megfelelő!','error')</script>";
    else if($_POST["ujjelszo"] != $_POST["ujjelszo_megerosites"]) echo "<script>alertText('alertText','A jelszavak nem egyeznek!','error')</script>";
    //else if($_POST["email"] == "") echo "<script>alertText('alertText','Az email cím nem lehet üres!','error')</script>";
    //else if($_POST["email"] != $_POST["email_megerosites"]) echo "<script>alertText('alertText','Az email címek nem egyeznek!','error')</script>";
    else if(strlen($_POST["ujjelszo"]) < 7) echo "<script>alertText('alertText','Az új jelszó 8 karaktertől kevesebb!','error')</script>";
    else
    {
        echo "<script>alertText('alertText','Sikeres jelszó változtatás!','success')</script>";
        $passwd = sha1($_POST["ujjelszo"]);
        //$email = $_POST["email"];
        $updateQuery = "UPDATE felhasznalok SET jelszo='".$passwd."' WHERE id ='".$_SESSION["uid"]."'";
        executeQuery($updateQuery);
        
    }
}

if(isset($_POST["submitemail"]))
{
    echo"Belépett";
    //if($_POST["ujjelszo"] == "") echo "<script>alertText('alertText','Az új jelszó mező nem lehet üres!','error')</script>";
    //else if(sha1($_POST["regi_jelszo"]) != $oldpw) echo"<script>alertText('alertText','A régi jelszó nem megfelelő!','error')</script>";
    //else if($_POST["ujjelszo"] != $_POST["ujjelszo_megerosites"]) echo "<script>alertText('alertText','A jelszavak nem egyeznek!','error')</script>";
    if($_POST["email_uj"] == "") echo "<script>alertText('alertText','Az új email cím nem lehet üres!','error')</script>";
    //else if(strlen($_POST["ujjelszo"]) < 7) echo "<script>alertText('alertText','Az új jelszó 8 karaktertől kevesebb!','error')</script>";
    else
    {
        echo "<script>alertText('alertText','Sikeres email változtatás!','success')</script>";
        //$passwd = sha1($_POST["ujjelszo"]);
        $email = $_POST["email_uj"];
        $updateQuery = "UPDATE felhasznalok SET email='".$email."' WHERE id ='".$_SESSION["uid"]."'";
        executeQuery($updateQuery);
        
    }
}

?>