
<HTMl>
    <HEAD>
        <link rel="stylesheet" href="<?php echo PUBLIC_DIR."register.css";?>">
        <link rel="stylesheet" href="../../public/register.css">
    </HEAD>
    <BODY>
        <div class = "registerDiv">
            <form method = "POST">
                <table class = "registerForm">
                    <tr>
                        <td>
                            <!--<p>Teljes név</p>-->
                            <input type = "text" id = "register_fullname" placeholder = "Full name">
                        </td>
                    <tr>
                    <tr>
                        <td>
                            <!--<p>Felhasználónév</p>-->
                            <input type = "text" id = "reg_username" placeholder = "Username">
                        </td>
                    <tr>
                    <tr>
                        <td>
                            <!--<p>Jelszó</p>-->
                            <input type = "password" id = "reg_password" placeholder = "Password">
                        </td>
                    <tr>
                    <tr>
                        <td>
                            <!--<p>Email</p>-->
                            <input type = "email" id = "reg_email" placeholder = "Email">
                        </td>
                    <tr>
                    <tr class = "loginText">
                        <td colspan = 2>Már van felhasználód? <a href = "index.php?P=login"><span>Kattints ide!</span><a></td>
                    <tr>
                    <tr>
                        <td colspan = 2><button>Register</button></td>
                    <tr>
                </table>
            </form>
        </div>
    </BODY>
</HTML>