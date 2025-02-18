<?php 

include 'main_app.php'; 
include 'header.php'; 
include 'connect.php'; 



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
  
</style>
 


<div class="container-fluid">
            
                <div class="card shadow">
                     
                    	
                    <div class="card-body">
                        
                     


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
 
 


<div class="main_content_iner ">
<div class="container-fluid p-0">
<div class="row justify-content-center">
<div class="col-lg-12">
<div class="white_card card_height_100 mb_30">

<div class="white_card_body">
<div class="QA_section">
<div class="white_box_tittle list_header" style=" display: flex; margin-top: 16px; align-items: center; justify-content: space-between;">
<h4>Payment Method</h4>
<div class="box_right d-flex lms_block">
<div class="add_button ml-10">
 
 
<a class="btn-success btn btn-block" type="button" href="add_paymnet_method.php"><i class="fas fa-plus" aria-hidden="true"></i> Add New Payment Method </a>
<div class="col-lg-6 text-right">
              <a class="btn-dark btn" onclick="history.back()"><i class="fas fa-arrow-left" aria-hidden="true"></i> Back To Dashboard</a>
            </div>

</div>
</div>
</div>
<div class="QA_table mb_30">

<table class="table lms_table_active ">
<thead>
<tr>

<th scope="col">Name</th>
<th scope="col">Image</th>
<th scope="col">Symbol</th>
<th scope="col">Hint</th>
<th scope="col">Input Type</th>
<th scope="col">details</th>
<th scope="col">Action</th>


</tr>
</thead>
<tbody>

 <!-- start here  -->


 <?php
 $sql = "SELECT * FROM payment_method";
 $payment = mysqli_query($conn, $sql);
  while($payment_row = mysqli_fetch_assoc($payment)) {
   

 ?>
 <tr>

 <td> <?php echo $payment_row['name']; ?></td>
 <th scope="row"><img src="api\images\<?php echo $payment_row['image']; ?>" alt="" style="width: 80px;"></th>
 <td> <?php echo $payment_row['symbol']; ?></td>
 <td> <?php echo $payment_row['hint']; ?></td>
 <td> <?php echo $payment_row['input_type']; ?></td>
 <td> <?php echo $payment_row['details']; ?></td>
 

 <th scope="col">
 <div class="action_btns d-flex">
     
     <a style="margin-right: 10px;" href="payment_package.php?i=<?php echo $payment_row['id']; ?>&symbol=<?php echo $payment_row['symbol']; ?>" class="btn btn-primary btn-block mr_10"> <svg width="12px" height="12px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>settings</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(304.000000, 151.000000)">
                        <polygon class="color-background opacity-6" points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"></polygon>
                        <path class="color-background opacity-6" d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z"></path>
                        <path class="color-background" d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg> </a>



 <form action="admin_api/api.php?user_id=<?php echo $payment_row['id']; ?>" method="POST">
 <input type="hidden" name="_method" value="DELETE_PAYMENT_METHOD">
 <button style="border: none;" type="submit" class="btn btn-primary btn-block"> <i class="fas fa-trash"></i> </button>
 </form>


 
 </div>
 </th>
 </tr>
 <?php
 }
 ?>





<!-- end here  -->
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<div class="col-12">
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

