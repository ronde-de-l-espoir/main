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

function triggerSideMenu() {
    const trigger = document.getElementById('menu-trigger');
    const triggerStatus = trigger.getAttribute('data-isOpen');
    
    if (triggerStatus == 'false') {
        trigger.setAttribute('data-isOpen', 'true');
        trigger.style.animation = "menu-opening 200ms ease-in-out";
        trigger.style.backgroundColor = "transparent";

        // Code to modify the ::after pseudo element @trigger.
        var styleElem = document.head.appendChild(document.createElement("style"));
        styleElem.innerHTML = "#menu-trigger::before {transform: rotateZ(40deg); transition:300ms ease-in-out;} #menu-trigger::after {transform: rotateZ(-40deg); transition:300ms ease-in-out;}";
        
        const sideNav = document.getElementById("side-nav");
        sideNav.style.display = "flex";
        sideNav.style.transition = "400ms ease-out"
        trigger.style.position = "fixed";
        

    } else {
        trigger.setAttribute('data-isOpen', 'false');
        trigger.style.animation = "menu-closing 200ms ease-in-out";
        trigger.style.backgroundColor = "white";

        // Code to modify the ::after pseudo element @trigger.
        var styleElem = document.head.appendChild(document.createElement("style"));
        styleElem.innerHTML = "#menu-trigger::before {transform: rotateZ(0deg); transition:300ms ease-in-out;} #menu-trigger::after {transform: rotateZ(0deg); transition:300ms ease-in-out;}";
        
        const sideNav = document.getElementById("side-nav");
        sideNav.style.display = "none";
        trigger.style.position = "relative"
    };
};

console.log(document.querySelectorAll("#menu-trigger::after"));