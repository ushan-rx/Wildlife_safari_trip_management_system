/*range slider */
var slider =document.getElementById("Range");
var output =document.getElementById("demo");
output.innerHTML =slider.value;

slider.oninput =function () {
    output.innerHTML=this.value;
    
}


var incrementButton =document.getElementsByClassName("inc");
var decrementButton =document.getElementsByClassName("dec");

for(var i=0; i<incrementButton.length;i++){
    var button = incrementButton[i];

    button.addEventListener('click',function(event){

        var buttonClicked =event.target;
        var input =buttonClicked.parentElement.children[1];
        var inputValue =input.value;
        var newValue =parseInt(inputValue)+1;
        input.value =newValue;
    })
}

/*increment/decrement */
for(var i=0; i<decrementButton.length;i++){
    var button = decrementButton[i];

    button.addEventListener('click',function(event){

        var buttonClicked =event.target;
        var input =buttonClicked.parentElement.children[1];
        var inputValue =input.value;
        var newValue =parseInt(inputValue)-1;

        if(newValue >=0){
            input.value =newValue;
        }
        else{

            input.value =0;
        }
    })
}

/*up-down buttons and slides */

const sliderContainer =document.querySelector('.slider-container');
const slideLeft =document.querySelector('.left-slide');
const slideRight=document.querySelector('.right-slide');
const downButton =document.querySelector('.down-button');
const upButton =document.querySelector('.up-button');
const slideLength=slideRight.querySelectorAll('div').length;


let activeSlideIndex =0;

slideLeft.style.top =`-${(slideLength-1)*100}vh`;
upButton.addEventListener('click',()=> changeSlide('up'));
downButton.addEventListener('click',()=> changeSlide('down'));

const changeSlide = (direction)=>{

    const sliderHeight = sliderContainer.clientHeight;

    if(direction === 'up'){
            activeSlideIndex ++;
        if (activeSlideIndex > slideLength-1) {
            activeSlideIndex =0;
        }
    }
        else if(direction === 'down'){
            
        activeSlideIndex --;
        if (activeSlideIndex < 0) {
            activeSlideIndex = slideLength-1;
        }
        }
    

    slideRight.style.transform = `translateY(-${activeSlideIndex * sliderHeight}px)`;
    slideLeft.style.transform = `translateY(${activeSlideIndex * sliderHeight}px)`;
}


