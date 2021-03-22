<?php
   	
	   $formdata = array(
	      'id'=> $_POST["id"],
	      'name'=> $_POST["name"],
	      'email'=>$_POST["email"],
	      'address'=> $_POST["address"]
		  'birthday'=> $_POST["birthday"]
		  'state'=> $_POST["state"]
		  'country'=> $_POST["country"]
	   );
       $existingdata = file_get_contents('data.json');
       $tempJSONdata = json_decode($existingdata);
       $tempJSONdata[] =$formdata;
       
	   $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
	   
	   
	   if(file_put_contents("data.json", $jsondata)) {
	        echo "Data successfully saved <br>";
	    }
	   else 
	        echo "no data saved";

     $data = file_get_contents("data.json");
	 $mydata = json_decode($data);

    
	 echo "my value: ".$mydata[1]->id;
 foreach($mydata as $myobject)
	 {
	 foreach($myobject as $key=>$value)
	{
		echo "your ".$key." is ".$value."<br>";
	} 
	}

?>