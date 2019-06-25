import express from 'express';

const app = express();

app.get('/', function (req, res) {
 res.send('Hello World!')
});

let port = 3000;
app.listen(port, function () {
 console.log('Server is up and running on port ' + port);
});