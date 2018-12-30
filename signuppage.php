<script>
function check(){
	document.getElementById("idcheck").value=0;
  	var id=document.getElementById("memberid").value;
	
	if(id==""){
		alert("빈칸으로 입력하시면 안됩니다.");
		exit;
	}
	ifrm1.location.href="memberidcheck.php?userid="+id;
}

function checksubmit(){
	var name=document.getElementById("membername").value;
	var id=document.getElementById("memberid").value;
	var pw=document.getElementById("memberpw").value;
	var pw2=document.getElementById("memberpw2").value;
	var result=true;

	if(name==""){
		alert("이름을 입력하셔야 합니다.");
		result=false;
	}
	if(id==""){
		alert("아이디를 입력하셔야 합니다.");
		result=false;
	}
	if(document.getElementById("idcheck").value==0){
		alert("아이디 중복확인을 입력하셔야 합니다.");
		result=false;
	}
	if(pw==""){
		alert("비밀번호를 입력하셔야 합니다.");
		result=false;
	}	
	if(pw2==""){
		alert("비밀번호 확인을 입력하셔야 합니다.");
		result=false;
	}	
	if(pw!=pw2){
		alert("비밀번호 확인이 틀렸습니다.");
		result=false;
	}
return result;
}
</script>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.7, shrink-to-fit=no">    
<title>회원가입</title>
    <link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/coconauttalk.css">
<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.0.min.js" ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<style type="text/css">
    body {
        font-family: Arial, sans-serif;

    }

    label{
        display:inline-block;
        width:105px;
        text-align: right
    }


    .title{
        text-align: center;
        font-weight: bold;
        padding-top: 50px;
    }

     /*.padding{
        padding-top:85px;
        text-align: left;

    }*/

    .form-inline{
        padding-top:35px;
        text-align: left;

    }

    .submit{
        margin-top: 40px;
        text-align: center;
    }

    .form-control{
        font-size:100%;
        width:55%;
    }





</style>
</head>


<body>
	<div id="wrap1">
		<div id ="wrap2">
			<div id="wrap3">
			<h1 class="title">회원가입</h1>
				<form name="signUp" action="membersave.php" method="post" onsubmit="return checksubmit()">

                    <div class="form-inline">
                        <label for = "membername" class="padding">이름</label>
                        <input type="text" id="membername" name="membername" class="form-control"/>
                        <input type=hidden id="name" name="name" value="0">
                    </div>


                    <div class="form-inline">
                        <label for ="memberid">아이디</label>
                        <input type="text" id="memberid" name="memberid" class="form-control"/>
                        <input type="button" class="btn   btn-light   text-dark" value="중복확인" onclick=check()>
                        <input type=hidden id="idcheck" name="idcheck" value="0">
                    </div>


                    <div class="form-inline">
                        <label for ="memberpw">비밀번호</label>
                        <input type="password" id="memberpw" name="memberpw" class="form-control" />
                        <input type=hidden id="pwcheck" name="pwcheck" value="0">
                    </div>


                    <div class="form-inline">
                        <label for ="memberpw2">비밀번호 확인</label>
                        <input type="password" id="memberpw2" name="memberpw2" class="form-control"  />
                        <input type=hidden id="pwcheck2" name="pwcheck2" value="0">
                        <input type=hidden id="pwcheck3" name="pwcheck2" value="0">
                    </div>
                    <div class="submit">
                        <input type="submit" value="가입하기" class="btn   btn-light   text-dark">
                    </div>
                </form>
			</div>
		</div>
	</div>
	<iframe src="" id="ifrm1" scrolling=no frameborder=no width=0 height=0 name="ifrm1"></iframe>
 </body>
</html>




</body>
</html>