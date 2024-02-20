<?php
session_start();   
    $masages1="";
    $masages2="";
    $masages3="";
    if(isset($_POST['submit'])){
    $number='91'.$_POST['number'];
    $msg=$_POST['msg'];
    $length=strlen($number);
        if($number==""){
            $masages1="number can't be null";
            $check=1; 
        }
        else if($length!=12){
            $masages1="your number is not valid";
            $check=1;
        }
        else if($msg==""){
            $masages2="your massage is not be empty";
            $check=1;
        }
        else{
            $masages3="massages send sucessfully";
            $check=0;
        }
        if($check==0){
            header("location:http://localhost/portfolio/chat_section.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login_authounticate</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<div class="center">
    <form  method="post">
        <h2>send massages </h2>
        <span style="color:green"><?php echo $masages3; ?></span>
        <input type="number" placeholder="Enter your number" name="number" class="name" id="name">
         <span style="color:red;">*<?php echo $masages1; ?></span>
         <br>
        <textarea cols="59" rows="2" placeholder="Enter some msg" name="msg"></textarea>

        <span style="color:red">*<?php echo $masages2; ?></span>
        <br>
        <input type="submit" value="let's us chat" id="btn" name="submit">
    </form>
</div>
</body>
</html>



