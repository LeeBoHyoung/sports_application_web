<!DOCTYPE html>

<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>강사 평가 View</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
    <!-- Custom style -->
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">

  </head>

<?php
    session_start();
    $cid=$_SESSION['C_ID'];

    $mysqli=mysqli_connect("localhost","root","skkulbh9509","asl");
    $view = mysqli_query($mysqli,"SELECT * from eval where C_ID = '$cid'");
?>



<body>
    <article class="container">
    <div class="page-header">
    <h1>평가 내용 </h1>
    </div>
    </article>
  <table width="100%", class="table">
  <tbody>
      <?php while($row = mysqli_fetch_row($view)){ ?>
        <tr>
        <td style=padding-left:10px;><?php echo $row[3]?></td>
        </td>
      <?php }?>
      </tr>  
    </tbody>
  </table>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


<script src="js/bootstrap.min.js"></script>
</body>
</html>
