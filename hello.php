<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>first php</title>
</head>

<body>


    <?php
   
    
    function passw($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  $result= substr(str_shuffle($data), 0, $chars);
  $length= strlen($result);
  echo $length;
  echo '<br>';
  
  echo $result;
  
}
passw(10);
    
    ?>

    <?php 

    $hello = "The brown fox jumped over the lazy dog";
    // $hi = "Hi, world!";
    echo '<br>';
    echo str_replace("The", "The quick", $hello);
?>
<?php
if(isset($_POST["submit-btn"]))
{
    $username = $_POST["Username"];

    $password = $_POST["Password"];
    echo '<br>';
    echo $username;
    echo '<br>';
    echo $password;
}
?>
    
</body>

</html>