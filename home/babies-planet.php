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

    <!--<div class="baner_bar">
    <div class="container">
    <div class="baner_title">
    <p><a href="index.php" style="color:#000">Home</a> / <span>Service</span></p>
    </div>
    </div>
    </div>-->


    <div class="event_bar">
        <div class="container">
            <div class="row">
                <div class="col-md-3" style="padding-left: 0px;">
                    <div class="map_bar">
                        <a href="#"><h2>View On Map</h2></a>
                    </div>


                    <div class="side-list-bar">
                        <ul>
                            <?php
                            $sql = "SELECT * FROM category_tbl";
                            if ($fetchRecord = $mysqli->query($sql)) {
                                if ($fetchRecord->num_rows > 0) {
                                    $counter = 0;
                                    while ($row = $fetchRecord->fetch_assoc()) {
                                        $counter++;
                                        $row[1]=ucfirst("$row[1]");?>
                                        <a href="babies-planet.php?cname=<?php echo $row['category_name'] ?>">

                                            <li><?php echo $row['category_name']; ?></li></a>


                                        <?php
                                    }

                                }
                            }
                            ?>

                        </ul>


                    </div>

                    <div class="contact_bar-list">
                        <div class="icon_prof">
                            <img src="../wp-content/uploads/2015/07/people.png" />

                            <h3>Need <b style="color:red;">Assistance ?</b></h3>

                            <h4><b><a href="#" style="color:#51bce6; font:18px;">+91-9999874701</a></b></h4>

                            <p>Monday to Sunday 8.00am - 11:00pm</p>
                        </div>
                    </div>

                </div>

                <div class="col-md-9">
                    <div class="detail_top_bar">
                        <div class="surch_togal">
                            <select name="name">
                                <option value="" selected="">Sort by price</option>
                                <option value="ASC">Lowest price</option>
                                <option value="DESC">Highest price</option>

                            </select>

                            <p><a href="#" style="color:#51bce6;"><i class="fa fa-th" aria-hidden="true"></i> Compact View</a></p>
                        </div>
                    </div>
                    <?php
                    $cname=mysqli_real_escape_string($mysqli, $_GET['cname']);

                    $sql = "SELECT * FROM sub_category_tbl where category='$cname' ";
                    if ($fetchRecord = $mysqli->query($sql)) {
                        if ($fetchRecord->num_rows > 0) {
                            $counter = 0;
                            while ($row = $fetchRecord->fetch_assoc()) {
                                $counter++;
                                $row[1]=ucfirst("$row[1]");?>
                                <div class="event_pro_bar">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="pro_bar">
                                                <img src="../admin/<?php echo $row['sub_cate_img']; ?>" />
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="pro_detail">
                                                <h3><a href="#"><?php echo $row['sub_category']; ?></a></h3>

                                                <p class="more"><?php echo $row['description']; ?></p>

                                                <div class="icon_detail_bar">
                                                    <ul>
                                                        <li><i class="fa fa-file-text-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-map-marker" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-newspaper-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="pro_pris_detail">
                                                <h3><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $row['total_cost']; ?>+</h3>



                                                <a href="booking-detail.php?id=<?php echo sha1($row['id']); ?>"><button name="submit" value="Detail" >Detail</button></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <?php
                            }

                        }
                    }
                    ?>
                    <!--<div class="event_pro_bar">
                    <div class="row">
                    <div class="col-md-4">
                    <div class="pro_bar">
                    <img src="../wp-content/uploads/2015/07/Baby shows.jpg" />
                    </div>
                    </div>

                    <div class="col-md-5">
                    <div class="pro_detail">
                    <h3><a href="#">Baby shows</a></h3>

                    <p>A dining experience like never before - 5 course dinner, guitarist, flowers, cake, in a decorated private garden!</p>

                    <div class="icon_detail_bar">
                    <ul>
                    <li><i class="fa fa-file-text-o" aria-hidden="true"></i></li>
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i></li>
                    <li><i class="fa fa-newspaper-o" aria-hidden="true"></i></li>
                    <li><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></li>
                    <li><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></li>
                    </ul>
                    </div>

                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="pro_pris_detail">
                    <h3><i class="fa fa-inr" aria-hidden="true"></i> 1800</h3>

                    <p>*Per couple</p>

                    <a href="booking-detail.php"><button name="submit" type="text" value="Detail" >Detail</button></a>
                    </div>
                    </div>

                    </div>
                    </div>-->

                    <!--<div class="event_pro_bar">
                    <div class="row">
                    <div class="col-md-4">
                    <div class="pro_bar">
                    <img src="../wp-content/uploads/2015/07/kids Events.jpg" />
                    </div>
                    </div>

                    <div class="col-md-5">
                    <div class="pro_detail">
                    <h3><a href="#">kids Events</a></h3>

                    <p>A dining experience like never before - 5 course dinner, guitarist, flowers, cake, in a decorated private garden!</p>

                    <div class="icon_detail_bar">
                    <ul>
                    <li><i class="fa fa-file-text-o" aria-hidden="true"></i></li>
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i></li>
                    <li><i class="fa fa-newspaper-o" aria-hidden="true"></i></li>
                    <li><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></li>
                    <li><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></li>
                    </ul>
                    </div>

                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="pro_pris_detail">
                    <h3><i class="fa fa-inr" aria-hidden="true"></i> 1800</h3>

                    <p>*Per couple</p>

                    <a href="booking-detail.php"><button name="submit" type="text" value="Detail" >Detail</button></a>
                    </div>
                    </div>

                    </div>
                    </div>-->
                </div>

            </div>
        </div>
    </div>


<?php
include('footer.php');
?>