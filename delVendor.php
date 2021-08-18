<?php 
      require_once ('../../controllers/VendorController.php');  
        


    if(isset($_POST['submit']))
    {
          

        session_start();
        if(!isset($_SESSION['loggedinuser']))
        {
            header("Location:../login.php");
        }

        
        $c_id = $_SESSION["loggedinuser"];
        
        $vendor_id=$_GET["id"]; 
      

        deleteVendor($vendor_id);
        header("Location:../Manager/home.php");
        
        

       
    }
    if(isset($_POST['back']))
    {
        header("Location:home.php");
       
    }
?>
<html>
    <head>
        <title>Delete Vendor</title>
        <link rel="stylesheet" type="text/css" href="Css/home.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <style>
            .mySlides {display:none;}
            body, html {
            height: 100%;
            margin: 0;
            }
            .bg {
            background-image: url("../../storage/package_image/about.jpg");
            height: 100%; 
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            }
            .footer {
                position: absolute;;
                left: 0;
                top: 1250px;
                width: 100%;
                background-color: rgb(35, 35, 119);
                color: rgb(216, 205, 205);
                
            }
        </style>
    </head>
    <body class="bg">

        <div style="position:absolute; top: 100px; left: 30px;">
            <font size="60"><h1>Are you sure want to delete?</h1><hr> </font>
        </div>
        
        <form action="" method="post">
            <table border="1" style="position:absolute; top: 300px; left: 130px; width:150">
                <tbody>
                    
                    
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td rowspan="2"><input type="submit" name="submit" value="OK" style="width:150"></td>
                        <td></td>
                        <td></td>
                        <td rowspan="2"><input type="submit" name="back" value="Cancel" style="width:150"></td>

                    </tr>
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