/**************************************************************************************************************************** */
// COPY AND PASTE IN THE PAGE ON CONSOLE OF THE ANIME/MOVIE WITH THE LIST OF THE EPISODE
/**************************************************************************************************************************** */




// Dummy data
var elemDiv = document.createElement('div');
elemDiv.style.cssText = 'opacity:0.3;z-index:100;background:#000;';
elemDiv.setAttribute("id", "dummyScrapper");
document.body.appendChild(elemDiv);



var title = document.getElementsByTagName('h1')[0];
var la = document.querySelectorAll('.div_video_list a');

var episodesList = [];
for (let index = 0; index < la.length; index++) {

	setTimeout(() => {
		const obj = la[index]

		if(!obj || !obj.href) return


		const request = fetch(obj.href)
			.then((response) => {
				return response.text();
			}).then(function (elem) {


if(elem.indexOf("<video")<0){
    console.log('ERROR: Link is not public (probably youtube or another provider). It will be set to "XXXXXXXXXXXXXXXXXXX"')
    episodesList.push({
    					url:'XXXXXXXXXXXXXXXXXXXXXXX',
    					season:1,
    					episode:index + 1
    				});
                if(episodesList.length >= la.length ){
    					console.log(episodesList);
    				}

    return;
}


                
const videoEl = elem.substring(
    elem.indexOf("<video") + 1, 
    elem.lastIndexOf("</video>")
);

                console.log(videoEl);

const src = videoEl.substring(
    videoEl.indexOf(' data-video-src="') + 17, 
    videoEl.length
);
                
                console.log(src);

const href = src.substring(
    0,
    src.indexOf('"')
);
    				const request = fetch(href)
			.then((response) => {
				return response.json();
			}).then((json)=>{
                const link = json.data[json.data.length-1].src;
                console.log(link);
    				episodesList.push({
    					url:link,
    					season:1,
    					episode:index + 1
    				});
                if(episodesList.length >= la.length ){
    					console.log(episodesList);
    				}
            });
    
    				


			});
	}, 1000 * index);
}
