// Thanks to Gopi3k (https://github.com/Gopi3k) for this JS script !
// It has been "modified", but the base is the same...

var images = [];
already_seen = [];
var captions = [];
var totalimages = 40;
times = 0
nonewimages = false
// var strDelimiter = ","

// var rawFile = new XMLHttpRequest();
// rawFile.open("GET", 'https://docs.google.com/spreadsheets/d/1l6PfRKvyKB042l8pC-WhLzxSRt4YrqNbtwGudRe4Jjo/export?exportFormat=csv&delimiter=|');
// rawFile.open("GET", './captions.csv', false);
// rawFile.onreadystatechange = function (){
// 	if(rawFile.readyState === 4)
// 	{
// 		if(rawFile.status === 200 || rawFile.status == 0)
// 		{
// 			globalThis.strData = rawFile.responseText;
// 			strDelimiter = (strDelimiter || ",");
// 			var objPattern = new RegExp(
// 				(
// 					"(\\" + strDelimiter + "|\\r?\\n|\\r|^)" +

// 					"(?:\"([^\"]*(?:\"\"[^\"]*)*)\"|" +

// 					"([^\"\\" + strDelimiter + "\\r\\n]*))"
// 				),
// 				"gi"
// 			);
// 			globalThis.arrData = [[]];
// 			var arrMatches = null;
// 			while (arrMatches = objPattern.exec(strData)) {
// 				var strMatchedDelimiter = arrMatches[1];
// 				if (
// 					strMatchedDelimiter.length &&
// 					strMatchedDelimiter !== strDelimiter
// 				) {
// 					arrData.push([]);
// 				}
// 				var strMatchedValue;
// 				if (arrMatches[2]) {
// 					strMatchedValue = arrMatches[2].replace(
// 						new RegExp("\"\"", "g"),
// 						"\""
// 					);
// 				} else {
// 					strMatchedValue = arrMatches[3];
// 				}
// 				arrData[arrData.length - 1].push(strMatchedValue);
// 			}
// 			return (arrData);
// 		}
// 	}
// }
// rawFile.send(null);

async function getSheet (){
	const captionsURL = 'https://docs.google.com/spreadsheets/d/1l6PfRKvyKB042l8pC-WhLzxSRt4YrqNbtwGudRe4Jjo/gviz/tq?tqx=out:json'
	const fullResponse = await fetch(captionsURL)
	const textResponse = await fullResponse.text()
	let json_string = textResponse.substring(47).slice(0, -2);
	let parsed = await JSON.parse(json_string);
	return parsed;
}

// donc là ce qui au dessus ça marche bien
//ce qui est en dessous aussi

// je te laisse aller voir le shared server et faire dans la console `captions`

async function sheetToArray(params) {
	// var captions = [];
	parsed = await getSheet();
	parsed.table.rows.forEach((row) => {
		let caption = []
		caption.push(row.c[0].v)
		caption.push(row.c[1].v)
		captions.push(caption)
	})
}

for (let img_n = 0; img_n < totalimages; img_n++) {
	var path = `./gallery-photos/photo (${img_n}).jpg`;
	images.push(path); // save all photos paths in the images list
}

function checkForCursor() {
	var timeoutId = null
	const img_elements = document.querySelectorAll(".img-block")
	img_elements.forEach(img_block => {
		img_block.addEventListener('mouseenter',function() {
			console.log("yes")
			timeoutId = window.setTimeout(function() {
				legende = img_block.querySelector(".legende")
				legende.classList.remove("hidden")
			}, 1000);
		});
		img_block.addEventListener('mouseleave',function() {
			window.clearTimeout(timeoutId)
			legende = img_block.querySelector(".legende")
			legende.classList.add("hidden")
		})
	} );
}

class photoGallery {
	divimages = document.querySelector(".images");

	async add_imgs_to_DOM(img_data) {
		// Adds new images to DOM
		let divs = "";
		// if (captions.length == 0){
		// 	await sheetToArray();
		// }
		captions = []
		await sheetToArray();
		img_data.forEach((img) => {
			globalThis.searchValue = String.raw`${img}`
			const caption = captions.find(c => c[0] == searchValue)[1]
			var html = `
			<div class="img-block">
				<div class="sub-img-block">
					<img src="${img}" alt="${caption}">
				</div>
				<div class="legende hidden">
					<p>${caption}</p>
				</div>
			</div>
			\n
			`;
			divs += html
		});
		this.divimages.innerHTML += divs;
	}

	async get_images(img_cnt) {
		var imgData = [];
		for(let i = img_cnt; i > 0; i--) {
			infiniteTest :
			while(true) {
				while(times < totalimages) {
					var random_image = images[Math.floor(Math.random()*images.length)] // selects random image from the images list
					if (!(already_seen.includes(random_image))){
						break infiniteTest; // only allows the photo to be used once
					}
					times++;
				}
				globalThis.nonewimages = true;
				return nonewimages;
			}
			imgData.push(random_image)
			already_seen.push(random_image)
		}
		this.add_imgs_to_DOM(imgData);
		return nonewimages;
	}
}
			

//Loading handlers
const loader = document.querySelector(".loader");
const loadingDots = document.querySelector(".loading-dots");

//Fetch images on pageLoad
const init_gallery = new photoGallery();
window.onload = () => {
	init_gallery
		.get_images(10)
		// .catch((err) => {
		// 	alert("OOPS! Try Again Later");
		// 	console.log(err);
		// });
	checkForCursor()
};

//show Loading dots and fetch images on scroll
window.addEventListener("scroll", () => {
	if (nonewimages == false){
		const { scrollTop, scrollHeight, clientHeight } = document.documentElement; // checks if new photos should be displayed
		if (clientHeight + scrollTop >= scrollHeight - 10 ) { 
			loadingDots.classList.remove("hide");
			init_gallery
				.get_images(15)
				// .catch((err) => alert("OOPS! Please Try Again Later"));
			checkForCursor()
			
		}
	} else {
		loadingDots.classList.add("hide");
	}
});