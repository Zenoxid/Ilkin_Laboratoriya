<!DOCTYPE html>
<html>
<body>
<?php
echo "Vurma cedveli: <br>";
	for($x=1; $x<=9; $x++)
    {
    	for($y=1; $y<=9; $y++)
        {
        	echo $y."*".$x."=".($x*$y)."&emsp;";
        }
        echo "<br>";
    }
?> 
</body>
</html>
