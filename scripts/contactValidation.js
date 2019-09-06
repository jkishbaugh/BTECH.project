const INPUT = document.querySelectorAll("input");
const email = document.querySelector("#email");
const fullName = document.querySelector("#fullName");
const subject = document.querySelector("#subject");
const phoneNumber = document.querySelector("#phone");
const message = document.querySelector(".message");
const error = document.querySelector(".error");
//animation
function highlight(event) {
   event.target.style.border = ("2px solid #BADA55");
}

function removeHighlight(event){
    event.target.style.border = "none";
    event.target.style.borderBottom = ("1px solid #ddd");
}

INPUT.forEach(inp => inp.addEventListener("focus", highlight));
INPUT.forEach(inp=> inp.addEventListener("blur", removeHighlight));

//validation
let phonePattern = /\d{3}-\d{3}-\d{4}?/;
let letterPattern = /^[A-Za-z\s]+$/;
let form = document.querySelector(".contact")
let pristine = new Pristine(form);

pristine.addValidator(fullName, function(value){
   if(value.length > 10 && value.match(letterPattern)){
       return true;
   }
   return false;
}, "Full name is required and cannot contain numbers or special characters ", 2, false);

pristine.addValidator(subject, function(value){
    if(value.length > 5){
        return true;
    }
    return false;
}, "No subject has been entered", 1, false);

pristine.addValidator(message, function(value){
    if(value.length > 50){
        return true;
    }
    return false;
}, "Message must be longer than 50 characters", 1, false);

pristine.addValidator(phoneNumber, function(value){
    return value.match(phonePattern);
}, "Phone number must match pattern ###-###-####", 2, false);

let checkInput = function(){

   let valid = pristine.validate(this);
   if(!valid){

       error.innerText = pristine.getErrors(this);
       this.style.borderColor = "red";
   }else{
       error.innerText ="";
       this.style.borderColor = "#BADA55";
   }

}


email.addEventListener("keyup",checkInput);
fullName.addEventListener("keyup", checkInput);
phoneNumber.addEventListener("keyup",checkInput);
message.addEventListener("keyup", checkInput);
subject.addEventListener("keyup", checkInput);