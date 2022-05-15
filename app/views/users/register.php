<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body bg-light mt-5">
        <h2>Create An Account</h2> 
        <p>Please fill out this form to register with us.</p>
        <form action="<?php echo URLROOT; ?>/users/register" method="POST">
          <div class="form-group mb-3">
            <label for="name" class="form-label">Name: <sup>*</sup></label> 
            <input type="text" name="name" class="form-control form-control-lg <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['name']; ?>">
            <span class="invalid-feedback"><?php echo $data["name_err"]; ?></span>
          </div>
          <div class="form-group mb-3">
            <label for="email" class="form-label">Email: <sup>*</sup></label> 
            <input type="email" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
            <span class="invalid-feedback"><?php echo $data["email_err"]; ?></span>
          </div>
          <div class="form-group mb-3">
            <label for="password" class="form-label">Password: <sup>*</sup></label> 
            <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
            <span class="invalid-feedback"><?php echo $data["password_err"]; ?></span>
          </div>
          <div class="form-group mb-3">
            <label for="confirm_password" class="form-label">Confirm Password: <sup>*</sup></label> 
            <input type="password" name="confirm_password" class="form-control form-control-lg <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['confirm_password']; ?>">
            <span class="invalid-feedback"><?php echo $data["confirm_password_err"]; ?></span>
          </div>

          <div class="d-grid gap-2 d-md-block col-6">
            <input type="submit" value="Register" class="btn btn-success"> 
            <a href="<?php echo URLROOT; ?>/users/login" class="btn btn-light">Have an account? Login</a>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
