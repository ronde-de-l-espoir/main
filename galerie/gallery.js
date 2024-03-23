const URL = 'https://docs.google.com/spreadsheets/d/1l6PfRKvyKB042l8pC-WhLzxSRt4YrqNbtwGudRe4Jjo/gviz/tq?tqx=out:json' // url where the photo-name/caption relations are stored
let photoNames = []
let captionsJSON = {}
let imgBlocks = []
const images = document.getElementsByClassName('images')[0] // div where the images are inserted

async function getNames() {
    return fetch('./gallery-photos')
        .then(response => response.text())
        .then(html => {
            var photoNames = [];
            var regex = /<a href="([^"]+)">([^<]+)/g;
            var match;
            // this relies on the Apache file lister if no index file is present
            // the ./gallery-photos must only contain photos (no index or this will not work)
            // the regex matches all the URLs to the images
            while ((match = regex.exec(html)) !== null) {
                if (match[2] !== '../') { // this excludes the parent directory link
                    photoNames.push("./gallery-photos/" + match[2]); // saves the URL to the image in the array
                }
            }
            photoNames.splice(0, 5)
            return photoNames
            // we have now got an array with the URLs to all the images in the gallery-photos directory
        })
        .catch(error => {
            console.error('Error:', error);
        });
}

async function getCaptions() {
    return fetch(URL) // gets the Google Spreadsheet in JSON
    .then(response => response.text().then(textData => {
        const captionsJSON = JSON.parse(textData.substring(47).slice(0, -2)).table; // removes the line Google added mysteriously
        return captionsJSON
        // we have now got the URL/caption relation table in JSON
    })
    )
    .catch(error => {
        console.error('Error fetching and parsing JSON:', error);
    });
}

function createDOMArray(photoNames, captionsJSON) {
    // console.log(captionsJSON)
    // console.log(photoNames)
    for (let i = 1; i < captionsJSON.rows.length; i++) { // for each caption in the JSON...
        var url = captionsJSON.rows[i].c[0].v // ...it gets the URL of the corresponding photo...
        if (photoNames.find(photo => photo == url)){ // ...checks if that photo is in the ./gallery-photos directory using the photoNames array established earlier
            var html = `
			<div class="img-block">
				<div class="sub-img-block">
					<img src="${url}" alt="${captionsJSON.rows[i].c[1].v} loading="lazy"> <!-- the lazy loading is like async but for loading images : it only loads images viewable in the viewport -->
				</div>
				<div class="legende hidden"> <!-- by default, the caption is hidden -->
					<p>${captionsJSON.rows[i].c[1].v}</p> <!-- the caption -->
				</div>
			</div> <!-- the following /n is necessary : otherwise, the blocks are nested one in another... -->
			\n
			`;
            imgBlocks.push(html) // saves that HTML block to the array of blocks
        }
    }
    return imgBlocks
}

function insertBlocks(imgBlocks) {
    // for each image block, this inserts it, appends it to the images div
    imgBlocks.forEach(html => {
        images.innerHTML += html
    });
}

function checkForCursor() {
	var timeoutId = null
	const img_elements = document.querySelectorAll(".img-block")
	img_elements.forEach(img_block => {
		img_block.addEventListener('mouseenter',function() {
			timeoutId = window.setTimeout(function() {
				legende = img_block.querySelector(".legende")
				legende.classList.remove("hidden")
			}, 1000);
		});
		img_block.addEventListener('mouseleave',function() {
			window.clearTimeout(timeoutId)
			legende = img_block.querySelector(".legende")
			legende.classList.add("hidden")
		})
	} );
}

async function loadGallery() { // this is the first function in the call stack
    const [photoNames, captionsJSON] = await Promise.all([getNames(), getCaptions()]); // sync way to wait for photoNames and captionsJSON returned respectively by the getNames() and getCaptions() fucntions
    const imgBlocks = createDOMArray(photoNames, captionsJSON) // returns an array of HTML snippets corresponding to the images to insert
    insertBlocks(imgBlocks) // inserts the images in the page
    checkForCursor() // launches the event listener for showing the captions
}
