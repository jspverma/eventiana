<?php
include('header-2.php');
//include('slider.php');
?>
<style type="text/css">
        .morecontent span {
            display: none;
        }
        .morelink {
            display: block;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function() {
            // Configure/customize these variables.
            var showChar = 100;  // How many characters are shown by default
            var ellipsestext = "...";
            var moretext = "Show more >";
            var lesstext = "Show less";


            $('.more').each(function() {
                var content = $(this).html();

                if(content.length > showChar) {

                    var c = content.substr(0, showChar);
                    var h = content.substr(showChar, content.length - showChar);

                    var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

                    $(this).html(html);
                }

            });

            $(".morelink").click(function(){
                if($(this).hasClass("less")) {
                    $(this).removeClass("less");
                    $(this).html(moretext);
                } else {
                    $(this).addClass("less");
                    $(this).html(lesstext);
                }
                $(this).parent().prev().toggle();
                $(this).prev().toggle();
                return false;
            });
        });
    </script>

    <div class="baner_bar">
        <div class="container">
            <div class="baner_title">
                <p><a href="index.php" style="color:#000">Home</a> / <span>Booking Detail</span></p>
            </div>
        </div>
    </div>

    <div class="book-detail" style="margin-bottom:10px;">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php
                    $id=$_GET['id'];
                    $amount="";
                    $total=0;
					$cname="";
					$subcat="";


                    $sql = "SELECT * FROM sub_category_tbl where sha1(id)='$id'";
                    if ($fetchRecord = $mysqli->query($sql)) {
                        if ($fetchRecord->num_rows > 0) {
                            $counter = 0;
                            $row = $fetchRecord->fetch_assoc();
                            $counter++;
                            $amount=$row['total_cost'];
                            $available_city=$row['available_cities'];
                            $total=$total+$amount;
                            $row[1]=ucfirst("$row[1]");
							$cname=$row['category'];
							$sub_cat=$row['sub_category'];
                            ?>
                            <div class="image_detail">
                                <img src="../admin/<?php echo $row['sub_cate_img']; ?>" >
                            </div>

                            <div class="dipcration_bar">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="dip_bar">
                                            <p>Description</p>
                                        </div>
                                    </div>

                                    <div class="col-md-9" style="padding-left: 0px;">
                                        <div class="dip_detail">
                                            <p><b><?php echo $row['sub_category']; ?></b></p>
                                            <p class="more"><?php echo $row['description']; ?></p>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="dipcration_bar">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="dip_bar">
                                            <p>Inclusions</p>
                                        </div>
                                    </div>

                                    <div class="col-md-9" style="padding-left: 0px;">
                                        <div class="dip_detail">
                                            <ul style="list-style-type: none;">
                                                <?php
                                                $inclusion=$row['whats_included'];
                                                $inclusion=explode(',',$inclusion);
                                                for($i=1; $i<=count($inclusion)-1; $i++){
                                                    ?>
                                                    <li>
                                                        <img src="right.png" width="15">
                                                        <?php echo $inclusion[$i]; ?>
                                                    </li>
                                                    <?php
                                                }
                                                ?>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="dipcration_bar">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="dip_bar">
                                            <p>Exclusion</p>
                                        </div>
                                    </div>

                                    <div class="col-md-9" style="padding-left: 0px;">
                                        <div class="dip_detail">
                                            <ul style="list-style-type: none;">
                                                <?php
                                                $exclusion=$row['whats_excluded'];
                                                $exclusion=explode(',',$exclusion);
                                                for($i=1; $i<=count($exclusion)-1; $i++){
                                                    ?>
                                                    <li>
                                                        <img src="wrong.png" width="15">
                                                        <?php echo $exclusion[$i]; ?>
                                                    </li>
                                                    <?php
                                                }
                                                ?>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="dipcration_bar">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="dip_bar">
                                            <p>Terms & Conditions</p>
                                        </div>
                                    </div>

                                    <div class="col-md-9" style="padding-left: 0px;">
                                        <div class="dip_detail">
                                            <ol>
                                                <?php
                                                $terms=$row['need_to_know'];
                                                $terms=explode('*',$terms);
                                                for($i=1; $i<=count($terms)-1; $i++){
                                                    ?>
                                                    <li>
                                                        <?php echo $terms[$i]; ?>
                                                    </li>
                                                    <?php
                                                }
                                                ?>
                                            </ol>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <?php
                        }

                    }
                    ?>
                </div>

                <div class="col-md-4">
                    <div class="book_detail">
                        <h3>Booking</h3>
                        <div class="form-detail">
                            <form method="post" action="add-service.php">
                                <input type="hidden" name="cname" value="<?php echo $cname; ?>" />
                                <input type="hidden" name="sub_cat" value="<?php echo $sub_cat; ?>" />

                                <div class="row">
                                    <div class="col-sm-1"></div>
                                    <div class="col-md-10">

                                        <label><i class="fa fa-calendar" aria-hidden="true"></i> Select Date</label>
                                        <input type="date" placeholder="Click to select" name="date" style="width: 100%;height: 35px;border: 1px solid #d1cece;">
                                    </div>
                                    <div class="col-sm-1"></div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-1"></div>
                                    <div class="col-md-10">
                                        <div class="time">
                                            <label><i class="fa fa-clock-o" aria-hidden="true"></i>Select Time</label>
                                            <select style="width: 100%;border: 1px solid #d1cece;" name="time">
                                                <option value=" ">Selet Time</option>
                                                <option value="7:00 PM to 0:00 AM"> 7:00 PM to 0:00 AM</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-1"></div>

                                </div>
                        </div>

                        <div class="amount_bar">
                            <div class="amount-detl-bar">
                                <p><b>Amount</b></p>
                            </div>
                            <div class="price">
                                <p>1 x <?php echo $amount; ?></p>
                            </div>

                        </div>

                        <div class="totl_bar">
                            <div class="totl_det">
                                <p><b>Total cost</b></p>
                            </div>
                            <div class="totl-pric">
                                <p><b><?php echo $total; ?></b></p>
                            </div>
                        </div>

                        <div class="cty_bar">
                            <div class="city_name">
                                <p>Available Cities</p>
                            </div>
                            <div class="name_city">
                                <input type="hidden" name="available_city" value="<?php echo $available_city; ?>" />
                                <p>
                                    <?php
                                    $available_city=explode(',',$available_city);
                                    for($i=1; $i<=count($available_city)-1; $i++){
                                        echo $available_city[$i];
                                    }
                                    ?>
                                </p>
                            </div>
                        </div>

                        <div class="btn_bar_book">
                            <div class="bok_btn-bar">
                                <input type="hidden" name="total" value="<?php echo $total; ?>" />
                                <input type="submit" name="booking" value="Booking" />
                            </div>
                        </div>
                    </div>
                    </form>

                    <div class="map_bar">
                        <a href="#"><h2>View On Map</h2></a>
                    </div>

                    <div class="compny_bar">
                        <div class="polecy_bar">
                            <p><b style="color:#000">Cancellation Policy</b></p>
                            <ul>
                                <li>Cancellation would be done before 24 hours of scheduled event with no cancellation charges.</li>
                                <li>50% charges would be levied on the cancellation between 6 hours to 24 hours.</li>
                                <li>No refund would be initiated before 6 hours of scheduled event.</li>
                            </ul>
                        </div>

                        <div class="polecy_bar">
                            <p><b style="color:#000">Reschedule Policy</b></p>
                            <ul>
                                <li>In case of reschduling, would cost you nothing.</li>
                                <li>20% fee would be applicable in case of rescheduling between 6 hours to 24 hours.</li>
                                <li>Rescheduling can not be carried out within 6 hours of the scheduled event.</li>
                            </ul>
                        </div>

                        <div class="polecy_bar">
                            <p><b style="color:#000">Other Info</b></p>
                            <ul>
                                <li>Any complaint and suggestion would be entertained after the commencemet of the event.</li>

                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
<?php
include('footer.php');
?>