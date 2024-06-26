import express from 'express';
import { Server } from 'socket.io';
import http from 'http';


const app = express();

const server = http.createServer(app);
const io = new Server(server);

const usuariosConectados = {};
const names = [];

io.on('connection', (socket) => {
    console.log('a user connected');
    socket.on('disconnect', () => {
        socket.broadcast.emit('userOutServer', usuariosConectados[socket.id]);
        // console.log('user disconnected');
    });

    socket.on('diagramToServer', (msg) => {
        socket.broadcast.emit('diagramFromServer', msg);
    });

    socket.on('userArriveServer', (msg) => {
        usuariosConectados[socket.id] = msg;
        io.to(socket.id).emit('userUpdate', names);
        names.push(msg.name);
        socket.broadcast.emit('userInServer', msg);
    });

    socket.on('userLeaveServer', (msg) => {
        socket.broadcast.emit('userOutServer', msg);
    });
});


server.listen(3000, () => {
    console.log('listening on *:3000');
});

