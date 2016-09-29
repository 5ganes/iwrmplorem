<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="span12">
                <i class="icon-flag page-title-icon"></i>
                <h2>
                	<?php
                		$url=$_GET['url'];
                		$row=$groups->getByURLName($url);
                		$parent=$conn->fetchArray($groups->getById($row['parentId']));
                		if($lan!='en'){
                			$next=$parent['name']." / ".$row['name'];
                			echo $parent['name']." / ".$row['name'];
                		}
                		else{
                			$next=$parent['nameen']." / ".$row['nameen'];
                			echo $parent['nameen']." / ".$row['nameen'];
                		}
                	?>
                </h2>
            </div>
        </div>
    </div>
</div>

<div class="services-full-width container" style="font-size: 15px;">
    
    <div class="row">
    
        <div class="services-full-width-text span4" style="background: #eee">
            <div class="widget span4">
             	                      
            	<div class="show-links">
	                <ul>
	                	<?php $side=$groups->getByParentId($parent['id']);
	                	while($sideGet=$conn->fetchArray($side)){?>
		                    <li style="margin: 10px 0">
		                    	<a href="<?=$parent['urlname'].'/'.$sideGet['urlname'];?>" title=""><?=$sideGet['name'];?></a>
		                    </li>
		               	<?php }?>
	            	</ul>
            	</div>
        	</div>
        </div>

        <div class="services-full-width-text span8">
            <div class="widget span8">                      
            	<div class="show-links">
	                <ul>
	                	<?php $row=$groups->getByParentId($row['id']);
	                	while($rowGet=$conn->fetchArray($row)){?>
		                    <li style="margin: 10px 0">
		                    	<a href="<?php echo CMS_FILES_DIR.$rowGet['contents'];?>"><?php echo $rowGet['name'];?></a>
		                    </li>
		               	<?php }?>
	            	</ul>
            	</div>
        	</div>
        </div>
    
    </div>

</div>