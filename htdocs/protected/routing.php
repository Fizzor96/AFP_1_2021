<?php 
if(!array_key_exists('P', $_GET) || empty($_GET['P']))
	$_GET['P'] = 'login';


	switch ($_GET['P']) 
    {
		case 'login': require_once PROTECTED_DIR.'user/login.php'; break;
        case 'register': require_once PROTECTED_DIR.'user/register.php'; break;

        case 'addNewClass': require_once PROTECTED_DIR.'class/add_new_class.php'; break;

        case 'home': require_once PROTECTED_DIR.'user/login.php'; break;
		default: require_once PROTECTED_DIR.'404.php'; break;
	}


?>