<!-- <?php 
	echo form_open('auth/login');
 ?>

<input type="text" name="ktp" placeholder="Nomor KTP">
<input type="text" name="email" placeholder="Email">
<button type="submit" name="submit">login</button>
</form>
 -->
 
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>BIKESHARING</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

  </head>

  <body class="text-left">
  	<div class="row featurette"> 
  		<div class="col-md-7"> 
  
  		<h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  		<div class="row">
        <div class="col-md-4 mb-3">
          <input class="form-control" type="text" id="ktp" placeholder="Nomor KTP" method="post">
        </div>

        <div class="col-md-6 mb-3">
          <input class="form-control" type="text" id="email" placeholder="Email" method="post">
        </div>
      </div>
   		<div class="checkbox mb-3">
        	<label>
          		<input type="checkbox" value="remember-me"> Remember me
        	</label>
      	</div>
      
      <div class="row">
          <div class="col-md-3 mb-3">
            <?php echo form_open('auth/login'); ?>
  		        <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Login</button>
          </div>

          <div class="col-md-3 mb-3">
            <?php echo anchor('register/regis','Register', array('class'=>'btn btn-warning btn-lg btn-block'));?>
          </div>
       </div>     
  		</form>
  	</div>

  	<div class="col-md-5">
  		<img src="../../images/logo.png" width="500" height="500">
  	</div>
  	</div>
    <br><br>
    <footer class="container">
    <p>&copy; 2019 basdat team Kelompok 2, Inc. </p>
  </footer>
  </body>
</html>
