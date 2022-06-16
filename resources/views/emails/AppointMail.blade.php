<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Appointment Form</title>
</head>
<body>
    <h1>
        Appointment Message
    </h1>
    <p>Email: {{$details['email']}}</p>
    <p>Date: {{$details['date']}}</p>
    <p>Time: {{$details['time']}}</p>
    <p>Description: {{$details['description']}}</p>
</body>
</html>

