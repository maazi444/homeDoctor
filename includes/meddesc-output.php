<?php
include("connection.php");
$med_id = $_POST['search'];
$sql = "SELECT * FROM medicine WHERE id='$med_id'";
// $sql = "SELECT * FROM medicine";
$recordset = mysqli_query($conn, $sql);
// echo $row['id'];
// echo $med_id;
// exit;
$output = "";
while ($row = mysqli_fetch_array($recordset)) {
    $output .= '
        <h2>' . $row['med_name'] . '</h2>
        <p>' . $row['med_desc'] . '</p>
        <br/>
        <h4>Usage:</h4>
        <p>' . $row['med_usage'] . '</p>
        </br>
    ';
} 
echo $output;
