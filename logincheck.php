<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.7, shrink-to-fit=no">
    <title>코코넛톡</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script type = "text/javascript"></script>

    <style type="text/css">

        body,p,h1,h2,h3,h4,h5,h6,ul,ol,li,dl,dt,dd,table,th,td,form,fieldset,legend,input,
        textarea,button,select{margin:0;padding:0}
        img,fieldset{border:0}
        ul,ol{list-style:none}
        em,address{font-style:normal}
        a{text-decoration:none}
        a:hover,a:active,a:focus{text-decoration:none}

        a:link{
            color:black;
        }
        a:visited{
            color:black;
        }
        body {
            font-family: Arial, sans-serif;
            font-weight: bold;
        }
    </style>
</head>
<body>
<?php
session_start();
$id=$_POST['memberid'];
$pw=$_POST['memberpw'];
$mysqli=mysqli_connect("localhost","lunatri","ljh45387","lunatri");
mysqli_query($mysqli,'set names utf8');
$check="SELECT * FROM account WHERE id='$id'";
$result=$mysqli->query($check);
if($result->num_rows==1){
    $row=$result->fetch_array(MYSQLI_ASSOC);
    if($row['password']==$pw){
        $_SESSION['userid']=$row['id'];
        $_SESSION['username']=$row['name'];
        echo $_SESSION['username'];
        if(isset($_SESSION['userid']))
        {
            if(isset($_SESSION['username'])){
                header('Location: ./main.php');
            }
        }
        else{
            echo "세션 저장 실패";
        }
    }
    else{
        echo "<div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
  <strong>잘못된 비밀번호입니다.</strong>
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    <span aria-hidden=\"true\">&times;</span>
  </button>
</div>";
    }
}
else{
    echo "<div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
  <strong>아이디가 등록된 정보에 없습니다.</strong>
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    <span aria-hidden=\"true\">&times;</span>
  </button>
</div>";
}
?>
</body>
