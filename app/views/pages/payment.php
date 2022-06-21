<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="container" id="payment">
  <div class="row col-6 mx-auto shadow rounded-2 my-5">
    <div class="col my-5 px-sm-5">
      <form action="<?= URLROOT ?>/Payments/payment" method="POST">
        <h3 class="title text-center mb-5 mt-0 fw-bold">Car Info</h3>
        <div class="info_car d-block d-md-flex mx-auto col-12">
          <div class="img col-12 col-sm-6">
            <img src="<?= URLROOT ?>/assets\img\amg_63s.jpg" class="rounded-3 shadow-lg img-fluid mb-3 w-100" alt="">
          </div>
          <div class="info my-auto mx-auto text-center text-sm-start">
            <p>Model: 2020</p>
            <p>Name: Mercedes GLE</p>
            <p>Price: 200 $/D</p>
          </div>
        </div>
        <div class="info_client mt-3 text-center">
          <h3 class="title text-center my-5 fw-bold">Client Info</h3>
          <div class="inputBox mb-3">
            <input type="text" placeholder="CIN" class="form-control">
          </div>
          <div class="inputBox mb-3">
            <input type="text" placeholder="Name" class="form-control">
          </div>
          <div class="inputBox mb-3">
            <input type="email" placeholder="example@example.com" class="form-control">
          </div>
          <div class="inputBox mb-3">
            <input type="text" placeholder="Phone" class="form-control">
          </div>
          <div class="inputBox mb-3">
            <input type="text" placeholder="Address" class="form-control">
          </div>
          <div class="flex">
            <div class="inputBox mb-3">
              <input type="date" class="form-control">
            </div>
            <div class="radio d-sm-flex">
              <div class="pay-method inputRadio mb-3 text-center text-sm-start mt-5 " id="methpd_payment">
                <small class="text-start text-sm-start mb-3 d-block">Payment Method ?</small>
                <input type="radio" name="radio1" id="radio1">
                <label for="radio1" class="me-2">Card</label>
                <input type="radio" name="radio1" id="radio2" class="ms-2">
                <label for="radio2">Cash</label>
              </div>
              <div class="inputRadio mb-3 text-center text-sm-end mt-5 ms-sm-5 mb-5" id="methpd_payment">
                <small class="text-start text-sm-start mb-3 d-block ms-4">Delivery Method ?</small>
                <input type="radio" name="radio2" id="radio1" class="ms-3">
                <label for="radio1" class="m">Delivery</label>
                <input type="radio" name="radio2" id="radio2" class="ms-3">
                <label for="radio2">Recover</label>
              </div>
            </div>
            <div class="card_info" id="card_info">
              <div class="d-block d-md-flex mb-3 ">
                <input type="text" placeholder="Card Number" class="form-control me-3 rounded-1 mb-2 mb-sm-0">
                <input type="text" placeholder="Card Holder" class="form-control rounded-1">
              </div>
              <div class="d-md-flex  mb-3 d-block">
                <input type="text" placeholder="CVC" class="form-control me-3  rounded-1 mb-2 mb-sm-0">
                <input type="text" placeholder="Expiry Month" class="form-control rounded-1">
              </div>
              <input type="text" placeholder="Expiry Year" class="form-control mt-3 mb-5 rounded-1">
            </div>
          </div>
          <div class="button d-block d-sm-flex">
            <input type="submit" value="Reserve" class="btn btn-info form-control rounded-1 mb-3 mb-sm-0"
              id="btn_reservation">
            <input type="submit" value="PayPal" id="paypal" class="btn btn-primary form-control rounded-1 ms-0 ms-sm-3"
              id="btn_paypal">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>