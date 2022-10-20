<?php 
$db = "(DESCRIPTION =
(ADDRESS = (PROTOCOL = TCP)(HOST = sc09913)(PORT = 1521))(CONNECT_DATA = (SERVER = DEDICATED)(SERVICE_NAME = SUMON)))" ;

$conn = oci_connect('user','password',$db);

if(!$conn){
    echo "database not connected";
}