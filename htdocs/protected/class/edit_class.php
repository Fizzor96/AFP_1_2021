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
        <div class="container">
            <h2>Óra szerkesztése</h2>
            <form action="" method="POST" accept-charset="UTF-8">
                <div class="form-group">
                    <label for="nev">Óra név: </label>
                    <input type="text" class="form-control" name="nev" required="required" id="nev" maxlength="255"/> <br/>
                </div>
                <div class="form-group">
                    <label for="ido">Időpont: </label>
                    <input type="enum" class="form-control" name="jelszo" required="required" id="jelszo" maxlength="255"/> <br/>
                </div>
                <div class="form-group">
                    <label for="jelszo_megerosites">Jelszó megerősítése: </label>
                    <input type="password" class="form-control" name="jelszo_megerosites" required="required" id="jelszo_megerosites" maxlength="255"/> <br/>
                </div>
                <div class="form-group">
                    <label for="email">E-mail cím: </label>
                    <input type="email" class="form-control" name="email" required="required" id="email" maxlength="255"/> <br/>
                </div>
                <div class="form-group">
                    <label for="email_megerosites">E-mail cím megerősítése: </label>
                    <input type="email" class="form-control" name="email_megerosites" required="required" id="email_megerosites" maxlength="255"/> <br/>
                </div>
                <button type="submit" name="submit" >Mentés </button>
            </form>
        </div>
    </BODY>
</HTML>