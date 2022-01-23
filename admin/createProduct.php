<?php
include("includes/connection.php");
session_start();
ob_start();
if (isset($_SESSION['adminSigned']) == "1") {
    if (isset($_POST['add_product'])) {
        $med_name = $_POST['medName'];
        $med_desc = $_POST['medDesc'];
        $med_usage = $_POST['medUsg'];
        $sql = "INSERT INTO medicine(med_name,med_desc,med_usage)
            VALUES('$med_name','$med_desc','$med_usage')";
        mysqli_query($connection, $sql);
    }
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" href="img/favicon.png" />
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
                    <h2 class="acrHeading">Add New Medicine</h2>
                    <form autocomplete="off" method="POST">
                        <input type="text" name="medName" placeholder="Medicine Name" required>
                        <input type="text" name="medDesc" placeholder="Medicine Description" required>
                        <input type="text" name="medUsg" placeholder="Medicine Usage" required>
                        <input type="submit" name="add_product" value="Add Medicine">
                    </form>
                </div>
            </div>
        </div>
    </body>

    </html>

<?php
} else {
    header("location:adminLogin.php");
}
?>