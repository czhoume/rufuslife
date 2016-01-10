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
echo "Connected successfully ";


$id=$_POST['data1'];
$time= date('Y-m-d h:i:s', time());

$sql = "SELECT description FROM ppcategory WHERE descriptionid = $id"
echo $sql;
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo $row['description'];
} else {
    echo "invalid activity";
}

$sql = "INSERT INTO pprecords (Time, descriptionid, delta)
VALUES ('$time', '$id', '0')";

if (mysqli_query($conn, $sql)) {
    echo "successfully inserted";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>