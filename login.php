<?php
session_start();

$host = "localhost:3310";
$user ="root";
$pass ="";
$db_name="bruh";
$tbl_name ="bruhtable";

$conn = mysqli_connect($host,$user,$pass,$db_name);

 if(!$conn){
    die("Connection oops!".mysqli_connect_error());
    }
 else{
    echo "Connected successfully";
 };


$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT * FROM $tbl_name WHERE username ='$username'";

$query = mysqli_query($conn,$sql);

if(!$query){
    die("OOPS QUERY".mysqli_error($conn));
}
else{
    while($data= mysqli_fetch_array($query)){
        if($data['username']==$username)
        {
            $_SESSION['login']= true;
            $_SESSION['username']= $username;
            $_SESSION['time']= time();
            $_SESSION['expiry']= time()+(5*60);

            echo "<br>Welcome &nbsp;".$_SESSION['username'];
            echo "<br>CONTROL PANEL";
            echo "<br> <p> <a href='logout.php'>Logout</a> </p>";
        }

        else 
        {
            echo "oops";
        };


    }
}
mysqli_close($conn);
?>