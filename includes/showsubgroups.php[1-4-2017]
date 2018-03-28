<style>
    .show-links ul{ margin:0; padding:0;}
    .show-links ul li{ margin:9px 5px; border-bottom:1px solid #cdcdcd; list-style:none}
    .show-links ul li:last-child{ border-bottom:none}
    .show-links ul li a{ color:#5d5d5d; font-size:14px}
    .show-links ul li a:hover{ color:#9d426b}
</style>
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="span12">
                <i class="icon-flag page-title-icon"></i>
                <h2><?php if($lan!='en') echo $pageName; else echo $pageNameEn;?></h2>
            </div>
        </div>
    </div>
</div>

<!-- Conetnt Full Width Text -->
<div class="services-full-width container">
    <div class="row">
        <div class="services-full-width-text span12">
            <p>
            	<?
                	$content=$groups->getById($pageId);
					$contentGet=$conn->fetchArray($content);
                    if($lan!='en')
					   echo $contentGet['contents'];
					else
                        echo $contentGet['contentsen'];

                    $sub=$groups->getByParentId($pageId);
                    if($conn->numRows($sub)>0){?>
                        <div class="widget span3" style="clear: both">
                            <br>                      
                            <div class="show-links">
                                <ul>
                                    <?php
                                    while($subGet=$conn->fetchArray($sub))
                                    {?>
                                        <li><a href="<?=$contentGet['urlname'].'/'.$subGet['urlname'];?>" title="<?=$subGet['name'];?>"><?=$subGet['name'];?></a></li>
                                    <?php }?>
                                </ul>
                            </div>
                        </div>
                    <?php }
                    
					if($pageId==LINKS)
					{?>
						<div class="widget span3">
                            <h4>Important Links</h4>                       
                            <div class="show-links">
                                <ul>
                                    <? $link=$groups->getByParentId(LINKS);
                                    while($linkGet=$conn->fetchArray($link))
                                    {?>
                                        <li><a href="<?=$linkGet['contents'];?>" title="<?=$linkGet['name'];?>"><?=$linkGet['name'];?></a></li>
                                    <? }?>
                                </ul>
                            </div>
                    	</div>	
					<? }
				?>
            </p>
        </div>
    </div>
</div>