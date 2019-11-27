      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item
              <?php if($selid==1){echo " active ";} ?>
              ">
            <a class="nav-link" href="./dashboard.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item 
              <?php if($selid==2){echo " active ";} ?>
                ">
            <a class="nav-link" href="./user.php">
              <i class="material-icons">person</i>
              <p>New Client</p>
            </a>
          </li>
          <li class="nav-item
              <?php if($selid==3){echo " active ";} ?>
              ">
            <a class="nav-link" href="./customers.php">
              <i class="material-icons">content_paste</i>
              <p>Customers</p>
            </a>
          </li>
          <li class="nav-item
               <?php if($selid==4){echo " active ";} ?>             
              ">
            <a class="nav-link" href="./calculators.php">
              <i class="material-icons">library_books</i>
              <p>Calculators</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./meals.php">
              <i class="material-icons">bubble_chart</i>
              <p>Meals</p>
            </a>
          </li>
          <li class="nav-item 
               <?php if($selid==6){echo " active ";} ?>
              ">
            <a class="nav-link" href="./calendar.php">
              <i class="material-icons">location_ons</i>
              <p>Calendar</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./notifications.php">
              <i class="material-icons">notifications</i>
              <p>Notifications</p>
            </a>
          </li>
          <!-- your sidebar here -->
        </ul>
      </div>
