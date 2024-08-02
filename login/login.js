const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click" ,()=>{
    container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click" ,()=>{
    container.classList.remove("sign-up-mode");
});

let submidt = document.getElementById('socialtext');
let returnt = document.getElementById('returnt');
let ppass = document.getElementById('ppass');


submidt.addEventListener("click" ,()=>{
    ppass.classList.add("lissi");
});
returnt.addEventListener("click" ,()=>{
    ppass.classList.remove("lissi");
});


