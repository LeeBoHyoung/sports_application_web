<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>회원정보수정</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
    <!-- Custom style -->
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">


  </head>
  <body>

        <?php session_start();
         if(isset($_SESSION['S_ID'])) {
         $id = $_SESSION['S_ID'];
         $mysqli=mysqli_connect("localhost","root","skkulbh9509","asl");
         $name="SELECT S_Name FROM student where S_ID = '$id'";
         $result=$mysqli->query($name);
         $row=$result->fetch_array(MYSQLI_ASSOC);
         ?>
      <article class="container">
        <div class="page-header">
          <h1>회원정보수정 <small>Modify</small></h1>
        </div>
        <div class="col-md-6 col-md-offset-3">
          <form action = "./modify3.php" method="post">
            <div class="form-group">
              <label for="id">아이디</label>
              <input type="text" class="form-control" value=<?php echo $_SESSION['S_ID']?> readonly>
            </div>
			
            <div class="form-group">
              <label for="pwd">비밀번호</label>
              <input type="password" class="form-control" name="pwd" placeholder="비밀번호">
            </div>
			
            <div class="form-group">
              <label for="pwd2">비밀번호 확인</label>
              <input type="password" class="form-control" name="pwd2" placeholder="비밀번호 확인">
              <p class="help-block">비밀번호 확인을 위해 다시 한번 입력 해 주세요</p>
            </div>

            <div class="form-group">
              <label for="name">이름</label>
              <input type="text" class="form-control" name="name" value=<?php echo $row['S_Name']?> readonly>
            </div>

		      	<div class="form-group">
              <label for="tel">전화 번호</label>
              <input type="text" class="form-control" name="tel" placeholder="전화 번호를 입력해 주세요">
            </div>

            <div class="form-group">
              <label for="birthDay">생년월일</label>
              <input type="text" class="form-control" name="birthDay" placeholder="생년월일를 입력해 주세요">
            </div>
			
            <div class="form-group text-center">
              <button type="submit" class="btn btn-info">수정<i class="fa fa-check spaceLeft"></i></button>
            </div>
            </form>
            <div class="form-group text-center">
                <button onclick="location.href='../login_main.php'" class="btn btn-warning">취소<i class="fa fa-times spaceLeft"></i></button>
            </div>    
        </div>
      </article>
        <?php }?>

        <?php session_start();
         if(isset($_SESSION['C_ID'])) {
         $id = $_SESSION['C_ID'];
         $mysqli=mysqli_connect("localhost","root","skkulbh9509","asl");
         $name="SELECT C_Name FROM coach where C_ID = '$id'";
         $result=$mysqli->query($name);
         $row=$result->fetch_array(MYSQLI_ASSOC);
         ?>
        <article class="container">
        <div class="page-header">
          <h1>회원정보수정 <small>Modify</small></h1>
        </div>
        <div class="col-md-6 col-md-offset-3">
          <form action = "./modify3.php" method="post">
            <div class="form-group">
              <label for="id">아이디</label>
              <input type="text" class="form-control" name="id" value=<?php echo $_SESSION['C_ID']?> readonly>
            </div>
			
            <div class="form-group">
              <label for="pwd">비밀번호</label>
              <input type="password" class="form-control" name="pwd" placeholder="비밀번호">
            </div>
			
            <div class="form-group">
              <label for="pwd2">비밀번호 확인</label>
              <input type="password" class="form-control" name="pwd2" placeholder="비밀번호 확인">
              <p class="help-block">비밀번호 확인을 위해 다시 한번 입력 해 주세요</p>
            </div>

            <div class="form-group">
              <label for="name">이름</label>
              <input type="text" class="form-control" name="name" value=<?php echo $row['C_Name']?> readonly>
            </div>

		      	<div class="form-group">
              <label for="tel">전화 번호</label>
              <input type="text" class="form-control" name="tel" placeholder="전화 번호를 입력해 주세요">
            </div>

            <div class="form-group">
              <label for="category">운동 종목</label>
              <input type="text" class="form-control" name="category" placeholder="운동 종목을 입력하세요">
            </div>
            
            <div class="form-group">
              <label for="carrer">경력 사항</label>
              <input type="text" class="form-control" name="carrer" placeholder="경력 사항을 입력하세요">
            </div>
			
            <div class="form-group text-center">
              <button type="submit" class="btn btn-info">수정<i class="fa fa-check spaceLeft"></i></button>
            </div>
        </form>
            <div class="form-group text-center">
            <button onclick="location.href='../login_main.php'" class="btn btn-warning">취소<i class="fa fa-times spaceLeft"></i></button>
            </div>
        </div>
      </article>
        <?php }?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>