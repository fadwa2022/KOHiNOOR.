<section class="vh-100 m-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 text-black">
                <div class="px-5 ms-xl-4" style=" display: flex;
    justify-content: center;
    align-content: center;">
                    <img src="<?php echo URLROOT; ?>/images/logo.png" alt="">
                    <span class="h1 fw-bold mb-0"><?php echo SITENAME; ?></span>
                </div>

                <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

                <form  style="width: 23rem; margin-top: 10%;" action="<?php echo URLROOT; ?>/users/register" method="POST">

                        <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Creat An Acount</h3>
                              <!-- name -->
                              <div class="form-outline mb-4">
                            <input type="text" name="name" id="form2Example18" class="form-control form-control-lg  <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['name']; ?>" required>
                            <div class="invalid-feedback"><?php echo $data['name_err']; ?></div>
                            <label class="form-label" for="form2Example18">Name</label>

                        </div>
                        <!-- email -->

                        <div class="form-outline mb-4">
                            <input type="email" name="email" id="form2Example18" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>"required>
                            <div class="invalid-feedback"><?php echo $data['email_err']; ?></div>
                            <label class="form-label" for="form2Example18">Email address</label>

                        </div>
                        <!-- password -->

                        <div class="form-outline mb-4">
                            <input type="password" name="password" id="form2Example28" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>"required>
                            <div class="invalid-feedback"><?php echo $data['password_err']; ?></div>
                            <label class="form-label" for="form2Example28">Password</label>
                        </div>
                            <!-- password confirm -->

                            <div class="form-outline mb-4">
                            <input type="password" name="confirm_password" id="" class="form-control form-control-lg <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['confirm_password']; ?>"required>
                             <div class="invalid-feedback"><?php echo $data['confirm_password_err']; ?></div>
                            <label class="form-label" for="form2Example28">Confirm password</label>
                        </div>

                        <div class="pt-1 mb-4">
                            <button  type="submit" class="btn btn-lg btn-block">Register</button>
                        </div>

                         <a href="<?php echo URLROOT; ?>/users/login"class="link-info">Have an account login?</a>

                    </form>

                </div>

            </div>
            <div class="col-sm-6 px-0 d-none d-sm-block">
                <img src="<?php echo URLROOT; ?>/images/imgreg.jpg" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
            </div>
        </div>
    </div>
</section>