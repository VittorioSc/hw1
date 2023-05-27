
function onResponse_s(response){
    return response.json();
}
  
function onJson_s(json){

  const spotify_l = document.querySelector('#container');
  spotify_l.innerHTML = '';
  const results = json.albums.items;
  let num_results = results.length;
  if(num_results > 10) num_results = 10;
  for(let i=0; i<num_results; i++) {
    const element_list = results[i]
    const title = element_list.name;
    const image_sel = element_list.images[0].url;
    
    const ssongs = document.createElement('div');
    ssongs.classList.add('box_spotify');
    const albums_img = document.createElement('img');
    albums_img.src = image_sel;
    const sname = document.createElement('p');
    const slink= document.createElement('a');
    slink.setAttribute('href', element_list.external_urls.spotify);
    slink.textContent = title;
   
    ssongs.appendChild(albums_img);
    ssongs.appendChild(sname);
    ssongs.appendChild(slink);
    spotify_l.appendChild(ssongs);
  }
} 
function spotify_S(event){
  event.preventDefault();
  const tracks = document.querySelector('#track');
  const tracks_v = encodeURIComponent(tracks.value);

  fetch("spotify.php&q=" + tracks_v).then(onResponse_s).then(onJson_s);
}
//-----------------------------------------------------------------------------------------
function onError(error) {
  console.log('Error: ' + error);
}

function onResponse(response) {
  console.log('Ok');
  return response.json();
}

