<? include("clientobjects.php"); ?>
<?php
if(isset($_GET['lan'])) $lan=$_GET['lan'];
else $lan='';
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <title>
            <?php if($lan=='en')
                echo 'Irrigation and Water Resource Management Project';
            else
                echo 'सिचाई तथा जलश्रोत व्यवस्थापन आयोजना';
        ?>
        </title>
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

        <style type="text/css">

            .new {
                color:red;
                font-weight: bold;
                animation-name: example;
                animation-duration: 30s;
            }
            @keyframes example {
                0%   {color: red;} 2%   {color: yellow} 4%  {color: red;} 6%  {color: yellow;}
                8%  {color: red;} 10%  {color: yellow;} 12% {color: red;} 14% {color: yellow;}
                16%   {color: red;} 18% {color: yellow;} 20%   {color: red;} 22%   {color: yellow}
                24%  {color: red;} 26%  {color: yellow;} 28%  {color: red;} 30%  {color: yellow;}
                32% {color: red;} 34% {color: yellow;} 36%   {color: red;} 38% {color: yellow;}
                40% {color: red;} 42%   {color: yellow;} 44%   {color: red} 46%  {color: yellow;}
                48%  {color: red;} 50%  {color: yellow;} 52%  {color: red;} 54% {color: yellow;}
                56% {color: red;} 58%   {color: yellow;} 60% {color: red;} 62%   {color: yellow;}
                64%   {color: red} 66%  {color: yellow;} 68%  {color: red;} 70%  {color: yellow;}
                72%  {color: red;} 74% {color: yellow;} 76% {color: red;} 78%   {color: yellow;}
                80% {color: red;} 82%   {color: yellow} 84%  {color: red;} 86%  {color: yellow;}
                88%  {color: red;} 90%  {color: yellow;} 92% {color: red;} 94% {color: yellow;}
                96%   {color: red;} 98% {color: yellow;} 100%   {color: red;}
            }
        </style>
        
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
                        <div class="navbar-inner" style="background:#2269b1">
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>
                            <h1>
                                <a class="brand" href="index.php">
                                    <?php
                                    if($lan=='en'){?>
                                        <img style="width: 400px; height: 106px;padding: 8px 0" src="assets/img/logo_english.png" style="width:100%" />
                                    <?php }
                                    else if($lan==''){?>
                                        <img style="width: 400px; height: 106px;padding: 8px 0" src="assets/img/logo_nepali.png" style="width:100%" />
                                    <?php }?>
                                </a>
                            </h1>
                            <div class="nav-collapse collapse">
                            	<div id="menu">
        							<div>
                            			<div id="smoothmenu1" class="ddsmoothmenu">
                                    		<? createMenu(0, "Header",$lan); ?>
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
                    
                    <div class="span9">
                        <h5 style="margin:0">
                        	<marquee direction="left" onmouseover="this.stop();" onmouseout="this.start();">
								<? $hot=$groups->getById(HOT_NEWS); $hotGet=$conn->fetchArray($hot);?>
								<a style="font-size:17px" href="<? if($lan=='en') echo 'en/'; echo $hotGet['urlname'];?>">
									<? if($lan!='en') echo $hotGet['shortcontents']; else echo $hotGet['shortcontentsen']?>
                               	</a>
                         	</marquee>
                       	</h5>
                    </div>

                    <div class="span3">
                        <h5 style="margin:0">
                            <?php if($lan!='en'){?>
                                Language: <a href="<?=SITE_URL?>en">English</a>
                            <?php }
                            else{?>
                                Language: <a href="<?=SITE_URL?>">Nepali</a>
                            <?php }?>
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
				// else if ($pageLinkType == "Product"){ include("includes/showtrip.php"); }
				// else if ($pageLinkType == "PackageRegion"){ include("includes/packageregion.php"); }
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
                        <h4><? if($lan!='en') echo $aboutGet['name']; else echo $aboutGet['nameen'];?></h4>
                        <p><? if($lan!='en') echo $aboutGet['shortcontents']; else echo $aboutGet['shortcontentsen']?></p>
                        <p><a href="<? if($lan=='en') echo 'en/'; echo $aboutGet['urlname'];?>">Read more...</a></p>
                    </div>
                    <div class="widget span3">
                        <? $notice=$groups->getById(NOTICE); $noticeGet=$conn->fetchArray($notice); ?>
                        <h4><? if($lan!='en') echo $noticeGet['name']; else echo $noticeGet['nameen'];?></h4>
                        <p><? if($lan!='en') echo $noticeGet['shortcontents']; else echo $noticeGet['shortcontentsen']?></p>
                        <p><a href="<? if($lan=='en') echo 'en/'; echo $noticeGet['urlname'];?>">Read more...</a></p>
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
                        <h4><? if($lan!='en') echo $contactGet['name']; else echo $contactGet['nameen'];?></h4>
                        <? if($lan!='en') echo $contactGet['shortcontents']; else echo $contactGet['shortcontentsen']?>
                        
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