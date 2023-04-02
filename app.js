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
    closeSideNav();
});

document.addEventListener('swiped-right', function(e){
    openSideNav();
});


// status are on the third position of the following array. They are as follow :
//      - none : Not on the page
//      - left : Hidden on the left
//      - right : Hidden on the right
//      - Visible : self-explanatory

const pictures = [
    ['picture1', 1, "none"],
    ['picture2', 2, "none"],
    ['picture3', 3, "none"],
    ['picture4', 4, "none"],
    ['picture5', 5, "none"]
];

function carouselInit(pictures) {
    const rightPicture = document.getElementById('hidden-picture-right');
    const centerPicture = document.getElementById('picture-displayed');
    const leftPicture = document.getElementById('hidden-picture-left');

    // initialize image url
    rightPicture.setAttribute('src', `./img/carousel/${pictures[0][0]}.jpeg`);
    centerPicture.setAttribute('src', `./img/carousel/${pictures[1][0]}.jpeg`);
    leftPicture.setAttribute('src', `./img/carousel/${pictures[2][0]}.jpeg`);

    // initialize status of changed pictures
    pictures[2][2] = 'left';
    pictures[3][2] = 'visible';
    pictures[4][2] = 'right';

    console.log(pictures)
}

async function carouselSwipeRight(pictures) {
    const rightPicture = document.getElementById('hidden-picture-right');
    const centerPicture = document.getElementById('picture-displayed');
    const leftPicture = document.getElementById('hidden-picture-left');

    // slide leftPicture over centerPicture
    leftPicture.style.transform = "translateX(101%)";

    await sleep(700);
    for (let i = 0; i < pictures.length; i++) {

        if (pictures[i][2] == 'visible') {}

        // this for loop is pointless since j will always be 2 when the if condition is met :
        //      - For loop to refactor later
        // for (let j = 0; j < pictures[i].length; j++) {

        //     if (pictures[i][j] == 'left') {
        //         pictures[i][j] = 'visible';
        //         if (i-1 >= 0) {
        //             pictures[i-1][j] = 'left';
        //         } else {
        //             console.log(pictures.length-1)
        //             pictures[pictures.length-1][j] = 'left';
        //         }

        //         // Update picture at center with status
        //         centerPicture.setAttribute('src', `./img/carousel/${pictures[i][0]}.jpeg`)
        //         leftPicture.style.display = "none";

        //     } else if (pictures[i][j] == 'visible') {
        //         pictures[i][j] = 'right';

        //     } else if (pictures[i][j] == 'right') {
        //         pictures[i][j] = 'none';
        //     }

        // } 
    }


    console.log(pictures)
}

carouselInit(pictures);