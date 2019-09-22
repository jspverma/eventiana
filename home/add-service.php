<?php 
include('header-2.php');
//include('slider.php');

if(isset($_POST['booking'])){
    $_SESSION['cname']=$_POST['cname'];
    $_SESSION['sub_cat']=$_POST['sub_cat'];
    $_SESSION['date']=$_POST['date'];
    $_SESSION['time']=$_POST['time'];   
    $_SESSION['total']=$_POST['total'];
    $_SESSION['available_city']=$_POST['available_city'];
}


?>

    <style>
        .switch {
            position: relative;
            display: inline-block;
            width: 40px;
            height: 15px;
        }

        .switch input {display:none;}

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 10px;
            width: 10px;
            left: 2px;
            bottom: 3px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: #f62f74;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #f62f74;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            var service="";
            $(".services").click(function(){
                //alert("method Call");
                var total=<?php //echo $_SESSION['total']; ?>;
                //alert(total);
                if($(this).is(':checked')){
                    service=service+$(this).val()+',';
                }else{
                    service=service.replace($(this).val()+',','');
                }
                //alert(service);
                $.ajax({
                    type: "POST",
                    data: {
                        service: service,
                        total:total
                    },
                    url: 'addOnService.php',
                    success: function (result) {
                        $('#hidable').hide();
                        $("#div1").html(result);
                    }
                });
            });
        });

</script>-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            var service = new Array();
            var serviceQuantity=new Array();
            $(".iqty").click(function(){
                
                var a=$(this).val();


                var iqtyValID="quantityText"+a;
                var quantity = $('#'+iqtyValID).val();

                quantity = parseInt(quantity)+1;

                $('#'+iqtyValID).val(quantity);
                
                var total=<?php echo $_SESSION['total']; ?>;
                
                serviceName=$('#services'+a).val();
                //alert(" Service Name :" + serviceName);

                if(jQuery.inArray(serviceName,service) == '-1'){
                    service.push(serviceName);
                    serviceQuantity.push(quantity);
                }else{
                    var serviceIndex=service.indexOf(serviceName);

                    if (~serviceIndex) {
                        serviceQuantity[serviceIndex] = quantity;
                    }
                }
                
                
                $.ajax({
                    type: "POST",
                    data: {
                        qty:serviceQuantity,
                        service: service,
                        total:total
                    },
                    url: 'addOnService.php',
                    success: function (result) {
                        $('#hidable').hide();
                        $("#div1").html(result);
                    }
                });
            });
            $(".dqty").click(function(){
                
                var a=$(this).val();

                var iqtyValID="quantityText"+a;
                var quantity = $('#'+iqtyValID).val();


                quantity = parseInt(quantity)-1;

                if(quantity==-1)
                {
                	alert("you cant choose quantity less than 0");
                	location.reload();
                }
               // alert();
               
                $('#'+iqtyValID).val(quantity);
                
                var total=<?php echo $_SESSION['total']; ?>;
                
                serviceName=$('#services'+a).val();
                //alert(" Service Name :" + serviceName);

                if(jQuery.inArray(serviceName,service) == '-1'){
                
                	

                    	service.pop(serviceName);
                    	serviceQuantity.pop(quantity);
                	
                }else{
                	
                		
                	var serviceIndex=service.indexOf(serviceName);
                   	if(quantity==0)

                   	{
                   		
                   		
                   		 service.splice(serviceIndex,1);
                   		 serviceQuantity.splice(serviceIndex,1);
                   		
                   		  
                   		 //serviceQuantity.splice(serviceIndex,1);
                   		  //serviceQuantity[serviceIndex+1] = quantity+1;

                  	}
                  	
                  	if(quantity!=0)
                  	{
                  		//alert();
                    	if (~serviceIndex) {

                    	  
                    	
                        serviceQuantity[serviceIndex] = quantity;

                    
                    }
                    }
                }
                
                $.ajax({
                   type: "POST",
                    data: {
                        qty:serviceQuantity,
                        service: service,
                        total:total
                    },
                    url: 'addOnService.php',
                    success: function (result) {
                        $('#hidable').hide();
                        $("#div1").html(result);
                    }
                });
            });
        });

</script>
                

<!--<div class="baner_bar">
<div class="container">
<div class="baner_title">
<p><a href="index.php" style="color:#000">Home</a> / <span>Service</span></p>
</div>
</div>
</div>--->

<div class="adon_bar">
<div class="container">
<div class="row">

<div class="col-md-8">
<div class="ad_bar">
<h3>Add options / Services </h3>
</div>
<?php
$all="All";
$sql = "SELECT * FROM add_options_tbl where category='$all' AND sub_category='$all'";
if ($fetchRecord = $mysqli->query($sql)) {
    if ($fetchRecord->num_rows > 0) {
        $counter = 0;
        while ($row = $fetchRecord->fetch_assoc()) {
            $counter++;
            $quantityText="quantityText".$counter;
            $servicesID="services".$counter;
            $row[1]=ucfirst("$row[1]");
            ?>
            <div class="service_bar">
                <div class="row">
                    <div class="col-md-3">
                        <div class="ad_img">
                            <img src="../admin/<?php echo $row['image']; ?>" >
                        </div>
                    </div>

                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="ad_title">
                                    <h3><?php echo $row['title']; ?></h3>
                                    <!--<p><i class="fa fa-inr" aria-hidden="true" style="color:red;"></i> 15000</p>-->
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="ad_price">
                                    <p><i class="fa fa-inr" aria-hidden="true" style="color: #ff635c;font-size: 21px;"></i> <b style="font-size:20px;"><?php echo $row['price']; ?></b></p>
                                </div>
                            </div>



                             

        <div class="col-md-2">



                                                    <div class="input-group pull-right">
                                                        <span class="input-group-btn">

                                          
                                <button type="button"  class="quantity-left-minus dqty btn btn-xs btn-number"  data-type="minus" data-field="" name='decqty' value="<?php echo $counter; ?>"">
                                 <span class="glyphicon glyphicon-minus"></span>
                                                            </button>
                                                        </span>
                                                        
                                                <input type="number" id="<?php echo $quantityText; ?>" name="item" class="form-control input-number" min="0"    mavalue="0"x="1000" readonly value="0" >
                                                        <input type="hidden" name="services" id="<?php echo $servicesID; ?>" value="<?php echo $row['id']; ?>">
                                                        <span class="input-group-btn">
                                                            <button type="button"  name='iqty' class="quantity-right-plus iqty  btn btn-xs btn-number" value="<?php echo $counter; ?>" data-type="plus" data-field="" >
                                                                <span class="glyphicon glyphicon-plus"></span>
                                                            </button>



                                                        </span>
                                                    </div>
                                                </div>






                            <!-- <div class="col-md-2">
                                <div class="add">
                                    <label class="switch">
                                        <input type="checkbox" name="chac" class="services" value="<?php echo $row['id']; ?>">
                                        <span class="slider round"></span>
                                    </label>
                                   
                                </div>
                            </div> -->

                            <div class="ad_dipcr">
                                <p><?php//echo $row['description']; ?></p>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
            <?php
        }

    }
}


     $sql = "SELECT * FROM add_options_tbl where category='".$_SESSION['cname']."' AND sub_category='".$_SESSION['sub_cat']."'";
     if ($fetchRecord = $mysqli->query($sql)) {
     if ($fetchRecord->num_rows > 0) {
     $counter = 0;
      while ($row = $fetchRecord->fetch_assoc()) {
      $counter++;
     $row[1]=ucfirst("$row[1]");?>
        <div class="service_bar">
        <div class="row">
        <div class="col-md-3">
        <div class="ad_img">
        <img src="../admin/<?php echo $row['image']; ?>" >
        </div>
        </div>
        
        <div class="col-md-9">
        <div class="row">
        <div class="col-md-5">
        <div class="ad_title">
<h3><?php echo $row['title']; ?></h3>
<!--<p><i class="fa fa-inr" aria-hidden="true" style="color:red;"></i> 15000</p>-->
</div>
</div>

<div class="col-md-5">
<div class="ad_price">
<p><i class="fa fa-inr" aria-hidden="true" style="color: #ff635c;font-size: 21px;"></i> <b style="font-size:20px;"><?php echo $row['price']; ?></b></p>
</div>
</div>

<div class="col-md-2">
<div class="add">
    <label class="switch">
        <input type="checkbox" name="chac" class="services" value="<?php echo $row['id']; ?>">
        <span class="slider round"></span>
    </label>
<!--<input type="checkbox" name="chac" class="services" value="<?php /*echo $row['id']; */?>">-->
</div>
</div>

<div class="ad_dipcr">
<p><?php echo $row['description']; ?></p>
</div>

</div>

</div>

</div>
</div>
<?php 
 }

   }
      }
      ?>
</div>

<div class="col-md-4">
<div class="book_detail">
<h3>- Summary -</h3>
<div class="amount_bar">
<div class="amount-detl-bar" style="height: 57px;">
<p><b>Date :</b> <?php echo $_SESSION['date']; ?></p>
</div>
<div class="pricee">
<p>
<b>Time :</b> <?php echo $_SESSION['time'];  ?></p>
</div>

</div>

<div class="amount_bar">
    <div class="amount-detl-bar">
        <p><b>Amount</b></p>
    </div>
    <div class="price">
        <p>1 x <?php echo $_SESSION['total']; ?></p>
    </div>
</div>

<div class="totl_bar" id="hidable">
    <div class="totl_det">
        <p><b>Total cost</b></p>
    </div>
    <div class="totl-pric">
        <p><b><?php echo $_SESSION['total']; ?></b></p>
    </div>
</div>

<div id="div1"></div>


<div class="cty_bar">
<div class="city_name">
<p>Available Cities</p>
</div>
<div class="name_city">
<p><?php echo $_SESSION['available_city']; ?></p>
</div>

</div>

<div class="btn_bar_book">
<div class="bok_btn-bar">
<!---data-target="#myModal7"--->
<?php 
if(empty($_SESSION['email_id'])){
    ?>
    <input data-toggle="modal" data-target="#myModal1"  type="submit" name="submit" value="Check Out" />
    <?php
}else{
    ?>
    <input data-toggle="modal" data-target="#myModal7"  type="submit" name="submit" value="Check Out" />
    <?php
}
 ?>
</div>
</div>

</div>
</div>
</div>
</div>
</div>


<?php 
  include('footer.php');
  ?>