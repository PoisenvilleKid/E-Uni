import User from './User.model';
import Event from './Event.model';

  /* Set up array of all of our models so we can export 
     them in one call in Server.js
  */   
  const models = {User, Event};

  // Export our models so the program can use universally
  export default models;
