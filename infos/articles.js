var articlesJSON = []

var xhr = new XMLHttpRequest();
xhr.open("GET", '../articles.json', false);
xhr.onreadystatechange = function (){
	if(xhr.readyState === 4){
		if(xhr.status === 200 || xhr.status == 0)
		{
			var articlesJSONText = xhr.response;
			articlesJSON = JSON.parse(articlesJSONText)
        }
    }
}
xhr.send(null)

var currentPage = window.location.pathname.split('/').slice(-2, -1)[0]

for (var i=0 ; i < articlesJSON.length ; i++){
	if (articlesJSON[i].URL == currentPage){
		var pageTitle = articlesJSON[i].Title
		var pageContent = articlesJSON[i].Content
	}
}


document.title = pageTitle
document.getElementById('main').innerText = pageContent
