const navToggle = document.querySelector(".toggle");
const navMenu = document.querySelector(".menu");
const menu = document.querySelector(".link-nav");

navToggle.addEventListener("click", ()=>{
    navMenu.classList.toggle("menu_visible");
})

menu.addEventListener("click", ()=>{
    navMenu.classList.toggle("menu_visible");
})

