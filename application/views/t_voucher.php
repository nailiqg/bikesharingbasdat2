<!DOCTYPE html>
<html>
<head>
	<title>Voucher</title>
</head>
<body>
	<h1>VOUCHER</h1>
	<br>

	<div class="topright">
	<form class="form-inline mt-2 mt-md-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-info my-2 my-sm-0" type="submit" href="#">Search</button>
  	</form>
  	</div>
  	<br>
  	<?php echo form_open('voucher/post'); ?>
  	 <button class="btn btn-success my-2 my-sm-0" type="submit" href="#">Add</button>
	<br><br>
	<table class="table tableborder">
		<tr><th>Id Voucher</th><th>Nama</th><th>Kategori</th><th>Nilai Poin</th><th>Deskripsi</th><th>Diclaim Oleh</th><th colspan="2">Action</th></tr>

		<?php 
			$no=1;
			foreach ($nama->result() as $k) {
				echo "<tr>
				<td>$k->id_voucher</td>
				<td>$k->nama_voucher</td>
				<td>$k->kategori</td>
				<td>$k->nilai_poin</td>
				<td>$k->deskripsi</td>
				<td>$k->no_kartu_anggota - $k->nama_anggota</td>
				<td width='20'>".anchor('voucher/update/'.$k->id_voucher,'Update', array('class'=>'btn btn-secondary btn-sm'))."</td>
				<td width='20'>".anchor('voucher/delete'.$k->id_voucher,'Delete', array('class'=>'btn btn-danger btn-sm'))."</td>
				</tr>";
				$no++;
			}
	 	?>
	</table>
	<?php echo $paging; ?>
<br><br><br><br><br><br>
</body>
</html>