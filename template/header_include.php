<!-- ******HEADER****** --> 
  <header class="header container">  
      
      <!--//to-bar-->
      <div class="header-main">
          <h1 class="logo">
              <div class="col-md-2 "><a href="<?php echo SITE_URL; ?>"><img src="images/logo.png" width="120" height=""></a></div>
              <div class="col-md-8 center-text" style="line-height: 20px;margin-top: -1%;">
                  <?php if($lan=='en'){?>
                      <h4>Government of Nepal</h4>
                      <h5>Agriculture Development Ministry</h5>
                      <h4>Department of Agriculture</h4>
                      <h3>Irrigation and Water Resource Management Project</h3>
                      <h4>Kumaripati, Lalitpur, Nepal</h4>
                  <?php }
                  else{?>
                      <h4>नेपाल सरकार</h4>
                      <h5>कृषि विकास मन्त्रालय</h5>
                      <h4>कृषि बिभाग</h4>
                      <h3>सिचाई तथा जलश्रोत व्यवस्थापन आयोजना</h3>
                      <h4>कुमारीपाटी, ललितपुर, नेपाल</h4>
                  <?php }?>
                  <!--<p>सिंहदरबार, काठमाडौँ, नेपाल</p>-->
              </div>
              <div class="col-md-2 flag" align="right"><img src="images/flagrr.gif" width="60"></div>
          </h1>           
      </div>
      <div class="language">
          <div class="container" style="width:100% !important;">
              <?php if($lan=='en'){?>
                <a href="<?php echo SITE_URL;?>" class="btn btn-sm btn-primary pull-right" style="margin-top: 2%;"><span style="font-size:12px;"><b>नेपाली</b></span></a>
              <?php }
              else{?>
                <a href="<?php echo SITE_URL;?>en" class="btn btn-sm btn-primary pull-right" style="margin-top: 2%;"><span style="font-size:12px;"><b>English</b></span></a>
              <?php }?>
          </div>      
      </div>
  </header><!--//header-->

  <!-- ******NAV****** -->
  <nav class="main-nav container" role="navigation">
      <div class="">       
          <div class="navbar-header">
              <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button><!--//nav-toggle-->
          </div>  
          <div class="navbar-collapse collapse" id="navbar-collapse">
            <ul class="nav navbar-nav">
                <?php createMenu(0, 'Header', $lan); ?>
            </ul>
            <!--//nav-->
          </div><!--//navabr-collapse-->
      </div><!--//container-->
  </nav><!--//main-nav-->
  
  <!-- ******CONTENT****** -->
  <div class="content container">
      
      <section>

          <!-- scroll menu -->
          <section class="news panel  marquee-body">
              <div class="" style="background-color:#c76353;"> 
                  <div class="marquee_div">
                      <div class="marquee-title"><?php if($lan=='en') echo 'Hot News'; else echo 'ताजा समाचार'; echo ' : ';?></div>
                      <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();" truespeed="">
                          <?php $hot=$groups->getById(HOT_NEWS); $hot=$conn->fetchArray($hot);?>
                          <a href="<?php if($lan=='en') echo 'en/'; echo $hot['urlname'];?>"><?php if($lan=='en') echo $hot['shortcontentsen']; else echo $hot['shortcontents'];?></a>
                      </marquee>
                  </div>
                  <div class="clearfix"></div>
              </div>    
          </section>
          <!-- scroll menu end -->