<?php
include('header-2.php');
//include('slider.php');
?>
    <div>
        &nbsp;
    </div>
    <div class="container">
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
    </div>

<?php include('footer.php');?>