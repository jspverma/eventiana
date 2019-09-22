<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body style="padding:0px; margin:0px; background-color:#fff;font-family:arial,helvetica,sans-serif,verdana,'Open Sans'">

    <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Maker -->
    <!-- Source: https://www.jssor.com -->
    <script src="js/jssor.slider-26.2.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_options = {
              $AutoPlay: 1,
              $AutoPlaySteps: 4,
              $SlideDuration: 160,
              $SlideWidth: 200,
              $SlideSpacing: 3,
              $Cols: 5,
              $Align: 390,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $Steps: 5
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 1200;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <style>
        /* jssor slider loading skin spin css */
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }


        .jssorb057 .i {position:absolute;cursor:pointer;}
        .jssorb057 .i .b {fill:none;stroke:#fff;stroke-width:2000;stroke-miterlimit:10;stroke-opacity:0.4;}
        .jssorb057 .i:hover .b {stroke-opacity:.7;}
        .jssorb057 .iav .b {stroke-opacity: 1;}
        .jssorb057 .i.idn {opacity:.3;}

        .jssora073 {display:block;position:absolute;cursor:pointer;}
        .jssora073 .a {fill:#ddd;fill-opacity:.7;stroke:#000;stroke-width:160;stroke-miterlimit:10;stroke-opacity:.7;}
        .jssora073:hover {opacity:.8;}
        .jssora073.jssora073dn {opacity:.4;}
        .jssora073.jssora073ds {opacity:.3;pointer-events:none;}
    </style>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1200px;height:250px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1200px;height:250px;overflow:hidden;">
            <div>
                <a href="booking-detail.php?id=1352246e33277e9d3c9090a434fa72cfa6536ae2">
                <img data-u="image" src="img/proposal.jpg" />
                <div class="desc">
                    <!--<p class="desc_content" style="text-align: left;margin-bottom: -24px;margin-left: 10px;">Proposals</p>-->
                    <span class="tittle">
                        <strong>Proposals</strong><br>
                        <span>Delhi/NCR</span>
                    </span>
                    <p style="text-align: right;">रु 2500/-</p>
                </div>


                </a>

            </div>


            <div>
                <a href="booking-detail.php?id=80e28a51cbc26fa4bd34938c5e593b36146f5e0c">
                <img data-u="image" src="img/party_1.jpg" />
                <div class="desc">
                    <!--<p class="desc_content" style="text-align: left;margin-bottom: -24px;margin-left: 10px;">Hens party</p>-->
                    <span class="tittle">
                        <strong>Hens party</strong><br>
                        <span>Delhi/NCR</span>
                    </span>
                    <p style="text-align: right;">रु 2500/-</p>

                </div>
                </a>
            </div>
            <div>
                <a href="booking-detail.php?id=c097638f92de80ba8d6c696b26e6e601a5f61eb7">
                <img data-u="image" src="img/flower%20decoration.jpg" />
                <div class="desc">
                    <!--<p class="desc_content" style="text-align: left;margin-bottom: -24px;margin-left: 10px;">Flower decoration</p>-->
                    <span class="tittle">
                        <strong>Flower decoration</strong><br>
                        <span>Delhi/NCR</span>
                    </span>
                    <p style="text-align: right;">रु 1300/-</p>
                </div>
                </a>

            </div>
            <div>
                <a href="booking-detail.php?id=1f1362ea41d1bc65be321c0a378a20159f9a26d0">
                <img data-u="image" src="img/dream_world.jpg" />
                <div class="desc">
                    <!--<p class="desc_content" style="text-align: left;margin-bottom: -24px;margin-left: 10px;">Dream world</p>-->
                    <span class="tittle">
                        <strong>Dream world</strong><br>
                        <span>Delhi/NCR</span>
                    </span>
                    <p style="text-align: right;">रु 4500/-</p>
                </div>
                </a>
            </div>
            <div>
                <a href="booking-detail.php?id=35e995c107a71caeb833bb3b79f9f54781b33fa1">
                        <img data-u="image" src="img/lovers%20paradise%202.jpg"/ >
                        <div class="desc">
                   <!-- <p class="desc_content" style="text-align: left;margin-bottom: -24px;margin-left: 10px;">Lovers paradise</p>-->
                            <span class="tittle">
                        <strong>Lovers paradise</strong><br>
                        <span>Delhi/NCR</span>
                    </span>
                            <p style="text-align: right;">रु 3600/-</p>
                </div>
                </a>
            </div>
            <div>
                <a href="booking-detail.php?id=cb7a1d775e800fd1ee4049f7dca9e041eb9ba083">
                        <img data-u="image" src="img/balloon%20surprise.jpg" style="height: 160%;" />
                        <div class="desc">
                   <!-- <p class="desc_content" style="text-align: left;margin-bottom: -24px;margin-left: 10px;">Balloon surprise</p>-->
                            <span class="tittle">
                        <strong>Balloon surprise</strong><br>
                        <span>Delhi/NCR</span>
                    </span>
                            <p style="text-align: right;">रु 1600/-</p>
                </div>
                </a>
            </div>
            <div>
                <a href="booking-detail.php?id=92cfceb39d57d914ed8b14d0e37643de0797ae56">
                        <img data-u="image" src="img/MOVIE.jpg" style="height: 179%;" />
                        <div class="desc">
                    <span class="tittle">
                        <strong>Movie Planet</strong><br>
                        <span>Delhi/NCR</span>
                    </span>
                            <p style="text-align: right;">रु 2500/-</p>
                </div>
                </a>
            </div>
            <div>
                <a href="booking-detail.php?id=76546f9a641ede2beab506b96df1688d889e629a">
                <img data-u="image" src="img/lanterns%20surprise.jpg"/>

                <div class="desc">
                    <span class="tittle">
                        <strong>Latern Surprise</strong><br>
                        <span>Delhi/NCR</span>
                    </span>
                    <p style="text-align: right;">रु 1500/-</p>

                </div>

                </a>

                <p>this is first image description text</p>

            </div>


        </div>



        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb057" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5000"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora073" style="width:50px;height:50px;top:0px;left:30px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <path class="a" d="M4037.7,8357.3l5891.8,5891.8c100.6,100.6,219.7,150.9,357.3,150.9s256.7-50.3,357.3-150.9 l1318.1-1318.1c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3L7745.9,8000l4216.4-4216.4 c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3l-1318.1-1318.1c-100.6-100.6-219.7-150.9-357.3-150.9 s-256.7,50.3-357.3,150.9L4037.7,7642.7c-100.6,100.6-150.9,219.7-150.9,357.3C3886.8,8137.6,3937.1,8256.7,4037.7,8357.3 L4037.7,8357.3z"></path>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora073" style="width:50px;height:50px;top:0px;right:30px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <path class="a" d="M11962.3,8357.3l-5891.8,5891.8c-100.6,100.6-219.7,150.9-357.3,150.9s-256.7-50.3-357.3-150.9 L4037.7,12931c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3L8254.1,8000L4037.7,3783.6 c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3l1318.1-1318.1c100.6-100.6,219.7-150.9,357.3-150.9 s256.7,50.3,357.3,150.9l5891.8,5891.8c100.6,100.6,150.9,219.7,150.9,357.3C12113.2,8137.6,12062.9,8256.7,11962.3,8357.3 L11962.3,8357.3z"></path>
            </svg>
        </div>
    </div>
    <!--<div class="container" style="background: lightblue;">
        <div class="row">
            <div class="col-md-2">
                <p>this is first image description text</p>
            </div>
            <div class="col-md-2">
                <p>this is first image description text</p>
            </div>
            <div class="col-md-2">
                <p>this is first image description text</p>
            </div>
            <div class="col-md-2">
                <p>this is first image description text</p>
            </div>
            <div class="col-md-2">
                <p>this is first image description text</p>
            </div>
            <div class="col-md-2">
                <p>this is first image description text</p>
            </div>
        </div>
    </div>-->


    <script type="text/javascript">jssor_1_slider_init();</script>
    <style>
        div.desc{
            position: absolute;
            bottom: 0px;
            width: 100%;
            background-color:transparent;
            color:white;
            opacity:initial;
            filter: alpha(opacity=0.1);
            font-weight: 700;
            font-size: 15px;
            display: -webkit-box;
            font-family: inherit;
            margin-left: 10px;
            left: 12px;

        }
    </style>
    <!-- #endregion Jssor Slider End -->
</body>
</html>
