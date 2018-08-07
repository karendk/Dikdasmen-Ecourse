<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $title; ?></title>
	<meta charset='utf-8'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="MAKUS CORP" />	
	<link rel="icon" href="<?=base_url('asset/favicon.png');?>" type="image/x-icon">
	<link href="<?=base_url('style/css/bootstrap.css');?>" rel="stylesheet">
    <link href="<?=base_url('style/css/material/material-dashboard.css');?>" rel="stylesheet"/>
    <style type="text/css">
		body{
		    margin-top: 0px;
		    margin-left: 0px;
		    margin-right:0px;
		    margin-bottom: 0px;
		    background-color:#f9f9f9;
		    overflow-x: scroll;
		    overflow-x:hidden;
		}
    	div.modal-backdrop {
		    z-index: 1 !important;
		    -webkit-transform: translateZ(-1) !important;
		    position: fixed !important;
		}

		.kotak {
		  position: relative;
		  width: 40px;
		  height: 40px;
		  overflow: hidden;
		}
		.kotak img {
		  position: absolute;
		  left: 50%;
		  top: 50%;
		  height: 100%;
		  width: auto;
		  -webkit-transform: translate(-50%,-50%);
		      -ms-transform: translate(-50%,-50%);
		          transform: translate(-50%,-50%);
		}
		.kotak img.portrait {
		  width: 100%;
		  height: auto;

		}
		.kotak img.preview:hover{   

		    left: 50%;
		    top: 50%; 
		    transform: scale(0.5);
		}
		.over{
		    overflow-x: hidden;
		    overflow-y: hidden;
		}
		.grow:hover {
		    -webkit-transform: scale(1.1);
		    -moz-transform: scale(1.1);
		    -o-transform: scale(1.1);
		    transform: scale(1.1);
		    -webkit-opacity: 0.8;
		    -moz-opacity: 0.8;
		  height: auto;
		}
		/*PRELOADER*/
		#preloader {
			position: fixed;
			left: 0px;
			top: 0px;
			z-index: 99999;
			width: 100%;
			height: 100%;
			overflow: visible;
    		background: #fafafa none repeat scroll 0% 0%;
		}
		.socket {
			position: relative;
			top: 40%;
			width: auto;
			height: auto;
			margin: auto;
			display:block;
		}
		.socket img{
			display:block;
			margin:auto;
			width: 50px;
			height: 50px;
		}
		/*PRELOADER END*/
    </style>
	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
	
	<script src="<?=base_url('style/js/jquery.js');?>" type="text/javascript" ></script>
	<script src="<?=base_url('style/js/makus.js');?>" type="text/javascript" ></script>
</head>
<body>	
	<!-- PRELOADER -->
	<div id="preloader">
		<div class="socket">
			<img src="<?=base_url('asset/preloader.gif')?>" alt="">
		</div>
	</div>
	<!-- PRELOADER END -->