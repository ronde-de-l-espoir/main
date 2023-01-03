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


const trigger = document.getElementById('menu-trigger');
const triggerStatus = trigger.getAttribute('data-isOpen');

function openSideNav() {
    trigger.setAttribute('data-isOpen', 'true');
    trigger.style.animation = "menu-opening 200ms ease-in-out";
    trigger.style.backgroundColor = "transparent";

    // Code to modify the ::after pseudo element @trigger.
    var styleElem = document.head.appendChild(document.createElement("style"));
    styleElem.innerHTML = "#menu-trigger::before {transform: rotateZ(40deg); transition:400ms ease-in-out;} #menu-trigger::after {transform: rotateZ(-40deg); transition:400ms ease-in-out;}";
    
    const sideNav = document.getElementById("side-nav");
    sideNav.style.display = "flex";
    sideNav.style.animation = "side-nav-appearance 600ms ease-out";
    sideNav.style.animationFillMode = "forwards";
    trigger.style.position = "fixed";
};

function closeSideNav() {
    trigger.setAttribute('data-isOpen', 'false');
    trigger.style.animation = "menu-closing 200ms ease-in-out";
    trigger.style.backgroundColor = "white";

    // Code to modify the ::after pseudo element @trigger.
    var styleElem = document.head.appendChild(document.createElement("style"));
    styleElem.innerHTML = "#menu-trigger::before {transform: rotateZ(0deg); transition:400ms ease-in-out;} #menu-trigger::after {transform: rotateZ(0deg); transition:400ms ease-in-out;}";
    
    const sideNav = document.getElementById("side-nav");
    sideNav.style.animation = "side-nav-disappear 600ms ease-in";
    sideNav.style.animationFillMode = "forwards";
    trigger.style.position = "relative";
    setTimeout( () => { 
        sideNav.style.display = "none" ;
    }, 600);
};

function triggerSideMenu() {
    const trigger = document.getElementById('menu-trigger');
    const triggerStatus = trigger.getAttribute('data-isOpen');
    if (triggerStatus == 'false') {
        openSideNav();
    } else {
        closeSideNav();
    };
};


document.addEventListener('swiped-left', function(e){
    trigger.setAttribute('data-isOpen', 'false');
    trigger.style.animation = "menu-closing 200ms ease-in-out";
    trigger.style.backgroundColor = "white";
    var styleElem = document.head.appendChild(document.createElement("style"));
    styleElem.innerHTML = "#menu-trigger::before {transform: rotateZ(0deg); transition:400ms ease-in-out;} #menu-trigger::after {transform: rotateZ(0deg); transition:400ms ease-in-out;}";
    
    const sideNav = document.getElementById("side-nav");
    sideNav.style.animation = "side-nav-disappear 600ms ease-in";
    sideNav.style.animationFillMode = "forwards";
    trigger.style.position = "relative";
    setTimeout( () => { 
        sideNav.style.display = "none" ;
    }, 600);
});

document.addEventListener('swiped-right', function(e){
    trigger.setAttribute('data-isOpen', 'true');
    trigger.style.animation = "menu-opening 200ms ease-in-out";
    trigger.style.backgroundColor = "transparent";

    // Code to modify the ::after pseudo element @trigger.
    var styleElem = document.head.appendChild(document.createElement("style"));
    styleElem.innerHTML = "#menu-trigger::before {transform: rotateZ(40deg); transition:400ms ease-in-out;} #menu-trigger::after {transform: rotateZ(-40deg); transition:400ms ease-in-out;}";
    
    const sideNav = document.getElementById("side-nav");
    sideNav.style.display = "flex";
    sideNav.style.animation = "side-nav-appearance 600ms ease-out";
    sideNav.style.animationFillMode = "forwards";
    trigger.style.position = "fixed";
});
