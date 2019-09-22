<?php 
include('header-2.php');
//include('slider.php');
?>
    <button type="submit" name="submit" data-toggle="modal" data-target="#myModalfinal" class="btn btn-success">Contact Us</button>
						<div class="top_panel_title top_panel_style_3  title_present breadcrumbs_present scheme_original">
					<div class="top_panel_title_inner top_panel_inner_style_3  title_present_inner breadcrumbs_present_inner">
						<div class="content_wrap">
															<h1 class="page_title">Contacts</h1>
																						<div class="breadcrumbs">
									<a class="breadcrumbs_item home" href="../index.html">Home</a><span class="breadcrumbs_delimiter"></span><span class="breadcrumbs_item current">Contacts</span>								</div>
													</div>
					</div>
				</div>
				
			<div class="page_content_wrap page_paddings_no">

				<div class="content_wrap"><div class="content"><article class="itemscope post_item post_item_single post_featured_center post_format_standard post-1260 page type-page status-publish hentry" itemscope itemtype="http://schema.org/Article"><section class="post_content" itemprop="articleBody"><div class="sc_reviews alignright"><!-- #TRX_REVIEWS_PLACEHOLDER# --></div><div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
                <div class="map_bar_con">
                <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:440px;width:100%;'><div id='gmap_canvas' style='height:440px;width:100%;'></div><div><small><a href="http://embedgooglemaps.com">Click here to generate your map!</a></small></div><div><small><a href=""></a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:9,center:new google.maps.LatLng(28.608682,77.33356700000002),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(28.608682,77.33356700000002)});infowindow = new google.maps.InfoWindow({content:'<strong>Eventiana</strong><br>B-1295,GD Colony,Mayur Vihar Phase-III,Delhi-110096<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                </div>
                
                </div></div></div></div><div class="vc_row-full-width"></div><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="sc_content content_wrap" style=" padding-top: 2.4em;"><h2 class="sc_title sc_title_underline sc_align_center margin_top_tiny margin_bottom_tiny" style="text-align:center;" data-animation="animated fadeInDown normal">Contact information</h2><div  id="sc_form_880935652_wrap" class="sc_form_wrap"><div  id="sc_form_880935652" class="sc_form sc_form_style_form_2 aligncenter margin_bottom_small" data-animation="animated fadeInDown normal">		<div class="sc_columns columns_wrap">
			<div class="sc_form_address column-1_2">
				<div class="sc_form_address_field column-1_2 address">
					<span class="sc_form_address_label">Postal Address</span>
					<span class="sc_form_address_data">B-1225,GD Colony,Mayur Vihar Phase-III,Delhi-110096</span>
				</div>
				<div class="sc_form_address_field column-1_2 open">
					<span class="sc_form_address_label">Open Hours</span>
					<span class="sc_form_address_data">Monday – Sunday 8.00 am – 11.00 pm,</span>
				</div>
				<div class="sc_form_address_field column-1_2 phone">
                <span class="sc_form_address_label">Mobile No</span>
					<span class="sc_form_address_data">Phone: +91 9999874701</span>
				</div>
				<div class="sc_form_address_field column-1_2 session">
					<span class="sc_form_address_label">Email Id</span>
					<span class="sc_form_address_label">E-mail: info@eventiana.com</span>
				</div>
			</div>

                <div class="sc_form_fields column-1_2">
				<div class="form_bar">
                <h3>Please fill information</h3>
                <form method="post">
                <div class="name_bar_con">
                <input type="text" name="name" placeholder="Name" >
                </div>
                
                <div class="name_bar_con">
                <input type="text" name="email" placeholder="Email Id" >
                </div>
                
                <div class="name_bar_con">
                <input type="text" name="phoneno" placeholder="Phione No" >
                </div>
                
                <div class="name_bar_con">
                <input type="text" name="address" placeholder="Address" >
                </div>
                
                <div class="btn_bar_con">
                <input type="submit" name="submit" value="Submit" >
                </div>
                
                </form>
                </div>
                <?php
     if(isset($_POST['submit'])){
       $name=$_POST['name'];
		$email=$_POST['email'];
        $phoneno=$_POST['phoneno'];
        $address=$_POST['address'];
	      include("MailFunction/class.phpmailer.php");
        $mail=new PHPMailer(); //creat PHPMailer object 
        $mail->IsSMTP(); // telling the class to use SMTP
		$mail->SMTPDebug = 0;
        $mail->SMTPAuth = true; //needs login information
        $mail->SMTPSecure = 'ssl'; //specifies tls security
        $mail->Host = "gmail";
        $mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
        $mail->Port = 465; //gmail smtp port
        $mail->Username = "anujtomar230@gmail.com"; // SMTP account username
        $mail->Password = "9069705696@#$"; // SMTP account password
        $mail->From = "anujtomar230@gmail.com"; //sender's e-mail address
        
        $mail->AddAddress("info@eventiana.com");
        $mail->Subject = "Polyinfosoft Enquiry";//e-mail subject
                        
		$mail->Body ="<div style='max-width: 600px;margin: 20px auto; border: 1px solid #282887;'>
    <div class='col-sm-12' style='border-bottom: 1px solid red;margin-bottom: 14px;'>
      
        <div class='col-sm-6' style='float: right;margin-top: -80px;margin-right: 138px;'>
            <h2 style='color: #291788;'>Contact Information Enquiry</h2>
        </div>
          <div class='col-sm-3'>
            <img src='http://eventiana.com/wp-content/uploads/2015/07/final_logo_event.png' width='80' class='custom-logo'/>
        </div>
    </div>
    <table class='table table-bordered'>
        <tr>
            <td><b>Name : </b></td>
            <td>$name</td>
        </tr>
        <tr>
            <td><b>Email Id : </b></td>
            <td>$email</td>
        </tr>
        <tr>
            <td><b>Phone No : </b></td>
            <td>$phoneno</td>
        </tr>
        
        <tr>
            <td><b>Address : </b></td>
            <td>$address</td>
        </tr>
    </table>
</div>";
		$mail->IsHTML(true);
        $mail->WordWrap = 100;
		
        if(!$mail->Send()) {
			echo"<script>alert('Enquiry Failed');</script>";
		}
        else
        {
			echo "<script>alert('Enquiry Successfully Send')</script>";
		}
 }
?> 
			</div>
		</div>
		</div></div></div></div></div></div></div><div class="vc_row-full-width"></div></section> <!-- </section> class="post_content" itemprop="articleBody"> --></article> <!-- </article> class="itemscope post_item post_item_single post_featured_center post_format_standard post-1260 page type-page status-publish hentry" itemscope itemtype="http://schema.org/Article"> -->	<section class="related_wrap related_wrap_empty"></section>
	</div> <!-- </div> class="content"> --></div> <!-- </div> class="content_wrap"> -->			
			</div>		<!-- </.page_content_wrap> -->


 <?php include('footer.php');?>