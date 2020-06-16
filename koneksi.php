<?php
   $hostname  = "localhost";
   $username  = "root";
   $password  = "";
   $dbname  = "ramdan";
   $db = mysqli_connect($hostname, $username, $password, $dbname);

if ($db->connect_errno) {
    printf ("Connect failed: %s\n", $con->connect_errno);
    exit();
}
?>