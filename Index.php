<?php
require __DIR__ . "/vendor/twilio/sdk/Services/Twilio.php";
$phone = $_POST["phone"];
$birthday = $_POST["birthday"];
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
 
try {
	$message = $client->account->messages->create(array(
		"From" => "15005550006",
		"To" => $phone,
		"Body" => "Happy birthday!",
	));
	// Display a confirmation message on the screen
	echo "error: Sent message {$message->sid}<br>";
 } catch (Exception $e) {
 	echo $e->getMessage();
 }

?>