<!-- Slider -->
<div class="slider">
    <div class="container">
        <div class="row" style="margin-left:0">
            <div class="span12 offset1" style="margin-left:0;">
                <div class="flexslider">
                    <ul class="slides">
                        <?
                        	$slider=$groups->getByParentId(SLIDER);
							while($sliderGet=$conn->fetchArray($slider))
							{?>
								<li>
                                    <img src="<?=CMS_GROUPS_DIR.$sliderGet['image'];?>">
                                    <p class="flex-caption"><?=$sliderGet['shortcontents'];?></p>
                                </li>	
							<? }
						?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!--welcome message-->
<div class="presentation container" style="margin-top:5px;">
	<? $welcome=$groups->getById(WELCOME); $welcomeGet=$conn->fetchArray($welcome); ?>
    <h2 style="color:#1F9B00"><?=$welcomeGet['name'];?></h2>
    <p style="font-size:17px; text-align:justify; color:">
   		<?=substr($welcomeGet['shortcontents'],0,1500);?> <br />
        <a class="violet" href="<?=$welcomeGet['urlname'];?>" style="float:right">[ Detail ]</a>
    </p>
</div>

<div class="presentation container" style="margin-top:5px;">
    <p style="font-size:17px; text-align:justify; color:">
 		<div style="border-top:1px dashed #ddd;"></div>
    </p>
</div>

<!-- message -->
<div class="testimonials container" style="margin-top:12px; padding-bottom:0;">
    
    <div class="span6" style="margin-left:8px;">
		<? $msg=$groups->getById(MESSAGE); $msgGet=$conn->fetchArray($msg); ?>
    	<div class="testimonials-title">
        	<h3 style=""><?=$msgGet['name'];?></h3>
    	</div>
    	<div class="row">
            <div class="testimonial-list span6" style="margin-top:15px;">
                <div class="tabbable tabs-below">
                    <div class="tab-content">
                        <div class="tab-pane active" id="A">
                            <img src="images/Chief.jpg" title="" alt="" style="margin: 0.8% 2% 0 1%;width: 20%;">
                            <p style="text-align:justify; font-size:17px">
                                <?=substr($msgGet['shortcontents'],0,500);?>...<br />
                                <a class="violet" href="<?=$msgGet['urlname'];?>">[ Detail ]</a>
                            </p>
                        </div>
                        
                    </div>
                   
               </div>
            </div>
    	</div>
    </div>
    
    <div class="span6" style="margin-left:8px;">
		<? $notice=$groups->getById(NOTICE); $noticeGet=$conn->fetchArray($notice); ?>
    	<div class="testimonials-title">
        	<h3 style=""><?=$noticeGet['name'];?></h3>
    	</div>
    	<div class="row">
            <div class="testimonial-list span6" style="margin-top:15px;">
                <div class="tabbable tabs-below">
                    <div class="tab-content">
                        <div class="tab-pane active" id="A">
                            <p style="text-align:justify; font-size:17px">
                                <?=substr($noticeGet['shortcontents'],0,500);?>...<br />
                                <a class="violet" href="<?=$noticeGet['urlname'];?>">[ Detail ]</a>
                            </p>
                        </div>
                        
                    </div>
                   
               </div>
            </div>
    	</div>
    </div>
    
</div>

<div class="presentation container" style="margin-top:5px;">
    <p style="font-size:17px; text-align:justify; color:">
 		<div style="border-top:1px dashed #ddd;"></div>
    </p>
</div>

<!-- Site Description -->
<!--<div class="presentation container">
    <h2>We are <span class="violet">Andia</span>, a super cool design agency.</h2>
    <p>We design beautiful websites, logos and prints. Your project is safe with us.</p>
</div>-->

<!-- Services -->
<div class="what-we-do container">
    <h2 class="publication_title">Our Publications</h2>
    <div class="row">
        <? $service=$groups->getByParentIdWithLimit(PUBLICATION, 4);
		while($serviceGet=$conn->fetchArray($service))
		{?>
        	<div class="service span3">
            	<a href="<?=$serviceGet['urlname'];?>" style="padding:0; background:none">
                	<img src="<?=CMS_GROUPS_DIR.$serviceGet['image'];?>" style="width:100%; border-radius:15px 0px;" />
              	</a>
        	</div>
        <? }?>
    </div>
</div>