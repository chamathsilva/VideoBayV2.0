<?php
/**
 * Created by PhpStorm.
 * User: Smalkakulage
 * Date: 1/9/16
 * Time: 1:55 AM
 */

?>

<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>UCSC Video Bay</title>

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!--Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/CSS/custom/indexstyle.css">
    <!--color box -->
    <link rel="stylesheet" href="assets/CSS/colorbox.css">
    <link rel="stylesheet" href="assets/CSS/custom/navbaruser.css">



</head>

<body>

<div class="wrapper">
        <?php include 'application/views/includes/navbarindex.php' ?>
      <div class="row row-offcanvas row-offcanvas-left">

            <div class="column col-sm-2 col-xs-1 sidebar-offcanvas" id="sidebar">

                <ul class="nav">
                    <li><a href="#" data-toggle="offcanvas" class="visible-xs text-center"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
                </ul>

                <ul class="nav hidden-xs" id="lg-menu">
                    <li style="padding-left: 40px;font-family: Helvetica">Main Topics</li>
                </ul>

                <ul class="nav hidden-xs">
                    <div class="row">
                        <li style="margin-bottom: 15px; margin-top:10px; ">Watch Next</li>
                        <div id="watch_next"></div>

                        <li style="margin-bottom: 15px; margin-top:10px; ">Watch later</li>
                        <div id="watch_later"></div>

                    </div>

                </ul>

            </div>
            <!-- main right col -->
            <div class="column col-sm-10 col-xs-11" id="main">
                <div class="full">
                    <div class="col-sm-12 text">
                        <div id="results">

                        </div>
                    </div>


                    <!--hide karala tibba eka ain kara -->
                    <div id = "lessonplay" class = "hideee" class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <video id="myVideo" class="embed-responsive-item"  width = "300px" height ="400px" autoplay controls>
                                        <source src="">
                                        Video
                                    </video>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <img id="xx" class="img-responsive" src="assets/images/1.JPG" alt="Wrong link" min-width="100%" height="auto" >
                            </div>



                            <div class=" col-sm-12">

                                <div class = "slidNavigator" style="margin-left: -10px;">
                                    <div class="col-sm-10">
                                        <div class="detail-panal" style="width: 122%;height: 53px;margin-bottom: 5px;">
                                            <div class="col-sm-4">
                                                <div class="lesson-topic">
                                                    Topic
                                                </div>
                                            </div>


                                            <div class="col-sm-2 text-right">
                                                <button  onclick="addWatchlater();" class="btn">Watch later</button>

                                            </div>


                                            <div class="col-sm-6">
                                                <div class="lesson-topic">
                                                    <i class="fa fa-graduation-cap"></i>
                                                    lecture
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>



                                <div class="col-sm-12">
                                    <!--div class="detail-panal" style="border:0px solid black;width:122%;height:300px;overflow-y:hidden;overflow-x:scroll;"-->
                                    <div class="wrap">

                                        <div class="frame" id="centered">
                                            <ul class="slidee">

                                                <li>
                                                    <article data-start="" data-end="">
                                                        <a hreff="#"><img src="assets/images/1.JPG" height="140"  onclick="setCurTime()"></a>
                                                    </article>
                                                </li>



                                            </ul>
                                        </div>


                                        <!-- Controls & Scroll Bar-->
                                        <div class="controls center">
                                            <button class="btn prevPage"> <-- page</button>
                                            <button class="btn prev"><i class="icon-chevron-left"></i> prev</button>
                                            <button class="btn next">next <i class="icon-chevron-right"></i></button>
                                            <button class="btn nextPage">page --> </button>
                                        </div>

                                        <div class="scrollbar">
                                            <div class="handle">

                                            </div>
                                        </div>


                                    </div>




                                    <div class="info text-center ">
                                        <!--disply current slid num -->
                                        <div id = current >
                                            slide no
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>


                </div>


            </div>

</div>
</body>
</html>

