<!DOCTYPE html>
<html>
<head>
	<title>Laporan</title>
</head>
<body>
	<h1>LAPORAN</h1>
	<div class="topright">
	<form class="form-inline mt-2 mt-md-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-info my-2 my-sm-0" type="submit" href="#">Search</button>
  	</form>
  	</div>
  	<br><br><br><br><br>
	<table class="table tableborder">
		<tr><th>No</th><th>Id Laporan</th><th>Tanggal Pinjam</th><th>Anggota</th><th>Denda</th><th>Status</th></tr>

		<?php 
			$no=1;
			foreach ($id_laporan->result() as $k) {
				echo "<tr>
				<td>$no</td>
				<td>$k->id_laporan</td>
				<td>$k->datetime_pinjam</td>
				<td>$k->nama - $k->no_kartu_anggota</td>
				<td></td>
				<td>$k->status</td>
				</tr>";
				$no++;
			}
	 	?>

		
	</table>
<?php echo $paging; ?>
<br><br><br><br><br><br>
</body>
</html>