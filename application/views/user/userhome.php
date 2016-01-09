<?php
/**
 * Created by PhpStorm.
 * User: Smalkakulage
 * Date: 1/7/16
 * Time: 12:58 AM
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

    <link rel="stylesheet" href="../../../assets/CSS/custom/userhome.css">
    <link rel="stylesheet" href="../../../assets/CSS/custom/navbaruser.css">




</head>
<body>
    <div class="wrapper">
        <div class="column col-sm-12 col-xs-12" id="main">
                <?php include '../includes/userhomenavbar.php' ?>
        </div>
        <div class="box">
            <div class="row row-offcanvas row-offcanvas-left">
                <div class="column col-sm-2 col-xs-1 sidebar-offcanvas" id="sidebar">
                    <!-- side bar -->
                    <?php include '../../views/includes/sidebar.php' ?>
                </div>

                <div class="column col-sm-10 col-xs-11" id="main">
                    <div class="full">
                        <div id="feedback"> </div>
                            <div class="col-sm-12 col-xs-12 text recent">
                                <h3 id="topic" style="text-align: center">Recent view</h3>
                                <hr>
                                <div id="recentLesson">
                                    <div class="col-md-5 col-xs-8 col-md-offset-3 text2" style="align-content: center">
                                        <a onclick="" class="thumbnail" href="#">
                                            <img class="img-responsive" src="../../../assets/images/1.JPG" alt="">
                                            <h4>RERER</h4></a>
                                    </div>
                                </div>
                            </div>

                        <!--current lessons -->
                        <div class="col-sm-12 text" id="result_wrap">
                            <h3 style="text-align: center">Current lessons</h3>
                            <!-- all lessons load by AJAX to results div -->
                            <div id="results">
                                <div class="col-lg-3 col-md-4 col-xs-6 ">
                                    <a onclick="" class="thumbnail" href="#">
                                        <img class="img-responsive" src="../../../assets/images/1.JPG" alt="">
                                        <h4>RERER</h4>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-xs-6 text2">
                                    <a onclick="" class="thumbnail" href="#">
                                        <img class="img-responsive" src="../../../assets/images/1.JPG" alt="">
                                        <h4>RERER</h4>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-xs-6 text2">
                                    <a onclick="" class="thumbnail" href="#">
                                        <img class="img-responsive" src="../../../assets/images/1.JPG" alt="">
                                        <h4>RERER</h4>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-xs-6 text2">
                                    <a onclick="" class="thumbnail" href="#">
                                        <img class="img-responsive" src="../../../assets/images/1.JPG" alt="">
                                        <h4>RERER</h4>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-xs-6 text2">
                                    <a onclick="" class="thumbnail" href="#">
                                        <img class="img-responsive" src="../../../assets/images/1.JPG" alt="">
                                        <h4>RERER</h4>
                                    </a>
                                </div>

                            </div>
                        </div>

                        <div class="col-sm-12 text " id="loadmore" style="margin-bottom: 20px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!--jquery validation -->
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</body>
</html>



