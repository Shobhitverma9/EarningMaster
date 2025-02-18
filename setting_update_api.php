
<?php include 'main_app.php'; ?>


<?php
include('connect.php');

// Retrieve the form data
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $id = '1';


    $signup_bonus = $_POST['signup_bonus'] ?? '';
    $refer_bonus = $_POST['refer_bonus'] ?? '';
    $daily_check_rewards = $_POST['daily_check_rewards'] ?? '';
    $one_signal_app_id = $_POST['one_signal_app_id'] ?? '';
    $os_rest_api = $_POST['os_rest_api'] ?? '';
    $int_ads_count = $_POST['int_ads_count'] ?? '';
    $minas_reward_point = $_POST['minas_reward_point'] ?? '';
    $refer_page_text = $_POST['refer_page_text'] ?? '';
    $os_rest_api = $_POST['os_rest_api'] ?? '';
 
    $adcolony_app_id = $_POST['adcolony_app_id'] ?? '';
    $adcolony_reward_zone = $_POST['adcolony_reward_zone'] ?? '';
    $unity_game_id = $_POST['unity_game_id'] ?? '';
    $admob_banner_ads_id = $_POST['admob_banner_ads_id'] ?? '';
    $admob_video_ads_id = $_POST['admob_video_ads_id'] ?? '';
    $vungle_key = $_POST['vungle_key'] ?? '';
    $vungle_int_ads_id = $_POST['vungle_int_ads_id'] ?? '';
    $adcolony_int_zone_id = $_POST['adcolony_int_zone_id'] ?? '';
    $int_admob_ads_id = $_POST['int_admob_ads_id'] ?? '';
    $ironsource_app_key = $_POST['ironsource_app_key'] ?? '';
    $startapp_id = $_POST['startapp_id'] ?? '';

    $collect_rewards_ads = $_POST['collect_rewards_ads'] ?? '';
    $collect_int_ads = $_POST['collect_int_ads'] ?? '';
    $open_rewards_ads = $_POST['open_rewards_ads'] ?? '';
    $open_int_ads = $_POST['open_int_ads'] ?? '';
    $gold_video_ads = $_POST['gold_video_ads'] ?? '';

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE app_setting SET 
    
    signup_bonus = '$signup_bonus',
    refer_bonus = '$refer_bonus',
    daily_check_rewards = '$daily_check_rewards',
    one_signal_app_id = '$one_signal_app_id',
    os_rest_api = '$os_rest_api',
    int_ads_count= '$int_ads_count',
    minas_reward_point = '$minas_reward_point',
    refer_page_text ='$refer_page_text',

    adcolony_app_id ='$adcolony_app_id',
    adcolony_reward_zone ='$adcolony_reward_zone',
    unity_game_id ='$unity_game_id',
    admob_banner_ads_id ='$admob_banner_ads_id',
    admob_video_ads_id ='$admob_video_ads_id',
    vungle_key ='$vungle_key',
    vungle_int_ads_id ='$vungle_int_ads_id',
    adcolony_int_zone_id ='$adcolony_int_zone_id',
    int_admob_ads_id ='$int_admob_ads_id',
    ironsource_app_key ='$ironsource_app_key',
    startapp_id ='$startapp_id',

    
    collect_rewards_ads = '$collect_rewards_ads',
    collect_int_ads = '$collect_int_ads',
    open_rewards_ads = '$open_rewards_ads',
    open_int_ads = '$open_int_ads',
    gold_video_ads = '$gold_video_ads'
   

     WHERE id = '$id'";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("Error: " . $conn->error);
    }


  
    if ($stmt->execute()) {
        header('Location: app_settings.php');
    } else {
        header('Location: app_settings.php');
    }
}
?>

 