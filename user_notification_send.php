<?php
include 'connect.php';
   
$title=$_POST['title'];
$message=$_POST['message'];
$url=$_POST['url'];
$image=$_POST['image'];
 
$InsertData="INSERT INTO `notifications` (`title`, `message`,`url`,`image`) VALUES 
('$title','$message','$url','$image')";
$resultData=mysqli_query($conn,$InsertData);
if($resultData){

}
    
 function sendMessage($message,$image,$small,$title,$app_id,$rest){
    
    $content = array(
        "en" =>"$message"
        
        );
        $heading = array(
   "en" => "$title"
);

  

    $fields = array(
        'app_id' => $app_id,
        'included_segments' => array('All'),
        'data' => array("foo" => "bar"),
        'big_picture' =>$image,
        'large_icon' =>$small,
        'contents' => $content,
        'heading' => "$heading"
    );

    $fields = json_encode($fields);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8',
  'Authorization: Basic '.$rest));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);    

    $response = curl_exec($ch);
    curl_close($ch);

    return $response;
    
}

 $sql = "SELECT one_signal_app_id,os_rest_api FROM app_setting";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $rest =$row['os_rest_api'];
   $app_id =$row['one_signal_app_id'];
  }

  $update = mysqli_query($conn,"UPDATE users SET notice_badge=notice_badge+1");





$response = sendMessage($message,$image,$small,$title,$app_id,$rest);
header("Location: notification.php");

   
 ?>
