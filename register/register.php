
<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>레슨 등록</title>

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
    else if(!isset($_SESSION['C_ID']))
    { ?>
      <script type ="text/Javascript">
        alert('강사 회원만 등록이 가능합니다.');
        window.location.href="/login_main.php";
      </script>
    <?php } 
    else if(isset($_SESSION['C_ID'])){
      $id = $_SESSION['C_ID'];
      $mysqli=mysqli_connect("localhost","root","skkulbh9509","asl");
      $category="SELECT C_Name, Category FROM coach where C_ID = '$id'";
      $result=$mysqli->query($category);
      $row=$result->fetch_array(MYSQLI_ASSOC);
    }
  ?>

  <body>
      <article class="container">
        <div class="page-header">
          <h1>레슨 등록 <small>Register</small></h1>
        </div>
        <div class="col-md-6 col-md-offset-3">
          <form action = "/register/Register_in.php" method="post">
            <div class="form-group">
              <label for="l_name">레슨 제목</label>
              <input type="text" class="form-control" name="l_name" placeholder="레슨 제목">
            </div>
			
            <div class="form-group">
              <label for="c_name">강사 이름</label>
              <input type="text" class="form-control" name="c_name" value="<?php echo $row['C_Name']?>" readonly>
            </div>
			
            <div class="form-group">
              <label for="category">레슨 종목</label>
              <input type="text" class="form-control" name="category" value="<?php echo $row['Category']?>" readonly>
            </div>

            <div class="form-group">
              <label for="contents">레슨 내용</label>
              <input type="text" class="form-control" name="contents" placeholder="레슨할 내용을 입력해 주세요">
            </div>

		         <div class="form-group">
              <label for="place">레슨 장소</label>
              <input type="text" class="form-control" name="place" placeholder="레슨할 장소를 입력해 주세요">
            </div>

            <div class="form-group">
              <label for="time">레슨 시간</label>
              <input type="text" class="form-control" name="time" placeholder="레슨 시간을 입력하세요">
            </div>
            
            <div class="form-group">
              <label for="limit">수강 정원</label>
              <input type="text" class="form-control" name="limit" placeholder="수강 최대 인원을 입력하세요">
            </div>
            
            <div class="form-group">
              <label for="price">수강 가격</label>
              <input type="text" class="form-control" name="price" placeholder="수강 가격을 입력하세요">
            </div>

            <div class="form-group text-center">
              <button type="submit" class="btn btn-info">레슨 등록<i class="fa fa-check spaceLeft"></i></button>
            </div>
          </form>
        </div>
      </article>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>


