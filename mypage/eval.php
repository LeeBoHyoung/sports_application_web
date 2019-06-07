<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>강사 평가 Evaluation</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
    <!-- Custom style -->
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">

    <style>
    header{position:relative;width:100%;height:100px;background-color:ghostwhite;}
    #logo{position:absolute;top:0px;left:0px;width:100px;height:100px;}
    </style>
  </head>

  <?php
    session_start();
    $lname=$_POST['lname'];
    $cid=$_POST['cid'];
    $sid=$_SESSION['S_ID'];

   ?>

<header>
<ul>
    <a href="/login_main.php">
    <img id="logo" src="home.jpg" alt="home.jpg">
    </a>
</ul>
</header>

  <body>
      <article class="container">
        <div class="page-header">
          <h1>강사 평가 <small>Evaluation</small></h1>
        </div>
        <div class="col-md-6 col-md-offset-3">
          <form action = "./eval_input.php" method="post">
          <input type="hidden" name="lname" value="<?php echo $lname ?>" />
          <input type="hidden" name="cid" value="<?php echo $cid ?>" />
          <input type="hidden" name="sid" value="<?php echo $sid ?>" />
            <div class="form-group">
              <label for="contents">평가 내용</label>
                </br>
                <textarea cols="50" rows="15" class="form-control" name="contents" placeholder="레슨 후기 및 개선점을 적어주세요."></textarea>
            </div>
            <div class="form-group text-center">
              <button type="submit" class="btn btn-info">평가완료<i class="fa fa-check spaceLeft"></i></button>
            </div>
          </form>
        </div>
      </article>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>