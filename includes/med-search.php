<?php
include("connection.php");
$search_term = $_POST['search'];
$sql = "SELECT * FROM medicine WHERE med_name LIKE '%{$search_term}%' OR med_desc LIKE '%{$search_term}%' OR med_usage LIKE '%{$search_term}%'";
$recordset = mysqli_query($conn, $sql) or die("SQL Query Failed.");
$output = "";
if ($search_term == "") {
    $output = '
        <img src="assets/searchIcon.png" alt="Search icon">
        <h1>Type some keywords in search box<br>to find medicines</h1>
    ';
} else if (mysqli_num_rows($recordset) > 0) {
    $output = '
        <div class="sub-main">
            <div class="rel-search" style="width:100%; height:5%; display:flex; align-items:center; margin-bottom: 1rem;">
                <h3>Related Searches For: </h3>
                <p style="font-size:17px; margin-left:1rem;">"' . $search_term . '"</p>
            </div>
            <div class="output-wrap" style="display:flex; width:100%; height:95%; padding-bottom:1rem;">
                <div class="list-section">
                <ul class="search-list">';
    while ($row = mysqli_fetch_array($recordset)) {
        $output .= '
                <a class="med-card" data-id="' . $row['id'] . '">
                    <li style="cursor:pointer;">' . $row["med_name"] . '</li>
                </a>
        ';
    }
    $output .= '
                </ul>
                </div>
                <div class="desc-section">
                    <div class="desc-default">
                        <h1>Nothing to Show</h1>
                        <p>Please select Medicine from the list to show the details</p>
                    </div>
                </div>
            </div>
        </div>
    ';
} else {
    $output = '
        <img src="assets/notFound.png">
        <h1>No Matching Results Found</h1>
        <p>Try some other keywords</p>
    ';
}
echo $output;
