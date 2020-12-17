
<?php

$host="localhost";
$user="root";
$password="";
$db="loginform";

$connection = mysqli_connect($host,$user,$password) or die ("Koneksi ke Server Error!");
mysqli_select_db($connection, $db) or die ("Koneksi ke Database Error");

if(isset($_POST['Username'])){

    $uname=$_POST['Username'];
    $password=$_POST['Password'];

    $sql="select * from login where user='".$username."'AND Pass='".$password."'
    limit 1";
    $result=mysqli_query($sql);
    if(mysqli_num_rows($result)==1){
        echo "You Have Successfully Logged In";
        exit();
    }
    else{
        echo"You Have Entered Incorrect Password";
        exit();
    }
}

?>

<?php
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');
    if (!empty($username)){
    if (!empty($password)){
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "loginform";
    }
    }
    else "<tr>
        echo "Password should not be empty!";
        die();

    </tr>"
    else{
        echo "Username should not be empty!";
        die();
    }
?>


require_once("config.php");

if(isset($_POST['submit'])){
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if($username == "" || $password =="") {
        header("location: loginerror.php");
        exit();
    }

    $sql = mysqli_query ("SELECT * FROM login where username='".$username."' AND password='".$password."' limit 1");

    if(mysqli_num_rows($sql) !=0) {
        header("location: proses.php");
    }  else {
        header("location: loginerror.php");
    }
}




