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

  <!-- --- Assignment 10 -----
Project - Form Handling
Validate - Set Dismissable alert message
Validate - filter email or not 
Validate - valid email check function
Validate - edu email check function -->



  <?php

  /**
   * alert for show validation alert
   * 
   */
  function alert($alertmsg, $alertBgColor)
  {
    return "<div class=\"alert alert-{$alertBgColor} alert-dismissible fade show\" role=\"alert\">  {$alertmsg}        
    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
    ";
  }


  /**
   * validEmail For check valid email
   */
  function validEmail($validemail)
  {
    if (filter_var($validemail, FILTER_VALIDATE_EMAIL)) {
      return true;
    } else {
      return false;
    }
  }


  /**
   * edumail for filtering institution email addresses
   */

  function edumail($edumail)
  {
    $array_edumail = ['diu.edu.bd', 'brac.edu.bd', 'nsu.edu.bd'];
    $check_mail = explode("@", $edumail);
    if (in_array($check_mail[1], $array_edumail, 2)) {
      return true;
    } else {
      return false;
    }
  }


  /**
   * submitData for show submitted all data
   */

  function submitData($first_name, $last_name, $username, $email, $password, $ConfirmPassword)
  {
    $allData = "<div> <b>Your First Name : </b>  $first_name  <br> <b> Your Last Name :  </b>  $last_name <br><b> Username :  </b>$username <br> <b> Your Email : </b>  $email  <br><b>  Your Password : </b>  $password  <br> <b> ConfirmPassword : </b>  $ConfirmPassword <br><br><br> </div>";

    echo "<div class='card card wrap shadow w-30 mt-5 mb-3' style='width: 18rem;'>
            <div class='card-body'><h3 class='card-title '>Submit Data</h3>";

    return $allData;
  }



  if (isset($_POST["submit"])) {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $ConfirmPassword = $_POST["ConfirmPassword"];


    if (empty($first_name) || empty($last_name) || empty($username) || empty($email) || empty($password)  || empty($ConfirmPassword)) {
      $validationalert = alert("All fields are required", "warning");
    } else if (validEmail($email) == false) {
      $validationalert = alert("Email is not valid", "warning");
    } elseif (edumail($email) == false) {
      $validationalert = alert("Email is not Edumail", "danger");
    } else if ($password != $ConfirmPassword) {
      $validationalert = alert("wrong password", "danger");
    } else {
      $validationalert = alert("Registration successfull", "success");
    }
  }

  ?>



  <div class="container ">
    <div class="row">
      <div class="card wrap shadow w-50 m-auto mt-5 p-3 mb-3 bg-light">
        <div class="card-header text-center pb-4  bg-light">

          <h3>Registration Form</h3>

        </div>
        <div class="card-body bg-light p-5">
          <form action="" method="POST">
            <div class="row mb-3">

              <?php if (isset($validationalert)) {
                echo $validationalert;
              }
              ?>

              <div class="from-group col-lg-6 ">
                <label for="firstname" class="form-label">FirstName</label>
                <input type="text" class="form-control" name="first_name" id="firstname">
              </div>
              <div class="from-group col-lg-6 ">
                <label for="lastname" class="form-label">LastName</label>
                <input type="text" class="form-control" name="last_name" id="lastname">
              </div>
            </div>
            <div class="from-group mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control" name="username" id="username">
            </div>
            <div class="from-group mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="text" class="form-control" name="email" id="email">
            </div>
            <div class="from-group mb-3">
              <label for="Password" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="Password">
            </div>
            <div class=" from-group mb-3">
              <label for="ConfirmPassword" class="form-label">Confirm Password</label>
              <input type="password" class="form-control" name="ConfirmPassword" id="ConfirmPassword">
            </div>
            <div class=" from-group  mb-3 form-check">
              <input type="checkbox" class="form-check-input" name="check" id="exampleCheck1" required>
              <label class="form-check-label" for="exampleCheck1">I accept the <a href="#">Terms of service</a> & <a href="#">privacy policy</a> .</label>
            </div>
            <button type="submit" class="btn btn-primary mt-3 py-2 px-5" name="submit">Submit</button>
          </form>

        </div>
      </div>



      <?php
      if (isset($_POST["submit"]) && validEmail($email) == true && edumail($email) == true && $password == $ConfirmPassword) {
        echo submitData($first_name, $last_name, $username, $email, $password, $ConfirmPassword);
      }
      ?>
    </div>
  </div>

  </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>