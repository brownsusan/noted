<?php

$to = 'sbrwn.sb@gmail.com';
$subject = 'Mail Log File';

$headers = 'From:brownsusan@fullsail.edu'."\r\n".
			"MIME-Version: 1.0" . "\r\n".
			"Content-Type: multipart/mixed; boundary=\"1a2a3a\"".
			'Reply-To:brownsusan@fullsail.edu'."\r\n".
			'X-Mailer:PHP/'.phpversion().'\n';
			
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\n";


$message = 'This is my assignment submission for lab 8. \r\nSusan Brown';

$message .= "Content-Type: text/html; charset=\"iso-8859-1\"\r\n".
  "Content-Transfer-Encoding: 7bit\r\n\r\n".
  "This is my assignment submission for lab 8. \r\nSusan Brown.".
  "--1a2a3a\r\n";
 
$file = file_get_contents("IMGCOPY2.jpg");
 
$message .= "Content-Type: image/jpg; name=\"IMGCOPY2.jpg\"\r\n"
  ."Content-Transfer-Encoding: base64\r\n"
  ."Content-disposition: attachment; file=\"IMGCOPY2.jpg\"\r\n"
  ."\r\n"
  .chunk_split(base64_encode($file))
  ."--1a2a3a--";
			
			
if(mail($to,$subject,$message,$headers)){
	echo("Mail sent successfully");
}else{
	echo("Mail not sent");
}