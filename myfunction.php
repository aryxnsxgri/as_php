<?php

{
$mysqli = new mysqli("localhost","2348464","Westbrom2024","db2348464");
if ($mysqli -> connect_errno) {
echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
exit();
}

return $mysqli;
}
?>