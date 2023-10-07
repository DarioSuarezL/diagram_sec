import { io } from 'socket.io-client';
import go from 'gojs';

const socket = io('http://localhost:3000', {
    transports: ['websocket'],
});

// var myDiagram = window.myDiagram;


// myDiagram.addDiagramListener("Modified", e => {
//     // emitir un evento al socket
//     console.log('Diagrama modificado');
// });
