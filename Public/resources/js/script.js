document.addEventListener("DOMContentLoaded", function() {

    let user = document.querySelector(".log");
    let drap = document.querySelector(".drap");
            
        user.addEventListener("click", function(e){
        e.preventDefault();
        drap.classList.toggle("n");
        console.log("ok");
        });
       
})
