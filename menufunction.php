<?php
function createMenu($parentId, $groupType,$lan, $count=1)
{
	global $groups;
	global $conn;

	if ($parentId == 0){
		$groupResult = $groups->getByParentIdAndType($parentId, $groupType);	
	}
	else{
		$groupResult = $groups->getByParentId($parentId);		
	}

	if ($conn->numRows($groupResult) > 0 and $parentId != 0){
		echo '<ul class="dropdown-menu multi-level">';
	}

	while($groupRow = $conn->fetchArray($groupResult)){?>
		<li <?php if($groupRow['linkType']=="Normal Group" and $count<2) echo 'class="dropdown nav-item"'; else if($count<2) echo 'class="nav-item"'; else echo 'class="dropdown-submenu"'; ?>>
    	<a <?php if($groupRow['linkType']=="Normal Group") echo 'class="dropdown-toggle white" data-hover="dropdown" data-delay="0" data-close-others="false"' ?> href="<? if($groupRow['linkType']!='File'){ if($lan=='en') echo 'en/'; if($groupRow['linkType']!='Link') echo $groupRow['urlname']; else echo $groupRow['contents'];} else{ echo CMS_FILES_DIR.$groupRow['contents'];}?>">
    		<? if($lan=='en') echo $groupRow['nameen']; else echo $groupRow['name']; if($groupRow['linkType']=='Normal Group') echo '<span class="caret"></span>';?>
    	</a>
		<?

		if($groupRow['linkType']=="Normal Group" and $groupRow['urlname']!='video-gallery')
			if($count<3)
				createMenu($groupRow['id'], $groupType, $lan, $count+1);

		echo "</li>\n";
	}
	if ($conn->numRows($groupResult) > 0 and $parentId != 0)
		echo '</ul>';
}

function createNavigation($parentId, $groupType, $lan='')
{
	global $groups;
	global $conn;

	if ($parentId == 0)
		$groupResult = $groups->getByParentIdAndType($parentId, $groupType);	
	else
		$groupResult = $groups->getByParentId($parentId);
	if ($conn->numRows($groupResult) > 0 and $parentId != 0){
		echo '<ul>';
	}		

	while($groupRow = $conn->fetchArray($groupResult))
	{	
		echo '<li>';
		?>
    	<a href="<? if($lan=='en') echo 'en/'; if($groupRow['linkType']!='File') echo $groupRow['urlname']; else echo CMS_FILES_DIR.$groupRow['contents'];?>">
    		<? if($lan=='en') echo $groupRow['nameen']; else echo $groupRow['name'];?>
    	</a>
		<?
		if($groupRow['linkType']=="Normal Group")
				createNavigation($groupRow['id'], $groupType, $lan);

		echo "</li>\n";
	}
	if ($conn->numRows($groupResult) > 0 and $parentId != 0)
		echo '</ul>';
}
?>