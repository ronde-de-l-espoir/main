const warmWelcome = "Hello world! How u doin'?";
console.log(warmWelcome);

// To have visual hint as to which page is currently being viewed
const links = document.querySelectorAll('a');
links.forEach(link => {
    // console.log(link);
    const status = link.getAttribute('data-isFocus');
    if (status == 'true') {
        link.style.fontWeight = '600';
    };
});

console.log('Trying to work here...');