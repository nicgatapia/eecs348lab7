<!DOCTYPE html>
<html>
<head>
<title>Multiplication Table</title>
</head>
<body>
<?php
if(isset($_POST['size']))
{
    $number = $_POST['size'];
    echo "<h2>Multiplication TABEL of $number</h2>";
    echo "<table border='1'>";
    echo "<tr><th>$nbsp;</th>";
    
    for($i = 1; $i <= $number; $i++){
    echo "<th>$i</th>";
    }
    echo "</tr>";
    
    // Create column headers
    for($i = 1; $i <= $number; $i++)
    {
        echo "<tr><th>$i</th>";
        for($j = 1; $j <= $number; $j++){
            $product = $i * $j;
            echo "<td>$product</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>
</body>
</html>
    
