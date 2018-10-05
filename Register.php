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
<header>
<a href="Werthington.html"></a>
  <nav>
<ul>
<a href="Login.php">Login</a>
</ul>
</nav>



</header>


<!-- UIkit JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.17/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.17/js/uikit-icons.min.js"></script>

<form class="uk-form-stacked js-register">

    <h2>Register</h2>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Email</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-stacked-text" type="Email" placeholder="Your Email">
        </div>
    </div>

        <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Password</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-stacked-text" type="Password" placeholder="Password">
        </div>
    </div>

    <div class="uk-margin">
    	<button class="uk-button uk-button-default" type="submit">Register</button>
    </div>
</form>

<div class="bottom">

<div id="container">
  
    <div id="main">

</div>

  <footer id="bottom">
    
  </footer>


</body>
</html>
