		var udahdiklik=true;
		var surah=document.getElementById("Surah");
		//var btnsurah = document.getElementById("btnsurah");
			//btnsurah.addEventListener("click",function()
			//{
			var ourRequest = new XMLHttpRequest();
				ourRequest.open('GET','https://al-quran-8d642.firebaseio.com/surat/'+surahke+'.json');
				ourRequest.onload=function() {
					var ourData = JSON.parse(ourRequest.responseText);
					//console.log(ourData[0]);
					renderHTML(ourData);
					};
				ourRequest.send();
				if (udahdiklik=true) {
					btnsurah.classList.add("hide");
				}
				
			//});
		function renderHTML(data) {
			var htmlstring = "";
			for (ke=0;ke<data.length;ke++) {
				htmlstring +="<p> "
							+data[ke].nomor+". &nbsp;&nbsp;&nbsp;&nbsp;"
							+"<strong><font color=green size='8rem'>"+data[ke].ar+"</font></strong><br>"
							+"<i>"+data[ke].tr+".</i> <br>"
							+"<small><font color=#333>"+data[ke].id+"</font></small><br>"
							+"<hr>"
							//+" Keterangan : "+data[i].Keterangan+"<br>"
							+"</p>";
			}
			surah.insertAdjacentHTML('beforeend',htmlstring);
			var br = "<br>";
			surah.insertAdjacentHTML('beforeend',br);
		}

