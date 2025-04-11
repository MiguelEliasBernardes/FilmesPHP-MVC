function searchRedirect(){

    let search = document.getElementById('search').value;

    if(search != '' && search != null){
        window.location.replace(`index.php?search=${search}`);
    }


}

// function displayDescription(element) {

//     const description = element.querySelector('.description');

//     if (description) {
//         description.style.display = 'block';
//     } else {
//         console.warn("Descrição não encontrada dentro do elemento.");
//     }
// }

// function RemoveDescription(element) {

//     const description = element.querySelector('.description');

//     if (description) {
//         description.style.display = 'none';
//     } else {
//         console.warn("Descrição não encontrada dentro do elemento.");
//     }
// }
