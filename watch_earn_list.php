<?php include 'main_app.php'; ?>
<?php include 'header.php' ; ?>
<?php include 'connect.php' ; ?>



        <!-- Begin Page Content -->
        <div class="container-fluid">

           <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">All Youtube Video </h1>
            <a href="add_ytvideo.php"  class="btn btn-success "><i class="fas fa-plus fa-sm text-white-50"></i> Add Youtube Video </a>
          </div>      
          
          
      
      
      
      
      
      
      
      
      
      
      
      
         
               <!-- Small boxes (Stat box) -->
        <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
          <thead>
            <tr>
                
        <th>ID</th>
        <th>Video a title:</th>
        <th>Video Id:</th>
        <th>Time to stay on that page: (Second)</th>
        <th>Amount will be rewarded:</th>
        <th> UPLOADED BY </th>
        <th>CREATED AT</th>
        <th>Views:</th>
        
                 
        <th>Promotion status:</th>
        <th>Check:</th>
        <th>Action</th>
        <th>Approve status </th>

            </tr>
          </thead>
          <tbody>
              
              
         <?php 
$sql = "SELECT * FROM watch_earn";
$res=mysqli_query($conn,$sql);
$i=1;

while($row=mysqli_fetch_array($res)){ 
?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $row['video_title']; ?></td>
 
<td class="text-sm"><a href="https://www.youtube.com/watch?v=<?php echo $row['video_id']; ?>" target="_blank" class="text-info"><?php echo $row['video_id']; ?></a></td>
    
    <td><?php echo $row['play_time']; ?></td>
    <td><?php echo $row['video_reward']; ?></td>
     
          
    <?php
    $usernameget = "{$row['uploader_id']}";
    // Prepare and execute the query
    $stmt = mysqli_prepare($conn, "SELECT name FROM users WHERE user_id = ?");
    mysqli_stmt_bind_param($stmt, "s", $usernameget);
    mysqli_stmt_execute($stmt);
    // Fetch the result
    $result = mysqli_stmt_get_result($stmt);
    if(mysqli_num_rows($result) > 0) {
      $row2 = mysqli_fetch_assoc($result);
      $name = $row2['name'];
  
      // Do something with the row data and name
    } else {
      // No results found
      $name = "Admin";
    }
    // Close prepared statement
    mysqli_stmt_close($stmt);
    ?>
    
 
<?php 

   $number_of_view = "{$row['number_of_view']}";
   $tot_view = "{$row['views']}";
   
$final_view = $number_of_view . '/' . $tot_view;
?>
 

    
    <td class="text-sm"><a href="user_profile_check.php?i=<?php echo $namess;?>" target="_blank" class="text-info"><?php echo $name; ?></a></td>
    
    
    <td><?php echo $row['created_date']; ?></td>
     <td><?php echo $final_view; ?></td>
    

 

     <td>
     
     
      <div class="col-lg-6">
                      <div class="form-group">
                    
                        
                        <?php if($row['status'] == 0) { ?>
                        <a class="btn btn-success sml">Activity</a>
                        <?php } else if($row['status'] == 2) { ?>
                        <a><button class="btn btn-success sml"> View Completed</button></a>
                        <?php } else { ?>
                        <a class="btn btn-success sml">InActivity</a>
                        <?php } ?>

                              
                      </div>
                    </div>
     
     
     
     </td>
   
                    

    <?php
    $usernamegets = "{$row['uploader_id']}";
    // Prepare and execute the query
    $stmt = mysqli_prepare($conn, "SELECT id FROM users WHERE user_id = ?");
    mysqli_stmt_bind_param($stmt, "s", $usernamegets);
    mysqli_stmt_execute($stmt);
    // Fetch the result
    $result = mysqli_stmt_get_result($stmt);
    if(mysqli_num_rows($result) > 0) {
      $row2 = mysqli_fetch_assoc($result);
      $namess = $row2['id'];
      // Do something with the row data and name
    } else {
      // No results found
      $name = "Admin";
    }
    // Close prepared statement
    mysqli_stmt_close($stmt);
    ?>
    
    
    
 <th scope="col">
 <div class="action_btns d-flex">
 <a href="user-profile.php?user_id=<?php echo $usernameget;?>" class="action_btn mr_10  ">  <button class="btn btn-danger sml"><i style="    color: white!important;" class="fas fa-chart-line text-info" aria-hidden="true"></i>  Check</button> </a></a>
 </div>
 </th>
 


    <td>  

    <form action="admin_api/api.php?user_id=<?php echo $row['id']; ?>" method="POST">
                            <input type="hidden" name="_method" value="DELETE_WATCH_EARN">
                            <button type="submit" class="btn btn-danger sml">Delete</button>
                        </form>


      
      <br>                           
    </td> 
    

    <td>  
      <a href="promote_request_yt_check.php?i=<?php echo $row['id'];?>">
        <button class="btn btn-danger sml">Check for Approve</button>
      </a>
      <br>                           
    </td> 
    
    
  </tr>
  <?php 
  $i=$i+1; 
} 
// Close database connection
mysqli_close($conn);
?>




          </tbody>
        </table>
    
    
    
    
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

   

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

<?php include 'footer.php' ; ?>
