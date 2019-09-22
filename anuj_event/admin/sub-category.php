<?php
session_start();
error_reporting(1);
include('database/admin_confi.php');

if(empty($_SESSION['email'])){
    header('Location:login.php');
}

if(isset($_POST['submit']))
{
    $categoryname=mysqli_real_escape_string($mysqli, $_POST['categoryname']);
	$subcategory=mysqli_real_escape_string($mysqli, $_POST['subcategory']);
	$description=mysqli_real_escape_string($mysqli, $_POST['description']);


	$inclusion='';
	$exclusion='';
	$terms='';
	$activites='';
	$themes='';
    $customizations='';
    $cities='';

	$whatsincluded=$_POST['whatsincluded'];
	foreach ($whatsincluded as $inclusionValue)
	    $inclusion=$inclusion.",".$inclusionValue;

	$whatsexcluded=$_POST['whatsexcluded'];
	foreach ($whatsexcluded as $exclusionValue)
	    $exclusion=$exclusion.",".$exclusionValue;

	$needtoknow=$_POST['terms'];
	foreach ($needtoknow as $termsValue)
	    $terms=$terms."*".$termsValue;

	$Activities=$_POST['Activities'];
	foreach ($Activities as $activiesValue)
	    $activites=$activites.",".$activiesValue;


    $Themes=$_POST['Themes'];
    foreach ($Themes as $ThemesValue)
        $themes=$themes.",".$ThemesValue;


    $Customizations=$_POST['Customizations'];
    foreach ($Customizations as $CustomizationsValue)
        $customizations=$customizations.",".$CustomizationsValue;

    $Cities=$_POST['Cites'];
    foreach ($Cities as $CitiesValue)
        $cities=$cities.",".$CitiesValue;


    $inclusion=mysqli_real_escape_string($mysqli, $inclusion);
    $exclusion=mysqli_real_escape_string($mysqli, $exclusion);
    $terms=mysqli_real_escape_string($mysqli, $terms);
    $activites=mysqli_real_escape_string($mysqli, $activites);
    $themes=mysqli_real_escape_string($mysqli, $themes);
    $customizations=mysqli_real_escape_string($mysqli, $customizations);
    $cities=mysqli_real_escape_string($mysqli, $cities);
	$address=mysqli_real_escape_string($mysqli, $_POST['address']);
	$scheduledatetime=mysqli_real_escape_string($mysqli, $_POST['scheduledatetime']);
	$availablecustomizations=mysqli_real_escape_string($mysqli, $_POST['availablecustomizations']);
	$reviews=mysqli_real_escape_string($mysqli,$_POST['reviews']);
	$totalcost=mysqli_real_escape_string($mysqli,$_POST['totalcost']);
	$availablecities=mysqli_real_escape_string($mysqli,$_POST['availablecities']);
	$categoryname=mysqli_real_escape_string($mysqli,$_POST['categoryname']);
    $tmpname=$_FILES['image']['tmp_name'];
    $filename=$_FILES['image']['name'];
    move_uploaded_file($tmpname,"sub_category_img/".$filename);
    $path="sub_category_img/".mysqli_real_escape_string($mysqli,$filename);
    $status="1";

    $sql = "INSERT INTO `sub_category_tbl` SET `category`='$categoryname',`sub_category`='$subcategory',`description`='$description',`whats_included`='$inclusion',`whats_excluded`='$exclusion',`need_to_know`='$terms',`address`='$address',`schedule_date_time`='$scheduledatetime',`available_customizations`='$customizations',`reviews`='$reviews',`total_cost`='$totalcost',`available_cities`='$cities',`sub_cate_img`='$path',`themes`='$themes',`activities`='$activites',`status`='$status'";
    $result=$mysqli->query($sql);
    if ($result) {
        echo "<script>alert('Add sub category successfully')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ADMIN:: Eventiana</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" type="text/css" href="tcal.css"/>
    <script type="text/javascript" src="tcal.js"></script>
    <style>
        tr, td {
            padding: 10px;
        }
		.modal-dialog {
  height: 80% !important;
  padding-top:10%;
}

.modal-content {
  height: 100% !important;
  overflow:visible;
}

.modal-body {
  height: 80%;
  overflow: auto;
}
        .dynamic-textbox{
            margin-left: -13px;
            width: 260px;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script type="text/javascript">
        var divid=0;
        $(function () {
            $(".alert-success").hide();
            //alert('hello');
            $("#btnAdd").bind("click", function () {
                var div = $("<div />");
                div.html(GetDynamicTextBox(""));
                $("#TextBoxContainer").append(div);
            });
            $("#btnGet").bind("click", function () {
                var values = "";
                $("input[name=whatsincluded]").each(function () {
                    values += $(this).val() + ',';
                });
            });
            $("body").on("click", "#remove", function () {
                var reDiv=$(this).attr("reDiv");
                $("#"+reDiv).closest("div").remove();
            });
        });
        function GetDynamicTextBox(value) {
            divid=divid+1;
            return '<div class="name" id="'+divid+'">' +
                '<div class="col-sm-10">' +
                '<input class="dynamic-textbox" name ="whatsincluded[]" id="DynamicTextBox" placeholder="Inclusion " type="text"  />' +
                '</div>' +
                '<div class="col-sm-2">' +
                '<button type="button" reDiv="'+divid+'" class="btn btn-danger" id="remove">' +
                '<span class="glyphicon glyphicon-remove"></span>' +
                '</button>' +
                '</div>';
        }
    </script>

    <!----------------------Exclusion JQuery -------------------------->

    <script type="text/javascript">
        var dividEx=0;
        $(function () {
            $(".alert-success").hide();
            //alert('hello');
            $("#btnAddEX").bind("click", function () {
                var div = $("<div />");
                div.html(GetDynamicTextBoxEx(""));
                $("#TextBoxContainerEx").append(div);
            });
            $("#btnGet").bind("click", function () {
                var values = "";
                $("input[name=whatsexcluded]").each(function () {
                    values += $(this).val() + ',';
                });
            });
            $("body").on("click", "#removeEX", function () {
                var reDiv=$(this).attr("reDivEx");
                $("#"+reDiv).closest("div").remove();
            });
        });
        function GetDynamicTextBoxEx(value) {
            dividEx="Ex"+dividEx+1;
            return '<div class="name" id="'+dividEx+'">' +
                '<div class="col-sm-10">' +
                '<input class="dynamic-textbox" name ="whatsexcluded[]" id="DynamicTextBoxEX" placeholder="Exclusion " type="text"  />' +
                '</div>' +
                '<div class="col-sm-2">' +
                '<button type="button" reDivEx="'+dividEx+'" class="btn btn-danger" id="removeEX">' +
                '<span class="glyphicon glyphicon-remove"></span>' +
                '</button>' +
                '</div>';
        }
    </script>

    <!----------------------Activities JQuery -------------------------->

    <script type="text/javascript">
        var divid=0;
        $(function () {
            $(".alert-success").hide();
            //alert('hello');
            $("#btnAddAct").bind("click", function () {
                var div = $("<div />");
                div.html(GetDynamicTextBoxAct(""));
                $("#TextBoxContainerAct").append(div);
            });
            $("#btnGet").bind("click", function () {
                var values = "";
                $("input[name=Activities]").each(function () {
                    values += $(this).val() + ',';
                });
            });
            $("body").on("click", "#removeAct", function () {
                var reDiv=$(this).attr("reDivAct");
                $("#"+reDiv).closest("div").remove();
            });
        });
        function GetDynamicTextBoxAct(value) {
            divid="Act"+divid+1;
            return '<div class="name" id="'+divid+'">' +
                '<div class="col-sm-10">' +
                '<input class="dynamic-textbox" name ="Activities[]" id="DynamicTextBoxAct" placeholder="Activities " type="text"  />' +
                '</div>' +
                '<div class="col-sm-2">' +
                '<button type="button" reDivAct="'+divid+'" class="btn btn-danger" id="removeAct">' +
                '<span class="glyphicon glyphicon-remove"></span>' +
                '</button>' +
                '</div>';
        }
    </script>

    <!----------------------Themes JQuery -------------------------->

    <script type="text/javascript">
        var divid=0;
        $(function () {
            $(".alert-success").hide();
            //alert('hello');
            $("#btnAddThemes").bind("click", function () {
                var div = $("<div />");
                div.html(GetDynamicTextBoxThems(""));
                $("#TextBoxContainerThemes").append(div);
            });
            $("#btnGet").bind("click", function () {
                var values = "";
                $("input[name=Themes]").each(function () {
                    values += $(this).val() + ',';
                });
            });
            $("body").on("click", "#removeThemes", function () {
                var reDiv=$(this).attr("reDivThemes");
                $("#"+reDiv).closest("div").remove();
            });
        });
        function GetDynamicTextBoxThems(value) {
            divid="Themes"+divid+1;
            return '<div class="name" id="'+divid+'">' +
                '<div class="col-sm-10">' +
                '<input class="dynamic-textbox" name ="Themes[]" id="DynamicTextBoxThemes" placeholder="Themes " type="text"  />' +
                '</div>' +
                '<div class="col-sm-2">' +
                '<button type="button" reDivThemes="'+divid+'" class="btn btn-danger" id="removeThemes">' +
                '<span class="glyphicon glyphicon-remove"></span>' +
                '</button>' +
                '</div>';
        }
    </script>

    <!----------------------Terms JQuery -------------------------->

    <script type="text/javascript">
        var divid=0;
        $(function () {
            $(".alert-success").hide();
            //alert('hello');
            $("#btnAddTerms").bind("click", function () {
                var div = $("<div />");
                div.html(GetDynamicTextBoxTerms(""));
                $("#TextBoxContainerTerms").append(div);
            });
            $("#btnGet").bind("click", function () {
                var values = "";
                $("input[name=Terms]").each(function () {
                    values += $(this).val() + ',';
                });
            });
            $("body").on("click", "#removeTerms", function () {
                var reDiv=$(this).attr("reDivTerms");
                $("#"+reDiv).closest("div").remove();
            });
        });
        function GetDynamicTextBoxTerms(value) {
            divid="Terms"+divid+1;
            return '<div class="name" id="'+divid+'">' +
                '<div class="col-sm-10">' +
                '<input class="dynamic-textbox" name ="terms[]" id="DynamicTextBoxTerms" placeholder="Terms & Condition" type="text"  />' +
                '</div>' +
                '<div class="col-sm-2">' +
                '<button type="button" reDivTerms="'+divid+'" class="btn btn-danger" id="removeTerms">' +
                '<span class="glyphicon glyphicon-remove"></span>' +
                '</button>' +
                '</div>';
        }
    </script>


    <!----------------------Available Customization JQuery -------------------------->

    <script type="text/javascript">
        var divid=0;
        $(function () {
            $(".alert-success").hide();
            //alert('hello');
            $("#btnAddAvail").bind("click", function () {
                var div = $("<div />");
                div.html(GetDynamicTextBoxAvail(""));
                $("#TextBoxContainerAvail").append(div);
            });
            $("#btnGet").bind("click", function () {
                var values = "";
                $("input[name=Avail]").each(function () {
                    values += $(this).val() + ',';
                });
            });
            $("body").on("click", "#removeAvail", function () {
                var reDiv=$(this).attr("reDivAvail");
                $("#"+reDiv).closest("div").remove();
            });
        });
        function GetDynamicTextBoxAvail(value) {
            divid="Avail"+divid+1;
            return '<div class="name" id="'+divid+'">' +
                '<div class="col-sm-10">' +
                '<input class="dynamic-textbox" name ="Customizations[]" id="DynamicTextBoxAvail" placeholder="Available Customization" type="text"  />' +
                '</div>' +
                '<div class="col-sm-2">' +
                '<button type="button" reDivAvail="'+divid+'" class="btn btn-danger" id="removeAvail">' +
                '<span class="glyphicon glyphicon-remove"></span>' +
                '</button>' +
                '</div>';
        }
    </script>

    <!----------------------Cities JQuery -------------------------->

    <script type="text/javascript">
        var divid=0;
        $(function () {
            $(".alert-success").hide();
            //alert('hello');
            $("#btnAddCites").bind("click", function () {
                var div = $("<div />");
                div.html(GetDynamicTextBoxCites(""));
                $("#TextBoxContainerCites").append(div);
            });
            $("#btnGet").bind("click", function () {
                var values = "";
                $("input[name=Cites]").each(function () {
                    values += $(this).val() + ',';
                });
            });
            $("body").on("click", "#removeCites", function () {
                var reDiv=$(this).attr("reDivCites");
                $("#"+reDiv).closest("div").remove();
            });
        });
        function GetDynamicTextBoxCites(value) {
            divid="Cites"+divid+1;
            return '<div class="name" id="'+divid+'">' +
                '<div class="col-sm-10">' +
                '<input class="dynamic-textbox" name ="Cites[]" id="DynamicTextBoxCites" placeholder="Available Cites" type="text"  />' +
                '</div>' +
                '<div class="col-sm-2">' +
                '<button type="button" reDivCites="'+divid+'" class="btn btn-danger" id="removeCites">' +
                '<span class="glyphicon glyphicon-remove"></span>' +
                '</button>' +
                '</div>';
        }
    </script>
</head>
<body class="hold-transition skin-blue-light sidebar-mini">
<div class="wrapper">
    <?php include("header.php"); ?>
    <?php include("leftsidebar.php"); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <!-- general form elements -->
            <div class="box">
                <div class="box-header" style="text-align: center;">
                    <h3 class="box-title"><b>Sub Category</b></h3>
                </div>
                <div class="box-body">
                <div class="row">
                <div class="col-md-2"></div>
                
                <div class="col-md-8">
                    <!-- form start -->
                    <div class="category_form">
                    <form method="post" enctype="multipart/form-data">
                    <div class="row">
                    <div class="col-md-6">
                    <div class="name">
                    <!--<input type="text" name="categoryname" placeholder="Category Name" >-->
                    <select name="categoryname" >
                    <option value=" ">---select Category---</option>
                        <?php
						$sql = "select * from category_tbl";
						$result = $mysqli->query($sql);
						while($row = $result->fetch_array()){
							?>
                            <option value="<?php echo $row['category_name']; ?>"><?php echo $row['category_name']; ?></option>
                            <?php
						}
						?>
                    </select>
                    </div>
                    
                    <div class="name">
                    <input type="text"  name="subcategory" placeholder="Sub category" >
                    </div>
                    
                    <div class="name">
                    <textarea type="text"  name="description" placeholder="Description" ></textarea>
                    </div>

                        <div class="name">
                            <div class="col-sm-10">
                                <input class="dynamic-textbox" name ="whatsincluded[]" id="DynamicTextBox" type="text" placeholder="Inclusion "  />
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-primary" id="btnAdd">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </button>
                            </div>
                        </div>
                        <div id="TextBoxContainer"></div>

                    <!--<div class="name">
                    <input type="text"  name="whatsincluded" placeholder="What's included" >
                    </div>-->

                        <div class="name">
                            <div class="col-sm-10">
                                <input type="text" class="dynamic-textbox" id="DynamicTextBoxEX"  name="whatsexcluded[]" placeholder="Exclusion" >
                            </div>

                            <div class="col-sm-2">
                                <button type="button" class="btn btn-primary" id="btnAddEX">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </button>
                            </div>

                        </div>

                        <div id="TextBoxContainerEx"></div>

                        <div class="name">
                            <div class="col-sm-10">
                                <input type="text" class="dynamic-textbox" id="DynamicTextBoxAct"  name="Activities[]" placeholder="Activities" >
                            </div>

                            <div class="col-sm-2">
                                <button type="button" class="btn btn-primary" id="btnAddAct">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </button>
                            </div>

                        </div>

                        <div id="TextBoxContainerAct"></div>


                        <div class="name">
                            <div class="col-sm-10">
                                <input type="text" class="dynamic-textbox" id="DynamicTextBoxThemes"  name="Themes[]" placeholder="Themes" >
                            </div>

                            <div class="col-sm-2">
                                <button type="button" class="btn btn-primary" id="btnAddThemes">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </button>
                            </div>

                        </div>

                        <div id="TextBoxContainerThemes"></div>

                    </div>
                    
                    <div class="col-md-6">

                        <div class="name">
                            <input type="text"  name="scheduledatetime" placeholder="Schedule Date time" >
                        </div>

                        <div class="name">
                            <textarea type="text"  name="address" placeholder="Address" ></textarea>
                        </div>

                        <div class="name">
                            <input type="text"  name="totalcost" placeholder="TOTAL COST" >
                        </div>

                        <div class="name">
                            <input type="text"  name="reviews" placeholder="Reviews" >
                        </div>


                        <div class="name">
                            <div class="col-sm-10">
                                <input type="text" class="dynamic-textbox" id="DynamicTextBoxTerms"  name="terms[]" placeholder="Terms & Condition" >
                            </div>

                            <div class="col-sm-2">
                                <button type="button" class="btn btn-primary" id="btnAddTerms">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </button>
                            </div>

                        </div>

                        <div id="TextBoxContainerTerms"></div>

                        <!--<div class="name">
                            <input type="text"  name="needtoknow" placeholder="Terms & Condition" >
                        </div>-->


                        <div class="name">
                            <div class="col-sm-10">
                                <input type="text" class="dynamic-textbox" id="DynamicTextBoxAvail"  name="Customizations[]" placeholder="Available Customizations" >
                            </div>

                            <div class="col-sm-2">
                                <button type="button" class="btn btn-primary" id="btnAddAvail">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </button>
                            </div>

                        </div>

                        <div id="TextBoxContainerAvail"></div>

                        <div class="name">
                            <div class="col-sm-10">
                                <input type="text" class="dynamic-textbox" id="DynamicTextBoxCites"  name="Cites[]" placeholder="Available Cites" >
                            </div>

                            <div class="col-sm-2">
                                <button type="button" class="btn btn-primary" id="btnAddCites">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </button>
                            </div>

                        </div>

                        <div id="TextBoxContainerCites"></div>
                    
                   <!-- <div class="name">
                    <input type="text"  name="availablecustomizations" placeholder="Available Customizations" >
                    </div>-->
                    
                   <!-- <div class="name">
                    <input type="text"  name="availablecities" placeholder="Available Cities" >
                    </div>-->
                    
                    <div class="file" style="margin-bottom:10px;">
                      <input type="file"  name="image">
                    </div>

                    </div>
                        <div class="bnt_bar">
                            <input type="submit" name="submit" value="Submit" >
                        </div>
                    </div>
                    </form>
                    </div>
                    </div>
                    
                    <div class="col-md-2"></div>
                    
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- /.row -->
    <!-- /.content -->
</div>
<!-- Trigger/Open The Modal -->

<div id="myModal" class="modal modal-lg" role="dialog" style="width: 100%;">
</div>


<div id="myModal1" class="modal modal-lg" role="dialog" style="width: 100%;">
</div>

<!-- jQuery 2.1.4 -->

<!-- Bootstrap 3.3.5 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<!--<script src="plugins/fastclick/fastclick.min.js"></script>-->
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->


</body>
</html>