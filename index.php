<?php

$to = 'vadimpronkin19@gmail.com';

$subject = 'Test email';

$message = '<h1>hi</h1>';

$headers = 'From: The Sender Name <vadimpronkin19@gmail.com>';
$headers .= 'Reply-To: vadimpronkin19@gmail.com\r\n';
$headers .= 'Content-type: text/html\r\n';

mail($to, $subject, $message, $headers);