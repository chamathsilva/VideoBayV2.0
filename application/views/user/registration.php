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
</head>
<body>
<div class="wrapper">

<?php include '../includes/navbarreg.php' ?>

    <div clas="regcontent">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="form-top">
                    <div class="form-top-left">
                        <h3>Sign up now</h3>
                        <p>Fill in the form below to get instant access:</p>
                    </div>
                    <div class="form-top-right">
                        <i class="fa fa-pencil"></i>
                    </div>
                </div>
                <div class="form-bottom">
                    <form id = "register-form" role="form" action="" method="post" class="registration-form">

                        <div class="form-group">
                            <label class="sr-only" for="form-first-name">First name</label>
                            <input type="text" name="First_Name" id="First_Name" placeholder="First name..." class="form-first-name form-control" >
                        </div>

                        <div class="form-group">
                            <label class="sr-only" for="form-last-name">Last name</label>
                            <input type="text" name="Last_Name" id="Last_Name" placeholder="Last name..." class="form-last-name form-control" >
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="form-first-name">User name</label>
                            <input type="text" name="regUser_Name" id="regUser_Name" placeholder="User name..." class="form-first-name form-control" >
                        </div>

                        <div class="form-group">
                            <label class="sr-only" for="form-email">Email</label>
                            <input type="text" name="E_mail" id="E_mail" placeholder="Email..." class="form-email form-control" >
                        </div>

                        <div class="form-group">
                            <label class="sr-only" for="form-email">Email</label>
                            <input type="password" name="regPassword" id="Password" placeholder="password..." class="form-email form-control" id="regpassword">
                        </div>

                        <div class="form-group">
                            <label class="sr-only" for="form-email">Email</label>
                            <input type="password" name="password_again" id="password_again" placeholder="password again..." class="form-email form-control" >
                        </div>
                        <!--<input type="hidden" name="token" value="<?php// echo Token::generate();?>" >-->

                        <div class="form-group">
                            <label>
                                <input id="terms" name="terms" type="checkbox">
                                I have read,constat and agree ....
                            </label>
                        </div>
                        <button type="submit" class="btn btn-success">Sign up!</button>
                    </form>
                </div>
                <div class="col-sm-3"></div>


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

