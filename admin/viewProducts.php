<?php
    include("includes/connection.php");
    session_start();
    if(isset($_SESSION['adminSigned']) == "1")
    {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="icon" href="img/favicon.png"/>
    <title>Control Panel - Comfort</title>
</head>
<body>
    <div class="container">
        <div class="controlPanelLogo">
            <h1>Control Panel</h1>
        </div>
        <div class="adminContent">
            <?php
                include("includes/adminSettings.php");
            ?>
            <div class="acRight">
                <h2 class="acrHeading">View Medicines</h2>
                <table>
                    <tr>
                        <th>Medicine Name</th>
                        <th>Medicine Description</th>
                        <th>Medicine Usage</th>
                        <!-- <th>Product Image</th>
                        <th>Product Quantity</th>
                        <th>Date Created</th>
                        <th>Delete Product</th> -->
                    </tr>
                    <?php
                        $sql = "select * from medicine";
                        $results = mysqli_query($connection, $sql);
                        while($row = mysqli_fetch_array($results))
                        {
                            echo "<tr>";
                                echo "<td>".$row['med_name']."</td>";
                                echo "<td>".$row['med_desc']."</td>";
                                echo "<td>$".$row['med_usage']."</td>";
                                // echo "<td><img class='adminProdimg' src='assets/".$row['prod_image']."'/></td>";
                                // echo "<td>".$row['prod_quantity']."</td>";
                                // echo "<td>".$row['date_created']."</td>";
                                // echo "<td><a href='deleteProduct.php?prod_id=".$row['prod_id']."&option=delete'>Delete</a></td>";
                            echo "</tr>";
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
<?php
    }
    else{
        header("location:adminLogin.php");
    }
?>