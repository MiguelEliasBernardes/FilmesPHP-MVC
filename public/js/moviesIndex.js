function searchRedirect(){

    let search = document.getElementById('search').value;

    if(search != '' && search != null){
        window.location.replace(`index.php?search=${search}`);
    }


}
