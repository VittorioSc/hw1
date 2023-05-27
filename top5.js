function fetchTop5(){
    fetch("fetch_top5.php?type=" + typeSelected).then(onResponse).then(fetchTop5Json);
}
function onResponse(response) {
    console.log(response);
    return response.json();
}
function fetchTop5Json(json){
    console.log(json);
    const top5Container = document.querySelector('#blocco-top');
    top5Container.innerHTML='';

    for(let i in json){
        const t = document.createElement('div');
        t.classList.add('blocco');
        t.style.display = "flex";
        t.dataset.id = json[i].id;

        const numero = document.createElement('div');
        numero.classList.add('numero');
        numero.textContent = json[i].id;

        const spazio = document.createElement('div');
        spazio.style.width = "20px";

        const blocco = document.createElement('div');
        blocco.classList.add('blocco-testo-img');
        blocco.style.display = "flex";
        blocco.style.flexDirection = "column";

        const nome = document.createElement('div');
        nome.classList.add('nome-genere');
        nome.textContent = json[i].nome;

        const voto = document.createElement('div');
        voto.classList.add('voto');
        voto.textContent = json[i].punteggio;

        const descrizione = document.createElement('div');
        descrizione.classList.add('descrizione');
        descrizione.textContent = json[i].descr;

        const opinione = document.createElement('div');
        opinione.classList.add('opinione');
        opinione.textContent = json[i].opinione;

        const image = document.createElement('img');
        image.classList.add('genere');
        image.src = "./images/" + json[i].picture;

        blocco.appendChild(nome);
        blocco.appendChild(voto);
        blocco.appendChild(descrizione);
        blocco.appendChild(opinione);
        blocco.appendChild(image);

        t.appendChild(numero);
        t.appendChild(spazio);
        t.appendChild(blocco);

        top5Container.appendChild(t);
    }
}

const typeSelected = "top5";
fetchTop5();