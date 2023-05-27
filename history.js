function fetchStory(){
    fetch("fetch_storia.php?type=" + typeSelected).then(onResponse).then(fetchStoryJson);
}
function onResponse(response) {
    console.log(response);
    return response.json();
}
function fetchStoryJson(json){
    console.log(json);
    const storyContainer = document.querySelector('#blocco-storia');
    storyContainer.innerHTML='';

    for(let i in json){
        const h = document.createElement('div');
        h.classList.add('box-left');
        h.dataset.id = json[i].id;
        const img = document.createElement('img');
        img.classList.add('box-img');
        img.src= "./imageshw1/" + json[i].picture;
        const textContainer = document.createElement('div');
        textContainer.style.display = "flex";
        textContainer.style.flexDirection = "column";
        const p = document.createElement('p');
        p.textContent = json[i].testo;
        const year = document.createElement('p');
        year.classList.add('year');
        year.textContent = json[i].anno;
        textContainer.appendChild(year);
        textContainer.appendChild(p);
        h.appendChild(img);
        h.appendChild(textContainer);
        storyContainer.appendChild(h);
    }
}

const typeSelected = "story";
fetchStory();