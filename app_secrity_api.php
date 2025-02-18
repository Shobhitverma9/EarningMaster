
<?php include 'main_app.php'; ?>


<?php
include('connect.php');

// Retrieve the form data
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $id = '1';


    $block_rooted_devices =$_POST['block_rooted_devices'];
    $block_vpn_access = $_POST['block_vpn_access'];
    $block_app_clone = $_POST['block_app_clone'];
 


    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE app_setting SET 
    
  
    block_rooted_devices ='$block_rooted_devices',
    block_vpn_access = '$block_vpn_access',
    block_app_clone = '$block_app_clone'
 
  

     WHERE id = '$id'";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("Error: " . $conn->error);
    }


  
    if ($stmt->execute()) {
        header('Location: app_secrity.php');
    } else {
        header('Location: app_secrity.php');
    }
}
?>

 