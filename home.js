function changeType(event){
    const chosenType = event.currentTarget;

    chosenType.classList.add("selected");

    const otherTypes = chosenType.parentNode.querySelectorAll(".type");
    for(const t of otherTypes){
        if(t.dataset.type !== chosenType.dataset.type){
            t.classList.remove('selected');
        }
    }
    
    typeSelected = chosenType.dataset.type;
    fetchGuitars();
}

function fetchGuitars(){
    fetch("fetch_hollow.php?type=" + typeSelected).then(onResponse).then(fetchGuitarsJson);
}
function fetchHome(){
    fetch("fetch_home.php?type=" + homeSelected).then(onResponse).then(fetchHomeJson);
}

function onResponse(response) {
    return response.json();
}
function fetchHomeJson(json){
    const homeContainer = document.querySelector('.block-container');
    homeContainer.innerHTML='';

    for(let i in json){
        const blocco = document.createElement('div');
        blocco.classList.add('other-block2');
        blocco.dataset.id = json[i].id;
    
        const img = document.createElement('img');
        img.src = "./imageshw1/" + json[i].picture;

        const text = document.createElement('a');
        text.href = json[i].link;
        text.textContent = json[i].title;
        text.classList.add("link-second-block");

        blocco.appendChild(img);
        blocco.appendChild(text);
        homeContainer.appendChild(blocco);
    }
}
function fetchGuitarsJson(json){
    //console.log(json);
    const recipeContainer = document.querySelector('.galleria');
    recipeContainer.innerHTML='';

    for(let i in json){
        const guitar = document.createElement('div');
        guitar.classList.add('guitar');
        guitar.dataset.id = json[i].id;
        const img = document.createElement('img');
        img.classList.add('guitar-img2');
        img.src= "./imagesdb/" + json[i].picture;
        const textContainer = document.createElement('div');
        const p = document.createElement('p');
        p.textContent = json[i].name;
        const star = document.createElement('img');
        star.classList.add('star');

        const formData = new FormData();
        formData.append('guitarid', json[i].id);
        fetch("upload_star.php", {method: 'post', body: formData}).then(onResponse).then(function(json){return updateStar(json, star)});

        textContainer.appendChild(p);
        textContainer.appendChild(star);
        guitar.appendChild(img);
        guitar.appendChild(textContainer);
        recipeContainer.appendChild(guitar);
    }
}

function updateStar(json, star){
    if(json.full === true){
        star.addEventListener('click', unstarGuitar);
        star.src= "./images/star_full.png";
    }
    else{
        star.addEventListener('click', starGuitar);
        star.src= "./images/star_empty.png";
    }
}

function starGuitar(event){
    const button = event.currentTarget;

    const formData = new FormData();
    formData.append('guitarid', button.parentNode.parentNode.dataset.id);
    fetch("star_guitar.php", {method: 'post', body: formData}).then(onResponse);

    button.src = "./images/star_full.png";
    button.removeEventListener('click', starGuitar);
    button.addEventListener('click', unstarGuitar);
    
}

function unstarGuitar(event){
    const button = event.currentTarget;

    const formData = new FormData();
    formData.append('guitarid', button.parentNode.parentNode.dataset.id);
    fetch("unstar_guitar.php", {method: 'post', body: formData}).then(onResponse);

    button.src = "./images/star_empty.png";
    button.removeEventListener('click', unstarGuitar);
    button.addEventListener('click', starGuitar);
}

function searchGuitar() {
    const input = document.querySelector('input[type="text"]');
    const filter = input.value.toUpperCase();
    if(filter === ''){
        const recipeContainer = document.querySelector('.search');
        recipeContainer.innerHTML='';
        return;
    }
    fetch("search_guitar.php?q=" + filter).then(onResponse).then(onSearchJson);
}

function onSearchJson(json){
    const guitarContainer = document.querySelector('.search');
    guitarContainer.innerHTML='';

    if(json.length == 0){
        const noGuitar = document.createElement('h3');
        noGuitar.textContent = "No Guitar found.";
        guitarContainer.appendChild(noGuitar);
        return;
    }

    for(let i in json){
        const guitar = document.createElement('div');
        guitar.classList.add('guitar');
        guitar.dataset.id = json[i].id;
        const img = document.createElement('img');
        img.classList.add('guitar-img2');
        img.src= "./imagesdb/" + json[i].picture;
        const textContainer = document.createElement('div');
        const p = document.createElement('p');
        p.textContent = json[i].name;
        const star = document.createElement('img');
        star.classList.add('star');

        const formData = new FormData();
        formData.append('guitarid', json[i].id);
        fetch("upload_star.php", {method: 'post', body: formData}).then(onResponse).then(function(json){return updateStar(json, star)});

        textContainer.appendChild(p);
        textContainer.appendChild(star);
        guitar.appendChild(img);
        guitar.appendChild(textContainer);
        guitarContainer.appendChild(guitar);
    }
}


//Main
let typeSelected = "Hollow";
const types = document.querySelectorAll('.type');
for(const t of types){
    t.addEventListener('click', changeType);
}
const homeSelected = "home";
fetchHome();
fetchGuitars();