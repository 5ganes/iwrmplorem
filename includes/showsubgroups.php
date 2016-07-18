<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="span12">
                <i class="icon-flag page-title-icon"></i>
                <h2><?php echo $pageName; ?></h2>
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
					echo $contentGet['contents'];
					
					if($pageId==LINKS)
					{?>
						<div class="widget span3">
                            <h4>Important Links</h4>
                            <style>
                                .show-links ul{ margin:0; padding:0;}
                                .show-links ul li{ margin:9px 5px; border-bottom:1px solid #cdcdcd; list-style:none}
                                .show-links ul li:last-child{ border-bottom:none}
                                .show-links ul li a{ color:#5d5d5d; font-size:14px}
                                .show-links ul li a:hover{ color:#9d426b}
                            </style>                       
                            <div class="show-links">
                                <ul>
                                    <? $link=$groups->getByParentId(LINKS);
                                    while($linkGet=$conn->fetchArray($link))
                                    {?>
                                        <li><a href="<?=$linkGet['contents'];?>" target="_blank" title="<?=$linkGet['name'];?>"><?=$linkGet['name'];?></a></li>
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