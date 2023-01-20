<?php include "includes/header.php" ?>
<?php include "includes/db.php" ?>

<?php

if(isset($_POST['submit'])) {

  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $role = $_POST['role'];


  
  $username = mysqli_real_escape_string($connection, $username);
  $email = mysqli_real_escape_string($connection, $email);
  $password = mysqli_real_escape_string($connection, $password);
  $role = mysqli_real_escape_string($connection, $role);

  $query = "SELECT randSalt FROM users";
  $select_randsalt_query = mysqli_query($connection, $query);

  if(!$select_randsalt_query) {
    die("QUERY FAIDED" . mysqli_error($connection));
  }

  $row = mysqli_fetch_array($select_randsalt_query);

  $salt = $row['randSalt'];
  $password = crypt($password, $salt);

  $query = "INSERT INTO users(user_name, user_email, user_password, user_role) ";
  $query .="VALUES('{$username}', '{$email}', '{$password}', '{$role}' )";
  $signup_user_query = mysqli_query($connection, $query);


  $message = "Sign Up Completed";

}
?>





    
    <!-- NAVIGATION -->
    <nav class="navbar navbar-expand-lg bg-light sticky-top">
      <div class="container-fluid">
        <a class="logo" href="index"><i class="bx bx-home"></i>Lodge Rent</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#lodge">Lodges</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact Us</a>
            </li>
          </ul>
          <a href="login" class="btn btn-primary">Log In</a>
        </div>
      </div>
</nav>

    <!-- SIGN UP -->
    <div class="login">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="login-container" data-aos="fade-right" data-aos-duration="1000">
                        <h2>Welcome, Let's get started</h2>
                        <p>Already have an account? <a href="login">Log In</a></p>
            
                        <!-- LOGIN FORM -->
                        <form action="" method="post">

                            <div class="form-group">
                                <input class="form-control" name="username" type="text" placeholder="Enter your desired Username" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="email" type="email" placeholder="youremail@gmail.com" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="password" type="password" placeholder="Enter Your Password" required>
                            </div>
                            <div class="form-group">
                              <select name="role" id="">
                                  <option value="agent">Register As</option>
                                  <option value="agent">Agent</option>
                                  <option value="student">Student</option>
                              </select>
                            </div>
                            <div class="form-group">
                                <input class="form-control buttom" type="submit" name="submit" value="Sign Up">
                            </div>
                            <a class="boy" href="login">Already have an account?</a>
                        </form>
                        <a class="form-control btn" href="login">Log In</a>
                    </div>
                </div>
                <div class="col-md-6" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="login-image mt-5">
                        <img src="img/signup.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php include "includes/footer.php" ?>
