<?php
$servername = "us-cdbr-azure-west-c.cloudapp.net";
$username = "bb69c0b0ab48ed";
$password = "d9346dec";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$time= date('Y-m-d h:i:s', time());
$id=1;

#$sql = "INSERT INTO 'pprecords' ('Time', 'descriptionid', 'delta')
#VALUES ('$time', '$id', '0')";
$sql="INSERT INTO `pprecords` (`Time`, `descriptionid`, `delta`) VALUES ('2016-01-09 08:46:23', '1', '0')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>