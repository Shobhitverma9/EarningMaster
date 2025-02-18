<?php

include 'main_app.php' ;
include 'header.php' ;
include 'connect.php' ;

 
//date today and yesterday
date_default_timezone_set('Asia/Dhaka');
$today = date('Y-m-d');
$yesterday = date('Y-m-d', strtotime('-1 day'));
 

// get today user
$query = "SELECT COUNT(*) AS total_users FROM users WHERE DATE(date_registered) = ?";
$stmt = mysqli_prepare($conn, $query);
if ($stmt) {
    mysqli_stmt_bind_param($stmt, "s", $today);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);
    $TodaytotalUsers = $row['total_users'];
    mysqli_stmt_close($stmt);

     
} else {
    echo "Error executing query: " . mysqli_error($conn);
}

 
// get yesterdayUsers
$queryyesterday = "SELECT COUNT(*) AS yesterdayUsers FROM users WHERE DATE(date_registered) = ?";
$stmtye = mysqli_prepare($conn, $queryyesterday);
if ($stmtye) {
    mysqli_stmt_bind_param($stmtye, "s", $yesterday);
    mysqli_stmt_execute($stmtye);
    $result = mysqli_stmt_get_result($stmtye);
    $row = mysqli_fetch_assoc($result);
    $yesterdayUsers = $row['yesterdayUsers'];
    mysqli_stmt_close($stmtye);

     
} else {
    echo "Error executing query: " . mysqli_error($conn);
}


//
function calculatePercentageChangeddd($TodaytotalUsers, $yesterdayUsers) {
  if ($yesterdayUsers == 0) {
      return "N/A"; // Avoid division by zero error
  }
  $percentageChangess = (($TodaytotalUsers - $yesterdayUsers) / $yesterdayUsers) * 100;
  return round($percentageChangess, 2); // Round to two decimal places
}
$percentageChangess = calculatePercentageChangeddd($TodaytotalUsers, $yesterdayUsers);






//


// Prepare the query using prepared statements
$queryTotalP = "SELECT SUM(points) AS total_points FROM user_tracking WHERE DATE(created_date) = ?";
$stmtTotalP = mysqli_prepare($conn, $queryTotalP);
if ($stmtTotalP) {
    mysqli_stmt_bind_param($stmtTotalP, "s", $today);
    mysqli_stmt_execute($stmtTotalP);
    $resultTotalP = mysqli_stmt_get_result($stmtTotalP);
    $rowTotalP = mysqli_fetch_assoc($resultTotalP);
    $Todaypoint = $rowTotalP['total_points'];

 
    mysqli_stmt_close($stmtTotalP);
} else {
    echo "Error executing query: " . mysqli_error($conn);
}




// Prepare the query using prepared statements
$queryTodayP = "SELECT SUM(points) AS total_points FROM user_tracking WHERE DATE(created_date) = ?";
$stmtTodayP = mysqli_prepare($conn, $queryTodayP);
if ($stmtTodayP) {
    mysqli_stmt_bind_param($stmtTodayP, "s", $yesterday);
    mysqli_stmt_execute($stmtTodayP);
    $resultTotalP = mysqli_stmt_get_result($stmtTodayP);
    $rowTotalP = mysqli_fetch_assoc($resultTotalP);
    $yesterdaypoint = $rowTotalP['total_points'];

 
    mysqli_stmt_close($stmtTodayP);
} else {
    echo "Error executing query: " . mysqli_error($conn);
}


//cal 
//
function calculatePercentageChangeTwo($Todaypoint, $yesterdaypoint) {
  if ($yesterdaypoint == 0) {
      return "N/A"; // Avoid division by zero error
  }
  $percentageChangeTodayP = (($Todaypoint - $yesterdaypoint) / $yesterdaypoint) * 100;
  return round($percentageChangeTodayP, 2); // Round to two decimal places
}
$percentageChangeTodayP = calculatePercentageChangeTwo($Todaypoint, $yesterdaypoint);



//totall payment here
// Query to get the total number of users
$query = "SELECT COUNT(*) AS total_withdrawal_panding FROM withdrawal WHERE status = '0'";
$result = mysqli_query($conn, $query);
if ($result) {
  $row = mysqli_fetch_assoc($result);
  $total_withdrawal_panding = $row['total_withdrawal_panding'];

} else {
  echo "Error executing query: " . mysqli_error($connection);
}

//



//all user
$queryAllUser = "SELECT COUNT(*) AS total_users FROM users";
$resultTotla = mysqli_query($conn, $queryAllUser);
if ($resultTotla) {
  $row = mysqli_fetch_assoc($resultTotla);
  $total_users = $row['total_users'];

} else {
  echo "Error executing query: " . mysqli_error($connection);
}

 //all withdrawal
$queryAllwithdrawal = "SELECT COUNT(*) AS total_withdrawalss FROM withdrawal";
$resultwithdrawal = mysqli_query($conn, $queryAllwithdrawal);
if ($resultwithdrawal) {
  $row = mysqli_fetch_assoc($resultwithdrawal);
  $total_withdrawalss = $row['total_withdrawalss'];

} else {
  echo "Error executing query: " . mysqli_error($connection);
}

 


  //all withdrawal
  $queryusersMessage = "SELECT COUNT(*) AS usersMessage FROM contact_support";
  $resultusersMessage = mysqli_query($conn, $queryusersMessage);
  if ($resultusersMessage) {
    $row = mysqli_fetch_assoc($resultusersMessage);
    $usersMessage = $row['usersMessage'];
  
  } else {
    echo "Error executing query: " . mysqli_error($connection);
  }
  

  


?>


<div class="container-fluid py-4">
    


      <div class="row mt-4">
        <div class="col-lg-7 mb-lg-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-lg-6">
                  <div class="d-flex flex-column h-100">
                    <p class="mb-1 pt-2 text-bold">Developer By Burhan Store</p>
                    <h5 class="font-weight-bolder">Admin Dashboard</h5>
                    <p class="mb-5">Earn more money from this app</p>
                  
                  </div>
                </div>
                <div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
                  <div class="bg-gradient-primary border-radius-lg h-100">
                    <img src="assets/image/waves-white.svg" class="position-absolute h-100 w-50 top-0 d-lg-block d-none" alt="waves">
                    <div class="position-relative d-flex align-items-center justify-content-center h-100">
                      <img class="w-100 position-relative z-index-2 pt-4" src="assets/image/rocket-white.png" alt="rocket">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="card h-100 p-3">
            <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100" style="background-image: url('../assets/img/ivancik.jpg');">
              <span class="mask bg-gradient-dark"></span>
              <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                <h5 class="text-white font-weight-bolder mb-4 pt-2">Work with the rockets</h5>
                <p class="text-white">Wealth creation is an evolutionarily recent positive-sum game. It is all about who take the opportunity first.</p>
                <a class="text-white text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="javascript:;">
                  Read More
                  <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      


      <!-- main option -->
      <div style="margin-top: 20px;">

      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Today's User</p>
                    <h5 class="font-weight-bolder mb-0">
                    <?php echo $TodaytotalUsers ?>
                      <span class="text-success text-sm font-weight-bolder"> <?php  echo $percentageChangess . "%"  ?> </span>
                    </h5>
                  </div>

                  <button style="font-size: 9px; margin-top: 15px " class="bg-gradient-primary btn btn-primary btn-sm" style="margin-top:10px;" onclick="document.location='all_users.php'">View</button>
              

                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Today's Point</p>
                    <h5 class="font-weight-bolder mb-0">
                     <?php echo $Todaypoint ?>
                      <span class="text-success text-sm font-weight-bolder"> <?php echo $percentageChangeTodayP . "%"   ?></span>
                    </h5>
                  </div>

                  <button style="font-size: 9px; margin-top: 15px " class="bg-gradient-primary btn btn-primary btn-sm" style="margin-top:10px;" onclick="document.location='all_users.php'">View</button>
              
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Pending Payment</p>
                    <h5 class="font-weight-bolder mb-0">
                      <?php  echo $total_withdrawal_panding ?>
                 
                    </h5>
                  </div>
                  <button style="font-size: 9px; margin-top: 15px " class="bg-gradient-primary btn btn-primary btn-sm" style="margin-top:10px;" onclick="document.location='withdrawal.php'">View</button>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">

                  <?php 
                  
                  
                  //totall payment here
// Query to get the total number of users
$queryTotalPaid = "SELECT COUNT(*) AS total_withdrawal_paid FROM withdrawal WHERE status = '1'";
$resultTotalPaid = mysqli_query($conn, $queryTotalPaid);
if ($resultTotalPaid) {
  $row = mysqli_fetch_assoc($resultTotalPaid);
  $total_withdrawal_paid = $row['total_withdrawal_paid'];

} else {
  echo "Error executing query: " . mysqli_error($connection);
}

//


                  ?>

                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Paid Payment</p>
                    <h5 class="font-weight-bolder mb-0">
                      <?php echo $total_withdrawal_paid ?>
                     
                    </h5>
                  </div>

                  <button style="font-size: 9px; margin-top: 15px " class="bg-gradient-primary btn btn-primary btn-sm" style="margin-top:10px;" onclick="document.location='withdrawal.php'">View</button>
              
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      </div>


      <div class="row mt-4">
        <div class="col-lg-5 mb-lg-0 mb-4">
          <div class="card z-index-2">
            <div class="card-body p-3">
              <div class="bg-gradient-dark border-radius-lg py-3 pe-1 mb-3">
                <div class="chart">
                  <canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
                </div>
              </div>
              <h6 class="ms-2 mt-4 mb-0"> Active Users </h6>
              <p class="text-sm ms-2"> (<span class="font-weight-bolder"><?php echo $percentageChangess . "%"  ?></span>) than last day </p>
              <div class="container border-radius-lg">
                <div class="row">
                  <div class="col-3 py-3 ps-0">
                    <div class="d-flex mb-2">
                      <div class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-primary text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="10px" height="10px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>document</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(154.000000, 300.000000)">
                                  <path class="color-background" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z" opacity="0.603585379"></path>
                                  <path class="color-background" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <p class="text-xs mt-1 mb-0 font-weight-bold">Users</p>
                    </div>
                    <h4 class="font-weight-bolder"> <?php echo $total_users ?> </h4>
                    <div class="progress w-75">
                      <div class="progress-bar bg-dark w-60" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="col-3 py-3 ps-0">
                    <div class="d-flex mb-2">
                      <div class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-info text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="10px" height="10px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>spaceship</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-1720.000000, -592.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(4.000000, 301.000000)">
                                  <path class="color-background" d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z"></path>
                                  <path class="color-background" d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z"></path>
                                  <path class="color-background" d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z" opacity="0.598539807"></path>
                                  <path class="color-background" d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z" opacity="0.598539807"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <p class="text-xs mt-1 mb-0 font-weight-bold">Withdrawal</p>
                    </div>
                    <h4 class="font-weight-bolder"> <?php  echo $total_withdrawalss ?></h4>
                    <div class="progress w-75">
                      <div class="progress-bar bg-dark w-90" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  
                  <div class="col-3 py-3 ps-0">
                    <div class="d-flex mb-2">
                      <div class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-danger text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="10px" height="10px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>settings</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(304.000000, 151.000000)">
                                  <polygon class="color-background" opacity="0.596981957" points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"></polygon>
                                  <path class="color-background" d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z" opacity="0.596981957"></path>
                                  <path class="color-background" d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <p class="text-xs mt-1 mb-0 font-weight-bold">Users Message</p>
                    </div>
                    <h4 class="font-weight-bolder"> <?php echo $usersMessage ?> </h4>
                    <div class="progress w-75">
                      <div class="progress-bar bg-dark w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="card z-index-2">
            <div class="card-header pb-0">
              <h6>Users overview</h6>
              <p class="text-sm">
                <i class="fa fa-arrow-up text-success"></i>
                <span class="font-weight-bold">4% more</span> in 2023
              </p>
            </div>
            <div class="card-body p-3">
              <div class="chart">
                <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>

      
      <div class="row my-4">
        <div class="col-lg-8 col-md-6 mb-md-0 mb-4" style="width: 100%;">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6>Users</h6>
                 
                </div>
                 
              </div>
            </div>
            <div class="card-body px-0 pb-2">

              <div class="table-responsive">

              <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Points</th>
            <th>User Country</th>
            <th>Status</th>
            <th>Edit</th>
            <th>Track</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
       

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM users ORDER BY CAST(points as unsigned) DESC LIMIT 10";
        $res = mysqli_query($conn, $sql);
        $i = 1;
        while ($row = mysqli_fetch_array($res)) {
            $user_id = $row['user_id'];
        ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['points']; ?></td>
                <td><?php echo $row['user_country']; ?></td>

                <td>
                    <?php if ($row['status'] == "active") { ?>
                        <form action="admin_api/api.php?user_id=<?php echo $user_id; ?>" method="POST">
                            <input type="hidden" name="_method" value="BLOCK_USER">
                            <button type="submit" class="btn btn-primary btn-block newClassBtna">Active</button>
                        </form>
                    <?php } else { ?>
                      <form action="admin_api/api.php?user_id=<?php echo $user_id; ?>" method="POST">
                            <input type="hidden" name="_method" value="UNBLOCK_USER">
                            <button type="submit" class="btn btn-primary btn-block newClassBtna">Blocked</button>
                        </form>
                    <?php } ?>
                </td>


                <td>
                    <div class="action_btns d-flex">
                        <a href="user-profile.php?user_id=<?php echo $row['user_id']; ?>" class="btn btn-primary btn-block">
                            <i class="far fa-edit"></i>
                        </a>
                      
                    </div>
                </td>

                <td>
                    <div class="action_btns d-flex">
                         
                        <a href="user_track.php?user_id=<?php echo $row['user_id']; ?>" class="btn btn-primary btn-block">
                            <i style="color: white!important;" class="fas fa-chart-line text-info" aria-hidden="true"></i>
                        </a>
                    </div>
                </td>



                <td>
                <form action="admin_api/api.php?user_id=<?php echo $user_id; ?>" method="POST">
                            <input type="hidden" name="_method" value="DELETE_USER">
                            <button type="submit" class="btn btn-danger sml">Delete</button>
                        </form>

                   
                </td>
            </tr>
        <?php
            $i++;
        }
        ?>
    </tbody>
</table>





              </div>
            </div>
          </div>
        </div>
       
 


    
 
 
  <script>
    // JavaScript code to fetch data and display it
    fetch('get_total_users.php')
      .then(response => response.json())
      .then(data => {
        const totalUsers1 = data.totalUsersMon1;
        const totalUsers2 = data.totalUsersMon2;
        const totalUsers3 = data.totalUsersMon3;
        const totalUsers4 = data.totalUsersMon4;
        const totalUsers5 = data.totalUsersMon5;
        const totalUsers6 = data.totalUsersMon6;
        const totalUsers7 = data.totalUsersMon7;
        const totalUsers8 = data.totalUsersMon8;
        const totalUsers9 = data.totalUsersMon9;

        // Display the data on the webpage
        document.getElementById('totalUsersMon1').textContent = "Total Users Month 1: " + totalUsers1;
        document.getElementById('totalUsersMon2').textContent = "Total Users Month 2: " + totalUsers2;
        document.getElementById('totalUsersMon3').textContent = "Total Users Month 3: " + totalUsers3;
        document.getElementById('totalUsersMon4').textContent = "Total Users Month 4: " + totalUsers4;
        document.getElementById('totalUsersMon5').textContent = "Total Users Month 5: " + totalUsers5;
        document.getElementById('totalUsersMon6').textContent = "Total Users Month 6: " + totalUsers6;
        document.getElementById('totalUsersMon7').textContent = "Total Users Month 7: " + totalUsers7;
        document.getElementById('totalUsersMon8').textContent = "Total Users Month 8: " + totalUsers8;
        document.getElementById('totalUsersMon9').textContent = "Total Users Month 9: " + totalUsers9;
      })
      .catch(error => {
        console.error('Error retrieving totalUsers:', error);
      });
  </script>
 



<?php include 'footer.php' ; ?>