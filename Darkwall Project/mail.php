<?php
	
	//make post variables
	$email = $_POST['email'];
	$name = $_POST['name'];
	$content = $_POST['enquiry'];
	
	//send email to admin
	mail("theyoungermorey@gmail.com","[CONTACT FORM] New Enquiry!",$content . '<br /><b>From: ' . $name . '</b>');
	
	//send confirmation to user
	mail($email,"[AUTO REPLY]","Your enquire has been sent. Expect a response within 24 hours! <br /> <b>Content:</b> <br />" . $content, "From: no-reply@example.com" . "\r\n");
	echo $name . $email . $content;
	echo '<html><body><p>Success!</p><a href="index.html">Go Back</a></body></html>';
