<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Calculator</title>
        <script language="javascript" type="text/javascript">
         
    function packageTotal() {
        // Enter in prices here
        var x = 5;
        var y = 10;
        var p = x + y * 12;
        var b = y * 12;
    
    if (document.getElementById('basicProgram').checked) {
        //Basic package is checked
        document.calculator.total.value = b;
    
        
     } else if (document.getElementById('proProgram').checked) {
         //Basic package is checked 
         document.calculator.total.value = p;
     }
     
    }
    
    function calcDisc(){
        var subTot = document.calculator.total.value;
        var discTotal = ((subTot/ 100) *10);
        document.calculator.discount.value=discTotal;
    
    }
    function calcTotal(){
        var subTott= document.calculator.total.value;
        
        var discTotal = document.calculator.discount.value;
        
        var wholeTotal = (subTott - discTotal);
        
        document.calculator.wholeTotal.value = wholeTotal;
    }
    </script>
    </head>
    <body style="background-image: url(sky.jpg);">
       <!---Opening a HTML --->
       <form name="calculator" method="post" action="Ebus2.php">
                       <center>

       <!---User fills out form here--->
       <br/>
       <input type="radio" name="programType" id="basicProgram" value="Basic"/>Basic
       <input type="radio" name="programType" id="proProgram" value="Pro"checked/>Pro
       
       <!----Here result will be displayed. --->
       <br />
       subtotal: <input type="text" name="total">
                        
                        <br>
       <input type="button" value="Subtotal" onclick="javascript:packageTotal();">
       <br/>
       
       Discount: <input type="text" name="discount">
       <br/>
       <input type="button" value="Discount" onclick="javascript:calcDisc();">
       <br/>
       Total: <input type="text" name="wholeTotal">
       <br>
       <input type="button" value="Total" onclick="javascript:calcTotal();">
       
      <center>   
                <input style="background-color: blue;" class="button" type="submit" name="btnContinue" id="btnContinue" onclick="" value="Continue"/>
       
       </form>
    </body>
</html>
