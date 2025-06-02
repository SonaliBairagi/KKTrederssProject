<!DOCTYPE html>
<html>

<head>
    <title>New Order</title>
    <style>
        body {
            background-color: #f4f4f4;
            font-family: 'Arial', sans-serif;
            color: #333;
            padding: 40px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-left: 6px solid #0f3a3a;
            padding: 30px;
        }

        h1 {
            color: #0f3a3a;
            font-size: 22px;
            margin-bottom: 20px;
        }

        p {
            font-size: 16px;
            margin: 8px 0;
        }

        strong {
            color: #0f3a3a;
        }

        .footer {
            margin-top: 30px;
            font-size: 13px;
            color: #999;
            border-top: 1px solid #ddd;
            padding-top: 15px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>New Order from :{{ $data['name'] }} </h1>
        <p><strong>Name:</strong> {{ $data['name'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
        <p><strong>Country:</strong> {{ $data['country'] }}</p>
        <p><strong>Message:</strong></p>
        <p>{{ $data['message'] }}</p>

        <div class="footer">
            This message was sent from your website
            <a href="https://kktraderss.com/" target="_blank">KKTrederss</a>
            contact form.
        </div>
    </div>
</body>

</html>