<?php
return [
    'TEMPLATE_TYPES' => [
        'ms-excel' => 'Micrsoft Excel',
        'ms-word' =>  'Microsoft Word',
        'html' =>  'HTML FILE',
        'pdf' => 'PDF FILE'
    ],
    'EMAIL_BODY' => '            
    <div class="container" style="max-width: 100%; margin: 0 auto; padding: 20px;">
        <div class="header" style="background-color: #007BFF; color: #fff; text-align: center; padding: 20px 0;">
            <h1 style="margin: 0;">[purpose]</h1>
        </div>
        <div class="message" style="background-color: #fff; padding: 20px;">
            <p>Dear [Recipient Name],</p>
            <p>We hope this message finds you well. We wanted to inform you of an exciting opportunity that coming up!<br></p>
            <p>We look forward to your participation in this event. To reserve your spot, click on the link below:</p>
            <p>Thank you for being a valued member of our community. We hope to see you at the webinar!</p>
            <p style="text-align: left !important;">Best regards,</p>
            <p style="text-align: left !important;">[Your Name]</p>
            <p style="text-align: left !important;">[Your Title]</p>
        </div>
        <div class="footer" style="background-color: #007BFF; color: #fff; text-align: center; padding: 10px 0;">
            Date: ' . date("d m, Y") . ' [companyName]
        </div>
    </div>'

];
