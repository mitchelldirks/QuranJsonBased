<!DOCTYPE html>
<html>
<head>
	<title>Little Quran</title>
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
				<p id="pengantar">Segala puji bagi Allah SWT, Tuhan seru sekalian alam. Shalawat dan salam semoga dilimpahkan-Nya kepada Nabi Muhammad SAW yang diutus sebagai rahmat bagi sekalian alam, berserta keluarga dan para sahabatnya serta para pengikutnya yang setia sampai hari kemudian.
 
				Website ini kami buat dengan maksud untuk mengamalkan mengenai Asbabun Nuzul Qur’an. Penyusunan dalam bentuk website interaktif ini akan memberi banyak manfaat dan memperluas ilmu pengetahuan.
				
				Akhirnya, hanya kepada Allah SWT kami mohon, semoga usaha ini merupakan usaha yang murni bagi-Nya dan berguna bagi kita sekalian sampai hari kemudian.
				
				Dan tak lain yang kami harapkan adalah syafaat, berkah darimu ya Muhammad. Semoga kita selalu dalam lindungan Illahi Rabbil Izzati, dan mampu meneladani kemuliaan akhlaqmu yang teruntai di dalam sunnah-nabawiyahmu. Aamiin Ya Rabbal Aalamiin.</p>
			</div>
			<hr>
			<div class="option">
				<div class="form">
					<form action="surah.php" method="POST">
						<label>Surah ke-</label>
						<input type="text" id="nomersurah" name="surahke" placeholder="No. " size="3rem">
						<!--<input type="text" id="nasurah" name="nama" placeholder="Nama Surah" size="15rem">-->
						<input id="btnsrc" type="submit" name="cari" value="Cari"><i class="fa fa-search" aria-hidden="true"></i></input>
					</form>
				</div>
				
			</div>
			<hr>
			<div id="result">
				<div id="Quran"></div>
				<div class="showlist">
					<label></label>
					<button id="btnlist">Lihat daftar surah</button>
				</div>
			</div>
			<hr>
			<footer>
				<div class="quote">
					<label id="arabic"><strong><a href="surah.php?surahke=3">"يَا أَيُّهَا الَّذِينَ آ…لَعَلَّكُمْ تُفْلِحُونَ"</a></strong></label><br>
					<label class="latin">y<u>aa</u> ayyuh<u>aa</u> <strong>al</strong>la<u>dz</u>iina <u>aa</u>manuu i<u>sh</u>biruu wa<u>shaa</u>biruu war<u>aa</u>bi<u>th</u>uu wa<strong>i</strong>ttaquu <strong>al</strong>l<u>aa</u>ha la'allakum tufli<u>h</u>uun<strong>a</strong></label><br>
					<label id="arti">"Hai orang-orang yang beriman, bersabarlah kamu dan kuatkanlah kesabaranmu dan tetaplah bersiap siaga (di perbatasan negerimu) dan bertakwalah kepada Allah, supaya kamu beruntung."</label><br>
					<audio src="http://ia802609.us.archive.org/13/items/quraninindonesia/001AlFaatihah.mp3" hidden="false" type="audio/mpeg"></audio>
					<label id="info"><a href="surah.php?surahke=3">QS Ali Imran (3:200)</a></label>
				</div>

				<hr>
					<h5>&copy; Hak cipta hanya milik Allah<br><small><small>PAEMM Samawa</small></small></h5>
					<a href="#">
					<button id="btn">
						 Kembali ke atas
					</button>
					</a>
				<hr>

			</footer>
		</div>
	</div>

<script src="main.js"></script>
<script src="js/zenscroll-min.js"></script>

</body>
</html>
