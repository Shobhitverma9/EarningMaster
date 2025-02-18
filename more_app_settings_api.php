
<?php include 'main_app.php'; ?>


<?php
include('connect.php');

// Retrieve the form data
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $id = '1';


    $king_pot_video_ads =$_POST['king_pot_video_ads'];
    $pollfish_key_app = $_POST['pollfish_key_app'];
    $pay_earn_rewards_point = $_POST['pay_earn_rewards_point'];
    $pay_earn_video_ads = $_POST['pay_earn_video_ads'];
    $ada_scratch_point = $_POST['ada_scratch_point'];
    $extra_scratch_point = $_POST['extra_scratch_point'];
    $gret_scratch_point = $_POST['gret_scratch_point'];
    $ada_scratch_video_ads = $_POST['ada_scratch_video_ads'];
    $ada_scratch_int_ads = $_POST['ada_scratch_int_ads'];
    $extra_scratch_int_ads = $_POST['extra_scratch_int_ads'];
    $extra_scratch_video_ads = $_POST['extra_scratch_video_ads'];
    $great_scratch_point = $_POST['great_scratch_point'];
    $great_scratch_video_ads = $_POST['great_scratch_video_ads'];
    $great_scratch_int_ads = $_POST['great_scratch_int_ads'];
    $open_rewards_point = $_POST['open_rewards_point'];
    $gold_rewards_point = $_POST['gold_rewards_point'];
    $king_pot_point = $_POST['king_pot_point'];
    $everday_video_ads = $_POST['everday_video_ads'];
    $everday_int_ads = $_POST['everday_int_ads'];
    $tic_tac_point = $_POST['tic_tac_point'];
    $tic_video_ads = $_POST['tic_video_ads'];
    $tic_int_ads = $_POST['tic_int_ads'];
    $adget_wall_id = $_POST['adget_wall_id'];
    $fyber_app_id = $_POST['fyber_app_id'];
    $fyber_security_key = $_POST['fyber_security_key'];
    $collect_rewards_point = $_POST['collect_rewards_point'];
    


    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE app_settingtt SET 
    
  
    king_pot_video_ads ='$king_pot_video_ads',
    pollfish_key_app = '$pollfish_key_app',
    pay_earn_rewards_point = '$pay_earn_rewards_point',
    pay_earn_video_ads = '$pay_earn_video_ads',
    ada_scratch_point = '$ada_scratch_point',
    extra_scratch_point = '$extra_scratch_point',
    gret_scratch_point = '$gret_scratch_point',
    ada_scratch_video_ads = '$ada_scratch_video_ads',
    ada_scratch_int_ads = '$ada_scratch_int_ads',
    extra_scratch_int_ads = '$extra_scratch_int_ads',
    extra_scratch_video_ads = '$extra_scratch_video_ads',
    great_scratch_point = '$great_scratch_point',
    great_scratch_video_ads = '$great_scratch_video_ads',
    great_scratch_int_ads = '$great_scratch_int_ads',
    open_rewards_point = '$open_rewards_point',
    gold_rewards_point = '$gold_rewards_point',
    king_pot_point = '$king_pot_point',
    everday_video_ads = '$everday_video_ads',
    everday_int_ads = '$everday_int_ads',
    tic_tac_point = '$tic_tac_point',
    tic_video_ads = '$tic_video_ads',
    tic_int_ads = '$tic_int_ads',
    adget_wall_id = '$adget_wall_id',
    fyber_app_id = '$fyber_app_id',
    fyber_security_key = '$fyber_security_key',
    collect_rewards_point = '$collect_rewards_point'
 

     WHERE id = '$id'";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("Error: " . $conn->error);
    }


  
    if ($stmt->execute()) {
        header('Location: more_app_settings.php');
    } else {
        header('Location: more_app_settings.php');
    }
}
?>

 