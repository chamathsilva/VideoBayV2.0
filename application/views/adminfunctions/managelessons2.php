
<html>
<head>

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!--Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!--custom admin style -->
    <link rel="stylesheet" href="../../../assets/CSS/custom/adminstyle.css">

    <!--use for animate notification -->
    <link rel="stylesheet" href="../../../assets/CSS/animate.css">  <!-- meke wadak nathi ewa makala danna -->

    <link rel="stylesheet" href="../../../assets/dataTable/css/jquery.dataTables.css">




</head>
<body id="adminbody" onload="viewData()">
<div id="adminwrapper">

    <?php include '../includes/admin_navbar.php' ?>

    <div id="adminpage-wrapper">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="margin:50px 0px 20px">
                        Manage <small>lessons</small>
                    </h1>
                </div>

                <div class="col-lg-12">
                    <div id = "results"></div>
                    </br>
                    <div id= "lesson_table"></div>
                </div>


            </div>
        </div>
    </div>



    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

    <script src="../../../assets/dataTable/js/jquery.dataTables.js"></script>


    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>

    <script>

        function viewData(){
            $.ajax({
                type: "GET",
                url: "lessonTable.php"
            }).done(function(data){
                $("#lesson_table").html(data);

            });
        }

        function updatedata(id){

            //reload table after the mode closed.
            $('#myModal' + id).on('hidden.bs.modal', function () {
                viewData()

            });


            //get input field values data to be sent to server
            var m_data = new FormData();
            m_data.append( 'id',  id);
            m_data.append( 'Name',  document.getElementById("Name" + id).value);
            m_data.append( 'Lecture', document.getElementById("Lecture" + id).value);
            m_data.append( 'Category', document.getElementById("Category" + id).value);
            m_data.append( 'Type', document.getElementById("Type" + id).value);

            // var user_name = document.getElementById("username").value;
            // var password = document.getElementById("password").value;


            //Ajax post data to server
            $.ajax({
                url: '../../models/updateLessons.php',
                data: m_data,
                processData: false,
                contentType: false,
                type: 'POST',
                dataType:'json',
                success: function(response){
                    //load json data from server and output message
                    if (response.type == "text"){
                        $("#results").html(response.text);
                    }else{
                        $("#results").html(response.text);

                    }
                }
            });

        }


        function deletelesson(id){
            var r = confirm("Are you sure !");
            if (r == true) {
                var m_data = new FormData();
                m_data.append('id', id);

                $("#results").html("chamath");
                //Ajax post data to server
                $.ajax({
                    url: '../../models/delete_lessons.php',
                    data: m_data,
                    processData: false,
                    contentType: false,
                    type: 'POST',
                    dataType: 'json',
                    success: function (response) {
                        //load json data from server and output message
                        if (response.type == "text") {
                            $("#results").html(response.text);
                        } else {
                            $("#results").html(response.text);

                        }
                        viewData();
                    }
                });
            }

        }


    </script>






</body>
</html>









