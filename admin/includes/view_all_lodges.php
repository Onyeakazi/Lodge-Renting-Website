<?php 

if(isset($_POST['checkBoxArray'])) {
    
    foreach($_POST['checkBoxArray'] as $checkBoxValue ) {
        
        $bulk_options = $_POST['bulk_options'];

        switch ($bulk_options) {
            case 'occupied':
                
            $query = "UPDATE our_lodges SET lodge_status = '{$bulk_options}' WHERE lodge_id = {$checkBoxValue} ";
            $check_box_update = mysqli_query($connection, $query);
            
            break;

            case 'available':
                
            $query = "UPDATE our_lodges SET lodge_status = '{$bulk_options}' WHERE lodge_id = {$checkBoxValue} ";
            $check_box_update = mysqli_query($connection, $query);

            break;

            case 'delete':
            
            $query = "DELETE FROM our_lodges WHERE lodge_id = {$checkBoxValue} ";
            $check_box_update = mysqli_query($connection, $query);
    
            break;
            
            default:
                # code...
                break;
        }
    }
}



?>

        <form action="" method="post">

            <div id="bulkOptionContainer" class="col-xs-4" style=" padding:0px; ">

            <select class="form-control" name="bulk_options" id="">
                
                <option value="">Select Option</option>
                <option value="available">Available</option>
                <option value="occupied">Occupied</option>
                <option value="delete">Delete</option>

            </select>
            </div>

            <div class="col-xs-4">
                <input type="submit" name="submit" class="btn btn-success" value="Apply">
                <a href="lodge.php?source=add_lodge" class="btn btn-primary">Add New</a>
            </div>

            <table class="table table-bordered table-hover">
                <thead>
        
                        <th><input id="selectAllBoxes" type="checkbox"></th>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Amount</th>
                        <th>Location</th>
                        <th>Image</th>
                        <th>Lodge Description</th>
                        <th>Status</th>
                        <th>Available Rooms</th>
                        <th>Bath/Toilet</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    
                <?php 
                
                $query = "SELECT * FROM our_lodges";
                $select_all_lodges = mysqli_query($connection, $query);

                while($row = mysqli_fetch_assoc($select_all_lodges)) {
                $lodge_id = $row['lodge_id'];
                $lodge_name = $row['lodge_name'];
                $lodge_amount = $row['lodge_amount'];
                $lodge_description = $row['lodge_description'];
                $lodge_location = $row['lodge_location'];
                $lodge_image = $row['lodge_image'];
                $lodge_status = $row['lodge_status'];
                $lodge_bx_bed = $row['lodge_bx_bed'];
                $lodge_bx_bath = $row['lodge_bx_bath'];
                
                echo "<tr>";
                ?>

                <td><input class='checkBoxes' type='checkbox' name='checkBoxArray[]' value='<?php echo $lodge_id ?>'></td>;

                <?php

                echo "<td>$lodge_id</td>";
                echo "<td>$lodge_name</td>";
                echo "<td>$lodge_amount</td>";
                echo "<td>$lodge_location</td>";
                echo "<td><a href='lodge.php?source=lodge_view&d_id={$lodge_id}'><img width='100' src='../img/$lodge_image'></a></td>";
                echo "<td>$lodge_description</td>";
                echo "<td>$lodge_status</td>";
                echo "<td>$lodge_bx_bed</td>";
                echo "<td>$lodge_bx_bath</td>";
                echo "<td><a class='btn btn-success' href='lodge.php?source=edit_lodge&l_id={$lodge_id}'>Edit</a></td>";
                echo "<td><a class='btn btn-danger' href='lodge.php?delete={$lodge_id}'>Delete</a></td>";
                echo "</tr>";

                
                 } ?>

                </tbody>
            </table>
            
        </form>

            <?php 

            if(isset($_GET['delete'])) {

                if($_SESSION['user_role'] == 'admin') {

                $lodge_id = $_GET['delete'];

                $query = "DELETE FROM our_lodges WHERE lodge_id = $lodge_id";
                $delete_lodge = mysqli_query($connection, $query);

                header("Location: lodge.php");


                }
            } else {
                
            }

            
            ?>

        </div>
      </div>

      