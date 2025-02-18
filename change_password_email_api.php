<?php include 'main_app.php'; ?>
<?php
include('connect.php');
 
 

// Retrieve the form data
if ($_SERVER["REQUEST_METHOD"] === "POST") {
 
    
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    if (empty($email)) {
      
        $sql = "UPDATE admin SET password = '$password' WHERE id = '1' ";

        // Execute the query
        if ($conn->query($sql) === TRUE) {
            echo "Password updated successfully.";
        } else {
            echo "Error updating password: " . $conn->error;
        }
        header('Location: index.php');
    


    } else {
          
    $sql = "UPDATE admin SET password = '$password', email = '$email' WHERE id = '1' ";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Password updated successfully.";
    } else {
        echo "Error updating password: " . $conn->error;
    }
    header('Location: index.php');

    }
    
  


}
?>

 