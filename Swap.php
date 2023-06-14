<html>  
<body>  
<fieldset>
        
<form method="post">  
<label for ="First Number"> First Number : </label>  
<input type="number" name="number1" /><br><br>  
Second Number:  
<input type="number" name="number2" /><br><br>  
<input  type="submit" name="submit" value="Swap">  
</fieldset>

</form>
<?php  
    if(isset($_POST['submit']))  
    {  
        $n1 = $_POST['number1'];  
        $n2 = $_POST['number2'];  
        echo nl2br("Before swapping a = $n1 and b = $n2\n");
        $n2 = $n1 + $n2;
        $n1 = $n2 - $n1;
        $n2 = $n2 - $n1;
    echo nl2br("After swapping, a = $n1 and b = $n2\n"); 
    }
?>  


</body>  
</html>  
