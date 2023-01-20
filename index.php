<?php include "includes/header.php" ?>
<?php include "includes/db.php" ?>
    
    
  <!-- NAVIGATION -->
  <?php include "includes/navigation.php" ?>

    <!-- HOME -->
    <section id="home" class="home">
      <div class="home-text">
        <h1 data-aos="zoom-in" data-aos-duration="2000">Find Your Next Perfect Lodge To Live.</h1>
        <a href="signup" class="btn-sign" data-aos="fade-up" data-aos-duration="1000">Sign Up</a>
      </div>

    </section>

    <!-- ABOUT -->
    <section class="about" id="about">
      <div class="container">
        <div class="row">

        <?php 

        $query = "SELECT * FROM about";
        $select_all_about_query = mysqli_query($connection,$query);

        while($row = mysqli_fetch_assoc($select_all_about_query)) {
          $about_title = $row['about_title'];
          $about_content = $row['about_content'];
          $about_image = $row['about_image'];

          ?>

          <div class="col-md-6">
            <div class="about-image" data-aos="flip-left" data-aos-duration="2000">
              <img src="img/about.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="about-text" data-aos="fade-left" data-aos-duration="2000">
              <span>About Us</span>
              <h1> <?php echo $about_title ?> </h1>
              <p><?php echo $about_content ?></p>
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>

        <?php } ?>


        </div>
      </div>
    </section>

    <!-- LODGES -->
    <section class="lodge" id="lodge">
      <div class="container">

            <div class="heading" data-aos="fade-up">
              <span>Recent</span>
              <h1>Our Avaliables Lodges</h1>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio ducimus eum nihil cum at dicta fugiat quibusdam dolore dolores deserunt!</p>
            </div>

            <div class="property-container">
              <div class="row mt-5 pt-5 mb-5">

      <?php

        $query = "SELECT * FROM our_lodges WHERE lodge_status = 'available' ";
        $select_all_lodge_rent_query = mysqli_query($connection,$query);

        while($row = mysqli_fetch_assoc($select_all_lodge_rent_query)) {
          $lodge_image = $row['lodge_image'];
          $lodge_amount = $row['lodge_amount'];
          $lodge_description = $row['lodge_description'];
          $lodge_name = $row['lodge_name'];
          $lodge_location = $row['lodge_location'];
          $lodge_bx_bed = $row['lodge_bx_bed'];
          $lodge_bx_bath = $row['lodge_bx_bath'];

          ?>

                <div class="col-md-4 mb-5" data-aos="zoom-in-up">
                  <div class="box">
                    <img width="400" src="img/<?php echo $lodge_image?>" alt="">
                    <h3><?php echo $lodge_amount?></h3>
                    <div class="content">
                      <div class="text">
                        <h3><?php echo $lodge_name?></h3>
                        <p><?php echo $lodge_location?></p>
                        <h6><?php echo $lodge_description?></h6>
                      </div>
                      <div class="icon">
                        <i class='bx bx-bed'><span><?php echo $lodge_bx_bed?></span></i>
                        <i class='bx bx-bath'><span><?php echo $lodge_bx_bath?></span></i>
                      </div>
                    </div>
                  </div>
                </div>


        <?php } ?>

            
          </div>
        </div>

        </div>
        
      </div>
    </section>

    <!-- CONTACT US -->
    <section class="contact" id="contact">
      <div class="container mt-5">
        <h3 data-aos="fade-up">Have Questions in your mind? <br>Contact yours.</h3>
        <form action="" data-aos="fade-up">
          <div class="col-md-6">
            <div class="form-group mb-3">
              <input type="email" name="" id="email-box" class="form-control" placeholder="example@gmail.com" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group mb-3">
              <textarea name="message" id="" cols="10" rows="5" placeholder="Your Message" class="form-control"></textarea>
            </div>
          </div>
          <input data-aos="zoom-in" type="submit" value="Send" class="btn btn-primary">
        </form>
      </div>
    </section>


<?php include "includes/footer.php" ?>