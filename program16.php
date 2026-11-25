<html>
<body>
<h2> Odd or Even number</h2>
<form method="get">
    Enter a number:
    <input type="text" name="num">
    <input type="submit" value="Check">
</form>

<?php
if(isset($_GET['num']))
{
    $num = $_GET['num'];

    if($num % 2 == 0)
    {
        echo "$num is Even number";
    }
    else
    {
        echo "$num is Odd number";
    }
}
?>
</body>
</html>
