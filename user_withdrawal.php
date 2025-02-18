<?php
include 'main_app.php';
include 'header.php';
include 'connect.php';

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
 
 
<div class="row my-4">
    <div style="width: 100%!important; margin-left: 50px; margin-right: 50px;" class="col-lg-8 col-md-6 mb-md-0 mb-4">
        <div class="card">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-lg-6 col-7">
                        <h6>Users</h6>
                    </div>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive">
                    <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Method</th>
                                <th>User Name</th>
                                <th>Package Amount</th>
                                <th>Payment Coin</th>
                                <th>Payment Info</th>
                                <th>Status</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Check connection
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT * FROM withdrawal WHERE user_id = '$user_id'";
                            $res = mysqli_query($conn, $sql);
                            $i = 1;

                            while ($row = mysqli_fetch_array($res)) {
                                $status = $row['status']; // Move this line here

                                // Output the table row
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $row['payment_method']; ?></td>
                                    <td><?php echo $row['user_name']; ?></td>
                                    <td><?php echo $row['package_amount']; ?></td>
                                    <td><?php echo $row['payment_coin']; ?></td>
                                    <td><?php echo $row['payment_info']; ?></td>
                                   
                                    <?php
                                    // Output the status button based on $status
                                    if ($status == "0") {
                                        echo '<td><a style="background:#ffae00;" href="#" class="btn btn-primary btn-block">Pending</a></td>';
                                    } else if ($status == "1") {
                                        echo '<td><a style="background:green" href="#" class="btn btn-primary btn-block">Approved</a></td>';
                                    } else if ($status == "3") {
                                        echo '<td><a style="background:green" href="#" class="btn btn-primary btn-block">Completed</a></td>';
                                    } else {
                                        echo '<td><a style="background:red" href="#" class="btn btn-primary btn-block">Rejected</a></td>';
                                    }
                                    ?>

                                    <!-- Replace the link below with the appropriate link -->
                                    <td>
                                        <div class="action_btns d-flex">
                                            <a style="background: red;" href="review-payment-request.php?i=<?php echo $row['id']; ?>" class="action_btn mr_10 btn-primary">
                                                <i style="color: white!important;" class="fas fa-chart-line text-info" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                                $i++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
