<?php
// $servername = "us-cdbr-azure-west-c.cloudapp.net";
// $username = "bb69c0b0ab48ed";
// $password = "d9346dec";
// $dbname = "rufuspprecords";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);

// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// $time="2016-1-08 11:23:00";
// echo "yay";
// $count=0;
// $tab = array
//   (
//   array("Volvo",22,18,0),
//   array("BMW",15,13,0),
//   array("Saab",5,2,0),
//   array("Land Rover",17,15,0)
//   );
// $sql = "SELECT Time, description FROM pprecords LEFT JOIN ppcategory on pprecords.descriptionid= ppcategory.descriptionid WHERE Time > '$time'";
// $result = mysqli_query($conn, $sql);
// if (mysqli_num_rows($result) > 0) {
// 	echo "<table border=\"1\"><tr><th>Time</th><th>Activity</th></tr>";
//     while($row = mysqli_fetch_assoc($result)) {
//     	$tab[$count][0]=$row["Time"];
//     	$tab[$count][1]=$row["description"];
//     	$count++;
//     }
// } else {
//     echo "invalid activity";
// }



// for($i=0; $i<$count; $i++){
// 	if(strpos($tab[$i][1],'drink') !== false){
// 		$drink=$tab[$i][0];
// 	}elseif(strpos($tab[$i][1],'feed') !== false){
// 		$feed=$tab[$i][0];
// 	}elseif(strpos($tab[$i][1],'pee') !== false){
// 		if($lastpee==null)
// 			$lastpee=$tab[$i][0];
// 		else{
// 			$tab[$i][2]=round(abs($strtotime($tab[$i][0]) - $strtotime($lastpee)) / 60,2);
// 			if($drink!=null)
// 				$tab[$i][3]=round(abs($strtotime($tab[$i][0]) - $strtotime($drink)) / 60,2);
// 			$lastpee=$tab[$i][0];
// 		}
// 	}elseif(strpos($tab[$i][1],'poop') !== false){
// 		if($lastpoop==null)
// 			$lastpoop=$tab[$i][0];
// 		else{
// 			$tab[$i][2]=round(abs($strtotime($tab[$i][0]) - $strtotime($lastpoop)) / 60,2);
// 			if($feed!=null)
// 				$tab[$i][3]=round(abs($strtotime($tab[$i][0]) - $strtotime($feed)) / 60,2);
// 			$lastpoop=$tab[$i][0];
// 	}
// }

//echo "<table border=\"1\"><tr><th>Time</th><th>Activity</th><th>Delta</th><th>Deltatoactivity</th></tr>";
// for($i=0; $i<$count; $i++){
//     	switch ($tab[$i][1]) {
//     		case "poop outside cube indoor":
//     			$bgc="red";
//     			break;
//     		case "pee outside cube indoor":
//         		$bgc="red";
//         		break;
// 	    	case "pee inside cube not on pad":
// 	    	case "poop inside cube not on pad":
// 	        	$bgc="orangered";
// 	        	break;
// 	    	case "poop inside cube on pad":
// 	    		$bgc="#ffcc00";
// 	    		break;
// 	    	case "pee inside cube on pad":
// 	        	$bgc="#ffff00";
// 	        	break;
// 	        case "poop outdoor":
// 	        	$bgc="#009933";
// 	        	break;
// 	        case "pee outdoor":
// 	        	$bgc="#33cc33";
// 	        	break;
// 	    	default:
// 	        	$bgc="white";
// 		}
//         echo "<tr bgcolor=".$bgc."><td>" . $tab[$i][0]. "</td><td>" . $tab[$i][1]. "</td><td>" . $tab[$i][2]. "</td><td>" . $tab[$i][3]. "</td></tr>";
//     }
// mysqli_close($conn);

?>