<?php include "includes/admin_header.php" ?>



  <!-- container section start -->
  <section id="container" class="">
    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="admin_index.php" class="logo">Lodge Rent <span class="lite">Admin</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
              <input class="form-control" placeholder="Search" type="text">
            </form>
          </li>
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- task notificatoin start -->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatar-mini2.jpg">
                            </span>
                            <span class="username"><?php echo $_SESSION['username'] ?></span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="profile.php"><i class="icon_profile"></i> My Profile</a>
              </li>
              <li>
                <a href="logout.php"><i class="icon_key_alt"></i> Log Out</a>
              </li>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <?php include "includes/sidebar.php" ?>

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Welcome to admin 

            <small style=color:blue;><?php echo $_SESSION['username'] ?></small>

          </h3>

            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="admin_index">Home</a></li>
              <li><i class="fa fa-laptop"></i>Dashboard</li>
            </ol>
          </div>
        </div>

        <?php 
  if(isset($_SESSION['user_role']) && $_SESSION['user_role'] == 'admin' ) {

    ?>

        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box blue-bg">
              <i class="fa fa-cloud-download"></i>

              <?php 
               $query = "SELECT * FROM our_lodges ";
               $select_lodge = mysqli_query($connection, $query);
               $lodge_count = mysqli_num_rows($select_lodge); 

               echo "<div class='count'>{$lodge_count}</div>"
              
              ?>

              <div class="title">Lodges</div>
              <hr>
              <a href="lodge.php" style="color:white; background-color:#4e73df; padding:5px; border-radius:6px;font-size:20px; font-weight:300; text-decoration:none">View Details</a>
            </div>
            <!--/.info-box-->
             
            </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box brown-bg">
              <i class="fa fa-shopping-cart"></i>

              <?php 
              $query = "SELECT * FROM users WHERE user_role = 'agent' ";
              $select_agent = mysqli_query($connection, $query);
              $agent_counts = mysqli_num_rows($select_agent);
              
              echo "<div class='count'>{$agent_counts}</div>"
              
              ?>

              <div class="title">Agents</div>
              <hr>
              <a href="user.php?source=agent" style="color:white; background-color:#4e73df; padding:5px; border-radius:6px;font-size:20px; font-weight:300; text-decoration:none">View Details</a>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box dark-bg">
              <i class="fa fa-thumbs-o-up"></i>

              <?php 
              $query = "SELECT * FROM users WHERE user_role = 'student' ";
              $select_student = mysqli_query($connection, $query);
              $student_count = mysqli_num_rows($select_student);

              echo "<div class='count'>{$student_count}</div>";
              
              ?>

              <div class="title">Students</div>
              <hr>
              <a href="user.php?source=student" style="color:white; background-color:#4e73df; padding:5px; border-radius:6px;font-size:20px; font-weight:300; text-decoration:none">View Details</a>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box green-bg">
              <i class="fa fa-cubes"></i>

              <?php 
              $query = "SELECT * FROM our_lodges WHERE lodge_status = 'available' ";
              $select_free_lodge = mysqli_query($connection, $query);
              $free_lodge = mysqli_num_rows($select_free_lodge);

              echo "<div class='count'>{$free_lodge}</div>";
              
              ?>

              <div class="title">Free Lodges</div>
              <hr>
              <a href="lodge.php?source=avaliable_lodge" style="color:white; background-color:#4e73df; padding:5px; border-radius:6px;font-size:20px; font-weight:300; text-decoration:none">View Details</a>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box red-bg">
              <i class="fa fa-cubes"></i>

              <?php 
              $query = "SELECT * FROM our_lodges WHERE lodge_status = 'occupied' ";
              $occupied_lodges = mysqli_query($connection, $query);
              $occupied_lodges_counts = mysqli_num_rows($occupied_lodges);

              echo "<div class='count'>{$occupied_lodges_counts}</div>";
              
              ?>

              <div class="title">Occupied Lodges</div>
              <hr>
              <a href="lodge.php?source=occupied_lodge" style="color:white; background-color:#4e73df; padding:5px; border-radius:6px;font-size:20px; font-weight:300; text-decoration:none">View Details</a>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->
        </div>

          <?php } ?>

          <?php 
  if(isset($_SESSION['user_role']) && $_SESSION['user_role'] == 'agent' ) {

    ?>

        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box blue-bg">
              <i class="fa fa-cloud-download"></i>

              <?php 
               $query = "SELECT * FROM our_lodges ";
               $select_lodge = mysqli_query($connection, $query);
               $lodge_count = mysqli_num_rows($select_lodge); 

               echo "<div class='count'>{$lodge_count}</div>"
              
              ?>

              <div class="title">Lodges</div>
              <hr>
              <a href="lodge.php" style="color:white; background-color:#4e73df; padding:5px; border-radius:6px;font-size:20px; font-weight:300; text-decoration:none">View Details</a>
            </div>
            <!--/.info-box-->
             
            </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box brown-bg">
              <i class="fa fa-shopping-cart"></i>

              <?php 
              $query = "SELECT * FROM users WHERE user_role = 'agent' ";
              $select_agent = mysqli_query($connection, $query);
              $agent_counts = mysqli_num_rows($select_agent);
              
              echo "<div class='count'>{$agent_counts}</div>"
              
              ?>

              <div class="title">Agents</div>
              <hr>
              <a href="user.php?source=agent" style="color:white; background-color:#4e73df; padding:5px; border-radius:6px;font-size:20px; font-weight:300; text-decoration:none">View Details</a>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->
          
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box green-bg">
              <i class="fa fa-cubes"></i>

              <?php 
              $query = "SELECT * FROM our_lodges WHERE lodge_status = 'available' ";
              $select_free_lodge = mysqli_query($connection, $query);
              $free_lodge = mysqli_num_rows($select_free_lodge);

              echo "<div class='count'>{$free_lodge}</div>";
              
              ?>

              <div class="title">Free Lodges</div>
              <hr>
              <a href="lodge.php?source=avaliable_lodge" style="color:white; background-color:#4e73df; padding:5px; border-radius:6px;font-size:20px; font-weight:300; text-decoration:none">View Details</a>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box red-bg">
              <i class="fa fa-cubes"></i>

              <?php 
              $query = "SELECT * FROM our_lodges WHERE lodge_status = 'occupied' ";
              $occupied_lodges = mysqli_query($connection, $query);
              $occupied_lodges_counts = mysqli_num_rows($occupied_lodges);

              echo "<div class='count'>{$occupied_lodges_counts}</div>";
              
              ?>

              <div class="title">Occupied Lodges</div>
              <hr>
              <a href="lodge.php?source=occupied_lodge" style="color:white; background-color:#4e73df; padding:5px; border-radius:6px;font-size:20px; font-weight:300; text-decoration:none">View Details</a>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->
        </div>

          <?php } ?>

          <?php 
  if(isset($_SESSION['user_role']) && $_SESSION['user_role'] == 'student' ) {

    ?>

        <div class="row">

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box green-bg">
              <i class="fa fa-cubes"></i>

              <?php 
              $query = "SELECT * FROM our_lodges WHERE lodge_status = 'available' ";
              $select_free_lodge = mysqli_query($connection, $query);
              $free_lodge = mysqli_num_rows($select_free_lodge);

              echo "<div class='count'>{$free_lodge}</div>";
              
              ?>

              <div class="title">Free Lodges</div>
              <hr>
              <a href="lodge.php?source=avaliable_lodge" style="color:white; background-color:#4e73df; padding:5px; border-radius:6px;font-size:20px; font-weight:300; text-decoration:none">View Details</a>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box red-bg">
              <i class="fa fa-cubes"></i>

              <?php 
              $query = "SELECT * FROM our_lodges WHERE lodge_status = 'occupied' ";
              $occupied_lodges = mysqli_query($connection, $query);
              $occupied_lodges_counts = mysqli_num_rows($occupied_lodges);

              echo "<div class='count'>{$occupied_lodges_counts}</div>";
              
              ?>

              <div class="title">Occupied Lodges</div>
              <hr>
              <a href="lodge.php?source=occupied_lodge" style="color:white; background-color:#4e73df; padding:5px; border-radius:6px;font-size:20px; font-weight:300; text-decoration:none">View Details</a>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->
        </div>

          <?php } ?>
          
        <!--/.row-->
      </section>
      

<?php include "includes/admin_footer.php" ?>