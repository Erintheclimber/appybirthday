<?php
require __DIR__ . "/vendor/twilio/sdk/Services/Twilio.php";
echo "hello ";

$x = 1;

if ( $x == 0 ) {
	echo "darren";
} else {
	echo "erin";
}
 
// set your AccountSid and AuthToken from www.twilio.com/user/account
$AccountSid = "AC974663c5155b55248dbef845b173296d";
$AuthToken = "9cab697236f95c29833a1309349fafc1";
 
$client = new Services_Twilio($AccountSid, $AuthToken);
 
$message = $client->account->messages->create(array(
    "From" => "510-847-3180",
    "To" => "510-847-3180",
    "Body" => "Coding is fun!",
));
 
// Display a confirmation message on the screen
echo "Sent message {$message->sid}";

?>