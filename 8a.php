<html>
<head>
    <title>Result Page</title>
</head>
<body>
    <?php
    $op1=$_POST['op1'];
    $op2=$_POST['op2'];
    $operator=$_POST['operator'];
    switch($operator)
    {
        case '+':$res=$op1+$op2;
            break;
        case '-':$res=$op1-$op2;
            break;
        case '*':$res=$op1*$op2;
            break;
        case '/':if($op2==0)
            $res=0;
        else
            $res=$op1/$op2;
            break;
    }
    echo "<h1>Simple Calculator</h1>";
    echo "<h2>".$op1.$operator.$op2."=".$res."</h2>";
    ?>
</body>
</html>
