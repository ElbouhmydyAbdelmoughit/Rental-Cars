<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="my-3 col-12 text-center mx-auto">
  <?php flash('register_success'); ?>
</div>
<div class="container">
  <!------section Login page----->
  <div id="container_fluid" class="container-fluid pt-4">
    <div id="contant" class="contant  col-12 d-flex">
      <div class=" col-lg-6 col-12 pe-3 ps-5 pt-4">
        <div>
          <h2 class="mt-2" id="text_login">Login</h2>
        </div>
        <form action="<?php echo URLROOT; ?>/users/login" method="POST" class="mb-5">
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" name="email" placeholder="Email"
              class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>"
              value="<?php echo $data['email']; ?>" />
            <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
          </div>
          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" name="password"
              class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>/>
            <span class=" invalid-feedback"><?php echo $data['password_err']; ?></span>
          </div>
          <!-- 2 column grid layout for inline styling -->
          <div class="row mb-4">
            <div class=" d-flex justify-content-start">
              <!-- Checkbox -->
              <div class="form-check text-start">
                <input class="form-check-input" type="checkbox" value="" id="remember_me" checked />
                <label class="form-check-label" for="remember_me"> Remember me </label>
              </div>
            </div>
          </div>
          <!-- Submit button -->
          <button type="submit" id="login" class="btn form-control  mb-4">Log in</button>
          <!-- Register buttons -->
          <div class="text-start mb-3">
            <p class="text-dark fst-italic text-wrap pb-3"><small> Not a member? <a href="<?= URLROOT ?>/users/register"
                  class="text-primary">Register</a></small></p>
          </div>
        </form>
      </div>
      <div class="col-lg-6 d-lg-block d-none">
        <img src="../public/assets/img/img_body_login.jpg" class="img-responsive w-100" id="img_login"
          alt="Image Body Login Page">
      </div>
    </div>
  </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>