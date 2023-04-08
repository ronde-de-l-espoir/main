const URL = 'https://docs.google.com/spreadsheets/d/1l6PfRKvyKB042l8pC-WhLzxSRt4YrqNbtwGudRe4Jjo/gviz/tq?tqx=out:json'
let photoNames = []
let captionsJSON = {}

async function getNames() {
    return fetch('./gallery-photos')
        .then(response => response.text())
        .then(html => {
            var photoNames = [];
            var regex = /<a href="([^"]+)">([^<]+)/g;
            var match;
            while ((match = regex.exec(html)) !== null) {
                if (match[2] !== '../') { // exclude parent directory link
                    photoNames.push(match[2]);
                }
            }
            photoNames.splice(0, 5)
            return photoNames
        })
        .catch(error => {
            console.error('Error:', error);
        });
}

async function getCaptions() {
    return fetch(URL)
    .then(response => response.text().then(textData => {
        const captionsJSON = JSON.parse(textData.substring(47).slice(0, -2)).table;
        return captionsJSON
    })
    )
    .catch(error => {
        console.error('Error fetching and parsing JSON:', error);
    });
}

class photoGallery {
	divimages = document.querySelector(".images");

	async add_imgs_to_DOM(img_data) {
		// Adds new images to DOM
		let divs = "";
		// if (captions.length == 0){
		// 	await sheetToArray();
		// }
		captions = []
		await sheetToArray();
		img_data.forEach((img) => {
			globalThis.searchValue = String.raw`${img}`
			const caption = captions.find(c => c[0] == searchValue)[1]
			var html = `
			<div class="img-block">
				<div class="sub-img-block">
					<img src="${img}" alt="${caption}">
				</div>
				<div class="legende hidden">
					<p>${caption}</p>
				</div>
			</div>
			\n
			`;
			divs += html
		});
		this.divimages.innerHTML += divs;
	}

async function loadGallery() {
    const [photoNames, captionsJSON] = await Promise.all([getNames(), getCaptions()]);
    createDOMArray(photoNames, captionsJSON)
}
