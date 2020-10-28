/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// showcase background move
document.addEventListener('mousemove', function (e) {
    const effectOne = document.querySelector('.effect-1');
    const effectTwo = document.querySelector('.effect-2');    
    const bg = document.querySelector('.showcase');    

    effectOne.style.left = 10 +  e.pageX/20 + "px";
    effectOne.style.bottom = e.pageX/20 + "px";    
    effectTwo.style.right = 10 +  e.pageX/25 + "px";  
    effectTwo.style.bottom = e.pageX/20 + "px";    
});