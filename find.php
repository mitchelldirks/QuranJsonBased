<?php
	session_start();
	$session_id=session_id();

	$surahke=$_POST['surahke']; $surahke--;
	//$nama=$_POST['nama'];
	//$sql="select * from quran where nama like=%nama% or no=$surahke";
	//$result=$conn->query($sql);

	//if (isset($_GET["surahke"])) //$surahke=$_GET["surahke"];
	//if (isset($_GET["nama"])) //$nama=$_GET["nama"];
	//$surahke=$_POST['surahke'];
	//$nama=$_POST['nama'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>
		<?php 
		$surahke ++;
		echo "$no | $name | Litte Quran"
		;?>
	</title>	
	<link rel="icon" href="icon.png">
	<link rel="stylesheet" type="text/css" href="quran.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
	<div class="main">
		<div class="container">
			<div class="greet">
				<h1 id="arabic">السَّلاَمُ عَلَيْكُمْ وَرَحْمَةُ اللهِ وَبَرَكَاتُهُ </h1>
				<h3 id="latin">Assalamu'alaikum warahmatullah wabarakatuh</h3>
				<p id="tag"><strong>Selamat datang sahabat fillah</strong><br></p>
			</div>
			<hr>
			<div class="option">
				<div class="form">
					<form action="find.php" method="POST">
						<label>Surah ke-</label>
						<input type="text" id="nomersurah" name="surahke" placeholder="No. " size="3rem">
						<!--<input type="text" id="nasurah" name="nama" placeholder="Nama Surah" size="15rem">-->
						<input id="btnsrc" type="submit" name="cari" value="search"><i class="fa fa-search" aria-hidden="true"></i></input>
					</form>
				</div>
			</div>
			<hr>
			<button id="btn"></button>
			<div id="Surah"></div>
		</div>
	</div>

</body>
<script src="surah.js"></script>
</html>