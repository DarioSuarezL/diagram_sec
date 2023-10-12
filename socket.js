import express from 'express';
import { Server } from 'socket.io';
import http from 'http';


const app = express();

const server = http.createServer(app);
const io = new Server(server);

io.on('connection', (socket) => {
    console.log('a user connected, id:' + socket.id);
    socket.on('disconnect', () => {
        console.log('a user disconnected, id:' + socket.id);
    });

    socket.on('diagrama', (msg) => {
        // console.log('diagrama: ' + msg);
        socket.broadcast.emit('diagrama', msg);
    });
});


server.listen(3000, () => {
    console.log('listening on *:3000');
});

