<?php 
if(!array_key_exists('P', $_GET) || empty($_GET['P']))
	$_GET['P'] = 'home';


	switch ($_GET['P']) 
    {
		case 'login': 
			!isUserLoggedIn() ? require_once PROTECTED_DIR.'user/login.php' : header('Location: index.php');
			 break;
        case 'register': 
			!isUserLoggedIn() ? require_once PROTECTED_DIR.'user/register.php' : header('Location: index.php');
			break;
        case 'addNewClass': 
			isUserLoggedIn() ? require_once PROTECTED_DIR.'class/add_new_class.php' : header('Location: index.php');
			break;
		case 'deleteFromTimeTable': 
			isUserLoggedIn() ? require_once PROTECTED_DIR.'class/del_class.php' : header('Location: index.php');
			break;
		case 'addToTimeTable': 
			isUserLoggedIn() ? require_once PROTECTED_DIR.'class/addToTimeTable.php' : header('Location: index.php');
			break;
		case 'logout': userLogout(); break;

		case 'edit_user' : 
			isUserLoggedIn() ? require_once PROTECTED_DIR.'user/edit_user.php' : header('Location: index.php');
			break;
		default: require_once PROTECTED_DIR.'404.php'; break;
	}


?>