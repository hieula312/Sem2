<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <title>Email</title>
</head>
<body>
    <div class="container">
        <h2>REQUEST EMAIL FROM ARTS STATION STORE</h2>
        <p>
            <span>Wish you have a nice day! Thank you for shopping with us!</span>
            <br>
            <span>Here is your order information! Don't forget to remind it to check your order:</span>
            <br>
            <b>Your bill ID:</b><span>{{$bill->id}}</span>
            <br>
            <b>Your OTP:</b><span>{{$bill->otp}}</span>
        </p>
    </div>
</body>
</html>