<style type="text/css">
    .next-prev{
      display: flex; justify-content: space-between;padding: 1%;background: #DDEFDA;
    }
    .next-prev a{
      color: red
    }
    .next-prev a:hover{
      color: green;
    }
    .next-prev:first-child{

    }
    .next-prev :last-child{

    }
</style>
<div class="col-md-9">
    <div class="panel panel-primary">          
        <div class="panel-heading"><h3><?php if($lan!='en') echo $pageName; else echo $pageNameEn;?></h3></div>
        <div class="panel-body dynamic">
            <?php 
                $navNextResult = $groups->getNextResult($pageId); $navNextRow = $conn->fetchArray($navNextResult);
                $navPreviousResult = $groups->getPreviousResult($pageId); $navPreviousRow = $conn->fetchArray($navPreviousResult);
            ?>
            <div class="next-prev">
                <div> <a href="<?= $navPreviousRow['urlname']; ?>" class="paging">&laquo; Previous</a> </div>
                <div> <a href="<?php echo $navNextRow['urlname']; ?>" class="paging">Next &raquo;</a> </div>
            </div>
            <?php
                $content=$groups->getById($pageId);
                $contentGet=$conn->fetchArray($content);
                if($lan!='en')
                   echo $contentGet['contents'];
                else echo $contentGet['contentsen'];
            ?>
        </div>
        <?php $file=$listingFiles->getByListingId($pageId);
        if($conn->numRows($file)>0){?>
            <div class="page-row">
                <div><h5 style="font-weight: bold;">#Attachments</h5></div>
                <div class="table-responsive">
                    <table class="table table-boxed">
                        <thead>
                            <tr>
                                <th width="10%">SN</th>
                                <th width="70%">Filename</th>
                                <th width="20%">Download</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count=1;
                            while($fileGet=$conn->fetchArray($file))
                            {?>
                                <tr>
                                    <td><?php echo $count++;?></td>
                                    <td><?php echo $fileGet['filename']; ?></td>
                                    <td><a class="btn btn-success" download="" href="<?=CMS_LISTING_FILES_DIR.$fileGet['filename'];?>"><i class="fa fa-download"></i> Download </a></td>
                                </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php }?>
    </div>            
</div>