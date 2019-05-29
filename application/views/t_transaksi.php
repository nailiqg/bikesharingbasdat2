<!DOCTYPE html>
<html>
<head>
	<title>Transaksi</title>
</head>

<body>
	<h1>TRANSAKSI</h1>
	<br>
	<div class="topright">
	<form class="form-inline mt-2 mt-md-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-info my-2 my-sm-0" type="submit" href="#">Search</button>
  	</form>
  	</div>
  	<br>
  	<?php echo form_open('transaksi/post'); ?>
  	 <button class="btn btn-success my-2 my-sm-0" type="submit" href="#">Topup</button>
	<br><br>
	<table class="table tableborder">
		<tr><th>No</th><th>Tanggal</th><th>Jenis Transaksi</th><th>Nominal</th></tr>

		<?php 
			$no=1;
			foreach ($datetime->result() as $k) {
				echo "<tr>
				<td width='10'>$no</td>
				<td width='100'>$k->date_time</td>
				<td width='10'>$k->jenis</td>
				<td width='30'>$k->nominal</td>
				</tr>";
				$no++;
			}
	 	?>
	</table>
<?php echo $paging; ?>
<br><br><br><br><br><br>
</body>
</html>