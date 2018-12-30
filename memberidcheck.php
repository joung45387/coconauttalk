<?php
    
    $conn=mysql_connect("localhost","lunatri", "ljh45387");
    mysql_select_db("lunatri",$conn);
    mysql_query( "set names 'utf8'" );
    $memberid = $_GET['userid'];
 
    $query="select * from account where id='$memberid'";
    $result=mysql_query($query,$conn);
    $row=mysql_num_rows($result);
?>
<script>
 var row="<?=$row?>";
 if(row>=1){
 parent.document.getElementById("idcheck").value="0";
 parent.alert("이미 사용중인 아이디입니다.");
 }
 else{
 parent.document.getElementById("idcheck").value="1";
 parent.alert("사용가능합니다.");
 }
</script>