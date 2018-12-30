<!DOCTYPE html>
<html lang="ko">
<head>
    <link rel="apple-touch-icon" sizes="57x57" href="../favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.7, shrink-to-fit=no">
    <title>단체 체팅방</title>
    <meta charset="utf8">
    <script type="text/javascript" src="chat.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script>
        $(document).ready(function() {


            var objDiv = document.getElementById("list");

            objDiv.scrollTop = objDiv.scrollHeight;

        });
    </script>
    <link rel="stylesheet" type="text/css" href="../css/coconauttalk.css"/>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css"/>
    <style type="text/css">
        #wrap3{
            text-align: center;
        }
        #list{
            position: absolute;
            top:4%;
            left: 5%;
            text-align: left;
            width:90%;
            height: 84%;
            overflow-y:scroll;
        }
        #list dt{
            font-weight: bold;
        }
        #list a{
            background-color: white;
            border-radius: 7px;
            display:inline-block;
            font-size: 21px;
        }
        #name{
            font-weight: bold;
            font-size: 17px;
        }
        #content{
            background-color: white;
        }
        .form-inline{
            position:absolute;
            left:5%;
            width:100%;
            bottom:4%;
        }
        #msg{
            width: 74%;
        }
    </style>
</head>
<body>
<div id="wrap1">
    <div id="wrap2">
        <div id="wrap3">
<div id="list">
    <?php
        session_start();
        $conn = mysqli_connect("localhost","lunatri","ljh45387");
        mysqli_select_db($conn,'lunatri');
        $result = mysqli_query($conn,'select * from chat');

    while ($row = mysqli_fetch_assoc($result)) {
        $row['msg']=iconv("euc-kr", "utf-8", $row['msg']);
        $row['name']=iconv("euc-kr", "utf-8", $row['name']);
        echo '<span id="name">' . $row['name'] . '</span>';
        echo '</br>';
        echo '<a id="content">' . $row['msg'] . '</a>';
        echo '</br>';
    }
    ?>
</div>
<form class="form-inline" onsubmit="chatManager.write(this); return false;">
    <input name="msg" id="msg" class="form-control" type="text" />
    <input name="btn" class="btn   btn-light   text-dark"  type="submit" value="보내기" />
</form>
        </div>
    </div>
</div>
</body>
</html>