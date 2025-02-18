<?php include 'main_app.php'; ?>
<?php 

include 'header.php' ;
include 'connect.php' ;
 
  
$id = 1; // Change this to the desired ID
$sql = "SELECT * FROM app_settingtt WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {

        $king_pot_video_ads = $row["king_pot_video_ads"];
        $pollfish_key_app = $row["pollfish_key_app"];
        $pay_earn_rewards_point = $row["pay_earn_rewards_point"];
        $pay_earn_video_ads = $row["pay_earn_video_ads"];
        $ada_scratch_point = $row["ada_scratch_point"];
        $extra_scratch_point = $row["extra_scratch_point"];
        $gret_scratch_point = $row["gret_scratch_point"];
        $ada_scratch_video_ads = $row["ada_scratch_video_ads"];
        $ada_scratch_int_ads = $row["ada_scratch_int_ads"];
        $extra_scratch_int_ads = $row["extra_scratch_int_ads"];
        $extra_scratch_video_ads = $row["extra_scratch_video_ads"];
        $great_scratch_point = $row["great_scratch_point"];
        $great_scratch_video_ads = $row["great_scratch_video_ads"];
        $great_scratch_int_ads = $row["great_scratch_int_ads"];
        $open_rewards_point = $row["open_rewards_point"];
        $gold_rewards_point = $row["gold_rewards_point"];
        $king_pot_point = $row["king_pot_point"];
        $everday_video_ads = $row["everday_video_ads"];
        $everday_int_ads = $row["everday_int_ads"];
        $tic_tac_point = $row["tic_tac_point"];
        $tic_video_ads = $row["tic_video_ads"];
        $tic_int_ads = $row["tic_int_ads"];
        $adget_wall_id = $row["adget_wall_id"];
        $fyber_app_id = $row["fyber_app_id"];
        $fyber_security_key = $row["fyber_security_key"];
        $collect_rewards_point = $row["collect_rewards_point"];
  
      
        
        
 
    }
} else {
    echo "No results found.";
}
 
 
//ads id
 
 

?>








<div class="modal-body">


<form action="more_app_settings_api.php" method="POST" enctype="multipart/form-data">
   

<div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label"> adgate media Wall id</label>
            <input type="text" name="adget_wall_id" id="nameBasic" class="form-control"  value="<?php  echo $adget_wall_id ?>" placeholder="<?php  echo $adget_wall_id ?>" />
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label"> Fyber app id </label>
            <input type="text" name="fyber_app_id" id="nameBasic" class="form-control"  value="<?php  echo $fyber_app_id ?>" placeholder="<?php  echo $fyber_app_id ?>" />
        </div>
    </div>
 
    
    <div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label"> Fyber Security id </label>
            <input type="text" name="fyber_security_key" id="nameBasic" class="form-control"  value="<?php  echo $fyber_security_key ?>" placeholder="<?php  echo $fyber_security_key ?>" />
        </div>
    </div>
   

    <div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label">Pollfish Key App</label>
            <input type="text" name="pollfish_key_app" id="nameBasic" class="form-control"  value="<?php  echo $pollfish_key_app ?>" placeholder="<?php  echo $pollfish_key_app ?>" />
        </div>
    </div>

 

    <div class="col mb-3">
    <label for="nameBasic" class="form-label">King Pot Video Ads</label>
      
 
        
            <select name="king_pot_video_ads" class="form-control">
                       <option value="<?= $king_pot_video_ads ?? '' ?>"><?= $king_pot_video_ads ?? '' ?></option>    
                        <option value="Admob">Admob</option>
                        <option value="Vungle">Vungle</option>
                        <option value="UnityAds">UnityAds</option>
                        <option value="AdColony">AdColony</option>
                        <option value="Startapp">Startapp</option>
                        <option value="applovin">applovin</option>
                     
                        
            </select>
    </div>
  
    <div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label"> Pay Earn Rewards Point </label>
            <input type="text" name="pay_earn_rewards_point" id="nameBasic" class="form-control"  value="<?php  echo $pay_earn_rewards_point ?>" placeholder="<?php  echo $pay_earn_rewards_point ?>" />
        </div>
    </div>


 
    
    <div class="col mb-3">
    <label for="nameBasic" class="form-label">Pay Earn Video Ads</label>
      
       
      
            <select name="pay_earn_video_ads" class="form-control">
                       <option value="<?= $pay_earn_video_ads ?? '' ?>"><?= $pay_earn_video_ads ?? '' ?></option>   
                        <option value="Admob">Admob</option>
                        <option value="Vungle">Vungle</option>
                        <option value="UnityAds">UnityAds</option>
                        <option value="AdColony">AdColony</option>
                        <option value="Startapp">Startapp</option>
                        <option value="applovin">applovin</option>
                     
                        
            </select>
    </div>
 
 
    
    <div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label">Additional Scratch Point</label>
            <input type="text" name="ada_scratch_point" id="ada_scratch_point" class="form-control"  value="<?php  echo $ada_scratch_point ?>" placeholder="<?php  echo $ada_scratch_point ?>" />
        </div>
    </div>
    
    <div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label"> Extra Scratch point </label>
            <input type="text" name="extra_scratch_point" id="nameBasic" class="form-control"  value="<?php  echo $extra_scratch_point ?>" placeholder="<?php  echo $extra_scratch_point ?>" />
        </div>
    </div>
 
    <div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label"> Great Scratch point </label>
            <input type="text" name="gret_scratch_point" id="nameBasic" class="form-control"  value="<?php  echo $gret_scratch_point ?>" placeholder="<?php  echo $gret_scratch_point ?>" />
        </div>
    </div>
 

    
    <div class="col mb-3">
    <label for="nameBasic" class="form-label"> Additional Scratch  Video Ads </label>
     
            <select name="ada_scratch_video_ads" class="form-control">
                       <option value="<?= $ada_scratch_video_ads ?? '' ?>"><?= $ada_scratch_video_ads ?? '' ?></option>   
                        <option value="Admob">Admob</option>
                        <option value="Vungle">Vungle</option>
                        <option value="UnityAds">UnityAds</option>
                        <option value="AdColony">AdColony</option>
                        <option value="Startapp">Startapp</option>
                        <option value="applovin">applovin</option>
                     
                        
            </select>
    </div>
   
 
 
    
    <div class="col mb-3">
    <label for="nameBasic" class="form-label"> Additional Scratch  interstitial Ads </label>
      
  
        
            <select name="ada_scratch_int_ads" class="form-control">
                       <option value="<?= $ada_scratch_int_ads ?? '' ?>"><?= $ada_scratch_int_ads ?? '' ?></option>   
                        <option value="Admob">Admob</option>
                        <option value="Vungle">Vungle</option>
                        <option value="UnityAds">UnityAds</option>
                        <option value="AdColony">AdColony</option>
                        <option value="Startapp">Startapp</option>
                        <option value="applovin">applovin</option>
                     
                        
            </select>
    </div>
   
 
 
        
    <div class="col mb-3">
    <label for="nameBasic" class="form-label"> Extra Scratch  interstitial Ads </label>
      
        
            <select name="extra_scratch_int_ads" class="form-control">
                       <option value="<?= $extra_scratch_int_ads ?? '' ?>"><?= $extra_scratch_int_ads ?? '' ?></option>   
                        <option value="Admob">Admob</option>
                        <option value="Vungle">Vungle</option>
                        <option value="UnityAds">UnityAds</option>
                        <option value="AdColony">AdColony</option>
                        <option value="Startapp">Startapp</option>
                        <option value="applovin">applovin</option>
                     
                        
            </select>
    </div>
   
 
            
    <div class="col mb-3">
    <label for="nameBasic" class="form-label"> Extra Scratch  video Ads </label>
      
        
                
            <select name="extra_scratch_video_ads" class="form-control">
                       <option value="<?= $extra_scratch_video_ads ?? '' ?>"><?= $extra_scratch_video_ads ?? '' ?></option> 
                        <option value="Admob">Admob</option>
                        <option value="Vungle">Vungle</option>
                        <option value="UnityAds">UnityAds</option>
                        <option value="AdColony">AdColony</option>
                        <option value="Startapp">Startapp</option>
                        <option value="applovin">applovin</option>
                     
                        
            </select>
    </div>
   
 
 
      
             
   
 
    <div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label"> Great Scratch Point</label>
            <input type="text" name="great_scratch_point" id="nameBasic" class="form-control"  value="<?php  echo $great_scratch_point ?>" placeholder="<?php  echo $great_scratch_point ?>" />
        </div>
    </div>
 
    
    <div class="col mb-3">
 
    <label for="nameBasic" class="form-label"> Great Scratch Video Ads</label>
    
            <select name="great_scratch_video_ads" class="form-control">
                       <option value="<?= $great_scratch_video_ads ?? '' ?>"><?= $great_scratch_video_ads ?? '' ?></option> 
                        <option value="Admob">Admob</option>
                        <option value="Vungle">Vungle</option>
                        <option value="UnityAds">UnityAds</option>
                        <option value="AdColony">AdColony</option>
                        <option value="Startapp">Startapp</option>
                        <option value="applovin">applovin</option>
                     
                        
            </select>
    </div>
   
 
     
    <div class="col mb-3">
 
    <label for="nameBasic" class="form-label"> Great Scratch interstitial Ads</label>
      
       
        
            <select name="great_scratch_int_ads" class="form-control">
                       <option value="<?= $great_scratch_int_ads ?? '' ?>"><?= $great_scratch_int_ads ?? '' ?></option> 
                        <option value="Admob">Admob</option>
                        <option value="Vungle">Vungle</option>
                        <option value="UnityAds">UnityAds</option>
                        <option value="AdColony">AdColony</option>
                        <option value="Startapp">Startapp</option>
                        <option value="applovin">applovin</option>
                     
                        
            </select>
    </div>
   

  
    
    <div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label">   Open Rewards Point </label>
            <input type="text" name="open_rewards_point" id="nameBasic" class="form-control"  value="<?php  echo $open_rewards_point ?>" placeholder="<?php  echo $open_rewards_point ?>" />
        </div>
    </div>
     
    <div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label">   Gold Rewards Point </label>
            <input type="text" name="gold_rewards_point" id="nameBasic" class="form-control"  value="<?php  echo $gold_rewards_point ?>" placeholder="<?php  echo $gold_rewards_point ?>" />
        </div>
    </div>
 
    <div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label"> King Pot Point </label>
            <input type="text" name="king_pot_point" id="nameBasic" class="form-control"  value="<?php  echo $king_pot_point ?>" placeholder="<?php  echo $king_pot_point ?>" />
        </div>
    </div>


    <div class="col mb-3">
    <label for="nameBasic" class="form-label"> Everday Gift  Video Ads </label>
   
 
         <select name="everday_video_ads" class="form-control">
                       <option value="<?= $everday_video_ads ?? '' ?>"><?= $everday_video_ads ?? '' ?></option> 
                     <option value="Admob">Admob</option>
                     <option value="Vungle">Vungle</option>
                     <option value="UnityAds">UnityAds</option>
                     <option value="AdColony">AdColony</option>
                     <option value="Startapp">Startapp</option>
                     <option value="applovin">applovin</option>
                  
                     
         </select>
 </div>

 
 
 <div class="col mb-3">
 <label for="nameBasic" class="form-label"> Everday Gift  interstitial  Ads </label>
   
  
         <select name="everday_int_ads" class="form-control">
                       <option value="<?= $everday_int_ads ?? '' ?>"><?= $everday_int_ads ?? '' ?></option> 
                     <option value="Admob">Admob</option>
                     <option value="Vungle">Vungle</option>
                     <option value="UnityAds">UnityAds</option>
                     <option value="AdColony">AdColony</option>
                     <option value="Startapp">Startapp</option>
                     <option value="applovin">applovin</option>
                  
                     
         </select>
 </div>


 
 
    
    <div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label"> Tic Tac Toe Point </label>
            <input type="text" name="tic_tac_point" id="nameBasic" class="form-control"  value="<?php  echo $tic_tac_point ?>" placeholder="<?php  echo $tic_tac_point ?>" />
        </div>
    </div>
 
 
 
    <div class="col mb-3">
    <label for="nameBasic" class="form-label"> Tic Tac Toe Vdieo Ads</label>
    
         <select name="tic_video_ads" class="form-control">
                       <option value="<?= $tic_video_ads ?? '' ?>"><?= $tic_video_ads ?? '' ?></option> 
                     <option value="Admob">Admob</option>
                     <option value="Vungle">Vungle</option>
                     <option value="UnityAds">UnityAds</option>
                     <option value="AdColony">AdColony</option>
                     <option value="Startapp">Startapp</option>
                     <option value="applovin">applovin</option>
                  
                     
         </select>
 </div>



  
 
 <div class="col mb-3">
 <label for="nameBasic" class="form-label"> Tic Tac Toe interstitial  Ads</label>
 
         <select name="tic_int_ads" class="form-control">
                       <option value="<?= $tic_int_ads ?? '' ?>"><?= $tic_int_ads ?? '' ?></option> 
                     <option value="Admob">Admob</option>
                     <option value="Vungle">Vungle</option>
                     <option value="UnityAds">UnityAds</option>
                     <option value="AdColony">AdColony</option>
                     <option value="Startapp">Startapp</option>
                     <option value="applovin">applovin</option>
                  
                     
         </select>
 </div>
 
   
 
    <div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label"> Collect Rewards Point </label>
            <input type="text" name="collect_rewards_point" id="nameBasic" class="form-control"  value="<?php  echo $collect_rewards_point ?>" placeholder="<?php  echo $collect_rewards_point ?>" />
        </div>
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