<?php
define('DB_SERVER','localhost');
define('DB_USER','l9tslhne_shopping');
define('DB_PASS' ,'-RWU8FNZv1v+');
define('DB_NAME', 'l9tslhne_shopping');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>