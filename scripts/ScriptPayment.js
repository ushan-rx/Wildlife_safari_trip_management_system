    
    //pament method click (visa or amarican express)

let selectedBox = null;
var boxNumber = 0;
var input_box = document.getElementById('input_box');

function selectBox(boxNumber) {
  if (boxNumber == 0) {
    // Remove selected class from the previously selected box
    document.getElementById('box1' + 'box2').classList.remove('selected');
  }
  else if(boxNumber == 1){
    document.getElementById('box1').classList.add('selected');
    document.getElementById('box2').classList.remove('selected');
    input_box.value = 1;
  } 
  else if(boxNumber == 2){
    document.getElementById('box2').classList.add('selected');
    document.getElementById('box1').classList.remove('selected');
    input_box.value = 2;
  }

}

