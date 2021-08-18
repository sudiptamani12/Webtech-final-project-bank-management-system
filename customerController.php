<?php
    require_once '../../models/database.php';

    function getAllCustomer()
	{
		$query ="SELECT * FROM customer WHERE status='active'";
		$cms = get($query);
		return $cms;	
    }
    
    function getCustomer($id)
	{
		$query="SELECT * FROM customer WHERE c_id='$id'";
		$cms=get($query);
		return $cms[0];
    }
    
    function editCustomer($id, $name)
    {
        $query="UPDATE customer SET name='$name' WHERE c_id='$id'";
		
		execute($query);
		header("Location:../../views/Admin/manageuser.php");
    }
    
    function deleteCustomer($id)
    {
        $query="UPDATE customer SET status='inactive' WHERE c_id='$id'";
		
		execute($query);
		header("Location:../../views/Admin/manageuser.php");
	}
	
	//function getUser($id)
	//{
//		$query="SELECT * FROM customer WHERE c_id='$id' and status='active'";
//		$user=get($query);
//		return $user[0];
  //  }
    
    function editUser($id, $name, $dob, $age, $mobile, $address, $email, $gender, $image,$acc_no)
    {
        $status= "active";
        $query="UPDATE customer SET name='$name', dob='$dob', age=$age, mobile='$mobile', address='$address', email='$email', gender='$gender', image='$image', acc_no='$acc_no'  WHERE c_id='$id'";
		
		execute($query);
		header("Location:../../views/User/profile.php");
	}
	
	function insertUser($c_id, $name, $dob, $age, $mobile, $address, $email, $gender, $image,$acc_no, $status)
	{
		
		$query="INSERT INTO customer VALUES('$c_id','$name','$dob','$age','$mobile','$address', '$email','$gender','$image',acc_no='$acc_no','$status')";
		execute($query);
		
	}
    function accessUser($id, $password, $type, $ans, $status)
	{
		$query="INSERT INTO login VALUES('$id','$password','$type','$ans','$status')";
		execute($query);

	}
	function updatePass($id, $password)
	{
		$query="UPDATE login SET password='$password' WHERE id='$id'";
		execute($query);
		header("Location:../logout.php");
		

	}

	function getUserU($id)
	{
		$query="SELECT * FROM login WHERE id='$id'";
		$user=get($query);
		return $user[0];
	}
	function searchCustomer($status)
	{
		$query="SELECT * FROM customer WHERE status='$status'";
		$customer=get($query);
		return $customer;
    }
?>