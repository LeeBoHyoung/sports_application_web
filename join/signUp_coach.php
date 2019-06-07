<?php
$id=$_POST['id'];
$pw=($_POST['pwd']);
$pwc=($_POST['pwd2']);
$name=$_POST['name'];
$category=$_POST['category'];
$carrer=$_POST['carrer'];
$tel=$_POST['tel'];

if($pw!=$pwc) //비밀번호와 비밀번호 확인 문자열이 맞지 않을 경우
{ ?>
    <script type ="text/Javascript">
    alert('비밀번호와 비밀번호 확인이 서로 다릅니다.');
    window.location.href="./signup_coach.html";
    </script>
<?php }
if($id==NULL || $pw==NULL || $name==NULL) //
{ ?>
    <script type ="text/Javascript">
    alert('빈 칸을 모두 채워주세요.');
    window.location.href="./signup_coach.html";
    </script>
<?php }
 
$mysqli=mysqli_connect("localhost","root","skkulbh9509","asl");
 
$check="SELECT *from coach WHERE C_ID='$id'";
$result=$mysqli->query($check);
if($result->num_rows==1)
{ ?>
    <script type ="text/Javascript">
    alert('중복된 아이디 입니다.');
    window.location.href="./signup_coach.html";
    </script>
<?php }
 
$signup=mysqli_query($mysqli,"INSERT INTO coach (C_ID, C_Name, PW, Category, Carrer, Tel) 
VALUES ('$id','$name', '$pw', '$category', '$carrer', '$tel')");
if($signup){?>
    <script type ="text/Javascript">
    alert('회원가입이 완료되었습니다.');
    window.location.href="./login.html";
     </script>
<?php }
 
?>