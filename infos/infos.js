console.log("Greetings your honor");

const articles = document.querySelectorAll('.article');

articles.forEach(article => {
    article.addEventListener('click', () => {

        const articleID = '#' + article.getAttribute('id');
        const query = articleID + ' p';
        const cardText = document.querySelector(query);

        const index = articleID[articleID.length - 1];

        const articleText = document.querySelectorAll('#version' + index)[0];
        const articleWrapper = document.querySelectorAll('.entire-article')[0];

        if (articleText.getAttribute('data-isOpen') == "false") {
            articleWrapper.style.display = "block";
            articleText.setAttribute('data-isOpen', true);
            articleText.style.display = "inline";
            setTimeout(() => {
                articleWrapper.style.maxHeight = "1000px"
                articleWrapper.style.paddingBlock = "calc(var(--padding) / 1.735)";
            }, 1);
        } else {
            articleText.setAttribute('data-isOpen', false);
            articleWrapper.style.maxHeight = "0";
            articleWrapper.style.paddingBlock = "0";
            setTimeout(() => {
                articleWrapper.style.display = "none";
            }, 700);
        }

        const textArticles = document.querySelectorAll('.entire-article p');
        textArticles.forEach(text => {
            if (text.getAttribute('id') != ('version' + index)) {
                text.setAttribute('data-isOpen', false);
                text.style.display = "none";
            }
        })
    })
});