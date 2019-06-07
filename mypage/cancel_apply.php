<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>신청 취소</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
    <!-- Custom style -->
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
  </head>

<?php
session_start();
$sid = $_SESSION['S_ID'];
$lname=$_POST['lname'];
$cid=$_POST['cid'];

$mysqli=mysqli_connect("localhost","root","skkulbh9509","asl");
$del = mysqli_query($mysqli,"DELETE FROM apply where L_Name = '$lname' and C_ID = '$cid' and S_ID = '$sid'");
if($del){
    $minus_num = mysqli_query($mysqli,"UPDATE lesson SET A_num = A_num - 1 where L_Name = '$lname' and C_ID = '$cid'");
    if($minus_num){ ?>
        <script type ="text/Javascript">
        alert('신청이 취소되었습니다.');
        window.location.href="./check.php";
         </script>
    <?php }
}
else{
    header('Location: ./check.php');
} ?>


   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

   
   <script src="js/bootstrap.min.js"></script>

  </body>
</html>
