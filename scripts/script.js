const IMAGES = document.querySelectorAll("#image");

let growImage = function(e){
    console.log(e);

}
IMAGES.forEach(img => img.addEventListener("mouseover",growImage));