function searchRedirect(){

    let search = document.getElementById('search').value;

    if(search != '' && search != null){
        window.location.href = `index.php?route=explore&search=${encodeURIComponent(search)}`;
    }


}
