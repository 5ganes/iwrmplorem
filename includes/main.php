<!-- main content -->
<div class="col-md-9">
    <!-- middle bar -->
    <div class="col-md-8" style="padding-left: 5px;">
        <div id="promo-slider" class="slider flexslider">
            <ul class="slides">
                <?php $slide = $groups->getByParentId(SLIDER); $bulletCount = count($slide);
                while($slideGet = $conn->fetchArray($slide)){?>
                  <li>
                      <img src="<?php echo CMS_GROUPS_DIR.$slideGet['image']; ?>" alt="<?php echo $slideGet['shortcontents'];?>">
                      <p class="flex-caption"><span class="secondary clearfix"><?php echo $slideGet['shortcontents'];?></span></p>
                  </li>
                <?php }?>
            </ul>
            <ol class="flex-control-nav flex-control-paging">
                <?php for($i=0;$i<bulletCount;$i++){?>
                    <li><a class=""><?php echo $i; ?></a></li>
                <?php }?>
            </ol>
            <ul class="flex-direction-nav">
                <li><a class="flex-prev" href="http://www.mope.gov.np/ne/index.php#">Previous</a></li>
                <li><a class="flex-next" href="http://www.mope.gov.np/ne/index.php#">Next</a></li>
            </ul>
        </div><!--//slides-->

        <!-- welcome message starts here -->
        <div class="panel panel-primary">
            <?php $welcome = $groups->getById(WELCOME); $welcome = $conn->fetchArray($welcome); ?>
            <div class="panel-heading"><h3><?php if($lan=='en') echo $welcome['nameen']; else echo $welcome['name']?></h3></div>
            <div class="panel-body welcome">
                <?php if($lan=='en') echo $welcome['shortcontentsen']; else echo $welcome['shortcontents'];?>
            </div>
            <div class="panel-footer">
                <a href="<?php if($lan=='en') echo 'en'; echo $welcome['urlname'] ?>" class="pull-right">थप [+] <i class="fa fa-chevron-right"></i></a>
                <div class="clearfix"></div>
            </div>
        </div><!-- welcome message ends here-->

        <!-- Samachar and Suchana starts here -->
        <div class="panel panel-primary">
            <?php $url = $groups->getById(NEWS_AND_EVENTS); $url=$conn->fetchArray($url);?>
            <div class="panel-heading"><h3><?php if($lan=='en') echo $url['nameen']; else echo $url['name'] ?></h3></div>
            <div class="panel-body">
                <ul class="list-group">
                    <?php $news = $groups->getByParentIdWithLimit(NEWS_AND_EVENTS, 6);
                    while($row = $conn->fetchArray($news)){?>
                      <li class="list-group-item"><a href="<?php echo $row['urlname']; ?>"><?php echo $row['name']; ?></a></li>
                    <?php }?>
                </ul>
            </div>
            <div class="panel-footer">
                <a href="<?php if($lan=='en') echo 'en/'; echo $url['urlname'] ?>" class="pull-right">थप [+] <i class="fa fa-chevron-right"></i></a>
                <div class="clearfix"></div>
            </div>
        </div><!--samachar and suchana ends here-->
        
        <!-- weather condtionb starts here -->
        <div class="panel panel-primary">
            <?php //$notice = $groups->getById(NOTICE); $notice=$conn->fetchArray($notice); ?>
            <div class="panel-heading"><h3><?php //if($lan=='en') echo $notice['nameen']; else echo $notice['name'];?><?php if($lan=='en') echo 'Weather Condition'; else echo 'मौसम जानकारी';?></h3></div>
            <div class="panel-body notice-block">
                <?php //if($lan=='en') echo $notice['shortcontentsen']; else echo $notice['shortcontents'];?>
                <a href="https://www.accuweather.com/en/np/kathmandu/241809/weather-forecast/241809" class="aw-widget-legal"></a>
                <div id="awcc1492357026890" class="aw-widget-current"  data-locationkey="241809" data-unit="c" data-language="en-us" data-useip="true" data-uid="awcc1492357026890"></div>
                <script type="text/javascript" src="https://oap.accuweather.com/launch.js"></script>
            </div>
            <!-- <div class="panel-footer">
                <a href="<?php if($lan=='en') echo 'en/'; echo $notice['urlname'] ?>" class="pull-right">थप [+] <i class="fa fa-chevron-right"></i></a>
                <div class="clearfix"></div>
            </div> -->
        </div><!--samachar and suchana ends here-->

        <!-- google map starts here -->
        <div class="panel panel-primary">
            <div class="panel-heading"><h3><?php if($lan=='en') echo 'Google Map Location'; else echo 'गूगल म्याप सम्पर्क';?></h3></div>
            <div class="panel-body notice-block">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14134.634562690111!2d85.4168451!3d27.6660312!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x968dba734fda2596!2sDistrict+Agriculture+Development+Office%2C+Bhaktapur!5e0!3m2!1sen!2snp!4v1492355836005" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div><!--google map ends here-->

  </div>
    <!-- middle bar end -->

    <!-- right sidebar starts here -->
    <div class="col-md-4" style="padding-right: 5px;">
        <section class="links panel panel-primary">
            <div class="panel-heading">
              <h3><?php if($lan=='en') echo 'Important Links'; else echo 'महत्वपुर्ण लिंकहरु';?></h3>
            </div>
            <div class="section-content panel-body important-links">
                <?php $links = $groups->getByParentIdAndTypeWithLimit('Important_Links', 0, 5);
                while($row = $conn->fetchArray($links)){?>
                  <p>
                    <a href="<?php if($lan=='en') echo 'en/'; echo $row['urlname'];?>" target="_blank">
                      <i class="fa fa-caret-right"> <?php if($lan=='en') echo $row['nameen']; else echo $row['name'] ?></i>
                    </a>
                  </p>
                <?php }?>
            </div><!--//section-content-->
            <div class="panel-footer">
                <a href="<?php if($lan=='en') echo 'en/';?>show-type/important-links" class="pull-right">थप [+] <i class="fa fa-chevron-right"></i></a>
                <div class="clearfix"></div>
            </div>
        </section>
        <!-- sambandhit links end here -->

         <!--video link starts here-->
        <section class="links panel panel-primary">
            <?php $video = $groups->getById(SINGLE_VIDEO); $video = $conn->fetchArray($video); ?>
            <div class="panel-heading">
              <h3><?php if($lan=='en') echo $video['nameen']; else echo $video['name'];?></h3>
            </div>
            <div class="section-content panel-body important-links">
                <iframe width="100%" height="200" src="<?php echo $video['contents'];?>" frameborder="0" allowfullscreen=""></iframe>
            </div><!--//section-content-->
            <!--<div class="panel-footer"><a class="read-more" href="">थप [+]<i class="fa fa-chevron-right"></i></a></div>-->
        </section>
        <!-- video links end here -->

        <!-- email and weather -->
        <div class="blockmenu-next email">
          <a href="https://mail2.nitc.gov.np/src/login.php" target="_blank"><img src="images/checkmail.png"></a>
        </div> 
        <div class="blockmenu-next weather">
            <a href="http://www.mfd.gov.np/" target="_blank"><img src="images/weather.jpg"></a>
        </div>
        <!-- email and weather ends here -->
    
        <!-- <div align="center">
            <div class="clearfix"></div>
            <div class="blockmenu" style="background-color:#0e6330">
              <a href="http://pollution.gov.np/" target="_blank">
                  <span class="block-icon"></span>
                  <div class="block-content">
                   <div class="block-content-title" style="font-size:16px">DOE, Air Quality Monitoring</div>
                   <p style="color:#fff; font-size:12p;">&nbsp;&nbsp;&nbsp; www.polution.gov.np</p>
                  </div>
              </a>
            </div>
        </div> -->

        <div class="blockmenu">
          <a href="bills.php" target="_blank">
            <span class="block-icon"></span>
            <div class="block-content">
              <div class="block-content-title" style="font-size:18px">भुक्तानिका लागी प्राप्त विल</div>
            </div>
            </a>
        </div>
        <!-- vuktani ends here -->
        
        <!--twitter block starts here-->
        <div>
          <!-- <a class="twitter-timeline" data-width="520" data-height="350" data-theme="light" data-link-color="#981CEB" href="https://twitter.com/DoEnv_Nepal">Tweets by DoEnv_Nepal</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script> -->
          <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fdoenv%2F&tabs=timeline&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

        </div>
        <!--twitter block ends here-->

        <!--audio and video block starts here-->
        <div class="blockmenu">
            <a href="<?php if($lan=='en') echo 'en/';?>our-audios">
                <span class="block-icon">&#xf1c7;</span>
                <div class="block-content">
                    <div class="block-content-title" style="font-size:18px">
                      <?php if($lan=='en') echo 'Our Audios Files'; else echo 'हाम्रो अडियो फाइलहरु';?>
                    </div>
                </div>
            </a>
        </div>
        <div class="blockmenu">
            <a href="<?php if($lan=='en') echo 'en/';?>our-videos">
                <span class="block-icon">&#xf1c8;</span>
                <div class="block-content">
                    <div class="block-content-title" style="font-size:18px">
                      <?php if($lan=='en') echo 'Our Video Files'; else echo 'हाम्रो भिडियो फाइलहरु';?>
                    </div>
                </div>
            </a>
        </div>
        <!--audio and video block ends here-->
        
        <!--sms subscription-->
        <div class="blockmenu">
            <a href="<?php if($lan=='en') echo 'en/';?>sms-subscription">
                <span class="block-icon" style="padding: 0 20px">&#xf129;</span>
                <div class="block-content">
                    <div class="block-content-title" style="font-size:18px">
                      <?php if($lan=='en') echo 'SMS Subscription'; else echo 'SMS Subscription';?>
                    </div>
                </div>
            </a>
        </div>
        
        <!--contact block-->
        <div class="panel panel-primary">
          <?php $contact = $groups->getByURLName(CONTACT); ?>
          <div class="panel-heading"><h3 align="center"><?php if($lan=='en') echo $contact['nameen']; else echo $contact['name'];?></h3></div>
          <div class="panel-body">   
              <?php if($lan=='en') echo $contact['shortcontentsen']; else echo $contact['shortcontents'];?>
          </div>
          <div class="panel-footer">
              <a href="<?php if($lan=='en') echo 'en/'; echo $contact['urlname'] ?>" class="pull-right">थप [+] <i class="fa fa-chevron-right"></i></a>
              <div class="clearfix"></div>
          </div>
        </div>

    </div>
    <!-- right bar end -->
</div>
<!-- main content end -->