<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  include "db.php"; 
  if(isset($_POST['email']) && isset($_POST['password'])){

$email= $_POST["email"];
$password = $_POST["password"];
  
        $query = "SELECT * FROM users1993 WHERE Email= '$email'";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result)==1){

        $row = mysqli_fetch_assoc($result);

        
    if(password_verify($password, $row['Password'])){
      $login = true;
      session_start();
           $_SESSION['user_email'] = $email;  
    header("Location: welcome.php");
            exit();
    }
    

else{
                 $_SESSION['message'] = "Incorrect Password";
    $_SESSION['type'] = "Error";
    }}
    else{
         $_SESSION['message'] = "User Not Found";
    $_SESSION['type'] = "Error";
    }}}

?>
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  
<body style="background-image:url('https://images.unsplash.com/photo-1617713964959-d9a36bbc7b52?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8NXx8fGVufDB8fHx8fA%3D%3D') ;">
  <?php 
  include "navbar.php";
  if(isset($_SESSION['message'])){
    $type= ($_SESSION['type']== "Error") ? "alert-danger" : "alert-success";
echo"<div class='alert $type mt-3 ' roll='alert'>".$_SESSION['message']."</div>";  
unset($_SESSION['message']); 
unset($_SESSION['type']);
}

  ?>
  <div style="margin: 5%  30%;">
    <h1 class="text-center mt-3">Welcome to Login page</h1>
    <br><br><br>
  <div class="container">
      <form method="POST">
  <div class="row mb-3">
    <label for="inputEmail3" class="col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" name="email">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class=" col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" name="password">
    </div>
  </div>
 
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
  </div>
  </div>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>