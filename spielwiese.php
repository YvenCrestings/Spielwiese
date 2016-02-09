<?php
	$theArray = array();
	$directory = "../images/";
	
	if (is_dir($directory))
	{
		if ($handle = opendir($directory))
		{
			while (($file = readdir($handle)) !== false)
        	{        		
        		if ($file != "." && $file != "..")
        		{
					$theArray[] = $file;
				}        		
         	}        	
        	closedir($handle);
    	}
	}
	
	for ($i=0; $i<count($theArray); $i++)
	{
		echo "" . $theArray[$i] . "<br>";
	}
	
	echo "<br>";
	
	var_dump($theArray);
?>