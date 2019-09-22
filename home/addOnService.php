<?php 
include('../detabase/admin_confi.php');
$addonID=$_POST['service'];
$total=$_POST['total'];
$qty=$_POST['qty'];

$_SESSION['addons']=$addonID;

//print_r($qty);

//die();

//$arAddOn=explode(',',$_SESSION['addons']);


$count=0;

foreach($_SESSION['addons'] as $value){
    $sql="SELECT * FROM add_options_tbl where id='$value'";
    $result=$mysqli->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>
        <div class="amount_bar">
            <div class="amount-detl-bar">
                <p><b><?php echo $row['title']; ?></b></p>
            </div>
            <div class="price">
                <p>
                <?php 
                $price=$qty[$count]*$row['price'];

                echo $qty[$count]." x ".$price; 
                ?>
                    
                </p>
            </div>
        </div>
        <?php
        $total=$total+$price;
        $count++;
    }
}
?>
<div class="totl_bar" id="hidable">
    <div class="totl_det">
        <p><b>Total cost</b></p>
    </div>
    <div class="totl-pric">
        <p><b><?php echo $total; ?></b></p>
    </div>
</div>
