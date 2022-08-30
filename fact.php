<html>
    <head>
        <title> CONTROLS & STRUCTURE</title>
</head>
<body>
    <from action=" " method="post">
        Enter the num of whose factorial requires:</br>
        <input type="number" name="number" id ="number">
        <input type="submit" name="submit" value="submit">
</from>
<?php
if(isset($_POST['submit'])and $_POST['submit']=="submit")
{
    if(isset($_POST['number'])and is_numberic($_POST['number']))
    {
        echo "Factorial of number is:".'<strong>'.getFactorial($_POST['number']).'</strong>';
    }
} 
?>
<?php
function getFactorial($num)
{
    $fact=1;
    for($i=1;$i<=$num;$i++)
    $fact=$fact*$i;
    return $fact;

}   
?>
</body>
</html>