<?php
/**
 * Created by PhpStorm.
 * User: Smalkakulage
 * Date: 8/30/15
 * Time: 4:55 PM
 */ ?>


<!-- Navigation -->
<nav id="adminnavbar" class="admin navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="admin navbar-header">
        <button type="button" class="admin navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="admin navbar-brand" href="adminHome.php">UCSC VideoBay Admin</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="admin nav navbar-right top-nav">
        <li class="dropdown">
            <a onclick="loadfeedback()" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-envelope"></i> <b class="caret"></b></a>
            <ul class="dropdown-menu message-dropdown" id="feedback_dropdown">

            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
            <ul class="dropdown-menu alert-dropdown">
                <li>
                    <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">View All</a>
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> AdminName <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="../user/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>


    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul id = "adminNav" class="admin nav navbar-nav side-nav">
            <li id = "345">
                <a onclick="loadDashboard()"><i class="fa fa-fw fa-dashboard" ></i> Dashboard</a>
            </li>

            <li>
                <a onclick="loadPublishlessons()"><i class="fa fa-fw fa-bar-chart-o"></i> add Lessons</a>
            </li>

            <li>
                <a onclick="loadRegisterUsers()"><i class="fa fa-fw fa-edit"></i>Add Users</a>
            </li>

            <li>
                <a onclick="loadmanageUsers()"><i class="fa fa-fw fa-edit"></i>Manage Users</a>
            </li>

            <li>
                <a onclick="loadmanageLessons()"><i class="fa fa-fw fa-edit"></i>Manage lessons</a>
            </li>

            <li>
                <a onclick="loadmasseges()"><i class="fa fa-fw fa-edit"></i>Messages</a>
            </li>

        </ul>



    </div>
    <!-- /.navbar-collapse -->



</nav>



