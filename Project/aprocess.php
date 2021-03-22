
<?php

		//Get form data
		$formdata = array
		(
			'username'=> $_POST["username"],
			'email'=> $_POST["email"],
			'mobilenumber'=>$_POST["mobilenumber"],
			'otp'=> $_POST["otp"],
			'presentaddress'=> $_POST["presentaddress"],
			'permanentaddress'=>$_POST["permanentaddress"],
			'ssc'=>$_POST["ssc"],
            'hsc'=>$_POST["hsc"]
		);
				
		
		$existingdata = file_get_contents('adata.json');
		$tempJSONdata = json_decode($existingdata);
		$tempJSONdata[] =$formdata;
		
		$jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
		
	   
		if(file_put_contents("adata.json", $jsondata)) {
			 echo "Application done <br>";
		 }
		else 
			 echo "no data saved";
       
				
		$data = file_get_contents("adata.json");
		$mydata = json_decode($data);	
		
?>

