<?php include "includes/admin_header.php" ?>



  <!-- container section start -->
  <section id="container" class="">
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
    <!--header end-->


    <!-- SIDEBAR -->
    <?php include "includes/sidebar.php" ?>



    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">

      <div class="row">
        <div class="col-lg-12">

            <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-tasks"></i>Users</h3>
            </div>
            </div>

           <?php 
           
           if(isset($_GET['source'])) {

            $source = $_GET['source'];

           } else {

            $source = '';

           }

           switch($source) {

            case 'add_user';
            include "includes/add_users.php";
            break;

            case 'edit_user';
            include "includes/edit_user.php";
            break;

            case 'agent';
            include "includes/agents.php";
            break;

            case 'student';
            include "includes/students.php";
            break;

            default:
            include "includes/view_all_users.php";
            break;
           }
           
           
           ?>

        </div>
      </div>

       





    </section>
      

<?php include "includes/admin_footer.php" ?>