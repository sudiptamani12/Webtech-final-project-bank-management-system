<?php
    require_once ('../../controllers/employeeController.php');

    

	session_start();
	if(!isset($_SESSION['loggedinuser']))
	{
		header("Location:../login.php");
    }
    $aid = $_SESSION["loggedinuser"];
    $emp=getEmployee($aid);

    if(isset($_POST['back']))
	{
        
		header("Location:home.php");
    }
    
?>

<?php
            $err_name="";
            $name="";
            $email="";
            $err_email="";
            $mobile="";
            $err_mobile="";
            $address="";
            $err_address="";
            
            
            

            
            $dob="";
            $err_dob="";

            $has_error=false;

            if(isset($_POST['submit']))
            {
                
                
                if(empty($_POST['email']))
                {
                    $err_email="*email Required";
                    $has_error=true;
                }
                else
                {			
                    $email=htmlspecialchars($_POST['email']);
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
                    {
                        $err_email = "Valid email required";
                        $has_error=true;
                    }
                  
                        
                }
                
                
                if(empty($_POST['mobile']))
                {
                    $err_mobile="*Phone Number Required";
                    $has_error=true;
                }
                else
                {			
                    $mobile=htmlspecialchars($_POST['mobile']);
                    if (!preg_match("/^[0-9]{11}+$/",$mobile)) 
                    {
                        $err_mobile = "Valid Number Required";
                        $has_error=true;
                    }
                    
                }

                if(empty($_POST['address']))
                {
                    $err_address="*address Required";
                    $has_error=true;
                }
                else
                {			
                    $address=htmlspecialchars($_POST['address']);
                    
                }


                if(!$has_error)
		        {
                   
                    $mobile= $_POST['mobile'];
                    $address= $_POST['address'];
                    $email= $_POST['email'];
                    

                    editEmployeeself($aid, $mobile, $email, $address);
                    header("Location:home.php");
                    
                }
                else
                    echo '<script>alert("Fill up properly")</script>';

            }
        ?>

<html>
    <head>
        <title>Edit Profile</title>
        <link rel="stylesheet" type="text/css" href="Css/home.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <style>
            .mySlides {display:none;}
            body, html {
            height: 100%;
            margin: 0;
            }
            .bg {
            background-image: url("../../storage/hotel_image/Hotelbg.jpg");
            height: 100%; 
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            }
        </style>
    </head>
    <body class="bg">
        

        <div style="position:absolute; top: 100px; left: 30px;">
            <font size="60"><h3>Welcome <?php echo $_SESSION['loggedinuser'];?></h3><hr> </font>
			<form method="post" action="" enctype="multipart/form-data">
                <table>                 
                    <tbody>
                         
                        <tr>
                            <td>Mobile</td>
                            <td><input type="text" name="mobile" value="<?php echo $emp["mobile"];?>"></td>
                            <td><span style="color:red"><?php echo $err_mobile?></span></td>
                        </tr>
                        <tr>
                            <td>Address: </td>
                            <td><input type="text" name="address" value="<?php echo $emp["address"];?>"></td>
                            <td><span style="color:red"><?php echo $err_address ?></span></td>
                        </tr>
                        
                        
                        <tr>
                            <td>Email: </td>
                            <td><input type="text" name="email" value="<?php echo $emp["email"];?>"></td>
                            <td><span style="color:red"><?php echo $err_email ?></span></td>
                        </tr>
                        
                        <tr>
                            <td><input type="submit" name="submit" value="Save Changes"></td>
                            <td></td>
                            <td><input type="submit" name="back" value="Back to Profile"></td>
                        </tr>
                    </tbody>
                </table>
            </form>
            
        </div>
        
        
    </body>
</html>


