<script src="https://kit.fontawesome.com/12583d8ffd.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<div class="adminSetting">
    <div class="as1">
        <div class="dashboardHeading">
            <i class="material-icons">dashboard</i>
            <p class="asHeading">Dashboard</p>
        </div>
        <ul>
            <li><a href="adminMain.php"><i class='fas fa-home'></i>Home</a></li>
            <li><a><i class='fas fa-shopping-cart'></i>Medicine List</a><i id="shopSetArrow" class='fas fa-chevron-down down-arrow'></i>
                <ul id="shopSet">
                    <li><a href="createProduct.php">Add New Medicine</a></li>
                    <li><a href="viewProducts.php">View Medicines</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="as1">
        <a class="asLogout" href="adminLogout.php">Logout</a>
    </div>
</div>
<script>
    $(function() {
        $("#shopSet").hide();
        $("#shopSetArrow").click(function() {
            $("#shopSet").toggle();
            $("#shopSetArrow").toggleClass("rotate-arrow");
        });
    });
</script>