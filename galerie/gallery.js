const URL = 'https://docs.google.com/spreadsheets/d/1l6PfRKvyKB042l8pC-WhLzxSRt4YrqNbtwGudRe4Jjo/gviz/tq?tqx=out:json'
let photoNames = []
let captionsJSON = {}
let imgBlocks = []
const images = document.getElementsByClassName('images')[0]

async function getNames() {
    return fetch('./gallery-photos')
        .then(response => response.text())
        .then(html => {
            var photoNames = [];
            var regex = /<a href="([^"]+)">([^<]+)/g;
            var match;
            while ((match = regex.exec(html)) !== null) {
                if (match[2] !== '../') { // exclude parent directory link
                    photoNames.push("./gallery-photos/" + match[2]);
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

function createDOMArray(photoNames, captionsJSON) {
    // console.log(captionsJSON)
    // console.log(photoNames)
    for (let i = 1; i < captionsJSON.rows.length; i++) {
        var url = captionsJSON.rows[i].c[0].v
        if (photoNames.find(photo => photo == url)){
            var html = `
			<div class="img-block">
				<div class="sub-img-block">
					<img src="${url}" alt="${captionsJSON.rows[i].c[1].v} loading="lazy">
				</div>
				<div class="legende hidden">
					<p>${captionsJSON.rows[i].c[1].v}</p>
				</div>
			</div>
			\n
			`;
            imgBlocks.push(html)
        }
    }
    return imgBlocks
}

function insertBlocks(imgBlocks) {
    imgBlocks.forEach(html => {
        images.innerHTML += html
    });
}

function checkForCursor() {
	var timeoutId = null
	const img_elements = document.querySelectorAll(".img-block")
	img_elements.forEach(img_block => {
		img_block.addEventListener('mouseenter',function() {
			console.log("yes")
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

async function loadGallery() {
    const [photoNames, captionsJSON] = await Promise.all([getNames(), getCaptions()]);
    const imgBlocks = createDOMArray(photoNames, captionsJSON)
    insertBlocks(imgBlocks)
    checkForCursor()
}
