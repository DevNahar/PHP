
  <!-- --- Assignment 11 -----
Project - Form Handling
Validate - age validate function
Validate - username validate function
Validate - keep old data in fields.
Validate - clear field data after success
Validate - auto suggestion off
Field - radio button
Field - Checkbox field
Field - select option field
------------>


  <?php

require_once 'includes/header.php';
require_once 'db.php';
require_once 'registration.php';

?>



  <div class="container ">
    <div class="row">
      <div class="card wrap shadow w-50 m-auto mt-5 p-3 mb-3 bg-light">
        <div class="card-header text-center pb-4  bg-light">
          <h3>REGISTRATION FORM</h3>
          <div class="mt-3">
            <button class=" btn btn-primary mx-1 "> <a class="text-decoration-none text-white" href="index.php">SignUp</a></button>
            <!-- <button class=" btn btn-primary mx-1 "><a class="text-decoration-none text-white" href="signin.php">SignIn</a></button> -->
            <button class=" btn btn-primary mx-1 "><a class="text-decoration-none text-white" href="user.php">User
                List</a></button>
          </div>

        </div>
        <div class="card-body bg-light p-5">

          <form action="" method="POST">
            <div class="row mb-3">

              <?php if (isset($reg_Success)) {
                echo $reg_Success;
              }
              ?>

              <div class="from-group col-lg-6 ">
                <label for="firstname" class="form-label">FirstName</label>
                <input type="text" class="form-control" name="first_name" id="firstname" value="<?php echo olddata('first_name') ?>">
                <div><span style="color: red;"><?php echo $firstname_err ?></span></div>
              </div>
              <div class="from-group col-lg-6 ">
                <label for="lastname" class="form-label">LastName</label>
                <input type="text" class="form-control" name="last_name" id="lastname" value="<?php echo olddata('last_name') ?>">
                <div><span style="color: red;"><?php echo $lastname_err ?></span></div>
              </div>
            </div>
            <div class="from-group mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control" name="username" id="username" value="<?php echo olddata('username') ?>">
              <div><span style="color: red;"><?php echo $username_err ?></span></div>
            </div>
            <div class="from-group mb-3 ">
              <label for="email" class="form-label">Email</label>
              <input type="text" class="form-control" name="email" id="email" value="<?php echo olddata('email') ?>">
              <div><span style="color: red;"><?php echo $email_err ?></span></div>
            </div>
            <div class="row mb-3">
              <div class="from-group col-lg-6 ">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control" name="age" id="age" value="<?php echo olddata('age') ?>">
                <div><span style="color: red;"><?php echo $age_err ?></span></div>
              </div>
              <div class="from-group col-lg-6 ">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" name="phone" id="phone" value="<?php echo olddata('phone') ?>">
              </div>
            </div>


            <div class="from-group mb-3">
              <label for="Password" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="Password" value="<?php echo olddata('password') ?>">
            </div>
            <div class=" from-group mb-3">
              <label for="ConfirmPassword" class="form-label">Confirm Password</label>
              <input type="password" class="form-control" name="ConfirmPassword" id="ConfirmPassword" value="<?php echo olddata('ConfirmPassword') ?>">
              <div><span style="color: red;"><?php echo $pass_err ?></span></div>
            </div>
            <div class="row mb-5">
              <div class="from-group col-lg-6 ">
                <label for="gender" class="form-label">Gender</label><br>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                  <label class="form-check-label" for="male">
                    Male
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                  <label class="form-check-label" for="female">
                    Female
                  </label>
                  <div><span style="color: red;"><?php echo $gender_err ?></span></div>
                </div>
              </div>

              <div class="col-lg-6 mt-3">
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" >
                  <option selected>Select Country</option>
                  <option value="Bangladesh">Bangladesh</option>
                  <option value="Canada">Canada</option>
                  <option value="spain">spain</option>
                </select>
              </div>

            </div>


            <div class=" from-group  mb-3 form-check">
              <input type="checkbox" class="form-check-input" name="check" id="exampleCheck1" value="yes">
              <label class="form-check-label" for="exampleCheck1">I accept the <a href="#">Terms of service</a> & <a href="#">privacy policy</a> .</label>
              <div><span style="color: red;"><?php echo $agree_err ?></span></div>
            </div>
            <button type="submit" class="btn btn-primary mt-3 py-2 px-3" name="submit">Submit</button>
            <button type="reset" class="btn btn-primary mt-3 py-2 px-3 ml-3" name="reset">Reset</button>
          </form>

        </div>
      </div>

    </div>
  </div>




<?php require_once 'includes/footer.php'?>