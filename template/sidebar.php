<!-- sidebar left -->
<div class="col-md-3">
	<div class="panel-heading"></div>                          
    <div class="panel-body" style="padding:0 !important; border-bottom: 1px solid #ccc; ">
        <?php $msg_from_dg = $groups->getById(MSG_FROM_DG); $msg_from_dg = $conn->fetchArray($msg_from_dg);?>
        <h4 style="text-align:center;"><?php if($lan=='en') echo $msg_from_dg['nameen']; else echo $msg_from_dg['name'];?></h4>      
        <p style="text-align: center;">
            <span style="font-size:16px;">
                <img alt="" src="<?php echo CMS_GROUPS_DIR.$msg_from_dg['image'] ?>" style="width: 70%;border-width: 1px; border-style: solid;">
            </span>
        </p>
        <p style="text-align: center;">
            <?php if($lan=='en') echo $msg_from_dg['shortcontentsen']; else echo $msg_from_dg['shortcontents'];?>...
        </p>                                                
        <div class="panel-footer">
            <a href="<?php if($lan=='en') echo 'en/'; echo $msg_from_dg['urlname'] ?>" class="pull-right">थप [+] <i class="fa fa-chevron-right"></i></a>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="">
        <link href="styles/superfish.css" rel="stylesheet">
        <link href="styles/superfish-vertical.css" rel="stylesheet">
        <script src="scripts/superfish.js"></script>
        <script src="scripts/hoverIntent.js"></script>
        <script type="text/javascript">
    		// initialise plugins
    		$(document).ready(function(){ 
                $("ul.sf-menu").superfish({ 
                    animation: {height:'show'},   // slide-down effect without fade-in 
                    delay:     1200               // 1.2 second delay on mouseout 
                }); 
            }); 
        </script>
        <ul class="sf-menu sf-vertical sf-js-enabled sf-shadow">
            <?php createNavigation(0, 'Navigation', $lan);?>
        </ul>
    </div>
    <div class="clearfix"></div>
    
    <div class="panel panel-primary">                             
        <div class="panel-body" style="padding:0 !important; border-bottom: 1px solid #ccc; ">
            <?php $msg_from_sp = $groups->getById(MSG_FROM_SPOKEPERSON); $msg_from_sp = $conn->fetchArray($msg_from_sp);?>
            <h4 style="text-align:center;"><?php if($lan=='en') echo $msg_from_sp['nameen']; else echo $msg_from_sp['name'];?></h4>      
            <p style="text-align: center;">
                <span style="font-size:16px;">
                    <img alt="" src="<?php echo CMS_GROUPS_DIR.$msg_from_sp['image'] ?>" style="width: 70%;border-width: 1px; border-style: solid;">
                </span>
            </p>
            <p style="text-align: center;">
                <?php if($lan=='en') echo $msg_from_sp['shortcontentsen']; else echo $msg_from_sp['shortcontents'];?>...
            </p>                                                
            <div class="panel-footer">
                <a href="<?php if($lan=='en') echo 'en/'; echo $msg_from_sp['urlname'] ?>" class="pull-right">थप [+] <i class="fa fa-chevron-right"></i></a>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="panel-body" style="padding:0 !important; border-bottom: 1px solid #ccc; ">
            <?php $msg_from_io = $groups->getById(INFO_OFFICER); $msg_from_io = $conn->fetchArray($msg_from_io);?>
            <h4 style="text-align:center;"><?php if($lan=='en') echo $msg_from_io['nameen']; else echo $msg_from_io['name'];?></h4>      
            <p style="text-align: center;">
                <span style="font-size:16px;">
                    <img alt="" src="<?php echo CMS_GROUPS_DIR.$msg_from_io['image'] ?>" style="width: 70%;border-width: 1px; border-style: solid;">
                </span>
            </p>
            <p style="text-align: center;">
                <?php if($lan=='en') echo $msg_from_io['shortcontentsen']; else echo $msg_from_io['shortcontents'];?>...
            </p>                                                
            <div class="panel-footer">
                <a href="<?php if($lan=='en') echo 'en/'; echo $msg_from_io['urlname'] ?>" class="pull-right">थप [+] <i class="fa fa-chevron-right"></i></a>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    
    <!--//events-->                    
    <!--<div class="block ">
      <p> <a href="http://www.mope.gov.np/ne/contact.php" style="color: #fff;">गुनासो/सुझाव</a></p>	
    </div>
    <div class="block ">
      <p> <a href="http://www.climatenepal.org.np/main/?p=home" style="color: #fff;"> जलवायु परिवर्तन पोर्टल </a></p>
    </div>
    <div class="block ">
      <p> <a href="http://10.1.15.10/index.php" style="color: #fff; font-size:15px;">Gateway Management System</a></p>		
    </div>
    <div class="block ">
      <p> <a href="http://moste.gov.np/nomination" style="color: #fff;">Nomination Management Information System</a></p>
    </div>
    <div class="block ">
      <p> <a href="http://www.mope.gov.np/ne/downloads.php" style="color: #fff;">संग्रह / डाउनलोड</a></p>		
    </div>
    <div class="block ">
      <p> <a href="http://www.climatenepal.org.np/main/?p=discuss" style="color: #fff;">छलफल चौतारी</a></p>		
    </div>-->
    <!-- events end -->
         
</div>
<!-- sidebar left end -->