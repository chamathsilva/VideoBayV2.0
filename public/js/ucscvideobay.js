$(document).ready(function(){
    $("#registration").click(function(){
    url = "registration.php";
      $( location ).attr("href", url);
      return false;
        
    });

    $("#introduction_next").click(function(){
        url = "../../models/saveForm.php";
        $( location ).attr("href", url);
        return false;

    });

    $("#flip").click(function(){
        $("#panel").slideToggle("fast");
        $("#navigator").slideToggle("fast");
    });



    $("#show").click(function(){
        $("p").show();
    });

	//$(".show-video").colorbox({iframe:true, innerWidth:650, innerHeight:390});


    $(function() {
        $('#nav2 li a').click(function() {
            $('#nav2 li').removeClass();
            $($(this).attr('href')).addClass('active');
        });
    });



    $(function() {
        $('#adminNav li a').click(function() {
            $('#adminNav li').removeClass();
            $($(this).attr('href')).addClass('active');
        });
    });





});



(function ($) {
    "use strict";
    var mainApp = {

        main_fun: function () {

            //ADD REMOVE PADDING CLASS ON SCROLL
            $(window).scroll(function () {
                if ($(".navbar").offset().top >50) {
                    $(".navbar-fixed-top").addClass("navbar-pad-original");
                } else {
                    $(".navbar-fixed-top").removeClass("navbar-pad-original");
                }
            });
            //SLIDESHOW SCRIPT
       

        },

        initialization: function () {
            mainApp.main_fun();

        }

    };
    // Initializing ///

    $(document).ready(function () {
        mainApp.main_fun();
    });

}(jQuery));




/* ------------------user profile -----------------*/
/*
$(document).ready(function() {
    var panels = $('.user-infos');
    var panelsButton = $('.dropdown-user');
    panels.hide();

    //Click dropdown
    panelsButton.click(function() {
        //get data-for attribute
        var dataFor = $(this).attr('data-for');
        var idFor = $(dataFor);

        //current button
        var currentButton = $(this);
        idFor.slideToggle(400, function() {
            //Completed slidetoggle
            if(idFor.is(':visible'))
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
            }
            else
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
            }
        })
    });


    $('[data-toggle="tooltip"]').tooltip();

    $('button').click(function(e) {
        e.preventDefault();
        alert("This is a demo.\n :-)");
    });
});
*/