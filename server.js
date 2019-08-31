var app = require('http').createServer(handler)
var io = require('socket.io')(app);
var fs = require('fs');

app.listen(3000, () => {
    console.log('Connecting');
});

function handler (req, res) {
    fs.readFile(__dirname + '/index.html',
        function (err, data) {
            if (err) {
                res.writeHead(500);
                return res.end('Error loading index.html');
            }
            res.writeHead(200);
            res.end(data);
        });
}

io.on('connection', function (socket) {
    console.log("User connected");
    socket.on('disconnect', function(){
        console.log('User disconnected');
    });

    socket.on('event', function(msg){
        console.log('message: ' + msg);
        io.emit('event', msg);
    });
});