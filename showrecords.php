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
// $time=date('Y-m-d H:i:s', time());
$sql = "SELECT Time, description FROM pprecords LEFT JOIN ppcategory on pprecords.descriptionid= ppcategory.descriptionid WHERE Time > '$time'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	echo "<table border=\"1\"><tr><th>Time</th><th>Activity</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
    	switch ($row["description"]) {
    		case "poop outside cube indoor":
    		case "pee outside cube indoor":
        		$bgc="red";
        		break;
	    	case "pee inside cube not on pad":
	    	case "poop inside cube not on pad":
	        	$bgc="orangered";
	        	break;
	    	case "poop inside cube on pad":
	    	case "pee inside cube on pad":
	        	$bgc="yellow";
	        	break;
	        case "poop outdoor":
	        case "pee outdoor":
	        	$bgc="lightgreen"
	    	default:
        		echo "white";
}
        echo "<tr bgcolor=".$bgc."><td>" . $row["Time"]. "</td><td>" . $row["description"]. "</td></tr>";
    }
} else {
    echo "invalid activity";
}


echo "</table>";
mysqli_close($conn);

?>


