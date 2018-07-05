<?php
include("db_rw.php");

// $sql="SELECT item.itemName, item.cost, item.description,
// 			chefprofile.firstname, chefprofile.lastname,
// 			cuisine.cuisineName, foodpic.foodpic
// 		FROM (((item
// 			INNER JOIN chefprofile on item.chefId=chefprofile.chefId)
// 			INNER JOIN cuisine on item.cuisineId=cuisine.cuisineId)
// 			INNER JOIN foodpic on item.itemId=foodpic.itemId)";

// $arr=getDataFromDB($sql);

if(isset($_REQUEST["area"])){

	// $sql1="select * from item where areaId like '".$_REQUEST["area"]."%'";
	// $a=getDataFromDB($sql1);
	$sql="SELECT item.itemName,item.areaId, item.cost, item.description,item.itemId,
			chefprofile.firstname, chefprofile.lastname,
			cuisine.cuisineName, foodpic.foodpic
		FROM (((item
			INNER JOIN chefprofile on item.chefId=chefprofile.chefId)
			INNER JOIN cuisine on item.cuisineId=cuisine.cuisineId)
			INNER JOIN foodpic on item.itemId=foodpic.itemId)";

$arr=getDataFromDB($sql);

	foreach($arr as $v){
		if($v["areaId"]==$_REQUEST["area"]){
$foodpic=$v["foodpic"];
$itemid=$v["itemId"];
$description=$v["description"];
// $itemid=$v["itemId"];
// $itemname=$v["itemName"];
// $itemid=$v["itemId"];
// $itemname=$v["itemName"];
		?>

	<!-- ?> -->
		<div class="sign">
	        <img src="<?php echo $foodpic ?>" alt="food1" width="300" height="200">
	        <div class="description">
	          <h3 align="center"><?php echo  $v["itemName"] ?></h3> 
	          <p align="center"><?php echo  $v["description"] ?> </p>
	          <p align="center"><?php echo  $v["cost"] ?>/=</p>
	          <div class="signdescription">
	          	<form action="order.php" method="post">
	            <button type="submit" name="order" value="<?php echo  $itemid?>" >Order Now</button>
	            </form>
	          </div>
	        </div>
	      </div>
		
		<?php
}
	}
	?>

			</table>
	<?php
}
?>
