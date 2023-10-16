import express from 'express';
import { Server } from 'socket.io';
import http from 'http';


const app = express();

const server = http.createServer(app);
const io = new Server(server);

const usuariosConectados = {};

io.on('connection', (socket) => {
    // console.log('a user connected');
    socket.on('disconnect', () => {
        socket.broadcast.emit('userOutServer', usuariosConectados[socket.id]);
        // console.log('user disconnected');
    });

    socket.on('diagramToServer', (msg) => {
        socket.broadcast.emit('diagramFromServer', msg);
    });

    socket.on('userArriveServer', (msg) => {
        usuariosConectados[socket.id] = msg;
        console.log(usuariosConectados);
        socket.broadcast.emit('userInServer', msg);
    });

    socket.on('userLeaveServer', (msg) => {
        socket.broadcast.emit('userOutServer', msg);
    });
});


server.listen(3000, () => {
    console.log('listening on *:3000');
});

