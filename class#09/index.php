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

  <?php
  // if(isset($_POST["submit"])){
  //       $first_name = $_POST["first_name"] ;
  //       $last_name = $_POST["last_name"];     
  //       $email = $_POST["email"];   
  //       $password = $_POST["password"];
  //       $ConfirmPassword = $_POST["ConfirmPassword"];



  //       if($first_name == "" || $last_name == "" || $email == "" || $first_name == "" || $password  == "" ||$ConfirmPassword == ""  ){
  //         echo "All fields are requird";
  //       }else{
  //         echo "Everything ok";
  //       }
  //     }


  ?>



  <div class="container ">
    <div class="row">

      <div class="card w-50 m-auto mt-5 p-5 bg-light">
        <div class="card-header text-center  bg-light">
          <button class="btn btn-primary  m-3 "><a class="text-white text-decoration-none " href="login.php">SIGNIN</a></button>
          <button class="btn btn-primary  m-3 "><a class="text-white text-decoration-none" href="index.php ">SIGNUP</a></button>    
          

        </div>
        <div class="card-body bg-light p-5">

          <form action="registraion.php" method="POST">
            <div class="row mb-3">
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
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" name="email" id="email">
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
              <input type="checkbox" class="form-check-input" name="check" id="exampleCheck1"  required>
              <label class="form-check-label" for="exampleCheck1">I accept the <a href="#">Terms of service</a> & <a href="#">privacy policy</a> .</label>
            </div>
            <button type="submit" class="btn btn-primary mt-5 py-2 px-5" name="submit">Submit</button>
          </form>

        </div>
      </div>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>