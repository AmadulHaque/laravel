import express from 'express';
import http from 'http';
import { Server } from 'socket.io';
import Redis from 'ioredis';

const app = express();
const server = http.createServer(app);
const io = new Server(server);
const redis = new Redis();

// redis.subscribe('chat-channel', (err, count) => {
//   // Listen for new messages from Redis
//   redis.on('message', (channel, message) => {
//     message = JSON.parse(message);
//     io.emit(channel + ':' + message.event, message.data);
//   });
// });

// io.on('connection', (socket) => {
//   console.log('Client connected');

//   socket.on('disconnect', () => {
//     console.log('Client disconnected');
//   });
// });

server.listen(3000, () => {
  console.log('Socket.io server running on port 3000');
});
