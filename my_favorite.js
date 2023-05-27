function fetchFavorites(){
    fetch("fetch_favorite.php").then(onResponse).then(fetchFavoriteJson);
}
function fetchUsers(){
    fetch("fetch_utenti.php").then(onResponse).then(fetchUsersJson);
}
function onResponse(response) {
    return response.json();
}
function fetchUsersJson(json){
    const userContainer = document.querySelector('.utenti');
    userContainer.innerHTML = "";

    if(json.length == 0){
        const noRecipe = document.createElement('h3');
        noRecipe.textContent = "No suggestion for you.";
        userContainer.appendChild(noRecipe);
        return;
    }

    for(let i in json){
        const div = document.createElement('div');
        div.classList.add('users');
        const img = document.createElement('img');
        img.classList.add('propic');
        img.src = json[i].propic;
        const textContainer = document.createElement('div');
        const p = document.createElement('p');
        p.textContent = json[i].username;
        textContainer.appendChild(p); 
        div.appendChild(img);
        div.appendChild(textContainer);
        userContainer.appendChild(div);
    }
}
function fetchFavoriteJson(json){
    const recipeContainer = document.querySelector('.favorites');
    recipeContainer.innerHTML='';

    if(json.length == 0){
        const noRecipe = document.createElement('h3');
        noRecipe.textContent = "No favorite found.";
        recipeContainer.appendChild(noRecipe);
        return;
    }

    for(let i in json){
        const guitars = document.createElement('div');
        guitars.classList.add('guitars');
        guitars.dataset.id = json[i].id;
        const img = document.createElement('img');
        img.classList.add('guitar-img');
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
        guitars.appendChild(img);
        guitars.appendChild(textContainer);
        recipeContainer.appendChild(guitars);
    }
}

function updateStar(json, star){
    if(json.full === true){
        star.addEventListener('click', unstarRecipe);
        star.src= "./images/star_full.png";
    }
    else{
        star.addEventListener('click', starRecipe);
        star.src= "./images/star_empty.png";
    }
}

function starRecipe(event){
    const button = event.currentTarget;

    const formData = new FormData();
    formData.append('guitarid', button.parentNode.parentNode.dataset.id);
    fetch("star_guitar.php", {method: 'post', body: formData}).then(onResponse);

    button.src = "./images/star_full.png";
    button.removeEventListener('click', starRecipe);
    button.addEventListener('click', unstarRecipe);
    
}

function unstarRecipe(event){
    const button = event.currentTarget;

    const formData = new FormData();
    formData.append('guitarid', button.parentNode.parentNode.dataset.id);
    fetch("unstar_guitar.php", {method: 'post', body: formData}).then(onResponse);

    fetchFavorites();
}

fetchFavorites();
fetchUsers();