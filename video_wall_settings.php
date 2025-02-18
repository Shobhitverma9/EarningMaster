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
        $vi_applovin_reward = $row["vi_applovin_reward"];
        $vi_adcolony_reward = $row["vi_adcolony_reward"];
        $vi_admob_reward = $row["vi_admob_reward"];
        $vi_startapp_reward = $row["vi_startapp_reward"];
        $vi_vugnle_reward = $row["vi_vugnle_reward"];
        $vi_unity_reward = $row["vi_unity_reward"];
        $video_wall_ava = $row["video_wall_ava"];
        
 
    }
} else {
    echo "No results found.";
}
 
 


?>








<div class="modal-body">


<form action="video_update_api.php" method="POST" enctype="multipart/form-data">
   


      

<div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label">Video Wall Available Chance</label>
            <input type="text" name="video_wall_ava" id="nameBasic" class="form-control"  value="<?php  echo $video_wall_ava ?>" placeholder="<?php  echo $video_wall_ava ?>" />
        </div>
    </div>


    <div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label">Video Wall Applovin Reward</label>
            <input type="text" name="vi_applovin_reward" id="nameBasic" class="form-control"  value="<?php  echo $vi_applovin_reward ?>" placeholder="<?php  echo $vi_applovin_reward ?>" />
        </div>
    </div>


    <div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label">Video Wall Adcolony Reward</label>
            <input type="text" name="vi_adcolony_reward" id="nameBasic" class="form-control"  value="<?php  echo $vi_adcolony_reward ?>" placeholder="<?php  echo $vi_adcolony_reward ?>" />
        </div>
    </div>


    
    <div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label">Video Wall Admob Reward</label>
            <input type="text" name="vi_admob_reward" id="nameBasic" class="form-control"  value="<?php  echo $vi_admob_reward ?>" placeholder="<?php  echo $vi_admob_reward ?>" />
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label">Video Wall StartApp Reward</label>
            <input type="text" name="vi_startapp_reward" id="nameBasic" class="form-control"  value="<?php  echo $vi_startapp_reward ?>" placeholder="<?php  echo $vi_startapp_reward ?>" />
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label">Video Wall Vungle Reward</label>
            <input type="text" name="vi_vugnle_reward" id="nameBasic" class="form-control"  value="<?php  echo $vi_vugnle_reward ?>" placeholder="<?php  echo $vi_vugnle_reward ?>" />
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label">Video Wall Unity Reward</label>
            <input type="text" name="vi_unity_reward" id="nameBasic" class="form-control"  value="<?php  echo $vi_unity_reward ?>" placeholder="<?php  echo $vi_unity_reward ?>" />
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