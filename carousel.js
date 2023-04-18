console.log("Hello world!");

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

// Input the name of the picture. Make sure every picture is in the same format
const pictureList = ['picture0', 'picture1', 'picture2', 'picture3', 'picture4'];

class Carousel {
    // initialize useful variables
    constructor(pictureList, url, format, delay) {
        this.pictureList = pictureList;
        this.pictureNumber = pictureList.length;
        this.url = url;
        this.format = format;
        this.sliding = false;
        this.delay = delay
    }

    // initialize carousel
    __INIT__() {
        const front = document.getElementById('front');
        const left = document.getElementById('left');
        const right = document.getElementById('right');
        
        left.setAttribute('src', this.url + this.pictureList[2] + this.format);
        front.setAttribute('src', this.url + this.pictureList[1] + this.format);
        right.setAttribute('src', this.url + this.pictureList[0] + this.format);

        this.autoScroll();
    }

    // sets up automatic scrolling
    autoScroll() {
        const autoSwipeInterval = setInterval(() => {
            if (this.sliding == true) {
                return;
            }
            this.swipeLeft();
        }, 3000);
    }

    // function that make pictures fade on the left
    async swipeLeft() {
        if (this.sliding == true) {
            return 0;
        }

        this.sliding = true;

        const formerImg = document.getElementById('left');
        const currentImg = document.getElementById('front');
        const newImg = document.getElementById('right');

        newImg.style.transform = 'translateX(-100%)';
        currentImg.style.transform = 'translateX(-100%)';
        
        await sleep(this.delay);
        
        // Replaces URL of current picture with new one
        // & replace newImg, currentImg, and formerImg with new URLS
        newImg.style.transition = '0ms'
        newImg.style.transform = 'translateX(0)';
        currentImg.style.transition = '0ms'
        currentImg.style.transform = 'translateX(0)';
        formerImg.setAttribute('src', currentImg.getAttribute('src'));
        currentImg.setAttribute('src', newImg.getAttribute('src'));

        for (let i = 0; i < this.pictureNumber; i++) {
            if (this.url + this.pictureList[i] + this.format == newImg.getAttribute('src')) {
                if (this.pictureList[i-1] == undefined) {
                    newImg.setAttribute('src', this.url + this.pictureList[this.pictureNumber-1] + this.format)
                } else {
                    newImg.setAttribute('src', this.url + this.pictureList[i-1] + this.format)
                }
                break;
            }
        }

        await sleep(1);
        newImg.style.transition = `${this.delay}ms ease-out`;
        currentImg.style.transition = `${this.delay}ms ease-out`;

        this.sliding = false;
    }

    // function that make pictures fade on the right
    async swipeRight() {
        if (this.sliding == true) {
            return 0;
        }

        this.sliding = true;

        const newImg = document.getElementById('left');
        const currentImg = document.getElementById('front');
        const formerImg = document.getElementById('right');

        newImg.style.transform = 'translateX(100%)';
        currentImg.style.transform = 'translateX(100%)';

        await sleep(this.delay);

        // Replaces URL of current picture with new one
        // & replace newImg, currentImg, and formerImg with new URLS
        newImg.style.transition = '0ms'
        newImg.style.transform = 'translateX(0)';
        currentImg.style.transition = '0ms'
        currentImg.style.transform = 'translateX(0)';
        formerImg.setAttribute('src', currentImg.getAttribute('src'));
        currentImg.setAttribute('src', newImg.getAttribute('src'));

        for (let i = 0; i < this.pictureNumber; i++) {

            console.log(this.url + this.pictureList[i] + this.format)
            console.log(newImg.getAttribute('src'))

            if (this.url + this.pictureList[i] + this.format == newImg.getAttribute('src')) {
                if (this.pictureList[i+1] == undefined) {
                    newImg.setAttribute('src', this.url + this.pictureList[0] + this.format)
                    console.log('Undefined - New Url :', newImg.getAttribute('src'))
                } else {
                    newImg.setAttribute('src', this.url + this.pictureList[i+1] + this.format)
                    console.log('New Url :', newImg.getAttribute('src'))
                }
                break;
            }
        }

        await sleep(1);
        newImg.style.transition = `${this.delay}ms ease-out`;
        currentImg.style.transition = `${this.delay}ms ease-out`;

        this.sliding = false;
    }
}

const carousel = new Carousel(pictureList, './img/carousel/', '.jpeg', 1200);
carousel.__INIT__();