
<?php
 for($i=1;$i<=10;$i++)
	{
    	for($j=1;$j<=10;$j++)
    {
        if($j<=$i)
        {
            echo "*";
        }
        else
        {
            echo " ";
        }
    }
    
    for($k=1;$k<=10;$k++)
    {
        if($k>=$i)
        {
            echo "*";
        }
        else
        {
            echo " ";
        }
    }
    echo "<br>";
}

for ($i=1; $i <=20 ; $i++) { 
	for ($j=1; $j <=$i ; $j++) { 
		echo "*";
	}
	echo "<br>";
} 

?>