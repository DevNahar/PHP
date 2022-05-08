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
  <div class="container  ">
    <div class="row">

      <div class="card w-50 m-auto mt-5 p-5 bg-light ">
      <div class="card-header text-center  bg-light mb-3">
          <h3>Submit Data</h3>

        </div>
        <div class="card-body">

          <?php
          if (isset($_POST["submit"])) {
            $first_name = $_POST["first_name"];
            $last_name = $_POST["last_name"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $ConfirmPassword = $_POST["ConfirmPassword"];



            if ($first_name == "" || $last_name == "" || $email == "" || $password  == "" || $ConfirmPassword == "") {
              $require =  "All fields are requird";
            } else {
              echo "Your First Name : " . $first_name . "<br>" . "Your Last Name : "  . $last_name . "<br>" . "Your Email : " . $email . "<br>" . "Your Password : " . $password . "<br>" . "ConfirmPassword : " . $ConfirmPassword;
            }
          }


          ?>


        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>