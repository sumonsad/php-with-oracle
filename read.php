<?php 
$db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = LOCALHOST)(PORT = 1521)))(CONNECT_DATA=(SID=oracl)))" ;

$conn = oci_connect('user','password',$db);

if($conn){
    echo "database connected sucessfully";
}else{
    echo "database not connected";
}

$query = "select ID,NAME,MOBILE FROM LOGIN WHERE ID = '$user'";

$result = oci_parse($conn, $query);

oci_execute($result);
echo "<table>";
echo "<tr><th>EmpId</th><th>Name</th><th>Mobile</th></tr>";
while (($user = oci_fetch_array($result, OCI_BOTH)) != false) {
  echo "<tr>";  
  echo "<td>".$user['ID']."</td>";
  echo "<td>".$user['NAME']."</td>";
  echo "<td>".$user['MOBILE']."</td>";
  echo "</tr>";
}
echo "</table>";
?>

