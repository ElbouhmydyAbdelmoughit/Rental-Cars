var radio_cash = document.getElementById('radio2');
var card_info = document.getElementById('card_info');
var btn_reservation = document.getElementById('btn_reservation');


var container = document.querySelector('.pay-method')

container.addEventListener('click', () => {
  if(radio_cash.checked) {
    card_info.style.display = 'none';
  } else {
    card_info.style.display = 'block';
  }
})

// Validation Contact Us Page
var field = $('input').parsley();