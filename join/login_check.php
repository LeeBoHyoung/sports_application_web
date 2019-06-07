<?php
session_start();
$id=$_POST['id'];
$pw=$_POST['pwd'];
$mysqli=mysqli_connect("localhost","root","skkulbh9509","asl");
 
$check1="SELECT * FROM student WHERE S_ID = '$id'";
$check2="SELECT * FROM coach WHERE C_ID = '$id'";
$result1=$mysqli->query($check1);
$result2=$mysqli->query($check2); 
if($result1->num_rows==1 || $result2->num_rows==1){
    $row1=$result1->fetch_array(MYSQLI_ASSOC); //하나의 열을 배열로 가져오기
    $row2=$result2->fetch_array(MYSQLI_ASSOC);
    if($row1['PW']==$pw || $row2['PW']==$pw){  //MYSQLI_ASSOC 필드명으로 첨자 가능
        if($row1['PW'] == $pw){
            $_SESSION['S_ID']=$id;           //로그인 성공 시 세션 변수 만들기
            if(isset($_SESSION['S_ID']))    //세션 변수가 참일 때
            {
                header('Location: ./main.php');   //로그인 성공 시 페이지 이동
            }
            else{
                echo "세션 저장 실패";
            }
        }
        else if($row2['PW'] == $pw){
            $_SESSION['C_ID']=$id;           //로그인 성공 시 세션 변수 만들기
            if(isset($_SESSION['C_ID']))    //세션 변수가 참일 때
            {
                header('Location: ./main.php');   //로그인 성공 시 페이지 이동
            }
            else{
                echo "세션 저장 실패";
            }
        }                
    }
    else{ ?>
        <script type ="text/Javascript">
        alert('아이디 혹은 비밀번호가 틀렸습니다.');
        window.location.href="/join/login.html";
        </script>
    <?php }
}
else{ ?>
        <script type ="text/Javascript">
        alert('아이디 혹은 비밀번호가 틀렸습니다.');
        window.location.href="/join/login.html";
        </script>
<?php }
?>
