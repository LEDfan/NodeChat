var io = require('socket.io').listen(8080);
console.log('Server started');

io.sockets.on('connection', function (socket) {
	io.sockets.emit('this', { will: 'be received by everyone'});
	console.log('connected');
	socket.on('chatMsg', function (data) {
		console.log('Server received a message by ' + data.user.displayname +' saying ' + data.msg);
	});

	socket.on('disconnect', function () {
		console.log('disconnected');
	});
});