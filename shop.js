function fetchShop(){
    fetch("fetch_shop.php").then(onResponse).then(fetchShopJson);
}
function fetchImg(){
    fetch("fetch_img.php").then(onResponse).then(fetchImgJson);
}

function onResponse(response) {
    console.log(response);
    return response.json();
}
function fetchShopJson(json){
    console.log(json);
    const shopContainer = document.querySelector('#fullmerch');
    shopContainer.innerHTML='';

    for(let i in json){
        const merch = document.createElement('div');
        merch.classList.add('merch');

        const img = document.createElement('img');
        img.classList.add('image');
        img.src= "./imageshw1/" + json[i].picture;

        const desc = document.createElement('div');
        desc.classList.add('desc');

        const p = document.createElement('p');
        p.classList.add('words');
        p.textContent = json[i].type;

        const carrello = document.createElement('div');
        carrello.classList.add('carrello');
        const prezzo = document.createElement('p');
        prezzo.textContent = json[i].prezzo;

        carrello.appendChild(prezzo);
        desc.appendChild(p);
        merch.appendChild(img);
        merch.appendChild(desc);
        merch.appendChild(carrello);

        shopContainer.appendChild(merch);
    }
}


function fetchImgJson(json){
    console.log(json);
    const serchContainer = document.querySelector('#search');
    serchContainer.innerHTML='';

    for(let i in json){
        const merch = document.createElement('div');
        merch.classList.add('merch');
        merch.style.display = "flex";
        merch.style.justifyContent = "center";

        const img = document.createElement('img');
        img.classList.add('image');
        img.src= "./imageshw1/" + json[i].picture;

        const el = document.createElement('img');
        el.classList.add('bigger');
        el.src = "./imageshw1/cerca.png";

        el.addEventListener('click', function() {
            openModal(img.src);
        });

        merch.appendChild(img);
        merch.appendChild(el);
        serchContainer.appendChild(merch);
    }
}
function openModal(imageSrc) {
    // Crea una modale per mostrare l'immagine ingrandita
    const modal = document.createElement('div');
    modal.classList.add('modal');
    modal.style.display = "flex";
    modal.style.flexDirection = "column";
  
    const modalContent = document.createElement('div');
    modalContent.classList.add('modal-content');
  
    const modalImg = document.createElement('img');
    modalImg.src = imageSrc;
    modalImg.style.maxWidth = "100%";
  
    const closeModalBtn = document.createElement('button');
    closeModalBtn.classList.add('flex-button');
    closeModalBtn.innerText = 'Chiudi';
    closeModalBtn.addEventListener('click', function() {
        closeModal(modal);
    });
  
    modalContent.appendChild(modalImg);
    modal.appendChild(modalContent);
    modal.appendChild(closeModalBtn);
  
    // Aggiungi la classe al body per disabilitare lo scroll
    document.body.classList.add('modal-open');
  
    // Aggiungi la modale al documento
    document.body.appendChild(modal);
}


function closeModal(modal) {
    // Rimuovi la modale dal DOM quando viene chiusa
    modal.remove();
    // Rimuovi la classe dal body per abilitare lo scroll
    document.body.classList.remove('modal-open');
}
fetchShop();
fetchImg();