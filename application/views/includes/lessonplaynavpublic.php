<?php
/**
 * Created by PhpStorm.
 * User: Smalkakulage
 * Date: 1/9/16
 * Time: 4:13 AM
 */ ?>


<?php
/**
 * Created by PhpStorm.
 * User: Smalkakulage
 * Date: 11/2/15
 * Time: 12:04 AM
 */ ?>

<div class="navbar navbar-blue navbar-static-top">
    <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="../user/userhome.php" class="navbar-brand logo">vb </a>
    </div>
    <nav class="collapse navbar-collapse" role="navigation">
        <form class="navbar-form navbar-left" id = "search-form">
            <div class="input-group input-group-sm" id = "search-form" style="max-width:360px;">
                <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                <div class="input-group-btn">
                    <button id="serchbut" class="btn btn-default" type="button"><i class="glyphicon glyphicon-search"></i></button>
                </div>
            </div>
        </form>
        <ul class="nav navbar-nav">
            <li>
                <a href="../user/userhome.php"><i class="glyphicon glyphicon-home"></i> Home</a>
            </li>
            <li>
                <a href="#postModal" role="button" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i>requset</a>
            </li>

        </ul>
        <ul class="nav navbar-nav navbar-right" style="padding-right: 20px;">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="../user/settings_new.php">Settings</a></li>
                    <li><a href="../user/logout.php">Sign Out</a></li>

                </ul>
            </li>
        </ul>
    </nav>
</div>
<!-- /top nav -->