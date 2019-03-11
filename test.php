<?php

//extract($_POST['body']);
$_____data = $_POST;

require_once('app/init.php');

$emailData = array(
    'fromEmail'=> 'no-reply@etoninstitute.com',
    'fromName'=> 'Eton Institute - Instructor Portal', 
    'toEmail'=> 'hemantkumar.panchal@etoninstitute.com', 
    'toName'=> 'hemantkumar Panchal', 
    'subject'=> 'Test Web Hook - Response', 
    'message'=> 'Hemant!'.print_r($_____data. true).'<--'
);

sendEmail($emailData);