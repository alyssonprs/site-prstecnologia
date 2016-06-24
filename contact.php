<?php

if(isset($_POST['email'])) {

    $email_to = "kaiqueleaodeveloper@gmail.com";
 
    $email_subject = "Website Contact";

 
    function died($error) {
 
        // your error code can go here
 
        echo $error;
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['message'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
    $name = $_POST['InputName'];
    $email = $_POST['InputEmail'];
    $message = $_POST['InputMessage'];

 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";
 
    $email_message .= "Email: ".clean_string($email)."\n";
 
    $email_message .= "Message: ".clean_string($message)."\n";

 
	// create email headers
	 
	$headers = 'From: '.$email."\r\n".
	 
	'Reply-To: '.$email."\r\n" .
	 
	'X-Mailer: PHP/' . phpversion();
	 
	@mail($email_to, $email_subject, $email_message, $headers);  


?>
 
 
 
<!-- include your own success html here -->
 
 
 
Thank you for contacting me. Will be in touch with you very soon.
 
 
 
<?php
 
}
 
?>