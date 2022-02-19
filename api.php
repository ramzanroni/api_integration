<?php

// post method

$post = array(  //data array from user side

	"key"=>"value",
	"key"=>"value",
	"key"=>"value",
	"key"=>"value",
	"key"=>"value",
	"key"=>"value",
	"key"=>"value",
	
);
$data = json_encode($post); // json encoded

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"Set URL");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array( //header will be here
	'Content-Type: application/json',
	'Authorization: 123456789',
)
);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec($ch); //output will be here

curl_close ($ch);
print_r($server_output);




// get method api
	
$sendernumber="";  //

    $url = ; //url will be here
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);

    ?>
