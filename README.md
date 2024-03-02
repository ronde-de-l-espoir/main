# Main

## Home

The main page features a central box with the current total amount collected.

For the spinning animation, we are using Hubspot's [odometer](https://github.com/HubSpot/odometer).

It works, but isn't very consistent : sometimes the animation will start, sometimes it won't.

Please consider finding an alternative

## Gallery

The default `index.php` in `./galerie` is quite empty : its body is simply an empty `images` div...

It's the JS that fills it in.

The photos can be names whatever you want and must be placed in the `./gallery-photos` directory.

The JS is entirely asynchronous, so the page loads, *and then*, the photos. These photos are accompanied by captions, invisible at first.

The relationship between photo-URL and caption is described in a Google Spreadsheet.
To recreate this spreadsheet and system, there are a few rules :
* one single sheet
* no headers line (the data starts on the first row)
* column A : the relative URLs of the photos (i.e. : `'./gallery-photos/<name>.<extension>`)
* column B : the photo's caption
* if don't have any caption, you MUST put a space (an empty caption will result in errors)

To form the spreadsheet URL in JS :
1. open the spreadsheet in your browser
1. make sure the spreadsheet is accessible to 'anyone with the link' using the 'Share' menu
1. get the URL : `https://docs.google.com/spreadsheets/d/<spreadsheet-ID>/edit`
1. note that `spreadsheet-ID`
1. replace `<spreadsheet-ID>` by your `spreadsheet-ID` in the following URL : `https://docs.google.com/spreadsheets/d/<spreadsheet-ID>/gviz/tq?tqx=out:json`
1. test the url by running `curl <your-URL>` in a terminal ; you should get a JSON response

This returns the following general structure :
```json
/*O_o*/
google.visualization.Query.setResponse({
    "version": "0.6",
    "reqId": "0",
    "status": "ok",
    "sig": "315753562",
    "table": {
        "cols": [
            {
                "id": "A",
                "label": "",
                "type": "string"
            },
            {
                "id": "B",
                "label": "",
                "type": "string"
            }
        ],
        "rows": [
            "bla"
        ],
        "parsedNumHeaders": 0
    }
});
```

The first 2 lines make the JSON invalid and unparsable.
We remove them using `JSON.parse(<result>.substring(47).slice(0, -2))`.

The structure of each row is the following :
```json
{
  "c": [
      {
          "v": "<photo-URL>"
      },
      {
          "v": "<photo-caption>"
      }
  ]
}
```

So, the caption for example of the caption of the 8th row is accessible using : `JSON.parse(<result>.substring(47).slice(0, -2)).table.rows[8].c[2].v`.

The `getNames()` function saves the URLs to all the images in the `./gallery-photos` directory.

Apache, if no `index.<extension>` is present in the directory, lists all the files in the directory.
The code gets all the `<a>` tags on page, and the `href` attributes that belong to them.

The list of the files actually starts 5 links after the beginning of the document :

!['Screenshot of the headers of the Apache file lister'](./non-source-code/media/ApacheListGallery.png)

That is why `splice(0, 5)` is used.

There is a verification to make sure which photos to show : say a photo a.jpg : it must be in both the `gallery-photos` and in column A of the spreadsheet.

This allows anybody, say M. Darnatigues, to type his captions and delete a photo if he wants to hide it from the website... but this doesn't remove it from the server, it just hides it from view !

An animation on caption appearance was tried but to no avail...

## Infos

The `./infos` page is also quite complex JavaScript-wise, and works in a similar fashion than `./galerie` : the articles' texts are served by a Google Spreadsheet.

The infos main page's (located at `./infos/index.php`) structure is based on a CSS3 Grid layout : on an idle screen, the first row has 3 articles and the second has 4 of them.

The grid `repeat(auto-fit, minmax(<n>px, 1fr))` allow for automatic responsiveness, but the 2 rows are separated so an second-row article cannot jump up to the first row if there's enough space for it.

The idea behind the order and theme of the articles is as follows :
* First row : presentations
  1. Ronde de l'Espoir
  1. First association supported
  1. Second association supported
* Second row : additional details
  1. Explanation of the world record to beat
  1. Presentation of the school
  1. Explanation of a big project (of one of the associations supported)
  1. Us, the team

This last article hasn't been done, and it differs slightly from all the others.
It would look something like this :
(photo coming)

If you open an article's subfolder, and open the `index.php` inside, you won't see many lines of code, but rather just a simple `include()`. This is because the articles page is dynamic : only one HTML file for all the pages, and the text on the page is different following the URL.

This is what `articles.js` does : using the same mechanism than the gallery, the articles titles, texts and sources are all stored in a Google Spreadsheet ; the structure must be the following :

| URL | Title | Text | Source | Extra columns if you want |
|--|--|--|--|--|
|The URL of the page | The title to be displayed as tab title and `<h1>` | The actual article (in HTML) | Name of the person who wrote the article | Extra details

The process to get this Spreadsheet's JSON-output URL is the same than for gallery. The JSON's structure is also identical.

A few caveats (that you should try to fix) :
* The article-teaser-cards on the `./infos/index.php` are not dynamic : please implement the same Javascript than `articles.php` to `index.php`
* The article's text in the Google Spreadsheet must be in HTML, so maybe instead of copy-pasting the whole article in a single cell, you could store a link to a Google Docs queried by the JS ?... That would be much more readable (for example, if a grammar mistake is corrected in one of the 2 places, there is a great chance that it will be overwritten by an edit in the other place)
* Each article is directory in `/infos` with the exact same PHP file inside ; you should to implement an Apache L&AQ redirect (see <a href='https://github.com/ronde-de-l-espoir/inscription/.htaccess'>inscription</a>) so that the URL will look the same than it is now to the client, but to the code it will be `/infos/?artID=cap-ou-cap` for example. But is that parameter even necessary ? As the PHP doesn't care about the article the client is viewing, and to the JS it will still look like `/infos/cap-ou-cap`...Please look into it.

Right, so that's `./infos` discussed !


## Big Display

This page was originally meant to show the total on the TV in the main hall at school : the amount is bigger, the navbar isn't there, and the donation button either.

It turns out the TV was just running a PowerPoint, so it wasn't in realtime : Mr. Pedreira had to do a screenshot every morning.

But it was used on *the* D-Day in the conference room.

I suggest you add some confetti animation at the end of the animation for 2026's D-Day !