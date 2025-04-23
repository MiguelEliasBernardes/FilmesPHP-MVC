function openModal() {
    document.getElementById('modal').classList.remove('hidden');
}

function closeModal() {
    document.getElementById('modal').classList.add('hidden');
}

function setRating(nota) {
    document.getElementById('nota').value = nota;
    const estrelas = document.querySelectorAll('#rating .star-svg path');

    estrelas.forEach((estrela, index) => {
      estrela.setAttribute("fill", index < nota ? "#892CCD" : "#2a2a2a");
    });
  }