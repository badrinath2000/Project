<table class="table">
     <thead>
        <tr>
          <th>Sr</th>
          <th>Name</th>
          <th>Last Name</th>
          <th>Username</th>
        </tr>
      </thead>
      <tbody>
	  <?php 
	  $f=4;
	  $users = $auth_user->fetchusers($f);
	  //print_r($users);
	  //$no=$auth_user->fetchno();
	  foreach($users as $usr)
	  { ?>
        <tr>
          <!--<th scope="row">1</th>-->
          <td><?php echo $usr['u_name']; ?></td>
		  <td>
		  <a  class="fam" onclick="udetails('<?php echo $usr['u_id']; ?>')">View Details</a>
          </td>
        </tr>
	  <?php } ?>
      </tbody>
    </table>