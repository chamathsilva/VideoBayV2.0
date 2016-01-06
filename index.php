<?php

?>

<html>

<head>
    <title> </title>



    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!--Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/CSS/custom/indexstyle.css">



</head>

<body>
<div class="wrapper">
<?php include 'application/views/includes/navbarindex.php' ?>
    <div class="top-content">
        <div class="inner-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 text  " >
                        <h1><strong>UCSC VideoBay</strong></h1>
                        <div class="description">
                            <p>
                                UCSS VideoBay is a web based system which creates a learning environment
                                for the students and lecturers and it also creates
                                a virtual bridge to link students and lectures.
                            </p>
                            <button class="show-video" href="../../data/IEEE-R10-Video-trailler.mp4">Watch the Video</button>



                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
            <div class="gallarycontent">
                <div class="container">
                    <div class="row row-centered">
                        <div class="col-md-12 text2">
                            <h1 >Gallery</h1>
                            <div id="results"></div>
                        </div>
                        <div class="col-md-12 " style="text-align: center">
                            <div class="pagination" ></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>






    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!--jquery form -->
    <script src="http://malsup.github.com/jquery.form.js"></script>
    <!--jquery validation -->
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


    <!--UCSC Vidobay-->
    <script src="assets/JS/validation.js"></script>


    <script>



        $("#login_form").validate({
            rules:{
                username:{
                    required: true

                },
                password: {
                    required: true
                }
            }
        });


        function testSubmit(){
            $('#login_form').ajaxSubmit({
                beforeSubmit:  beforeSubmit,
                success: function(data) {
                    var obj = jQuery.parseJSON( data);

                    if (obj.typee == 1){
                        $("#feedback").hide().html(obj.resultt).slideDown("slow");
                    }else{
                        document.getElementById("login_form").reset();
                        window.location.replace(obj.resultt);
                    }


                    //window.location.replace(data[2]);

                    //alert("Thank you for your comment!" + data);
                    //$('#feedback').html(data);


                    //;

                }

            });
            return false;

         function beforeSubmit(){
                if (!$('#login_form').valid()) {
                    //alert("form is invalid");
                    return false
                }
                //alert("form is valid");
            }

        }

    </script>







</body>


<html>


