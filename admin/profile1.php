<?php include "includes/admin_header.php" ?>

  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->

    <!--header end-->
    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.php" class="logo">Lodge Rent <span class="lite">Admin</span></a>
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
                <a href="#"><i class="icon_profile"></i> My Profile</a>
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

    <!-- SIDEBAR -->
    <?php include "includes/sidebar.php" ?>
    <!--sidebar end-->


    <?php 
    if(isset($_SESSION['username'])) {

  $username = $_SESSION['username'];

  $query = "SELECT * FROM users WHERE user_name = '{$username}' ";
  $select_user_profile_query = mysqli_query($connection, $query);

  while($row = mysqli_fetch_array($select_user_profile_query)) {

    $user_id = $row['user_id'];
    $user_name = $row['user_name'];
    $user_image = $row['user_image'];
    $user_password = $row['user_password'];
    $user_firstname = $row['user_firstname'];
    $user_lastname = $row['user_lastname'];
    $user_email = $row['user_email'];
    $user_role = $row['user_role'];

  }

}

if(isset($_POST['update_profile'])) {

  $user_name = $_POST['user_name'];
  $user_firstname = $_POST['user_firstname'];
  $user_lastname = $_POST['user_lastname'];
  $user_password = $_POST['user_password'];
  $user_image = $_FILES['image']['name'];
  $user_image_temp = $_FILES['image']['tmp_name'];
  $user_email = $_POST['user_email'];
  $user_role = $_POST['user_role'];
  
  move_uploaded_file($user_image_temp, "../img/$user_image");

  $query = "UPDATE users SET ";
  $query.="user_name = '{$user_name}', ";   
  $query.="user_firstname = '{$user_firstname}', ";
  $query.="user_lastname = '{$user_lastname}', ";
  $query.="user_password = '{$user_password}', ";
  $query.="user_image = '{$user_image}', ";
  $query.="user_email = '{$user_email}', ";
  $query.="user_role = '{$user_role}' ";
  $query.= "WHERE user_name = '{$username}' ";

  $update_user = mysqli_query($connection, $query);

  if(!$update_user) {
      echo "QUERY FALIED" . mysqli_error($connection);
  }

}

?> 

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-user-md"></i> Profile</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="icon_documents_alt"></i>Pages</li>
              <li><i class="fa fa-user-md"></i>Profile</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <!-- profile-widget -->
          <div class="col-lg-12">
            <div class="profile-widget profile-widget-info">
              <div class="panel-body">
                <div class="col-lg-2 col-sm-2">
                  <h4><?php echo $user_name; ?></h4>
                  <div class="follow-ava">
                    <img src="../img/<?php echo $user_image?>" alt="">
                  </div>
                  <h6><?php echo $user_role; ?></h6>
                </div>
                <div class="col-lg-4 col-sm-4 follow-info">
                  <p>Hello I’m <?php echo $user_name; ?>, a leading expert in interactive and creative design.</p>
                  <p><?php echo $user_email; ?></p>
                  <p><i class="fa fa-twitter"><?php echo $user_name; ?></i></p>
                  <h6>
                                    <span><i class="icon_clock_alt"></i>11:05 AM</span>
                                    <span><i class="icon_calendar"></i>25.10.13</span>
                                    <span><i class="icon_pin_alt"></i>NY</span>
                                </h6>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <!-- page start-->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading tab-bg-info">
                <ul class="nav nav-tabs">
                  <li>
                    <a data-toggle="tab" href="#profile">
                                          <i class="icon-user"></i>
                                          Profile
                                      </a>
                  </li>
                  <li class="">
                    <a data-toggle="tab" href="#edit-profile">
                                          <i class="icon-envelope"></i>
                                          Edit Profile
                                      </a>
                  </li>
                </ul>
              </header>
              <div class="panel-body">
                <div class="tab-content">
                  <div id="recent-activity" class="tab-pane active">
                    <div class="profile-activity">
                      <div class="act-time">
                        <div class="activity-body act-in">
                          <span class="arrow"></span>
                          <div class="text">
                            <a href="#" class="activity-img"><img class="avatar" src="../img/<?php echo $user_image?>" alt=""></a>
                            <p class="attribution"><a href="#"><?php echo $user_name?> </a> at 4:25pm, 30th Octmber 2014</p>
                            <p>It is a long established fact that a reader will be distracted layout</p>
                          </div>
                        </div>
                      </div>
                      <div class="act-time">
                        <div class="activity-body act-in">
                          <span class="arrow"></span>
                          <div class="text">
                            <a href="#" class="activity-img"><img class="avatar" src="../img/<?php echo $user_image?>" alt=""></a>
                            <p class="attribution"><a href="#"><?php echo $user_name?> </a> at 5:25am, 30th Octmber 2014</p>
                            <p>Knowledge speaks, but wisdom listens.</p>
                          </div>
                        </div>
                      </div>
                      <div class="act-time">
                        <div class="activity-body act-in">
                          <span class="arrow"></span>
                          <div class="text">
                            <a href="#" class="activity-img"><img class="avatar" src="../img/<?php echo $user_image?>" alt=""></a>
                            <p>Knowledge speaks, but wisdom listens.</p>
                          </div>
                        </div>
                      </div>
                      
                      
                      
                    </div>
                  </div>
                  <!-- profile -->
                  <div id="profile" class="tab-pane">
                    <section class="panel">
                      <div class="bio-graph-heading">
                        Hello I’m <?php echo $user_name; ?>, a leading expert in interactive and creative design specializing in the mobile medium. My graduation from Massey University with a Bachelor of Design majoring in visual communication.
                      </div>
                      <div class="panel-body bio-graph-info">
                        <h1>Bio Graph</h1>
                        <div class="row">
                          <div class="bio-row">
                            <p><span>First Name </span>: <?php echo $user_firstname; ?> </p>
                          </div>
                          <div class="bio-row">
                            <p><span>Last Name </span>: <?php echo $user_lastname; ?></p>
                          </div>
                          <div class="bio-row">
                            <p><span>Role </span>: <?php echo $user_role; ?></p>
                          </div>
                          <div class="bio-row">
                            <p><span>Email </span>:<?php echo $user_email; ?></p>
                          </div>
                        </div>
                      </div>
                    </section>
                    <section>
                      <div class="row">
                      </div>
                    </section>
                  </div>
                  <!-- edit-profile -->
                  <div id="edit-profile" class="tab-pane">
                    <section class="panel">
                      <div class="panel-body bio-graph-info">
                        <h1> Profile Info</h1>
                        <form class="form-horizontal" role="form">
                          <div class="form-group">
                            <label class="col-lg-2 control-label">First Name</label>
                            <div class="col-lg-6">
                            <input type="text" value="<?php echo $user_firstname; ?>" class="form-control" name="user_firstname">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Last Name</label>
                            <div class="col-lg-6">
                            <input type="text" value="<?php echo $user_lastname; ?>" class="form-control" name="user_lastname">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Password</label>
                            <div class="col-lg-6">
                            <input type="password" value="<?php echo $user_password; ?>" class="form-control" name="user_password">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Profile Photo</label>
                            <div class="col-lg-6">
                            <img width="100" src="../img/<?php echo $user_image; ?>" alt="">
                            <input type="file" name="image">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-6">
                            <input type="text" value="<?php echo $user_email; ?>" class="form-control" name="user_email">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Role</label>
                            <div class="col-lg-6">
                            <input type="text" value="<?php echo $user_role; ?>" class="form-control" name="user_role">
                            </div>
                          </div>
                          <div class="form-group" style="margin-left:200px;">
                            <input type="submit" class="btn btn-primary" name="update_profile" value="Update Profile">
                          </div>
                        </form>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>

        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    

    
<?php include "includes/admin_footer.php" ?>