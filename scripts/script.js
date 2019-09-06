const IMAGES = document.querySelectorAll("#image");

let growImage = function(){
    let image = this.querySelector("a img");
    console.log(image);
    image.classList.add("grow");
}

let shrinkImage = function(){
    let image = this.querySelector("a img");
    console.log("shrink "+image);
    image.classList.remove("grow");
}
IMAGES.forEach(img => img.addEventListener("mouseover",growImage));
IMAGES.forEach(img => img.addEventListener("mouseout",shrinkImage));