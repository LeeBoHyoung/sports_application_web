<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>로그인 완료</title>

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
{
    header('Location: /index.html');
}
?>

<body>
  <article class="container">
      <div class="page-header">
        <h1>로그인을 성공하였습니다. <small>Login successfully</small></h1>
      </div>
      <div class="form-group text-center">
            <button onclick="location.href='../login_main.php'" class="btn btn-info">홈으로 이동<i class="fa fa-check spaceLeft"></i></button>
            <button onclick="location.href='logout.php'" class="btn btn-warning">로그아웃<i class="fa fa-times spaceLeft"></i></button>
          </div>
    </article>

   
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

   
   <script src="js/bootstrap.min.js"></script>

  </body>
</html>
