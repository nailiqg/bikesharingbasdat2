<!DOCTYPE html>
<html>
<head>
	<title>Acara</title>

</head>
<body>
	<h1>ACARA</h1>
	<br>
	<div class="topright">
	<form class="form-inline mt-2 mt-md-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-info my-2 my-sm-0" type="submit" href="#">Search</button>
  	</form>
  	</div>
  	<br>
  	<?php echo form_open('acara/post'); ?>
  	<button class="btn btn-success my-2 my-sm-0" type="submit" href="#">Add</button>
	<br><br>
	<table class="table tableborder">
		<tr><th>No</th><th>Judul</th><th>Deskripsi</th><th>Tanggal Mulai</th><th>Tanggal Berakhir</th><th  width='20'>Is Free</th><th colspan="2">Action</th></tr>

		<?php 
			$no=1;
			foreach ($judul->result() as $k) {
				echo "<tr>
				<td>$no</td>
				<td>$k->judul</td>
				<td>$k->deskripsi</td>
				<td>$k->tgl_mulai</td>
				<td>$k->tgl_akhir</td>
				<td>$k->is_free</td>
				<td>".anchor('acara/update/'.$k->id_acara,'Edit', array('class'=>'btn btn-secondary btn-sm'))."</td>
				<td>".anchor('acara/delete'.$k->id_acara,'Delete', array('class'=>'btn btn-danger btn-sm'))."</td>
				</tr>";
				$no++;
			}
	 	?>

		
	</table>
<?php echo $paging; ?>
<br><br><br><br><br><br>
</body>
</html>