

            <table class="table table-bordered table-hover">
                <thead>
        
                        <th>Id</th>
                        <th>Name</th>
                        <th>Amount</th>
                        <th>Location</th>
                        <th>Image</th>
                        <th>Bx Bed</th>
                        <th>Bx Bath</th>
                        <th>Rent Lodge</th>
                    </tr>
                </thead>
                <tbody>
                    
                <?php 
                
                $query = "SELECT * FROM our_lodges WHERE lodge_status = 'available' ";
                $select_all_lodges = mysqli_query($connection, $query);

                while($row = mysqli_fetch_assoc($select_all_lodges)) {
                $lodge_id = $row['lodge_id'];
                $lodge_name = $row['lodge_name'];
                $lodge_amount = $row['lodge_amount'];
                $lodge_location = $row['lodge_location'];
                $lodge_image = $row['lodge_image'];
                $lodge_status = $row['lodge_status'];
                $lodge_bx_bed = $row['lodge_bx_bed'];
                $lodge_bx_bath = $row['lodge_bx_bath'];
                
                echo "<tr>";
                echo "<td>$lodge_id</td>";
                echo "<td>$lodge_name</td>";
                echo "<td>$lodge_amount</td>";
                echo "<td>$lodge_location</td>";
                echo "<td><a href='lodge.php?source=lodge_view&d_id={$lodge_id}'><img width='100' src='../img/$lodge_image'></a></td>";
                echo "<td>$lodge_bx_bed</td>";
                echo "<td>$lodge_bx_bath</td>";
                echo "<td><a class='btn btn-success' href='#'>Rent Lodge</a></td>";
                

                
                } ?>

                </tbody>
            </table>
