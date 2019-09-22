<?php
include("database/admin_confi.php");
$id=$_GET['id'];
$case=$_GET['case'];

switch ($case) {
	case 'user':
		$sql="DELETE from singup_tbl WHERE id=$id";
		$result=$mysqli->query($sql);
		if($result)
		{
		    echo "<script>alert('Record Deleted!!')</script>";
		    header("location:index.php");
		}else
		{
		    echo "<script>alert('Something Went Wrong !!')</script>";
		    header("location:index.php");
		}
		
	
	case 'catigory':
		$sql="DELETE from category_tbl WHERE id=$id";
		$result=$mysqli->query($sql);
		if($result)
		{
		    echo "<script>alert('Record Deleted!!')</script>";
		    header("location:view-category.php");
		}else
		{
		    echo "<script>alert('Something Went Wrong !!')</script>";
		    header("location:view-category.php");
		}
		
		
	case 'sub-catigory':
		$sql="DELETE from sub_category_tbl WHERE id=$id";
		$result=$mysqli->query($sql);
		if($result)
		{
		    echo "<script>alert('Record Deleted!!')</script>";
		    header("location:view-sub-category.php");
		}else
		{
		    echo "<script>alert('Something Went Wrong !!')</script>";
		    header("location:view-sub-category.php");
		}
		
	
		
	default:
		# code...
		break;
}
$mysqli->close();

/*$id=$_GET['id'];

$mysqli->close();
*/

?>
