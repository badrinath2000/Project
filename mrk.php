<?php //Fetch validcont
	public function searchcust($q,$user_id)
	{
		try
		{
	      $stmt = $this->conn->prepare("SELECT * FROM cust WHERE user_id =:user_id AND cname LIKE :search OR ccont LIKE  :search");
			$stmt->execute(array(':search' => '%'.$q.'%', ':user_id' => $user_id));
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}	
	}
	?>
	
	
	<script type="text/javascript">
function serinv() 
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
url: "srcinv.php",
data: dataString,
cache: false,
success: function(result)
{
$("#view").html(result);
	}
});
}return false; 
}


</script>


 <div class="col-md-6">
                              <ul class="directory-list">
							<input  type="text"  class="input-sm form-control" placeholder="Search by Invoice No OR Status" 
							id="searchbox" value="" onkeyup="serinv()" >
                        </ul>
                          </div>