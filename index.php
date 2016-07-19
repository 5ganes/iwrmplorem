<? include("clientobjects.php"); ?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <title>Irrigation and Water Resource Management Project</title>
        <? include("baselocation.php"); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/prettyPhoto/css/prettyPhoto.css">
        <link rel="stylesheet" href="assets/css/flexslider.css">
        <link rel="stylesheet" href="assets/css/font-awesome.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="images/title.ico">
		
        <!--css and jquery fils for dropdown menubar-->
        <link href="css/ddsmoothmenu.css" rel="stylesheet" type="text/css" media="screen" />
		<script src="js/slide.js"></script>
        <script src="js/slides.min.jquery.js"></script>
        <script type="text/javascript" src="js/ddsmoothmenu.js"></script>
   		
		<script type="text/javascript">
			ddsmoothmenu.init({
				mainmenuid: "smoothmenu1", //Menu DIV id
				orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
				classname: 'ddsmoothmenu', //class added to menu's outer DIV
				//customtheme: ["#804000", "#482400"],
				contentsource: "markup", //"markup" or ["container_id", "path_to_menu_file"]
				speed:5000
			})
		</script>
        <!--end of menubar jquery and css-->
        
    </head>

    <body>
    	<div id="fb-root"></div>
			<script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        	</script>

        <!-- Header -->
        <div class="container" style="width:100%">
            <div class="header row" style="width:100%">
                <div class="span12" style="width:100%">
                    <div class="navbar">
                        <div class="navbar-inner" style="background:#2d842d">
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>
                            <h1>
                                <a class="brand" href="index.php"><img style="width: 400px; height: 90px;padding: 8px 0" src="assets/img/logo.png" style="width:100%" /></a>
                            </h1>
                            <div class="nav-collapse collapse">
                            	<div id="menu">
        							<div>
                            			<div id="smoothmenu1" class="ddsmoothmenu">
                                    		<? createMenu(0, "Header"); ?>
                               			</div>
                                 	</div>
                              	</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
        <div class="page-title" style="padding:8px 0 0 0">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <h5 style="margin:0">
                        	<marquee direction="left" onmouseover="this.stop();" onmouseout="this.start();">
								<? $hot=$groups->getById(HOT_NEWS); $hotGet=$conn->fetchArray($hot);?>
								<a style="font-size:17px" href="<?=$hotGet['urlname'];?>">
									<? echo $hotGet['shortcontents'];?>
                               	</a>
                         	</marquee>
                       	</h5>
                    </div>
                    
                </div>
            </div>
        </div>

        <!--main content dynamic part-->
		<?php 
			if(isset($_GET['action']))
			{
				$action = $_GET['action'];
				$action = str_replace(".","", $action);
				include("includes/".$action.".php");			
			}				
			else if(isset($pageLinkType))
			{
				if ($pageLinkType == ""){}
				else if ($pageLinkType == "Product"){ include("includes/showtrip.php"); }
				else if ($pageLinkType == "PackageRegion"){ include("includes/packageregion.php"); }
				else{ include("includes/cmspage.php"); }
			}
			else{ include("includes/main.php"); }
		?>
        
        
        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="widget span3">
                        <? $about=$groups->getById(ABOUTAICC); $aboutGet=$conn->fetchArray($about); ?>
                        <h4><?=$aboutGet['name'];?></h4>
                        <p><?=substr($aboutGet['shortcontents'],0,280);?></p>
                        <p><a href="<?=$aboutGet['urlname'];?>">Read more...</a></p>
                    </div>
                    <div class="widget span3">
                        <? $notice=$groups->getById(NOTICE); $noticeGet=$conn->fetchArray($notice); ?>
                        <h4><?=$noticeGet['name'];?></h4>
                        <p><?=substr($noticeGet['shortcontents'],0,280);?></p>
                        <p><a href="<?=$noticeGet['urlname'];?>">Read more...</a></p>
                    </div>
                    <div class="widget span3">
                        <h4>Connect With Us</h4>
                        <div class="facebook">
                        	<div class="fb-like-box" data-href="https://www.facebook.com/krishighar" data-width="250" data-height="220" data-colorscheme="light" data-show-faces=
                            "true" data-header="false" data-stream="false" data-show-border="true"></div>
                        </div>
                    </div>
                    <div class="widget span3">
                        <? $contact=$groups->getById(CONTACT); $contactGet=$conn->fetchArray($contact); ?>
                        <h4><?=$contactGet['name'];?></h4>
                        <?=$contactGet['shortcontents'];?>
                        
                    </div>
                </div>
                <div class="footer-border"></div>
                <div class="row">
                    <div class="copyright span4">
                        <p>Copyright 20<?=date("y");?>. Irrigation and Water Resource Management Project - All rights reserved. Powered by: <span style="color:#9d426b"><a href="http://www.krishighar.com">Team Krishighar</a></span>.</p>
                    </div>
                    <!--<audio controls><source src="audio.mp3" type="audio/mpeg"></audio>-->
                    <div class="social span8">
                        <a class="facebook" target="_blank" href="https://www.facebook.com/iwrmp" title="Facebook Page"></a>
                        <a class="twitter" target="_blank" href="https://www.twitter.com/iwrmp" title="Twitter"></a>
                        <a class="googleplus" target="_blank" href="https://www.googleplus.com/iwrmp" title="Google Plus"></a>
                        <a class="youtube" target="_blank" href="https://www.youtube.com/iwrmp" title="Youtube Channel"></a>
                        <a class="skype" target="_blank" href="https://www.skype.com/iwrmp" title="Skype"></a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.flexslider.js"></script>
        <!--<script src="assets/js/jquery.tweet.js"></script>-->
        <!--<script src="assets/js/jflickrfeed.js"></script>-->
        <!--<script src="http://maps.google.com/maps/api/js?sensor=true"></script>-->
        <script src="assets/js/jquery.ui.map.min.js"></script>
        <script src="assets/js/jquery.quicksand.js"></script>
        <!--<script src="assets/prettyPhoto/js/jquery.prettyPhoto.js"></script>-->
        <script src="assets/js/scripts.js"></script>

    </body>

</html>