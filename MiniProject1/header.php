

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">RGMCETIANS</a>
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        
<?php

if(isset($_SESSION['usermail'])) {
  print " <li class=nav-item>
  <a class=nav-link href=main.php>All-Chat</a>
</li>";

  print ' <li class="nav-item">
  <a class="nav-link" href="mainB.php">Questionnaire</a>
</li>';

  

  print ' <li class="nav-item">
  <a class="nav-link" href="changepassword.php">Change Password</a>
</li>';
}

 

?>


<?php
if(isset($_SESSION['usermail']))
  print ' <li class="nav-item">
  <a class="nav-link" href="logout.php">Logout</a>
</li>';
?>
        
      </ul>
    </div>
  </div>
</nav>