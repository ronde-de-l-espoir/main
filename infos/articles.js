var articlesJSON = []

// var xhr = new XMLHttpRequest();
// xhr.open("GET", '../articles.json', false);
// xhr.onreadystatechange = function () {
// 	if (xhr.readyState === 4) {
// 		if (xhr.status === 200 || xhr.status == 0) {
// 			var articlesJSONText = xhr.response;
// 			articlesJSON = JSON.parse(articlesJSONText)
// 		}
// 	}
// }
// xhr.send(null)

const URL = 'https://docs.google.com/spreadsheets/d/14wG0Ywy1BxvxptXbvi7smP4fv6kOcQyyt5Yh0TL3OXE/gviz/tq?tqx=out:json'

fetch(URL)
	.then(response => function(){
		const responseText = response.text();
		return responseText
	}).then(function(responseText){
		console.log(responseText)
		let json_string = responseText.substring(47).slice(0, -2);
		return json_string
	}).then(function(){
		let parsed = JSON.parse(json_string)
		return parsed
	}).catch(err => console.error(err));

	

// async function getSheet (){
// 	const captionsURL = 'https://docs.google.com/spreadsheets/d/1l6PfRKvyKB042l8pC-WhLzxSRt4YrqNbtwGudRe4Jjo/gviz/tq?tqx=out:json'
// 	const fullResponse = await fetch(captionsURL)
// 	const textResponse = await fullResponse.text()
// 	let json_string = textResponse.substring(47).slice(0, -2);
// 	let parsed = await JSON.parse(json_string);
// 	return parsed;
// }

// async function sheetToArray(params) {
// 	// var captions = [];
// 	parsed = await getSheet();
// 	parsed.table.rows.forEach((row) => {
// 		let caption = []
// 		caption.push(row.c[0].v)
// 		caption.push(row.c[1].v)
// 		captions.push(caption)
// 	})
// }


var currentPage = window.location.pathname.split('/').slice(-2, -1)[0]

for (var i = 0; i < articlesJSON.length; i++) {
	if (articlesJSON[i].URL == currentPage) {
		var pageTitle = articlesJSON[i].Title
		var pageContent = articlesJSON[i].Content
	}
}


document.title = pageTitle
document.getElementsByTagName('h2')[0].innerText = pageTitle
document.getElementById('article-text').innerHTML = pageContent


// FOR FITTING THE TEXT
// const isOverflown = ({ clientHeight, scrollHeight }) => scrollHeight > clientHeight

// const resizeText = ({ element, elements, minSize = 10, maxSize = 512, step = 1, unit = 'px' }) => {
// 	(elements || [element]).forEach(el => {
// 		let i = minSize
// 		let overflow = false

// 		const parent = el.parentNode

// 		while (!overflow && i < maxSize) {
// 			el.style.fontSize = `${i}${unit}`
// 			overflow = isOverflown(parent)

// 			if (!overflow) i += step
// 		}

// 		// revert to last state where no overflow happened
// 		el.style.fontSize = `${i - step}${unit}`
// 	})
// }

// resizeText({
// 	element: document.getElementsByTagName('h2')[0],
// 	step: 0.5
// })
