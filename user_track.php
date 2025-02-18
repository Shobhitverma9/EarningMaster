<?php include 'main_app.php'; ?>
<?php include 'header.php' ; ?>
<?php include 'connect.php' ; ?>



<?php
if (isset($_GET['user_id']))
{
  $user_id = $_GET['user_id'];

  $sql = "SELECT * FROM users WHERE user_id = '$user_id'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
 } else {
   header("Location: /");
 }

}else {
   header("Location: /");
}

 
 ?>

 
 <!--user traking list -->
 <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
    <thead>
        <tr>
            <th>User Id</th>
            <th>Point</th>
            <th>Type Earn</th>
            <th>Created Date</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM user_tracking WHERE user_id = '$user_id' ORDER BY id DESC";
        $res = mysqli_query($conn, $sql);


        
        if (mysqli_num_rows($res) > 0) {
            $i = 1;
            while ($row = mysqli_fetch_array($res)) {
                $minas = $row['minas']; // Move this line here
        ?>
                <tr>
                    <td><?php echo $row['user_id']; ?></td>
                  
                    <?php
$minas = $row['minas']; // Move this line here

if ($minas == "true") {
    echo '<td><p style="color:red;"> - ' . $row['points'] . '</p></td>';
}  else {
    echo '<td>' . $row['points'] . '</td>';
}
?>

                    <td><?php echo $row['type_earn']; ?></td>
               



                    <td><?php echo $row['created_date']; ?></td>


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

