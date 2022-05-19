<h2>hdgjasfg</h2>

  <?php
  //  Database connect

  
 

//  Database connect

  if (isset($_POST["submit"])) {
    $first_name = $_POST["first_name"] ;
    $last_name = $_POST["last_name"]; 
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password =$_POST["password"];
    $ConfirmPassword =$_POST["ConfirmPassword"];
    



    // if (empty($first_name) || empty($last_name) || empty($username) || empty($email) || empty($password)  || empty($ConfirmPassword)) {
    //   $validationalert = alert("All fields are required", "warning");
    // } else if (validEmail($email) == false) {
    //   $validationalert = alert("Email is not valid", "warning");
    // } elseif (edumail($email) == false) {
    //   $validationalert = alert("Email is not Edumail", "danger");
    // } else if ($password != $ConfirmPassword) {
    //   $validationalert = alert("wrong password", "danger");
    // } else {
    //   $validationalert = alert("Registration successfull", "success");
    
    // }

    
    

    if($password == $ConfirmPassword){
    
      $db_connect = mysqli_connect("localhost", "root", "", "lfwf_registration");
      $insert = "INSERT INTO `users`(`username`, `email`, `password`) VALUES ('$username', '$email', '$password')";
    $insert_query = mysqli_query($db_connect,$insert);
    }


  }

 
  ?>

  

