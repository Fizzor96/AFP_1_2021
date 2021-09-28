<?php session_start(); ?>
<?php require_once 'protected/config.php';
?>
<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
	    <title>Órarend</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <nav><?php require_once PROTECTED_DIR.'navbar.php'; ?></nav>
        <content><?php require_once PROTECTED_DIR.'routing.php'; ?></content>
    </body>
</html>