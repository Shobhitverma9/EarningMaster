<?php include 'main_app.php'; ?>
<?php 

include 'header.php' ;
include 'connect.php' ;
 
  
$id = 1; // Change this to the desired ID
$sql = "SELECT * FROM app_settingte WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        
 
        //
        $spin_count_ava = $row["spin_count_ava"];
        $tic_tac_toe_count_ava = $row["tic_tac_toe_count_ava"];
        $collect_count_ava = $row["collect_count_ava"];
        $open_count_ava = $row["open_count_ava"];
        $eve_count_ava = $row["eve_count_ava"];
        $ads_scratch_count_ava = $row["ads_scratch_count_ava"];
        $ex_scratch_count_ava = $row["ex_scratch_count_ava"];
        $gr_scratch_count_ava = $row["gr_scratch_count_ava"];
        $spin_video_ads = $row['spin_video_ads'];
        $spin_int_ads = $row['spin_int_ads'];
  
  
     
 
    }
} else {
    echo "No results found.";
}
 
 


?>








<div class="modal-body">


<form action="work_update_api.php" method="POST" enctype="multipart/form-data">
   


<div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label">Spin Video Ads</label>
   
        
            <select name="spin_video_ads" class="form-control">
                       <option value="<?= $spin_video_ads ?? '' ?>"><?= $spin_video_ads ?? '' ?></option> 
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
            <label for="nameBasic" class="form-label">Spin Interstitial Ads</label>
      
 
            <select name="spin_int_ads" class="form-control">
                       <option value="<?= $spin_int_ads ?? '' ?>"><?= $spin_int_ads ?? '' ?></option> 
                        <option value="Admob">Admob</option>
                        <option value="Vungle">Vungle</option>
                        <option value="UnityAds">UnityAds</option>
                        <option value="AdColony">AdColony</option>
                        <option value="Startapp">Startapp</option>
                        <option value="applovin">applovin</option>
                     
                        
            </select>
        </div>
    </div>
    

    <div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label">Spin Available Chance</label>
            <input type="text" name="spin_count_ava" id="nameBasic" class="form-control"  value="<?php  echo $spin_count_ava ?>" placeholder="<?php  echo $spin_count_ava ?>" />
        </div>
    </div>
 

    <div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label">Tic Tac Toe Available Chance</label>
            <input type="text" name="tic_tac_toe_count_ava" id="nameBasic" class="form-control"  value="<?php  echo $tic_tac_toe_count_ava ?>" placeholder="<?php  echo $tic_tac_toe_count_ava ?>" />
        </div>
    </div>

    
    <div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label"> Collect Available Chance</label>
            <input type="text" name="collect_count_ava" id="nameBasic" class="form-control"  value="<?php  echo $collect_count_ava ?>" placeholder="<?php  echo $collect_count_ava ?>" />
        </div>
    </div>
 
    <div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label"> Opne Available Chance</label>
            <input type="text" name="open_count_ava" id="nameBasic" class="form-control"  value="<?php  echo $open_count_ava ?>" placeholder="<?php  echo $open_count_ava ?>" />
        </div>
    </div>
 
    
    <div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label"> Everday Gift Available Chance</label>
            <input type="text" name="eve_count_ava" id="nameBasic" class="form-control"  value="<?php  echo $eve_count_ava ?>" placeholder="<?php  echo $eve_count_ava ?>" />
        </div>
    </div>
 
 
    
    <div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label"> Additional Scratch Available Chance</label>
            <input type="text" name="ads_scratch_count_ava" id="nameBasic" class="form-control"  value="<?php  echo $ads_scratch_count_ava ?>" placeholder="<?php  echo $ads_scratch_count_ava ?>" />
        </div>
    </div>
 


    <div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label"> Extra Scratch Available Chance</label>
            <input type="text" name="ex_scratch_count_ava" id="nameBasic" class="form-control"  value="<?php  echo $ex_scratch_count_ava ?>" placeholder="<?php  echo $ex_scratch_count_ava ?>" />
        </div>
    </div>
 

    <div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label"> Great Scratch Available Chance</label>
            <input type="text" name="gr_scratch_count_ava" id="nameBasic" class="form-control"  value="<?php  echo $gr_scratch_count_ava ?>" placeholder="<?php  echo $gr_scratch_count_ava ?>" />
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