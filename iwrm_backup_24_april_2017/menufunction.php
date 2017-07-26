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
	{	
		echo '<li>';
		?>
    	<a href="<? if($lan=='en') echo 'en/'; echo $groupRow['urlname'];?>">
    		<? if($lan=='en') echo $groupRow['nameen']; else echo $groupRow['name'];?>
    	</a>
		<?
		echo "</li>\n";
	}
}
?>