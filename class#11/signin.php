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
            

              <?php if (isset($reg_Success)) {
                echo $reg_Success;
              }
              ?>
            
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
           
            <div class="from-group mb-3">
              <label for="Password" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="Password" value="<?php echo olddata('password') ?>">
            </div>       
            
            <button type="submit" class="btn btn-primary mt-3 py-2 px-3" name="submit">Submit</button>
            <button type="reset" class="btn btn-primary mt-3 py-2 px-3 ml-3" name="reset">Reset</button>
          </form>

        </div>
      </div>

    </div>
    </div>


    <?php require_once 'includes/footer.php'?>