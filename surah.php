<?php
	session_start();
	$session_id=session_id();

	if (isset($_POST["surahke"]))
	$surahke=$_POST['surahke'];
	if (isset($_GET["surahke"]))
		$surahke=$_GET['surahke'];
	if ($surahke>114) {
		header('location: nosignal.php');
	}
	if ($surahke<1) {
		header('location: nosignal.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		<?php 
		echo "$surahke | Litte Quran"
		;?>
	</title>	
	<script type="text/javascript">
		var surahke = "<?php echo $surahke;?>";
	</script>
	<link rel="icon" href="img/icon.png">
	<link rel="stylesheet" type="text/css" href="css/quran.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">	
	
</head>
<body>
	<div class="main">	
		<div class="container">
			<div class="greet">
				
				<h1 id="arabic"><a href="index.php">السَّلاَمُ عَلَيْكُمْ وَرَحْمَةُ اللهِ وَبَرَكَاتُهُ </a></h1>
				<h3 id="latin">Assalamu'alaikum warahmatullah wabarakatuh</h3>
				<p id="tag"><strong>Selamat datang sahabat fillah</strong><br></p>
			</div>
			<hr>
			<div class="option">
				<div class="form">
					<form action="surah.php" method="POST">
						<label>Surah ke-</label>
						<input type="text" id="nomersurah" name="surahke" placeholder="No. " size="3rem">
						<!--<input type="text" id="nasurah" name="nama" placeholder="Nama Surah" size="15rem">-->
						<input id="btnsrc" type="submit" name="cari" value="search"><i class="fa fa-search" aria-hidden="true"></i></input>
					</form>
				</div>
			</div>
			<hr>
			<div id="Audio"></div>
			<div id="Surah"></div>
			<button id="btnsurah">..Loading</button>
			<hr>
			<footer>
				<h5>&copy; Hak cipta hanya milik Allah<br><small><small>PAEMM Samawa</small></small></h5>
				<a href="#"><button id="btn">Kembali ke atas</button></a>
				<hr>
			</footer>
			<hr>
		</div>
	</div>
<script src="audio.js"></script>
<script src="surah.js"></script>
</body>
</html>