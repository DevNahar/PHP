

          <?php
          if (isset($_POST["submit"])) {
            $first_name = $_POST["first_name"];
            $last_name = $_POST["last_name"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $ConfirmPassword = $_POST["ConfirmPassword"];



            // if ($first_name == "" || $last_name == "" || $email == "" || $password  == "" || $ConfirmPassword == "") {
            //   $require =  "All fields are requird";
            // } else {
            //   echo "Your First Name : " . $first_name . "<br>" . "Your Last Name : "  . $last_name . "<br>" . "Your Email : " . $email . "<br>" . "Your Password : " . $password . "<br>" . "ConfirmPassword : " . $ConfirmPassword;
            // }

            if (empty($first_name) || empty($last_name) || empty($email) || empty($password)  || empty($ConfirmPassword)) {
              echo "All fields is required";
            }else if($password != $ConfirmPassword){
              echo "PASS THIK NAI";
            }else{
              echo "no";
            }
          }


          ?>

