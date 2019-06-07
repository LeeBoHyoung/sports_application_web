<?php
$id=$_POST['id'];
$pw=($_POST['pwd']);
$pwc=($_POST['pwd2']);
$name=$_POST['name'];
$birth=$_POST['birthDay'];
$tel=$_POST['tel'];

if($pw!=$pwc) //비밀번호와 비밀번호 확인 문자열이 맞지 않을 경우
{ ?>
    <script type ="text/Javascript">
    alert('비밀번호와 비밀번호 확인이 서로 다릅니다.');
    window.location.href="./signup_student.html";
    </script>
<?php }
if($id==NULL || $pw==NULL || $name==NULL) //
{ ?>
    <script type ="text/Javascript">
    alert('빈 칸을 모두 채워주세요.');
    window.location.href="./signup_student.html";
    </script>
<?php }
 
$mysqli=mysqli_connect("localhost","root","skkulbh9509","asl");
 
$check="SELECT *from student WHERE S_ID='$id'";
$result=$mysqli->query($check);
if($result->num_rows==1)
{ ?>
    <script type ="text/Javascript">
    alert('중복된 아이디 입니다.');
    window.location.href="./signup_student.html";
    </script>
<?php }
 
$signup=mysqli_query($mysqli,"INSERT INTO student (S_ID, S_Name, PW, Birth, Tel) 
VALUES ('$id','$name', '$pw', '$birth', '$tel')");
if($signup){?>
    <script type ="text/Javascript">
    alert('회원가입이 완료되었습니다.');
    window.location.href="./login.html";
     </script>
<?php }
 
?>