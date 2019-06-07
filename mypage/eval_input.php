<?php
  session_start();
  $lname=$_POST['lname'];
  $cid=$_POST['cid'];
  $sid=$_SESSION['S_ID'];
  $contents=$_POST['contents'];

  $mysqli=mysqli_connect("localhost","root","skkulbh9509","asl");
  $input = mysqli_query($mysqli,"INSERT INTO eval(S_ID, C_ID, review) VALUES('$sid', '$cid', '$contents')");
  
  if($input){ ?>
    <script type ="text/Javascript">
    alert('내용이 등록되었습니다.');
    window.location.href="/mypage/check.php";
    </script>
  <?php }
 ?>