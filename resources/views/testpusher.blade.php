<!DOCTYPE html>
<head>
    <title>Pusher Test</title>
    <script src="https://js.pusher.com/5.0/pusher.min.js"></script>
</head>
<body>
<h1>Pusher Test</h1>
<p>
    Chat test
</p>
<ul id="chatContainer">
</ul>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('167dbf995abf10d6ce5e', {
            cluster: 'ap1',
            forceTLS: true
        });

        var channel = pusher.subscribe('KateTran');
        channel.bind('my-event', function(data) {
            var liTag = $("<li class='list-group-item'></li>");
            liTag.html(data.message);
            $('#chatContainer').append(liTag);
        });
</script>