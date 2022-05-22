<?php
require_once 'includes/header.php';
require_once 'db.php';

$select= "SELECT Id, Firstname, Lastname, Username, Email FROM users";
$select_query = mysqli_query($db_connect,$select);
foreach($select_query as $single_row){
   print_r($single_row);
   echo "<br>";
}
?>


  
    <div class="row">
      <div class="card wrap shadow w-50 m-auto mt-5 p-3 mb-3 bg-light">
        <div class="card-header text-center pb-4  bg-light">
          <h3>REGISTRATION FORM</h3>
          <div class="mt-3">
            <button class=" btn btn-primary mx-1 "> <a class="text-decoration-none text-white" href="index.php">SignUp</a></button>
            <button class=" btn btn-primary mx-1 "><a class="text-decoration-none text-white" href="signin.php">SignIn</a></button>
            <button class=" btn btn-primary mx-1 "><a class="text-decoration-none text-white" href="user.php">User
                List</a></button>
          </div>

        </div>
        <div class="card-body bg-light p-5">

        <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Firstname</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
    </tr>
  </thead>
  <tbody>
    
<?php
    
  ?>
<tr>
      <th scope="row"><?php ?></th>
      <td><?php ?></td>
      <td>Otto</td>
      <td>@mdo</td>

    </tr>
      <?php  ?>
     </tbody>
</table>

        </div>
      </div>

    </div>


  <?php require_once 'includes/footer.php'  ?>