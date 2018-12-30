<?
session_start();
$db = new mysqli('localhost', 'lunatri', 'ljh45387', 'lunatri');
$db->query('SET NAMES utf8');
$db->query('
	INSERT INTO chat(name, msg, date)
	VALUES(
		"' .$_SESSION['username']. '",
		"' . $db->real_escape_string($_POST['msg']) . '",
		NOW()
	)
');
?>