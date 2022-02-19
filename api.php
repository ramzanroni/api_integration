<?php

// post method

$post = array(  //data array from user side
	"id" => 7,
	"user_name" => "user_name",
	"user_pass" => "user_pass",
	"user_email"   => "user_email",
	"user_group_id"   => "user_group_id",
	"previlege"   => 5,
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

    $url = "http://sms.viatech.com.bd/smsapi?api_key=key&type=text&contacts=".$sendernumber."&senderid=".$sender_id."&msg=".$mysms; //this is url
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);

    ?>
