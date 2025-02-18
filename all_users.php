<?php include 'main_app.php'; ?>
<?php include 'header.php' ; ?>
<?php include 'connect.php' ; ?>
 


<div class="row my-4">
        <div style=" width: 100%!important; margin-left: 50px; margin-right: 50px;" class="col-lg-8 col-md-6 mb-md-0 mb-4">
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
            <th>Name</th>
            <th>Email</th>
            <th>Points</th>
            <th>Total Refer</th>
            <th>User Country</th>
            <th>Status</th>
            <th>Edit</th>
            <th>Track</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
       

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM users";
        $res = mysqli_query($conn, $sql);
        $i = 1;
        while ($row = mysqli_fetch_array($res)) {
            $user_id = $row['user_id'];
        ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['points']; ?></td>
                <td><?php echo $row['total_refer']; ?></td>
                <td><?php echo $row['user_country']; ?></td>

                <td>
                    <?php if ($row['status'] == "active") { ?>
                        <form action="admin_api/api.php?user_id=<?php echo $user_id; ?>" method="POST">
                            <input type="hidden" name="_method" value="BLOCK_USER">
                            <button type="submit" class="btn btn-primary btn-block newClassBtna">Active</button>
                        </form>
                    <?php } else { ?>
                      <form action="admin_api/api.php?user_id=<?php echo $user_id; ?>" method="POST">
                            <input type="hidden" name="_method" value="UNBLOCK_USER">
                            <button type="submit" class="btn btn-primary btn-block newClassBtna">Blocked</button>
                        </form>
                    <?php } ?>
                </td>


                <td>
                    <div class="action_btns d-flex">
                        <a href="user-profile.php?user_id=<?php echo $row['user_id']; ?>" class="btn btn-primary btn-block">
                            <i class="far fa-edit"></i>
                        </a>
                      
                    </div>
                </td>

                <td>
                    <div class="action_btns d-flex">
                         
                        <a href="user_track.php?user_id=<?php echo $row['user_id']; ?>" class="btn btn-primary btn-block">
                            <i style="color: white!important;" class="fas fa-chart-line text-info" aria-hidden="true"></i>
                        </a>
                    </div>
                </td>



                <td>
                <form action="admin_api/api.php?user_id=<?php echo $user_id; ?>" method="POST">
                            <input type="hidden" name="_method" value="DELETE_USER_LIST">
                            <button type="submit" class="btn btn-danger sml">Delete</button>
                        </form>

                   
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
       
 


    
 
 















<?php include 'footer.php' ; ?>