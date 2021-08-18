<?php
    include '../../controllers/accController.php';

    $loans=getLoan();

?>

<html>
    <head>
        <title>Loan Registration</title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <style>
            body, html {
            height: 100%;
            margin: 0;
            }
            .bg {
            background-image: url("../../storage/web_info_image/reg.jpg");
            height: 100%; 
            background-position: center;
            background-repeat: repeat;
            background-size: cover;

        
        }
    </style>
            
    </head>
    <body class="bg">
    <?php
            
            $l_id="";
            $err_l_id="";

            $c_id="";
            $err_c_id="";

            $acc_no="";
            $err_acc_no="";

            $amount="";
            $err_amount="";

            $remark="";
            $err_remark="";
            

            $has_error=false;

            $x=rand(1,10000000);
            $l_id="l-".$x;
            

            if(isset($_POST['submit']))
            {
                
                
                
                if(empty($_POST['c_id']))
                {
                    $err_c_id="*customer id Required";
                    $has_error=true;
                }
                else
                {			
                    $c_id=htmlspecialchars($_POST['c_id']);
                    
                }

                if(empty($_POST['acc_no']))
                {
                    $err_acc_no="*Account no. Required";
                    $has_error=true;
                }
                else
                {			
                    $acc_no=htmlspecialchars($_POST['acc_no']);
                    
                }

                if(empty($_POST['amount']))
                {
                    $err_amount="*Amount Required";
                    $has_error=true;
                }
                else
                {			
                    $qsn=htmlspecialchars($_POST['amount']);
                    
                }

                if(empty($_POST['remark']))
                {
                    $err_remark="*Remark Required";
                    $has_error=true;
                }
                else
                {			
                    $remark=htmlspecialchars($_POST['remark']);
                    
                }
                
               

                if(!$has_error)
		        {
                    

                    
                    $l_id=$_POST['l_id'];
                    $c_id=$_POST['c_id'];
                    $acc_no=$_POST['acc_no'];
                    
                    $amount= $_POST['amount'];
                    $remark= $_POST['remark'];
                    


                    insertLoan($l_id, $c_id, $acc_no, $amount, $remark);
                    


                    header("Location:home.php");
                }
                else
                    echo '<script>alert("Fill Up Properly")</script>';


            }

            if(isset($_POST['cancel']))
    {
                header("Location:home.php");
       
    }
        ?>
        
        <h2>Loan Registration</h2>
        <h3> Complete the form & give necessary information</h3>
        <hr>
        <form method="post" action="" enctype="multipart/form-data">
            <table align="center">
                <tbody>
                    
                <tr>
                        <td>Loan ID</td>
                        <td><input type="text" style="width: 250;" value="<?php echo $l_id;?>" name="l_id" readonly></td>
                        <td><span style="color:red">*Please Store Your ID with Care.</span></td>
                    </tr>
                
                
                <tr>
                        <td>Customer ID</td>
                        <td><input type="text" style="width: 250;" placeholder="ex:C-1" value="<?php echo $c_id;?>" name="c_id"></td>
                    </tr>
                  
                    <tr>
                        <td></td>
                        <td><span style="color:red"><?php echo $err_c_id;?></span></td>
                    </tr>
                    <tr>
                        <td>Account No.</td>
                        <td><input type="text" placeholder="ex:acc-" style="width: 250;"value="<?php echo $acc_no;?>" name="acc_no"></td>
                    </tr>
                    
                    <tr>
                        <td></td>
                        <td><span style="color:red"><?php echo $err_acc_no;?></span> </td>
                    </tr>
                    <tr>
                        <td>Amount:</td>
                        <td><input type="text" size="10" style="width: 250;"placeholder="1235456" value="<?php echo $amount;?>" name="amount"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><span style="color:red"><?php echo $err_amount;?></span></td>
                    </tr>
                    

                    <tr>
                        <td>Remarks:</td>
                        <td><input type="text" style="width: 250; height: 100;"value="<?php echo $remark;?>" name="remark"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><span style="color:red"><?php echo $err_remark;?></span></td>
                    </tr>
                    
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Submit" style="width: 100;">
                        </td>
                        <td colspan="2">
                            <input type="submit" name="cancel" value="cancel" style="width: 100;">
                        </td>
                        
                        
                        
                    </tr>
                </tbody>
            </table>
        </form>
        <form method="post" action="" enctype="multipart/form-data">
            
            <table border="1" style="position: absolute; top: 500; left: 300;">
                  <tbody>
                      <tr>
                      <td colspan='2'>LOAN LIST</td>
                      </tr>
                        <tr>
                            
                          <td>ID</td>
                          <td>Customer ID</td>
                          <td>Acc No.</td>
                          <td>Amount</td>
                          <td>Remarks</td>
                          
                     
                          
                        </tr>
                        
                        <?php
                            foreach($loans as $loan)
                            {
                                echo "<tr>";
                                echo "<td>".$loan["l_id"]."</td>";
                                echo "<td>".$loan["c_id"]."</td>";
                                echo "<td>".$loan["acc_no"]."</td>";
                                echo "<td>".$loan["amount"]."</td>";
                                echo "<td>".$loan["remarks"]."</td>";
                                
                              
                                echo "</tr>";
                            }
                        ?>
                        
                  </tbody>
            </table>
          </form>    
    </body>
</html>
