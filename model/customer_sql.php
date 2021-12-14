<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "db_lara1");
$result = $conn->query("SELECT * FROM customer");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
  if ($outp != "") {$outp .= ",";}
  $outp .= '{"Name":"'  . $rs["fullname"] . '",';
  $outp .= '"Mobile":"'   . $rs["mobile"]        . '",';
  $outp .= '"Email":"'   . $rs["email"]        . '",';
  $outp .= '"Address":"'   . $rs["address"]        . '",';
  $outp .= '"City":"'   . $rs["city"]        . '",';
  $outp .= '"Pincode":"'   . $rs["pincode"]        . '",';
  $outp .= '"State":"'. $rs["state"]     . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>
