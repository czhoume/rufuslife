<?php
$servername = "us-cdbr-azure-west-c.cloudapp.net";
$username = "bb69c0b0ab48ed";
$password = "d9346dec";
$dbname = "rufuspprecords";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$count=0;
$sql = "SELECT Time, description FROM pprecords LEFT JOIN ppcategory on pprecords.descriptionid= ppcategory.descriptionid WHERE Time > '$time'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	echo "<table border=\"1\"><tr><th>Time</th><th>Activity</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
    	$tab[count]["Time"]=$row["Time"];
    	$tab[count]["description"]=$row["description"];
    	count++;
    }
} else {
    echo "invalid activity";
}

mysqli_close($conn);

?>