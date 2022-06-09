<!DOCTYPE html>
<html lang ="en">
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
      
        <?php
        $host = "localhost:3310";
        $user ="root";
        $pass ="";
        $db_name="bruh";
        $tbl_name ="bruhtable";
        
        $conn = mysqli_connect($host,$user,$pass,$db_name);
    

        if(isset($_POST['Username']))
        {
            $username = $_POST['Username'];
            $username = mysqli_real_escape_string($conn,$username);
            $password = $_POST['Password'];
            $password = mysqli_real_escape_string($conn,$password);

            $insert = "INSERT INTO $tbl_name (username,password) VALUES ('$username','$password')";
           
            $query = mysqli_query($conn,$insert);

            if(!$query){
                die("OOPS QUERY".mysqli_error($conn));
            }
            else{
                echo "Successfully inserted";
                echo "<br><p > <a href='login2.php'>Login</a> </p>";
            }

        }
        else
        {
            echo "oop";}
            ?>
        
 

    </body>
</html>