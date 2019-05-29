<!DOCTYPE html>
<html>
<head>
	<title>Sepeda</title>
</head>
<body>
	<h1>SEPEDA</h1>
	<br>

	<div class="topright">
	<form class="form-inline mt-2 mt-md-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-info my-2 my-sm-0" type="submit" href="#">Search</button>
  	</form>
  	</div>
  	<br>
  	<?php echo form_open('sepeda/post'); ?>
  	 <button class="btn btn-success my-2 my-sm-0" type="submit" href="#">Add</button>
	<br><br>
	<table class="table tableborder">
		<tr><th>Nomor</th><th>Merk</th><th>Jenis</th><th>Stasiun</th><th>Status</th><th>Penyumbang</th><th colspan="2">Action</th></tr>

		<?php 
			$no=1;
			foreach ($nomor->result() as $k) {
				echo "<tr>
				<td>$k->nomor</td>
				<td>$k->merk</td>
				<td>$k->jenis</td>
				<td>$k->nama_stasiun</td>
				<td>$k->status</td>
				<td>$k->nama_penyumbang</td>
				<td width='20'>".anchor('sepeda/update/'.$k->nomor,'Update', array('class'=>'btn btn-secondary btn-sm'))."</td>
				<td width='20'>".anchor('sepeda/update'.$k->nomor,'Delete', array('class'=>'btn btn-danger btn-sm'))."</td>
				</tr>";
				$no++;
			}
	 	?>
	</table>
<?php echo $paging; ?>
<br><br><br><br><br><br>
</body>
</html>