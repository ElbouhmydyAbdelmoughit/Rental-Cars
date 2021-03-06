<nav class="navbar navbar-expand-lg bg-white shadow" id="NAVBAR" data-aos="fade-down" data-aos-easing="linear"
  data-aos-duration="800">
  <div class="container">
    <a class="navbar-brand" href="<?= URLROOT ?>">
      <span class="fw-bold fs-2 d-flex">YOU <span id="text_logo">CAR</span></span>
    </a>
    <button class="navbar-toggler" id="icons_menu" type="button" data-bs-toggle="collapse" data-bs-target="#navbar_menu"
      aria-controls="navbar_menu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar_menu">
      <ul class="navbar-nav mx-auto me-0 mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#landing_page">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#team">Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#cars">All Cars</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact Us</a>
        </li>
        <?php
        if (isset($_SESSION['user_role'])) {

          if (!empty($_SESSION['user_role'] == 1)) { ?>
        <li class="nav-item">
          <a class="nav-link" href="<?= URLROOT ?>/cars/index">Dashboard</a>
        </li>
        <?php } else { ?>
        <li class="nav-item">
          <a class="nav-link" href="<?= URLROOT ?>/cars/index"></a>
        </li>
        <?php }
        } ?>
        <?php if (isset($_SESSION['user_id'])) : ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/users/logout">Logout</a>
        </li>
        <?php else : ?>
        <li class="nav-item">
          <a class="nav-link" href="<?= URLROOT ?>/users/register" id="btn_sigin">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= URLROOT ?>/users/login" id="btn_login">Login</a>
        </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>