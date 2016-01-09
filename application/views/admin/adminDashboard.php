<div class="row"> <!--do not remove this -->


    <div class="col-lg-12">
        <h1 class="page-header" style="margin:50px 0px 20px">
            Dashboard <small>Statistics Overview</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Dashboard
            </li>
        </ol>






        <div class="col-sm-12">
            <div id="graph">
                <img style="margin-left:30px;" src="../../../assets/images/ajax-loader.gif">
                Loading...
            </div>
        </div>


        <div class="col-sm-12">
            <div class="clearfix " style="margin-left: 100px; margin-top: 40px;">
                <div id="pinkcircle" style="margin-left: 50px; data-text="work" data-percent="65" class="red "></div>
                <div id="bluecircle" style="margin-left: 50px; data-text="rest" data-percent="87" class="purple"></div>
                <div id="bluecircle" style="margin-left: 50px; data-text="play" data-percent="30" class=" blue"></div>
                <div id="bluecircle" style="margin-left: 50px; data-text="play" data-percent="30" class=" blue"></div>
                <div id="clock" style="margin-left: 50px;class="purple "></div>
            </div>
        </div>

    </div>

</div><!--do not remove -->


<script>
    $("#graph").load("../../controllers/statics/graph_data.php");

    $(function(){
        $("[id$='circle']").percircle();

        $("#clock").percircle({
            perclock: true
        });

        $("#custom").percircle({
            text:"custom",
            percent: 27
        });
    });
</script>