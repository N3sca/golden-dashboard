const executeCodes = () => {
    document.querySelector(".popout").classList.add("show");

    document.querySelectorAll(".click").forEach((e) => {
        e.addEventListener("click", () => {
            if (e.id == "video") {
                document.getElementById("videomodal").style.display = "block";
            }else{document.querySelector(".popout").classList.remove("show");}
        });
      });
};
function modalclose(){
    document.getElementById('videomodal').style.display = "none";
}

function redirectt(){
    window.location.replace("dashboard.html");
}