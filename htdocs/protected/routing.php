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
		
		case 'listClass': 
			isUserLoggedIn() ? require_once PROTECTED_DIR.'class/del_class.php' : header('Location: index.php');
			break;
		case 'addToTimeTable': 
			isUserLoggedIn() ? require_once PROTECTED_DIR.'class/addToTimeTable.php' : header('Location: index.php');
			break;
		case 'admin': 
			isUserLoggedIn() && $_SESSION['jog'] == 1 ? require_once PROTECTED_DIR.'admin/admin.php' : header('Location: index.php');
			break;
		case 'home': 
			require_once PROTECTED_DIR.'home.php';;
			break;
		case 'logout': userLogout(); break;
		
		case 'edit_user' : 
			isUserLoggedIn() ? require_once PROTECTED_DIR.'user/edit_user.php' : header('Location: index.php');
			break;
		case 'edit_class' :
			isUserLoggedIn() && $_SESSION['jog'] == 1 ? require_once PROTECTED_DIR.'class/edit_class.php' :header('Location: index.php');
			break;
		default: require_once PROTECTED_DIR.'404.php'; break;
	}


?>