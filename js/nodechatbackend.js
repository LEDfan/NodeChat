$(function(){
	if (typeof angular !== 'undefined') {
		angular.module('chat').factory('nodechatbackend', ['activeUser', 'convs', 'contacts', 'sessionId', function (activeUser, convs, contacts, sessionId) {
			return {
				init: function () {
					this.socket = io.connect('33.33.33.1:8080', {port: 8080});
					this.socket.on('connect', function (data) {
						console.log("connected");
					});
				},
				quit: function () {
				},
				sendChatMsg: function (convId, msg) {
					alert('Sending chat message from nodeChatBackend!');
				},
				invite: function (convId, userToInvite, groupConv, callback) {
				},
				newConv: function (userToInvite, success) {
				},
				attachFile: function (convId, paths, user) {
				},
				removeFile: function (convId, path) {
				},
				socket : null,
			};
		}]);
	}
});