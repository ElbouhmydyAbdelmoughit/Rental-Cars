<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="row col-12" id="register">
  <div class="contant col-md-6 mx-auto">
    <div class="card card-body my-5">
      <h2>Create An Account</h2>
      <p>Please fill out this form to register with us</p>
      <form action="<?php echo URLROOT; ?>/users/register" method="post" data-parsley-validate="">
        <div class="form-group my-3">
          <label for="name">Name: <sup>*</sup></label>
          <input type="text" name="name"
            class="form-control form-control-lg <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>"
            value="<?php echo $data['name']; ?>" required="">
          <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
        </div>
        <div class="form-group my-3">
          <label for="email">Email: <sup>*</sup></label>
          <input type="email" name="email"
            class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>"
            value="<?php echo $data['email']; ?>" required="">
          <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
        </div>
        <div class="form-group my-3">
          <label for="password">Password: <sup>*</sup></label>
          <input type="password" name="password"
            class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>"
            value="<?php echo $data['password']; ?>" required="">
          <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
        </div>
        <div class="form-group my-3" id="confirm_password">
          <label for="confirm_password">Confirm Password: <sup>*</sup></label>
          <input type="password" name="confirm_password"
            class="form-control form-control-lg <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>"
            value="<?php echo $data['confirm_password']; ?>" required="">
          <span class="invalid-feedback"><?php echo $data['confirm_password_err']; ?></span>
        </div>

        <div class="row">
          <div class="col">
            <input type="submit" value="Register" class="btn" id="btn_register">
          </div>
          <div class="col mt-2">
            <small>Have an account?<a href="<?php echo URLROOT; ?>/users/login" class="link">Login</a></small>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>