<link rel="stylesheet" href="css/partner/thumbnail-slider.css" type="text/css">
<link rel="stylesheet" href="css/partner/thumbs2.css" type="text/css">
<script src="css/partner/thumbnail-slider.js"></script>
<div class="container-fluid">
	<div style="min-height: 50px;">
        <!-- Jssor Slider Begin -->
        <!-- To move inline styles to css file/block, please specify a class name for each element. --> 
        <!-- ================================================== -->
        <div id="slider1_container" style="visibility: hidden; position: relative; margin: 0 auto;
        top: 0px; left: 0px; width: 1300px; height: 450px; overflow: hidden;">
            <!-- Loading Screen -->
            <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
                top: 0px; left: 0px; width: 100%; height: 100%;">
                </div>
                <div style="position: absolute; display: block; background: url(img/slider/loading.gif) no-repeat center center;
                top: 0px; left: 0px; width: 100%; height: 100%;">
                </div>
            </div>
            <!-- Slides Container -->
            <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px; height: 450px; overflow: hidden; border 1;">
                <div>
                    <img u="image" src2="img/slider/photos/1.jpg" />
                    <!--<div class="carousel-caption">
				    	<h5>Chania</h5>
				    	<p>The atmosphere in Chania has a touch of Florence and Venice.</p>
				    </div>-->
                </div>
                <div class="carousel-caption">
                     <img u="image" src2="img/slider/photos/2.jpg" />                  
                </div>
                <div>
                    <img u="image" src2="img/slider/photos/3.jpg" />
                </div>
                <div>
                    <img u="image" src2="img/slider/photos/4.jpg" />
                </div>
                <div>
                    <img u="image" src2="img/slider/photos/5.jpg" />
                </div>
            </div>            
            <!--#region Bullet Navigator Skin Begin -->
            <!-- Help: http://www.jssor.com/tutorial/set-bullet-navigator.html -->
            <style>
                /* jssor slider bullet navigator skin 21 css */
                /*
                .jssorb21 div           (normal)
                .jssorb21 div:hover     (normal mouseover)
                .jssorb21 .av           (active)
                .jssorb21 .av:hover     (active mouseover)
                .jssorb21 .dn           (mousedown)
                */
                .jssorb21 {
                    position: absolute;
                }
                .jssorb21 div, .jssorb21 div:hover, .jssorb21 .av {
                    position: absolute;
                    /* size of bullet elment */
                    width: 19px;
                    height: 19px;
                    text-align: center;
                    line-height: 19px;
                    color: white;
                    font-size: 12px;
                    background: url(img/slider/b21.png) no-repeat;
                    overflow: hidden;
                    cursor: pointer;
                }
                .jssorb21 div { background-position: -5px -5px; }
                .jssorb21 div:hover, .jssorb21 .av:hover { background-position: -35px -5px; }
                .jssorb21 .av { background-position: -65px -5px; }
                .jssorb21 .dn, .jssorb21 .dn:hover { background-position: -95px -5px; }
            </style>
            <!-- bullet navigator container -->
            <div u="navigator" class="jssorb21" style="bottom: 26px; right: 6px;">
                <!-- bullet navigator item prototype -->
                <div u="prototype"></div>
            </div>
            <!--#endregion Bullet Navigator Skin End -->
            
            <!--#region Arrow Navigator Skin Begin -->
            <!-- Help: http://www.jssor.com/tutorial/set-arrow-navigator.html -->
            <style>
                /* jssor slider arrow navigator skin 21 css */
                /*
                .jssora21l                  (normal)
                .jssora21r                  (normal)
                .jssora21l:hover            (normal mouseover)
                .jssora21r:hover            (normal mouseover)
                .jssora21l.jssora21ldn      (mousedown)
                .jssora21r.jssora21rdn      (mousedown)
                */
                .jssora21l, .jssora21r {
                    display: block;
                    position: absolute;
                    /* size of arrow element */
                    width: 55px;
                    height: 55px;
                    cursor: pointer;
                    background: url(img/slider/a21.png) center center no-repeat;
                    overflow: hidden;
                }
                .jssora21l { background-position: -3px -33px; }
                .jssora21r { background-position: -63px -33px; }
                .jssora21l:hover { background-position: -123px -33px; }
                .jssora21r:hover { background-position: -183px -33px; }
                .jssora21l.jssora21ldn { background-position: -243px -33px; }
                .jssora21r.jssora21rdn { background-position: -303px -33px; }
            </style>
            <!-- Arrow Left -->
            <span u="arrowleft" class="jssora21l" style="top: 123px; left: 8px;">
            </span>
            <!-- Arrow Right -->
            <span u="arrowright" class="jssora21r" style="top: 123px; right: 8px;">
            </span>
        </div>
        <!-- Jssor Slider End -->
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <blockquote style="font-size: 13px;">
                <p>Your Total I.T Provider We provide high quality and advanced services from planning to implementation of business systems, networks, telephone systems and all I.T related products. We make sure total satisfaction from our customer is met by giving them all the support they need.</p>
                <footer><a href = "about" style="color:black;text-decoration: none;" data-toggle="tooltip" title = "About Us">Netlink Advance Solutions, Inc.</a></footer>
            </blockquote>
            <hr>
        </div>
    </div>
    <div class="row animatedParent animateOnce">
        <div class="col-xs-6 col-sm-4 col-md-4 animated bounceInRight">      
            <center><h4><span class="icon-stack"></span> Featured Projects </h4></center>
            <div class="row">
                <div class = "col-xs-12">
                    <?php
                        $projects = "SELECT * FROM projects ORDER BY date DESC LIMIT 0,3";
                        $projects = $conn->query($projects);
                        while ($row = $projects->fetch_object()) {
                    ?>
                        <center>
                            <div class="ih-item square colored effect3 bottom_to_top" id = "ih" style = "box-shadow: 0 2px 6px rgba(0,0,0,0.3); border-radius: 5px; max-height: 150px; max-width: 250px;">
                                <a href="projects/view/<?php echo $row->projects_id;?>">
                                    <div class="img" style="max-height: 150px; max-width: 250px;">
                                        <img style="max-height: 150px; width: 250px;" src="<?php echo $row->thumbnail;?>" alt="<?php echo $row->title;?>">
                                    </div>
                                    <div class="info">
                                        <h3><?php echo $row->title;?></h3>
                                    </div>
                                </a>
                            </div>
                        </center>
                        <br class="visible-xs">
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-4 animated bounceInUp">      
            <center><h4><span class="icon-wrench"></span> Featured Services </h4></center>
            <div class="row">
                <div class = "col-xs-12">
                    <?php
                        $projects = "SELECT * FROM services ORDER BY RAND() LIMIT 0,3";
                        $projects = $conn->query($projects);
                        while ($row = $projects->fetch_object()) {
                    ?>
                        <center>
                            <div class="ih-item square colored effect3 bottom_to_top" id = "ih" style = "box-shadow: 0 2px 6px rgba(0,0,0,0.3); border-radius: 5px !important; max-height: 150px; max-width: 250px;">
                                <a href="services/view/<?php echo $row->services_id;?>">
                                    <div class="img" style="max-height: 150px; max-width: 250px;">
                                        <img style="max-height: 150px; width: 250px;" src="img/services/<?php echo $row->img;?>" alt="<?php echo $row->header;?>">
                                    </div>
                                    <div class="info">
                                        <h3><?php echo $row->header;?></h3>
                                    </div>
                                </a>
                            </div>
                        </center>
                        <br class="visible-xs">
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 animated bounceInLeft">      
            <center><h4><span class="icon-user-tie"></span> Open Position/s </h4></center>
            <div class="row">
                <div class = "col-xs-12">
                    <?php
                        $projects = "SELECT * FROM careers where career_state = 1 ORDER BY urgent DESC LIMIT 0,3";
                        $projects = $conn->query($projects);
                    if($projects->num_rows > 0){
                        while ($row = $projects->fetch_object()) {
                    ?>
                        <center>
                            <div class="ih-item square colored effect3 bottom_to_top" id = "ih" style = "box-shadow: 0 2px 6px rgba(0,0,0,0.3); border-radius: 5px !important; max-height: 130px; max-width: 230px;">
                                <a href="careers&id=<?php echo $row->career_id;?>">
                                    <div class="img" style="max-height: 150px; max-width: 250px;">
                                        <img style="max-height: 130px; width: 230px;" src="img/ppl.gif" alt="<?php echo $row->career_title;?>">
                                    </div>
                                    <div class="info">
                                        <h3><?php echo $row->career_title;?></h3>
                                    </div>
                                </a>
                            </div>
                            <label><u><?php echo $row->career_title;?></u></label>
                        </center>
                        <br class="visible-xs">                      
                    <?php
                        }
                    }else{
                        echo '<br><br><br><br><center><u><h4 style = "color:red;"> No Open Position for now</h4></u></center>';
                    } 
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class = "row animatedParent animateOnce">
        <div class="col-xs-12 animated bounceInUp delay-250">
            <hr><br>
            <center><h4><i>Our Partners</i></h4></center>
            <br>
            <div id="thumbnail-slider">
                <div class="inner">
                    <ul>
                    <?php 
                        $photos = "SELECT * FROM photos where project_id = -1 ORDER BY RAND()";
                        $photos = $conn->query($photos);
                        if($photos->num_rows > 0){
                            while($row = $photos->fetch_object()){
                            echo 
                                '<li>
                                    <a class="thumb" href="img/partners/'.$row->location.'"></a>
                                </li>';
                            }
                        }
                    ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- jssor slider scripts-->
<!-- use jssor.slider.debug.js for debug -->
<script type="text/javascript" src="js/slider/jssor.slider.mini.js"></script>
<script>
    jQuery(document).ready(function ($) {

        var options = {
            $FillMode: 2,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actual size, 5 contain for large image, actual size for small image, default value is 0
            $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
            $Idle: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
            $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

            $ArrowKeyNavigation: true,                          //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
            $SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
            $SlideDuration: 800,                               //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
            $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
            //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
            //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
            $SlideSpacing: 0,                                   //[Optional] Space between each slide in pixels, default value is 0
            $Cols: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
            $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
            $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
            $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
            $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $Cols is greater than 1, or parking position is not 0)
          
            $BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
                $Class: $JssorBulletNavigator$,                 //[Required] Class to create navigator instance
                $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                $Rows: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                $SpacingX: 8,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                $SpacingY: 8,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                $Orientation: 1,                                //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                $Scale: false                                   //Scales bullets navigator or not while slider scale
            },

            $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
            }
        };

        var jssor_slider1 = new $JssorSlider$("slider1_container", options);

        //responsive code begin
        //you can remove responsive code if you don't want the slider scales while window resizing
        function ScaleSlider() {
            var bodyWidth = document.body.clientWidth;
            if (bodyWidth)
                jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1920));
            else
                window.setTimeout(ScaleSlider, 30);
        }
        ScaleSlider();

        $(window).bind("load", ScaleSlider);
        $(window).bind("resize", ScaleSlider);
        $(window).bind("orientationchange", ScaleSlider);
        //responsive code end
    });
</script>