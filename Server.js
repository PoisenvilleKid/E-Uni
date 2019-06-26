import express from 'express';
import path from 'path';

let app = express();

// Direct User to when the first go to the localhost.. direct them to the login page to login or register
app.get('/', function(req,res){
    res.sendFile(path.join(__dirname+'/User/index.html'));
});

//Set Port Number and run server with yarn run start
let port = 3000;
app.listen(port, function () {
 console.log('Server is up and running on port ' + port);
});