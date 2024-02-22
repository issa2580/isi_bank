<?php /*
function ajoutAgents($login,$password){
	$sql="INSERT INTO agents VALUES (null,'$login','$password')";
	return executeSql($sql);
}*/
	function verifie_agent($login, $pwd)
	{
		$sql = "SELECT * FROM agents WHERE login = '$login' AND password = '$pwd'";

		return executeSql($sql);
	}
 ?>