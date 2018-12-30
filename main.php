<script>
function addclick() {
    var id=document.getElementById("addid").value;

    if(id==""){
        alert("빈칸으로 입력하시면 안됩니다.");
    }
    ifrm1.location.href="addchatingroom.php?addid="+id;
}

function createclick() {

var id=document.getElementById("createid").value;

if(id==""){
    alert("빈칸으로 입력하시면 안됩니다.");
}
ifrm2.location.href="createchatingroom.php?createid="+id;
}
</script>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.7, shrink-to-fit=no">
    <title>코코넛톡</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/coconauttalk.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.0.min.js" ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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

        .index{
            text-align: center;
        }
    </style>
</head>


<body>
<?php
session_start();
if(!isset($_SESSION['userid'])) //세션이 존재하지 않을 때
{
    header ('Location: ./login.html');
}
?>
<div id="wrap1">
    <div id="wrap2">
        <div id="wrap3">
            <div class="index">
            <a><?=$_SESSION['username']?>님 환영합니다.</a>
            </div>
            <div class="form-inline">
                <a class="btn   btn-light   text-dark" href="talk/index.php" role="button">단체 채팅방</a>
            </div>
            <?php
            //채팅방 들어가는 버튼
            ?>
            <div class="form-inline">
                <input type="text" id="addid" name="addid" class="form-control"/>
                <input type="button" class="btn   btn-light   text-dark" value="채팅방 추가" onclick=addclick()>
            </div>
            <div class="form-inline">
                <input type="text" id="createid" name="creatid" class="form-control"/>
                <input type="button" class="btn   btn-light   text-dark" value="채팅방 생성" onclick=createclick()>
            </div>
        </div>
    </div>
</div>
<iframe src="" id="ifrm1" scrolling=no frameborder=no width=0 height=0 name="ifrm1"></iframe>
<iframe src="" id="ifrm2" scrolling=no frameborder=no width=0 height=0 name="ifrm2"></iframe>
</body>
