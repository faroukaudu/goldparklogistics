<?php
//get data from form  
$service = $_POST['inquiry'];
$firstname = $_POST['name'];
$lastname = $_POST['last_name'];
$email= $_POST['email'];
$phone= $_POST['phone_number'];
$message= $_POST['message'];
$to = "fagzy99@gmail.com";
$subject = "Mail from GoldPark Logistics website";
$txt ="Inquiry = ". $service. "\r\n First Name = ". $firstname . "\r\n Last Name = ". $lastname . "\r\n  Email = " . $email .
 "\r\n Phone Number = " . $phone . "\r\n Message =" . $message;
$headers = "From: info@goldparklogistics.com" . "\r\n" .
"CC: info@goldparklogistics.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
    $alert = "alert-success";
 

    
}
//redirect
// header("Location:index.php");

?>

<?php



?>
