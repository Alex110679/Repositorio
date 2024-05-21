let menuVisible = false;
//funcion que oculta o muestra el menu
function mostrarOcultarMenu(){
    if(menuVisible){
        document.getElementById("nav").classList="";
        menuVisible =false;
    }else{
        document.getElementById("nav").classList="responsive"
        menuVisible =true;
    }
}
function seleccionar(){
    //oculto el menu una vez selecciono una opcion
    document.getElementById("nav").classList="";
    menuVisible =false;
}
//funcion que aplica las animaciones de las habilidades 
function efectoHabilidades(){
    var skills = document.getElementById("skills");
    var distancia_skills = window.innerHeight - skills.getBoundingClientRect().top;
    if(distancia_skills >=300){
        let habilidades = document.getElementsByClassName("progreso");
        habilidades [0].classList.add("comunicacion");
        habilidades [1].classList.add("trabajo");
        habilidades [2].classList.add("creatividad");
        habilidades [3].classList.add("dedicacion");
        habilidades [4].classList.add("puntualidad");
        habilidades [5].classList.add("responsabilidad");
    }
}

//detecto el scrolling para aplicar animaciones de la barra de habilidades
window.onscroll = function(){
efectoHabilidades();
}
