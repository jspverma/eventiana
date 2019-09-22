
<?php 
error_reporting(0);
session_start();
include('../detabase/admin_confi.php');
?>
<style type="text/css">
#slide-4-layer-4 {
	font-size: 16px !important;
	color: #f62f74;
	position: relative;
	top: -126px;
}
</style>
<section class="slider_wrap slider_fullwide slider_engine_revo slider_alias_homepage1">
			<link href="http://fonts.googleapis.com/css?family=Vidaloka:400|Open+Sans:400|Montserrat:700" rel="stylesheet" property="stylesheet" type="text/css" media="all">
<div id="rev_slider_2_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
<!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
	<div id="rev_slider_2_1" class="rev_slider fullwidthabanner tp-overflow-hidden" style="display:none" data-version="5.4.1">
<ul>	<!-- SLIDE  -->

 <?php
                        $sql = "SELECT * FROM slider_tbl";
                        if ($fetchRecord = $mysqli->query($sql)) {
                            if ($fetchRecord->num_rows > 0) {
                                $counter = 0;
								$slider_id=4;
                                while ($row = $fetchRecord->fetch_array()) {
                                    $counter++;
									
                                    $row[1]=ucfirst("$row[1]");?>
	<li data-index="<?php echo "rs-".$slider_id; ?>" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="http://unicaevents.ancorathemes.com/wp-content/uploads/2015/10/Layer-81-100x50.jpg"  data-delay="10000"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
		<!-- MAIN IMAGE -->
		<img src='../admin/<?php echo $row['slider_imag']; ?>'  alt="" title="Layer-81"  width="1920" height="820" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
		<!-- LAYERS -->

		<!-- LAYER NR. 1 -->
		<div class="tp-caption   rs-parallaxlevel-2" 
			 id="<?php echo "slide-".$slider_id."-layer-1"; ?>"
			 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
			 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
						data-width="none"
			data-height="none"
			data-whitespace="nowrap"
 
			data-type="image" 
			data-responsive_offset="on" 
			data-responsive="off"
			data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
			data-textAlign="['center','center','center','center']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 5;"><img src="../wp-content/uploads/2015/10/conf.png" alt="" data-ww="['1465px','1465px','1465px','1465px']" data-hh="['920px','920px','920px','920px']" width="1465" height="950" data-no-retina> </div>

		<!-- LAYER NR. 2 -->
		<div class="tp-caption Big-title-yellow   tp-resizeme red_bar"
			 id="slide-4-layer-2" 
			 data-x="['center','center','center','center']" data-hoffset="['1','1','1','1']"
			 data-y="['middle','middle','middle','middle']" data-voffset="['-170','-170','-170','-170']" 
						data-width="none"
			data-height="none"
			data-whitespace="nowrap"
 
			data-type="text" 
			data-responsive_offset="on" 

			data-frames='[{"from":"y:-50px;opacity:0;","speed":800,"to":"o:1;","delay":800,"ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
			data-textAlign="['left','left','left','left']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 6; text-align: center !important; white-space: nowrap; color: rgb(255,252,95);">
            <?php echo wordwrap(trim($row['title']), 28, "<br />\n"); ?>
            <!--<div style="opacity: 0.6 !important; background-color: #000000; filter: alpha(opacity=60) !important;">
                <h4 style=""><?php /*echo wordwrap(trim($row['title']), 28, "<br />\n"); */?></h4>
            </div>-->

        </div>

		<!-- LAYER NR. 3 -->
		

		<!-- LAYER NR. 4 -->
		<div class="tp-caption pp Fashion-BigDisplay tp-resizeme"
			 id="<?php echo "slide-".$slider_id."-layer-1"; ?>" 
			 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
			 data-y="['middle','middle','middle','middle']" data-voffset="['107','107','107','107']"
             data-width="none"
			data-height="none"
			data-whitespace="nowrap"
 
			data-type="text" 
			data-responsive_offset="on" 

			data-frames='[{"from":"y:-50px;opacity:0;","speed":800,"to":"o:1;","delay":2000,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
			data-textAlign="['center','center','center','center']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 8; white-space: nowrap;">

                <p>
                    <?php echo wordwrap(trim($row['peragraph']), 80, "<br />\n"); ?>
                </p>



        </div>

		<!-- LAYER NR. 5 -->
		
	</li>
    
    <?php 
	$slider_id++;
 }

   }
      }
      ?>
	
</ul>
<script>var htmlDiv = document.getElementById("rs-plugin-settings-inline-css"); var htmlDivCss="";
						if(htmlDiv) {
							htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
						}else{
							var htmlDiv = document.createElement("div");
							htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
							document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
						}
					</script>
<div class="tp-bannertimer" style="height: 5px; background: rgba(0,0,0,0.15);"></div>	</div>
<script>var htmlDiv = document.getElementById("rs-plugin-settings-inline-css"); var htmlDivCss=".tp-caption.Fashion-BigDisplay,.Fashion-BigDisplay{color:rgba(255,255,255,1.00);font-size:15px;line-height:26px;font-weight:400;font-style:normal;font-family:Open Sans;text-decoration:none;background-color:transparent;border-color:transparent;border-style:none;border-width:0px;border-radius:0 0 0 0px;letter-spacing:2px}.tp-caption.Big-title-yellow,.Big-title-yellow{color:rgba(252,180,30,1.00);font-size:80px;line-height:80px;font-weight:400;font-style:normal;font-family:Vidaloka;text-decoration:none;background-color:transparent;border-color:transparent;border-style:none;border-width:0px;border-radius:0 0 0 0px;letter-spacing:2px}.tp-caption.Big-title,.Big-title{color:rgba(255,255,255,1.00);font-size:80px;line-height:80px;font-weight:400;font-style:normal;font-family:Vidaloka;text-decoration:none;background-color:transparent;border-color:transparent;border-style:none;border-width:0px;border-radius:0 0 0 0px;letter-spacing:2px}.tp-caption.Button,.Button{color:rgba(0,0,0,1.00);font-size:60px;line-height:60px;font-weight:900;font-style:normal;font-family:Raleway;text-decoration:none;background-color:transparent;border-color:transparent;border-style:none;border-width:0px;border-radius:0 0 0 0px;letter-spacing:2px}";
				if(htmlDiv) {
					htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
				}else{
					var htmlDiv = document.createElement("div");
					htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
					document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
				}
			</script>
		<script type="text/javascript">
						/******************************************
				-	PREPARE PLACEHOLDER FOR SLIDER	-
			******************************************/

			var setREVStartSize=function(){
				try{var e=new Object,i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;
					e.c = jQuery('#rev_slider_2_1');
					e.responsiveLevels = [1240,1024,778,480];
					e.gridwidth = [1920,1024,778,480];
					e.gridheight = [820,768,600,720];
							
					e.sliderLayout = "fullwidth";
					if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})
					
				}catch(d){console.log("Failure at Presize of Slider:"+d)}
			};
			
			setREVStartSize();
			
						var tpj=jQuery;
			
			var revapi2;
			tpj(document).ready(function() {
				if(tpj("#rev_slider_2_1").revolution == undefined){
					revslider_showDoubleJqueryError("#rev_slider_2_1");
				}else{
					revapi2 = tpj("#rev_slider_2_1").show().revolution({
						sliderType:"standard",
jsFileLocation:"//unicaevents.ancorathemes.com/wp-content/plugins/revslider/public/assets/js/",
						sliderLayout:"fullwidth",
						dottedOverlay:"none",
						delay:9000,
						navigation: {
							keyboardNavigation:"off",
							keyboard_direction: "horizontal",
							mouseScrollNavigation:"off",
 							mouseScrollReverse:"default",
							onHoverStop:"on",
							touch:{
								touchenabled:"on",
								touchOnDesktop:"off",
								swipe_threshold: 75,
								swipe_min_touches: 50,
								swipe_direction: "horizontal",
								drag_block_vertical: false
							}
							,
							arrows: {
								style:"bulletsandarrows",
								enable:true,
								hide_onmobile:true,
								hide_under:600,
								hide_onleave:true,
								hide_delay:200,
								hide_delay_mobile:1200,
								tmp:'',
								left: {
									h_align:"left",
									v_align:"center",
									h_offset:30,
									v_offset:0
								},
								right: {
									h_align:"right",
									v_align:"center",
									h_offset:30,
									v_offset:0
								}
							}
							,
							bullets: {
								enable:true,
								hide_onmobile:true,
								hide_under:600,
								style:"bulletsandarrows",
								hide_onleave:true,
								hide_delay:200,
								hide_delay_mobile:1200,
								direction:"horizontal",
								h_align:"center",
								v_align:"bottom",
								h_offset:0,
								v_offset:30,
								space:12,
								tmp:''
							}
						},
						responsiveLevels:[1240,1024,778,480],
						visibilityLevels:[1240,1024,778,480],
						gridwidth:[1920,1024,778,480],
						gridheight:[820,768,600,720],
						lazyType:"none",
						parallax: {
							type:"mouse",
							origo:"slidercenter",
							speed:2000,
							levels:[2,3,4,5,6,7,12,16,10,50,46,47,48,49,50,55],
						},
						shadow:0,
						spinner:"off",
						stopLoop:"off",
						stopAfterLoops:-1,
						stopAtSlide:-1,
						shuffle:"off",
						autoHeight:"off",
						hideThumbsOnMobile:"off",
						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						debugMode:false,
						fallbacks: {
							simplifyAll:"off",
							nextSlideOnWindowFocus:"off",
							disableFocusListener:false,
						}
					});
				}
			});	/*ready*/
		</script>
		<script>
					var htmlDivCss = unescape(".bulletsandarrows.tparrows%20%7B%0A%09cursor%3Apointer%3B%0A%09background%3A%23000%3B%0A%09background%3Argba%280%2C0%2C0%2C0.5%29%3B%0A%09width%3A40px%3B%0A%09height%3A40px%3B%0A%09position%3Aabsolute%3B%0A%09display%3Ablock%3B%0A%09z-index%3A100%3B%0A%20%20%20%20border-radius%3A%2050%25%3B%0A%7D%0A.bulletsandarrows.tparrows%3Ahover%20%7B%0A%09background%3A%23000%3B%0A%7D%0A.bulletsandarrows.tparrows%3Abefore%20%7B%0A%09font-family%3A%20%22revicons%22%3B%0A%09font-size%3A20px%3B%0A%09color%3A%23fff%3B%0A%09display%3Ablock%3B%0A%09line-height%3A%2040px%3B%0A%09text-align%3A%20center%3B%0A%7D%0A.bulletsandarrows.tparrows.tp-leftarrow%3Abefore%20%7B%0A%09content%3A%20%22%5Ce82c%22%3B%0A%20%20%20%20margin-left%3A-3px%3B%0A%7D%0A.bulletsandarrows.tparrows.tp-rightarrow%3Abefore%20%7B%0A%09content%3A%20%22%5Ce82d%22%3B%0A%20%20%20%20margin-right%3A-3px%3B%0A%7D%0A.bulletsandarrows.tp-bullets%20%7B%0A%7D%0A.bulletsandarrows.tp-bullets%3Abefore%20%7B%0A%09content%3A%22%20%22%3B%0A%09position%3Aabsolute%3B%0A%09height%3A100%25%3B%0A%09background%3Atransparent%3B%0A%09padding%3A10px%3B%0A%09margin-left%3A-10px%3Bmargin-top%3A-10px%3B%0A%09box-sizing%3Acontent-box%3B%0A%20%20%20border-radius%3A8px%3B%0A%20%20%0A%7D%0A.bulletsandarrows%20.tp-bullet%20%7B%0A%09width%3A7px%3B%0A%09height%3A7px%3B%0A%09background%3A%20rgba%28255%2C%20255%2C%20255%2C%200.2%29%3B%20%2F%2A%20old%20browsers%20%2A%2F%0A%09border-radius%3A50%25%3B%0A%09cursor%3A%20pointer%3B%0A%20%20%20%20position%3A%20absolute%3B%0A%7D%0A.bulletsandarrows%20.tp-bullet%3Ahover%2C%0A.bulletsandarrows%20.tp-bullet.selected%20%7B%0A%09background%3A%23ffffff%3B%0A%7D%0A.bulletsandarrows%20.tp-bullet-image%20%7B%0A%7D%0A.bulletsandarrows%20.tp-bullet-title%20%7B%0A%7D%0A%0A");
					var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
					if(htmlDiv) {
						htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
					}
					else{
						var htmlDiv = document.createElement('div');
						htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
						document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
					}
				  </script>
				</div><!-- END REVOLUTION SLIDER -->		</section>

<style type="text/css">
    @font-face {
        font-family: BrockScript;  font-weight: bold; src: url('Font/BrockScript.ttf');
    }

    .red_bar {
        text-align: center !important;
        padding: 8px !important;
        /*opacity: 0.6 !important;*/
        /*background-color: #000000 !important;*/
        background-color: hsla(113, 36%, 4%, 0.3) !important;
        filter: alpha(opacity=60) !important;
        font-size: 55px !important;
        font-family: BrockScript !important;
        /*line-height: 10px !important;*/
    }

    .pp{
        text-align: center !important;
        padding: 8px !important;

        background-color: hsla(113, 36%, 4%, 0.4) !important;
        filter: alpha(opacity=70) !important;
        font-family: BrockScript !important;

    }

    .pp p{ text-align: center !important; line-height: 30px !important; font-size: 28px !important;}


</style>