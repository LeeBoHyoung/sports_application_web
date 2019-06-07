<!DOCTYPE html>

<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>레슨 신청</title>

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
    <script language=javascript>
      function btn_click(str){        
      if(str=="search"){   
          frm1.action="search.php";     
      } else if(str=="all"){      
          frm1.action="apply_form.php";      
      }
      }
      </script>
  </head>

<?php
    $search_word=$_GET['search'];
    $mysqli=mysqli_connect("localhost","root","skkulbh9509","asl");
    $search=mysqli_query($mysqli,"select * from lesson, lesson_c where lesson.C_ID = lesson_c.C_ID and lesson_c.Category = '$search_word'");
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
    <h1>레슨 신청 <small>Apply</small></h1>
  </div>
  <div class="col-md-6 col-md-offset-3">
    <form class = "form-inline" name=frm1 method="get">
    <div class="form-group">
    <input type="text" class="form-control" name="search" placeholder="레슨 종목 검색">
    <button type="submit" class="btn btn-info" onclick='btn_click("search");'>검색<i class="fa fa-check spaceLeft"></i></button>
    <button type="submit" class="btn btn-info" onclick='btn_click("all");'>모두보기<i class="fa fa-check spaceLeft"></i></button>
    </form>
  </div>
</article>
  </br>

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
            <th width="10%" , style="text-align:center">신청</th>
        </tr>
    </thead>
  <tbody>
    <?php
      while($row = mysqli_fetch_row($search)){ ?>
        <tr>
        <form action = "./apply.php" method="GET">
        <input type="hidden" name = "lname" value='<?php echo $row[0]?>'>
        <input type="hidden" name = "cid" value='<?php echo $row[1]?>'>
        <td width="10%" style="text-align:center"><?php echo $row[0]?></td>
        <td width="10%" style="text-align:center"><?php echo $row[9]?></td>
        <td width="10%" style="text-align:center"><?php echo $row[10]?></td>
        <td width="10%" style="text-align:center"><?php echo $row[3]?></td>
        <td width="10%" style="text-align:center"><?php echo $row[4]?></td>
        <td width="10%" style="text-align:center"><?php echo $row[5]?></td>
        <td width="10%" style="text-align:center"><?php echo $row[7]?></td>
        <td width="10%" style="text-align:center"><button type="summit" class="btn btn-info">신청<i class="fa fa-check spaceLeft"></i></button></td>;
        </br>
      </form>
      <?php }
      ?>  
      </tr>
    </tbody>
  </table>
  



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


<script src="js/bootstrap.min.js"></script>
</body>
</html>