<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>This Title</title>
</head>
<body>
    <h1>Complex Email Example H1</h1>
    
    <p>Hello {{ $details['recipient_name'] }},</p>
    
    <p>This is an example of a complex email sent using Laravel.</p>
    
    <p>Here are some details:</p>
    
    <ul>
        <li>Email: {{ $details['recipient_email'] }}</li>
        <li>Message: {{ $details['message_content'] }}</li>
    </ul>
    
    <p>Thank you for using our service!</p>


    <!-- Example image -->
    <img src="{{ $message->embed(public_path('images/logo.png')) }}" alt="Logo1">
<!-- <img src="cid:logo" alt="Logo2">
<img src="{{ public_path('images/logo.png') }}" alt="Logo3"> -->

</body>
</html>
