<?php
function createMenu($parentId, $groupType,$lan)
{
	global $groups;
	global $conn;
	if ($parentId == 0)
		$groupResult = $groups->getByParentIdAndType($parentId, $groupType);	
	else
		$groupResult = $groups->getByParentId($parentId);
	
	if ($conn->numRows($groupResult) > 0)
	{?>
		<ul <? if($parentId==0){?>class="nav pull-right"<? }?>>
	<? }
	while($groupRow = $conn->fetchArray($groupResult))
	{?>
		<li>
    	<a href="<? if($groupRow['id']==1){ echo "#"; }else{ if($lan=='en') echo 'en/'; echo $groupRow['urlname'];}?>" <? if($parentId==1022){?>target="_blank"<? }?>><i class="<? //include("menuIcon.php"); ?>"></i><br />
			<? 
				if($lan=='en') echo $groupRow['nameen']; 
				else echo $groupRow['name']; 
				
				$new_date=date_add(date_create($groupRow['onDate']),date_interval_create_from_date_string("3 days"));
				$new_date=date_format($new_date,'Y-m-d');
				if($new_date>=date('Y-m-d')) 
					echo '<span class="new"> (NEW)</span>';

				$newCount=$groups->getNewCountByParentIdMainMenu($groupRow['id']);
				if($newCount==TRUE)
					echo '<span class="new"> (NEW)</span>';?>
      	</a>
		<?
		if($groupRow['linkType']=="Normal Group"){
			if($groupRow['id']!=PUBLICATION)
				createSubMenu($groupRow['id'], $groupType,$lan);
		}
		echo "</li>\n";
	}
	if ($conn->numRows($groupResult) > 0)
		echo '</ul>';
}

function createSubMenu($parentId, $groupType,$lan)
{
	global $groups;
	global $conn;
	if ($parentId == 0)
		$groupResult = $groups->getByParentIdAndType($parentId, $groupType);	
	else
		$groupResult = $groups->getByParentId($parentId);
	
	if ($conn->numRows($groupResult) > 0)
	{?>
		<ul <? if($parentId==0){?>class="nav pull-right"<? }?>>
	<? }
	while($groupRow = $conn->fetchArray($groupResult))
	{?>
		<li>
    	<a href="<? if($groupRow['id']==1){ echo "#"; }else if($groupRow['id']==1009){ echo "publications.php";}else{ if($lan=='en') echo 'en/'; echo $groupRow['urlname'];}?>" <? if($parentId==1022){?>target="_blank"<? }?>>
			<? if($lan=='en') echo $groupRow['nameen']; else echo $groupRow['name'];

// 			$date=date_create($groupRow['onDate']);
// date_add($date,date_interval_create_from_date_string("40 days"));
// echo date_format($date,"Y-m-d");

			// $date=date_create($groupRow['onDate']);
			$new_date=date_add(date_create($groupRow['onDate']),date_interval_create_from_date_string("3 days"));
			$new_date=date_format($new_date,'Y-m-d');
			if($new_date>=date('Y-m-d')) 
				echo '<span class="new"> (NEW)</span>';
			$newCount=$groups->getNewCountByParentId($groupRow['id']);
			if($newCount>0)
				echo '<span class="new"> ('.$newCount.' NEW)</span>';
			?>
      	
      	</a>
		<?
		if($groupRow['linkType']=="Normal Group")
			createSubMenu($groupRow['id'], $groupType);
		echo "</li>\n";
	}
	if ($conn->numRows($groupResult) > 0)
		echo '</ul>';
}

?>
<?
	function createByBlock($id)
	{
		//echo "hello";
		//die();
		global $groups;
		global $conn;
		if($id==2)
			$block="Category Submenu";
		else if($id==3)
			$block="Destination Submenu";
		$act=$groups->getByBlock($block);
		echo '<ul>';
		while($actGet=$conn->fetchArray($act))
		{?>
        	<li><a href="<? if($block=="Category Submenu"){?>category<? }else{?>category<? }?>-<?=$actGet['urlname'];?>.html"><?=$actGet['name'];?></a></li>		
		<? }
		echo '</ul>';
	}
?>