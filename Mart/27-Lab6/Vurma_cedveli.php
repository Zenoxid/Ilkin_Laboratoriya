<!DOCTYPE html>
<html>
<body>
<?php
echo "Vurma cedveli: <br>";
echo "<table>";
	for($x=1; $x<=9; $x++)
    {
        echo "<tr>";
    	for($y=1; $y<=9; $y++)
        {
        	echo "<td>".$y."*".$x."=".($x*$y)."&emsp;"."</td>";
        }
        echo "</tr>";
    }
echo "</table>";
?> 
</body>
</html>
