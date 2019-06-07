<?php
session_start();
$l_name=$_POST['l_name'];
$c_name=$_POST['c_name'];
$category=$_POST['category'];
$contents=$_POST['contents'];
$place=$_POST['place'];
$time=$_POST['time'];
$limit=$_POST['limit'];
$price=$_POST['price'];
$c_id = $_SESSION['C_ID'];

if($l_name==NULL || $c_name==NULL || $category==NULL || $contents==NULL || $place==NULL || $time==NULL || $limit==NULL || $price==NULL) //
{ ?>
  <script type ="text/Javascript">
    alert('빈 칸을 채워주세요.');
    window.location.href="register.php";
  </script>
<?php }
 
$mysqli=mysqli_connect("localhost","root","skkulbh9509","asl");
 
$register=mysqli_query($mysqli,"INSERT INTO lesson (L_Name, C_ID, Contents, Place, Time, L_num, Price) 
VALUES ('$l_name','$c_id', '$contents', '$place', '$time', '$limit', '$price')");
$register2=mysqli_query($mysqli,"INSERT INTO lesson_c (C_ID, C_Name, Category) 
VALUES ('$c_id','$c_name','$category')");
if($register){?>
  <script type ="text/Javascript">
  alert('레슨 등록이 완료되었습니다.');
  window.location.href="/login_main.php";
  </script>
  <?php }
?>