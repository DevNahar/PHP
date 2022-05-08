
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
      <div class="card-body">
      <?php
      echo $_POST["first_name"] . " ";
      echo $_POST["last_name"];
      echo "<br>";
      echo $_POST["email"];
      echo "<br>";
      echo $_POST["ConfirmPassword"];
      // echo $_POST["name"]


      ?>
      
    </div>
  </div>
   

    </div>

  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>