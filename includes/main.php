<style>
    .show-links ul{ margin:0; padding:0;}
    .show-links ul li{ margin:9px 5px; border-bottom:1px solid #cdcdcd; list-style:none;text-align: left}
    .show-links ul li:last-child{ border-bottom:none}
    .show-links ul li a{ color:#5d5d5d; font-size:14px}
    .show-links ul li a:hover{ color:#9d426b}
    .span3 h4{text-align: left;}
</style>

<!-- Slider -->
<div class="slider">
    <div class="container">
        <div class="row" style="margin-left:0">
            
            <div class="span9 offset1" style="margin-left:0;">
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
						<? }?>
                    </ul>
                </div>
            </div>

            <div class="span3 offset1" style="margin-left:0;">
                <div class="testimonial-list span3" style="margin-top:15px;">
                    <div class="tabbable tabs-below">
                        <div class="tab-content">
                            <div class="tab-pane active" id="A">
                                <style type="text/css">
                                    .span3 h4.tit {text-align: left;margin: 0;background: #2D842D;color: white;padding: 10px;}
                                </style>
                                <?php $chief=$groups->getById(CHIEF); $chief=$conn->fetchArray($chief);?>
                                <h4 class="tit"><?=$chief['name'];?></h4>
                                <img src="<?=CMS_GROUPS_DIR.$chief['image'];?>" title="" alt="" style="margin: 0.8% 2% 0 1%;
                                width: 102px; height:110px;">
                                <p style="text-align:justify; font-size:17px">
                                    <?=$chief['shortcontents'];?>...<br />
                                    <a class="violet" style="float:right" href="<?=$chief['urlname'];?>">[ Detail ]</a>
                                </p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!--welcome message-->
<div class="presentation container" style="margin-top:5px;">
	<? $welcome=$groups->getById(WELCOME); $welcomeGet=$conn->fetchArray($welcome); ?>
    <h2 style="color:#1F9B00"><?=$welcomeGet['name'];?></h2>
    <p style="font-size:17px; text-align:justify; line-height:25px; font-style:normal">
   		<?=$welcomeGet['shortcontents'];?> <br />
        <a class="violet" href="<?=$welcomeGet['urlname'];?>" style="float:right">[ Detail ]</a>
    </p>
</div>

<div class="presentation container" style="margin-top:5px;">
    <p style="font-size:17px; text-align:justify; color:">
 		<div style="border-top:1px dashed #ddd;"></div>
    </p>
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
    <div class="row">
        
        <div class="testimonial-list span3" style="margin-top:15px;">
        <h4 style="margin-top:0">सुचना अधिकारी</h4>
            <div class="tabbable tabs-below">
                <div class="tab-content">
                    <div class="tab-pane active" id="A">
                        <?php $info_officer=$groups->getById(INFO_OFFICER); $info_officer=$conn->fetchArray($info_officer);?>
                        <img src="<?=CMS_GROUPS_DIR.$info_officer['image'];?>" title="" alt="" style="margin: 0.8% 2% 0 1%;
                        width: 102px; height:110px;">
                        <p style="text-align:justify; font-size:17px">
                            <?=$info_officer['shortcontents'];?>...<br />
                            <a class="violet" style="float:right" href="<?=$info_officer['urlname'];?>">[ Detail ]</a>
                        </p>
                    </div>
                    
                </div>
               
           </div>
        </div>

        <div class="widget span3">
            <h4>समाचार तथा सुचना</h4>                       
            <div class="show-links">
                <ul>
                    <? $news=$groups->getByParentIdWithLimit(NEWS_NOTICES,6);
                    while($newsGet=$conn->fetchArray($news))
                    {?>
                        <li><a href="<?=$newsGet['urlname'];?>" target="_blank" title="<?=$newsGet['name'];?>"><?=$newsGet['name'];?></a></li>
                    <? }?>
                </ul>
            </div>
        </div>
        <div class="widget span3">
            <h4>सम्बन्धित लिङ्क्स</h4>                       
            <div class="show-links">
                <ul>
                    <? $link=$groups->getByParentIdWithLimit(LINKS,6);
                    while($linkGet=$conn->fetchArray($link))
                    {?>
                        <li><a href="<?=$linkGet['contents'];?>" target="_blank" title="<?=$linkGet['name'];?>"><?=$linkGet['name'];?></a></li>
                    <? }?>
                </ul>
            </div>
        </div>
        <div class="widget span3">
            <h4>प्रकाशन</h4>                       
            <div class="show-links">
                <ul>
                    <? $pub=$groups->getByParentIdWithLimit(PUBLICATION,4);
                    while($pubGet=$conn->fetchArray($pub))
                    {?>
                        <li><a href="<?=CMS_FILES_DIR.$pubGet['contents'];?>" target="_blank" title="<?=$pubGet['name'];?>"><?=$pubGet['name'];?></a></li>
                    <? }?>
                </ul>
            </div>
        </div>
    </div>
</div>