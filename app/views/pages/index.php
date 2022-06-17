<?php require APPROOT . '/views/inc/header.php'; ?>
<!-- ================= section Landing page ===================-->
<div id="landing_page" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="600">
  <div class="home container-fliud bg-white my-4" id="landingPage">
    <div class="d-flex col-12 text-md-wrap ">
      <div class="col-12 col-lg-6 text-start" id="section1_landing">
        <div class="contact_section1">
          <h1 class="col-11 text-wrap" id="text_primary_landing"><?= $data['title'] ?></h1>
          <button type="button" class="btn" id="btn_section1"> Continue</button>
        </div>
      </div>
      <div class="col-12 col-lg-6" id="section2_landing">
        <img src="assets/img/img-body.png" class=" d-none d-md-block " id="img_body_landing_page"
          alt="image landing page">
      </div>
    </div>
  </div>
  <!-- ================= section About page ===================-->
  <div class="container" id="about" data-aos="fade-up" data-aos-duration="1000">
    <div class="row col-12 text-wrap d-md-flex d-block">
      <div class="col-6" id="image_about">
        <img class="img-fluid  d-none d-md-block" src="assets/img/img-body_copy.png" alt="image about" id="img">
      </div>
      <div class="contant_about col-12 col-md-6 text-start text-center text-md-start">
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
          <img src="https://i.imgur.com/hczKIze.jpg" alt="image team" class=" img-thumbnail">
          <div class="card-body mt-0 pt-0">
            <h3 class="text-wrap">Florian Smith</h3>
            <h5 class="text-wrap">Designer Web</h5>
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
          <img src="assets\img\team8.webp" alt="image team" class="img-thumbnail">
          <div class="card-body mt-0 pt-0">
            <h3 class="text-wrap">Alessia Stasi</h3>
            <h5 class="text-wrap">RH</h5>
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
          <img src="assets\img\team7.jpg" alt="image team" class="img-thumbnail">
          <div class="card-body mt-0 pt-0">
            <h3 class="text-wrap">Karina Doroni</h3>
            <h5 class="text-wrap">Back-End laravel</h5>
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
          <img src="assets\img\team5.jpg" alt="image team" class="img-thumbnail">
          <div class="card-body mt-0 pt-0">
            <h3 class="text-wrap">John Smith</h3>
            <h5 class="text-wrap">Frant-End</h5>
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
            <a href="<?php echo URLROOT; ?>/pages/payment" class="btn">Rent Now</a>
          </div>
        </div>
      </div>
      <div class="contant_cars col-12 col-lg-3 col-md-6 text-start">
        <div class="cars shadow rounded-3">
          <img class="card-img-top rounded-top" src="assets\img\mercedes1.jpeg" alt="Card image Range Rover Sport">
          <div class="card-body px-3 pb-3">
            <span>2021</span>
            <h5>Mercedes E 63s</h5>
            <p>220 $/D</p>
            <a href="<?php echo URLROOT; ?>/pages/payment" class="btn">Rent Now</a>
          </div>
        </div>
      </div>
      <div class="contant_cars col-12 col-lg-3 col-md-6 text-start">
        <div class="cars shadow rounded-3">
          <img class="card-img-top rounded-top" src="assets\img\mercedes2.jpeg" alt="Card image Range Rover Sport">
          <div class="card-body px-3 pb-3">
            <span>2021</span>
            <h5>Mercedes GLE AMG</h5>
            <p>300 $/D</p>
            <a href="<?php echo URLROOT; ?>/pages/payment" class="btn">Rent Now</a>
          </div>
        </div>
      </div>
      <div class="contant_cars col-12 col-lg-3 col-md-6 text-start">
        <div class="cars shadow rounded-3">
          <img class="card-img-top rounded-top" src="assets\img\Mini_Cooper.jpg" alt="Card image Range Rover Sport">
          <div class="card-body px-3 pb-3">
            <span>2020</span>
            <h5>Mini Cooper</h5>
            <p>90 $/D</p>
            <a href="<?php echo URLROOT; ?>/pages/payment" class="btn">Rent Now</a>
          </div>
        </div>
      </div>
      <div class="contant_cars col-12 col-lg-3 col-md-6 text-start">
        <div class="cars shadow rounded-3">
          <img class="card-img-top rounded-top" src="assets\img\Ford_Mustang.jpg" alt="Card image Range Rover Sport">
          <div class="card-body px-3 pb-3">
            <span>2015</span>
            <h5>Ford Mustang</h5>
            <p>200 $/D</p>
            <a href="<?php echo URLROOT; ?>/pages/payment" class="btn">Rent Now</a>
          </div>
        </div>
      </div>
      <div class="contant_cars col-12 col-lg-3 col-md-6 text-start">
        <div class="cars shadow rounded-3">
          <img class="card-img-top rounded-top" src="assets\img\Audi_RS_6.jpg" alt="Card image Range Rover Sport">
          <div class="card-body px-3 pb-3">
            <span>2020</span>
            <h5>Audi RS 6</h5>
            <p>300 $/D</p>
            <a href="<?php echo URLROOT; ?>/pages/payment" class="btn">Rent Now</a>
          </div>
        </div>
      </div>
      <div class="contant_cars col-12 col-lg-3 col-md-6 text-start">
        <div class="cars shadow rounded-3">
          <img class="card-img-top rounded-top" src="assets\img\range_rover_velar.jpg"
            alt="Card image Range Rover Sport">
          <div class="card-body px-3 pb-3">
            <span>2022</span>
            <h5>Range Rover Velar</h5>
            <p>100 $/D</p>
            <a href="<?php echo URLROOT; ?>/pages/payment" class="btn">Rent Now</a>
          </div>
        </div>
      </div>
      <div class="contant_cars col-12 col-lg-3 col-md-6 text-start">
        <div class="cars shadow rounded-3">
          <img class="card-img-top rounded-top" src="assets\img\mercedes4.jpg" alt="Card image Range Rover Sport">
          <div class="card-body px-3 pb-3">
            <span>2022</span>
            <h5>Mercedes Class G</h5>
            <p>400 $/D</p>
            <a href="<?php echo URLROOT; ?>/pages/payment" class="btn">Rent Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ================= section Contact Us page ===================-->
<div class="contact" id="contact" data-aos="fade-up" data-aos-duration="1000">
  <div class="container">
    <section class="mb-4">
      <h2 class="h1-responsive fw-bold text-center my-4">Contact Us</h2>
      <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us
        directly. Our team will come back to you within
        a matter of hours to help you.</p>
      <div class="row">
        <div class="col-md-9 mb-md-0 mb-5">
          <form id="contact-form" name="contact-form" action="mail.php" method="POST">
            <div class="row">
              <div class="col-md-6 my-3">
                <div class="md-form mb-0">
                  <input type="text" id="name" name="name" class="form-control" placeholder="Name">
                </div>
              </div>
              <div class="col-md-6 my-3">
                <div class="md-form mb-0">
                  <input type="text" id="email" name="email" class="form-control" placeholder="Email">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 my-3">
                <div class="md-form mb-0">
                  <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject">
                </div>
              </div>
            </div>
            <div class="row my-3">
              <div class="col-md-12">
                <div class="md-form">
                  <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"
                    placeholder="Message"></textarea>
                </div>
              </div>
            </div>
          </form>
          <div class="button text-center text-md-left">
            <a hraf="#" class="btn form-control">Send</a>
          </div>
          <div class="status"></div>
        </div>
        <div class="info col-md-3 text-center">
          <ul class="list-unstyled mb-0">
            <li><i class="fas fa-map-marker-alt fa-2x"></i>
              <p>El Qods Mediouna, Casablanca, Maroc</p>
            </li>
            <li><i class="fas fa-phone mt-4 fa-2x"></i>
              <p>+ 212 658 668 319</p>
            </li>
            <li><i class="fas fa-envelope mt-4 fa-2x"></i>
              <p>contact@rentalcars.com</p>
            </li>
          </ul>
        </div>
      </div>
    </section>
  </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>