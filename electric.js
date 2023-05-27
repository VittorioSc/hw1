function fetchGuitar(){
    fetch("fetch_hollow.php?type=" + typeSelected).then(onResponse).then(fetchGuitarJson);
}
function fetchAudio(){
    fetch("fetch_audio.php?type=" + audioSelected).then(onResponse).then(fetchAudioJson);
}
function fetchInfo(){
    fetch("fetch_info.php?type=" + infoSelected).then(onResponse).then(fetchInfoJson);
}

function onResponse(response) {
    console.log(response);
    return response.json();
}
function fetchGuitarJson(json){
    console.log(json);
    const guitarContainer = document.querySelector('.galleria');
    guitarContainer.innerHTML='';

    for(let i in json){
        const g = document.createElement('div');
        g.classList.add('guitar');
        g.dataset.id = json[i].id;
        const img = document.createElement('img');
        img.classList.add('guitar-img');
        img.src= "./imagesdb/" + json[i].picture;
        const textContainer = document.createElement('div');
        const p = document.createElement('p');
        p.textContent = json[i].name;
        const star = document.createElement('img');
        textContainer.appendChild(p);
        g.appendChild(img);
        g.appendChild(textContainer);
        guitarContainer.appendChild(g);
    }
}
function fetchAudioJson(json){
    const audioContainer = document.querySelector('.audio-g');
    audioContainer.innerHTML='';

    for(let i in json){
        const a = document.createElement('div');
        a.classList.add('audio-block');
        a.style.display = "flex";
        a.style.flexDirection = "column";
        a.style.justifyContent = "center";
        a.dataset.id = json[i].id;
        const audio = document.createElement('audio');
        audio.controls = true;
        audio.src = "./audio/"+ json[i].trace;
        audio.classList.add('audio');
        const textContainer = document.createElement('div');
        const p = document.createElement('p');
        p.textContent = json[i].name;
        p.style.textAlign = "center";

        textContainer.appendChild(p); 
        a.appendChild(textContainer);
        a.appendChild(audio);
        audioContainer.appendChild(a);
    }
}
function fetchInfoJson(json){
    const infoContainer = document.querySelector('#blocco-info');
    infoContainer.innerHTML='';

    for(let i in json){
        const info = document.createElement('div');
        info.classList.add('box-left');
        info.dataset.id = json[i].id;
        const img = document.createElement('img');
        img.src = "./imageshw1/"+ json[i].picture;
        img.classList.add('box-img');
        const p = document.createElement('p');
        p.classList.add('info');
        p.textContent = json[i].descr;

        info.appendChild(img);
        info.appendChild(p);
        infoContainer.appendChild(info);
    }
}
const audioSelected = "Solid";
const typeSelected = "electric";
const infoSelected = "electric";
fetchGuitar();
fetchAudio();
fetchInfo();