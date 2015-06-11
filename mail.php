<?php
$to = "aman.jareck@gmail.com";
$subject = "The mail subject goes here";
$content= "And this is the mail content!";
$headers = "From:Me@Mywebsite.Com\r\n";

if (mail($to,$subject,$content,$headers)) {
	    echo '<p>Your message has been sent!</p>';
	} else {
	    echo '<p>Something went wrong, go back and try again!</p>';
	}
?>
