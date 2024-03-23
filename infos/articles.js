var articlesJSON = []

var currentPage = window.location.pathname.split('/').slice(-2, -1)[0] // this gets the current directory (the possibilities are below)
var recommenedArticlesID = ['quesako', 'dmf-34', 'kite-surf', 'record-du-monde-ergo-aviron', 'le-lycee', 'cap-ou-cap', 'equipe'] // alle the possible articles you may be at
recommenedArticlesID.splice(recommenedArticlesID.indexOf(currentPage), 1) // removes your current article from the possible articles

// i < 3 because we want to show 3 recommended articles
for (var i=0; i < 3; i++){
	var articleToBeShow = recommenedArticlesID[Math.floor(Math.random() * recommenedArticlesID.length)] // chooses a random article from the list
	recommenedArticlesID.splice(recommenedArticlesID.indexOf(articleToBeShow), 1) // removes the article from the possible articles
	document.getElementById(articleToBeShow).classList.remove('hidden-article') // shows the article
}


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
// old code



const URL = 'https://docs.google.com/spreadsheets/d/14wG0Ywy1BxvxptXbvi7smP4fv6kOcQyyt5Yh0TL3OXE/gviz/tq?tqx=out:json'
// Google Spreadsheet where the articles' texts are stored

fetch(URL) // gets the data in JSON with a promise (async)
	.then(response => response.text().then(textData => {
		const articlesJSON = JSON.parse(textData.substring(47).slice(0, -2)).table; // removes a wierd line added by Google
		return articlesJSON
	}).then(articlesJSON => {
		for (var i = 1; i < articlesJSON.rows.length; i++) {
			if (articlesJSON.rows[i].c[0].v == currentPage) { // looks up the current article
				var pageTitle = articlesJSON.rows[i].c[1].v
				var tabTitle = articlesJSON.rows[i].c[2].v
				var pageContent = articlesJSON.rows[i].c[3].v
				var source = articlesJSON.rows[i].c[4].v
				// these lines get the current article's data
			}
		}
		document.title = tabTitle
		document.getElementsByTagName('h2')[0].innerText = pageTitle
		document.getElementById('article-text').innerHTML = pageContent
		document.getElementById('source').innerText = source
		// these lines insert the data in the page
		return articlesJSON
	})
	)
	.catch(error => {
		console.error('Error fetching and parsing JSON:', error);
	});

// MORE DETAILS ABOUT THE JSON'S STRUCTURE AND INNER WORKINGS OF THIS IN THE DOCUMENTATION



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
