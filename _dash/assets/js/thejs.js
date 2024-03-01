

$(window).on("load",function(){
    $(".loader-wrapper").fadeOut("slow");
})






function test(){
    const dataType = 'application/vnd.ms-excel';
    const tableSelect = document.querySelector('table');
    const tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    const downloadLink = document.createElement('a');
    const fileName = 'table.xls';
    
    document.body.appendChild(downloadLink);
    
    downloadLink.href = `data:${dataType}, ${tableHTML}`;
    downloadLink.download = fileName;
    downloadLink.click();
}



function collapse(x){//collapse('collapseBD');
    if(document.getElementById(x).style.display == "block"){
        document.getElementById(x).style.display = "none"
    } 
    else {
        document.getElementById(x).style.display = "block";
    }
}

function bars(){
    if(document.getElementById("uls").style.display == "none"){
        document.getElementById("uls").style.display = "inline-block"
    } 
    else {
        document.getElementById("uls").style.display = "none";
    }
}
var w;
function sidemenu(x){//onclick="sidemenu('BD1');
    w = document.getElementsByClassName("block")[0].id;
    document.getElementById(w).classList.remove("block");
    document.getElementById(w).classList.add("none");

    document.getElementById(x).classList.remove("none");
    document.getElementById(x).classList.add("block");
    

    x = x.slice(0, -1);//remove last char to get the especific tab from side menu
    w = document.getElementsByClassName("active")[0].id;
    document.getElementById(w).classList.remove("active");
    document.getElementById(x).classList.add("active");
}


function editaFC(){
    if(document.getElementById("EditaFC").classList.contains("editaN")){
        document.getElementById("EditaFC").classList.remove("editaN");
        document.getElementById("EditaFC").classList.add("editaS");
        
        for(let vari of document.getElementsByClassName("tablenone")){
            vari.style.display = "table-cell";
        }
        for(let vari2 of document.getElementsByClassName("tablecell")){
            vari2.style.display = "none";
        }
        for(let vari3 of document.getElementsByClassName("client-rest")){
            vari3.style.display = "none";
        }
        document.getElementById("client-restE").style.display = "block";
        
    }
    else{
        document.getElementById("EditaFC").classList.remove("editaS");
        document.getElementById("EditaFC").classList.add("editaN");

        for(let vari of document.getElementsByClassName("tablecell")){
            vari.style.display = "table-cell";
        }
        for(let vari2 of document.getElementsByClassName("tablenone")){
            vari2.style.display = "none";
        }
        for(let vari3 of document.getElementsByClassName("client-rest")){
            vari3.style.display = "block";
        }
        document.getElementById("client-restE").style.display = "none";
    }
}

function ficha(x){
    document.getElementById("searchF").value = x;
}