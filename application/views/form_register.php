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
  		<?php echo form_open('auth/register'); ?>
  
  		<h1 class="h5 mb-3 font-weight-normal">Selamat datang, silahkan daftarkan diri anda terlebih dahulu</h1>
  		
      <div class="mb-3">
            <label>No KTP</label>
            <input class="form-control" type="text" name="ktp" placeholder="Nomor KTP">
      </div>

      <div class="mb-3">
            <label>Nama Lengkap</label>
            <input class="form-control" type="text" name="nama" placeholder="Example Ilian">
      </div>

      <div class="mb-3">
            <label>Email</label>
            <input class="form-control" type="text" name="email" placeholder="example@example.com">
      </div>

      <div class="mb-3">
            <label>Tanggal Lahir </label>
            <input class="form-control" type="text" name="tgl_lahir" placeholder="DD/MM/YYYY">
      </div>

      <div class="mb-3">
            <label>Nomor Telepon</label>
            <input class="form-control" type="text" name="no_telp" placeholder="084356xxxxxx">
      </div>

      <div class="mb-3">
            <label>Alamat</label>
            <input class="form-control" type="text" name="alamat" placeholder="Jl.Example Blok.Example">
      </div>

      <div class="checkbox mb-3">
          <label>
              <input type="checkbox" value="" style="font-size:60%;"> Dengan mengklik ini berarti anda setuju dengan semua S/K yang berlaku di aplikasi BIKESHARING
          </label>
        </div>
  		
      <div class="row">
          <div class="col-md-3 mb-3">
            <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Daftar</button>
          </div>
          <div class="col-md-3 mb-3">
            <?php echo anchor('auth/login','Batal', array('class'=>'btn btn-warning btn-lg btn-block'));?> 
          </div>
        </div>


  		</form>
  	</div>

  	</div>
    <br><br>
    <footer class="container">
    <p>&copy; 2019 basdat team Kelompok 2, Inc. </p>
  </footer>
  </body>
</html>
