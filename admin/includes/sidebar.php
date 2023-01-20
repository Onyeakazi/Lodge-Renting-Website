

<?php 
if(isset($_SESSION['user_role']) && $_SESSION['user_role'] == 'admin' ) {

  ?>

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="admin_index.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Lodges</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="lodge.php">View All Lodges</a></li>
              <li><a class="" href="lodge.php?source=add_lodge">Add Lodge</a></li>
            </ul>
          </li>
          <li>
            <a class="" href="lodge.php?source=avaliable_lodge">
                          <i class="icon_desktop"></i>
                          <span>Avaliable lodges</span>

                      </a>
          </li>
          <li>
            <a class="" href="lodge.php?source=occupied_lodge">
                          <i class="icon_desktop"></i>
                          <span>Occupied lodges</span>

                      </a>
          </li>
          
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Users</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="user.php">View All Users</a></li>
              <li><a class="" href="user.php?source=add_user">Add User</a></li>
            </ul>
          </li>
          <li>
            <a class="" href="user.php?source=agent">
                          <i class="icon_table"></i>
                          <span>Agents</span>

                      </a>
          </li>
          <li>
            <a class="" href="user.php?source=student">
                          <i class="icon_document_alt"></i>
                          <span>Students</span>

                      </a>
          </li>

          <li>
            <a class="" href="profile1.php">
                          <i class="icon_documents_alt"></i>
                          <span>Profile</span>

                      </a>
          </li>

          
                          

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    
 
 <?php } ?>


    <!-- AGENT SESSION -->

<?php 
  if(isset($_SESSION['user_role']) && $_SESSION['user_role'] == 'agent' ) {

    ?>

      <!--sidebar start-->
      <aside>
        <div id="sidebar" class="nav-collapse ">
          <!-- sidebar menu start-->
          <ul class="sidebar-menu">
            <li class="active">
              <a class="" href="admin_index.php">
                            <i class="icon_house_alt"></i>
                            <span>Dashboard</span>
                        </a>
            </li>
            
            <li class="sub-menu">
              <a href="javascript:;" class="">
                            <i class="icon_desktop"></i>
                            <span>Lodges</span>
                            <span class="menu-arrow arrow_carrot-right"></span>
                        </a>
              <ul class="sub">
                <li><a class="" href="lodge.php">View All Lodges</a></li>
                <li><a class="" href="lodge.php?source=add_lodge">Add Lodge</a></li>
              </ul>
            </li>
            <li>
              <a class="" href="lodge.php?source=avaliable_lodge">
                            <i class="icon_desktop"></i>
                            <span>Avaliable lodges</span>

                        </a>
            </li>
            <li>
              <a class="" href="lodge.php?source=occupied_lodge">
                            <i class="icon_desktop"></i>
                            <span>Occupied lodges</span>

                        </a>
            </li>
            
            <li>
              <a class="" href="user.php?source=agent">
                            <i class="icon_table"></i>
                            <span>Agents</span>

                        </a>
            </li>

            <li>
              <a class="" href="profile.php">
                            <i class="icon_documents_alt"></i>
                            <span>Profile</span>

                        </a>
            </li>

            
                            

          </ul>
          <!-- sidebar menu end-->
        </div>
      </aside>
      <!--sidebar end-->
    
 
<?php } ?>


    <!-- STUDENT SESSION -->

<?php 
  if(isset($_SESSION['user_role']) && $_SESSION['user_role'] == 'student' ) {

    ?>

      <!--sidebar start-->
      <aside>
        <div id="sidebar" class="nav-collapse ">
          <!-- sidebar menu start-->
          <ul class="sidebar-menu">
            <li class="active">
              <a class="" href="admin_index.php">
                            <i class="icon_house_alt"></i>
                            <span>Dashboard</span>
                        </a>
            </li>
            
           
            <li>
              <a class="" href="lodge.php?source=avaliable_lodge">
                            <i class="icon_desktop"></i>
                            <span>Avaliable lodges</span>

                        </a>
            </li>
            <li>
              <a class="" href="lodge.php?source=occupied_lodge">
                            <i class="icon_desktop"></i>
                            <span>Occupied lodges</span>

                        </a>
            </li>
            
            <li>
              <a class="" href="profile.php">
                            <i class="icon_documents_alt"></i>
                            <span>Profile</span>

                        </a>
            </li>


          </ul>
          <!-- sidebar menu end-->
        </div>
      </aside>
      <!--sidebar end-->
    
 
 <?php } ?>





    