document.addEventListener("DOMContentLoaded", function() {

    let user = document.querySelector(".log");
    let drap = document.querySelector(".drap");
            
        user.addEventListener("click", function(e){
        e.preventDefault();
        drap.classList.toggle("n");
        });
       
    let logout = document.querySelector(".logout");
    let drapp = document.querySelector(".drapp");
                
        logout.addEventListener("click", function(e){
        e.preventDefault();
        drapp.classList.toggle("n");
        });

    let search = document.querySelector(".sch");
    let aff = document.querySelector(".aff");
                    
        search.addEventListener("click", function(e){
        e.preventDefault();
        aff.classList.toggle("n");
        });  
        

    let heart = document.querySelectorAll(".heart");

        heart.forEach(el => {
            el.addEventListener("click", function(e) {
                e.preventDefault();
                el.classList.toggle("red");
            });
        });

})
