
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>BIKESHARING</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/checkout/">

    <!-- Bootstrap core CSS -->
<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <div class="container">
    <div class="col-md-8 ">
    	<br>
    	 <h3>ADD Data Penugasan</h3>
    <p class="lead">Hai Admin, Silahkan Isi Form di bawah ini.</p>
      <form class="needs-validation" novalidate>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Petugas</label>
            <select class="custom-select d-block w-100" name="petugas" required>
              <option>Choose..</option>
              <?php foreach ($ktp as $k) {
                echo "<option value='$k->ktp'>$k->ktp-$k->nama</option>";
              } ?>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
        </div>
          <div class="row">
          <div class="col-md-3 mb-3">
            <label for="firstName">Tanggal Mulai</label>
            <input type="text" class="form-control" name="tgl_mulai" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid Id is required.
            </div>
          </div>
           <div class="col-md-3 mb-3">
            <label for="firstName">Tanggal Berakhir</label>
            <input type="text" class="form-control" name="tgl_akhir" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid Id is required.
            </div>
          </div>
        </div>
        <div class="row">
        
          <div class="col-md-5 mb-3">
            <label for="country">Stasiun</label>
            <select class="custom-select d-block w-100" name="stasiun" required>
              <option>Choose..</option>
              <?php foreach ($nama as $k) {
                echo "<option value='$k->id_stasiun'>$k->nama</option>";
              } ?>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
        </div>
   
        
          
        <div class="row">
        	<div class="col-md-3 mb-3">
        		<button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Submit</button>
        	</div>
        	<div class="col-md-3 mb-3">
        		<?php echo anchor('penugasan','Batal', array('class'=>'btn btn-warning btn-lg btn-block'));?> 
        	</div>
        </div>
      </form>
    </div>
  </div>

  <footer class="container">
    <p>&copy; 2019 basdat team Kelompok 2, Inc. </p>
  </footer>
<script src="<?php echo base_url();?>assets/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="form-validation.js"></script></body>
</html>
