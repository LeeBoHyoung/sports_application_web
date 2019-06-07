<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>마이페이지 MYPAGE</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
    <!-- Custom style -->
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">


  </head>

  <?php
  session_start();
  if(!isset($_SESSION['S_ID']) && !isset($_SESSION['C_ID']))
  { ?>
      <script type ="text/Javascript">
      alert('로그인 후 이용해주세요.');
      window.location.href="/join/login.html";
      </script>
  <?php }
?>

  <body>
    <article class="container">
        <div class="page-header">
          <h1>마이페이지 <small>Mypage</small></h1>
        </div>
        <div class="col-md-6 col-md-offset-3">
          <div class="form-group text-center">
          <button class="btn btn-info" onclick="location.href='/mypage/pwd_confirm.html'">회원정보수정<i class="fa fa-check spaceLeft"></i></button>
          <button class="btn btn-info" onclick="location.href='/mypage/check.php'">신청/등록 레슨조회<i class="fa fa-check spaceLeft"></i></button>
      
        </div>  
      </article>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>