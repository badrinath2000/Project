<?php 
require_once("lockc.php"); 
$q=$_POST['searchword']; 
$data=$auth_user->srchbynmcont($q);
//print_r($data);
foreach($data as $stdata) {?>
<tr>
	<!--<th scope="row">1</th>-->
	<td>#</td>
	<td><?php echo $stdata['u_name']; ?></td>
	<td><?php echo $stdata['u_email']; ?></td>
	<td><?php echo $stdata['u_contact']; ?></td>
	<td><?php echo $stdata['location']; ?></td>
	<td><?php echo $stdata['keyskills']; ?></td>
	<td>
		<button class="btn-success btn"><a  class="fam" onclick="udetails('<?php echo $stdata['u_id']; ?>')">View Details</a>
	</button></td>
	<td>
		<button class="btn-success btn"><a  class="fam" href="selectst.php?uid=<?php echo $usr['u_id']; ?>">Select</a>
	</button></td>
</tr>
<?php } ?>
