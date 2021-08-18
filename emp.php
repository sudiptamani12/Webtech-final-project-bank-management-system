<?php 
	
	require '../../controllers/employeeController.php';
    
    $emps=getAllEmployee();
    
?>
<html>
    <head>
        <title>Employee</title>
        <link rel="stylesheet" type="text/css" href="Css/home.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <style>
            .mySlides {display:none;}
            body, html {
            height: 100%;
            margin: 0;
            }
            .bg {
            background-image: url("../../storage/\web_info_image/reg.jpg");
            height: 100%; 
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            }
            .p1 {
                position: absolute;
                left: 420;
                top: 70px;
                font-size: 40px;
                color: rgb(255, 200, 205);
                }
            .footer {
                position: absolute;;
                left: 0;
                top: 1200px;
                width: 100%;
                background-color: rgb(35, 35, 119);
                color: rgb(216, 205, 205);
            }
        </style>
    </head>
    <body class="bg">
    
        <ul class="active">
        <li><a href="home.php">Home</a></li>
        <li><a href="Vendor List.php">Vendor List</a></li>
        <li><a href="emp.php">Employee</a></li>
        <li><a href="acc.php">Account Information</a></li>
        <li><a href="Loan.php">Loan</a></li>
        </ul>

          
          
         
        <form method="post" action="" enctype="multipart/form-data">
            
            <table border="1" style="position: absolute; top: 200; left: 300;">
                  <tbody>
                        <tr>
                          <td>ID</td>
                          <td>Name</td>
                          <td>Dob</td>
                          <td>Salary</td>
                          <td>Address</td>
                          <td>gender</td>
                          <td>E mail</td>
                          <td>Mobile</td>
                     
                          
                        </tr>
                        
                        <?php
                            foreach($emps as $emp)
                            {
                                echo "<tr>";
                                echo "<td>".$emp["e_id"]."</td>";
                                echo "<td>".$emp["name"]."</td>";
                                echo "<td>".$emp["dob"]."</td>";
                                echo "<td>".$emp["salary"]."</td>";
                                echo "<td>".$emp["address"]."</td>";
                                echo "<td>".$emp["gender"]."</td>";
                                echo "<td>".$emp["email"]."</td>";
                                echo "<td>".$emp["mobile"]."</td>";
                              
                                echo "</tr>";
                            }
                        ?>
                        
                  </tbody>
            </table>
          </form>

          <div class="footer">
            <p style="position: absolute;">Hot Line : +8806849564984 <br>
               Facebook : www.facebook.com/ebl bank <br>
               fax : 028545
            </p>
            <p align="right">Powered by :bjit software <br>
               www.bjitbd.com.bd <br>
               +880984561564564  
            </p>
          </div>
    </body>
</html>