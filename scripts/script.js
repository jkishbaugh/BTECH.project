const IMAGES = document.querySelectorAll("image");


IMAGES.forEach(img => img.addEventListener("mouseover",function(){
    console.log("MouseOver works");
}));