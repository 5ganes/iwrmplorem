<?
	//$parentId=$_GET['pid'];
	$audio=$groups->getByParentId($_GET['pid']);
?>
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="span12">
                <i class="icon-flag page-title-icon"></i>
                <h2>Audios / Agriculture Information and Communication Center</h2>
            </div>
        </div>
    </div>
</div>

<!-- Services Full Width Text -->
<div class="services-full-width container">
    <div class="row">
        <div class="services-full-width-text span12">
            <p>
            	<div class="audio">
                	<ul>
                    	<?
                        while($audioGet=$conn->fetchArray($audio))
						{?>
                    		<li>
                            	<div class="audiotitle">
                                	<?=$audioGet['name'];?>
                                </div>
                                <div class="audiofile">
                        			<audio controls>
                              		<source src="<?=CMS_FILES_DIR.$audioGet['contents'];?>" type="audio/mp3">
                                	<source src="<?=CMS_FILES_DIR.$audioGet['contents'];?>" type="audio/wma">
                                	<source src="<?=CMS_FILES_DIR.$audioGet['contents'];?>" type="audio/wav">
                            		</audio>
                        		</div>
                                <div style="clear:both"></div>
                            </li>
                    	<? }?>
                    </ul>
                </div>
            </p>
        </div>
    </div>
</div>