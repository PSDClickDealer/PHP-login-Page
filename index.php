<?php 

define('__CONFIG__', true);

require_once "inc/config.php"; 
?>

<!DOCTYPE html>
<html>
<head>
<script  src="jquery-3.3.1.min.js"></script>
<script>
//	$ (window).ready(function() {
//		alert('Loaded');
//	});
//</script>
<title>hello there</title>
<link rel="stylesheet" href="Login.css">
</head>
<body>

	<div class="uk-section uk-container">
		<?php 
			echo "Hello there ";
			echo date("Y m d");
		 ?>
	</div>
<a href="register.php">Register</a> <a href="register.php">Login</a>


</body>
</html>
