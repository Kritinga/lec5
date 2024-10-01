<?php 

$url = isset($_GET['url']) ? $_GET['url'] : 'index';

switch ($url) {
	case 'HomePage':
		include 'Casakit_home.php';
		break;
	case 'LoginHere':
		include 'Casakit_login.php';
		break;
		case 'Register':
		include 'Register.php';
		break;
	default:
		echo "<script>window.location.href='LoginHere'</script>";
		break;
}




?>