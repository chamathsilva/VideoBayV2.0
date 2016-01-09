<?php

    require("../../models/DB/Db.class.php");
    $db = new Db();
    $dbh = $db->getPurePodo();
    include("../../models/PHPAuth/Config.php");
    include("../../models/PHPAuth/Auth.php");
    $config = new PHPAuth\Config($dbh);
    $auth   = new PHPAuth\Auth($dbh, $config);

    //$uid = $auth->getSessionUID($auth->getSessionHash());

    $uid = 18;
    $result = $auth->getUser($uid);

    $email = $result['email'];
    $firstname = $result['firstName'];
    $lastname = $result['Lastname'];
    $username  = $result['username'];


?>


<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UCSC VideoBay</title>


    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!--Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../../../public/css/form-elements.css">
    <link rel="stylesheet" href="../../../public/css/ucscvideobay.css">
    <link rel="stylesheet" href="../../../public/css/navbaruser.css">

    <!--<link rel="stylesheet" type="text/css" href="../../../public/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="../../../public/slick/slick-theme.css"/>

    <!-- Color Box -->
    <link rel="stylesheet" href="../../../public/css/colorbox.css" />





</head>

<body>
<div class="wrapper">
    <div class="box">
        <div class="row row-offcanvas row-offcanvas-left">


            <div class="column col-sm-2 col-xs-1 sidebar-offcanvas" id="sidebar">

                <!-- side bar -->
                <?php
                include '../../views/includes/sidebar.php'
                ?>
            </div>
            <!-- main right col -->
            <div class="column col-sm-10 col-xs-11" id="main">
                <?php
                include '../includes/userhomenavbar.php'
                ?>


                <div class="full ">
                    <div class= "container-fluid">

                        <h3><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GENERAL ACCOUNT SETTINGS</strong></h3>

                        <div class="jumbotron-fluid col-md-offset-1	col-md-7 col-sm-offset-2 col-sm-8 col-xs-offset-3 col-xs-7">
                            <br>
                            <br>
                            <div class="panel-group" id="accordion">

                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#name">Update Name</a>
                                        </h4>
                                    </div>
                                    <div id="name" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <label class="control-label col-sm-4 col-xs-11" style="font-weight:normal" for="fname">Update First Name </label>
                                            <div class="col-sm-5 col-sm-offset-3 col-xs-9 col-xs-offset-1">
                                                <input type="text" class="form-control" id="Fname"  value="<?php echo $firstname;?>" placeholder="Enter First Name">
                                                <br>
                                            </div>
                                            <label class="control-label col-sm-4 col-xs-11" style="font-weight:normal" for="lname">Update Last Name </label>
                                            <div class="col-sm-5 col-sm-offset-3 col-xs-9 col-xs-offset-1">
                                                <input type="text" class="form-control" id="Lname" value="<?php echo $lastname;?>" placeholder="Enter Last Name">
                                                <br>
                                            </div>
                                            <button type="button" class="btn  col-sm-2 col-sm-offset-6 col-xs-11 " style="box-shadow: 2px 2px 10px grey">Confirm</button>
                                            <button type="button" class="btn  col-sm-2 col-sm-offset-1 col-xs-11 " style="box-shadow: 2px 2px 10px grey" >Cancel</button>

                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#email">Change Email address</a>
                                        </h4>
                                    </div>
                                    <div id="email" class="panel-collapse collapse">
                                        <div class="panel-body">

                                            <label class="control-label col-sm-4 col-xs-11" style="font-weight:normal" for="email1">Your current email address </label>
                                            <label class="control-label col-sm-5 col-sm-offset-3 col-xs-9 col-xs-offset-1" style="font-weight:normal" for="email1"><?php echo "$email";?> </label>

                                            <label class="control-label col-sm-4 col-xs-11" style="font-weight:normal" for="email2"><br>Enter your new email </label>
                                            <div class="col-sm-5 col-sm-offset-3 col-xs-9 col-xs-offset-1">
                                                <br>
                                                <input type="email" class="form-control" id="email2" placeholder="New Email">
                                                <br>
                                            </div>
                                            <button type="button" class="btn btn-primary col-sm-2 col-sm-offset-6 col-xs-11 " style="box-shadow: 2px 2px 10px grey">Confirm</button>
                                            <button type="button" class="btn btn-primary col-sm-2 col-sm-offset-1 col-xs-11 " style="box-shadow: 2px 2px 10px grey" >Cancel</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#password">Change password</a>
                                        </h4>
                                    </div>
                                    <div id="password" class="panel-collapse collapse">
                                        <div class="panel-body">

                                            <label class="control-label col-sm-4 col-xs-11" style="font-weight:normal" for="password1">Enter your current password </label>
                                            <div class="col-sm-5 col-sm-offset-3 col-xs-9 col-xs-offset-1">
                                                <input type="password" class="form-control" id="psw1" placeholder="Enter Password">
                                                <br>
                                            </div>

                                            <label class="control-label col-sm-4 col-xs-11" style="font-weight:normal" for="password2">Enter your new password </label>
                                            <div class="col-sm-5 col-sm-offset-3 col-xs-9 col-xs-offset-1">
                                                <input type="password" class="form-control" id="psw2" placeholder="New Password">
                                                <br>
                                            </div>

                                            <label class="control-label col-sm-4 col-xs-11" style="font-weight:normal" for="password3">Confirm your new password  </label>
                                            <div class="col-sm-5 col-sm-offset-3 col-xs-9 col-xs-offset-1">
                                                <input type="password" class="form-control" id="psw3" placeholder="Re-enter password">
                                                <br>
                                                <br>
                                            </div>

                                            <button type="button" class="btn btn-primary col-sm-2 col-sm-offset-6 col-xs-11 " style="box-shadow: 2px 2px 10px grey">Confirm</button>
                                            <button type="button" class="btn btn-primary col-sm-2 col-sm-offset-1 col-xs-11 "  style="box-shadow: 2px 2px 10px grey" >Cancel</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>



                        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
                        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
                        <!--<script src="../../../library/Jquery/jquery.js"></script>-->
                        <script src="../../../public/js/ucscvideobay.js"></script>

</body>
</html>