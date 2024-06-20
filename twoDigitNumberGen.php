<!-- html:  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP _ Calculator</title>
</head>
<body>
    <form action="<?= $_SERVER['PHP_SElF'] ?>" method="get">
        <div> 
            <input type="submit" value="generate" name="generate">
        </div>
    </form>

    <div>
        <p>firstDigit:</p>
        <p>secondDigit:</p>
    </div>

</body>
</html>
<!-- javascript: pass two numbers (allat)-->


<!-- php: generate # between 1 and 6 -->
<?php

    if(isset($_GET['generate'])){
        $x = $_GET['num1'];
        $y = $_GET['num2'];
        $oper = $_GET['operation'];

        switch($oper){
            case 'add' : $result = $x + $y;
                break;
            case 'sub' : $result = $x - $y;
                break;
            case 'mul' : $result = $x * $y;
                break;  
            case 'div' : $result = $x / $y;
                break;  
        }
    }

?>