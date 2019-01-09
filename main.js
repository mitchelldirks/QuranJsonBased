var udahdiklik=true;
var quran=document.getElementById("Quran");
var btnlist = document.getElementById("btnlist");
	btnlist.addEventListener("click",function()
	{
	var ourRequest = new XMLHttpRequest();
		ourRequest.open('GET','https://al-quran-8d642.firebaseio.com/data.json');
		ourRequest.onload=function() {
			var ourData = JSON.parse(ourRequest.responseText);
			//console.log(ourData[0]);
			renderHTML(ourData);
			};
		ourRequest.send();
		if (udahdiklik=true) {
			btnlist.classList.add("hide");
		}
		
	});
function renderHTML(data) {
	var link="";
	var htmlstring = "";
	var nama="";
	for(i=0;i<data.length;i++) {
		link=data[i].nomor;
		nama=data[i].nama;
		htmlstring +="<h2>"
					+data[i].nomor+". <a href='surah.php?surahke="+link+"' class='asma'>&nbsp;"
					//+data[i].nomor+". <a href='surah.php?surahke"+link+">"
					+data[i].nama+"  ("+data[i].asma+")  "+"</a> &nbsp;"
					+data[i].arti+"<br> &nbsp;&nbsp;&nbsp;&nbsp;"
					+"Turun di "+data[i].type+"<br> &nbsp;&nbsp;&nbsp;&nbsp;"
					+"Banyaknya ayat "+data[i].ayat+"<br> &nbsp;&nbsp;&nbsp;&nbsp;"
					+"<audio controls><source src='"+data[i].audio+"' type='audio/mpeg'></source></audio>";
					//+"Keterangan : "+data[i].keterangan
					+"<hr>"
					+"</h2>";
	}
	quran.insertAdjacentHTML('beforeend',htmlstring);
	var br = "<br>";
	quran.insertAdjacentHTML('beforeend',br);
}

