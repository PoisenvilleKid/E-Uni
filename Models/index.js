import express from 'express';
import mongoose from 'mongoose';
import User from './User.model';
import Event from './Event.model';
import { Server } from 'https';



// Set up the connection to our DB if there is an error
// Let the user know wether or not our connection is valid or not
mongoose.connect('mongodb://localhost:27017/E-Uni',{ useNewUrlParser: true })
   .then(() => console.log("MongoDB Connected..."))
   .catch(err => console.log(err))
  

  /* Set up array of all of our models so we can export 
     them in one call in Server.js
  */   
  const models = {User, Event};

  /* Export the Connection to the DB in one call in Server.js
     export{connectDB};
  */

  // Export our models so the program can use universally
  export default models;
