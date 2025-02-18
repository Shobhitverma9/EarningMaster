
<?php include 'main_app.php'; ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
 <?php 

 require_once('connect.php');
 
 
            $name=$_POST['name'];
            $symbol=$_POST['symbol'];
            $hint=$_POST['hint'];
            $details=$_POST['details'];

 $uploaded = false;
 $filepath_image = '';
if(isset($_FILES)){
   $filetmp= $_FILES["image"]["tmp_name"];
  $filename_image= $_FILES["image"]["name"];
  $filetype= $_FILES["image"]["type"];
  $filepath_image= "api/images/".$filename_image;
  $imgsize=filesize($filetmp);  //to get image size

  if(!move_uploaded_file($filetmp,$filepath_image)){
    $uploaded = false;
    echo '<script>
   
       setTimeout(function () { 
                                swal({
                                  title: "Error!",
                                  text: "Error while uploading File.",
                                  type: "error",
                                  confirmButtonText: "OK"
                                },
                                function(isConfirm){
                                  if (isConfirm) {
                                    window.location.href = "payment_method.php";
                                  }
                                }); }, 1000);
   
            </script>';
            //return false;
  }else{
    $uploaded = true;
  }
}
 $InsertData="INSERT INTO `payment_method` (`name`, `symbol`,`hint`,  `image` , `details` ) VALUES 
                      ('$name','$symbol','$hint', '$filename_image', '$details')";
// var_dump($InsertData);die();
 $resultData=mysqli_query($conn,$InsertData);
 if($resultData)
 {
                                       
       echo '<script>
   
       setTimeout(function () { 
                                swal({
                                  title: "Done!",
                                  text: "Payment Method Details Added Successfully!",
                                  type: "success",
                                  confirmButtonText: "OK"
                                },
                                function(isConfirm){
                                  if (isConfirm) {
                                    window.location.href = "payment_method.php";
                                  }
                                }); }, 1000);
   
            </script>';
            
       
            
            
    } else {
      echo '<script>
   
       setTimeout(function () { 
                    swal({
                      title: "Oops!",
                      text: "Something went wrong!",
                      type: "error",
                      confirmButtonText: "OK"
                    },
                    function(isConfirm){
                      if (isConfirm) {
                        window.location.href = "payment_method.php";
                      }
                    }); }, 1000);
   
            </script>';
    }
          
  
                
?>

 <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>