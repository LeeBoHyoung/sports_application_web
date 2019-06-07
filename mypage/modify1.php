<?php
$pw = $_POST['pw'];
session_start();
$mysqli=mysqli_connect("localhost","root","skkulbh9509","asl");
if(isset($_SESSION['S_ID'])){
    $id = $_SESSION['S_ID'];
    $check="SELECT * FROM student WHERE S_ID = '$id'";
}
else if(isset($_SESSION['C_ID'])){
    $id = $_SESSION['C_ID'];
    $check="SELECT * FROM coach WHERE C_ID = '$id'";
}

$result=$mysqli->query($check);
$row=$result->fetch_array(MYSQLI_ASSOC); //하나의 열을 배열로 가져오기
    if($row['PW']==$pw){  //MYSQLI_ASSOC 필드명으로 첨자 가능
        if($row['PW'] == $pw){
                header('Location: ./modify2.php');
        }
        else{ ?>
            <script type ="text/Javascript">
            alert('비밀번호를 다시 확인해주세요.');
            window.location.href="./pwd_confirm.html";
            </script>
            <?php }
        }
?>
