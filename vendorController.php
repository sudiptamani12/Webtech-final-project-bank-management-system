<?php
    require_once '../../models/database.php';
    
   

    function getAllVendor()
	{
		$query ="SELECT * FROM vendor WHERE status='active'";
		$vendor = get($query);
		return $vendor;	
    }

	function deleteVendor($id)
    {
        $query="UPDATE vendor SET status='inactive' WHERE v_id='$id'";
		
		execute($query);
	}


?>