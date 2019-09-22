<?php 
include('header-2.php');
include('slider.php');
?>
<div class="page_content_wrap page_paddings_no">
<div class="content_wrap"><div class="content"><article class="itemscope post_item post_item_single post_featured_center post_format_standard post-1097 page type-page status-publish hentry" itemscope itemtype="http://schema.org/Article"><section class="post_content" itemprop="articleBody"><div class="sc_reviews alignright"><!-- #TRX_REVIEWS_PLACEHOLDER# --></div><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1446455989170"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="sc_content content_wrap" style="padding-top: 2.7em;"><h2 class="sc_title sc_title_underline sc_align_center margin_top_tiny margin_bottom_tiny" style="text-align:center;font-size:3.929em;"><span style="color: #fcb41e;">Hello!</span> WE ARE HERE TO CELEBRATE FANTASIES INTO REALITY</h2>
<div class="columns_wrap sc_columns columns_nofluid sc_columns_count_1 margin_top_tiny-"><div class="column-1_1 sc_column_item sc_column_item_1 odd first" style="margin-bottom:10px;">
	<div class="wpb_text_column wpb_content_element " >
		<div class="wpb_wrapper">
			<p style="text-align: center;">Eventiana is an integrated platform to cater best services to bring dream come true experiences mainly for couple's ever imagined fantasies,spouse's surprise anniversary gifts,babies events,home based events, indoor and outdoor events and seminars. We have expertise services to provide corporate solutions in different cities and destinations as required.
We are honored that you choose us to quench your requirements through our services.</p>

		</div>
	</div>
</div>
</div>
<div id="sc_services_1924545108_wrap" class="sc_services_wrap">
<div class="row">
 <?php
                        $sql = "SELECT * FROM category_tbl";
                        if ($fetchRecord = $mysqli->query($sql)) {
                            if ($fetchRecord->num_rows > 0) {
                                $counter = 0;
                                while ($row = $fetchRecord->fetch_array()) {
                                    $counter++;
                                    $row[1]=ucfirst("$row[1]");?>
<div class='col-md-3'>
<div class='category'>
<a href='babies-planet.php?cname=<?php echo $row['category_name'] ?>'>
<div class='imd_cator'>
<img src='../admin/<?php echo $row['category_image']; ?>'  />
</div>
<div class='name_cate'>
<p><b><?php echo $row['category_name']; ?></b></p>
</div>
</a>
</div>


</div>
<?php 
 }

   }
      }
      ?>


</div>

        
</div>
        
        
        
        <!-- /.sc_services_wrap --></div></div></div></div></div><div class="vc_row-full-width"></div><div id="home-3-block-2" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1446461095918"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="sc_content content_wrap"><div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2"><div class="column-1_2 sc_column_item sc_column_item_1 odd first"><h4 class="sc_title sc_title_regular margin_top_medium" style="font-size:2.143em;">A prominent list of our services:</h4><ul class="sc_list sc_list_style_iconed">
        <li class="sc_list_item even" title="Developing a theme"><span class="sc_list_icon icon-ok-1" style="color:#fcb41e;"></span>Scouting a venue at low rentals</li>
        <li class="sc_list_item odd" title="Coordinating paper goods with a stationery vendor"><span class="sc_list_icon icon-ok-1" style="color:#fcb41e;"></span>Developing a theme at adequate decoration</li>
        <li class="sc_list_item even" title="Organizing a tasting with up to three caterers"><span class="sc_list_icon icon-ok-1" style="color:#fcb41e;"></span>Invitations list, Florist, Photographers, Live guitarist, DJ services</li>
        <li class="sc_list_item odd" title="Recommending up to three florists (if necessary)"><span class="sc_list_icon icon-ok-1" style="color:#fcb41e;"></span>Customized interior decoration</li>
        <li class="sc_list_item even" title="Recommending up to three photographers (if necessary)"><span class="sc_list_icon icon-ok-1" style="color:#fcb41e;"></span>Recommended gifts services according to occasions</li>
        <li class="sc_list_item odd" title="Managing your guest list"><span class="sc_list_icon icon-ok-1" style="color:#fcb41e;"></span>Multi cultural activities like couple games, indoor games activities.</li>
        <li class="sc_list_item even" title="Assisting with rentals"><span class="sc_list_icon icon-ok-1" style="color:#fcb41e;"></span>Stage shows, baby shows, baby competition like fancy dress, painting, singing, dancing, prop show, puppet show</li>
        <li class="sc_list_item odd" title="And, depending on the wishes, being on-site or on-call during the event to ensure everything runs smoothly"><span class="sc_list_icon icon-ok-1" style="color:#fcb41e;"></span>Sports activities scootering, road shows, paragliding</li>
        <li class="sc_list_item odd" title="And, depending on the wishes, being on-site or on-call during the event to ensure everything runs smoothly"><span class="sc_list_icon icon-ok-1" style="color:#fcb41e;"></span>Live group dancers for proposals or occasions as you desire</li>
        </ul></div><div class="column-1_2 sc_column_item sc_column_item_2 even"><figure class="sc_image  sc_image_shape_square"><img src="../wp-content/uploads/2015/10/Depositphotos_11153356_original1.png" alt="" /></figure></div></div></div></div></div></div></div><div class="vc_row-full-width"></div><div id="call-to" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1447082926644"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="sc_content content_wrap" style=" padding-top: 2em; padding-bottom: 0.45em;"><div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2"><div class="column-1_2 sc_column_item sc_column_item_1 odd first" style="width:55%"><h3 class="sc_title sc_title_regular sc_align_right" style="margin-top: 0.4em;text-align:right;color:#ffffff;">See Our Best Events Gallery!</h3></div><div class="column-1_2 sc_column_item sc_column_item_2 even" style="width:45%"><a href="../grid-gallery/index.html" class="sc_button sc_button_square sc_button_style_filled sc_button_size_small" style="background-color:#fcb41e; border-color:#fcb41e;box-shadow: inset 0px 0px 0 2px #fcb41e;">Visit Gallery</a></div></div></div></div></div></div></div><div class="vc_row-full-width"></div><div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><h2 class="sc_title sc_title_underline sc_align_center margin_top_small margin_bottom_tiny" style="text-align:center;">Gallery</h2><h6 class="sc_title sc_title_style1 sc_align_center margin_bottom_large" style="text-align:center;"><span class="sc_title_style1_before"></span>our recent projects<span class="sc_title_style1_after"></span></h6><div class="sc_section"><div class="sc_section_inner"><style type="text/css">a.eg-henryharrison-element-1,a.eg-henryharrison-element-2{-webkit-transition:all .4s linear;   -moz-transition:all .4s linear;   -o-transition:all .4s linear;   -ms-transition:all .4s linear;   transition:all .4s linear}.eg-jimmy-carter-element-11 i:before{margin-left:0px; margin-right:0px}.eg-harding-element-17{letter-spacing:1px}.eg-harding-wrapper .esg-entry-media{overflow:hidden; box-sizing:border-box;   -webkit-box-sizing:border-box;   -moz-box-sizing:border-box;   padding:30px 30px 0px 30px}.eg-harding-wrapper .esg-entry-media img{overflow:hidden; border-radius:50%;   -webkit-border-radius:50%;   -moz-border-radius:50%}.eg-ulysses-s-grant-wrapper .esg-entry-media{overflow:hidden; box-sizing:border-box;   -webkit-box-sizing:border-box;   -moz-box-sizing:border-box;   padding:30px 30px 0px 30px}.eg-ulysses-s-grant-wrapper .esg-entry-media img{overflow:hidden; border-radius:50%;   -webkit-border-radius:50%;   -moz-border-radius:50%}.eg-richard-nixon-wrapper .esg-entry-media{overflow:hidden; box-sizing:border-box;   -webkit-box-sizing:border-box;   -moz-box-sizing:border-box;   padding:30px 30px 0px 30px}.eg-richard-nixon-wrapper .esg-entry-media img{overflow:hidden; border-radius:50%;   -webkit-border-radius:50%;   -moz-border-radius:50%}.eg-herbert-hoover-wrapper .esg-entry-media img{filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/></filter></svg>#grayscale");   filter:gray;   -webkit-filter:grayscale(100%)}.eg-herbert-hoover-wrapper:hover .esg-entry-media img{filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='1 0 0 0 0,0 1 0 0 0,0 0 1 0 0,0 0 0 1 0'/></filter></svg>#grayscale");  -webkit-filter:grayscale(0%)}.eg-lyndon-johnson-wrapper .esg-entry-media img{filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/></filter></svg>#grayscale");   filter:gray;   -webkit-filter:grayscale(100%)}.eg-lyndon-johnson-wrapper:hover .esg-entry-media img{filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='1 0 0 0 0,0 1 0 0 0,0 0 1 0 0,0 0 0 1 0'/></filter></svg>#grayscale");  -webkit-filter:grayscale(0%)}.esg-overlay.eg-ronald-reagan-container{background:-moz-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-webkit-gradient(linear,left top,left bottom,color-stop(50%,rgba(0,0,0,0)),color-stop(99%,rgba(0,0,0,0.83)),color-stop(100%,rgba(0,0,0,0.85))); background:-webkit-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-o-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-ms-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:linear-gradient(to bottom,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000',endColorstr='#d9000000',GradientType=0 )}.eg-georgebush-wrapper .esg-entry-cover{background:-moz-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-webkit-gradient(linear,left top,left bottom,color-stop(50%,rgba(0,0,0,0)),color-stop(99%,rgba(0,0,0,0.83)),color-stop(100%,rgba(0,0,0,0.85))); background:-webkit-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-o-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-ms-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:linear-gradient(to bottom,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000',endColorstr='#d9000000',GradientType=0 )}.eg-jefferson-wrapper{-webkit-border-radius:5px !important; -moz-border-radius:5px !important; border-radius:5px !important; -webkit-mask-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAA5JREFUeNpiYGBgAAgwAAAEAAGbA+oJAAAAAElFTkSuQmCC) !important}.eg-monroe-element-1{text-shadow:0px 1px 3px rgba(0,0,0,0.1)}.eg-lyndon-johnson-wrapper .esg-entry-cover{background:-moz-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); background:-webkit-gradient(radial,center center,0px,center center,100%,color-stop(0%,rgba(0,0,0,0.35)),color-stop(96%,rgba(18,18,18,0)),color-stop(100%,rgba(19,19,19,0))); background:-webkit-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); background:-o-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); background:-ms-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); background:radial-gradient(ellipse at center,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#59000000',endColorstr='#00131313',GradientType=1 )}.eg-wilbert-wrapper .esg-entry-cover{background:-moz-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); background:-webkit-gradient(radial,center center,0px,center center,100%,color-stop(0%,rgba(0,0,0,0.35)),color-stop(96%,rgba(18,18,18,0)),color-stop(100%,rgba(19,19,19,0))); background:-webkit-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); background:-o-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); background:-ms-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); background:radial-gradient(ellipse at center,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#59000000',endColorstr='#00131313',GradientType=1 )}.eg-wilbert-wrapper .esg-entry-media img{-webkit-transition:0.4s ease-in-out;  -moz-transition:0.4s ease-in-out;  -o-transition:0.4s ease-in-out;  transition:0.4s ease-in-out;  filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/></filter></svg>#grayscale");   filter:gray;   -webkit-filter:grayscale(100%)}.eg-wilbert-wrapper:hover .esg-entry-media img{filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='1 0 0 0 0,0 1 0 0 0,0 0 1 0 0,0 0 0 1 0'/></filter></svg>#grayscale");  -webkit-filter:grayscale(0%)}.eg-phillie-element-3:after{content:" ";width:0px;height:0px;border-style:solid;border-width:5px 5px 0 5px;border-color:#000 transparent transparent transparent;left:50%;margin-left:-5px; bottom:-5px; position:absolute}.eg-howardtaft-wrapper .esg-entry-media img,.eg-howardtaft-wrapper .esg-media-poster{filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='1 0 0 0 0,0 1 0 0 0,0 0 1 0 0,0 0 0 1 0'/></filter></svg>#grayscale");  -webkit-filter:grayscale(0%)}.eg-howardtaft-wrapper:hover .esg-entry-media img,.eg-howardtaft-wrapper:hover .esg-media-poster{filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/></filter></svg>#grayscale");   filter:gray;   -webkit-filter:grayscale(100%)}.myportfolio-container .added_to_cart.wc-forward{font-family:"Open Sans"; font-size:13px; color:#fff; margin-top:10px}.esgbox-title.esgbox-title-outside-wrap{font-size:15px; font-weight:700; text-align:center}.esgbox-title.esgbox-title-inside-wrap{padding-bottom:10px; font-size:15px; font-weight:700; text-align:center}</style>
<!-- CACHE FOUND FOR: 6 --><style type="text/css">.minimal-light .navigationbuttons,.minimal-light .esg-pagination,.minimal-light .esg-filters{text-align:center}.minimal-light .esg-filterbutton,.minimal-light .esg-navigationbutton,.minimal-light .esg-sortbutton,.minimal-light .esg-cartbutton a{color:#999; margin-right:5px; cursor:pointer; padding:0px 16px; border:1px solid #e5e5e5; line-height:38px; border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px; font-size:12px; font-weight:700; font-family:"Open Sans",sans-serif; display:inline-block; background:#fff; margin-bottom:5px}.minimal-light .esg-navigationbutton *{color:#999}.minimal-light .esg-navigationbutton{padding:0px 16px}.minimal-light .esg-pagination-button:last-child{margin-right:0}.minimal-light .esg-left,.minimal-light .esg-right{padding:0px 11px}.minimal-light .esg-sortbutton-wrapper,.minimal-light .esg-cartbutton-wrapper{display:inline-block}.minimal-light .esg-sortbutton-order,.minimal-light .esg-cartbutton-order{display:inline-block;  vertical-align:top;  border:1px solid #e5e5e5;  width:40px;  line-height:38px;  border-radius:0px 5px 5px 0px;  -moz-border-radius:0px 5px 5px 0px;  -webkit-border-radius:0px 5px 5px 0px;  font-size:12px;  font-weight:700;  color:#999;  cursor:pointer;  background:#fff}.minimal-light .esg-cartbutton{color:#333; cursor:default !important}.minimal-light .esg-cartbutton .esgicon-basket{color:#333;   font-size:15px;   line-height:15px;   margin-right:10px}.minimal-light .esg-cartbutton-wrapper{cursor:default !important}.minimal-light .esg-sortbutton,.minimal-light .esg-cartbutton{display:inline-block; position:relative; cursor:pointer; margin-right:0px; border-right:none; border-radius:5px 0px 0px 5px; -moz-border-radius:5px 0px 0px 5px; -webkit-border-radius:5px 0px 0px 5px}.minimal-light .esg-navigationbutton:hover,.minimal-light .esg-filterbutton:hover,.minimal-light .esg-sortbutton:hover,.minimal-light .esg-sortbutton-order:hover,.minimal-light .esg-cartbutton a:hover,.minimal-light .esg-filterbutton.selected{background-color:#fff;   border-color:#bbb;   color:#333;   box-shadow:0px 3px 5px 0px rgba(0,0,0,0.13)}.minimal-light .esg-navigationbutton:hover *{color:#333}.minimal-light .esg-sortbutton-order.tp-desc:hover{border-color:#bbb; color:#333; box-shadow:0px -3px 5px 0px rgba(0,0,0,0.13) !important}.minimal-light .esg-filter-checked{padding:1px 3px;  color:#cbcbcb;  background:#cbcbcb;  margin-left:7px;  font-size:9px;  font-weight:300;  line-height:9px;  vertical-align:middle}.minimal-light .esg-filterbutton.selected .esg-filter-checked,.minimal-light .esg-filterbutton:hover .esg-filter-checked{padding:1px 3px 1px 3px;  color:#fff;  background:#000;  margin-left:7px;  font-size:9px;  font-weight:300;  line-height:9px;  vertical-align:middle}</style>
<!-- ESSENTIAL GRID SKIN CSS -->
<style type="text/css">.eg-skinpersonal2-element-10{font-size:16px !important; line-height:22px !important; color:#ffffff !important; font-weight:400 !important; padding:17px 17px 17px 17px !important; border-radius:60px 60px 60px 60px !important; background-color:rgba(255,255,255,0.15) !important; z-index:2 !important; display:block; font-family:"Open Sans" !important; border-top-width:0px !important; border-right-width:0px !important; border-bottom-width:0px !important; border-left-width:0px !important; border-color:#ffffff !important; border-style:solid !important}.eg-skinpersonal2-element-1{font-size:16px !important; line-height:22px !important; color:#ffffff !important; font-weight:400 !important; padding:14px 14px 14px 14px !important; border-radius:60px 60px 60px 60px !important; background-color:rgba(252,180,30,1.00) !important; z-index:2 !important; display:block; border-top-width:0px !important; border-right-width:0px !important; border-bottom-width:0px !important; border-left-width:0px !important; border-color:#ffffff !important; border-style:solid !important}</style>
<style type="text/css">.eg-skinpersonal2-element-10:hover{font-size:16px !important; line-height:22px !important; color:#ffffff !important; font-weight:400 !important; border-radius:60px 60px 60px 60px !important; background-color:rgba(0,0,0,0.50) !important; border-top-width:0px !important; border-right-width:0px !important; border-bottom-width:0px !important; border-left-width:0px !important; border-color:#ffffff !important; border-style:solid !important}.eg-skinpersonal2-element-1:hover{font-size:16px !important; line-height:22px !important; color:#ffffff !important; font-weight:400 !important; border-radius:60px 60px 60px 60px !important; background-color:rgba(252,180,30,0.50) !important; border-top-width:0px !important; border-right-width:0px !important; border-bottom-width:0px !important; border-left-width:0px !important; border-color:#ffffff !important; border-style:solid !important}</style>
<style type="text/css">.eg-skinpersonal2-element-10-a{display:inline-block !important; float:none !important; clear:none !important; margin:0px 10px 0px 0px !important; position:relative !important}</style>
<style type="text/css">.eg-skinpersonal2-element-1-a{display:inline-block !important; float:none !important; clear:none !important; margin:0px 0px 0px 0px !important; position:relative !important}</style>
<style type="text/css">.eg-skinpersonal2-container{background-color:rgba(0,0,0,0.45)}</style>
<style type="text/css">.eg-skinpersonal2-content{background-color:#ffffff; padding:0px 0px 0px 0px; border-width:0px 0px 0px 0px; border-radius:0px 0px 0px 0px; border-color:transparent; border-style:double; text-align:center}</style>
<style type="text/css">.esg-grid .mainul li.eg-skinpersonal2-wrapper{background-color:#3f424a; padding:0px 0px 0px 0px; border-width:0px 0px 0px 0px; border-radius:0px 0px 0px 0px; border-color:transparent; border-style:none}</style>
<!-- ESSENTIAL GRID END SKIN CSS -->

<!-- THE ESSENTIAL GRID 2.0.8 -->

<!-- GRID WRAPPER FOR CONTAINER SIZING - HERE YOU CAN SET THE CONTAINER SIZE AND CONTAINER SKIN -->
<article class="myportfolio-container minimal-light" id="esg-grid-6-1-wrap">

    <!-- THE GRID ITSELF WITH FILTERS, PAGINATION, SORTING ETC... -->
    <div id="esg-grid-6-1" class="esg-grid" style="background-color: transparent;padding: 0px 0px 0px 0px ; box-sizing:border-box; -moz-box-sizing:border-box; -webkit-box-sizing:border-box;">
<article class="esg-filters esg-singlefilters" style="margin-bottom: 30px; text-align: center; "><!-- THE FILTERING, SORTING AND WOOCOMMERCE BUTTONS --><!-- THE FILTER BUTTONS --><div class="esg-filter-wrapper  esg-fgc-6" style="margin-left: 2.5px; margin-right: 2.5px;">
<div class="esg-filterbutton selected esg-allfilter" data-filter="filterall" data-fid="-1">
<span> Babies Planet</span>
</div>
<div class="esg-filterbutton" data-fid="53" data-filter="filter-baby-showers">
<span>Wedding Specials</span>
<span class="esg-filter-checked"><i class="eg-icon-ok-1"></i></span>
</div>
<div class="esg-filterbutton" data-fid="51" data-filter="filter-birthdays">
<span>Honeymoon Special</span><span class="esg-filter-checked"><i class="eg-icon-ok-1"></i></span>
</div>
<div class="esg-filterbutton" data-fid="54" data-filter="filter-engagements">
<span>Corporate</span><span class="esg-filter-checked"><i class="eg-icon-ok-1"></i></span>
</div>
<div class="esg-filterbutton" data-fid="52" data-filter="filter-parties">
<span>Sweet Home Surprises</span><span class="esg-filter-checked"><i class="eg-icon-ok-1"></i></span>
</div>

<div class="esg-filterbutton" data-fid="52" data-filter="filter-parties">
<span>Parties Planet</span><span class="esg-filter-checked"><i class="eg-icon-ok-1"></i></span>
</div>

<div class="esg-filterbutton" data-fid="52" data-filter="filter-parties">
<span>Customization</span><span class="esg-filter-checked"><i class="eg-icon-ok-1"></i></span>
</div>

<div class="esg-filterbutton" data-fid="52" data-filter="filter-parties">
<span>Surprise Junction</span><span class="esg-filter-checked"><i class="eg-icon-ok-1"></i></span>
</div>

<div class="esg-filterbutton" data-fid="52" data-filter="filter-parties">
<span>Weekend Gateways</span><span class="esg-filter-checked"><i class="eg-icon-ok-1"></i></span>
</div>

<div class="esg-filterbutton" data-fid="52" data-filter="filter-parties">
<span>Wifey's Big Day-Bday</span><span class="esg-filter-checked"><i class="eg-icon-ok-1"></i></span>
</div>

<div class="esg-filterbutton" data-fid="52" data-filter="filter-parties">
<span>Hubby's Big Date-Bday</span><span class="esg-filter-checked"><i class="eg-icon-ok-1"></i></span>
</div>

<div class="esg-filterbutton" data-fid="52" data-filter="filter-parties">
<span>Unique Activities</span><span class="esg-filter-checked"><i class="eg-icon-ok-1"></i></span>
</div>

<div class="esg-filterbutton" data-fid="52" data-filter="filter-parties">
<span>Candle Light dinners</span><span class="esg-filter-checked"><i class="eg-icon-ok-1"></i></span>
</div>

<div class="esg-filterbutton" data-fid="52" data-filter="filter-parties">
<span>Senior Citizens Special</span><span class="esg-filter-checked"><i class="eg-icon-ok-1"></i></span>
</div>

<div class="esg-filterbutton" data-fid="52" data-filter="filter-parties">
<span>Snapshot</span><span class="esg-filter-checked"><i class="eg-icon-ok-1"></i></span>
</div>

<div class="esg-filterbutton" data-fid="52" data-filter="filter-parties">
<span>Elite Class</span><span class="esg-filter-checked"><i class="eg-icon-ok-1"></i></span>
</div>
<div class="eg-clearfix"></div>
</div>
</article>
<div class="esg-clear-no-height"></div><!-- ############################ -->
<!-- THE GRID ITSELF WITH ENTRIES -->
<!-- ############################ -->
<ul>
<!-- PORTFOLIO ITEM 89 -->
<li class="filterall filter-home3-gallery filter-engagements eg-skinpersonal2-wrapper eg-post-id-1344" data-date="1446626948">
    <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
    <div class="esg-media-cover-wrapper">
            <!-- THE MEDIA OF THE ENTRY -->
<div class="esg-entry-media"><img src="../wp-content/uploads/2015/10/gallery04.jpg" alt=""></div>

            <!-- THE CONTENT OF THE ENTRY -->
            <div class="esg-entry-cover">

                <!-- THE COLORED OVERLAY -->
                <div class="esg-overlay esg-fade eg-skinpersonal2-container" data-delay="0"></div>

              <div class="esg-center eg-skinpersonal2-element-8 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
				<div class="esg-center eg-post-1344 eg-skinpersonal2-element-1-a esg-fade" data-delay="0.1"><a class="eg-skinpersonal2-element-1 eg-post-1344" href="../planning-your-conference/index.html" target="_self"><i class="eg-icon-plus"></i></a></div>
              <div class="esg-center eg-skinpersonal2-element-9 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
           </div><!-- END OF THE CONTENT IN THE ENTRY -->
   </div><!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->

</li><!-- END OF PORTFOLIO ITEM -->
<!-- PORTFOLIO ITEM 89 -->
<li class="filterall filter-home3-gallery filter-baby-showers eg-skinpersonal2-wrapper eg-post-id-1345" data-date="1446626950">
    <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
    <div class="esg-media-cover-wrapper">
            <!-- THE MEDIA OF THE ENTRY -->
<div class="esg-entry-media"><img src="../wp-content/uploads/2015/08/Depositphotos_11340870_original.jpg" alt=""></div>

            <!-- THE CONTENT OF THE ENTRY -->
            <div class="esg-entry-cover">

                <!-- THE COLORED OVERLAY -->
                <div class="esg-overlay esg-fade eg-skinpersonal2-container" data-delay="0"></div>

              <div class="esg-center eg-skinpersonal2-element-8 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
				<div class="esg-center eg-post-1345 eg-skinpersonal2-element-1-a esg-fade" data-delay="0.1"><a class="eg-skinpersonal2-element-1 eg-post-1345" href="../budget-friendly-birthday-party/index.html" target="_self"><i class="eg-icon-plus"></i></a></div>
              <div class="esg-center eg-skinpersonal2-element-9 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
           </div><!-- END OF THE CONTENT IN THE ENTRY -->
   </div><!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->

</li><!-- END OF PORTFOLIO ITEM -->
<!-- PORTFOLIO ITEM 89 -->
<li class="filterall filter-home3-gallery filter-parties eg-skinpersonal2-wrapper eg-post-id-1346" data-date="1446626953">
    <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
    <div class="esg-media-cover-wrapper">
            <!-- THE MEDIA OF THE ENTRY -->
<div class="esg-entry-media"><img src="../wp-content/uploads/2015/11/Depositphotos_9428906_original.jpg" alt=""></div>

            <!-- THE CONTENT OF THE ENTRY -->
            <div class="esg-entry-cover">

                <!-- THE COLORED OVERLAY -->
                <div class="esg-overlay esg-fade eg-skinpersonal2-container" data-delay="0"></div>

              <div class="esg-center eg-skinpersonal2-element-8 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
				<div class="esg-center eg-post-1346 eg-skinpersonal2-element-1-a esg-fade" data-delay="0.1"><a class="eg-skinpersonal2-element-1 eg-post-1346" href="../corporate-birthday-parties/index.html" target="_self"><i class="eg-icon-plus"></i></a></div>
              <div class="esg-center eg-skinpersonal2-element-9 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
           </div><!-- END OF THE CONTENT IN THE ENTRY -->
   </div><!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->

</li><!-- END OF PORTFOLIO ITEM -->
<!-- PORTFOLIO ITEM 89 -->
<li class="filterall filter-home3-gallery filter-baby-showers eg-skinpersonal2-wrapper eg-post-id-1347" data-date="1446626956">
    <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
    <div class="esg-media-cover-wrapper">
            <!-- THE MEDIA OF THE ENTRY -->
<div class="esg-entry-media"><img src="../wp-content/uploads/2015/10/gallery-2.jpg" alt=""></div>

            <!-- THE CONTENT OF THE ENTRY -->
            <div class="esg-entry-cover">

                <!-- THE COLORED OVERLAY -->
                <div class="esg-overlay esg-fade eg-skinpersonal2-container" data-delay="0"></div>

              <div class="esg-center eg-skinpersonal2-element-8 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
				<div class="esg-center eg-post-1347 eg-skinpersonal2-element-1-a esg-fade" data-delay="0.1"><a class="eg-skinpersonal2-element-1 eg-post-1347" href="../bachelorette-party/index.html" target="_self"><i class="eg-icon-plus"></i></a></div>
              <div class="esg-center eg-skinpersonal2-element-9 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
           </div><!-- END OF THE CONTENT IN THE ENTRY -->
   </div><!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->

</li><!-- END OF PORTFOLIO ITEM -->
<!-- PORTFOLIO ITEM 89 -->
<li class="filterall filter-home3-gallery filter-parties eg-skinpersonal2-wrapper eg-post-id-1348" data-date="1446626958">
    <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
    <div class="esg-media-cover-wrapper">
            <!-- THE MEDIA OF THE ENTRY -->
<div class="esg-entry-media"><img src="../wp-content/uploads/2015/11/Depositphotos_49938883_original.jpg" alt=""></div>

            <!-- THE CONTENT OF THE ENTRY -->
            <div class="esg-entry-cover">

                <!-- THE COLORED OVERLAY -->
                <div class="esg-overlay esg-fade eg-skinpersonal2-container" data-delay="0"></div>

              <div class="esg-center eg-skinpersonal2-element-8 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
				<div class="esg-center eg-post-1348 eg-skinpersonal2-element-1-a esg-fade" data-delay="0.1"><a class="eg-skinpersonal2-element-1 eg-post-1348" href="../the-ultimate-birthday-party/index.html" target="_self"><i class="eg-icon-plus"></i></a></div>
              <div class="esg-center eg-skinpersonal2-element-9 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
           </div><!-- END OF THE CONTENT IN THE ENTRY -->
   </div><!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->

</li><!-- END OF PORTFOLIO ITEM -->
<!-- PORTFOLIO ITEM 89 -->
<li class="filterall filter-home3-gallery filter-birthdays eg-skinpersonal2-wrapper eg-post-id-1349" data-date="1446626961">
    <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
    <div class="esg-media-cover-wrapper">
            <!-- THE MEDIA OF THE ENTRY -->
<div class="esg-entry-media"><img src="../wp-content/uploads/2015/11/Depositphotos_7799558.jpg" alt=""></div>

            <!-- THE CONTENT OF THE ENTRY -->
            <div class="esg-entry-cover">

                <!-- THE COLORED OVERLAY -->
                <div class="esg-overlay esg-fade eg-skinpersonal2-container" data-delay="0"></div>

              <div class="esg-center eg-skinpersonal2-element-8 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
				<div class="esg-center eg-post-1349 eg-skinpersonal2-element-1-a esg-fade" data-delay="0.1"><a class="eg-skinpersonal2-element-1 eg-post-1349" href="../childs-at-home-birthday-party/index.html" target="_self"><i class="eg-icon-plus"></i></a></div>
              <div class="esg-center eg-skinpersonal2-element-9 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
           </div><!-- END OF THE CONTENT IN THE ENTRY -->
   </div><!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->

</li><!-- END OF PORTFOLIO ITEM -->
<!-- PORTFOLIO ITEM 89 -->
<li class="filterall filter-home3-gallery filter-engagements filter-parties eg-skinpersonal2-wrapper eg-post-id-1350" data-date="1446626964">
    <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
    <div class="esg-media-cover-wrapper">
            <!-- THE MEDIA OF THE ENTRY -->
<div class="esg-entry-media"><img src="../wp-content/uploads/2015/11/Depositphotos_27197393.jpg" alt=""></div>

            <!-- THE CONTENT OF THE ENTRY -->
            <div class="esg-entry-cover">

                <!-- THE COLORED OVERLAY -->
                <div class="esg-overlay esg-fade eg-skinpersonal2-container" data-delay="0"></div>

              <div class="esg-center eg-skinpersonal2-element-8 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
				<div class="esg-center eg-post-1350 eg-skinpersonal2-element-1-a esg-fade" data-delay="0.1"><a class="eg-skinpersonal2-element-1 eg-post-1350" href="../parties-for-kids/index.html" target="_self"><i class="eg-icon-plus"></i></a></div>
              <div class="esg-center eg-skinpersonal2-element-9 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
           </div><!-- END OF THE CONTENT IN THE ENTRY -->
   </div><!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->

</li><!-- END OF PORTFOLIO ITEM -->
<!-- PORTFOLIO ITEM 89 -->
<li class="filterall filter-home3-gallery filter-birthdays filter-engagements eg-skinpersonal2-wrapper eg-post-id-1351" data-date="1446626966">
    <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
    <div class="esg-media-cover-wrapper">
            <!-- THE MEDIA OF THE ENTRY -->
<div class="esg-entry-media"><img src="../wp-content/uploads/2015/08/Depositphotos_11340870_original.jpg" alt=""></div>

            <!-- THE CONTENT OF THE ENTRY -->
            <div class="esg-entry-cover">

                <!-- THE COLORED OVERLAY -->
                <div class="esg-overlay esg-fade eg-skinpersonal2-container" data-delay="0"></div>

              <div class="esg-center eg-skinpersonal2-element-8 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
				<div class="esg-center eg-post-1351 eg-skinpersonal2-element-1-a esg-fade" data-delay="0.1"><a class="eg-skinpersonal2-element-1 eg-post-1351" href="../graduation-celebration/index.html" target="_self"><i class="eg-icon-plus"></i></a></div>
              <div class="esg-center eg-skinpersonal2-element-9 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
           </div><!-- END OF THE CONTENT IN THE ENTRY -->
   </div><!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->

</li><!-- END OF PORTFOLIO ITEM -->
<!-- PORTFOLIO ITEM 89 -->
<li class="filterall filter-home3-gallery filter-baby-showers filter-parties eg-skinpersonal2-wrapper eg-post-id-1352" data-date="1446626969">
    <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
    <div class="esg-media-cover-wrapper">
            <!-- THE MEDIA OF THE ENTRY -->
<div class="esg-entry-media"><img src="../wp-content/uploads/2015/11/Depositphotos_32128821_original.jpg" alt=""></div>

            <!-- THE CONTENT OF THE ENTRY -->
            <div class="esg-entry-cover">

                <!-- THE COLORED OVERLAY -->
                <div class="esg-overlay esg-fade eg-skinpersonal2-container" data-delay="0"></div>

              <div class="esg-center eg-skinpersonal2-element-8 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
				<div class="esg-center eg-post-1352 eg-skinpersonal2-element-1-a esg-fade" data-delay="0.1"><a class="eg-skinpersonal2-element-1 eg-post-1352" href="../kids-birthdays/index.html" target="_self"><i class="eg-icon-plus"></i></a></div>
              <div class="esg-center eg-skinpersonal2-element-9 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
           </div><!-- END OF THE CONTENT IN THE ENTRY -->
   </div><!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->

</li><!-- END OF PORTFOLIO ITEM -->
<!-- PORTFOLIO ITEM 89 -->
<li class="filterall filter-home3-gallery filter-birthdays eg-skinpersonal2-wrapper eg-post-id-1353" data-date="1446626972">
    <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
    <div class="esg-media-cover-wrapper">
            <!-- THE MEDIA OF THE ENTRY -->
<div class="esg-entry-media"><img src="../wp-content/uploads/2015/11/Depositphotos_58012859_original.jpg" alt=""></div>

            <!-- THE CONTENT OF THE ENTRY -->
            <div class="esg-entry-cover">

                <!-- THE COLORED OVERLAY -->
                <div class="esg-overlay esg-fade eg-skinpersonal2-container" data-delay="0"></div>

              <div class="esg-center eg-skinpersonal2-element-8 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
				<div class="esg-center eg-post-1353 eg-skinpersonal2-element-1-a esg-fade" data-delay="0.1"><a class="eg-skinpersonal2-element-1 eg-post-1353" href="../engagement-parties/index.html" target="_self"><i class="eg-icon-plus"></i></a></div>
              <div class="esg-center eg-skinpersonal2-element-9 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
           </div><!-- END OF THE CONTENT IN THE ENTRY -->
   </div><!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->

</li><!-- END OF PORTFOLIO ITEM -->
<!-- PORTFOLIO ITEM 89 -->
<li class="filterall filter-home3-gallery filter-engagements filter-parties eg-skinpersonal2-wrapper eg-post-id-1354" data-date="1446626980">
    <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
    <div class="esg-media-cover-wrapper">
            <!-- THE MEDIA OF THE ENTRY -->
<div class="esg-entry-media"><img src="../wp-content/uploads/2015/10/gallery-5.jpg" alt=""></div>

            <!-- THE CONTENT OF THE ENTRY -->
            <div class="esg-entry-cover">

                <!-- THE COLORED OVERLAY -->
                <div class="esg-overlay esg-fade eg-skinpersonal2-container" data-delay="0"></div>

              <div class="esg-center eg-skinpersonal2-element-8 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
				<div class="esg-center eg-post-1354 eg-skinpersonal2-element-1-a esg-fade" data-delay="0.1"><a class="eg-skinpersonal2-element-1 eg-post-1354" href="../perfect-choice-for-your-wedding/index.html" target="_self"><i class="eg-icon-plus"></i></a></div>
              <div class="esg-center eg-skinpersonal2-element-9 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
           </div><!-- END OF THE CONTENT IN THE ENTRY -->
   </div><!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->

</li><!-- END OF PORTFOLIO ITEM -->
<!-- PORTFOLIO ITEM 89 -->
<li class="filterall filter-gallery filter-baby-showers filter-birthdays eg-skinpersonal2-wrapper eg-post-id-1355" data-date="1446626983">
    <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
    <div class="esg-media-cover-wrapper">
            <!-- THE MEDIA OF THE ENTRY -->
<div class="esg-entry-media"><img src="../wp-content/uploads/2015/11/Depositphotos_32128821_original.jpg" alt=""></div>

            <!-- THE CONTENT OF THE ENTRY -->
            <div class="esg-entry-cover">

                <!-- THE COLORED OVERLAY -->
                <div class="esg-overlay esg-fade eg-skinpersonal2-container" data-delay="0"></div>

              <div class="esg-center eg-skinpersonal2-element-8 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
				<div class="esg-center eg-post-1355 eg-skinpersonal2-element-1-a esg-fade" data-delay="0.1"><a class="eg-skinpersonal2-element-1 eg-post-1355" href="../plannig-childrens-parties-2/index.html" target="_self"><i class="eg-icon-plus"></i></a></div>
              <div class="esg-center eg-skinpersonal2-element-9 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
           </div><!-- END OF THE CONTENT IN THE ENTRY -->
   </div><!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->

</li><!-- END OF PORTFOLIO ITEM -->
</ul>
<!-- ############################ -->
<!--      END OF THE GRID         -->
<!-- ############################ -->
    </div><!-- END OF THE GRID -->

</article>
<!-- END OF THE GRID WRAPPER -->

<div class="clear"></div>
<script type="text/javascript">
function eggbfc(winw,resultoption) {
	var lasttop = winw,
	lastbottom = 0,
	smallest =9999,
	largest = 0,
	samount = 0,
	lamoung = 0,
	lastamount = 0,
	resultid = 0,
	resultidb = 0,
	responsiveEntries = [
						{ width:1400,amount:6},
						{ width:1170,amount:6},
						{ width:1024,amount:6},
						{ width:960,amount:5},
						{ width:778,amount:4},
						{ width:640,amount:3},
						{ width:480,amount:1}
						];
	if (responsiveEntries!=undefined && responsiveEntries.length>0)
		jQuery.each(responsiveEntries, function(index,obj) {
			var curw = obj.width != undefined ? obj.width : 0,
				cura = obj.amount != undefined ? obj.amount : 0;
			if (smallest>curw) {
				smallest = curw;
				samount = cura;
				resultidb = index;
			}
			if (largest<curw) {
				largest = curw;
				lamount = cura;
			}
			if (curw>lastbottom && curw<=lasttop) {
				lastbottom = curw;
				lastamount = cura;
				resultid = index;
			}
		})
		if (smallest>winw) {
			lastamount = samount;
			resultid = resultidb;
		}
		var obj = new Object;
		obj.index = resultid;
		obj.column = lastamount;
		if (resultoption=="id")
			return obj;
		else
			return lastamount;
	}
if ("even"=="even") {
	var coh=0,
		container = jQuery("#esg-grid-6-1");
	var	cwidth = container.width(),
		ar = "4:3",
		gbfc = eggbfc(jQuery(window).width(),"id"),
	row = 2;
ar = ar.split(":");
aratio=parseInt(ar[0],0) / parseInt(ar[1],0);
coh = cwidth / aratio;
coh = coh/gbfc.column*row;
	var ul = container.find("ul").first();
	ul.css({display:"block",height:coh+"px"});
}
var essapi_6;
jQuery(document).ready(function() {
	essapi_6 = jQuery("#esg-grid-6-1").tpessential({
        gridID:6,
        layout:"even",
        forceFullWidth:"off",
        lazyLoad:"off",
        row:2,
        loadMoreAjaxToken:"22afa389db",
        loadMoreAjaxUrl:"http://unicaevents.ancorathemes.com/wp-admin/admin-ajax.php",
        loadMoreAjaxAction:"Essential_Grid_Front_request_ajax",
        ajaxContentTarget:"ess-grid-ajax-container-",
        ajaxScrollToOffset:"0",
        ajaxCloseButton:"off",
        ajaxContentSliding:"on",
        ajaxScrollToOnLoad:"on",
        ajaxNavButton:"off",
        ajaxCloseType:"type1",
        ajaxCloseInner:"false",
        ajaxCloseStyle:"light",
        ajaxClosePosition:"tr",
        space:0,
        pageAnimation:"fade",
        paginationScrollToTop:"off",
        spinner:"spinner0",
        evenGridMasonrySkinPusher:"off",
        lightBoxMode:"single",
        animSpeed:1000,
        delayBasic:1,
        mainhoverdelay:1,
        filterType:"single",
        showDropFilter:"hover",
        filterGroupClass:"esg-fgc-6",
        googleFonts:['Open+Sans:300,400,600,700,800','Raleway:100,200,300,400,500,600,700,800,900','Droid+Serif:400,700'],
        aspectratio:"4:3",
        responsiveEntries: [
						{ width:1400,amount:6},
						{ width:1170,amount:6},
						{ width:1024,amount:6},
						{ width:960,amount:5},
						{ width:778,amount:4},
						{ width:640,amount:3},
						{ width:480,amount:1}
						]
	});

});
</script>
</div></div></div></div></div></div><div class="vc_row-full-width"></div><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1446032902066"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="sc_content content_wrap" style="padding-bottom:1em;"><h2 class="sc_title sc_title_underline sc_align_center margin_top_small margin_bottom_tiny" style="text-align:center;">Testimonials</h2><h6 class="sc_title sc_title_style1 sc_align_center margin_bottom_large" style="text-align:center;"><span class="sc_title_style1_before"></span>Happy clients about us<span class="sc_title_style1_after"></span></h6><div id="sc_testimonials_131665043" class="sc_testimonials sc_testimonials_style_testimonials-1  sc_slider_swiper swiper-slider-container sc_slider_nopagination sc_slider_controls sc_slider_controls_bottom margin_bottom_medium" data-interval="70000" data-slides-per-view="3" style="width:100%;"><div class="slides swiper-wrapper"><div class="swiper-slide" data-style="width:100%;" style="width:100%;">			<div id="sc_testimonials_131665043_1" class="sc_testimonial_item">
				<div class="sc_testimonial_content"><p>My family and I are beyond happy to have them plan our wedding day.</p></div>
								<div class="sc_testimonial_avatar"><img class="wp-post-image" width="75" height="75" alt="Jessica Mann" src="../wp-content/uploads/2015/10/testimonial-1-150x150.jpg"></div>
												<div class="sc_testimonial_author"><span class="sc_testimonial_author_name">Jessica Mann</span></div>
							</div>
		</div><div class="swiper-slide" data-style="width:100%;" style="width:100%;">			<div id="sc_testimonials_131665043_2" class="sc_testimonial_item">
				<div class="sc_testimonial_content"><p>Look no further! You are in the right place to plan your celebration.</p></div>
								<div class="sc_testimonial_avatar"><img class="wp-post-image" width="75" height="75" alt="Linda Movrizza" src="../wp-content/uploads/2015/10/testimonial-2-150x150.jpg"></div>
												<div class="sc_testimonial_author"><span class="sc_testimonial_author_name">Linda Movrizza</span></div>
							</div>
		</div><div class="swiper-slide" data-style="width:100%;" style="width:100%;">			<div id="sc_testimonials_131665043_3" class="sc_testimonial_item">
				<div class="sc_testimonial_content"><p>I invited these event planner to arrange a bachelor party for my best friend!</p></div>
								<div class="sc_testimonial_avatar"><img class="wp-post-image" width="75" height="75" alt="John Snow" src="../wp-content/uploads/2015/10/testimonial-3-150x150.jpg"></div>
												<div class="sc_testimonial_author"><span class="sc_testimonial_author_name">John Snow</span></div>
							</div>
		</div><div class="swiper-slide" data-style="width:100%;" style="width:100%;">			<div id="sc_testimonials_131665043_4" class="sc_testimonial_item">
				<div class="sc_testimonial_content"><p>Perfect decoration and perfect buffet for my little sister's birthday party!</p></div>
								<div class="sc_testimonial_avatar"><img class="wp-post-image" width="75" height="75" alt="Jane Sanders" src="../wp-content/uploads/2015/10/testimonial-4-150x150.jpg"></div>
												<div class="sc_testimonial_author"><span class="sc_testimonial_author_name">Jane Sanders</span></div>
							</div>
		</div></div><div class="sc_slider_controls_wrap"><a class="sc_slider_prev" href="#"></a><a class="sc_slider_next" href="#"></a></div><div class="sc_slider_pagination_wrap"></div></div></div></div></div></div></div><div class="vc_row-full-width"></div><div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-parallax="1.5" data-vc-parallax-image="http://unicaevents.ancorathemes.com/wp-content/uploads/2015/10/Depositphotos_1134087022_original.jpg" class="vc_row wpb_row vc_row-fluid vc_general vc_parallax vc_parallax-content-moving"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="sc_content content_wrap"><h2 class="sc_title sc_title_underline sc_align_center margin_top_small margin_bottom_tiny" style="text-align:center;color:#ffffff;">Happy Clients</h2><h6 class="sc_title sc_title_style1 sc_align_center margin_bottom_huge" style="text-align:center;"><span class="sc_title_style1_before"></span>our recent projects<span class="sc_title_style1_after"></span></h6><div id="sc_clients_230515368_wrap" class="sc_clients_wrap"><div id="sc_clients_230515368" class="sc_clients sc_clients_style_clients-1  sc_slider_nopagination sc_slider_nocontrols margin_bottom_large sc_slider_swiper swiper-slider-container" data-interval="5811" data-slides-per-view="7" data-slides-space="40" style="width:100%;"><div class="slides swiper-wrapper"><div class="swiper-slide" data-style="width:100%;" style="width:100%;">			<div id="sc_clients_230515368_1" class="sc_clients_item sc_clients_item_1 odd first">
								<div class="sc_client_image"><img class="wp-post-image" alt="okolosport" src="../wp-content/uploads/2015/11/Layer-97.png"></div>
							</div>
		</div><div class="swiper-slide" data-style="width:100%;" style="width:100%;">			<div id="sc_clients_230515368_2" class="sc_clients_item sc_clients_item_2 even">
								<div class="sc_client_image"><img class="wp-post-image" alt="okolosport" src="../wp-content/uploads/2015/11/Layer-96.png"></div>
							</div>
		</div><div class="swiper-slide" data-style="width:100%;" style="width:100%;">			<div id="sc_clients_230515368_3" class="sc_clients_item sc_clients_item_3 odd">
								<div class="sc_client_image"><img class="wp-post-image" alt="okolosport" src="../wp-content/uploads/2015/11/Layer-95.png"></div>
							</div>
		</div><div class="swiper-slide" data-style="width:100%;" style="width:100%;">			<div id="sc_clients_230515368_4" class="sc_clients_item sc_clients_item_4 even">
								<div class="sc_client_image"><img class="wp-post-image" alt="okolosport" src="../wp-content/uploads/2015/11/Layer-93.png"></div>
							</div>
		</div><div class="swiper-slide" data-style="width:100%;" style="width:100%;">			<div id="sc_clients_230515368_5" class="sc_clients_item sc_clients_item_5 odd">
								<div class="sc_client_image"><img class="wp-post-image" alt="okolosport" src="../wp-content/uploads/2015/11/Layer-92.png"></div>
							</div>
		</div><div class="swiper-slide" data-style="width:100%;" style="width:100%;">			<div id="sc_clients_230515368_6" class="sc_clients_item sc_clients_item_6 even">
								<div class="sc_client_image"><img class="wp-post-image" alt="tates" src="../wp-content/uploads/2015/11/Layer-94.png"></div>
							</div>
		</div><div class="swiper-slide" data-style="width:100%;" style="width:100%;">			<div id="sc_clients_230515368_7" class="sc_clients_item sc_clients_item_7 odd">
								<div class="sc_client_image"><img class="wp-post-image" alt="okolosport" src="../wp-content/uploads/2015/11/Layer-91.png"></div>
							</div>
		</div></div><div class="sc_slider_controls_wrap"><a class="sc_slider_prev" href="#"></a><a class="sc_slider_next" href="#"></a></div><div class="sc_slider_pagination_wrap"></div></div><!-- /.sc_clients --></div><!-- /.sc_clients_wrap --></div></div></div></div></div><div class="vc_row-full-width"></div><div id="form-parallax" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1491130410090"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="sc_content content_wrap"><h2 class="sc_title sc_title_underline sc_align_center margin_top_small margin_bottom_tiny" style="text-align:center;color:#ffffff;">Online Request</h2><h6 class="sc_title sc_title_style1 sc_align_center margin_bottom_huge" style="text-align:center;color:#ffffff;"><span class="sc_title_style1_before" style="background-color: #ffffff"></span>Drop us a few lines<span class="sc_title_style1_after" style="background-color: #ffffff"></span></h6><div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2" style="text-align:center;"><div class="column-1_2 sc_column_item sc_column_item_1 odd first" style="text-align:center;"><div  id="sc_form_327850779_wrap" class="sc_form_wrap"><div  id="sc_form_327850779" class="sc_form sc_form_style_form_1 aligncenter margin_bottom_huge">		<form  id="sc_form_327850779" data-formtype="form_1" method="post" action="http://unicaevents.ancorathemes.com/wp-admin/admin-ajax.php">
			<div class="sc_form_info">
			<div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2">
				<div class="column-1_2 sc_column_item sc_column_item_1"><div class="sc_form_item sc_form_field label_over"><label class="required" for="sc_form_username">Name:</label><input id="sc_form_username" type="text" name="username" placeholder="Name:"></div></div>
				<div class="column-1_2 sc_column_item sc_column_item_2"><div class="sc_form_item sc_form_field label_over"><label class="required" for="sc_form_phone">Phone:</label><input id="sc_form_phone" type="text" name="phone" placeholder="Phone:"></div></div>
			</div>
			</div>
			<div class="sc_form_item sc_form_message label_over"><label class="required" for="sc_form_message">Message</label><textarea id="sc_form_message" name="message" placeholder="Message:"></textarea></div>
			<div class="sc_form_item sc_form_button"><button>send</button></div>
			<div class="result sc_infobox"></div>
		</form>
		</div></div></div></div></div></div></div></div></div><div class="vc_row-full-width"></div><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1446045661779"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="sc_content content_wrap margin_top_huge margin_bottom_large"><div class="columns_wrap sc_columns columns_nofluid sc_columns_count_4 contact-row "><div class="column-1_4 sc_column_item sc_column_item_1 odd first"><div class="sc_section"><div class="sc_section_inner"><span class="sc_icon icon-contacts_icon1 aligncenter" style="font-size:2.35em; line-height: 1em;color:#fff;"></span><h6 class="sc_title sc_title_regular sc_align_center" style="text-align:center;">Postal Address</h6>
	<div class="wpb_text_column wpb_content_element " >
		<div class="wpb_wrapper">
			<p style="text-align: center;">Eventiana<br />
B-1295,GD Colony,Mayur Vihar Phase-III,Delhi-110096</p>

		</div>
	</div>
</div></div></div><div class="column-1_4 sc_column_item sc_column_item_2 even"><div class="sc_section"><div class="sc_section_inner"><span class="sc_icon icon-contacts_icon2 aligncenter" style="font-size:2.35em; line-height: 1em;color:#fff;"></span><h6 class="sc_title sc_title_regular sc_align_center" style="text-align:center;">Phone &amp; E-mail</h6>
	<div class="wpb_text_column wpb_content_element " >
		<div class="wpb_wrapper">
			<p style="text-align: center;">Phone: +91 9999874701</p>
            <p style="text-align: center;">Email: info@eventiana.com</p>

		</div>
	</div>
</div></div></div><div class="column-1_4 sc_column_item sc_column_item_3 odd"><div class="sc_section"><div class="sc_section_inner"><span class="sc_icon icon-contacts_icon3 aligncenter" style="font-size:2.35em; line-height: 1em;color:#fff;"></span><h6 class="sc_title sc_title_regular sc_align_center" style="text-align:center;">Open Hours</h6>
	<div class="wpb_text_column wpb_content_element " >
		<div class="wpb_wrapper">
			<p style="text-align: center;">Monday – Sunday<br />
8.00 am – 11.00 pm<br />
</p>

		</div>
	</div>
</div></div></div><div class="column-1_4 sc_column_item sc_column_item_4 even"><div class="sc_section"><div class="sc_section_inner"><span class="sc_icon icon-contacts_icon4 aligncenter" style="font-size:2.35em; line-height: 1em;color:#fff;"></span><h6 class="sc_title sc_title_regular sc_align_center" style="text-align:center;">Sessions</h6>
	<div class="wpb_text_column wpb_content_element " >
		<div class="wpb_wrapper">
			<p style="text-align: center;">Mornings, 8 am – 11 pm<br /></p>

		</div>
	</div>
</div></div></div></div></div></div></div></div></div><div class="vc_row-full-width"></div></section> <!-- </section> class="post_content" itemprop="articleBody"> --></article> <!-- </article> class="itemscope post_item post_item_single post_featured_center post_format_standard post-1097 page type-page status-publish hentry" itemscope itemtype="http://schema.org/Article"> -->	<section class="related_wrap related_wrap_empty"></section>
	</div> <!-- </div> class="content"> --></div> <!-- </div> class="content_wrap"> -->			
			</div>		<!-- </.page_content_wrap> -->
			
							
            
 <?php include('footer.php');?>