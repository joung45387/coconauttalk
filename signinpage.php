<?php
   session_start();

   $host = 'localhost';
   $user = 'lunatri';
   $pw = 'ljh45387';
   $dbName = 'lunatri';
   $mysqli = new mysqli($host, $user, $pw, $dbName);

   $conn=mysql_connect($host,$user,$pw);
   mysql_select_db("lunatri",$conn);

   $memberid =$_POST['memberid'];
   $memberpw = $_POST['memberpw'];

   $sql = "SELECT * FROM account WHERE id = '{$memberid}' AND password = '{$memberpw}'";
   $res = $mysqli -> query(sql);
   
   $result=mysql_query($sql,$conn);
   $row = mysql_fetch_array($result);


   if($row){ 
    $_SESSION['ses_userid'] = $memberid;
    echo $_SESSION['ses_userid'] . '�� �ȳ��ϼ���';
   }

   else{
	echo $row
            echo "�α��� ���� ���̵�� ��й�ȣ�� ��ġ���� �ʽ��ϴ�.";
            echo "<meta http-equiv='refresh' content='1; URL=index.php'>";
   }
?>