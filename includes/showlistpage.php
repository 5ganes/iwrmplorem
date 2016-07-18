<?php include("includes/breadcrumb.php"); ?>

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
				<?php
				$pagename = "index.php?linkId=". $pageId ."&";
				
				$sql = "SELECT * FROM groups WHERE parentId = '$pageId' ORDER BY id DESC";
				
				$newsql = $sql;

				$limit = LISTING_LIMIT;
				
				include("includes/pagination.php");
				$return = Pagination($sql, "");
				
				$arr = explode(" -- ", $return);

				$start = $arr[0];
				$pagelist = $arr[1];
				$count = $arr[2];
				
				$newsql .= " LIMIT $start, $limit";
				
				$result = mysql_query($newsql);
				
				while ($listRow = $conn->fetchArray($result))
				{?>
					<div class="listRow">
			  			<? if(file_exists(CMS_GROUPS_DIR . $listRow['image']) && !empty($listRow['image'])){?>
			  			<div style="float: left; width: 110px;"> <a href="<?= $listRow['urlname'] ?>"><img src="<?php echo imager($listRow['image'], 100, 75, "fix"); ?>" alt="<?php echo $listRow['title']; ?>" style="border:0" /></a>
			  			</div>
			  	<? } ?>
			  	<div>
			    	<div>
			      		<div class="newsList" style="font-weight: bold;font-size: 17px;">
			      			<a href="<?php echo $listRow['urlname']; ?>"><?php echo $listRow['name']; ?></a>
			      		</div>
			      		<?php echo $listRow['shortcontents']; ?> </div>
			  		</div>
				</div>
				<div style="clear:both;"></div>
				<? }
				if($count > $limit)
				echo $pagelist;
				?>
			</p>
        </div>
    </div>
</div>