<?php 
include('header-2.php');
//include('slider.php');
?>

<div class="make_bar">
<div class="container">
<div class="row">
<div class="col-md-9">
<div class="paymanr_detail">
<div class="contat_detail">
<h2>My Contact Detail</h2>
</div>
<div class="detail_bar">
<div class="row">
<div class="col-md-3">
<div class="bar_dtai">
<p><b>Full Name :-</b></p>
<p><b>Email :-</b></p>
<p><b>Mobile No :-</b></p>
<p><b>Address :-</b></p>
<p><b>Event Date :-</b></p>
<p><b>Time :-</b></p>
</div>
</div>

<div class="col-md-6">
<div class="bar_dtais">
<p><?php echo $_POST['name']; ?></p>
<p><?php echo $_POST['email']; ?></p>
<p><?php echo $_POST['phoneno']; ?></p>
<p><?php echo $_POST['address']; ?></p>
<p><b><?php echo $_SESSION['date']; ?></b></p>
<p><b><?php echo $_SESSION['time']; ?></b></p>
</div>
</div>

<div class="col-md-3"></div>
</div>
</div>
</div>
</div>
<div class="col-md-3">
<div class="bar_pay">
<div class="pay_title">
<h2>Your order</h2>
</div>
<div class="pay_bar">
<p><b><?php echo $_SESSION['cname']; ?></b> <span><?php echo $_SESSION['total']; ?></span></p>
</div>
<div class="pay_bar">
<?php 

$total=$_SESSION['total'];

$arAddOn=explode(',',$_SESSION['addons']);

foreach($arAddOn as $value){
	$sql="SELECT * FROM add_options_tbl where id='$value'";
	$result=$mysqli->query($sql);
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		?>
        <p><b>1x <?php echo $row['title']; ?></b> <span><b><?php echo $row['price']; ?></b></span></p>
        <?php
        $total=$total+$row['price'];
	}
}
?>
</div>
<div class="pay_bar">
<p><b>Subtotal</b> <span><b><?php echo $total; ?></b></span></p>
</div>

<div class="pay_btn_bar">
<input type="submit" name="submit" value="Pay Now" >
</div>

</div>
</div>
</div>
</div>
</div>


 <?php include('footer.php');?>