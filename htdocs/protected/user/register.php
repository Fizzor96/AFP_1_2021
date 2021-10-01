
<HTMl>
    <HEAD>
        <link rel="stylesheet" href="<?php echo PUBLIC_DIR."style.css";?>">
        <link rel="stylesheet" href="../../public/style.css">
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
        <div class = "oDiv">
            <form method = "POST">
                <table class = "oForm">
                    <tr>
                        <td colspan = 2><span id = "alertText"></span></td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-user"></i></td>
                        <td>
                        
                        <input type = "text" id = "reg_username" name = "reg_username" placeholder = "Felhasználónév">
                        </td>
                    <tr>
                    <tr><td><i class="fa fa-key"></i></td>
                        <td>
                            <input type = "password" id = "reg_password" name = "reg_password" placeholder = "Jelszó">
                        </td>
                    <tr>
                    <tr><td><i class="fa fa-key"></i></td>
                        <td>
                            <input type = "password" id = "reg_password_again" name = "reg_password_again" placeholder = "Jelszó mégegyszer">
                        </td>
                    <tr>
                    <tr><td><i class="fa fa-envelope"></i></td>
                        <td>
                            <input type = "email" id = "reg_email" name = "reg_email" placeholder = "Email">
                        </td>
                    <tr>
                    <tr class = "oText">
                        <td colspan = 2>Már van felhasználód? <a href = "index.php?P=login"><span>Kattints ide!</span><a></td>
                    <tr>
                    <tr>
                        <td colspan = 2><button name = "registerBtn" type = "submit">Regisztráció</button></td>
                    <tr>
                </table>
            </form>
        </div>
    </BODY>
</HTML>
<?php

if(isset($_POST["registerBtn"]))
{
    if($_POST["reg_username"] == "") echo "<script>alertText('alertText','A felhasználónév mező nem lehet üres!','error')</script>";
    else if($_POST["reg_password"] == "") echo "<script>alertText('alertText','A jelszó mező nem lehet üres!','error')</script>";
    else if($_POST["reg_password"] != $_POST["reg_password_again"]) echo "<script>alertText('alertText','A jelszavak nem egyeznek!','error')</script>";
    else if($_POST["reg_email"] == "") echo "<script>alertText('alertText','Az email mező nem lehet üres!','error')</script>";
    else if(strlen($_POST["reg_password"]) < 7) echo "<script>alertText('alertText','A jelszó mező nem lehet 8 karaktertől kevesebb!','error')</script>";
    else
    {
        $uname = $_POST["reg_username"];
        $checkQuery = "SELECT * FROM felhasznalok WHERE felhasznalonev = '".$uname."'";
        $ifNotExists = classList($checkQuery);
        if($ifNotExists === NULL || empty($ifNotExists))
        {
            echo "<script>alertText('alertText','Sikeres regisztráció!','success')</script>";
        
        $passwd = sha1($_POST["reg_password"]);
        $email = $_POST["reg_email"];
        $registerQuery = "INSERT INTO felhasznalok(felhasznalonev,jelszo,email,jog) VALUES('". $uname. "', '". $passwd ."', '". $email ."', 0)";
        executeQuery($registerQuery);
        }
        else
        {
            echo "<script>alertText('alertText','Már van ilyen felhasználónév!','error')</script>";
        }
    }
}
?>