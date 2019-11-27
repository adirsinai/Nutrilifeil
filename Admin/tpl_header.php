     <?php
     include "class_user_mngr.php";
     
?>
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">
            <?php if($selid==1){echo " Dashboard ";} ?>    
            <?php if($selid==2){echo " New Client ";} ?>
            <?php if($selid==3){echo " Customers ";} ?> 
            <?php if($selid==4){echo " Calculators ";} ?>    
            <?php if($selid==5){echo " Meals ";} ?>      
            <?php if($selid==6){echo " Calendar ";} ?>  
            </a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
              <?php
              if($_SESSION['username']==NULL){
    //haven't log in
    echo "You haven't log in";
    header('Location: http://www.nutrilifeil.com/');
}else{
    //Logged in
}?>
              <strong>Welcome</strong>&nbsp;(<?php echo $_SESSION['fname'];?> <?php echo $_SESSION['lname']; ?>) &nbsp;<strong><?php echo date("d/m/Y"); ?></strong>
            <ul class="navbar-nav">      
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://Nutrilifeil.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">1</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Soon...</a>
                </div>
              </li>
              <form method="POST">
              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" name="logout" href="http://nutrilifeil.com/logout.php" >Log out</a>
                </div>
              </li>
              </form>
                <li class="nav-item">
                <a class="nav-link" href="./dashboard.php">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              <!-- your navbar here -->
            </ul>
          </div>
        </div>
      </nav>

