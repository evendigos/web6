let x = 0;
const sliderLine = document.querySelector(".slider-line");

document.querySelector(".slider-next").addEventListener("click",function(){
    x = x + 600;
    if (x > 1800 ){
        x = 0;
    }
    sliderLine.style.left = - x + 'px'

});

document.querySelector(".slider-prev").addEventListener("click",function(){
    x = x - 600;
    if (x < 0 ){
        x = 1800;
    }
    sliderLine.style.left = - x + 'px'

});