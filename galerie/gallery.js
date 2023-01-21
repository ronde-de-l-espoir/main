// Thanks to Gopi3k (https://github.com/Gopi3k) for this JS script !
// It has been modified, but the base is the same...

var images = [];
for (let img_n = 0; img_n < 11; img_n++) {
	var path = `../../gallery-photos/image (${img_n}).jpg`
	images.push(path)
}

class photoGallery {
	divimages = document.querySelector(".images");

	add_imgs_to_DOM(img_data) {
		// Adds new images to DOM
		let divs = "";

		img_data.forEach(
			(img) => (divs += `<img src="${img}" alt="">`)
		);
		this.divimages.innerHTML += divs;
	}

	async get_images(img_cnt) {
		// API call from Unsplash
		// const response = await fetch(
		// 	`https://api.unsplash.com/photos/random?client_id=ffPJdmU2s-KeYWsCgOIxmAPW35eXJxWGKUzLodKlY3w&count=${img_cnt}`
		// );

		// const imgData = await response.json();
		// this.add_imgs_to_DOM(imgData);
		this.add_imgs_to_DOM(images[Math.floor(Math.random()*images.length)])
	}
}

//Loading handlers
const loader = document.querySelector(".loader");
const loadingDots = document.querySelector(".loading-dots");

//Fetch images on pageLoad
const init_gallery = new photoGallery();
window.onload = () => {
	init_gallery
		.get_images(10)
		.then(() => {
			loader.classList.add("hidden");
		})
		.catch((err) => {
			alert("OOPS! Try Again Later");
			console.log(err);
		});
};

//show Loading dots and fetch images on scroll
window.addEventListener("scroll", () => {
	const { scrollTop, scrollHeight, clientHeight } = document.documentElement;
	if (clientHeight + scrollTop >= scrollHeight) {
		loadingDots.classList.remove("hide");
		init_gallery
			.get_images(10)
			.then()
			.catch((err) => alert("OOPS! Please Try Again Later"));
	}
});