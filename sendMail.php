<!DOCTYPE html PUBLIC"-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>insert page</title></head>
<body>
<?php
 
if ( isset( $_REQUEST ) && !empty( $_REQUEST ) ) {
 if (
 isset( $_REQUEST['number'], $_REQUEST['name'], $_REQUEST['email'], $_REQUEST['message'] ) &&
  !empty( $_REQUEST['phoneNumber'] ) &&
  !empty( $_REQUEST['email'] )
 ) {
  $message = wordwrap( $_REQUEST['message'], 70 );  
  $to = 'web.angel1993@gmail.com';			
  $subject = 'Website Change Reqest';  
  $cleanedFrom = trim(strip_tags($_REQUEST['email']));
  $headers = "From: " . $cleanedFrom . "\r\n";
  $headers .= "Reply-To: ". strip_tags($_REQUEST['req-email']) . "\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
  
        if (mail($to, $subject, $message, $headers)) {
          echo 'Your message has been sent.';
        } else {
          echo 'There was a problem sending the email.';
        }
        // DON'T BOTHER CONTINUING TO THE HTML...
        echo "location.href = 'index.html'";
    
 } else {
  print 'Not all information was submitted.';
 }
}
 
?>
</body>
</html>
