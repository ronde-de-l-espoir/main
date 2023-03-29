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
// xhr.responseType = 'json'
xhr.send(null)

console.log(articlesJSON)
