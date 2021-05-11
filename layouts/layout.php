<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="assets/style.css" rel="stylesheet">
	</head>
	<body>

  <header>

  <?php 
	
		require_once('partials/header.php');
		
	?>

  </header>
  
	<main>

  <?php require_once($view) ?>

	</main>

	</body>
</html>