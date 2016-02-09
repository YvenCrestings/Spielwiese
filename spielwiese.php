<?php
header('Content-Type: text/plain');
$theArray = [];
$directory = "../images/";
	
if (is_dir($directory)) {
	if ($handle = opendir($directory)) {
		while (($file = readdir($handle)) !== false) {        		
			if ($file != "." && $file != "..") {
				$theArray[] = $file;
			}        		
      	}
        closedir($handle);
    }
}

foreach ($theArray as $key => $value) {
	echo $key.' - '.$value.PHP_EOL;
}

/*
for ($i=0; $i<count($theArray); $i++) {
	echo $theArray[$i] . "<br>";
}
*/

echo PHP_EOL;

var_dump($theArray);
