<!DOCTYPE html>

<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>신청/등록 레슨조회</title>

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
    $mysqli=mysqli_connect("localhost","root","skkulbh9509","asl");
    if(isset($_SESSION['C_ID'])){
        $id=$_SESSION['C_ID'];
        $search=mysqli_query($mysqli,"SELECT * FROM lesson l, lesson_c lc 
        where l.C_ID=lc.C_ID and l.C_ID = '$id'");
    }
    else if(isset($_SESSION['S_ID'])){
            $id=$_SESSION['S_ID'];
            $search=mysqli_query($mysqli,"SELECT * FROM apply a, lesson l, lesson_c lc 
            where l.C_ID=lc.C_ID and a.S_ID='$id' and l.C_ID=a.C_ID and a.L_Name = l.L_Name");
  
    }
?>

<header>
<ul>
    <a href="/login_main.php">
    <img id="logo" src="home.jpg" alt="home.jpg">
    </a>
</ul>
</header>

<body>

<?php if(isset($_SESSION['C_ID'])) {?>
    <article class="container">
    <div class="page-header">
    <h1>등록 레슨조회 </h1>
    </div>
    </article>
  <table width="100%", class="table">
    <thead>
        <tr>
            <th width="10%" , style="text-align:center">레슨명</th>
            <th width="10%" , style="text-align:center">강사명</th>
            <th width="10%" , style="text-align:center">레슨종목</th>
            <th width="10%" , style="text-align:center">레슨장소</th>
            <th width="10%" , style="text-align:center">레슨시간</th>
            <th width="10%" , style="text-align:center">신청인원</th>
            <th width="10%" , style="text-align:center">레슨비용</th>
            <th width="10%" , style="text-align:center">강사평가</th>
            <th width="10%" , style="text-align:center">취소</th>
        </tr>
    </thead>
  <tbody>
      <?php while($row = mysqli_fetch_row($search)){ ?>
        <tr>
        <td width="10%" style="text-align:center"><?php echo $row[0]?></td>
        <td width="10%" style="text-align:center"><?php echo $row[9]?></td>
        <td width="10%" style="text-align:center"><?php echo $row[10]?></td>
        <td width="10%" style="text-align:center"><?php echo $row[3]?></td>
        <td width="10%" style="text-align:center"><?php echo $row[4]?></td>
        <td width="10%" style="text-align:center"><?php echo $row[5]?></td>
        <td width="10%" style="text-align:center"><?php echo $row[7]?></td>
        <form action="view_eval.php" method="post">
          <td width="10%" style="text-align:center">
            <button type="submit" class="btn btn-info">평가보기<i class="fa fa-check spaceLeft"></i></button>
          </td>
        </form>
        <form action = "cancel_register.php" method="post">
          <td width="10%" style="text-align:center">
            <input type="hidden" name="lname" value="<?php echo $row[0] ?>" />
             <button type="submit" class="btn btn-info">취소<i class="fa fa-check spaceLeft"></i></button>
        </form>
        </br>
      <?php }?>
      </tr>  
    </tbody>
  </table>
<?php }?>

<?php if(isset($_SESSION['S_ID'])) {?>
    <article class="container">
    <div class="page-header">
    <h1>신청 레슨조회 </h1>
    </div>
    </article>
  <table width="100%", class="table">
    <thead>
        <tr>
            <th width="10%" , style="text-align:center">레슨명</th>
            <th width="10%" , style="text-align:center">강사명</th>
            <th width="10%" , style="text-align:center">레슨종목</th>
            <th width="10%" , style="text-align:center">레슨장소</th>
            <th width="10%" , style="text-align:center">레슨시간</th>
            <th width="10%" , style="text-align:center">신청인원</th>
            <th width="10%" , style="text-align:center">레슨비용</th>
            <th width="10%" , style="text-align:center">강사평가</th>
            <th width="10%" , style="text-align:center">취소</th>
        </tr>
    </thead>
  <tbody>
      <?php while($row = mysqli_fetch_row($search)){ ?>
        <tr>
        <td width="10%" style="text-align:center"><?php echo $row[1]?></td>
        <td width="10%" style="text-align:center"><?php echo $row[12]?></td>
        <td width="10%" style="text-align:center"><?php echo $row[13]?></td>
        <td width="10%" style="text-align:center"><?php echo $row[6]?></td>
        <td width="10%" style="text-align:center"><?php echo $row[7]?></td>
        <td width="10%" style="text-align:center"><?php echo $row[8]?></td>
        <td width="10%" style="text-align:center"><?php echo $row[10]?></td>
        <form action="eval.php" method="post">
          <td width="10%" style="text-align:center">
            <input type="hidden" name="lname" value="<?php echo $row[1] ?>" />
            <input type="hidden" name="cid" value="<?php echo $row[2] ?>" />
            <button type="submit" class="btn btn-info">강사평가<i class="fa fa-check spaceLeft"></i></button>
          </td>
        </form>
        <form action = "cancel_apply.php" method="post">
          <td width="10%" style="text-align:center">
            <input type="hidden" name="lname" value="<?php echo $row[1] ?>" />
            <input type="hidden" name="cid" value="<?php echo $row[2] ?>" />
             <button type="submit" class="btn btn-info">취소<i class="fa fa-check spaceLeft"></i></button>
        </form>
        </td>
        </br>
        <?php }?>
      </tr>  
    </tbody>
  </table>
<?php }?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


<script src="js/bootstrap.min.js"></script>
</body>
</html>
