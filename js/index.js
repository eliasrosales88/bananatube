function valoracionBanastar(dataId, boolean){
    let banastar = document.getElementById(`banastar${dataId}`);
    let banastar_dark = document.getElementById(`banastar_dark${dataId}`);

    console.log(banastar);
    console.log(banastar_dark);

    banastar.setAttribute("data-switch", true)
    banastar_dark.setAttribute("data-switch", false)
    banastar.classList.toggle("d-none");
    banastar_dark.classList.toggle("d-none");
    
    let banastarSwitch = banastar.getAttribute("data-switch");
    let banastar_darkSwitch = banastar_dark.getAttribute("data-switch");
    
    

    if (banastarSwitch === true) {
        banastar.setAttribute("data-switch", false);
    } else if (banastarSwitch === false) {
        banastar.setAttribute("data-switch", true);
    }

    if (banastar_darkSwitch === true) {
        banastar_dark.setAttribute("data-switch", false)
    } else if (banastar_darkSwitch === false) {
        banastar_dark.setAttribute("data-switch", true)
    }

    console.log(banastarSwitch);
    console.log(banastar_darkSwitch);
}





function init(){

    /*let banastar1 = document.getElementById("banastar1");
    let banastar_dark1 = document.getElementById("banastar_dark1");
    banastar1.addEventListener("click", function(){
        banastar1.classList.toggle("d-none");
        banastar_dark1.classList.toggle("d-none");
    });
    banastar_dark1.addEventListener("click", function(){
        banastar1.classList.toggle("d-none");
        banastar_dark1.classList.toggle("d-none");
    });*/
    


}

document.addEventListener("DOMContentLoaded", init);