
const mobileWrap = document.querySelector('.mobile-wrap');
const mobileHamburger = document.querySelector('.hamburger-menu');
const body = document.querySelector('body');
const btnClose = document.querySelector('.mobile-wrap__close');
function mobileAdd(){
    mobileWrap.classList.add('mobile-wrap--active');
    body.classList.add('no-scroll');
    mobileHamburger.classList.add('hamburger-menu--active');
}
mobileHamburger.addEventListener("click", mobileAdd);

function mobileClose(){
    mobileWrap.classList.remove('mobile-wrap--active');
    body.classList.remove('no-scroll');
    mobileHamburger.classList.remove('hamburger-menu--active');
}
btnClose.addEventListener("click", mobileClose);

const menuItem = document.querySelector('.menu-link');
const menuList = document.querySelector('.menu-list');
const navMenu = document.querySelector('.nav-menu');