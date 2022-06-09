<?php require APPROOT . '/views/inc/header.php'; ?>
<!-----------section landing page----------------->
<div class="container-fliud bg-white my-4" id="landingPage">
  <div class="d-flex col-12 text-md-wrap ">
    <!-----------section1 landing page text and button----------------->
    <div class="col-12 col-lg-6 text-start" id="section1_landing">
      <div class="contact_section1">
        <h1 class="col-11 text-wrap" id="text_primary_landing"><?= $data['title'] ?></h1>
        <button type="button" class="btn" id="btn_section1"> Continue</button>
      </div>
    </div>
    <!-----------section2 landing page image----------------->
    <div class="col-12 col-lg-6" id="section2_landing">
      <img src="assets/img/img-body.png" class=" d-none d-md-block " id="img_body_landing_page"
        alt="image landing page">
    </div>
  </div>
</div>
<div class="container" id="about" data-aos="fade-up" data-aos-duration="800">
  <div class="row col-12 text-wrap d-md-flex d-block">
    <div class="col-6" id="image_about">
      <img class="img-fluid w-100 img-responcive d-none d-md-block" src="assets/img/img_about.jpg" alt="image about"
        id="img">
    </div>
    <div class="col-12 col-md-6 text-start text-center text-md-start">
      <span>About Us</span>
      <h3 class="fw-bold my-2">Welcome to YOU<span>CAR</span></h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio et odit
        voluptatem
        repellendus vero cumque
        aliquam illo, magnam, id sapiente tenetur? Tempora, illum reiciendis suscipit error aperiam consequatur vitae
        eius.</p>
    </div>
  </div>
</div>
<div class="team " id="team">
  <div class="container">
    <div class="title text-center">
      <span>OUR TEAM</span>
      <h3 class="fw-bold my-5">This is Team Company YOU<span>CAR</span></h3>
    </div>
    <div class="cards">
      <div class="row text-center">
        <div class="col-sm-4 col-12">xxxx</div>
        <div class="col-sm-4 col-12">xxxx</div>
        <div class="col-sm-4 col-12">xxxx</div>
      </div>
    </div>
  </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>