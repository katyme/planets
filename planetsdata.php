<?php
$servername = "localhost";
$username = "";
$password = "";
$dbname = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Data pull from database on webpage
$sql = "SELECT * FROM planets";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';

        echo '<td>';
        echo '<img src="images/'.($row["planet"]).'.jpg" style="width:200px;">';
        echo '</td>';

        echo '<td>';
        echo $row["planet"];
        echo '</td>';

        echo '<td>';
        echo '<a href="'.($row["google_maps"]).'" target="_blank" class="btn btn-info">View</a>' ;
        echo '</td>';

        echo '<td>';
        echo $row["description"];
        echo '</td>';

        echo '<td>';
        echo $row["distance"];
        echo '</td>';
        
        echo '<td>';
        echo $row["radius"];
        echo '</td>';

        echo '<td>';
        echo $row["mass"];
        echo '</td>';

        echo '<td>';
        echo $row["length_of_day"];
        echo '</td>';

        echo '<td>';
        echo $row["orbital"];
        echo '</td>';
        
        echo '</tr>';
        
      
        
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>