<?php require APPROOT . '/views/inc/header.php'; ?>
<!-----------section landing page----------------->
<div class="container-fliud bg-white my-4" id="landingPage">
  <div class="d-flex col-12">
    <!-----------section1 landing page text and button----------------->
    <div class="col-12 col-lg-6 " id="section1_landing">
      <div class="contact_section1">
        <h1 class="text-wrap" id="text_primary_landing"><?= $data['title'] ?></h1>
        <button type="button" class="btn" id="btn_section1"> Continue</button>
      </div>
    </div>
    <!-----------section2 landing page image----------------->
    <div class="col" id="section2_landing">
      <img src="assets/img/img-body.png" class="img-responsive d-md-block d-none" id="img_body_landing_page"
        alt="image landing page">
    </div>
  </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>