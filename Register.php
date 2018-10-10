<?php 

define('__CONFIG__', true);

require_once "inc/config.php"; 
?>

<!DOCTYPE html>
<html>
<head>
<script>
//	$ (window).ready(function() {
//		alert('Loaded');
//	});
//</script>
<title>hello there</title>
<link rel="stylesheet" href="Login.css">
</head>
<body>

<ul>
<a href="Login.php">Login</a>
</ul>
<div class="uk-section uk-container">
        <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid>
            <form class="uk-form-stacked js-register">
                
                <h2>Register</h2>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-text">Email</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-text" type="email" required='required' placeholder="email@email.com">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-text">Passphrase</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-text" type="password" required='required' placeholder="Your passphrase">
                    </div>
                </div>

                <div class="uk-margin uk-alert uk-alert-danger js-error" style='display: none;'></div>

                <div class="uk-margin">
                    <button class="uk-button uk-button-default" type="submit">Register</button>
                </div>

            </form>
        </div>
    </div>
<!--
<div class="bottom">

<div id="container">
  
    <div id="main">

</div>

  <footer id="bottom">
    
  </footer>
-->
    <?php require_once "inc/footer.php"; ?>
</body>
</html>
