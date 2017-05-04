
<?php
header('Content-Type: application/json');

include("../b_connectDB.php");





$sqlAll = "SELECT id,english,thai,favo FROM vocabulary ";

$resutAll = mysql_query($sqlAll);

while ($rowAll = mysql_fetch_array($resutAll)) {

	$data[] = array("id" => " ".$rowAll['id'],"thai" => "  ".$rowAll['thai'],"english" => "  ".$rowAll['english'],"favo" => " ".$rowAll['favo']);

}

$json = array('StatusCode' => $StatusCodeIs200, 'SQL' => $sqlAll, 'Data' => $data);

print(json_encode($json));
mysql_close();
?>
