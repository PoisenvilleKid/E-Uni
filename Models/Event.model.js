import express from 'express';
import mongoose from 'mongoose';


/* Define The Schema we will use for an Event As the 
   Program Scales We take different types into ConsiderationS*/
const eventSchema = new mongoose.Schema({
    date: {
        type: Date,
        required: true
    },
    time: {
        type:String,
        required: true
    },
    eventName: {
        type:String,
        required: true
    },
    eventDescription: {
        type:String,
        required: true
    },
    eventHost: {
        type:String,
        required: true
    },
    eventType: {
        type:String,
        required: true
    },
    location: {
        type: String,
        required: true
    },
});

// Give our Schema a Variable to call CRUD operations on
let Event = mongoose.model('Event', eventSchema);

// Make an Event object available to the Program
export default Event;