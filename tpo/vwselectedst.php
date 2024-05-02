<?php 
	require_once("lockc.php");
	require_once("cookie.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<title>TPO</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="../css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="../css/style.css" rel='stylesheet' type='text/css' />
<link href="../css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="../js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.metisMenu.js"></script>
<script src="../js/jquery.slimscroll.min.js"></script>
<script type="text/javascript">
	function udetails(uid)
	{
		alert(uid);
		$.ajax({
			url:'userdetails1.php',
			type:'POST',
			data:{uid:uid},
			success:function(data)
			{
				//alert(data);
				$('#view1').html(data)
			}
		});
	}
</script>
<script type="text/javascript">
function serchnmorcont() 
{
	var searchbox = $("#searchbox3").val();
	var dataString = 'searchword='+ searchbox;
	//confirm(searchbox);
	if(searchbox=='')
	{
	}
	else
	{
		$.ajax({
		type: "POST",
		url: "srchnocont.php",
		data: dataString,
		cache: false,
		success: function(result)
		{
			//alert(result);
			$("#view").html(result);
		}
	});
	}
	return false; 
}
</script>
<script type="text/javascript">
function serchskill() 
{
	var searchbox = $("#searchbox").val();
	var dataString = 'searchword='+ searchbox;
	//confirm(searchbox);
	if(searchbox=='')
	{
	}
	else
	{
		$.ajax({
		type: "POST",
		url: "srchskill.php",
		data: dataString,
		cache: false,
		success: function(result)
		{
			//alert(result);
			$("#view").html(result);
		}
	});
	}
	return false; 
}
</script>
<script type="text/javascript">
function serchstatus() 
{
	var searchbox = $("#searchbox1").val();
	var dataString = 'searchword='+ searchbox;
	//confirm(searchbox);
	if(searchbox=='')
	{
	}
	else
	{
		$.ajax({
		type: "POST",
		url: "srchstatus.php",
		data: dataString,
		cache: false,
		success: function(result)
		{
			//alert(result);
			$("#view").html(result);
		}
	});
	}
	return false; 
}
</script>
<script type="text/javascript">
function serchpercentage() 
{
	var searchbox = $("#searchbox2").val();
	var dataString = 'searchword='+ searchbox;
	//confirm(searchbox);
	if(searchbox=='')
	{
	}
	else
	{
		$.ajax({
		type: "POST",
		url: "srchperc.php",
		data: dataString,
		cache: false,
		success: function(result)
		{
			//alert(result);
			$("#view").html(result);
		}
	});
	}
	return false; 
}
</script>

</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <?php require_once("header.php"); ?>
		
        <div id="page-wrapper">
		<div class="inbox-mail" id="view1" > 
		<div class="col-md-3">
            <ul class="directory-list">
				<input  type="text"  class="input-sm form-control" placeholder="Search by name or contact" id="searchbox3" style="    background: #ffffff !important;margin-bottom: 10px; margin-top: 10px;" value="" onkeyup="serchnmorcont()" >
            </ul>
        </div>
		<div class="col-md-3">
            <ul class="directory-list">
				<input  type="text"  class="input-sm form-control" placeholder="Search by skills" id="searchbox" style="    background: #ffffff !important;margin-bottom: 10px; margin-top: 10px;" value="" onkeyup="serchskill()" >
            </ul>
        </div>
		<div class="col-md-3">
            <ul class="directory-list">
				<input  type="text"  class="input-sm form-control" placeholder="Search by status" id="searchbox1" style="    background: #ffffff !important;margin-bottom: 10px; margin-top: 10px;" value="" onkeyup="serchstatus()" >
            </ul>
        </div>
		
		<div class="col-md-3">
            <ul class="directory-list">
				<input  type="text"  class="input-sm form-control" placeholder="Search by percentage" id="searchbox2" style="    background: #ffffff !important;margin-bottom: 10px; margin-top: 10px;" value="" onkeyup="serchpercentage()" >
            </ul>
        </div>
		
 	 <div class="inbox-mail" >
        <div class="graphs">
	     <div class="xs">
  </div>
  <div class="panel-body">
		<div class="col-md-8 span_3">
		  <div class="bs-example1" data-example-id="contextual-table" style="
    width: fit-content;
">
		  
		    <table class="table">
		      <thead>
		        <tr>
		          <th>#</th>
		          <th>Name</th>
		          <th>Email</th>
		          <th>Contact</th>
				  <th>Address</th>
				  <th>Company</th>
				  <!--<th></th>-->
		        </tr>
		      </thead>
		      <tbody id="view">
		        <?php 
					$users = $auth_user->fetchselected();
					//print_r($users);
					//$no=$auth_user->fetchno();
					foreach($users as $usr)
					{ ?>
					<tr>
					<!--<th scope="row">1</th>-->
					<td>#</td>
					<td><?php echo $usr['u_name']; ?></td>
					<td><?php echo $usr['u_email']; ?></td>
					<td><?php echo $usr['u_contact']; ?></td>
					<td><?php echo $usr['location']; ?></td>
					<td><?php echo $usr['c_name']; ?></td>
					<td>
						<button class="btn-success btn"><a  class="fam" onclick="udetails('<?php echo $usr['u_id']; ?>')">View Details</a></button>
					</td>
					
					</tr>
				<?php } ?>
		      </tbody>
		    </table>
		   </div>
	   </div>
		
  </div>
  <div class="copy_layout">
      <p>Copyright ©  All Rights Reserved | Design   </p>
  </div>
  </div>
      </div>
	  </div>
	  </div>
	 </div>
<link href="../css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
</body>
</html>