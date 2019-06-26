import express from 'express';
import path from 'path';
import router from './Routes/index.js';
//import {connectDB} from './Models/index.js'
import models from '.Models/index.js'; 

let app = express();

// Set up Pathway for static files -- HTML/CSS/JS
app.use(express.static(path.join(__dirname,'Public')));

// Set up a pathway for all of our routes in our route folder
app.use(router);

/* Set Port Number and run server with yarn run start nodemon will

*/
let port = 3000;
app.listen(port, function () {
 console.log('Server is up and running on port ' + port);
});