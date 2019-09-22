<script  src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="   crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script>
  setTimeout(function(){
                 $(function() {  $("#myModalfinal").modal('show'); });
                  },20000) ;

//$(function() {  $("#myModal").modal('show'); });
</script>

<?php
include('header-2.php');
include('slider-2.php');
?>
<div class="page_content_wrap page_paddings_no">
<div class="content_wrap"><div class="content"><article class="itemscope post_item post_item_single post_featured_center post_format_standard post-1097 page type-page status-publish hentry" itemscope itemtype="http://schema.org/Article"><section class="post_content" itemprop="articleBody"><div class="sc_reviews alignright"><!-- #TRX_REVIEWS_PLACEHOLDER# --></div><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1446455989170"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="sc_content content_wrap" style="padding-top: 2.7em;"><h2 class="sc_title sc_title_underline sc_align_center margin_top_tiny margin_bottom_tiny" style="text-align:center;font-size:3.929em;"><span style="color: #ed2f48;">Hello!</span> <span style="font-size: 25px;color: #000;">WE ARE HERE TO CELEBRATE FANTASIES INTO REALITY</span></h2>
<div class="columns_wrap sc_columns columns_nofluid sc_columns_count_1 margin_top_tiny-"><div class="column-1_1 sc_column_item sc_column_item_1 odd first" style="margin-bottom:10px;">
	<div class="wpb_text_column wpb_content_element " >
		<div class="wpb_wrapper">
			<p style="text-align: center;font-family: 'Lato', sans-serif;color: #9b9b9b;">Eventiana is an integrated platform to cater best services to bring dream come true experiences mainly for couple's ever imagined fantasies,spouse's surprise anniversary gifts,babies events,home based events, indoor and outdoor events and seminars. We have expertise services to provide corporate solutions in different cities and destinations as required.
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
<a href="babies-planet.php?cname=<?php echo $row['category_name'] ?>">
<div class='imd_cator'>
<img src="../admin/<?php echo $row['category_image']; ?>"  />
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
        
        
        
        <!-- /.sc_services_wrap --></div></div></div></div></div><div class="vc_row-full-width"></div><div id="home-3-block-2" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1446461095918"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="sc_content content_wrap"><div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2"><div class="column-1_2 sc_column_item sc_column_item_1 odd first">
        <h4 class="sc_title sc_title_regular margin_top_medium" style="font-size:2.143em;">A prominent list of our services:</h4><ul class="sc_list sc_list_style_iconed">
        <li class="sc_list_item even" title="Developing a theme"><span class="sc_list_icon icon-ok-1" style="color: green;"></span>Scouting a venue at low rentals</li>
        <li class="sc_list_item odd" title="Coordinating paper goods with a stationery vendor"><span class="sc_list_icon icon-ok-1" style="color: green;"></span>Developing a theme based decoration</li>
        <li class="sc_list_item even" title="Organizing a tasting with up to three caterers"><span class="sc_list_icon icon-ok-1" style="color: green;"></span>Invitations list, Florist, Photographers, Live guitarist, DJ services</li>
        <li class="sc_list_item odd" title="Recommending up to three florists (if necessary)"><span class="sc_list_icon icon-ok-1" style="color: green;"></span>Customized interior decoration</li>
        <li class="sc_list_item even" title="Recommending up to three photographers (if necessary)"><span class="sc_list_icon icon-ok-1" style="color: green;"></span>Recommended gifts services according to occasions</li>
        <li class="sc_list_item odd" title="Managing your guest list"><span class="sc_list_icon icon-ok-1" style="color: green;"></span>Multi cultural activities like couple games, indoor games activities.</li>
        <li class="sc_list_item even" title="Assisting with rentals"><span class="sc_list_icon icon-ok-1" style="color: green;"></span>Stage shows, baby shows, baby competition like fancy dress, painting, singing, dancing, prop show, puppet show</li>
        <li class="sc_list_item odd" title="And, depending on the wishes, being on-site or on-call during the event to ensure everything runs smoothly"><span class="sc_list_icon icon-ok-1" style="color: green;"></span>Sports activities scootering, road shows, paragliding</li>
        <li class="sc_list_item odd" title="And, depending on the wishes, being on-site or on-call during the event to ensure everything runs smoothly"><span class="sc_list_icon icon-ok-1" style="color: green;"></span>Live group dancers for proposals or occasions as you desire</li>
        </ul></div><div class="column-1_2 sc_column_item sc_column_item_2 even">
        <div class="img_bar_con">
        
        <div  class="row gel">
        <div class="col-md-4 red">
        <div class="gl_bar">
        <img src="../wp-content/uploads/2015/07/short-gallery/BABIES PLANET CATEGORY PIC.jpg"  />
        </div>
        </div>
        
        <div class="col-md-4 red">
        <div class="gl_bar">
        <img src="../wp-content/uploads/2015/07/short-gallery/destinationwedding.jpg"  />
        </div>
        </div>
        
        <div class="col-md-4 red">
        <div class="gl_bar">
        <img src="../wp-content/uploads/2015/07/short-gallery/candle light for senior citizens 2.jpg"  />
        </div>
        </div>
        </div>
        
        <div  class="row gel">
        <div class="col-md-4 red">
        <div class="gl_bar">
        <img src="../wp-content/uploads/2015/07/short-gallery/cook with the chef.jpg"  />
        </div>
        </div>
        
        <div class="col-md-4 red">
        <div class="gl_bar">
        <img src="../wp-content/uploads/2015/07/short-gallery/COUPLE PHOTOSHOOT.jpg"  />
        </div>
        </div>
        
        <div class="col-md-4 red">
        <div class="gl_bar">
        <img src="../wp-content/uploads/2015/07/short-gallery/honeymoon decor.jpg"  />
        </div>
        </div>
        </div>
        
        <div  class="row gel">
        <div class="col-md-4 red">
        <div class="gl_bar">
        <img src="../wp-content/uploads/2015/07/short-gallery/musical party.jpg"  />
        </div>
        </div>
        
        <div class="col-md-4 red">
        <div class="gl_bar">
        <img src="../wp-content/uploads/2015/07/short-gallery/proposal romantic.jpg"  />
        </div>
        </div>
        
        <div class="col-md-4 red">
        <div class="gl_bar">
        <img src="../wp-content/uploads/2015/07/short-gallery/resorts in manesar.jpg"  />
        </div>
        </div>
        </div>
        
        </div>
        
        
        </div></div></div></div></div></div></div><div class="vc_row-full-width"></div><div id="call-to" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1447082926644" style="background: #f62f74 !important;"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="sc_content content_wrap" style=" padding-top: 4em; padding-bottom: 0.45em;"><div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2"><div class="column-1_2 sc_column_item sc_column_item_1 odd first" style="width:55%"><h3 class="sc_title sc_title_regular sc_align_right" style="margin-top: 0.4em;text-align:right;color:#ffffff;">See Our Best Events Gallery!</h3></div><div class="column-1_2 sc_column_item sc_column_item_2 even" style="width:45%"><a href="#" class="sc_button sc_button_square sc_button_style_filled sc_button_size_small" style="background-color: #1343cc;border-color: #1343cc;box-shadow: inset 0px 0px 0 2px #1343cc;">Visit Gallery</a></div></div></div></div></div></div></div><div class="vc_row-full-width"></div><div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner " style="display: none;"><div class="wpb_wrapper"><h2 class="sc_title sc_title_underline sc_align_center margin_top_small margin_bottom_tiny" style="text-align: center;background: #f62f74; color:#fff;width: 13%;border-radius: 3px;">Gallery</h2><h6 class="sc_title sc_title_style1 sc_align_center margin_bottom_large" style="text-align:center;"><span class="sc_title_style1_before"></span>our recent Events<span class="sc_title_style1_after"></span></h6><div class="sc_section"><div class="sc_section_inner"><style type="text/css">a.eg-henryharrison-element-1,a.eg-henryharrison-element-2{-webkit-transition:all .4s linear;   -moz-transition:all .4s linear;   -o-transition:all .4s linear;   -ms-transition:all .4s linear;   transition:all .4s linear}.eg-jimmy-carter-element-11 i:before{margin-left:0px; margin-right:0px}.eg-harding-element-17{letter-spacing:1px}.eg-harding-wrapper .esg-entry-media{overflow:hidden; box-sizing:border-box;   -webkit-box-sizing:border-box;   -moz-box-sizing:border-box;   padding:30px 30px 0px 30px}.eg-harding-wrapper .esg-entry-media img{overflow:hidden; border-radius:50%;   -webkit-border-radius:50%;   -moz-border-radius:50%}.eg-ulysses-s-grant-wrapper .esg-entry-media{overflow:hidden; box-sizing:border-box;   -webkit-box-sizing:border-box;   -moz-box-sizing:border-box;   padding:30px 30px 0px 30px}.eg-ulysses-s-grant-wrapper .esg-entry-media img{overflow:hidden; border-radius:50%;   -webkit-border-radius:50%;   -moz-border-radius:50%}.eg-richard-nixon-wrapper .esg-entry-media{overflow:hidden; box-sizing:border-box;   -webkit-box-sizing:border-box;   -moz-box-sizing:border-box;   padding:30px 30px 0px 30px}.eg-richard-nixon-wrapper .esg-entry-media img{overflow:hidden; border-radius:50%;   -webkit-border-radius:50%;   -moz-border-radius:50%}.eg-herbert-hoover-wrapper .esg-entry-media img{filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/></filter></svg>#grayscale");   filter:gray;   -webkit-filter:grayscale(100%)}.eg-herbert-hoover-wrapper:hover .esg-entry-media img{filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='1 0 0 0 0,0 1 0 0 0,0 0 1 0 0,0 0 0 1 0'/></filter></svg>#grayscale");  -webkit-filter:grayscale(0%)}.eg-lyndon-johnson-wrapper .esg-entry-media img{filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/></filter></svg>#grayscale");   filter:gray;   -webkit-filter:grayscale(100%)}.eg-lyndon-johnson-wrapper:hover .esg-entry-media img{filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='1 0 0 0 0,0 1 0 0 0,0 0 1 0 0,0 0 0 1 0'/></filter></svg>#grayscale");  -webkit-filter:grayscale(0%)}.esg-overlay.eg-ronald-reagan-container{background:-moz-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-webkit-gradient(linear,left top,left bottom,color-stop(50%,rgba(0,0,0,0)),color-stop(99%,rgba(0,0,0,0.83)),color-stop(100%,rgba(0,0,0,0.85))); background:-webkit-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-o-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-ms-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:linear-gradient(to bottom,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000',endColorstr='#d9000000',GradientType=0 )}.eg-georgebush-wrapper .esg-entry-cover{background:-moz-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-webkit-gradient(linear,left top,left bottom,color-stop(50%,rgba(0,0,0,0)),color-stop(99%,rgba(0,0,0,0.83)),color-stop(100%,rgba(0,0,0,0.85))); background:-webkit-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-o-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-ms-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:linear-gradient(to bottom,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000',endColorstr='#d9000000',GradientType=0 )}.eg-jefferson-wrapper{-webkit-border-radius:5px !important; -moz-border-radius:5px !important; border-radius:5px !important; -webkit-mask-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAA5JREFUeNpiYGBgAAgwAAAEAAGbA+oJAAAAAElFTkSuQmCC) !important}.eg-monroe-element-1{text-shadow:0px 1px 3px rgba(0,0,0,0.1)}.eg-lyndon-johnson-wrapper .esg-entry-cover{background:-moz-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); background:-webkit-gradient(radial,center center,0px,center center,100%,color-stop(0%,rgba(0,0,0,0.35)),color-stop(96%,rgba(18,18,18,0)),color-stop(100%,rgba(19,19,19,0))); background:-webkit-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); background:-o-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); background:-ms-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); background:radial-gradient(ellipse at center,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#59000000',endColorstr='#00131313',GradientType=1 )}.eg-wilbert-wrapper .esg-entry-cover{background:-moz-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); background:-webkit-gradient(radial,center center,0px,center center,100%,color-stop(0%,rgba(0,0,0,0.35)),color-stop(96%,rgba(18,18,18,0)),color-stop(100%,rgba(19,19,19,0))); background:-webkit-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); background:-o-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); background:-ms-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); background:radial-gradient(ellipse at center,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#59000000',endColorstr='#00131313',GradientType=1 )}.eg-wilbert-wrapper .esg-entry-media img{-webkit-transition:0.4s ease-in-out;  -moz-transition:0.4s ease-in-out;  -o-transition:0.4s ease-in-out;  transition:0.4s ease-in-out;  filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/></filter></svg>#grayscale");   filter:gray;   -webkit-filter:grayscale(100%)}.eg-wilbert-wrapper:hover .esg-entry-media img{filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='1 0 0 0 0,0 1 0 0 0,0 0 1 0 0,0 0 0 1 0'/></filter></svg>#grayscale");  -webkit-filter:grayscale(0%)}.eg-phillie-element-3:after{content:" ";width:0px;height:0px;border-style:solid;border-width:5px 5px 0 5px;border-color:#000 transparent transparent transparent;left:50%;margin-left:-5px; bottom:-5px; position:absolute}.eg-howardtaft-wrapper .esg-entry-media img,.eg-howardtaft-wrapper .esg-media-poster{filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='1 0 0 0 0,0 1 0 0 0,0 0 1 0 0,0 0 0 1 0'/></filter></svg>#grayscale");  -webkit-filter:grayscale(0%)}.eg-howardtaft-wrapper:hover .esg-entry-media img,.eg-howardtaft-wrapper:hover .esg-media-poster{filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/></filter></svg>#grayscale");   filter:gray;   -webkit-filter:grayscale(100%)}.myportfolio-container .added_to_cart.wc-forward{font-family:"Open Sans"; font-size:13px; color:#fff; margin-top:10px}.esgbox-title.esgbox-title-outside-wrap{font-size:15px; font-weight:700; text-align:center}.esgbox-title.esgbox-title-inside-wrap{padding-bottom:10px; font-size:15px; font-weight:700; text-align:center}</style>
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
<div class="esg-filterbutton selected esg-allfilter redmor_bar" data-filter="filterall" data-fid="-1">
<span> Baby's Planet</span>
</div>
<div class="esg-filterbutton redmor_bar" data-fid="53" data-filter="filter-baby-showers">
<span>Wedding Specials</span>
<span class="esg-filter-checked"><i class="eg-icon-ok-1"></i></span>
</div>
<div class="esg-filterbutton redmor_bar" data-fid="51" data-filter="filter-birthdays">
<span>Honeymoon Special</span><span class="esg-filter-checked"><i class="eg-icon-ok-1"></i></span>
</div>
<div class="esg-filterbutton redmor_bar" data-fid="54" data-filter="filter-engagements">
<span>Corporate</span><span class="esg-filter-checked"><i class="eg-icon-ok-1"></i></span>
</div>
<div class="esg-filterbutton redmor_bar" data-fid="52" data-filter="filter-parties">
<span>Sweet Home Surprises</span><span class="esg-filter-checked"><i class="eg-icon-ok-1"></i></span>
</div>

<div class="esg-filterbutton redmor_bar" data-fid="52" data-filter="filter-parties">
<span>Party's Planet</span><span class="esg-filter-checked"><i class="eg-icon-ok-1"></i></span>
</div>

<div class="esg-filterbutton redmor_bar" data-fid="52" data-filter="filter-parties">
<span>Customization</span><span class="esg-filter-checked"><i class="eg-icon-ok-1"></i></span>
</div>

<div class="esg-filterbutton redmor_bar" data-fid="52" data-filter="filter-parties">
<span>Surprise Junction</span><span class="esg-filter-checked"><i class="eg-icon-ok-1"></i></span>
</div>

<div class="esg-filterbutton redmor_bar" data-fid="52" data-filter="filter-parties">
<span>Weekend Gateways</span><span class="esg-filter-checked"><i class="eg-icon-ok-1"></i></span>
</div>

<div class="esg-filterbutton redmor_bar" data-fid="52" data-filter="filter-parties">
<span>Wifey's Big Day-Bday</span><span class="esg-filter-checked"><i class="eg-icon-ok-1"></i></span>
</div>

<div class="esg-filterbutton redmor_bar" data-fid="52" data-filter="filter-parties">
<span>Hubby's Big Day-Bday</span><span class="esg-filter-checked"><i class="eg-icon-ok-1"></i></span>
</div>

<div class="esg-filterbutton redmor_bar" data-fid="52" data-filter="filter-parties">
<span>Unique Activities</span><span class="esg-filter-checked"><i class="eg-icon-ok-1"></i></span>
</div>

<div class="esg-filterbutton redmor_bar" data-fid="52" data-filter="filter-parties">
<span>Candle Light dinners</span><span class="esg-filter-checked"><i class="eg-icon-ok-1"></i></span>
</div>

<div class="esg-filterbutton redmor_bar" data-fid="52" data-filter="filter-parties">
<span>Senior Citizen's Special</span><span class="esg-filter-checked"><i class="eg-icon-ok-1"></i></span>
</div>

<div class="esg-filterbutton redmor_bar" data-fid="52" data-filter="filter-parties">
<span>Snapshot</span><span class="esg-filter-checked"><i class="eg-icon-ok-1"></i></span>
</div>

<div class="esg-filterbutton redmor_bar" data-fid="52" data-filter="filter-parties">
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
<div class="esg-entry-media"><img src="../wp-content/uploads/2015/07/sub/BABIES PLANET/kids party.jpg" alt=""></div>

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
<div class="esg-entry-media"><img src="../wp-content/uploads/2015/07/sub/BABIES PLANET/kids events.jpg" alt=""></div>

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
<div class="esg-entry-media"><img src="../wp-content/uploads/2015/07/sub/BABIES PLANET/kids theme party.jpg" alt=""></div>

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
<div class="esg-entry-media"><img src="../wp-content/uploads/2015/07/sub/CANDLE LIGHT DINNERS/candle light at 5 star.jpg" alt=""></div>

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
<div class="esg-entry-media"><img src="../wp-content/uploads/2015/07/sub/CANDLE LIGHT DINNERS/candle light at resort.jpg" alt=""></div>

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
<div class="esg-entry-media"><img src="../wp-content/uploads/2015/07/sub/CANDLE LIGHT DINNERS/proposal romantic.jpg" alt=""></div>

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
<div class="esg-entry-media"><img src="../wp-content/uploads/2015/07/sub/CORPORATE/incentive trips 1.png" alt=""></div>

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
<div class="esg-entry-media"><img src="../wp-content/uploads/2015/07/sub/CORPORATE/offsite.jpg" alt=""></div>

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
<div class="esg-entry-media"><img src="../wp-content/uploads/2015/07/sub/CUSTOMIZATION/customised-gifts-.jpg" alt=""></div>

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
<div class="esg-entry-media"><img src="../wp-content/uploads/2015/07/sub/CUSTOMIZATION/gift a fish.jpg" alt=""></div>

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
<div class="esg-entry-media"><img src="../wp-content/uploads/2015/07/sub/ELITE CLASS/elite class.jpg" alt=""></div>

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
<div class="esg-entry-media"><img src="../wp-content/uploads/2015/07/sub/ELITE CLASS/pool side candle light.jpg" alt=""></div>

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

<li class="filterall filter-gallery filter-baby-showers filter-birthdays eg-skinpersonal2-wrapper eg-post-id-1355" data-date="1446626983">
    <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
    <div class="esg-media-cover-wrapper">
            <!-- THE MEDIA OF THE ENTRY -->
<div class="esg-entry-media"><img src="../wp-content/uploads/2015/07/sub/HONEYMOON SPECIAL/HONEYMOON GIFTS FOR HIM & HER.jpg" alt=""></div>

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

<li class="filterall filter-gallery filter-baby-showers filter-birthdays eg-skinpersonal2-wrapper eg-post-id-1355" data-date="1446626983">
    <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
    <div class="esg-media-cover-wrapper">
            <!-- THE MEDIA OF THE ENTRY -->
<div class="esg-entry-media"><img src="../wp-content/uploads/2015/07/sub/HONEYMOON SPECIAL/honeymoon decor.jpg" alt=""></div>

            <!-- THE CONTENT OF THE ENTRY -->
            <div class="esg-entry-cover">

                <!-- THE COLORED OVERLAY -->
                <div class="esg-overlay esg-fade eg-skinpersonal2-container" data-delay="0"></div>

              <div class="esg-center eg-skinpersonal2-element-8 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
				<div class="esg-center eg-post-1355 eg-skinpersonal2-element-1-a esg-fade" data-delay="0.1"><a class="eg-skinpersonal2-element-1 eg-post-1355" href="../plannig-childrens-parties-2/index.html" target="_self"><i class="eg-icon-plus"></i></a></div>
              <div class="esg-center eg-skinpersonal2-element-9 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
           </div><!-- END OF THE CONTENT IN THE ENTRY -->
   </div><!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->

</li>

<li class="filterall filter-gallery filter-baby-showers filter-birthdays eg-skinpersonal2-wrapper eg-post-id-1355" data-date="1446626983">
    <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
    <div class="esg-media-cover-wrapper">
            <!-- THE MEDIA OF THE ENTRY -->
<div class="esg-entry-media"><img src="../wp-content/uploads/2015/07/sub/HUBBYS BIG DAY BDAY/balloon surprise for him.jpg" alt=""></div>

            <!-- THE CONTENT OF THE ENTRY -->
            <div class="esg-entry-cover">

                <!-- THE COLORED OVERLAY -->
                <div class="esg-overlay esg-fade eg-skinpersonal2-container" data-delay="0"></div>

              <div class="esg-center eg-skinpersonal2-element-8 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
				<div class="esg-center eg-post-1355 eg-skinpersonal2-element-1-a esg-fade" data-delay="0.1"><a class="eg-skinpersonal2-element-1 eg-post-1355" href="../plannig-childrens-parties-2/index.html" target="_self"><i class="eg-icon-plus"></i></a></div>
              <div class="esg-center eg-skinpersonal2-element-9 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
           </div><!-- END OF THE CONTENT IN THE ENTRY -->
   </div><!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->

</li>

<li class="filterall filter-gallery filter-baby-showers filter-birthdays eg-skinpersonal2-wrapper eg-post-id-1355" data-date="1446626983">
    <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
    <div class="esg-media-cover-wrapper">
            <!-- THE MEDIA OF THE ENTRY -->
<div class="esg-entry-media"><img src="../wp-content/uploads/2015/07/sub/HUBBYS BIG DAY BDAY/private dinner.jpg" alt=""></div>

            <!-- THE CONTENT OF THE ENTRY -->
            <div class="esg-entry-cover">

                <!-- THE COLORED OVERLAY -->
                <div class="esg-overlay esg-fade eg-skinpersonal2-container" data-delay="0"></div>

              <div class="esg-center eg-skinpersonal2-element-8 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
				<div class="esg-center eg-post-1355 eg-skinpersonal2-element-1-a esg-fade" data-delay="0.1"><a class="eg-skinpersonal2-element-1 eg-post-1355" href="../plannig-childrens-parties-2/index.html" target="_self"><i class="eg-icon-plus"></i></a></div>
              <div class="esg-center eg-skinpersonal2-element-9 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
           </div><!-- END OF THE CONTENT IN THE ENTRY -->
   </div><!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->

</li>

<li class="filterall filter-gallery filter-baby-showers filter-birthdays eg-skinpersonal2-wrapper eg-post-id-1355" data-date="1446626983">
    <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
    <div class="esg-media-cover-wrapper">
            <!-- THE MEDIA OF THE ENTRY -->
<div class="esg-entry-media"><img src="../wp-content/uploads/2015/07/sub/PARTIES PLANET/FESTIVE PARTIES.jpg" alt=""></div>

            <!-- THE CONTENT OF THE ENTRY -->
            <div class="esg-entry-cover">

                <!-- THE COLORED OVERLAY -->
                <div class="esg-overlay esg-fade eg-skinpersonal2-container" data-delay="0"></div>

              <div class="esg-center eg-skinpersonal2-element-8 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
				<div class="esg-center eg-post-1355 eg-skinpersonal2-element-1-a esg-fade" data-delay="0.1"><a class="eg-skinpersonal2-element-1 eg-post-1355" href="../plannig-childrens-parties-2/index.html" target="_self"><i class="eg-icon-plus"></i></a></div>
              <div class="esg-center eg-skinpersonal2-element-9 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
           </div><!-- END OF THE CONTENT IN THE ENTRY -->
   </div><!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->

</li>

<li class="filterall filter-gallery filter-baby-showers filter-birthdays eg-skinpersonal2-wrapper eg-post-id-1355" data-date="1446626983">
    <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
    <div class="esg-media-cover-wrapper">
            <!-- THE MEDIA OF THE ENTRY -->
<div class="esg-entry-media"><img src="../wp-content/uploads/2015/07/sub/PARTIES PLANET/kittypartyHQ-1-1.jpeg" alt=""></div>

            <!-- THE CONTENT OF THE ENTRY -->
            <div class="esg-entry-cover">

                <!-- THE COLORED OVERLAY -->
                <div class="esg-overlay esg-fade eg-skinpersonal2-container" data-delay="0"></div>

              <div class="esg-center eg-skinpersonal2-element-8 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
				<div class="esg-center eg-post-1355 eg-skinpersonal2-element-1-a esg-fade" data-delay="0.1"><a class="eg-skinpersonal2-element-1 eg-post-1355" href="../plannig-childrens-parties-2/index.html" target="_self"><i class="eg-icon-plus"></i></a></div>
              <div class="esg-center eg-skinpersonal2-element-9 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
           </div><!-- END OF THE CONTENT IN THE ENTRY -->
   </div><!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->

</li>

<li class="filterall filter-gallery filter-baby-showers filter-birthdays eg-skinpersonal2-wrapper eg-post-id-1355" data-date="1446626983">
    <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
    <div class="esg-media-cover-wrapper">
            <!-- THE MEDIA OF THE ENTRY -->
<div class="esg-entry-media"><img src="../wp-content/uploads/2015/07/sub/SENIOR CITIZENS/budget candle light.jpg" alt=""></div>

            <!-- THE CONTENT OF THE ENTRY -->
            <div class="esg-entry-cover">

                <!-- THE COLORED OVERLAY -->
                <div class="esg-overlay esg-fade eg-skinpersonal2-container" data-delay="0"></div>

              <div class="esg-center eg-skinpersonal2-element-8 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
				<div class="esg-center eg-post-1355 eg-skinpersonal2-element-1-a esg-fade" data-delay="0.1"><a class="eg-skinpersonal2-element-1 eg-post-1355" href="../plannig-childrens-parties-2/index.html" target="_self"><i class="eg-icon-plus"></i></a></div>
              <div class="esg-center eg-skinpersonal2-element-9 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
           </div><!-- END OF THE CONTENT IN THE ENTRY -->
   </div><!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->

</li>

<li class="filterall filter-gallery filter-baby-showers filter-birthdays eg-skinpersonal2-wrapper eg-post-id-1355" data-date="1446626983">
    <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
    <div class="esg-media-cover-wrapper">
            <!-- THE MEDIA OF THE ENTRY -->
<div class="esg-entry-media"><img src="../wp-content/uploads/2015/07/sub/SENIOR CITIZENS/luxurios dining.jpg" alt=""></div>

            <!-- THE CONTENT OF THE ENTRY -->
            <div class="esg-entry-cover">

                <!-- THE COLORED OVERLAY -->
                <div class="esg-overlay esg-fade eg-skinpersonal2-container" data-delay="0"></div>

              <div class="esg-center eg-skinpersonal2-element-8 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
				<div class="esg-center eg-post-1355 eg-skinpersonal2-element-1-a esg-fade" data-delay="0.1"><a class="eg-skinpersonal2-element-1 eg-post-1355" href="../plannig-childrens-parties-2/index.html" target="_self"><i class="eg-icon-plus"></i></a></div>
              <div class="esg-center eg-skinpersonal2-element-9 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
           </div><!-- END OF THE CONTENT IN THE ENTRY -->
   </div><!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->

</li>

<li class="filterall filter-gallery filter-baby-showers filter-birthdays eg-skinpersonal2-wrapper eg-post-id-1355" data-date="1446626983">
    <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
    <div class="esg-media-cover-wrapper">
            <!-- THE MEDIA OF THE ENTRY -->
<div class="esg-entry-media"><img src="../wp-content/uploads/2015/07/sub/SNAPSHOT/COUPLE PHOTOSHOOT.jpg" alt=""></div>

            <!-- THE CONTENT OF THE ENTRY -->
            <div class="esg-entry-cover">

                <!-- THE COLORED OVERLAY -->
                <div class="esg-overlay esg-fade eg-skinpersonal2-container" data-delay="0"></div>

              <div class="esg-center eg-skinpersonal2-element-8 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
				<div class="esg-center eg-post-1355 eg-skinpersonal2-element-1-a esg-fade" data-delay="0.1"><a class="eg-skinpersonal2-element-1 eg-post-1355" href="../plannig-childrens-parties-2/index.html" target="_self"><i class="eg-icon-plus"></i></a></div>
              <div class="esg-center eg-skinpersonal2-element-9 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
           </div><!-- END OF THE CONTENT IN THE ENTRY -->
   </div><!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->

</li>

<li class="filterall filter-gallery filter-baby-showers filter-birthdays eg-skinpersonal2-wrapper eg-post-id-1355" data-date="1446626983">
    <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
    <div class="esg-media-cover-wrapper">
            <!-- THE MEDIA OF THE ENTRY -->
<div class="esg-entry-media"><img src="../wp-content/uploads/2015/07/sub/SNAPSHOT/family portrait photoshoot.jpg" alt=""></div>

            <!-- THE CONTENT OF THE ENTRY -->
            <div class="esg-entry-cover">

                <!-- THE COLORED OVERLAY -->
                <div class="esg-overlay esg-fade eg-skinpersonal2-container" data-delay="0"></div>

              <div class="esg-center eg-skinpersonal2-element-8 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
				<div class="esg-center eg-post-1355 eg-skinpersonal2-element-1-a esg-fade" data-delay="0.1"><a class="eg-skinpersonal2-element-1 eg-post-1355" href="../plannig-childrens-parties-2/index.html" target="_self"><i class="eg-icon-plus"></i></a></div>
              <div class="esg-center eg-skinpersonal2-element-9 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
           </div><!-- END OF THE CONTENT IN THE ENTRY -->
   </div><!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->

</li>

<li class="filterall filter-gallery filter-baby-showers filter-birthdays eg-skinpersonal2-wrapper eg-post-id-1355" data-date="1446626983">
    <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
    <div class="esg-media-cover-wrapper">
            <!-- THE MEDIA OF THE ENTRY -->
<div class="esg-entry-media"><img src="../wp-content/uploads/2015/07/sub/SURPRISE JUNCTION/forgiveness.jpg" alt=""></div>

            <!-- THE CONTENT OF THE ENTRY -->
            <div class="esg-entry-cover">

                <!-- THE COLORED OVERLAY -->
                <div class="esg-overlay esg-fade eg-skinpersonal2-container" data-delay="0"></div>

              <div class="esg-center eg-skinpersonal2-element-8 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
				<div class="esg-center eg-post-1355 eg-skinpersonal2-element-1-a esg-fade" data-delay="0.1"><a class="eg-skinpersonal2-element-1 eg-post-1355" href="../plannig-childrens-parties-2/index.html" target="_self"><i class="eg-icon-plus"></i></a></div>
              <div class="esg-center eg-skinpersonal2-element-9 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
           </div><!-- END OF THE CONTENT IN THE ENTRY -->
   </div><!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->

</li>

<li class="filterall filter-gallery filter-baby-showers filter-birthdays eg-skinpersonal2-wrapper eg-post-id-1355" data-date="1446626983">
    <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
    <div class="esg-media-cover-wrapper">
            <!-- THE MEDIA OF THE ENTRY -->
<div class="esg-entry-media"><img src="../wp-content/uploads/2015/07/sub/SURPRISE JUNCTION/proposal.jpg" alt=""></div>

            <!-- THE CONTENT OF THE ENTRY -->
            <div class="esg-entry-cover">

                <!-- THE COLORED OVERLAY -->
                <div class="esg-overlay esg-fade eg-skinpersonal2-container" data-delay="0"></div>

              <div class="esg-center eg-skinpersonal2-element-8 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
				<div class="esg-center eg-post-1355 eg-skinpersonal2-element-1-a esg-fade" data-delay="0.1"><a class="eg-skinpersonal2-element-1 eg-post-1355" href="../plannig-childrens-parties-2/index.html" target="_self"><i class="eg-icon-plus"></i></a></div>
              <div class="esg-center eg-skinpersonal2-element-9 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
           </div><!-- END OF THE CONTENT IN THE ENTRY -->
   </div><!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->

</li>

<li class="filterall filter-gallery filter-baby-showers filter-birthdays eg-skinpersonal2-wrapper eg-post-id-1355" data-date="1446626983">
    <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
    <div class="esg-media-cover-wrapper">
            <!-- THE MEDIA OF THE ENTRY -->
<div class="esg-entry-media"><img src="../wp-content/uploads/2015/07/sub/SWEET HOME SURPRISES/dream world.jpg" alt=""></div>

            <!-- THE CONTENT OF THE ENTRY -->
            <div class="esg-entry-cover">

                <!-- THE COLORED OVERLAY -->
                <div class="esg-overlay esg-fade eg-skinpersonal2-container" data-delay="0"></div>

              <div class="esg-center eg-skinpersonal2-element-8 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
				<div class="esg-center eg-post-1355 eg-skinpersonal2-element-1-a esg-fade" data-delay="0.1"><a class="eg-skinpersonal2-element-1 eg-post-1355" href="../plannig-childrens-parties-2/index.html" target="_self"><i class="eg-icon-plus"></i></a></div>
              <div class="esg-center eg-skinpersonal2-element-9 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
           </div><!-- END OF THE CONTENT IN THE ENTRY -->
   </div><!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->

</li>

<li class="filterall filter-gallery filter-baby-showers filter-birthdays eg-skinpersonal2-wrapper eg-post-id-1355" data-date="1446626983">
    <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
    <div class="esg-media-cover-wrapper">
            <!-- THE MEDIA OF THE ENTRY -->
<div class="esg-entry-media"><img src="../wp-content/uploads/2015/07/sub/SWEET HOME SURPRISES/midnight surprise 1.jpg" alt=""></div>

            <!-- THE CONTENT OF THE ENTRY -->
            <div class="esg-entry-cover">

                <!-- THE COLORED OVERLAY -->
                <div class="esg-overlay esg-fade eg-skinpersonal2-container" data-delay="0"></div>

              <div class="esg-center eg-skinpersonal2-element-8 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
				<div class="esg-center eg-post-1355 eg-skinpersonal2-element-1-a esg-fade" data-delay="0.1"><a class="eg-skinpersonal2-element-1 eg-post-1355" href="../plannig-childrens-parties-2/index.html" target="_self"><i class="eg-icon-plus"></i></a></div>
              <div class="esg-center eg-skinpersonal2-element-9 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
           </div><!-- END OF THE CONTENT IN THE ENTRY -->
   </div><!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->

</li>

<li class="filterall filter-gallery filter-baby-showers filter-birthdays eg-skinpersonal2-wrapper eg-post-id-1355" data-date="1446626983">
    <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
    <div class="esg-media-cover-wrapper">
            <!-- THE MEDIA OF THE ENTRY -->
<div class="esg-entry-media"><img src="../wp-content/uploads/2015/07/sub/UNIQUE ACTIVITIES/couple events.jpg" alt=""></div>

            <!-- THE CONTENT OF THE ENTRY -->
            <div class="esg-entry-cover">

                <!-- THE COLORED OVERLAY -->
                <div class="esg-overlay esg-fade eg-skinpersonal2-container" data-delay="0"></div>

              <div class="esg-center eg-skinpersonal2-element-8 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
				<div class="esg-center eg-post-1355 eg-skinpersonal2-element-1-a esg-fade" data-delay="0.1"><a class="eg-skinpersonal2-element-1 eg-post-1355" href="../plannig-childrens-parties-2/index.html" target="_self"><i class="eg-icon-plus"></i></a></div>
              <div class="esg-center eg-skinpersonal2-element-9 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
           </div><!-- END OF THE CONTENT IN THE ENTRY -->
   </div><!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->

</li>

<li class="filterall filter-gallery filter-baby-showers filter-birthdays eg-skinpersonal2-wrapper eg-post-id-1355" data-date="1446626983">
    <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
    <div class="esg-media-cover-wrapper">
            <!-- THE MEDIA OF THE ENTRY -->
<div class="esg-entry-media"><img src="../wp-content/uploads/2015/07/sub/UNIQUE ACTIVITIES/old age home.jpg" alt=""></div>

            <!-- THE CONTENT OF THE ENTRY -->
            <div class="esg-entry-cover">

                <!-- THE COLORED OVERLAY -->
                <div class="esg-overlay esg-fade eg-skinpersonal2-container" data-delay="0"></div>

              <div class="esg-center eg-skinpersonal2-element-8 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
				<div class="esg-center eg-post-1355 eg-skinpersonal2-element-1-a esg-fade" data-delay="0.1"><a class="eg-skinpersonal2-element-1 eg-post-1355" href="../plannig-childrens-parties-2/index.html" target="_self"><i class="eg-icon-plus"></i></a></div>
              <div class="esg-center eg-skinpersonal2-element-9 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
           </div><!-- END OF THE CONTENT IN THE ENTRY -->
   </div><!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->

</li>

<li class="filterall filter-gallery filter-baby-showers filter-birthdays eg-skinpersonal2-wrapper eg-post-id-1355" data-date="1446626983">
    <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
    <div class="esg-media-cover-wrapper">
            <!-- THE MEDIA OF THE ENTRY -->
<div class="esg-entry-media"><img src="../wp-content/uploads/2015/07/sub/WEDDING SPECIAL/HENS PARTY 1.jpg" alt=""></div>

            <!-- THE CONTENT OF THE ENTRY -->
            <div class="esg-entry-cover">

                <!-- THE COLORED OVERLAY -->
                <div class="esg-overlay esg-fade eg-skinpersonal2-container" data-delay="0"></div>

              <div class="esg-center eg-skinpersonal2-element-8 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
				<div class="esg-center eg-post-1355 eg-skinpersonal2-element-1-a esg-fade" data-delay="0.1"><a class="eg-skinpersonal2-element-1 eg-post-1355" href="../plannig-childrens-parties-2/index.html" target="_self"><i class="eg-icon-plus"></i></a></div>
              <div class="esg-center eg-skinpersonal2-element-9 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
           </div><!-- END OF THE CONTENT IN THE ENTRY -->
   </div><!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->

</li>

<li class="filterall filter-gallery filter-baby-showers filter-birthdays eg-skinpersonal2-wrapper eg-post-id-1355" data-date="1446626983">
    <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
    <div class="esg-media-cover-wrapper">
            <!-- THE MEDIA OF THE ENTRY -->
<div class="esg-entry-media"><img src="../wp-content/uploads/2015/07/sub/WEDDING SPECIAL/PRE WEDDING SHOOT.jpg" alt=""></div>

            <!-- THE CONTENT OF THE ENTRY -->
            <div class="esg-entry-cover">

                <!-- THE COLORED OVERLAY -->
                <div class="esg-overlay esg-fade eg-skinpersonal2-container" data-delay="0"></div>

              <div class="esg-center eg-skinpersonal2-element-8 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
				<div class="esg-center eg-post-1355 eg-skinpersonal2-element-1-a esg-fade" data-delay="0.1"><a class="eg-skinpersonal2-element-1 eg-post-1355" href="../plannig-childrens-parties-2/index.html" target="_self"><i class="eg-icon-plus"></i></a></div>
              <div class="esg-center eg-skinpersonal2-element-9 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
           </div><!-- END OF THE CONTENT IN THE ENTRY -->
   </div><!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->

</li>

<li class="filterall filter-gallery filter-baby-showers filter-birthdays eg-skinpersonal2-wrapper eg-post-id-1355" data-date="1446626983">
    <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
    <div class="esg-media-cover-wrapper">
            <!-- THE MEDIA OF THE ENTRY -->
<div class="esg-entry-media"><img src="../wp-content/uploads/2015/07/sub/WEEKEND GATEWAYS/baaghaan.jpg" alt=""></div>

            <!-- THE CONTENT OF THE ENTRY -->
            <div class="esg-entry-cover">

                <!-- THE COLORED OVERLAY -->
                <div class="esg-overlay esg-fade eg-skinpersonal2-container" data-delay="0"></div>

              <div class="esg-center eg-skinpersonal2-element-8 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
				<div class="esg-center eg-post-1355 eg-skinpersonal2-element-1-a esg-fade" data-delay="0.1"><a class="eg-skinpersonal2-element-1 eg-post-1355" href="../plannig-childrens-parties-2/index.html" target="_self"><i class="eg-icon-plus"></i></a></div>
              <div class="esg-center eg-skinpersonal2-element-9 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
           </div><!-- END OF THE CONTENT IN THE ENTRY -->
   </div><!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->

</li>

<li class="filterall filter-gallery filter-baby-showers filter-birthdays eg-skinpersonal2-wrapper eg-post-id-1355" data-date="1446626983">
    <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
    <div class="esg-media-cover-wrapper">
            <!-- THE MEDIA OF THE ENTRY -->
<div class="esg-entry-media"><img src="../wp-content/uploads/2015/07/sub/WEEKEND GATEWAYS/vrindvan.jpg" alt=""></div>

            <!-- THE CONTENT OF THE ENTRY -->
            <div class="esg-entry-cover">

                <!-- THE COLORED OVERLAY -->
                <div class="esg-overlay esg-fade eg-skinpersonal2-container" data-delay="0"></div>

              <div class="esg-center eg-skinpersonal2-element-8 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
				<div class="esg-center eg-post-1355 eg-skinpersonal2-element-1-a esg-fade" data-delay="0.1"><a class="eg-skinpersonal2-element-1 eg-post-1355" href="../plannig-childrens-parties-2/index.html" target="_self"><i class="eg-icon-plus"></i></a></div>
              <div class="esg-center eg-skinpersonal2-element-9 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
           </div><!-- END OF THE CONTENT IN THE ENTRY -->
   </div><!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->

</li>

<li class="filterall filter-gallery filter-baby-showers filter-birthdays eg-skinpersonal2-wrapper eg-post-id-1355" data-date="1446626983">
    <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
    <div class="esg-media-cover-wrapper">
            <!-- THE MEDIA OF THE ENTRY -->
<div class="esg-entry-media"><img src="../wp-content/uploads/2015/07/sub/WIFEYS BIG DAY BDAY/surprise box 1.png" alt=""></div>

            <!-- THE CONTENT OF THE ENTRY -->
            <div class="esg-entry-cover">

                <!-- THE COLORED OVERLAY -->
                <div class="esg-overlay esg-fade eg-skinpersonal2-container" data-delay="0"></div>

              <div class="esg-center eg-skinpersonal2-element-8 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
				<div class="esg-center eg-post-1355 eg-skinpersonal2-element-1-a esg-fade" data-delay="0.1"><a class="eg-skinpersonal2-element-1 eg-post-1355" href="../plannig-childrens-parties-2/index.html" target="_self"><i class="eg-icon-plus"></i></a></div>
              <div class="esg-center eg-skinpersonal2-element-9 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
           </div><!-- END OF THE CONTENT IN THE ENTRY -->
   </div><!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->

</li>

<li class="filterall filter-gallery filter-baby-showers filter-birthdays eg-skinpersonal2-wrapper eg-post-id-1355" data-date="1446626983">
    <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
    <div class="esg-media-cover-wrapper">
            <!-- THE MEDIA OF THE ENTRY -->
<div class="esg-entry-media"><img src="../wp-content/uploads/2015/07/sub/WIFEYS BIG DAY BDAY/musical romantic date 1.jpg" alt=""></div>

            <!-- THE CONTENT OF THE ENTRY -->
            <div class="esg-entry-cover">

                <!-- THE COLORED OVERLAY -->
                <div class="esg-overlay esg-fade eg-skinpersonal2-container" data-delay="0"></div>

              <div class="esg-center eg-skinpersonal2-element-8 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
				<div class="esg-center eg-post-1355 eg-skinpersonal2-element-1-a esg-fade" data-delay="0.1"><a class="eg-skinpersonal2-element-1 eg-post-1355" href="../plannig-childrens-parties-2/index.html" target="_self"><i class="eg-icon-plus"></i></a></div>
              <div class="esg-center eg-skinpersonal2-element-9 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
           </div><!-- END OF THE CONTENT IN THE ENTRY -->
   </div><!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->

</li>
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
</div></div></div></div></div></div><div class="vc_row-full-width"></div>
<!---<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1446032902066"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="sc_content content_wrap" style="padding-bottom:1em;"><h2 class="sc_title sc_title_underline sc_align_center margin_top_small margin_bottom_tiny" style="text-align:center;">Testimonials</h2><h6 class="sc_title sc_title_style1 sc_align_center margin_bottom_large" style="text-align:center;"><span class="sc_title_style1_before"></span>Happy clients about us<span class="sc_title_style1_after"></span></h6><div id="sc_testimonials_131665043" class="sc_testimonials sc_testimonials_style_testimonials-1  sc_slider_swiper swiper-slider-container sc_slider_nopagination sc_slider_controls sc_slider_controls_bottom margin_bottom_medium" data-interval="70000" data-slides-per-view="3" style="width:100%;"><div class="slides swiper-wrapper"><div class="swiper-slide" data-style="width:100%;" style="width:100%;">			<div id="sc_testimonials_131665043_1" class="sc_testimonial_item">
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
		</div></div><div class="sc_slider_controls_wrap"><a class="sc_slider_prev" href="#"></a><a class="sc_slider_next" href="#"></a></div><div class="sc_slider_pagination_wrap"></div></div></div></div></div></div></div>--->
<!---<div class="vc_row-full-width"></div>--->

                <!-- packege will strats from here-->
                <div class="pak_bar">
                    <div class="contaner">
                        <div class="bar_packeig">
                            <h2 style="margin-top: 4%;">Most admired packages</h2>
                        </div>
                        <!--<div class="packig_list">
                            <ul>
                                <li><a href="booking-detail.php?id=1352246e33277e9d3c9090a434fa72cfa6536ae2">Proposals</a></li>
                                <li><a href="booking-detail.php?id=80e28a51cbc26fa4bd34938c5e593b36146f5e0c">Hens party</a></li>
                                <li><a href="booking-detail.php?id=c097638f92de80ba8d6c696b26e6e601a5f61eb7">Flower decoration</a></li>
                                <li><a href="booking-detail.php?id=1f1362ea41d1bc65be321c0a378a20159f9a26d0">Dream world</a></li>
                                <li><a href="booking-detail.php?id=35e995c107a71caeb833bb3b79f9f54781b33fa1">Lovers paradise</a></li>
                                <li><a href="booking-detail.php?id=cb7a1d775e800fd1ee4049f7dca9e041eb9ba083">Balloon surprise</a></li>
                                <li><a href="booking-detail.php?id=92cfceb39d57d914ed8b14d0e37643de0797ae56">Movie planet</a></li>
                                <li><a href="booking-detail.php?id=76546f9a641ede2beab506b96df1688d889e629a">Lanterns surprise</a></li>
                            </ul>
                        </div>-->
                    </div>
                </div>

                <?php
                include "standard.php";
                ?>



<div class="testimonial_bar">
<div class="container">
<div class="title_bar">
<h2 style="margin-top: 6%;">Testimonial</h2>
</div>
<div class="row bot">
<div class="col-md-2">
<div class="tes_bar_img">
<img src="../wp-content/uploads/2015/07/people.png"  />
</div>
</div>

<div class="col-md-10">
<div class="tit_bar_con">
<h4>Saujanya Kumar</h4>
</div>
<div class="tit_bar">
<p>I called up eventiana representative in september , regarding an inquiry about my anniversary,I wanted to celebrate. I spoke to an executive named Mr. Suraj and was pleased to talk to him as he was really polite and very helpful. He answered all my queries with ease and showed very good and positive eagerness to answer all my questions regarding my events. He helped mein the best way he could.</p>
<p>I have called many event companies for the same but I got the best response from your company. I am very happy with the way your employees are working and handling all guests. I am really amazed with your quick services.</p>
</div>
</div>
</div>

<div class="row bot">
<div class="col-md-2">
<div class="tes_bar_img">
<img src="../wp-content/uploads/2015/07/people.png"  />
</div>
</div>

<div class="col-md-10">
<div class="tit_bar_con">
<h4>Gaurav Bhatnagar </h4>
</div>
<div class="tit_bar">
<p>I would like to thank suraj & prachi for designing such a wonderful candle light dinner. It was a great and well-arranged night out event. I shall surely recommend you to all my kin and friends.The best part of the event was live guitarist and decoration.It was really beautiful than other stay arrangements in delhi. The concept of theme restaurants and large variety of dishes offered in dinner truly made for a memorable night.</p>
</div>
</div>
</div>

<div class="row bot">
<div class="col-md-2">
<div class="tes_bar_img">
<img src="../wp-content/uploads/2015/07/people.png"  />
</div>
</div>

<div class="col-md-10">
<div class="tit_bar_con">
<h4>Shubhangini Saxena</h4>
</div>
<div class="tit_bar">
<p>We are very thankful to Miss. monica for the well-arranged birthday celebration of my husband in a star studed hotel with multi color baloon decoration, flameless candles, ribbons, flower petals spread on bed to create an amazing romantic ambience. We really enjoyed it. The pool side arrangements was incredible with professional live guitarist on the chosen romantic songs.The dinner was delicious with customized menu.It was best in everything including staying hotel. We also enjoyed the luxury pick and drop services to the hotel with a nice and well mannered driver.</p>
<p>Overall we would like to say that you sewed a memory for us on this day. Further to the add-on charges of the event in which you arranged for us was also very cheap and reasonable.Hence I thank you from the bottom of my heart that you arranged best hubby birthday for me.</p>
</div>
</div>
</div>

<div class="row bot">
<div class="col-md-2">
<div class="tes_bar_img">
<img src="../wp-content/uploads/2015/07/IMG-20170911-WA0008.jpg"  />
</div>
</div>

<div class="col-md-10">
<div class="tit_bar_con">
<h4>Pooja Tiwari</h4>
</div>
<div class="tit_bar">
<p>Beyond a shadow of a doubt this year's birthday celebration was the best one. From the perfect decoration to the carefully chosen  menu it was obvious to all who joined that you had put in great time and effort into making this event a fun-filled experience.</p>
<p>We wanted to take this opportunity to thank you for the wonderful (Event name), as well as for all of the time and effort that you put into working on the smallest details. We appreciate the personalized and genuine interest that you show for your clients and we will  look forward to work with you again. Thank you again for a such a seamless & memorable experience.</p>
</div>
</div>
</div>

<div class="row bot">
<div class="col-md-2">
<div class="tes_bar_img">
<img src="../wp-content/uploads/2015/07/IMG-20170911-WA0007.jpg"  />
</div>
</div>

<div class="col-md-10">
<div class="tit_bar_con">
<h4>Jayanti Varghese</h4>
</div>
<div class="tit_bar">
<p>Thank you so much for going extra miles to make our event so enjoyable - we could have not done it without you!  We look forward to get associated with you again soon. Keep up the great work. </p>
</div>
</div>
</div>

<div class="row bot">
<div class="col-md-2">
<div class="tes_bar_img">
<img src="../wp-content/uploads/2015/07/IMG-20170911-WA0006.jpg"  />
</div>
</div>

<div class="col-md-10">
<div class="tit_bar_con">
<h4>Rupam Sharma</h4>
</div>
<div class="tit_bar">
<p>Thank you so much for all of your planning, organizing, and coordinating!!!  You were so great to work with! Thank you so much for all of your hard work! </p>
</div>
</div>
</div>


</div>
</div>




<div id="form-parallax" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1491130410090" style="background: #f62f74 !important;">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner "><div class="wpb_wrapper">
                <div class="sc_content content_wrap">
                    <h2 class="sc_title sc_title_underline sc_align_center margin_top_small margin_bottom_tiny" style="text-align:center;color:#fff;">Online Request</h2>
                    <h6 class="sc_title sc_title_style1 sc_align_center margin_bottom_huge" style="text-align:center;color: #ffffff !important; margin-top: -23px;font-family: "Vidaloka", serif;">
                    <span class="sc_title_style1_before" style="background-color: #ffffff"></span>Drop us a few lines<span class="sc_title_style1_after" style="background-color: #ffffff"></span></h6>
                    <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2" style="text-align:center;">
                        <div class="column-1_2 sc_column_item sc_column_item_1 odd first" style="text-align:center;">
                            <div  id="sc_form_327850779_wrap" class="sc_form_wrap" style="margin-top: -70px;">
                                <div  id="sc_form_327850779" class="sc_form sc_form_style_form_1 aligncenter margin_bottom_huge">
                                    <form  id="sc_form_327850779" data-formtype="form_1" method="post" action="http://unicaevents.ancorathemes.com/wp-admin/admin-ajax.php">
			<div class="sc_form_info">
			<div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2">
				<div class="column-1_2 sc_column_item sc_column_item_1">
                    <div class="sc_form_item sc_form_field label_over">
                        <label class="required" for="sc_form_username">Name:</label>
                        <input id="sc_form_username" type="text" name="username" placeholder="Name:"></div></div>
				<div class="column-1_2 sc_column_item sc_column_item_2"><div class="sc_form_item sc_form_field label_over">
                        <label class="required" for="sc_form_phone">Phone:</label><input id="sc_form_phone" type="text" name="phone" placeholder="Phone:"></div></div>
			</div>
			</div>
			<div class="sc_form_item sc_form_message label_over">
                <label class="required" for="sc_form_message">Message</label>
                <textarea id="sc_form_message" name="message" placeholder="Message:"></textarea></div>
			<div class="sc_form_item sc_form_button"><button>send</button></div>
			<div class="result sc_infobox"></div>
		</form>
		</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                <div class="vc_row-full-width"></div>
                <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1446045661779">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner "><div class="wpb_wrapper">
                                <div class="sc_content content_wrap margin_top_huge margin_bottom_large">
                                    <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_4 contact-row ">
                                        <div class="column-1_4 sc_column_item sc_column_item_1 odd first">
                                            <div class="sc_section"><div class="sc_section_inner">
                                                    <span class="sc_icon icon-contacts_icon1 aligncenter" style="font-size:2.35em; line-height: 1em;color:#fff;"></span><h6 class="sc_title sc_title_regular sc_align_center" style="text-align:center;">Postal Address</h6>
	<div class="wpb_text_column wpb_content_element even_bar" >
		<div class="wpb_wrapper">
			<p style="text-align: center;">Eventiana<br />
B-1225,GD Colony,Mayur Vihar Phase-III,Delhi-110096</p>

		</div>
	</div>
</div></div></div><div class="column-1_4 sc_column_item sc_column_item_2 even"><div class="sc_section"><div class="sc_section_inner"><span class="sc_icon icon-contacts_icon2 aligncenter" style="font-size:2.35em; line-height: 1em;color:#fff;"></span><h6 class="sc_title sc_title_regular sc_align_center" style="text-align:center;">Phone &amp; E-mail</h6>
	<div class="wpb_text_column wpb_content_element even_bar" >
		<div class="wpb_wrapper">
			<p style="text-align: center;">Phone: +91 9999874701</p>
            <p style="text-align: center;">Email: info@eventiana.com</p>

		</div>
	</div>
</div></div></div><div class="column-1_4 sc_column_item sc_column_item_3 odd"><div class="sc_section"><div class="sc_section_inner"><span class="sc_icon icon-contacts_icon3 aligncenter" style="font-size:2.35em; line-height: 1em;color:#fff;"></span><h6 class="sc_title sc_title_regular sc_align_center" style="text-align:center;">Open Hours</h6>
	<div class="wpb_text_column wpb_content_element even_bar" >
		<div class="wpb_wrapper">
			<p style="text-align: center;">Monday – Sunday<br />
8.00 am – 11.00 pm<br />
</p>

		</div>
	</div>
</div></div></div><div class="column-1_4 sc_column_item sc_column_item_4 even"><div class="sc_section"><div class="sc_section_inner"><span class="sc_icon icon-contacts_icon4 aligncenter" style="font-size:2.35em; line-height: 1em;color:#fff;"></span><h6 class="sc_title sc_title_regular sc_align_center" style="text-align:center;">Sessions</h6>
	<div class="wpb_text_column wpb_content_element even_bar" >
		<div class="wpb_wrapper">
			<p style="text-align: center;">Mornings, 8 am – 11 pm<br /></p>

		</div>
	</div>
</div></div></div></div></div></div></div></div></div><div class="vc_row-full-width"></div></section> <!-- </section> class="post_content" itemprop="articleBody"> --></article> <!-- </article> class="itemscope post_item post_item_single post_featured_center post_format_standard post-1097 page type-page status-publish hentry" itemscope itemtype="http://schema.org/Article"> -->	<section class="related_wrap related_wrap_empty"></section>
	</div> <!-- </div> class="content"> --></div> <!-- </div> class="content_wrap"> -->			
			</div>		<!-- </.page_content_wrap> -->

<div id="myModalfinal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content" style="width: 150%;margin-left: -10%; background: #f62f74;">
            <div class="modal-header" style="height:auto;">
                <button type="button" class="close" data-dismiss="modal" style="font-size: 62px;color: black;">&times;</button>
                <h4 class="modal-title" style="text-align: center;margin-top: 4%; margin-bottom: 4%;">
                    <p style="color: white; font-size: 32px;">Need Help With Planning a Surprise?</p>
                    <p style="color: white; font-size: 25px;">Just Leave Your details below</p>
                </h4>
            </div>
            <div class="modal-body">
                <form method="post" action="#" class="form-group">

                    <input type="text" name="name" id="name" class="form-control" placeholder="Name" style="padding: 22px;font-size: 18px;margin-top: 0px;">
                    <input type="text" name="email" id="email" class="form-control" placeholder="Email" style="padding: 22px; font-size: 18px; margin-top: 16px;">
                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone" style="padding: 22px; font-size: 18px; margin-top: 16px;">
                    <input type="text" name="occasion" id="occasion" class="form-control" placeholder="Occasion(Anniversary,Birthday,Parents'Anniversary etc.)" style="padding: 22px; font-size: 18px; margin-top: 16px;">
                    <input type="text" name="date" id="date" class="form-control" placeholder="When's the Occasion?(Date)" style="padding: 22px; font-size: 18px; margin-top: 16px;">
                    <button type="submit" name="sub" placeholder="CONTACT ME" class="btn btn-danger" style="margin-top: 7%;float: left;margin-left: 41%;padding: 9px;font-size:medium;">CONTACT ME</button>
                </form>

            </div>
            <div class="modal-footer" style="background:white;">

            </div>
        </div>

    </div>
</div>
<?php
if(isset($_POST['sub'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $occasion=$_POST['occasion'];
    $date=$_POST['date'];
    $sql="INSERT INTO `help_tbl` (`id`, `name`, `email`, `phon`, `occasion`, `date`) VALUES ('', '$name', '$email', '$phone', '$occasion', '$date');";
    $res=mysqli_query($mysqli,$sql);
    if($res){
        echo "<script>alert('We will Contact You soon')</script>";
    }else{
        echo "<script>alert('Something Went Wrong')</script>";
    }
}
?>
<?php include('footer.php');?>