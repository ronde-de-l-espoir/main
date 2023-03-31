var articlesJSON = []

var xhr = new XMLHttpRequest();
xhr.open("GET", '../articles.json', false);
xhr.onreadystatechange = function () {
	if (xhr.readyState === 4) {
		if (xhr.status === 200 || xhr.status == 0) {
			var articlesJSONText = xhr.response;
			articlesJSON = JSON.parse(articlesJSONText)
		}
	}
}
xhr.send(null)

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
