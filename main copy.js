const btnLeft = document.querySelector(".leftbtn");
const btnRight = document.querySelector(".rightbtn");
const Slides = document.querySelectorAll(".filial_box_subbox"); 

let currentSlideIndex = 0;
//
function Show(){
    Slides[currentSlideIndex].classList.add("activslide");
}

function hideSlide(){
    Slides[currentSlideIndex].classList.remove("activslide");
}

function changeSlide(SlideIndex){
    hideSlide();
    currentSlideIndex = SlideIndex;
    Show();
}

function nextSlide(){
    let newSlideIndex = currentSlideIndex + 1;
    if(newSlideIndex > Slides.length - 1){
        newSlideIndex = 0;
    }
    changeSlide(newSlideIndex);
}

function lastSlide(){
    let newSlideIndex = currentSlideIndex - 1;
    if(newSlideIndex < 0){
        newSlideIndex = Slides.length - 1;
    }
    changeSlide(newSlideIndex);
}

btnRight.addEventListener("click", nextSlide);
btnLeft.addEventListener("click", lastSlide);

//модальные окна

// открытие попап окна
document.getElementById("open-popup-btn").addEventListener("click", function(){document.getElementById("popup-card").classList.add("open")})
document.getElementById("open-popup-btn2").addEventListener("click", function(){document.getElementById("popup-card").classList.add("open")})
document.getElementById("open-popup-btn3").addEventListener("click", function(){document.getElementById("popup-card").classList.add("open")})
document.getElementById("open-popup-btn4").addEventListener("click", function(){document.getElementById("popup-card").classList.add("open")})
//свёртывание попап окна
document.getElementById("close-popup-btn").addEventListener("click", function(){document.getElementById("popup-card").classList.remove("open")})

// открываем попап для почты
document.getElementById("open-popup-btn5").addEventListener("click", function(){document.getElementById("popup-email").classList.add("open")})
//свёртывание попап окна
document.getElementById("close-popup-btn1").addEventListener("click", function(){document.getElementById("popup-email").classList.remove("open")})