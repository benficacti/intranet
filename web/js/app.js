/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/javascript.js to edit this template
 */

const splash = document.querySelector('.splash');

document.addEventListener('DOMContentLoaded', (e)=>{
    setTimeout(()=>{
        splash.classList.add('display-none');
    }, 1500);
});





const header = document.querySelector('.header');

window.onscroll = function (){
    var top = window.scrollY;
    console.log(top);
    if(top >= 50){
        header.classList.add('active')
    }else{
        header.classList.remove('active');
    }
}
