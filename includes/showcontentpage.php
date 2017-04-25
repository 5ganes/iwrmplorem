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
    </div>            
</div>