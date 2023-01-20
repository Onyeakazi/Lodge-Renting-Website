<?php include "includes/header.php" ?>
    
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
          <a href="signup" class="btn btn-primary">Sign Up</a>
        </div>
      </div>
    </nav>

    <!-- LOG IN -->
    <div class="login">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="login-container" data-aos="fade-right" data-aos-duration="1000">
                        <h2>Login To Continue</h2>
                        <p>Log in with your data that you entered <br> during your registration</p>
            
                        <!-- LOGIN FORM -->
                        <form action="includes/login_pro.php" method="post">
                            <div class="form-group">
                                <label for="email">Enter your Email</label>
                                <input class="form-control" name="email" type="name" placeholder="example@gmail.com" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Enter your password</label>
                                <input class="form-control" name="password" type="password" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control buttom" type="submit" name="login" value="Log In">
                            </div>
                            <a href="#">Forget Password?</a>
                        </form>
                        <a class="form-control btn" href="signup">Sign up now</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="login-image" data-aos="zoom-in" data-aos-duration="1000">
                        <img src="img/login.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php include "includes/footer.php" ?>
