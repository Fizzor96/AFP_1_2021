
<HTMl>
    <HEAD>
        <link rel="stylesheet" href="<?php echo PUBLIC_DIR."style.css";?>">
        <link rel="stylesheet" href="../../public/style.css">
        
        <style>
            .oDiv .oForm
            {
                padding-top: 130px;
                color: #F0F0F0;
            }
        </style>
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
                        
                        <input type = "text" id = "log_username" name = "log_username" placeholder = "Felhasználónév">
                        </td>
                    <tr>
                    <tr><td><i class="fa fa-key"></i></td>
                        <td>
                            <input type = "password" id = "log_password" name = "log_password" placeholder = "Jelszó">
                        </td>
                    <tr>
                    <tr class = "oText">
                        <td colspan = 2>Még nincs felhasználód? <a href = "index.php?P=register"><span>Kattints ide!</span><a></td>
                    <tr>
                    <tr>
                        <td colspan = 2><button name = "loginBtn" type = "submit">Bejelentkezés</button></td>
                    <tr>
                </table>
            </form>
        </div>
    </BODY>
</HTML>
<?php

if(isset($_POST["loginBtn"]))
{
    if($_POST["log_username"] == "") echo "<script>alertText('alertText','A felhasználónév mező nem lehet üres!','error')</script>";
    else if($_POST["log_password"] == "") echo "<script>alertText('alertText','A jelszó mező nem lehet üres!','error')</script>";
    else
    {
        $uname = $_POST["log_username"];
        
        $checkQuery = "SELECT * FROM felhasznalok WHERE felhasznalonev = '".$uname."'";
        $actualUser = classList($checkQuery);
        if($actualUser === NULL || empty($actualUser))
        {
            echo "<script>alertText('alertText','Nincs ilyen felhasználónév!','error')</script>";
        }
        else
        {
            $passwd = sha1($_POST["log_password"]);
            $loginQuery = "SELECT id,felhasznalonev,jelszo,email,jog FROM felhasznalok WHERE felhasznalonev = '".$uname."' AND jelszo = '".$passwd."'";
            $successLogin = classList($loginQuery);
            if(empty($successLogin))
            {
                echo "<script>alertText('alertText','Hibás jelszó!','error')</script>";
            }
            else
            {
                echo "<script>alertText('alertText','Sikeres bejelentkezés!','success')</script>";
                
                foreach($successLogin as $row)
                {
                    $_SESSION["uid"] = $row["id"];
                    $_SESSION["felhasznalonev"] = $row["felhasznalonev"];
                    $_SESSION["jelszo"] = $row["jelszo"];
                    $_SESSION["email"] = $row["email"];
                    $_SESSION["jog"] = $row["jog"];
                }
                echo "<script>alert('".$_SESSION['uid']." Bejelentkezett felhasználónév: ".$_SESSION['felhasznalonev']." Jelszava: ".$_SESSION['jelszo']." Email: ".$_SESSION['email']." Joga: ".$_SESSION['jog']."')</script>";
                header("location: index.php");
            }
        }
    }
}
?>