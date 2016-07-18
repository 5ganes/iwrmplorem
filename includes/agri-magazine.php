<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="span12">
                <i class="icon-flag page-title-icon"></i>
                <h2>Magazines</h2>
            </div>
        </div>
    </div>
</div>

<!-- Services Full Width Text -->
<div class="services-full-width container" style="margin-top:0">
    <div class="row">
        <div class="services-full-width-text span12">
            <p>
            	<div class="magazine">
                
                	<div class="magazinesidebar">
                      	<ul>
                        	<h4>Magazine Years</h4>
                        	<?
                            $yr=$magazine->getYear();
							while($yrGet=$conn->fetchArray($yr))
							{?>
                        		<li>
                                	<a href="agri-magazine/<?=$yrGet['year'];?>">
										Magazines <?=$yrGet['year'];?>
                                  	</a>
                              	</li>
                        	<? }?>
                        </ul>
                   	</div>
                  	<div class="magazinefile" <? if(isset($_GET['year'])){?> style="width:50%"<? }?>>
                  		<?
						if(!isset($_GET['year']))
						{
							$mag=$groups->getById(MAGAZINE);$magGet=$conn->fetchArray($mag);echo $magGet['contents'];
						}
						else
						{
							echo '<ul><span style="font-weight:bold; font-size:20px; text-decoration:underline">Magazines of year: '.$_GET['year'].'</span>';
							$mag=$magazine->getByYear($_GET['year']);
							while($magGet=$conn->fetchArray($mag))
							{?>
								<li>
                                	<div class="filetitle"><?=$magGet['name']." : ".$magGet['month'];?></div>
                                    <div class="download"><a href="<?=CMS_FILES_DIR.$magGet['file'];?>">Download</a></div>
                                    <div style="clear:both"></div>
                                </li>
							<? }
							echo "</ul>";	
						}?>
                  	</div>
                 	<div style="clear:both"></div>
                            
                </div>
            </p>
        </div>
    </div>
</div>