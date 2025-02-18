    <?php
session_start();
include 'connect.php';
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

    if(isset($_POST['email'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $email = mysqli_real_escape_string($conn, $email);
        $hashedPassword = md5($password);
    
        $sql = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
        $result = $conn->query($sql);
        if ($result) {
            if ($result->num_rows == 1) {
                $row=mysqli_fetch_array($result);
                $_SESSION['login']=true;
                $_SESSION['name']=$row['name'];
                $_SESSION['email']=$row['email'];
                header('location:index.php');
                exit;
            } else {
                $_SESSION['wrong']=true;
                header('location:login.php');
            }
        } else {
            $_SESSION['wrong']=true;
            header('location:login.php');
        }
    }

//end

$conn->close();
?>
