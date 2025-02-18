<?php include 'main_app.php'; ?>
<?php include 'header.php' ; ?>
<?php include 'connect.php' ; ?>


 
 
 <!--user traking list -->
 <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
    <thead>
        <tr>
            <th> Id</th>
            <th>Name</th>
            <th>Message</th>
            <th>Subject</th>
            <th>Created Date</th>
            <th>User profile</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM contact_support ORDER BY id DESC";
        $res = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($res) > 0) {
            $i = 1;
            while ($row = mysqli_fetch_array($res)) {
        ?>
                <tr>
                <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['user_name']; ?></td>
                    <td><?php echo $row['message']; ?></td>
                    <td><?php echo $row['subject']; ?></td>
               

                    <td><?php echo $row['created_date']; ?></td>
                    <td>
                    <a href="user-profile.php?user_id=<?php echo $row['user_id']; ?>" class="btn btn-primary btn-block">
                            <i class="far fa-edit"></i>
                        </a>
                </td>
                    
                </tr>
        <?php
                $i++;
            }
        } else {
        ?>
            <tr>
                <td colspan="4">No data found.</td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>



      
 <?php include 'footer.php' ; ?>

