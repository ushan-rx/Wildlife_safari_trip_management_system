
// when get  the card details and click the pay button, hide the card pay  session and show the bill
var cardPayButton = document.getElementById('card-payButton');
var receipt = document.getElementById('receipt'); ///bill session
var cardPayment = document.getElementById('card'); // card pament session

receipt.classList.add('hidden');

cardPayButton.addEventListener('submit', function(event) { 
  
  event.preventDefault();

  receipt.classList.remove('hidden'); // show the bill
  cardPayment.classList.add('hidden'); // hide the card payment

  window.scrollTo({
    top: 0,
  });
})


// for download the receipt
var pdf_receipt = document.getElementById('pdf');

function convertToPDF(){
  
  var opt = {
    margin:       1,
    filename:     'Recipt.pdf',
    image:        { type: 'jpeg', quality: 0.98 },
    html2canvas:  { scale: 2 },
    jsPDF:        { unit: 'in', format:'a3' , orientation: 'landscape' }
  };

 html2pdf().set(opt).from(pdf_receipt).save();
}


//for go to gomr button
// function goHome()
