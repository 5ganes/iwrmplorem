<?php $type = str_replace('-', ' ', $_GET['type']); ?>
<div class="col-md-9">
    <div class="panel panel-primary">          
        <div class="panel-heading"><h3><?php echo $type;?></h3></div>
        <div class="panel-body dynamic">
     
        </div>
        <div class="page-row">
		    <div class="table-responsive">
		    	<table class="table table-boxed">
		            <!-- <thead>
		                <tr>
				            <th width="10%">SN</th>
				            <th width="90%">Submenu</th>
		                </tr>
		            </thead> -->
		            <tbody>
		            	<?php $rows = $groups->getByParentIdAndType(0, str_replace(' ', '_', $type)); $count=1;
		            	while($row = $conn->fetchArray($rows)){?>
		                	<tr>
		                    	<td><?php echo $count++;?></td>
		                    	<td><a href="<?php if($lan=='en') echo 'en/'; echo $row['urlname'];?>"><?php if($lan=='en') echo $row['nameen']; echo $row['name'];?></a></td>
		                	</tr>
		            	<?php }?>
		            </tbody>
		        </table>
			</div>
		</div>
    </div>            
</div>