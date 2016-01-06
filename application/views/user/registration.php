<?php
/**
 * Created by PhpStorm.
 * User: Smalkakulage
 * Date: 1/6/16
 * Time: 6:00 PM
 */
?>

<html>
<head>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!--Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../assets/CSS/custom/indexstyle.css">
    <style type="text/css">
        body {
            background-color:#525453;

        }
        .pad-top {
            padding-top:70px;
        }
        .panel-set {
            border-radius:0px;
        }
    </style>
</head>
<body>
<?php include '../includes/navbarindex.php' ?>

<div class="row " style="padding-top: 50px;">
    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
        <div class="panel panel-info panel-set pcolor">
            <div class="panel-heading">
                Enter Details to Register
            </div>
            <div class="panel-body">
                <label>Enter Your Name</label>
                <input type="text" class="form-control" >
                <label>Enter Your Email</label>
                <input type="text" class="form-control" >
                <label>Enter Password </label>
                <input type="password" class="form-control" >
                <label>Re-Enter Password </label>
                <input type="password" class="form-control" >
                <hr />

                <a href="#" class="btn btn-success">Sign Up Now ! </a>

                <hr />
                Please fill all above fields carefully to register / sign up.


            </div>
        </div>
    </div>
</div>
<!-- ROW END -->

</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!--jquery validation -->
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


</body>

</html>

