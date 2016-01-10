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
// echo "Connected successfully ";


$time= new DateTime();
$time->sub(new DateInterval('P'.$_GET['days'].'D'));
$time=$time->format('Y-m-d H:i:s');
echo $time;
// $time=date('Y-m-d H:i:s', time());
$sql = "SELECT Time, description FROM pprecords LEFT JOIN ppcategory on pprecords.descriptionid= ppcategory.descriptionid WHERE Time > '$time'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	echo "<table border='1'><tr><td>Time</td><td>Activity</td></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>" . $row["Time"]. "</td><td>" . $row["description"]. "</td></tr>";
    }
} else {
    echo "invalid activity";
}


echo "</table>";
mysqli_close($conn);

?>


