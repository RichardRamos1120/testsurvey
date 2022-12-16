let loginBtn = document.querySelector("#login-btn");
let darken = document.querySelector("#darken");
let loginForm = document.querySelector("#login-form");


loginBtn.addEventListener("click",()=>{
    loginForm.classList.remove("hide");
    darken.classList.remove("hide");
})

//hide form when click outside the login form
darken.addEventListener("click",()=>{
    loginForm.classList.add("hide");
    darken.classList.add("hide");
    loginForm.classList.remove("not-Hide");
    darken.classList.remove("not-Hide");
})
//

let questions = {
    "what is your email address":"",

};



