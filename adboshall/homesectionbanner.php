<?php  
   ob_start();
      
  	include_once("../configuration/connect.php");

		
		
    
header("Content-type: application/octet-stream");  
    header("Content-Disposition: attachment; filename=Homesection_banner_Report.xls");  
    header("Pragma: no-cache");  
    header("Expires: 0");  
    

    
	?>
 
    
	
	
    <div class="widget-content">
								<table  border="1"class="table table-striped table-bordered table-hover   datatable">
									 <thead>
                      <tr>
                        <tr>
                        <th>S No.</th>
                       
                        <th>First Line</th>
                        <th>Second Line</th>
                      </tr>
                    </thead>
									<tbody>
									 <?php 
  	$sqlQry=mysqli_query($conn,"select * from `homebanner`  order by `id` ASC ");
	$i=0;
	$numrows=mysqli_num_rows($sqlQry);
	if($numrows>0){
	while($fetch=mysqli_fetch_array($sqlQry)){
	$i++;
	if($i%2==0)
	{$class='odd gradeX';
		}
	else{
		$class='even gradeC';
		}
	
  ?> 
   <tr bgcolor="#FFFFFF" id="recordsArray_<?php echo $fetch['id']; ?>" onMouseOver="this.style.cursor='move'">
  
    
  <td class="center"><?= $i?></td>
                       
                        <td><?php echo $fetch['fline']?></td>
                        <td > <?php echo $fetch['sline']?></td>
                        
    </tr>
 <?php }}else{?>
  <tr><td>No Record</td><td>No Record</td><td>No Record</td></tr>
  
  <?php } ?>
  									
									</tbody>
								</table>
							</div>