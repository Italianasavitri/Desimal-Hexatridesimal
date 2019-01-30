<!DOCTYPE html>
<html>
<head>
	<title>Hexatrigesimal</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
</head>
<body>
	<h2 align="center">Konversi Desimal ke Hexatridesimal</h2>
	<hr>
	<br>

	<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">

	<label><b>Decimal to Hexatridesimal</b></label>
	<form method="POST" enctype="multipart/form-data" align="center">
		<input type="number" class="desimal" name="desimal" placeholder="Input Nilai Desimal">
		<button type="submit" name="konversihexatri">Konversi</button>
	</form>
	<br>

	<p align="center">
	<?php
	if(isset($_POST['konversihexatri'])){
		$inputdesimal = $_POST['desimal'];
		$hexatri = base_convert($inputdesimal, 10, 36);
		echo "Output Hexatridesimal ".strtoupper($hexatri)."</br>";
	}
	?>
	</p>

	<br>
	<br>

	<label><b>Hexatridesimal to Decimal</b></label>
	<form method="POST" align="center">
		<input type="text" class="hexatri" name="hexatri" placeholder="Input Nilai Hexatridesimal">
		<button type="submit" name="konversidesimal">Konversi</button>
	</form>
	<br>

	<p align="center">
	<?php
	if(isset($_POST['konversidesimal'])){
		$inputhexatri = $_POST['hexatri'];
		$desimal = base_convert($inputhexatri, 36, 10);
		echo "Output Desimal ".$desimal."</br>";
	}
	?>
	</p>

	</div>
	<div class="col-md-4"></div>
	</div>

</body>
</html>