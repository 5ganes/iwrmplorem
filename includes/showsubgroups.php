<div class="col-md-9">
    <div class="panel panel-primary">          
        <div class="panel-heading"><h3><?php if($lan!='en') echo $pageName; else echo $pageNameEn;?></h3></div>
        <div class="panel-body dynamic">
            <?php
                $content=$groups->getById($pageId);
                $contentGet=$conn->fetchArray($content);
                if($lan!='en')
                   echo $contentGet['contents'];
                else echo $contentGet['contentsen'];
            ?>
        </div>
        <?php
		$sub=$groups->getByParentId($pageId);
		if($conn->numRows($sub)>0)
		{?>
	        <div class="page-row">
			    <div class="table-responsive">
			    	<table class="table table-boxed">
			            <thead>
			                <tr>
			                	<?php $submenu=$conn->fetchArray($sub);
			                	if($submenu['linkType']=='Normal Group' or $submenu['linkType']=='Contents Page'){?>
					                <th width="10%">SN</th>
					                <th width="90%">Submenu</th>
			                	<?php }
			                	else if($submenu['linkType']=='File'){?>
			                		<th width="10%">SN</th>
					                <th width="70%">Filename</th>
					                <th width="20%">Download</th>
			                	<?php }
			                	else if($submenu['linkType']=='Link'){?>
			                		<th width="10%">SN</th>
					                <th width="90%">Various Links</th>
			                	<?php }?>
			                </tr>
			            </thead>
			            <tbody>
			            	<?php 
			            	$down=$groups->getByParentId($pageId);
							if($submenu['linkType']=='Normal Group' or $submenu['linkType']=='Contents Page'){
								$count=1;
								while($downRow=$conn->fetchArray($down))
								{?>
					                <tr>
					                    <td><?php echo $count++;?></td>
					                    <td><a href="<?php if($lan=='en') echo 'en/'; echo $downRow['urlname'];?>"><?php if($lan=='en') echo $downRow['nameen']; echo $downRow['name'];?></a></td>
					                </tr>
				            	<?php }
				            }
				            else if($submenu['linkType']=='File'){
				            	$count=1;
								while($downRow=$conn->fetchArray($down))
								{?>
									<tr>
					                    <td><?php echo $count++;?></td>
					                    <td><? if($lan=='en') echo $downRow['nameen']; else echo $downRow['name']; ?></td>
					                    <td><a class="btn btn-success" download="" href="<?=CMS_FILES_DIR.$downRow['contents'];?>"><i class="fa fa-download"></i> Download </a></td>
					                </tr>
								<?php }
							}
							else if($submenu['linkType']=='Link'){
								$count=1;
								while($downRow=$conn->fetchArray($down))
								{?>
									<tr>
					                    <td><?php echo $count++;?></td>
					                    <td><a href="<?=$downRow['contents'];?>"><? if($lan=='en') echo $downRow['nameen']; else echo $downRow['name']; ?></a></td>
					                </tr>
								<?php }
							}?>
			            </tbody>
			        </table>
				</div>
			</div>
		<?php }?>
    </div>            
</div>