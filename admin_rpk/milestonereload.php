<?php
    //get milestone info
    //$sql3="SELECT * FROM PFHMilestones WHERE  active=1 AND (userID={$specs['id']} )";
    $sql3="SELECT * FROM PFHMilestones WHERE userID={$specs['id']} AND stageID={$stgID}";
    
     $milestoneIDz=array();
     $milestonez=array();
     $milestoneDatez=array();
     $stepz=array();
   // echo "sql3: $sql3";

$resultID3=mysql_query($sql3, $mysqlID);

if ($resultID3) {
          
           while($milestonezGet=mysql_fetch_array($resultID3,MYSQL_ASSOC)){
           	
           	
           	 $milestonez[]=$milestonezGet["milestone"];
           	 $milestonez2[$milestonezGet["milestone"]]=$milestonezGet["milestone"];
           	 
           	 $milestoneIDz[]=$milestonezGet["id"];
           	 $milestoneDatez[]=$milestonezGet["startDate"];
           	 $milestoneStatez[]=$milestonezGet["active"];
           	 
           	 
           	 
           	 $stepz1[$milestonezGet["milestone"]]=$milestonezGet["steps"];//explode(", ", $milestonez["steps"]);	
           	
           }
           
           
           
           	
           	 $thisMilestone=0;
           	 $thisMilestoneID=0;
           	 $thisMilestoneStartDate=0;
           	 
           
           foreach ($milestoneIDz AS $key=>$val){
           	if( $milestoneStatez[$key]==1) {
           		
           		
           	 $thisMilestone=$milestonez[$key];
           	 $thisMilestoneID=$milestoneIDz[$key];
           	 $thisMlStartDate=$milestoneDatez[$key];
           	 $thisMilestoneStartDate=date("n/j/y",$thisMlStartDate);
           	
           }
            	
         }    	
            
}  



?>



<table border=0 cellpadding=0 cellspacing=4>  
                
				          
                <? 
               // print_r($stepz1); 
               
                
                for ($i=0; $i<3; $i++) { ?>
                <tr>
                    <? for ($j=0; $j<3; $j++) { ?>
                    <? $sessionIndex=(($j*3)+$i+1); 
                    
                    
                $innerRayLength=count(${allMilestones.$stg}[$sessionIndex]); 
				                    
                    ?>
                    
                    
                    <td valign="top">
                    
                    <table border=1 cellpadding=8 cellspacing=0 width=175>
                    <tr bgcolor="#<? if ($sessionIndex==$thisMilestone) { echo "FFE000"; } else { echo ($sessionIndex<$thisMilestone) ? "FFFFFF" : "E0E8F0"; } ?>">
                        <td valign="top" width=170<? echo ($sessionIndex==$thisMilestone) ? " style=\"color:#000000;\"" : ""; ?>><b><? echo ($sessionIndex==$thisMilestone) ? "Milestone ".$sessionIndex." (Since {$thisMilestoneStartDate})" : "Milestone ".$sessionIndex; ?>:</b><br>
                        
          <? 
             //if (array_key_exists($sessionIndex, $milestonez)) {
             	
             $stepz=explode(", ", $stepz1[$sessionIndex]);	
             
             //////////////
             
            // echo $stepz; 
     
             
             /////////           	
             //}
				
				for($zx=0;$zx<$innerRayLength;$zx+=2){
          ?>              
                        
                        <? if (strlen(${allMilestones.$stg}[$sessionIndex][$zx])>0) {  	
 	 $codez=${allMilestones.$stg}[$sessionIndex][$zx+1]; 	
 	 
 	 echo "$codez"; 
 	?>
 
  <img src="images/icon_<? echo (in_array($codez, $stepz)) ? "go2" : "stop"; ?>.gif" width=7 height=7 border=0 alt="" hspace=4><?=${allMilestones.$stg}[$sessionIndex][$zx]?>
                        <? } else { echo "&nbsp;"; } ?><br>
                        <? } ?>
                        </td>
                        
				
                        
                    </tr>
                    </table><img src="images/blank.gif" width=1 height=5 border=0 alt=""></td>
                   
                    
                    
                    <? } ?>
                </tr>
                <? } ?>
                </table>



