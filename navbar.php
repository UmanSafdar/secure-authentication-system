<?php
      
      if(isset($_SESSION['user_email'])){
        $currentpage = basename($_SERVER['PHP_SELF']);
        $loggedin = true;
      }
      ?> 
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><strong>Login System</strong></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?php if($currentpage == 'login.php')  echo 'active'; ?>" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($currentpage == 'signup.php')  echo 'active'; ?>" href="signup.php">Signup</a>
        </li>
        <?php if($loggedin)
        { ?>
           <li class="nav-item">
          <a class="nav-link <?php if($currentpage == 'welcome.php')  echo 'active'; ?>" href="welcome.php">Welcome</a>
        </li> ";
         
        <li class="nav-item">
          <a class="nav-link <?php if($currentpage == 'logout.php')  echo 'active'; ?>" href="logout.php">Logout</a>
        </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>

