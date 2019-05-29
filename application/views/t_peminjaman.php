<!DOCTYPE html>
<html>
<head>
	<title>Peminjaman</title>
</head>
<body>
	<h1>PEMINJAMAN</h1>
	<br>

	<div class="topright">
	<form class="form-inline mt-2 mt-md-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-info my-2 my-sm-0" type="submit" href="#">Search</button>
  	</form>
  	</div>
  	<br>
  	<?php echo form_open('peminjaman/post'); ?>
  	 <button class="btn btn-success my-2 my-sm-0" type="submit" href="#">Add</button>
	<br><br>
	<table class="table tableborder">
		<tr><th>No Kartu Anggota</th><th>Sepeda</th><th>Stasiun</th><th>Waktu Kembali</th><th>Biaya</th><th>Denda</th><th>Action</th></tr>

		<?php 
			$no=1;
			foreach ($no_kartu_anggota->result() as $k) {
				echo "<tr>
				<td>$k->no_kartu_anggota- $k->nama_anggota</td>
				<td>$k->nomor_sepeda</td>
				<td>$k->id_stasiun - $k->nama_stasiun</td>
				<td>$k->datetime_kembali</td>
				<td>$k->biaya</td>
				<td>$k->denda</td>
				<td>".anchor(''.$k->no_kartu_anggota,'Kembalikan' , array('class'=>'btn btn-primary btn-sm'))."</td>
				</tr>";
				$no++;
			}
	 	?>
	</table>
	<?php echo $paging; ?>
<br><br><br><br><br><br>
</body>
</html>