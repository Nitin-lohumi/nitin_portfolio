<?php
session_start();
?>
<?php
if(isset($_POST['number'])==""){
    session_unset();
    header("location:http://localhost/portfolio/index2.php");
}
?>

