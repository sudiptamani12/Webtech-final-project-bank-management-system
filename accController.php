<?php
    require_once '../../models/database.php';
    
   

    function getTransHis()
	{
		$query ="SELECT * FROM trans_history";
		$tran = get($query);
		return $tran;	
    }

	function getAcc()
	{
		$query ="SELECT * FROM account";
		$acc = get($query);
		return $acc;	
    }

	function appAcc($id)
    {
        $query="UPDATE account SET status='active' WHERE acc_no='$id'";
		
		execute($query);
	}
	function insertLoan($l_id, $c_id, $acc_no, $amount, $remarks)
	{
		
		$query="INSERT INTO loan VALUES('$l_id','$c_id','$acc_no','$amount','$remarks')";
		execute($query);
		
	}

	function getLoan()
	{
		$query ="SELECT * FROM loan";
		$loan = get($query);
		return $loan;	
    }


?>