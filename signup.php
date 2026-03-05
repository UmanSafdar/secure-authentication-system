<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
include "db.php";  
$email= $_POST["email"];
$password = $_POST["password"];
$hash_password = password_hash($password, PASSWORD_DEFAULT);
$cpassword = $_POST["confirm_password"];

$query = "SELECT * FROM users1993 WHERE Email= '$email'";
$result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)== 0){
          if($password==$cpassword){
            $sql = "INSERT INTO users1993 (Email, Password,dt) VALUES (
            '$email', '$hash_password', current_timestamp())";
 if(mysqli_query($conn,$sql)){
    $_SESSION['message'] = "Account created successfully!";
    $_SESSION['type'] = "Success";
    
  }
   else{
         $y = "Error".mysqli_error($conn);
        }}
else {
        $_SESSION['message'] = "Password does not match";
        $_SESSION['type'] = "Error";
        
        
  }}
else {
      $_SESSION['message'] = "Email already Registered!";
      $_SESSION['type'] = "Error";
}
 header("Location: signup.php");
    exit();
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <?php 
  include "navbar.php";
  ?>
<?php
     
 
  if(isset($_SESSION['message'])){
    $type= ($_SESSION['type']== "Success") ? "alert-success" : "alert-danger";
echo"<div class='alert $type mt-3 ' roll='alert'>".$_SESSION['message']."</div>";  
unset($_SESSION['message']); 
unset($_SESSION['type']);
}
  


?>
    <div style="margin: 5%  30%;">
    <form method="POST">

        <div class="mb-3">
            <label for="em" class="form-label">Email</label>
            <input type="email" class="form-control w-70" id="em" name="email" required>
        </div>

        <div class="mb-3">
            <label for="pwd" class="form-label">Password</label>
            <input type="password" class="form-control w-70" id="pwd" name="password" required>
        </div>

        <div class="mb-3">
            <label for="cpwd" class="form-label">Confirm Password</label>
            <input type="password" class="form-control w-70" id="cpwd" name="confirm_password" required>
        </div>

        <button type="submit" class="btn btn-primary w-50">Sign Up</button>

    </form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>