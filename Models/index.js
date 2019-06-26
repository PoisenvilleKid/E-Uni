import express from 'express';
import mongoose from 'mongoose';
import User from './User.model';
import Event from './Event.model';
import { Server } from 'https';

/* TODO: Set Up Tables from a local MongoDB base and pass
   the string as a parameter inside the return method
   const connectDb = () => {
    return mongoose.connect(Connection String Goes Here);
  };
*/

  /* Set up array of all of our models so we can export 
     them in one call in Server.js
  */   
  const models = {User, Event};

  /* Export the Connection to the DB in one call in Server.js
     export{connectDB};
  */

  // Export our models so the program can use universally
  export default models;
