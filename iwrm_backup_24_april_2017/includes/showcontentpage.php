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

<!-- Services Full Width Text -->
<div class="services-full-width container">
    <div class="row">
        <div class="services-full-width-text span12">
            <p>
            	<?
                	$content=$groups->getById($pageId);
					$contentGet=$conn->fetchArray($content);
                    if($lan!='en')
					   echo $contentGet['contents'];
				    else echo $contentGet['contentsen'];
                ?>
            </p>
        </div>
    </div>
</div>