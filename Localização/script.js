function recarregarPagina(){
    window.location.reload();
}

function maps() {
    const streetIframe = document.getElementById('street');
    const mapsIframe = document.getElementById('maps'); 
    if (mapsIframe.style.display === 'none' || mapsIframe.style.display === '') {
        mapsIframe.style.display = 'block';  
        streetIframe.style.display = 'none';  
        mapsIframe.style.zIndex = 99;  
    } else {
        mapsIframe.style.display = 'none'; 
        streetIframe.style.display = 'block'; 
    }
}
