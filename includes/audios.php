<?php $lan=$_GET['lan'];?>
<div class="col-md-9">
    <div class="panel panel-primary">          
        <div class="panel-heading"><h3><?php if($lan=='en') echo 'Our Audio Programs'; else echo 'हाम्रा अडियोहरु';?></h3></div>
        <div class="panel-body dynamic">
            <?php
                $content=$groups->getById(AUDIO);
                $contentGet=$conn->fetchArray($content);
                if($lan!='en')
                   echo $contentGet['contents'];
                else echo $contentGet['contentsen'];
            ?>
        </div>
        <div class="page-row">
            <!-- <div><h5 style="font-weight: bold;">#Attachments</h5></div> -->
            <div class="table-responsive">
                <table class="table table-boxed">
                    <thead>
                        <tr>
                            <th width="10%">SN</th>
                            <th width="50%">Audio Filename</th>
                            <th width="40%">Play</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $down=$groups->getByParentId(AUDIO); $count=1;
                        while($downRow=$conn->fetchArray($down)){?>
                            <tr>
                                <td><?php echo $count++;?></td>
                                <td><?php if($lan=='en') echo $downRow['nameen']; else echo $downRow['name']; ?></td>
                                <td>
                                    <audio controls="">
                                        <source src="<?php echo CMS_FILES_DIR.$downRow['contents'];?>" type="audio/mp3">
                                        <source src="<?php echo CMS_FILES_DIR.$downRow['contents'];?>" type="audio/wma">
                                        <source src="<?php echo CMS_FILES_DIR.$downRow['contents'];?>" type="audio/wav">
                                    </audio>
                                </td>
                            </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>            
</div>