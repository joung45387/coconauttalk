<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<?php

   $mysqli = new mysqli('localhost', 'lunatri', 'ljh45387', 'lunatri');

   $mysqli->query('SET NAMES utf8');

    $memberid = $_POST['memberid'];
    $membername = $_POST['membername'];
    $memberpw = $_POST['memberpw'];
    $memberpw2 = $_POST['memberpw2'];

    $mysqli->query('INSERT INTO account(name, id, password)VALUES("'.$membername.'","'.$memberid.'","'.$memberpw.'")');
    $sql = "alter table `chattingroom` add `{$memberid}` varchar (20);";
    $mysqli->query($sql);
  

 echo "<script>alert('회원가입을 축하드립니다.');</script>";
echo "<meta http-equiv='refresh' content='1; URL=index.php'>";
?>
</body>
