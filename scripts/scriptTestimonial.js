
var button1=document.getElementById('write-review');
var popup1=document.getElementById('form-container');
var closesButton=document.getElementById('close-btn');
var submitButton=document.getElementById('submit-btn');
var container=document.getElementById('container');


popup1.classList.add('hide');


button1.addEventListener('click',function(){

    popup1.classList.remove('hide');
    container.classList.add('blur');

})

closesButton.addEventListener('click',function(){
    popup1.classList.add('hide');

    container.classList.remove('blur');
})






