<?php
include('../database/admin_confi.php');

$cat=$_POST['cat'];

$sql = "select * from sub_category_tbl where category='$cat'";
$result = $mysqli->query($sql);

?>
<option value=" ">---Select Subcategory---</option>
<?php

if($result->num_rows > 0){
	while($row = $result->fetch_array()){
		?>
		<option value="<?php echo $row['sub_category']; ?>"><?php echo $row['sub_category']; ?></option>
		<?php
	}
}
?>