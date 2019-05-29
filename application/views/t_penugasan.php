<!DOCTYPE html>
<html>
<head>
	<title>Penugasan</title>
</head>
<body>
	<h1>PENUGASAN</h1>
	<br>

	<div class="topright">
	<form class="form-inline mt-2 mt-md-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-info my-2 my-sm-0" type="submit" href="#">Search</button>
  	</form>
  	</div>
  	<br>
  	<?php echo form_open('penugasan/post'); ?>
  	 <button class="btn btn-success my-2 my-sm-0" type="submit" href="#">Add</button>
	<br><br>
	<table class="table tableborder">
		<tr><th>No</th><th>Petugas</th><th>Tanggal Mulai</th><th>Tanggal Akhir</th><th>Stasiun</th><th colspan="2">Action</th></tr>

		<?php 
			$no=1;
			foreach ($ktp->result() as $k) {
				echo "<tr>
				<td>$no</td>
				<td>$k->ktp-$k->nama</td>
				<td>$k->start_datetime</td>
				<td>$k->end_datetime</td>
				<td>$k->id_stasiun - $k->nama_stasiun</td>
				<td width='20'>".anchor('penugasan/update/'.$k->ktp,'Update',array('class'=>'btn btn-secondary btn-sm'))."</td>
				<td width='20'>".anchor('penugasan/delete'.$k->ktp,'Delete', array('class'=>'btn btn-danger btn-sm'))."</td>
				</tr>";
				$no++;
			}
	 	?>
	</table>

<?php echo $paging; ?>
<br><br><br><br><br><br>
</body>
</html>