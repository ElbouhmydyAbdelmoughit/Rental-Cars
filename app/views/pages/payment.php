<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="container" id="payment">
  <div class="row col-6 mx-auto shadow rounded-2 my-5">
    <div class="col my-5 px-sm-5">
      <form action="<?= URLROOT ?>/Payments/Reserve/<?php echo $data['car']->id ?>" method="POST">
        <h3 class="title text-center mb-5 mt-0 fw-bold">Car Info</h3>
        <div class="info_car d-block d-md-flex mx-auto col-12">
          <div class="img col-12 col-sm-6">
            <img src="<?= URLROOT ?>/assets\img\<?php echo $data['car']->image; ?>"
              class="rounded-3 shadow-lg img-fluid mb-3 w-100" alt="">
          </div>
          <div class="info my-auto mx-auto text-center text-sm-start">
            <p>Model : <?php echo $data['car']->model; ?></p>
            <p>Name : <?php echo $data['car']->name; ?></p>
            <p>Price : <?php echo $data['car']->price; ?> $/D</p>
          </div>
        </div>
        <div class="info_client mt-3 text-center">
          <h3 class="title text-center my-5 fw-bold">Client Info</h3>
          <div class="inputBox mb-3">
            <input type="text" placeholder="CIN" name="cin"
              class="form-control <?php echo (!empty($data['cin_err'])) ? 'is-invalid' : ''; ?>"
              value="<?php echo $data['cin']; ?>" />
            <span class="invalid-feedback"><?php echo $data['cin_err']; ?></span>
          </div>
          <div class="inputBox mb-3">
            <input type="text" placeholder="Name" name="name"
              class="form-control <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>"
              value="<?php echo $data['name']; ?>" />
            <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
          </div>
          <div class="inputBox mb-3">
            <input type="email" placeholder="example@example.com" name="email"
              class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>"
              value="<?php echo $data['email']; ?>" />
            <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
          </div>
          <div class="inputBox mb-3">
            <input type="text" placeholder="Phone" name="phone"
              class="form-control <?php echo (!empty($data['phone_err'])) ? 'is-invalid' : ''; ?>"
              value="<?php echo $data['phone']; ?>" />
            <span class="invalid-feedback"><?php echo $data['phone_err']; ?></span>
          </div>
          <div class="inputBox mb-3">
            <input type="text" placeholder="Address" name="address"
              class="form-control <?php echo (!empty($data['address_err'])) ? 'is-invalid' : ''; ?>"
              value="<?php echo $data['address']; ?>" />
            <span class="invalid-feedback"><?php echo $data['address_err']; ?></span>
          </div>
          <div class="flex">
            <div class="inputBox mb-3">
              <input type="date" class="form-control" name="date">
            </div>
            <div class="radio d-sm-flex">
              <div class="pay-method inputRadio mb-3 text-center text-sm-start mt-5 " id="methpd_payment">
                <small class="text-start text-sm-start mb-3 d-block">Payment Method ?</small>
                <input type="radio" name="payment_method" id="radio1" value="card" checked>
                <label for="radio1" class="me-2">Card</label>
                <input type="radio" name="payment_method" id="radio2" class="ms-2" value="cash">
                <label for="radio2">Cash</label>
              </div>
              <div class="inputRadio mb-3 text-center text-sm-end mt-5 ms-sm-5 mb-5" id="methpd_payment">
                <small class="text-start text-sm-start mb-3 d-block ms-4">Delivery Method ?</small>
                <input type="radio" name="delivery_method" id="radio1" class="ms-3" value="delivery">
                <label for="radio1" class="">Delivery</label>
                <input type="radio" name="delivery_method" id="radio2" class="ms-3" value="recover" checked>
                <label for="radio2">Recover</label>
              </div>
            </div>
            <div class="card_info" id="card_info">
              <div class="d-block d-md-flex mb-3 ">
                <input type="text" placeholder="Card Number" name="card_number"
                  class="form-control me-3 rounded-1 mb-2 mb-sm-0  <?php echo (!empty($data['card_number_err'])) ? 'is-invalid' : ''; ?>  "
                  value="<?php echo $data['card_number']; ?>">
                <span class="invalid-feedback"><?php echo $data['card_number_err']; ?></span>
                <input type="text" placeholder="Card Holder" name="card_holder"
                  class="form-control rounded-1 <?php echo (!empty($data['card_holder_err'])) ? 'is-invalid' : ''; ?>  "
                  value="<?php echo $data['card_holder']; ?>">
                <span class="invalid-feedback"><?php echo $data['card_holder_err']; ?></span>
              </div>
              <div class="d-md-flex  mb-3 d-block">
                <input type="text" placeholder="CVC" name="cvc"
                  class="form-control me-3  rounded-1 mb-2 mb-sm-0 <?php echo (!empty($data['cvc_err'])) ? 'is-invalid' : ''; ?>  "
                  value="<?php echo $data['cvc']; ?>">
                <span class="invalid-feedback"><?php echo $data['cvc_err']; ?></span>
                <input type=" text" placeholder="Expiry Month" name="expiry_month"
                  class="form-control rounded-1 <?php echo (!empty($data['expiry_month_err'])) ? 'is-invalid' : ''; ?>  "
                  value="<?php echo $data['expiry_month']; ?>">
                <span class="invalid-feedback"><?php echo $data['expiry_month_err']; ?></span>
              </div>
              <input type="text" placeholder="Expiry Year" name="expiry_year"
                class="form-control mt-3 rounded-1 <?php echo (!empty($data['expiry_year_err'])) ? 'is-invalid' : ''; ?>  "
                value="<?php echo $data['expiry_year']; ?>">
              <span class="invalid-feedback"><?php echo $data['expiry_year_err']; ?></span>
            </div>
          </div>
          <div class="button d-block d-sm-flex mt-5">
            <input type="submit" value="Reserve" name="submit"
              class="btn btn-info form-control rounded-1 mb-3 mb-sm-0 mt-sm-0" id="btn_reservation">
            <a href="https://www.paypal.com/myaccount/summary" target="_blank" name="paypal" id="paypal"
              class="btn ms-0 ms-sm-3 rounded-1">
              <!-- <input type="submit" value="PayPal"  
                class="btn btn-primary form-control rounded-1 " id="btn_paypal"> -->
              Paypal
            </a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>