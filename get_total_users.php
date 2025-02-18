<?php include 'main_app.php'; ?>
<?php include 'connect.php'; ?>

<?php
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

$monts1 = "01"; 
$monts2 = "02"; 
$monts3 = "03"; 
$monts4 = "04"; 
$monts5 = "05"; 
$monts6 = "06"; 
$monts7 = "07"; 
$monts8 = "08"; 
$monts9 = "09"; 
$monts10 = "10";
$monts11 = "11";
$monts12 = "12";

$sqlMon1 = "SELECT COUNT(*) AS totalUsersMon1 FROM users WHERE MONTH(date_registered) = '$monts1' ";
$resultMon1 = $conn->query($sqlMon1);
if ($resultMon1 === false) {
    die('Error executing the query: ' . $conn->error);
}
$row = $resultMon1->fetch_assoc();
$totalUsersMon1 = $row['totalUsersMon1'];
$response = ['totalUsersMon1' => $totalUsersMon1];

$sqlMon2 = "SELECT COUNT(*) AS totalUsersMon2 FROM users WHERE MONTH(date_registered) = '$monts2' ";
$resultMon2 = $conn->query($sqlMon2);
if ($resultMon2 === false) {
    die('Error executing the query: ' . $conn->error);
}
$row = $resultMon2->fetch_assoc();
$totalUsersMon2 = $row['totalUsersMon2'];

$sqlMon3 = "SELECT COUNT(*) AS totalUsersMon3 FROM users WHERE MONTH(date_registered) = '$monts3' ";
$resultMon3 = $conn->query($sqlMon3);
if ($resultMon3 === false) {
    die('Error executing the query: ' . $conn->error);
}
$row = $resultMon3->fetch_assoc();
$totalUsersMon3 = $row['totalUsersMon3'];

$sqlMon4 = "SELECT COUNT(*) AS totalUsersMon4 FROM users WHERE MONTH(date_registered) = '$monts4' ";
$resultMon4 = $conn->query($sqlMon4);
if ($resultMon4 === false) {
    die('Error executing the query: ' . $conn->error);
}
$row = $resultMon4->fetch_assoc();
$totalUsersMon4 = $row['totalUsersMon4'];

$sqlMon5 = "SELECT COUNT(*) AS totalUsersMon5 FROM users WHERE MONTH(date_registered) = '$monts5' ";
$resultMon5 = $conn->query($sqlMon5);
if ($resultMon5 === false) {
    die('Error executing the query: ' . $conn->error);
}
$row = $resultMon5->fetch_assoc();
$totalUsersMon5 = $row['totalUsersMon5'];

$sqlMon6 = "SELECT COUNT(*) AS totalUsersMon6 FROM users WHERE MONTH(date_registered) = '$monts6' ";
$resultMon6 = $conn->query($sqlMon6);
if ($resultMon6 === false) {
    die('Error executing the query: ' . $conn->error);
}
$row = $resultMon6->fetch_assoc();
$totalUsersMon6 = $row['totalUsersMon6'];

$sqlMon7 = "SELECT COUNT(*) AS totalUsersMon7 FROM users WHERE MONTH(date_registered) = '$monts7' ";
$resultMon7 = $conn->query($sqlMon7);
if ($resultMon7 === false) {
    die('Error executing the query: ' . $conn->error);
}
$row = $resultMon7->fetch_assoc();
$totalUsersMon7 = $row['totalUsersMon7'];

$sqlMon8 = "SELECT COUNT(*) AS totalUsersMon8 FROM users WHERE MONTH(date_registered) = '$monts8' ";
$resultMon8 = $conn->query($sqlMon8);
if ($resultMon8 === false) {
    die('Error executing the query: ' . $conn->error);
}
$row = $resultMon8->fetch_assoc();
$totalUsersMon8 = $row['totalUsersMon8'];

$sqlMon9 = "SELECT COUNT(*) AS totalUsersMon9 FROM users WHERE MONTH(date_registered) = '$monts9' ";
$resultMon9 = $conn->query($sqlMon9);
if ($resultMon9 === false) {
    die('Error executing the query: ' . $conn->error);
}
$row = $resultMon9->fetch_assoc();
$totalUsersMon9 = $row['totalUsersMon9'];



$sqlMon10 = "SELECT COUNT(*) AS totalUsersMon10 FROM users WHERE MONTH(date_registered) = '$monts10' ";
$resultMon10 = $conn->query($sqlMon10);
if ($resultMon10 === false) {
    die('Error executing the query: ' . $conn->error);
}
$row = $resultMon10->fetch_assoc();
$totalUsersMon10 = $row['totalUsersMon10'];


$sqlMon11 = "SELECT COUNT(*) AS totalUsersMon11 FROM users WHERE MONTH(date_registered) = '$monts11' ";
$resultMon11 = $conn->query($sqlMon11);
if ($resultMon11 === false) {
    die('Error executing the query: ' . $conn->error);
}
$row = $resultMon11->fetch_assoc();
$totalUsersMon11 = $row['totalUsersMon11'];


 
$sqlMon12 = "SELECT COUNT(*) AS totalUsersMon12 FROM users WHERE MONTH(date_registered) = '$monts12' ";
$resultMon12 = $conn->query($sqlMon12);
if ($resultMon12 === false) {
    die('Error executing the query: ' . $conn->error);
}
$row = $resultMon12->fetch_assoc();
$totalUsersMon12 = $row['totalUsersMon12'];



//Withdrawal
$sqlWithdra = "SELECT COUNT(*) AS withdrawalMonts1 FROM withdrawal WHERE MONTH(created_date) = '$monts1' ";
$resultWithdrawal1 = $conn->query($sqlWithdra);
if ($resultWithdrawal1 === false) {
    die('Error executing the query: ' . $conn->error);
}
$row = $resultWithdrawal1->fetch_assoc();
$withdrawalMonts1 = $row['withdrawalMonts1'];

//Withdrawal
$sqlWithdra2 = "SELECT COUNT(*) AS withdrawalMonts2 FROM withdrawal WHERE MONTH(created_date) = '$monts2' ";
$resultWithdrawal2 = $conn->query($sqlWithdra2);
if ($resultWithdrawal2 === false) {
    die('Error executing the query: ' . $conn->error);
}
$row = $resultWithdrawal2->fetch_assoc();
$withdrawalMonts2 = $row['withdrawalMonts2'];

//Withdrawal
$sqlWithdra3 = "SELECT COUNT(*) AS withdrawalMonts3 FROM withdrawal WHERE MONTH(created_date) = '$monts3' ";
$resultWithdrawal3 = $conn->query($sqlWithdra3);
if ($resultWithdrawal3 === false) {
    die('Error executing the query: ' . $conn->error);
}
$row = $resultWithdrawal3->fetch_assoc();
$withdrawalMonts3 = $row['withdrawalMonts3'];



//Withdrawal
$sqlWithdra4 = "SELECT COUNT(*) AS withdrawalMonts4 FROM withdrawal WHERE MONTH(created_date) = '$monts4' ";
$resultWithdrawal4 = $conn->query($sqlWithdra4);
if ($resultWithdrawal4 === false) {
    die('Error executing the query: ' . $conn->error);
}
$row = $resultWithdrawal4->fetch_assoc();
$withdrawalMonts4 = $row['withdrawalMonts4'];



//Withdrawal
$sqlWithdra5 = "SELECT COUNT(*) AS withdrawalMonts5 FROM withdrawal WHERE MONTH(created_date) = '$monts5' ";
$resultWithdrawal5 = $conn->query($sqlWithdra5);
if ($resultWithdrawal5 === false) {
    die('Error executing the query: ' . $conn->error);
}
$row = $resultWithdrawal5->fetch_assoc();
$withdrawalMonts5 = $row['withdrawalMonts5'];

//Withdrawal
$sqlWithdra6 = "SELECT COUNT(*) AS withdrawalMonts6 FROM withdrawal WHERE MONTH(created_date) = '$monts6' ";
$resultWithdrawal6 = $conn->query($sqlWithdra6);
if ($resultWithdrawal6 === false) {
    die('Error executing the query: ' . $conn->error);
}
$row = $resultWithdrawal6->fetch_assoc();
$withdrawalMonts6 = $row['withdrawalMonts6'];


//Withdrawal
$sqlWithdra7 = "SELECT COUNT(*) AS withdrawalMonts7 FROM withdrawal WHERE MONTH(created_date) = '$monts7' ";
$resultWithdrawal7 = $conn->query($sqlWithdra7);
if ($resultWithdrawal7 === false) {
    die('Error executing the query: ' . $conn->error);
}
$row = $resultWithdrawal7->fetch_assoc();
$withdrawalMonts7 = $row['withdrawalMonts7'];


//Withdrawal
$sqlWithdra8 = "SELECT COUNT(*) AS withdrawalMonts8 FROM withdrawal WHERE MONTH(created_date) = '$monts8' ";
$resultWithdrawal8 = $conn->query($sqlWithdra8);
if ($resultWithdrawal8 === false) {
    die('Error executing the query: ' . $conn->error);
}
$row = $resultWithdrawal8->fetch_assoc();
$withdrawalMonts8 = $row['withdrawalMonts8'];

//Withdrawal
$sqlWithdra9 = "SELECT COUNT(*) AS withdrawalMonts9 FROM withdrawal WHERE MONTH(created_date) = '$monts9' ";
$resultWithdrawal9 = $conn->query($sqlWithdra9);
if ($resultWithdrawal9 === false) {
    die('Error executing the query: ' . $conn->error);
}
$row = $resultWithdrawal9->fetch_assoc();
$withdrawalMonts9 = $row['withdrawalMonts9'];

//Withdrawal
$sqlWithdra10 = "SELECT COUNT(*) AS withdrawalMonts10 FROM withdrawal WHERE MONTH(created_date) = '$monts10' ";
$resultWithdrawal10 = $conn->query($sqlWithdra10);
if ($resultWithdrawal10 === false) {
    die('Error executing the query: ' . $conn->error);
}
$row = $resultWithdrawal10->fetch_assoc();
$withdrawalMonts10 = $row['withdrawalMonts10'];

//Withdrawal
$sqlWithdra11 = "SELECT COUNT(*) AS withdrawalMonts11 FROM withdrawal WHERE MONTH(created_date) = '$monts11' ";
$resultWithdrawal11 = $conn->query($sqlWithdra11);
if ($resultWithdrawal11 === false) {
    die('Error executing the query: ' . $conn->error);
}
$row = $resultWithdrawal11->fetch_assoc();
$withdrawalMonts11 = $row['withdrawalMonts11'];

//Withdrawal
$sqlWithdra12 = "SELECT COUNT(*) AS withdrawalMonts12 FROM withdrawal WHERE MONTH(created_date) = '$monts12' ";
$resultWithdrawal12 = $conn->query($sqlWithdra12);
if ($resultWithdrawal12 === false) {
    die('Error executing the query: ' . $conn->error);
}
$row = $resultWithdrawal12->fetch_assoc();
$withdrawalMonts12 = $row['withdrawalMonts12'];


//membership_request
$sqlmembership4 = "SELECT COUNT(*) AS consmembershipre4 FROM withdrawal WHERE MONTH(created_date) = '$monts4' ";
$resultmembership4 = $conn->query($sqlmembership4);
if ($resultmembership4 === false) {
    die('Error executing the query: ' . $conn->error);
}
$row = $resultmembership4->fetch_assoc();
$consmembershipre4 = $row['consmembershipre4'];


//membership_request
$sqlmembership5 = "SELECT COUNT(*) AS consmembershipre5 FROM withdrawal WHERE MONTH(created_date) = '$monts5' ";
$resultmembership5 = $conn->query($sqlmembership5);
if ($resultmembership5 === false) {
    die('Error executing the query: ' . $conn->error);
}
$row = $resultmembership5->fetch_assoc();
$consmembershipre5 = $row['consmembershipre5'];

//membership_request
$sqlmembership6 = "SELECT COUNT(*) AS consmembershipre6 FROM withdrawal WHERE MONTH(created_date) = '$monts6' ";
$resultmembership6 = $conn->query($sqlmembership6);
if ($resultmembership6 === false) {
    die('Error executing the query: ' . $conn->error);
}
$row = $resultmembership6->fetch_assoc();
$consmembershipre6 = $row['consmembershipre6'];



//membership_request
$sqlmembership7 = "SELECT COUNT(*) AS consmembershipre7 FROM withdrawal WHERE MONTH(created_date) = '$monts7' ";
$resultmembership7 = $conn->query($sqlmembership7);
if ($resultmembership7 === false) {
    die('Error executing the query: ' . $conn->error);
}
$row = $resultmembership7->fetch_assoc();
$consmembershipre7 = $row['consmembershipre7'];


//membership_request
$sqlmembership8 = "SELECT COUNT(*) AS consmembershipre8 FROM withdrawal WHERE MONTH(created_date) = '$monts8' ";
$resultmembership8 = $conn->query($sqlmembership8);
if ($resultmembership8 === false) {
    die('Error executing the query: ' . $conn->error);
}
$row = $resultmembership8->fetch_assoc();
$consmembershipre8 = $row['consmembershipre8'];


//membership_request
$sqlmembership9 = "SELECT COUNT(*) AS consmembershipre9 FROM withdrawal WHERE MONTH(created_date) = '$monts9' ";
$resultmembership9 = $conn->query($sqlmembership9);
if ($resultmembership9 === false) {
    die('Error executing the query: ' . $conn->error);
}
$row = $resultmembership9->fetch_assoc();
$consmembershipre9 = $row['consmembershipre9'];

//membership_request
$sqlmembership10 = "SELECT COUNT(*) AS consmembershipre10 FROM withdrawal WHERE MONTH(created_date) = '$monts10' ";
$resultmembership10 = $conn->query($sqlmembership10);
if ($resultmembership10 === false) {
    die('Error executing the query: ' . $conn->error);
}
$row = $resultmembership10->fetch_assoc();
$consmembershipre10 = $row['consmembershipre10'];

//membership_request
$sqlmembership11 = "SELECT COUNT(*) AS consmembershipre11 FROM withdrawal WHERE MONTH(created_date) = '$monts11' ";
$resultmembership11 = $conn->query($sqlmembership11);
if ($resultmembership11 === false) {
    die('Error executing the query: ' . $conn->error);
}
$row = $resultmembership11->fetch_assoc();
$consmembershipre11 = $row['consmembershipre11'];

//membership_request
$sqlmembership12 = "SELECT COUNT(*) AS consmembershipre12 FROM withdrawal WHERE MONTH(created_date) = '$monts12' ";
$resultmembership12 = $conn->query($sqlmembership12);
if ($resultmembership12 === false) {
    die('Error executing the query: ' . $conn->error);
}
$row = $resultmembership12->fetch_assoc();
$consmembershipre12 = $row['consmembershipre12'];



$response = [
    'totalUsersMon2' => $totalUsersMon2,
    'totalUsersMon1' => $totalUsersMon1,
    'totalUsersMon3' => $totalUsersMon3,
    'totalUsersMon4' => $totalUsersMon4,
    'totalUsersMon5' => $totalUsersMon5,
    'totalUsersMon6' => $totalUsersMon6,
    'totalUsersMon7' => $totalUsersMon7,
    'totalUsersMon8' => $totalUsersMon8,
    'totalUsersMon9' => $totalUsersMon9,
    'totalUsersMon10' => $totalUsersMon10,
    'totalUsersMon11' => $totalUsersMon11,
    'totalUsersMon12' => $totalUsersMon12,

    //Withdrawal
    'withdrawalMonts1' => $withdrawalMonts1,
    'withdrawalMonts2' => $withdrawalMonts2,
    'withdrawalMonts3' => $withdrawalMonts3,
    'withdrawalMonts4' => $withdrawalMonts4,
    'withdrawalMonts5' => $withdrawalMonts5,
    'withdrawalMonts6' => $withdrawalMonts6,
    'withdrawalMonts7' => $withdrawalMonts7,
    'withdrawalMonts8' => $withdrawalMonts8,
    'withdrawalMonts9' => $withdrawalMonts9,
    'withdrawalMonts10' => $withdrawalMonts10,
    'withdrawalMonts11' => $withdrawalMonts11,
    'withdrawalMonts12' => $withdrawalMonts12,

    //membership
    'membershipre4' => $consmembershipre4,
    'membershipre5' => $consmembershipre5,
    'membershipre6' => $consmembershipre6,
    'membershipre7' => $consmembershipre7,
    'membershipre8' => $consmembershipre8,
    'membershipre9' => $consmembershipre9,
    'membershipre10' => $consmembershipre10,
    'membershipre11' => $consmembershipre11,
    'membershipre12' => $consmembershipre12

];

header('Content-Type: application/json');
echo json_encode($response);
