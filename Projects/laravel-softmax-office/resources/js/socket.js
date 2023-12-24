
import io from 'socket.io-client';

const socket = io('http://localhost:8000'); 

socket.on('connect', () => {
    console.log('Connected to server');
});

socket.on('chat', (data) => {
    console.log('New message:', data.message);
});
