const warmWelcome = "Hello world! How u doin'?";
console.log(warmWelcome);

// Creates a sleep function usable in async functions
function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

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
    const everything = document.getElementsByTagName("*");
    for (let i = 0; i < everything.length; i++) {
        if (!(everything[i].hasAttribute('data-hidden'))) {
            everything[i].classList.add('hidden');
        }
    }
    // ⬆⬆ This is for compatibility with Firefox : it hides all the elements except the ones with the data-hidden attribute (all the sidenav elements)

    // console.log(everything);
    const body = document.querySelector("body");
    body.style.overflow = "hidden";
    trigger.setAttribute('data-isOpen', 'true');
    trigger.style.animation = "menu-opening 200ms ease-in-out";
    trigger.style.backgroundColor = "transparent";

    // Code to modify the ::after pseudo element @trigger.
    var styleElem = document.head.appendChild(document.createElement("style"));
    styleElem.innerHTML = "#menu-trigger::before {transform: rotateZ(40deg); transition:300ms ease-in-out;} #menu-trigger::after {transform: rotateZ(-40deg); transition:300ms ease-in-out;}";
    
    const sideNav = document.getElementById("side-nav");
    sideNav.style.display = "flex";
    sideNav.style.animation = "side-nav-appearance 400ms ease-out";
    sideNav.style.animationFillMode = "forwards";
    trigger.style.position = "fixed";
};

function closeSideNav() {
    const everything = document.getElementsByTagName("*");
    for (let i = 0; i < everything.length; i++) {
        if (!(everything[i].hasAttribute('data-hidden'))) {
            everything[i].classList.remove('hidden');
        }
    }
    // inverted process : shows everything

    const body = document.querySelector("body");
    body.style.overflow = "auto";
    trigger.setAttribute('data-isOpen', 'false');
    trigger.style.animation = "menu-closing 400ms ease-in-out";
    trigger.style.backgroundColor = "white";

    // Code to modify the ::after pseudo element @trigger.
    var styleElem = document.head.appendChild(document.createElement("style"));
    styleElem.innerHTML = "#menu-trigger::before {transform: rotateZ(0deg); transition:300ms ease-in-out;} #menu-trigger::after {transform: rotateZ(0deg); transition:300ms ease-in-out;}";
    
    const sideNav = document.getElementById("side-nav");
    sideNav.style.animation = "side-nav-disappear 400ms ease-in";
    sideNav.style.animationFillMode = "forwards";
    trigger.style.position = "relative";
    setTimeout( () => { 
        sideNav.style.display = "none" ;
    }, 600); // hides the sidenav completely after 600ms
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


document.addEventListener('swiped-left', function(e){ // event returned by the swiped-events.min.js lib
    closeSideNav();
});

document.addEventListener('swiped-right', function(e){ // event returned by the swiped-events.min.js lib
    openSideNav();
});
