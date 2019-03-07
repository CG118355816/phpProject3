<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
$fullNameValue= "";
$totalValue2 = "";
$phonenum = "";
$email = "";
/*
 * Create a session variable for the mobile number
 */
@$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = @$fullNameValue;
$_SESSION['txtTotal'] = @$totalValue2;
$_SESSION['txtNum'] = @$Phonenum;
$_SESSION['txtEmail'] = @$email;
/* 
 * Allocate the mobile number session variable to a text box
 */ 
?>

<!DOCTYPE html>
<html>
    <head>
        <title>eBusiness 2</title>
        <style>
             body{
                 
                background-color: rgb(277,210,111);
                background-image: url(cityscapesilhouette.jpg);
                     
                
            }
                       .button {
  background-color: #Bf211E;
  border: none;
  color: #070707;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  font-family: Times, serif;
  font-weight: Bold;
        </style>
    </head>
    
    <body style="background-image: url(sky.jpg);">
        <div class="form">
            <form name="Details" method="post" action="Ebus3.php">
                <center>
                    <br><br><br><br><br><br>
                    <table cellspacing="10">
                        <tr>
                            <td><b></b></td>
                            <td style="background-color: blue;"><b>Enter in your details below</b></td>
                        </tr>
                        
                            <td style="background-color: blue;">Name</td>
                            <td><input type="text" id="txtName" name="txtName"  value="" /></td>
                        
                        <tr>
                            <td style="background-color: blue;">Phone Number</td>
                            <td><input  type="number" id="txtNum" name="txtNum" value="" /></td>
                        </tr>
                        <tr>
                            <td style="background-color: blue;">Email</td>
                            <td><input  type="email" id="txtEmail" name="txtEmail" value="" /></td>
                        </tr>
                         <tr>
                            <td style="background-color: blue;">Password</td>
                            <td><input  type="password" id="txtPassword" name="txtPassword" value="" /></td>
                        </tr>
                        <tr>
                            <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>"/></td>
                            
                    </table>
                </center>
                <center>   
                <input style="background-color: blue;" class="button" type="submit" name="btnContinue" id="btnContinue" onclick="" value="Continue"/>
                <center>
                    </div>
        
            </form>
        </div>
    </body>
</html>




<html>
    <head>
       
        
        
        
        
        
        
        
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
    </body>
</html>
