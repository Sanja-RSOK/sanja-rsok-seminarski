let trenutnaSlika = 0;
const slike = document.querySelectorAll('.lista-slika img');
const brojSlika = slike.length;
const dugmad = document.querySelectorAll('.pos-dugme');

// funckije za pomeranje slika na pocetnoj stranici

function pomeriSliku(index) {
    trenutnaSlika = index;
    promeniSlajd();
}

function sledecaSlika() {
    trenutnaSlika = (trenutnaSlika + 1) % brojSlika;
    promeniSlajd();
}

function promeniSlajd() {
    const listaSlika = document.getElementById('lista-slika');
    listaSlika.style.transform = `translateX(-${trenutnaSlika * 100}%)`;

    dugmad.forEach((dugme, index) => {
        dugme.classList.toggle('active', index === trenutnaSlika);
    });
}