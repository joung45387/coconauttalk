<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<?php
session_start();
if(!isset($_SESSION['userid'])) //세션이 존재하지 않을 때
{
    header ('Location: ./login.html');
}

$id= $_SESSION['userid'];

$createid = $_GET['addid'];
echo "<script>alert ('$createid');</script>>";
$mysqli=new mysqli("localhost","lunatri", "ljh45387", "lunatri");
$mysqli->query('SET NAMES utf8');


$result=$mysqli->query("SHOW TABLES LIKE '$createidid'");
$exist=($result->num_rows>0);
if($exist==0){
    echo "<script>alert ('성공');</script>>";
}
$mysqli->query('INSERT INTO chattingroom('.$id.')VALUES("'.$createid.'")');


?>
</body>
