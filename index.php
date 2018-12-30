<!DOCTYPE html>
<html>
<head>
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

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

#wrap1{width:100%;
height:100%;
background:#F6F6F6;
text-align:center; 
}

#wrap2{width:500px;
height:700px;
background:#FEF01B;
position:absolute;
    text-align: center;
top:50%; 
left:50%; 
overflow:hidden; 
margin-top:-350px; 
margin-left:-250px;
border-radius: 20px;
}

.tittle{
font-size:390%;
padding-top:90px;
color:black;
}

.id{
padding-top:200px;
}

.form-control{
    margin:auto;
font-size:200%;
    width:78%;
}


.login{
padding-top:10px;
}

.btn{
font-size:200%;
    width:78%;
}

.signup{
    padding-top:10px;
color:black;
}


body {
    font-family: Arial, sans-serif;
    font-weight: bold;
}




</style>
</head>


<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<div id="wrap1">
	<div id="wrap2">
		<p class="tittle">코코넛톡</p>
		<form name="signin" action="logincheck.php" method="post">
		<div class="id">			
			<input type="text"  style="height:65px" id="memberid" name="memberid" class="form-control " placeholder="아이디">
			
		</div>
		<div class="password">
			<input type="password" style="height:65px" id="memberpw" name="memberpw" class="form-control" placeholder="비밀번호">
		</div>
		<div class="login">
			<input type="submit" style="height:60px" value="로그인" class="btn   btn-light   text-dark" />
		</div>
		</form>
		<h4 class="signup"><a href="signuppage.php">회원가입 하기</a></h4>
		</div>
	</div>
</div>

<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
