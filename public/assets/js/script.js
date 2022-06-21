var radio_cash = document.getElementById('radio2');
var card_info = document.getElementById('card_info');
var btn_reservation = document.getElementById('btn_reservation');

function Display() {
  if (radio_cash.onchange == true) {
    btn_reservation.style.display = true;
  }
}