$(window).on("load",function(){
    $(".loader-wrapper").delay(1000).fadeOut("slow");
})


function collapse_sidebar() {
    if(document.getElementById("sidebar").classList.contains('collapse-sidebar')){
        document.getElementById("sidebar").classList.remove('collapse-sidebar');
        document.getElementById("main").classList.remove('collapse-main');
    }else{
        document.getElementById("sidebar").classList.add('collapse-sidebar');
        document.getElementById("main").classList.add('collapse-main');
    }
}
var m;
function collapse_sidebar_item(e){
    m = document.getElementById(e.id).getAttribute("collapse");
    if(document.getElementById(m).classList.contains('collapse-items')){
        document.getElementById(m).classList.remove('collapse-items');
    }else{document.getElementById(m).classList.add('collapse-items');}
}
var n;
function sidebar_navigation(e){
    for(let vari of document.getElementsByClassName("box-on")){
        vari.classList.remove('box-on');
        vari.classList.add('box-off');
    }
    for(let vari of document.getElementsByClassName("selected")){
        vari.classList.remove('selected');
    }
    n = document.getElementById(e.id).getAttribute("box");
    document.getElementById(n).classList.remove("box-off");
    document.getElementById(n).classList.add("box-on");

    n = document.getElementById(e.id).getAttribute("sidebaritem");
    document.getElementById(n).classList.add("selected");

    if(n = document.getElementById(n).getAttribute("collapse")){
        if(document.getElementById(n).classList.contains('collapse-items')){
            document.getElementById(n).classList.remove('collapse-items');
        }else{document.getElementById(n).classList.add('collapse-items');}
    }
    
}
function navbar_navigation(e){
    for(let vari of document.getElementsByClassName("box-on")){
        vari.classList.remove('box-on');
        vari.classList.add('box-off');
    }
    n = document.getElementById(e.id).getAttribute("box");
    document.getElementById(n).classList.remove("box-off");
    document.getElementById(n).classList.add("box-on");
}




var navbar = document.getElementById('navbar');
var navbarlinksm = document.getElementById('nav-links-mobile');
function collapse_navbar(e){
    if(navbar.classList.contains('navbar-collapse')){
        navbar.classList.remove('navbar-collapse');
        navbarlinksm.classList.remove('navbar-links-collapse');
    }else{
        navbar.classList.add('navbar-collapse');
        navbarlinksm.classList.add('navbar-links-collapse');
    }
}

var it = document.getElementById("items")
var profile = document.getElementById("profile")
it.addEventListener("scroll", (event) => {
    if(it.scrollTop > 0 && it.classList.contains('shadow-scroll') == false){
        profile.classList.add("shadow-scroll");
    }else{profile.classList.remove("shadow-scroll"); console.log('else')}
});


function auto_grow(element) {
    element.style.height = "5px";
    element.style.height = ((element.scrollHeight)+1.59) + "px";
}