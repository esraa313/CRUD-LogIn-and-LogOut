<!-- connection of db -->
<!-- session start -->

<?php
session_start();
define("BURL","http://localhost/medical_project/"); //constant url for all project
define("BURLA","http://localhost/medical_project/Admin/"); //url for admin only
define("assets","http://localhost/medical_project/assets/"); //url for assets (bootstrap - html - css) only

define("BL",__DIR__.'/') ; //url l7d medical_serv l ay user 
define("BLA",__DIR__.'/Admin/') ; //url l7d medical_serv l admin bs

require_once(BL. 'functions/db.php'); //connect to database