<!DOCTYPE html>
<html lang="en">
  <head>
    
    <title>Login Form</title>
   <link href="style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="col-md-4 col-md-offset-4 form-login">
    
    <?php
    /* handle error */
    if (isset($_GET['error'])) : ?>
        <div class="alert alert-warning alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong>Warning!</strong> <?=base64_decode($_GET['error']);?>
        </div>
    <?php endif;?>

       <div class="login"> <!-- Login -->
		<h1>Silahkan Login</h1>
            <form action="check-login.php" class="form" method="post">
           
			<p class="field">
				<input type="text" name="username" placeholder="Username or email" required/>
			</p>
 
			<p class="field">
				<input type="password" name="password" placeholder="Password" required/>
			</p>
 
			<p class="submit"><input class="btn" type="submit" name="commit" value="Login">
			</p>
				
				
            </form>
    </div>
 </body>
</html>