let fullQuraanClassElement = document.getElementsByClassName("full-quraan");
//loop to add all surahs

fetch("https://api.quran.com/api/v4/chapters").then(function (surahData){
	surahData=surahData.json();
	console.log(surahData);
	return surahData;
}).then(function(_surahData){
	for (let i=0;i<114;i++){

		let surahElement = document.createElement("p");
		let idElement = document.createElement("p");
		let idTextElement = document.createTextNode(_surahData.chapters[i].id);
		let surahTextElement = document.createTextNode(_surahData.chapters[i].name_arabic);
		surahElement.appendChild(surahTextElement);
		idElement.appendChild(idTextElement);
		fullQuraanClassElement[0].appendChild(idElement);
		fullQuraanClassElement[0].appendChild(surahElement);
		idElement.setAttribute("class","id-Name");
		surahElement.setAttribute("class","surah-name");
	}
	return _surahData;
	
}).then(function(surah_data)
{
	let surahElement= document.getElementsByClassName("surah-name");
	for (let i=0;i<114;i++)
	{
		surahElement[i].addEventListener  ("click",function ()
		{	
			let surahPage= window.open(`#${this.innerHTML}`,"_self");
			fetch(`https://api.alquran.cloud/v1/surah/${i+1}`).then(function (result)
			{
				result=result.json();
				// console.log(typeof result.verses);
				// for (let j=0;j<result.verses.length;){
				// 	let surahPageElementText= document.createTextNode(" ");
					return result;
				//}

			 }).then(function(resultData){
			 	console.log(resultData.data.ayahs);
				let surahContent= " "
			 	for (let j=0;j<resultData.data.ayahs.length;j++){
					surahContent= surahContent+" * "+resultData.data.ayahs[j].text;
				}
				let surahTextElement=document.createTextNode(surahContent);
				let surahPageElementP= document.createElement("p");
				let surahPageElementDIV= document.createElement("div");
				let closeSurahPageDiv= document.createElement("div");
				let closeSurahPageI=document.createElement("i");
				surahPageElementDIV.appendChild(closeSurahPageDiv);
				closeSurahPageDiv.appendChild(closeSurahPageI);
				surahPageElementP.appendChild(surahTextElement);
				surahPageElementDIV.appendChild(surahPageElementP);
				document.body.appendChild(surahPageElementDIV);
				surahPageElementDIV.setAttribute("class",`surah-content`);
				surahPageElementDIV.setAttribute("style",`	position: absolute;
				top: 40vh;
				background: bisque;
				padding: 0 20;
				width: 80vw;
				right: 10vw;
				line-height: 40px;
				font-size: 1.5vw;
				box-shadow: rgb(0 0 0 / 20%) 3px 3px, rgb(0 0 0 / 20%) -3px -3px;

				`);
				surahPageElementP.setAttribute("style","margin-top:30px;")
				closeSurahPageI.setAttribute("class","fa fa-window-close")
				closeSurahPageI.setAttribute("style",`position: absolute;
				left: 10px;
				top: 10px;
				cursor:pointer;
				`)
				return surahPageElementDIV;

			})
			


		})
		

		
	}
	let surahPageElement=document.getElementsByClassName("surah-content");
	return surahPageElement;

}).then(function (surahPage)
{	document.addEventListener("click",function()
	{
		if (surahPage.length>0)
		{
			let surahPageP= document.querySelector(".surah-content p");
			if (event.target!=surahPage[0] && event.target!=surahPageP)
				{
					document.body.removeChild(surahPage[0]);
				}
			
		}

	})
	let closeContentElement=document.querySelector(".fa-window-close");
	closeContentElement.addEventListener("click",function()
	{
		document.body.removeChild(surahPage[0]);
	})


	

})


