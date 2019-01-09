
var audio=document.getElementById("Audio");
//var btnaudio = document.getElementById("btnsurah");
//	btnaudio.addEventListener("click",function()
//	{
	var ourRequest = new XMLHttpRequest();
		ourRequest.open('GET','https://al-quran-8d642.firebaseio.com/data.json');
		ourRequest.onload=function() {
			var ourData = JSON.parse(ourRequest.responseText);
				//console.log(ourData[0]);
			renderHTML(ourData);
			};
		
		ourRequest.send();	
//			});
		function renderHTML(suara) {
			var audiostring = "";
				audiostring +="<audio controls><source src='"+suara[ke].audio+"' type='audio/mpeg'></source></audio>";
			audio.insertAdjacentHTML('beforeend',audiostring);
			var br = "<br>";
			audio.insertAdjacentHTML('beforeend',br);
			}