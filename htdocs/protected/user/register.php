
<HTMl>
    <HEAD>
        <link rel="stylesheet" href="<?php echo PUBLIC_DIR."style.css";?>">
        <link rel="stylesheet" href="../../public/style.css">
    </HEAD>
    <BODY>
        <div class = "oDiv">
            <form method = "POST">
                <table class = "oForm">
                    <tr>
                        <td>
                            <!--<p>Teljes név</p>-->
                            <input type = "text" id = "register_fullname" placeholder = "Teljes név">
                        </td>
                    <tr>
                    <tr>
                        <td>
                            <!--<p>Felhasználónév</p>-->
                            <input type = "text" id = "reg_username" placeholder = "Felhaszálónév">
                        </td>
                    <tr>
                    <tr>
                        <td>
                            <!--<p>Jelszó</p>-->
                            <input type = "password" id = "reg_password" placeholder = "Jelszó">
                        </td>
                    <tr>
                    <tr>
                        <td>
                            <!--<p>Jelszó</p>-->
                            <input type = "password" id = "reg_password" placeholder = "Jelszó mégegyszer">
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