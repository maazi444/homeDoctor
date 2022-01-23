<?php
session_start();
if (isset($_SESSION['adminSigned']) == "1") {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" href="img/favicon.png" />
        <title>Control Panel</title>
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
                    <h2 class="acrHeading">Home</h2>
                    <ul class="storeSettingSection">
                        <li><a href="createProduct.php"><i class='fas fa-shopping-cart'></i>Medicine List Settings</a></li>
                    </ul>
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