<!--main content dynamic part-->
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="span12">
                <i class="icon-flag page-title-icon"></i>
                <h2>भुक्तानीका लागि प्राप्त विलहरुको सार्वजनिकरण</h2>
            </div>
        </div>
    </div>
</div>
        
<!-- Services Full Width Text -->
<div class="services-full-width container">
    <div class="row">
        <div class="services-full-width-text span12">
            	<style> table{ min-width:270px; width:95%} table tr th{ font-size:15px} table tr td{} </style>
                <table align="center" border="1" cellspacing="0" cellpadding="7" style="margin-left:30px">
    
    <tbody>
    <tr>
      <th align="center">सि.नं</th>
      <th align="center">विवरण</th>
      <th align="center">ब.उ.शि.नं.</th>
      <th align="center">खर्च शिर्षक</th>
      <th align="center">खरिद प्रक्रिया</th>
      <th align="center">प्यान नं</th>
      <th align="center">भुक्तानी पाउने व्यक्ति/ संस्था</th>
      <th align="center">बिल / निवेदन प्राप्त भएको मिति</th>
      <th align="center">रकम</th>
      <th align="center">कैफियत</th>
      <th align="center">अप्लोड समय</th>
       
    </tr>
    <? $bill=mysql_query("select * from bills order by weight"); $i=0;
	while($billGet=mysql_fetch_array($bill))
	{?>
    	<tr bgcolor="#DFDFDF">
            <td align="center"><?=++$i;?></td>
            <td align="center"><?=$billGet['description'];?></td>
            <td align="center"><?=$billGet['busn'];?></td>
            <td align="center"><?=$billGet['spentTitle'];?></td>
            <td align="center"><?=$billGet['buying'];?></td>
            <td align="center"><?=$billGet['panNo'];?></td>
            <td align="center"><?=$billGet['paymentReceiver'];?></td>
            <td align="center"><?=$billGet['billDate']?></td>
            <td align="center"><?=$billGet['amount'];?></td>
            <td align="center"><?=$billGet['remarks'];?></td>
            <td align="center"><?=$billGet['onDate'];?></td>
    	</tr>
  	<? }?>
       
    </tbody>
    </table>
                    
                </div>
            </div>
        </div>