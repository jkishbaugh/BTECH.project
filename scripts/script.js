const IMAGES = document.querySelectorAll("img");


IMAGES.forEach(img => img.addEventListener("mouseover",function(){
    console.log("MouseOver works");
}));