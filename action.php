
<?php require 'header.php';?>
<?php require 'dbconnect.php';?>
<?php 

if(isset($_REQUEST['search'])){
    $userid = $_REQUEST['usrid'];
$query = "select ID,PASSWORD,NAME,MOBILE from LOGIN where ID = '$userid'";

$result = oci_parse($conn, $query);

oci_execute($result);
?>

<div class="container">
    <div class="row text-center">
        <div class="col-md-12 print-container">
            <table class = "table table-bordered w-auto">
                <thead class="bg-dark text-white text-center">
                    <tr>
                        <th>User</th>
                        <th>Password</th>
                        <th>Name</th>
                        <th>Mobile</th>
                    </tr>
                </thead>
                <?php 
                    while (($user = oci_fetch_array($result))) {
                        $id = $user['ID']; 
                        $pass = $user['PASSWORD'];
                        $name = $user['NAME']; 
                        $mobile = $user['MOBILE'];   
                    
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $id; ?></td>
                        <td><?php echo $pass; ?></td>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $mobile; ?></td>
                    </tr>
                </tbody>
                <?php 
                    }
                    }
                ?>
            </table>
        </div>         
    </div>
    <br><br>
    <div class="row text-center">
    <div class="col-md-12">
            <button onclick = "window.print()" class="btn btn-success">Print</button>
        </div> 
    </div>
</div>

