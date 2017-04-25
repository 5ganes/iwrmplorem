<style type="text/css">
    .span2{color:white; background: #733a3a;font-weight: bold;}
    .span:hover{background: #7d3030}
</style>
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="span12">
                <i class="icon-flag page-title-icon"></i>
                <h2>
                <?php if($lan!='en')
                    echo 'प्रकाशन';
                else echo 'Our Publications';?>
                </h2>
            </div>
        </div>
    </div>
</div>

<!-- Conetnt Full Width Text -->
<div class="services-full-width container">
    <div class="row">
        <div class="services-full-width-text span12">
            <p>
            	<table class="table table-bordered table-condensed table-striped table-hover this-table">
                    <thead>
                    <tr>
                        <td width="7%">SN</td>
                        <td width="47%">Filename</td>
                        <!-- <td width="14%">Published Date</td> -->
                        <td width="10%">Filesize</td>
                        <td width="22%"></td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $pub=$groups->getByParentId(PUBLICATION); $i=0;
                    while($pubGet=$conn->fetchArray($pub)){?>
                        <tr>
                            <td><?=++$i;?></td>
                            <td><?=$pubGet['name'];?></td>
                            <!-- <td>2015-07-05</td> -->
                            <td><? echo filesize(CMS_FILES_DIR.$pubGet['contents'])/1024;?> KB</td>
                            <td><a class="btn btn-1 span2" href="<?=CMS_FILES_DIR.$pubGet['contents'];?>"><img align="left" src="images/pdf.png" width="20"> <span class="noshow">Download</span></a></td>
                        </tr>
                    <? }?>
                    </tbody>
                </table>
            </p>
        </div>
    </div>
</div>