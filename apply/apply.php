
<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>신청 완료</title>

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
$lname=$_GET['lname'];
$cid=$_GET['cid'];

$mysqli=mysqli_connect("localhost","root","skkulbh9509","asl");
$result = mysqli_query($mysqli,"SELECT count(*) as num from apply where S_ID = '$sid' and L_Name = '$lname'");
$data = mysqli_fetch_assoc($result);
if($data['num']>0){ ?>
  <script type ="text/Javascript">
  alert('이미 신청한 레슨입니다.');
  window.location.href="/apply/apply_form.php";
  </script>
<?php }
else{
$apply_info = mysqli_query($mysqli, "INSERT INTO apply (S_ID, L_Name, C_ID) VALUES ('$sid', '$lname', '$cid')");
$add_num = mysqli_query($mysqli,"UPDATE lesson SET A_num = A_num + 1 where L_Name = '$lname' and C_ID = '$cid'");
if(!$apply_info || !add_num){
    header('Location: /apply/apply_form.php');
}
}
?>

<body>
  <article class="container">
      <div class="page-header">
        <h1>레슨 신청이 완료되었습니다. <small>Application completed</small></h1>
      </div>
      <div class="form-group text-center">
            <button onclick="location.href='../login_main.php'" class="btn btn-info">홈으로 이동<i class="fa fa-check spaceLeft"></i></button>
          </div>
    </article>


   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

   
   <script src="js/bootstrap.min.js"></script>

  </body>
</html>
