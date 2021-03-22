

<?php

$data = file_get_contents("adata.json");
$mydata = json_decode($data);
 
	 foreach($mydata as $myobject)
	 {
		echo "Student Personal Information:  <br>";
		foreach($myobject as $key=>$value)
		{
			echo "your ".$key." is ".$value."<br>";
		}
		echo "-------------------------------------------<br>";
	 }

?>

