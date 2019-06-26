import express from 'express';
import path from 'path';


let app = express();

app.get('/', function (req, res) {
 res.sendFile(path.join(__dirname, 'index.html'));
});

let port = 3000;
app.listen(port, function () {
 console.log('Server is up and running on port ' + port);
});