<?php include 'main_app.php'; ?>
<?php include 'header.php' ; ?>
<?php include 'connect.php' ; ?>



<?php
if (isset($_GET['i']))
{
  $id = $_GET['i'];
  
  

  $sql = "SELECT * FROM withdrawal WHERE id =".$id;
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);


  $user_sql = "SELECT * FROM users WHERE user_id = ".$row['user_id'];
  $user = mysqli_query($conn, $user_sql);
  $user_row = mysqli_fetch_assoc($user);

  $user_r = "SELECT * FROM withdrawal WHERE user_id = ".$row['user_id'];
  $user_r = mysqli_query($conn, $user_r);
  $total_r = mysqli_num_rows($user_r);

  $user_id_main = $user_row['user_id'];

 

 } else {
   header("Location: /");
 }

}else {
   header("Location: /");
}
 ?>




<style type="text/css">
  img.im {
    width: 22%;
}
.bt{
  margin-bottom: 16px;
}
  .container-fluid{
      margin-right: 30px;
    margin-left: 30px;
    width: fit-content!important;
  
  }
  .card{
border-radius: 20px!important}
  .content-wrapper{
  min-height: 433px;
    background: white;
    text-align: left;
    margin-left: 0px!important;
  }
  body{
      background: #f1f4f8;
  }
  .next{
  position: relative;
    color: white;
    text-decoration: none;
    background-color: #6610f2;
    border: 1px solid #dddfeb;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    width: 81px;
    padding: 9px;
    border-radius: 10px;
   margin-left: 33px;
     padding-left: 48px!important;
    padding-right: 48px!important;
  }
  .paginate_button {
        padding: 10px;
    margin: 5px;
    border-radius: 6px;
    position: relative;
    text-decoration: none;
    border: 1px solid #dddfeb;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    z-index: 3;
    border-color: #4e73df;
  }
  .previous{
        margin-right: 21px;
    position: relative;
    color: white;
    text-decoration: none;
    background-color: #6610f2;
    border: 1px solid #dddfeb;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    width: 81px;
    padding: 9px;
    border-radius: 10px;
    padding-right: 21px;
  }
  
  .btn5{
      background: red;
  }
  
</style>
 


<div class="container-fluid">
            
                <div class="card shadow">
                     
                    	
                    <div class="card-body">
                        
                     


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
             <h1 class="m-0">Review Payment Request</h1>
      
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
 
 

<?php if ($user_row['status'] == "active") { ?>
                  <form action="admin_api/api.php?user_id=<?php echo $user_id_main; ?>" method="POST">
                      <input type="hidden" name="_method" value="BLOCK_USER_PAYMENT_RE">
                      <button type="submit" class="btn btn-primary btn-block newClassBtna">Active</button>
                  </form>
              <?php } else { ?>
                <form action="admin_api/api.php?user_id=<?php echo $user_id_main; ?>" method="POST">
                      <input type="hidden" name="_method" value="UNBLOCK_USER_PAYMENT_RE">
                      <button type="submit" class="btn btn-primary btn-block newClassBtna">Blocked</button>
                  </form>
<?php } ?>



<?php
if(!$row['status']=="3"){ 
    $id = $row['id'];
    $user = $user_row['username'];
echo "
<div style='text-align: center;display: flex;gap: 4px;' >
<form action='admin_api/payment_api.php' method='post'>
  <input type='hidden' name='view_id' value='$id'>
  <input type='hidden' name='view_action' value='1'>

<button type='submit' class='btn btn5 btn-primary btn-block btn-success mb-3'> Approve</button>
</form>

<form action='admin_api/payment_api.php' method='post'>
  <input type='hidden' name='view_id' value='$id'>
  <input type='hidden' name='view_action' value='2'>

<button type='submit' class='btn btn5 btn-primary btn-block btn-danger mb-3'> Reject</button>
</form>
<form>
<a  href='user_track.php?user_id=$user_id_main' class='btn btn5 btn-primary btn-block btn-secondary'> User Track</a>
<a  href='user-profile.php?user_id=$user_id_main' class='btn btn5 btn-primary btn-block btn-secondary'> User Profile</a>

</form>
</div>
";}else if($row['status']=="1")
{
    $idd = $row['id'];
    echo "<form action='admin_api/payment_api.php' method='post'>
  <input type='hidden' name='view_id' value='$idd'>
  <input type='hidden' name='view_action' value='3'>

<button type='submit' class='btn btn-success mb-3'>  Complete now</button>
</form>";
}
?>





<div class="main_content_iner ">
<div class="container-fluid p-0">
<div class="row justify-content-center">

  <div class="col-xl-12">
  <div class="white_card card_height_100 mb_30">
  <div class="white_card_header">
  <div class="box_header m-0">
  <div class="main-title">
 
  </div>
  </div>
  </div>
  <div class="white_card_body">
  <div class="Activity_timeline">
  <ul>
      
   
      
  <div class="activity_bell"></div>
  <div class="timeLine_inner d-flex align-items-center">
  <div class="activity_wrap" style="display: flex; flex-direction: row;">
  <h6>Full Name:&nbsp;&nbsp;</h6>
  <h6><?php echo $user_row['name']; ?></h6>
  </div>
  </div>
 
 
      
  <div class="activity_bell"></div>
  <div class="timeLine_inner d-flex align-items-center">
  <div class="activity_wrap" style="display: flex; flex-direction: row;">
  <h6>User Country:&nbsp;&nbsp;</h6>
  <h6><?php echo $user_row['user_country']; ?></h6>
  </div>
  </div>
 

      
  <div class="activity_bell"></div>
  <div class="timeLine_inner d-flex align-items-center">
  <div class="activity_wrap" style="display: flex; flex-direction: row;">
  <h6>Username:&nbsp;&nbsp;</h6>
  <h6><?php echo $user_row['username']; ?></h6>
  </div>
  </div>
 
 
      
  <div class="activity_bell"></div>
  <div class="timeLine_inner d-flex align-items-center">
  <div class="activity_wrap" style="display: flex; flex-direction: row;">
  <h6>Device Id:&nbsp;&nbsp;</h6>
  <h6><?php echo $user_row['device_id']; ?></h6>
  </div>
  </div>
 


 
  <div class="activity_bell"></div>
  <div class="timeLine_inner d-flex align-items-center">
  <div class="activity_wrap" style="display: flex; flex-direction: row;">
  <h6>Points Used:&nbsp;&nbsp;</h6>
  <h6><?php echo $row['payment_coin']; ?></h6>
  </div>
  </div>
 

 
  <div class="activity_bell"></div>
  <div class="timeLine_inner d-flex align-items-center">
  <div class="activity_wrap" style="display: flex; flex-direction: row;">
  <h6>Amount:&nbsp;&nbsp;</h6>
  <h6><?php echo $row['package_amount']; ?></h6>
  </div>
  </div>
  

 
  <div class="activity_bell"></div>
  <div class="timeLine_inner d-flex align-items-center">
  <div class="activity_wrap" style="display: flex; flex-direction: row;">
  <h6>Payment Address:&nbsp;&nbsp;</h6>
  <h6><?php echo $row['payment_info']; ?></h6>
  </div>
  </div>
 

 
  <div class="activity_bell"></div>
  <div class="timeLine_inner d-flex align-items-center">
  <div class="activity_wrap" style="display: flex; flex-direction: row;">
  <h6>Payment Method:&nbsp;&nbsp;</h6>
  <h6><?php echo $row['payment_method']; ?></h6>
  </div>
  </div>
  

 
  <div class="activity_bell"></div>
  <div class="timeLine_inner d-flex align-items-center">
  <div class="activity_wrap" style="display: flex; flex-direction: row;">
  <h6>Date:&nbsp;&nbsp;</h6>
  <h6><?php echo $row['created_date']; ?></h6>
  </div>
  </div>
 

 
  <div class="activity_bell"></div>
  <div class="timeLine_inner d-flex align-items-center">
  <div class="activity_wrap" style="display: flex; flex-direction: row;">
  <h6>Total Redeem:&nbsp;&nbsp;</h6>
  <h6><?php echo $total_r; ?></h6>
  </div>
  </div>
   

 
  <div class="activity_bell"></div>
  <div class="timeLine_inner d-flex align-items-center">
  <div class="activity_wrap" style="display: flex; flex-direction: row;">
  <h6>Status:&nbsp;&nbsp;</h6>
  <?php if ($row['status']=="0") {
    echo '<a href="#" class="badge_active3" style="background:#ffae00;color:white;">Pending</a>';
  }elseif ($row['status']=="1") {
    echo '<a href="#"  class="badge_active" >Approved</a>';
  }
  elseif ($row['status']=="3") {
    echo '<a href="#"  class="badge_active" >Completed</a>';
  }
  else {
      echo '<a href="#"  class="badge_active3" >Rejected</a>';
  } ?>




  </div>
  </div>
 
 
 
  
  <style>
      .gg{
          margin-top: 1px;
    line-height: 13px;
    font-size: 12px;
    text-transform: uppercase;
      }
  </style>

  </ul>

<br>
<br>



  </div>
  </div>
  </div>
  </div>

</div>
</div>
</div>

 

    
        
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->









                         </div>
                    </div>
                
            </div>

 
      
 <?php include 'footer.php' ; ?>

