<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "billborad";

$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
if (!$conn) {
  die("Connect failed".mysqli_connect_error());
}
else {
}
$base_url = "http://localhost/BilBoard/php";
 ?>
