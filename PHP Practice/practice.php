<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php
//put your code here
$a=array(80,69,90,50,70);
foreach($a as $key1 =>$value1)
	echo"Grade of student",($key1+1)."is".$value1."<br>";
$b=array("Jan"=>"yiyue","Feb"=>"eryue","Mar"=>"sanyue");
foreach($b as $key2=>$value2)
echo $key2."個月是".$value2."<br>";

?>
	
	
</body>
</html>