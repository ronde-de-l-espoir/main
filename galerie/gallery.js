// Thanks to Gopi3k (https://github.com/Gopi3k) for this JS script !
// It has been "modified", but the base is the same...

var images = [];
already_seen = [];
for (let img_n = 0; img_n < 344; img_n++) {
	var path = `./gallery-photos/photo (${img_n}).jpg`;
	images.push(path); // save all photos paths in the images list
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

	get_images(img_cnt) {
		var imgData = [];
		for(let i = img_cnt; i > 0; i--) {
			while(true) {
				var random_image = images[Math.floor(Math.random()*images.length)] // selects random image from the images list
				if (!(already_seen.includes(random_image))){
					break; // only allows the photo to be used once
				}
			}
			imgData.push(random_image)
		}
		this.add_imgs_to_DOM(imgData);
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
		.catch((err) => {
			alert("OOPS! Try Again Later");
			console.log(err);
		});
};

//show Loading dots and fetch images on scroll
window.addEventListener("scroll", () => {
	const { scrollTop, scrollHeight, clientHeight } = document.documentElement; // checks if new photos should be displayed
	if (clientHeight + scrollTop >= scrollHeight - 10 ) { 
		loadingDots.classList.remove("hide");
		init_gallery
			.get_images(10)
			// .catch((err) => alert("OOPS! Please Try Again Later"));
	}
});