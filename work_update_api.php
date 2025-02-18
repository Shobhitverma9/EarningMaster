
<?php include 'main_app.php'; ?>


<?php
include('connect.php');

// Retrieve the form data
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $id = '1';


    $spin_count_ava = $_POST['spin_count_ava'] ?? '';
    $tic_tac_toe_count_ava = $_POST['tic_tac_toe_count_ava'] ?? '';
    $open_count_ava = $_POST['open_count_ava'] ?? '';
    $eve_count_ava = $_POST['eve_count_ava'] ?? '';
    $ads_scratch_count_ava = $_POST['ads_scratch_count_ava'] ?? '';
    $ex_scratch_count_ava = $_POST['ex_scratch_count_ava'] ?? '';
    $gr_scratch_count_ava = $_POST['gr_scratch_count_ava'] ?? '';
    $collect_count_ava = $_POST['collect_count_ava'];
   

    //

    $spin_video_ads = $_POST['spin_video_ads'];
    $spin_int_ads =$_POST['spin_int_ads'];

    //


    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE app_settingte SET 
    
    spin_count_ava = '$spin_count_ava',
    tic_tac_toe_count_ava = '$tic_tac_toe_count_ava',
    collect_count_ava = '$collect_count_ava',
    open_count_ava = '$open_count_ava',
    eve_count_ava = '$eve_count_ava',
    ads_scratch_count_ava = '$ads_scratch_count_ava',
    ex_scratch_count_ava = '$ex_scratch_count_ava',
    gr_scratch_count_ava = '$gr_scratch_count_ava',
    spin_video_ads = '$spin_video_ads',
    spin_int_ads = '$spin_int_ads'
   
  
     WHERE id = '$id'";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("Error: " . $conn->error);
    }


  
    if ($stmt->execute()) {
        header('Location: work_settings.php');
    } else {
        header('Location: work_settings.php');
    }
}
?>

 