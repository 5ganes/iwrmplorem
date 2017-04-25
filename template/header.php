<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>
			<?php
				if($action==0)
				{
					if (!empty($query)) {
						$pageRow = $groups->getByURLName($query);
						if ($pageRow) {
							$pageName = $pageRow['name'];
							$pageNameEn = $pageRow['nameen'];		
						}
					}
				}
			?>
			<?php if($lan=='en'){
                echo 'Irrigation and Water Resource Management Project - ';
                if($pageNameEn!=""){ echo $pageNameEn;}else if(isset($_GET['action'])){ echo $_GET['action'];}else{ echo "Home";}
            }
            else{
                echo 'सिचाई तथा जलश्रोत व्यवस्थापन आयोजना - ';
            	if($pageName!=""){ echo $pageName;}else if(isset($_GET['action'])){ echo $_GET['action'];}else{ echo "गृहपृष्ठ";}
        	}?>
		</title>
		<?php include('baselocation.php'); ?>
		<!-- Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="shortcut icon" href="">  
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" type="text/css">   
        <!-- Global CSS -->
        <link rel="stylesheet" href="styles/bootstrap.min.css">   
        <!-- Plugins CSS -->    
        <link rel="stylesheet" href="styles/font-awesome.css">
        <link rel="stylesheet" href="styles/flexslider.css">
        <link rel="stylesheet" href="styles/prettyPhoto.css"> 
        <!-- Theme CSS -->  
        <link id="theme-style" rel="stylesheet" href="styles/styles.css">
        <script id="twitter-wjs" src="scripts/widgets.js"></script>
        <script id="facebook-jssdk" src="scripts/sdk.js"></script>
        <script type="text/javascript" src="scripts/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" charset="utf-8" async="" src="scripts/timeline.619317855a58aa2366562a395f9e40ef.js"></script>
	</head>
	<body class="home-page">
    	<div class="wrapper">
    		<?php require 'template/header_include.php'; ?>