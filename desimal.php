<!DOCTYPE html>
<html>
<head>
	<title>Konversi Desimal ke Hexatridesimal</title>
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

	<p align="center">
	<?php
	if(isset($_POST['konversihexatri'])){
		$input = $_POST['desimal'];
		$desimal = array ("0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");
		$hasil = "";
		$base = 36;

	while ($input > 0) {
		$temp = $input%$base;
		$hasil = $desimal[$temp].$hasil;
		$input = floor($input/$base);
	}

		echo "Output Hexatridesimal ".$hasil;
	}
	?>
	</p>

	</div>
	<div class="col-md-4"></div>
	</div>

	<br>

	<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">

	<label><b>Hexatridesimal to Decimal</b></label>
	<form method="POST" enctype="multipart/form-data" align="center">
		<input type="text" class="desimal" name="hextri" placeholder="Input Nilai Hexatridecimal">
		<button type="submit" name="konversidesimal">Konversi</button>
	</form>

	<p align="center">
	<?php
	if(isset($_POST['konversidesimal'])){
		$inputdes = $_POST['hextri'];
		$hextri = array ("0"=>0,"1"=>1,"2"=>2,"3"=>3,"4"=>4,"5"=>5,"6"=>6,"7"=>7,"8"=>8,"9"=>9,"A"=>10,"B"=>11,"C"=>12,"D"=>13,"E"=>14,"F"=>15,"G"=>16,"H"=>17,"I"=>18,"J"=>19,"K"=>20,"L"=>21,"M"=>22,"N"=>23,"O"=>24,"P"=>25,"Q"=>26,"R"=>27,"S"=>28,"T"=>29,"U"=>30,"V"=>31,"W"=>32,"X"=>33,"Y"=>34,"Z"=>35);
		$num=strlen($inputdes);
		$hasildes = 0;
		$base2 = 36;
		$id=0;

	while ($id < $num) {
		$pangkat=$num-($id+1);
		$ke=substr($inputdes, $id, 1);
		$hasildes=$hextri["$ke"]*pow(36, $pangkat)+$hasildes;
		$id++;
	}

		print "Output Desimal " . $hasildes;
	}
	?>
	</p>

	</div>
	<div class="col-md-4"></div>
	</div>

</body>
</html>



