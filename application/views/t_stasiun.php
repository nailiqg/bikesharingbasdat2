<!DOCTYPE html>
<html>
<head>
	<title>Stasiun</title>
</head>
<body>
	<h1>STASIUN</h1>
	<br>

	<div class="topright">
	<form class="form-inline mt-2 mt-md-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-info my-2 my-sm-0" type="submit" href="#">Search</button>
  	</form>
  	</div>
  	<br>
  	<?php echo form_open('stasiun/post'); ?>
  	 <button class="btn btn-success my-2 my-sm-0" type="submit" href="#">Add</button>
	<br><br>
	<table class="table tableborder">
		<tr><th>No</th><th>Nama Stasiun</th><th>Alamat</th><th>Latitude</th><th>longitude</th><th colspan="2">Action</th></tr>

		<?php 
			$no=1;
			foreach ($nama->result() as $k) {
				echo "<tr>
				<td>$no</td>
				<td>$k->nama</td>
				<td>$k->alamat</td>
				<td>$k->lat</td>
				<td>$k->long</td>
				<td width='20'>".anchor('stasiun/update/'.$k->id_stasiun,'Update', array('class'=>'btn btn-secondary btn-sm'))."</td>
				<td width='20'>".anchor('stasiun/delete'.$k->id_stasiun,'Delete', array('class'=>'btn btn-danger btn-sm'))."</td>
				</tr>";
				$no++;
			}
	 	?>
	</table>
<?php echo $paging; ?>
<br><br><br><br><br><br>
</body>
</html>