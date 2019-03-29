<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$tel      = "";
$amount   = "";
$chk1 = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'sbcrud');

// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $tel = mysqli_real_escape_string($db, $_POST['tel']);
  $amount = mysqli_real_escape_string($db, $_POST['amount']);
  $chk1 = mysqli_real_escape_string($db, $_POST['chk1']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
 
  

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {

      //encrypt the password before saving in the database
      $query = "INSERT INTO users (username, email, tel, amount, chk1) 
            VALUES('$username', '$email', '$tel','$amount', '$chk1')";
      mysqli_query($db, $query);
      $_SESSION['email'] = $email;
      $_SESSION['success'] = "You are now logged in";
      header('location: register.php');
  }
}


?>