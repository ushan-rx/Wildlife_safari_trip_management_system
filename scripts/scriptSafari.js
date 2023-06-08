const slide_buttons = document.querySelectorAll('input[name="radio-btn"]');

const slide_one   = document.querySelector('.one');
const slide_two   = document.querySelector('.two');
const slide_three = document.querySelector('.three');
const slide_four = document.querySelector('.four');
const slide_five = document.querySelector('.five');


for (const radiobutton of slide_buttons) {
        radiobutton.addEventListener('change', (e) =>{
            if (e.target.checked) {
                var val = e.target.value;
                if(val < 5){
                    changeImg(slide_one, val);
                }else if(val < 9){
                    changeImg(slide_two, val-4);
                }
                else if(val<13){
                    changeImg(slide_three,val-8);
                }
                else if(val<17){
                    changeImg(slide_four,val-12);
                }
                else if(val<21){
                    changeImg(slide_five,val-16)
                }
    
            }
        });
    }


    function changeImg(slide, val) {
        if(val == 1){
            slide.style.marginLeft = "0%";
        }else if(val == 2){
            slide.style.marginLeft = "-105%"; 
        }else if(val == 3){
            slide.style.marginLeft = "-208%";
        }else if(val == 4){
            slide.style.marginLeft = "-312%";
        }
       
       
    }