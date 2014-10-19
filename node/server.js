var io = require('socket.io').listen(8080);
console.log('Server started');

io.sockets.on('connection', function (socket) {
	io.sockets.emit('this', { will: 'be received by everyone'});
	console.log('connected');
	socket.on('clientMSG', function (from, msg) {
		console.log('I received a private message by ', from, ' saying ', msg);
	});

	socket.on('disconnect', function () {
		console.log('disconnected');
	});
});