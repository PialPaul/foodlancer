<?php
include("../db_rw.php");
 
 $area="";
if(isset($_REQUEST["area"])){
	$sql1="select * from area ";
	$a=getDataFromDB($sql1);

	$conn = mysqli_connect("localhost", "root", "", "foodlancer");
      			if (!$conn) {
      				die("Connection failed: " . mysqli_connect_error());
      			}


	foreach($a as $v){
		if($_REQUEST["area"]==$v["areaName"])
			$area=$v["areaId"];
	}
	if ($area!="") {
		$ar_item=getDataFromDB("select * from item where areaId=$area");
		$result = mysqli_query($conn, $ar_item)or die(mysqli_error());
		while($row = mysqli_fetch_assoc($result)) { ?>
		<h3>Name<?php echo $row["itemName"];?></h3>
		<p><?php echo $row["description"];?></p>
		<h3>Cost:<?php echo $row["cost"];?></h3>
		
		<br/>
<?php
}
	}
	
	
}
?>
