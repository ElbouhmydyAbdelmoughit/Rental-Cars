<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="container">
  <!------section Login page----->
  <div id="container_fluid" class="container-fluid pt-4">
    <div id="contant" class="contant  col-12 d-flex text-nowrap">
      <div class="col-lg-6 col-12 pe-3 ps-5 pt-4">
        <div>
          <h2 id="text_login">Login</h2>
        </div>
        <form>
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" placeholder="Email" name="email"
              class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>"
              value="<?php echo $data['email']; ?>" />
          </div>
          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" placeholder="Password" name="password"
              class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>"
              value="<?php echo $data['password']; ?>" />
            <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
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
          <button type="button" id="login" class="btn form-control  mb-4">Log in</button>
          <!-- Register buttons -->
          <div class="text-start">
            <p class="text-dark fst-italic"><small> If don't have accout <a href="<?= URLROOT ?>/users/register"
                  class="text-primary">Register</a>
                to
                create account
                !</small></p>
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