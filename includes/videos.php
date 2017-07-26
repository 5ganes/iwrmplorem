<?php $lan=$_GET['lan'];?>
<style type="text/css">
    .posts{
      display: flex; justify-content: space-around; flex-wrap: wrap;
    }
    .posts article{
      width: 23%;margin-bottom: 3%;
    }
    .posts article h3{
      font-size: 1em;text-align: center;
    }
</style>
<div class="col-md-9">
    <div class="panel panel-primary">          
        <div class="panel-heading"><h3><?php if($lan=='en') echo 'Our Video Programs'; else echo 'हाम्रा भिडियोहरु';?></h3></div>
        <div class="panel-body dynamic">
            <?php
                $content=$groups->getById(VIDEO);
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
                            <th width="50%">Video Programs</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="20">
                                <div>
                                    <div class="posts footer-div">
                                        <?php
                                        $video = $groups->getByParentId(VIDEO);
                                        while($videoGet = $conn->fetchArray($video)){?>
                                          <article style="width: 245px;">
                                              <p><iframe id="video" style="width: 100%; height: 100%;" src="<?=$videoGet['contents'];?>" frameborder="1" allowfullscreen></iframe></p>
                                              <h3><?php echo $videoGet['name'];?></h3>
                                          </article>
                                        <?php }?>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>            
</div>