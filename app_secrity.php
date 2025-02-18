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
 
        //
        $block_rooted_devices = $row['block_rooted_devices'];
        $block_vpn_access = $row['block_vpn_access'];
        $block_app_clone = $row['block_app_clone'];
 

 
    }
} else {
    echo "No results found.";
}
 
 


?>








<div class="modal-body">


<form action="app_secrity_api.php" method="POST" enctype="multipart/form-data">
   


   
 
    
    <div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label"> Block Rooted Devices </label>
      
 
        
            <select name="block_rooted_devices" class="form-control">
                       <option value="<?= $block_rooted_devices ?? '' ?>"><?= $block_rooted_devices ?? '' ?></option>    
                
                        <option value="true">true</option>
                        <option value="false">false</option>
               
                        
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label"> Block VPN Access </label>
 
        
                         
            <select name="block_vpn_access" class="form-control">
                       <option value="<?= $block_vpn_access ?? '' ?>"><?= $block_vpn_access ?? '' ?></option>    
                        <option value="true">true</option>
                        <option value="false">false</option>
               
                        
            </select>
        </div>
    </div>
    
    
    <div class="row">
        <div class="col mb-3">
            <label for="nameBasic" class="form-label"> Block App Clone </label>
      
 
            <select name="block_app_clone" class="form-control">
                       <option value="<?= $block_app_clone ?? '' ?>"><?= $block_app_clone ?? '' ?></option>  
                        <option value="true">true</option>
                        <option value="false">false</option>
               
                        
            </select>
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