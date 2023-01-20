
                    
                <?php

                if(isset($_GET['d_id'])){

                    $the_lodge_id = $_GET['d_id'];
                }
                
                $query = "SELECT * FROM our_lodges WHERE lodge_id = $the_lodge_id ";
                $select_lodges_by_id = mysqli_query($connection, $query);

                while($row = mysqli_fetch_assoc($select_lodges_by_id)) {
                $lodge_id = $row['lodge_id'];
                $lodge_name = $row['lodge_name'];
                $lodge_amount = $row['lodge_amount'];
                $lodge_description = $row['lodge_description'];
                $lodge_location = $row['lodge_location'];
                $lodge_image = $row['lodge_image'];
                $lodge_status = $row['lodge_status'];
                $lodge_bx_bed = $row['lodge_bx_bed'];
                $lodge_bx_bath = $row['lodge_bx_bath'];
                
                ?>

                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <img width="400" src="../img/<?php echo $lodge_image?>" alt="">
                        </div>
                        <div class="col-md-6">
                            <h1 style="font-size:50px;font-weight: 600; text-decoration:underline;">About Lodge</h1>
                            <h3><span style="font-weight: 600;">Name:</span><?php echo $lodge_name ?>.</h3>
                            <h3><span style="font-weight: 600;">Amount:</span><?php echo $lodge_amount ?>.</h3>
                            <h3><span style="font-weight: 600;">Location:</span><?php echo $lodge_location ?>.</h3>
                            <h3><span style="font-weight: 600;">Description:</span><?php echo $lodge_description ?></h3>
                            <h3><span style="font-weight: 600;">Number Of Available Rooms:</span><?php echo $lodge_bx_bed ?>.</h3>
                        </div>
                    </div>
                </div>

                <?php } ?>

        </div>
      </div>

      