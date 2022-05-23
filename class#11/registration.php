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
      
       //insert_query

     
    $insert = "INSERT INTO `users`(`Firstname`,`Lastname`,`Username`, `Email`, `Phone`, `Age`, `Gender`, `Password`   ) VALUES ('$first_name', '$last_name', '$username', '$email', '$phone', '$age', '$gender','$password')";
    $insert_query = mysqli_query($db_connect, $insert);

    //insert_query
    $_POST = '';

    }
  }


  ?>
