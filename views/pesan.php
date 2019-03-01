
<html>
<head>
	<title></title>
</head>
<body>
<form>
	<table>
		<tr>
			<th>No</th>
			<th>Menu</th>
			<th>Harga</th>
			<th>jumlah</th>
		</tr>
		<?php
		$no = 1;
		foreach($value as $x){
			?>
			<tr>
				<td><?php echo $x->id ?></td>
				<td><?php echo $x->menu ?></td>
				<td><?php echo $x->harga ?></td>
				<td><input type="number" name="jumlah" min=1 max=90 step=1"></td>
			</tr>
	<?php	} ?>
	<form method="POST">
		<tr>
			<td colspan="4">
				<input type="submit" name="submit" value="pesan">
			</td>
		</tr>
	</form>
	</table>
</form>
</body>
</html>