<ul class="menu">
	<li>
  		<p>Admin Site</p>
  		<ul>
    		<li><a href="index.php">Home</a></li>
      		<li><a href="changepswd.php">Change Password</a></li>
      		<li><a href="logout.php">Logout</a></li>
    	</ul>
  	</li>
  	<li>
  		<p>Manage Info</p>
    	<ul>
            <li><a href="cms.php">Manage Contents</a></li>
            <li><a href="cms.php?groupType=Header">Manage Menubar</a></li>
            <li><a href="cms.php?groupType=Navigation">Manage Navigation</a></li>
            <li><a href="cms.php?groupType=Important_Links">Manage Important Links</a></li>
            <!-- <li><a href="cms.php?id=8&parentId=0&groupType=Other">Slider</a></li> -->
            <!-- <li><a href="cms.php?parentId=241&groupType=Other&open">Information Categories</a></li> -->
            <!-- <li><a href="cms.php?parentId=275&groupType=Other&open">Important Links</a></li> -->
            <li><a href="cms.php?id=176&parentId=0&groupType=Other">Welcome Message</a></li>
            <li><a href="cms.php?id=274&parentId=0&groupType=Other">Message From Chief</a></li>
            <li>
              <a href="cms.php?id=<?php echo MSG_FROM_SPOKEPERSON;?>&parentId=0&groupType=Other">Message From Spoke Pserson</a>
            </li>
            <li><a href="cms.php?id=362&parentId=0&groupType=Other">Information Officer</a></li>
            <li><a href="cms.php?id=581&parentId=0&groupType=Other">Hot News</a></li>
            <!-- li><a href="cms.php?id=367&parentId=0&groupType=Other">Photo Gallery</li> -->
            <li><a href="bills.php">Manage Bills</a></li>
            <li><a href="feedbacks.php">Manage Feedbacks</a></li>
            <li><a href="cms.php?groupType=Other">Manage Other</a></li>
    	</ul>
  	</li>
</ul>