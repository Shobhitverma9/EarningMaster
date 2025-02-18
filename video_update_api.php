
<?php include 'main_app.php'; ?>


<?php
include('connect.php');

// Retrieve the form data
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $id = '1';


    $vi_applovin_reward = $_POST['vi_applovin_reward'] ?? '';
    $vi_adcolony_reward = $_POST['vi_adcolony_reward'] ?? '';
    $vi_admob_reward = $_POST['vi_admob_reward'] ?? '';
    $vi_startapp_reward = $_POST['vi_startapp_reward'] ?? '';
    $vi_vugnle_reward = $_POST['vi_vugnle_reward'] ?? '';
    $vi_unity_reward = $_POST['vi_unity_reward'] ?? '';
    $video_wall_ava = $_POST['video_wall_ava'] ?? '';
  
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE app_settingte SET 
    
    vi_applovin_reward = '$vi_applovin_reward',
    vi_adcolony_reward = '$vi_adcolony_reward',
    vi_admob_reward = '$vi_admob_reward',
    vi_startapp_reward = '$vi_startapp_reward',
    vi_vugnle_reward = '$vi_vugnle_reward',
    vi_unity_reward = '$vi_unity_reward',
    video_wall_ava = '$video_wall_ava'


     WHERE id = '$id'";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("Error: " . $conn->error);
    }


  
    if ($stmt->execute()) {
        header('Location: video_wall_settings.php');
    } else {
        header('Location: video_wall_settings.php');
    }
}
?>

 video_update_api