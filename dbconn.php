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


$id=$_POST['act'];
$time= new DateTime();
$time->sub(new DateInterval("'$_POST['delay']'M"));
echo $time->format('Y-m-d H:i:s') . "\n"; 
$sql = "SELECT description FROM ppcategory WHERE descriptionid = $id";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    echo "<h1>Last activity: ".$row["description"];
} else {
    echo "invalid activity";
}

$sql = "INSERT INTO pprecords (Time, descriptionid, delta)
VALUES ('$time', '$id', '0')";

if (mysqli_query($conn, $sql)) {
    // echo "successfully inserted";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo " at $time </h1>";
mysqli_close($conn);

?>