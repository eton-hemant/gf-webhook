<?php

require_once('app/init.php');

$_____data = $_POST;

$emailData = array(
    'fromEmail'=> 'no-reply@etoninstitute.com',
    'fromName'=> 'Eton Institute - Instructor Portal', 
    'toEmail'=> 'it@etoninstitute.com', 
    'toName'=> 'IT', 
    'subject'=> 'Test Web Hook - Response', 
    'message'=> 'Response!'.print_r($_____data. true).'<--'
);

sendEmail($emailData);
