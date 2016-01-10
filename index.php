<?php

//FUNCTION HADANNA DB EKEN MEWA GANNA PULUWAN VENNA

    $item_per_page = 4; //need to put this configuration file
    require("application/models/DB/Db.class.php");
    $db = new Db();
    $get_total_rows = 0;

    $lessons = $db->query("SELECT COUNT(*) FROM lesson");

    $get_total_rows = $lessons[0]["COUNT(*)"];
    //break total records into pages
    $total_pages = ceil($get_total_rows/$item_per_page);



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
                                UCSC VideoBay is a web based system which creates a learning environment
                                for the students and lecturers and it also creates
                                a virtual bridge to link students and lectures.
                            </p>


                            <a class="videoBay" href="data/IEEE-R10-Video-trailler.mp4" title= "VidoBay demo">
                                <button class="show-video" href="data/IEEE-R10-Video-trailler.mp4">Watch the Video</button>
                            </a>




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
                            <div id="results">

                                <img src="assets/images/ajax-loader.gif">  Loading...
                                <!--
                                <div class="col-lg-3 col-md-4 col-xs-6">
                                    <a class="thumbnail" href="#">
                                        <img class="img-responsive" src="assets/images/1.JPG" alt="">
                                        <h4>Bubble sort</h4>
                                        <h6 >basic configurations</h6>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-xs-6">
                                    <a class="thumbnail" href="#">
                                        <img class="img-responsive" src="assets/images/2.JPG" alt="">
                                        <h4>dijustra algorithm</h4>
                                        <h6 >basic configurations</h6>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-xs-6">
                                    <a class="thumbnail" href="#">
                                        <img  class="img-responsive"  src="assets/images/3.JPG" alt="">
                                        <h4 >IP configuration</h4>
                                        <h6 >basic configurations</h6>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-xs-6">
                                    <a class="thumbnail" href="#">
                                        <img class="img-responsive" src="assets/images/4.JPG" alt="">
                                        <h4>mySQL</h4>
                                        <h6 >basic configurations</h6>
                                    </a>
                                </div>

                                -->




                            </div> <!--end of result div -->

                            <div class="col-sm-12 text " id="loadmore" style="margin-bottom: 20px;">
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

    <!--color box -->
    <script src="assets/JS/jquery.colorbox-min.js"></script>

    <!--UCSC Vidobay-->
    <script src="assets/JS/validation.js"></script>

    <!--login script-->
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

                    //json eke enne typee kiyana ekekn error ekak da nadda kiyana eka

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
    <!--end of login -->


    <script type="text/javascript">
        $(document).ready(function() {

            var track_click = 0; //track user click on "load more" button, righ now it is 0 click

            var total_pages = <?php echo $total_pages; ?>;
            $('#results').load("application/controllers/fetchLessons/fetchLessonsForIndex.php", {'page':track_click}, function() {track_click++;}); //initial data to load

            //show load more button
            $("#loadmore").html('<div align="center"><button class="load_more" id="load_more_button">load More</button> <div class="animation_image" style="display:none;"><img src="assets/images/ajax-loader.gif"> Loading...</div> </div>');


            $(".load_more").click(function (e) { //user clicks on button

                $(this).hide(); //hide load more button on click
                $('.animation_image').show(); //show loading image

                if(track_click <= total_pages) //make sure user clicks are still less than total pages
                {
                    //post page number and load returned data into result element
                    $.post('application/controllers/fetchLessons/fetchLessonsForIndex.php',{'page': track_click}, function(data) {

                        $(".load_more").show(); //bring back load more button

                        $("#results").append(data); //append data received from server

                        //scroll page to button element
                        $("html, body").animate({scrollTop: $("#load_more_button").offset().top},1000);

                        //hide loading image
                        $('.animation_image').hide(); //hide loading image once data is received

                        track_click++; //user click increment on load button

                    }).fail(function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError); //alert any HTTP error
                        $(".load_more").show(); //bring back load more button
                        $('.animation_image').hide(); //hide loading image once data is received
                    });


                    if(track_click >= total_pages-1)
                    {
                        //reached end of the page yet? disable load button
                        $(".load_more").attr("disabled", "disabled");
                        $(".load_more").html("<div class='all_loaded'>No More Content to Load</div>");

                    }

                }

            });
        });
    </script>

    <script>
        $(document).ready(function(){

            $(".videoBay").colorbox({iframe:true, innerWidth:640, innerHeight:360});
        });
    </script>

</body>


</html>


