<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page Not Found</title>

    <style media="screen">
        body { background: #fcb58a; color: rgba(0,0,0,0.87); font-family: "Montserrat", sans-serif; margin: 0; padding: 0; }
        #message { background: white; max-width: 360px; margin: 100px auto 16px; padding: 32px 24px 16px; border-radius: 3px; }
        #message p { line-height: 140%; margin: 16px 0 24px; font-size: 14px; text-align: center; text-transform: uppercase;}
        #message { box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24); }
        #load { color: rgba(0,0,0,0.4); text-align: center; font-size: 13px; }
        @media (max-width: 600px) {
            body, #message { margin-top: 0; background: white; box-shadow: none; }
            body { border-top: 16px solid #ffa100; }
        }
    </style>
</head>
<body>
@include('components.navbar')
<div id="message">
    <img src="{{asset('images/404.png')}}" style="height: 400px; width: 400px; position: center;">
    <p>The specified file was not found on this website. Please check the URL for mistakes and try again.</p>
</div>
</body>
</html>
