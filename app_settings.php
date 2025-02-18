<?php include 'main_app.php'; ?>
<?php 

include 'header.php' ;
include 'connect.php' ;
 
  
$id = 1; // Change this to the desired ID
$sql = "SELECT * FROM app_setting WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        $signup_bonus = $row["signup_bonus"];
        $privacy_policy = $row["privacy_policy"];
        $daily_check_rewards = $row["daily_check_rewards"];
        $refer_bonus = $row['refer_bonus'];
 
        //
        $os_rest_api = $row["os_rest_api"];
        $one_signal_app_id = $row["one_signal_app_id"];

        //
        $int_ads_count = $row['int_ads_count'];
        $minas_reward_point = $row['minas_reward_point'];
        $refer_page_text = $row['refer_page_text'];


        $adcolony_app_id = $row["adcolony_app_id"];
        $adcolony_reward_zone = $row["adcolony_reward_zone"];
        $unity_game_id = $row["unity_game_id"];
        $admob_banner_ads_id = $row["admob_banner_ads_id"];
        $admob_video_ads_id = $row["admob_video_ads_id"];
        $vungle_key = $row["vungle_key"];
        $vungle_int_ads_id = $row["vungle_int_ads_id"];
        $adcolony_int_zone_id = $row["adcolony_int_zone_id"];
        $int_admob_ads_id = $row["int_admob_ads_id"];
        $ironsource_app_key = $row["ironsource_app_key"];
        $startapp_id = $row['startapp_id'];
        

        $collect_rewards_ads = $row['collect_rewards_ads'];
        $collect_int_ads = $row['collect_int_ads'];
        $open_rewards_ads = $row['open_rewards_ads'];
        $open_int_ads = $row['open_int_ads'];
        $gold_video_ads = $row['gold_video_ads'];
        
 
    }
} else {
    echo "No results found.";
}
 
 
//ads id
 
 

?>








<div class="modal-body">


<form action="setting_update_api.php" method="POST" enctype="multipart/form-data">
   


   

    <div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label">Signup Bonus</label>
            <input type="text" name="signup_bonus" id="nameBasic" class="form-control"  value="<?php  echo $signup_bonus ?>" placeholder="<?php  echo $signup_bonus ?>" />
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label">interstitial  Ads Count</label>
            <input type="text" name="int_ads_count" id="nameBasic" class="form-control"  value="<?php  echo $int_ads_count ?>" placeholder="<?php  echo $int_ads_count ?>" />
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label">Refer Bonus</label>
            <input type="text" name="refer_bonus" id="nameBasic" class="form-control"  value="<?php  echo $refer_bonus ?>" placeholder="<?php  echo $refer_bonus ?>" />
        </div>
    </div>


    <div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label">Daily Bonus</label>
            <input type="text" name="daily_check_rewards" id="nameBasic" class="form-control"  value="<?php  echo $daily_check_rewards ?>" placeholder="<?php  echo $daily_check_rewards ?>" />
        </div>
    </div>
 
    <div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label"> Minas Reward Point </label>
            <input type="text" name="minas_reward_point" id="nameBasic" class="form-control"  value="<?php  echo $minas_reward_point ?>" placeholder="<?php  echo $minas_reward_point ?>" />
        </div>
    </div>
    
    <div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label">Refer Page Text</label>
            <input type="text" name="refer_page_text" id="refer_page_text" class="form-control"  value="<?php  echo $refer_page_text ?>" placeholder="<?php  echo $refer_page_text ?>" />
        </div>
    </div>
    
    <div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label">Privacy Policy Url</label>
            <input type="text" name="privacy_policy" id="nameBasic" class="form-control"  value="<?php  echo $privacy_policy ?>" placeholder="<?php  echo $privacy_policy ?>" />
        </div>
    </div>
 

 

    <br><br><br>
    <h2 for="nameBasic"  style="    font-size: 22px;">OneSignal Configuration</h2>

    
    <div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label"> OneSignal App ID</label>
            <input type="text" name="one_signal_app_id" id="nameBasic" class="form-control"  value="<?php  echo $one_signal_app_id ?>" placeholder="<?php  echo $one_signal_app_id ?>" />
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label"> OneSignal Rest API</label>
            <input type="text" name="os_rest_api" id="nameBasic" class="form-control"  value="<?php  echo $os_rest_api ?>" placeholder="<?php  echo $os_rest_api ?>" />
        </div>
    </div>




    
    <br><br><br>
    <h2 for="nameBasic"  style="    font-size: 22px;"> Ads Id Configuration</h2>

    
    <div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label"> Adcolony app id</label>
            <input type="text" name="adcolony_app_id" id="nameBasic" class="form-control"  value="<?php  echo $adcolony_app_id ?>" placeholder="<?php  echo $adcolony_app_id ?>" />
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label">  Adcolony reward zone ID</label>
            <input type="text" name="adcolony_reward_zone" id="nameBasic" class="form-control"  value="<?php  echo $adcolony_reward_zone ?>" placeholder="<?php  echo $adcolony_reward_zone ?>" />
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label">  Adcolony Int Zone id </label>
            <input type="text" name="adcolony_int_zone_id" id="nameBasic" class="form-control"  value="<?php  echo $adcolony_int_zone_id ?>" placeholder="<?php  echo $adcolony_int_zone_id ?>" />
        </div>
    </div>


    <div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label">  Unity game id </label>
            <input type="text" name="unity_game_id" id="nameBasic" class="form-control"  value="<?php  echo $unity_game_id ?>" placeholder="<?php  echo $unity_game_id ?>" />
        </div>
    </div>




    <div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label">  Vungle Key</label>
            <input type="text" name="vungle_key" id="nameBasic" class="form-control"  value="<?php  echo $vungle_key ?>" placeholder="<?php  echo $vungle_key ?>" />
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label">  Vungle Int ID </label>
            <input type="text" name="vungle_int_ads_id" id="nameBasic" class="form-control"  value="<?php  echo $vungle_int_ads_id ?>" placeholder="<?php  echo $vungle_int_ads_id ?>" />
        </div>
    </div>

 
    <div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label">  Admob Video ID </label>
            <input type="text" name="admob_video_ads_id" id="nameBasic" class="form-control"  value="<?php  echo $admob_video_ads_id ?>" placeholder="<?php  echo $admob_video_ads_id ?>" />
        </div>
    </div>

    


    <div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label">  Admob Banner  id </label>
            <input type="text" name="admob_banner_ads_id" id="nameBasic" class="form-control"  value="<?php  echo $admob_banner_ads_id ?>" placeholder="<?php  echo $admob_banner_ads_id ?>" />
        </div>
    </div>



    <div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label">  Admob interstitial ID </label>
            <input type="text" name="int_admob_ads_id" id="nameBasic" class="form-control"  value="<?php  echo $int_admob_ads_id ?>" placeholder="<?php  echo $int_admob_ads_id ?>" />
        </div>
    </div>



    <div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label">ironsource app Key </label>
            <input type="text" name="ironsource_app_key" id="nameBasic" class="form-control"  value="<?php  echo $ironsource_app_key ?>" placeholder="<?php  echo $ironsource_app_key ?>" />
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label">Startapp Id </label>
            <input type="text" name="startapp_id" id="nameBasic" class="form-control"  value="<?php  echo $startapp_id ?>" placeholder="<?php  echo $startapp_id ?>" />
        </div>
    </div>




    <br><br><br>
    <h2 for="nameBasic"  style="    font-size: 22px;"> Some Configuration</h2>


    
    <div class="row">
    
    <div class="col mb-3">
        <label for="nameBasic" class="form-label">Collect Rewards Ads </label>
      
      
        
            <select name="collect_rewards_ads" class="form-control">
                       <option value="<?= $collect_rewards_ads ?? '' ?>"><?= $collect_rewards_ads ?? '' ?></option>      
                        <option value="Admob">Admob</option>
                        <option value="Vungle">Vungle</option>
                        <option value="UnityAds">UnityAds</option>
                        <option value="AdColony">AdColony</option>
                        <option value="Startapp">Startapp</option>
                        <option value="applovin">applovin</option>
                     
                        
            </select>
        </div>
    </div>
 

    <div class="col mb-3">
            <label for="nameBasic" class="form-label">Collect interstitial Ads </label>
       
            <select name="collect_int_ads" class="form-control">
                       <option value="<?= $collect_int_ads ?? '' ?>"><?= $collect_int_ads ?? '' ?></option>    
                        <option value="Admob">Admob</option>
                        <option value="Vungle">Vungle</option>
       
                        <option value="AdColony">AdColony</option>
                        <option value="Startapp">Startapp</option>
    
                     
                        
            </select>
        </div>
  
    

    <div class="col mb-3">
    <label for="nameBasic" class="form-label">Open Rewards Video Ads </label>
    
            <select name="open_rewards_ads" class="form-control">
                       <option value="<?= $open_rewards_ads ?? '' ?>"><?= $open_rewards_ads ?? '' ?></option>    
                        <option value="Admob">Admob</option>
                        <option value="Vungle">Vungle</option>
                        <option value="UnityAds">UnityAds</option>
                        <option value="AdColony">AdColony</option>
                        <option value="Startapp">Startapp</option>
                        <option value="applovin">applovin</option>
                     
                        
            </select>
    </div>
 

    <div class="col mb-3">
    <label for="nameBasic" class="form-label">Open Rewards interstitial Ads </label>
     
                      
            <select name="open_int_ads" class="form-control">
                       <option value="<?= $open_int_ads ?? '' ?>"><?= $open_int_ads ?? '' ?></option>   
                        <option value="Admob">Admob</option>
                        <option value="Vungle">Vungle</option>
         
                        <option value="AdColony">AdColony</option>
                        <option value="Startapp">Startapp</option>
                 
                     
                        
            </select>
        </div>
  
    <div class="col mb-3">
    <label for="nameBasic" class="form-label">Gold Rewards Video Ads </label>
    
            <select name="gold_video_ads" class="form-control">
                       <option value="<?= $gold_video_ads ?? '' ?>"><?= $gold_video_ads ?? '' ?></option>   
                        <option value="Admob">Admob</option>
                        <option value="Vungle">Vungle</option>
                        <option value="UnityAds">UnityAds</option>
                        <option value="AdColony">AdColony</option>
                        <option value="Startapp">Startapp</option>
                        <option value="applovin">applovin</option>
                     
                        
            </select>
        </div>
  
  


    




   <input style="display: none;" name="product_id" value="<?php echo $id ?>" id="nameBasic" class="form-control" placeholder="Enter Ads Details" />
    


   <div class="modal-footer">
       <input style="display: none;" name="method" value="submit_ads" id="nameBasic" class="form-control" placeholder="Enter Ads Details" />
       <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
       <button type="submit" value="Submit" class="btn btn-primary">Save changes</button>
   </div>
</form>



           </div>



<?php include 'footer.php' ; ?>