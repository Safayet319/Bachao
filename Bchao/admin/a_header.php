<?php 
 @session_start();

 if(!isset($_SESSION['email'])){ ?>
  <script> window.location.replace("index.php") </script>
  
  
<?php }
include '../db/connect.php'; 
 ?>
 <!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>
		admin
		</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="../css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../css/font-awesome.min.css"/>
        <link rel="stylesheet" href="../fonts/stylesheet.css"/>
        <link rel="stylesheet" href="../css/normalize.css"/>
<!--        <link rel="stylesheet" href="css/main.css"/>-->
		<link rel="stylesheet" href="adstyle.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" >
        <script src="../js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="../js/jquery-3.1.1.min.js"></script>
		<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    </head>
    <body>     
	<!-- Add your site or application content here -->
