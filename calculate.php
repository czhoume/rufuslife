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
$time=new Datetime("2016-1-08 11:23:00");
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



for($i=0; i<count; i++){
	if(strpos($tab[i]["description"],'drink') !== false){
		$drink=$tab[i]["Time"];
	}elseif(strpos($tab[i]["description"],'feed') !== false){
		$feed=$tab[i]["Time"];
	}elseif(strpos($tab[i]["description"],'pee') !== false){
		if($lastpee==null)
			$lastpee=$tab[i]["Time"];
		else{
			$tab[i]["delta"]=round(abs($strtotime($tab[i]["Time"]) - $strtotime($lastpee)) / 60,2);
			if($drink!=null)
				$tab[i]["deltatoactivity"]=round(abs($strtotime($tab[i]["Time"]) - $strtotime($drink)) / 60,2);
			$lastpee=$tab[i]["Time"];
		}
	}elseif(strpos($tab[i]["description"],'poop') !== false){
		if($lastpoop==null)
			$lastpoop=$tab[i]["Time"];
		else{
			$tab[i]["delta"]=round(abs($strtotime($tab[i]["Time"]) - $strtotime($lastpoop)) / 60,2);
			if($feed!=null)
				$tab[i]["deltatoactivity"]=round(abs($strtotime($tab[i]["Time"]) - $strtotime($feed)) / 60,2);
			$lastpoop=$tab[i]["Time"];
	}
}

echo "<table border=\"1\"><tr><th>Time</th><th>Activity</th><th>Delta</th><th>Deltatoactivity</th></tr>";
for($i=0; i<count; i++){
    	switch ($tab[i]["description"]) {
    		case "poop outside cube indoor":
    			$bgc="red";
    			break;
    		case "pee outside cube indoor":
        		$bgc="red";
        		break;
	    	case "pee inside cube not on pad":
	    	case "poop inside cube not on pad":
	        	$bgc="orangered";
	        	break;
	    	case "poop inside cube on pad":
	    		$bgc="#ffcc00";
	    		break;
	    	case "pee inside cube on pad":
	        	$bgc="#ffff00";
	        	break;
	        case "poop outdoor":
	        	$bgc="#009933";
	        	break;
	        case "pee outdoor":
	        	$bgc="#33cc33";
	        	break;
	    	default:
	        	$bgc="white";
		}
        echo "<tr bgcolor=".$bgc."><td>" . $row["Time"]. "</td><td>" . $row["description"]. "</td><td>" . $row["delta"]. "</td><td>" . $row["deltatoactivity"]. "</td></tr>";
    }
mysqli_close($conn);

?>