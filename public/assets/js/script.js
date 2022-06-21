var radio_cash = document.getElementById('radio2');
var card_info = document.getElementById('card_info');
var btn_reservation = document.getElementById('btn_reservation');


let container = document.querySelector('.pay-method')

container.addEventListener('click', () => {
  if(radio_cash.checked) {
    card_info.style.display = 'none';
  } else {
    card_info.style.display = 'block';
  }
})