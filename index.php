<?php

  session_start();
	require_once('tools.php');
		
	if(isset($_GET['page'])){

		$page = $_GET['page'];

		switch ($page){

			case 'blocs':
				require_once('controllers/memoController.php');
				break;

			default :
				header('Location: index.php');
				exit;
		}
	}

	else {
		$page = "";
		require_once('controllers/indexController.php');
	}

	require_once('layouts/layout.php');
  if(isset($_SESSION['message'])){
		unset($_SESSION['message']);
	} 

?>

