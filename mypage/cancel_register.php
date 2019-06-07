<?php
session_start();
$lname = $_POST['lname'];
$cid = $_SESSION['C_ID'];

$mysqli=mysqli_connect("localhost","root","skkulbh9509","asl");
$del = mysqli_query($mysqli,"DELETE FROM lesson where L_Name = '$lname' and C_ID = '$cid'");

if($del){ ?>
    <script type ="text/Javascript">
    alert('레슨이 삭제되었습니다.');
    window.location.href="./check.php";
     </script>
<?php }
?>