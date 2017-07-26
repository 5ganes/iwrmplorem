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
        <div class="page-row">
		    <div class="table-responsive">
		    	<table class="table table-boxed">
		            <thead>
		                <tr>
				            <th width="10%">SN</th>
				            <th width="50%">News</th>
				            <th width="40"></th>
		                </tr>
		            </thead>
		            <tbody>
		            	<?php
						$pagename = "index.php?linkId=". $pageId ."&";
						$sql = "SELECT * FROM groups WHERE parentId = '$pageId' ORDER BY weight DESC";
						$newsql = $sql;
						$limit = LISTING_LIMIT;

						//get alias name
						$alias=$groups->getById($pageId);
						$aliasGet=$conn->fetchArray($alias);

						include("includes/pagination.php");
						$return = Pagination($sql, "", $limit, $aliasGet['urlname']);
						$arr = explode(" -- ", $return);
						$start = $arr[0];
						$pagelist = $arr[1];
						$count = $arr[2];
						$newsql .= " LIMIT $start, $limit";
						$result = mysql_query($newsql);
						while ($listRow = $conn->fetchArray($result))
						{?>
			                <tr>
			                    <td><?php echo $count++;?></td>
			                    <td>
			                    	<a href="<?php if($lan=='en') echo 'en/'; echo $listRow['urlname']; ?>">
			                    		<?php if($lan=='en') echo $listRow['nameen']; echo $listRow['name']; ?>
			                    	</a>
			                    </td>
			                    <td><?php if($lan=='en') echo $listRow['shortcontentsen']; echo $listRow['shortcontents']; ?></td>
			                </tr>
		         		<?php }?>
		            </tbody>
		        </table>
			</div>
		</div>
    </div>            
</div>