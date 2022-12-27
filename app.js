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

    } else {
        trigger.setAttribute('data-isOpen', 'false');
        trigger.style.animation = "menu-closing 200ms ease-in-out";
        trigger.style.backgroundColor = "white";
    }
};