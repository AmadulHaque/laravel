// const express = require('express');
// const mysql = require('mysql');
// const app = new express();
// const http = require('http').Server(app);
// const cors  =require('cors');

// const io = require('socket.io')(http, {
//     cors: {
//       origin: 'http://127.0.0.1:8000', // Update with your frontend origin
//       methods: ['GET', 'POST'], // Add other methods if needed
//       credentials: true, // Allow sending cookies
//     }
// });
  

// app.use(cors()); 


// const moment = require('moment');

// const sockets = {};
// // MySQL connection setup
// const con = mysql.createConnection({
//   host: 'localhost',
//   user: 'root',
//   password: '',
//   database: 'laravel',
// });

// con.connect((err) => {
//   if (err) {
//     console.error('Error connecting to database:', err);
//     return;
//   }
//   console.log('Connected to MySQL database');
// });

// io.on('connection', function (socket) {
//   if (!sockets[socket.handshake.query.user_id]) {
//     sockets[socket.handshake.query.user_id] = []; // Initialize as an array if not exists
//   }
//   sockets[socket.handshake.query.user_id].push(socket);

//   socket.broadcast.emit('user_connected', socket.handshake.query.user_id);

//   con.query('UPDATE users SET is_online = 1 WHERE id = ?', [socket.handshake.query.user_id], function (err, res) {
//     if (err) {
//       console.log("Error updating user online status:", err);
//     }else{
//         console.log("User Connected", socket.handshake.query.user_id);  
//     }
//   });

//   socket.on('disconnect', function () {
//     if (sockets[socket.handshake.query.user_id]) {
//       socket.broadcast.emit('user_disconnected', socket.handshake.query.user_id);
//       const index = sockets[socket.handshake.query.user_id].indexOf(socket);
//       if (index !== -1) {
//         sockets[socket.handshake.query.user_id].splice(index, 1);
//       }
//       con.query('UPDATE users SET is_online = 0 WHERE id = ?', [socket.handshake.query.user_id], function (err, res) {
//         if (err) {
//           console.log("Error updating user offline status:", err);
//         }else{
//             console.log("User Disconnected", socket.handshake.query.user_id);  
//         }
//       });
//     }
//   });
// });

// http.listen(3000, () => {
//   console.log(`Server is running on port 3000`);
// });


// let socket = io('http://127.0.0.1:3000', {
//     query: { user_id: user },
//     transports: ['websocket'],
// });
// socket.on("user_connected",(data)=>{
//   $('#status'+data).removeClass('is_online_0');
//   $('#status'+data).addClass('is_online_1');
// })

// socket.on("user_disconnected",(data)=>{
//   $('#status'+data).removeClass('is_online_1');
//   $('#status'+data).addClass('is_online_0');
// })
