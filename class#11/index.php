<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Registration</title>
</head>

<body>

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


  /**
   * olddata for show 
   * 
   */
  function olddata($allfield)
  {
    if (isset($_POST[$allfield])) {
      return $_POST[$allfield];
    } else {
      return "";
    }
  }





  //Database connect

  define("hostname", "localhost");
  define("host_user_name", "root");
  define("host_password", "");
  define("db_name", "lfwf_registration");

  $db_connect = mysqli_connect(hostname, host_user_name, host_password, db_name);

  //Database 

  $firstname_err = $lastname_err = $username_err = $email_err = $pass_err = $age_err = $gender_err = $agree_err = "";
  $agree_err = "";
  $check = "";
  $flag = true;

  if (isset($_POST["submit"])) {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $age = $_POST["age"];
    $password = $_POST["password"];
    $ConfirmPassword = $_POST["ConfirmPassword"];

    $gender = "";
    if (isset($_POST["gender"])) {
      $gender = $_POST["gender"];
    }

    if (isset($_POST["check"])) {
      $check = $_POST["check"];
    }



    //insert_query

    $insert = "INSERT INTO `users`(`username`, `email`, `password`) VALUES ('$username', '$email', '$password')";
    $insert_query = mysqli_query($db_connect, $insert);

    //insert_query




    if (empty($_POST["first_name"])) {

      $firstname_err = "First name is required";
      $flag = false;
    } else {
      $firstname_err = "";
    }
    if (empty($_POST["last_name"])) {
      $lastname_err = "last name is required";
      $flag = false;
    } else {

      $lastname_err = "";
    }
    if (empty($_POST["username"])) {
      $username_err = "Username is required";
      $flag = false;
    } else if (!preg_match("/^\w{5,20}$/", $username)) {
      $username_err = "only letter & number allow(min5&max20word)";
      $flag = false;
    } else {
      $username_err = "";
    }

    if (empty($_POST["email"])) {
      $email_err = "Email is required";
      $flag = false;
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_err =  "email formate not valid";
      $flag = false;
    } else {
      $email_err = "";
    }

    if ($_POST["age"] > 60 || $_POST["age"] < 20) {
      $age_err = "You are not perfect in this course";
      $flag = false;
    } else {
      $age_err = "";
    }
    if ($password != $ConfirmPassword) {
      $pass_err = "ConfirmPassword wrong ";
      $flag = false;
    } else {
      $pass_err = "";
    }
    if (empty($gender)) {
      $gender_err = "gender is required";
      $flag = false;
    } else {
      $gender_err = "";
    }
    if ($check == "yes") {
      $check = $check;
    } else {
      $agree_err = "Please agree terms & condition";
      $flag = false;
    }


    if ($flag) {
      $reg_Success = "<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\"> Registration Successful <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button> </div>";
      $_POST = '';
    }
  }


  ?>



  <div class="container ">
    <div class="row">
      <div class="card wrap shadow w-50 m-auto mt-5 p-3 mb-3 bg-light">
        <div class="card-header text-center pb-4  bg-light">
          <h3>REGISTRATION FORM</h3>
          <div class="mt-3">
            <button class=" btn btn-primary mx-1 "> <a class="text-decoration-none text-white" href="">SignUp</a></button>
            <button class=" btn btn-primary mx-1 "><a class="text-decoration-none text-white" href="">SignIn</a></button>
            <button class=" btn btn-primary mx-1 "><a class="text-decoration-none text-white" href="">User
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
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
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





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>

</body>

</html>