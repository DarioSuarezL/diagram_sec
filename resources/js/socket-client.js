import { io } from 'socket.io-client';
// import go from 'gojs';

const socket = io('http://localhost:3000', {
    transports: ['websocket'],
});

