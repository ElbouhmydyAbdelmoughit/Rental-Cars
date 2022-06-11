<?php require APPROOT . '/views/inc/header.php'; ?>
<!-- ================= section Landing page ===================-->
<div class="home container-fliud bg-white my-4" id="landingPage">
  <div class="d-flex col-12 text-md-wrap ">
    <div class="col-12 col-lg-6 text-start" id="section1_landing">
      <div class="contact_section1">
        <h1 class="col-11 text-wrap" id="text_primary_landing"><?= $data['title'] ?></h1>
        <button type="button" class="btn" id="btn_section1"> Continue</button>
      </div>
    </div>
    <div class="col-12 col-lg-6" id="section2_landing">
      <img src="assets/img/img-body.png" class=" d-none d-md-block " id="img_body_landing_page" alt="image landing page">
    </div>
  </div>
</div>
<!-- ================= section About page ===================-->
<div class="container" id="about" data-aos="fade-up" data-aos-duration="1000">
  <div class="row col-12 text-wrap d-md-flex d-block">
    <div class="col-6" id="image_about">
      <img class="img-fluid w-100 img-responcive d-none d-md-block" src="assets/img/img_about.jpg" alt="image about" id="img">
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
<!-- ================= section Our Team page ===================-->
<div class="team text-center py-5" id="team" data-aos="fade-up" data-aos-duration="1000">
  <div class="container text-center">
    <div class="row title">
      <span>OUR TEAM</span>
      <h3 class="fw-bold my-5">This is Team Company YOU<span>CAR</span></h3>
    </div>
    <div class="row text-center">
      <div class="contant_card col-12 col-lg-3 col-md-6">
        <div class="card">
          <div class="card-body">
            <img src="assets\img\team1.jpg" alt="image team" class="img-fluid  w-50">
            <h3 class="">John Smith</h3>
            <h5 class="">UI/UX Designer</h5>
            <div class="icons d-flex align-contant-center justify-content-center">
              <li><i class="fa-brands fa-facebook-f"></i></li>
              <li><i class="bi bi-instagram"></i></li>
              <li><i class="fa-brands fa-linkedin-in"></i></li>
            </div>
          </div>
        </div>
      </div>
      <div class="contant_card col-12 col-lg-3 col-md-6">
        <div class="card">
          <div class="card-body">
            <img src="assets\img\team4.jpg" alt="image team" class="img-fluid  w-50">
            <h3 class="">John Smith</h3>
            <h5 class="">UI/UX Designer</h5>
            <div class="icons d-flex align-contant-center justify-content-center">
              <li><i class="fa-brands fa-facebook-f"></i></li>
              <li><i class="bi bi-instagram"></i></li>
              <li><i class="fa-brands fa-linkedin-in"></i></li>
            </div>
          </div>
        </div>
      </div>
      <div class="contant_card col-12 col-lg-3 col-md-6">
        <div class="card">
          <div class="card-body">
            <img src="assets\img\team2.jpg" alt="image team" class="img-fluid  w-50">
            <h3 class="">John Smith</h3>
            <h5 class="">UI/UX Designer</h5>
            <div class="icons d-flex align-contant-center justify-content-center">
              <li><i class="fa-brands fa-facebook-f"></i></li>
              <li><i class="bi bi-instagram"></i></li>
              <li><i class="fa-brands fa-linkedin-in"></i></li>
            </div>
          </div>
        </div>
      </div>
      <div class="contant_card col-12 col-lg-3 col-md-6">
        <div class="card">
          <div class="card-body">
            <img src="assets\img\team3.jpg" alt="image team" class="img-fluid  w-50">
            <h3 class="">John Smith</h3>
            <h5 class="">UI/UX Designer</h5>
            <div class="icons d-flex align-contant-center justify-content-center">
              <li><i class="fa-brands fa-facebook-f"></i></li>
              <li><i class="bi bi-instagram"></i></li>
              <li><i class="fa-brands fa-linkedin-in"></i></li>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- ================= section All Cars page ===================-->
<div class="" id="cars" data-aos="fade-up" data-aos-duration="1000">
  <div class="container text-center mb-5">
    <div class="title">
      <h3 class="fw-bold my-5">All Cars</h3>
    </div>
    <div class="row text-center mb-5">
      <div class="contant_cars col-12 col-lg-3 col-md-6 text-start">
        <div class="cars shadow rounded-3">
          <img class="card-img-top rounded-top" src="assets\img\Range_Sport.jpg" alt="Card image Range Rover Sport">
          <div class="card-body px-3 pb-3">
            <span>2023</span>
            <h5>Range Rover Sport</h5>
            <p>100 $/D</p>
            <a href="#" class="btn btn-info">Rent Now</a>
          </div>
        </div>
      </div>
      <div class="contant_cars col-12 col-lg-3 col-md-6 text-start">
        <div class="cars shadow rounded-3">
          <img class="card-img-top rounded-top" src="assets\img\Range_Sport.jpg" alt="Card image Range Rover Sport">
          <div class="card-body px-3 pb-3">
            <span>2023</span>
            <h5>Range Rover Sport</h5>
            <p>100 $/D</p>
            <a href="#" class="btn btn-info">Rent Now</a>
          </div>
        </div>
      </div>
      <div class="contant_cars col-12 col-lg-3 col-md-6 text-start">
        <div class="cars shadow rounded-3">
          <img class="card-img-top rounded-top" src="assets\img\Range_Sport.jpg" alt="Card image Range Rover Sport">
          <div class="card-body px-3 pb-3">
            <span>2023</span>
            <h5>Range Rover Sport</h5>
            <p>100 $/D</p>
            <a href="#" class="btn btn-info">Rent Now</a>
          </div>
        </div>
      </div>
      <div class="contant_cars col-12 col-lg-3 col-md-6 text-start">
        <div class="cars shadow rounded-3">
          <img class="card-img-top rounded-top" src="assets\img\Range_Sport.jpg" alt="Card image Range Rover Sport">
          <div class="card-body px-3 pb-3">
            <span>2023</span>
            <h5>Range Rover Sport</h5>
            <p>100 $/D</p>
            <a href="#" class="btn btn-info">Rent Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>