<?php
session_start();
if(isset($_SESSION['C_ID'])){
$id=$_SESSION['C_ID'];
$pw=($_POST['pwd']);
$pwc=($_POST['pwd2']);
$category=$_POST['category'];
$carrer=$_POST['carrer'];
$tel=$_POST['tel'];

if($pw!=$pwc) //비밀번호와 비밀번호 확인 문자열이 맞지 않을 경우
{ ?>
    <script type ="text/Javascript">
    alert('비밀번호와 비밀번호 확인이 서로 다릅니다.');
    window.location.href="./modify2.php";
    </script>
<?php }
if($id==NULL || $pw==NULL || $name==NULL) //
{ ?>
    <script type ="text/Javascript">
    alert('빈 칸을 모두 채워주세요.');
    window.location.href="./modify2.php";
    </script>
<?php }
 
$mysqli=mysqli_connect("localhost","root","skkulbh9509","asl");
 
$modify=mysqli_query($mysqli,"UPDATE coach SET PW='$pw', Category='$category', Carrer='$carrer',Tel='$tel'
    where C_ID = '$id'");
if($modify){ ?>
    <script type ="text/Javascript">
    alert('회원정보 수정이 완료되었습니다.');
    window.location.href="/login_main.php";
    </script>
<?}
}

else if(isset($_SESSION['S_ID'])){
    $id = $_SESSION['S_ID'];
    $pw=($_POST['pwd']);
    $pwc=($_POST['pwd2']);
    $birth=$_POST['birthDay'];
    $tel=$_POST['tel'];
    
    if($pw!=$pwc) //비밀번호와 비밀번호 확인 문자열이 맞지 않을 경우
    { ?>
        <script type ="text/Javascript">
        alert('비밀번호와 비밀번호 확인이 서로 다릅니다.');
        window.location.href="./modify2.php";
        </script>
    <?php }

    $mysqli=mysqli_connect("localhost","root","skkulbh9509","asl");
 
    $modify=mysqli_query($mysqli,"UPDATE student SET PW='$pw', Birth='$birth', Tel='$tel' where S_ID = '$id'");
    if($modify){
     echo "회원정보 수정 완료!";
     echo "<a href=/login_main.php>홈으로</a>";
    }
}
?>