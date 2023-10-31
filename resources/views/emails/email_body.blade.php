<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email </title>
    <style>
        /* Inline CSS for email compatibility */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            background-color: #007BFF;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        .header h1 {
            margin: 0;
        }

        .message {
            background-color: #fff;
            padding: 20px;
        }

        .cta {
            text-align: center;
            padding: 20px 0;
        }

        .footer {
            background-color: #007BFF;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>

<body>
    {!! $email_body !!}
</body>

</html>