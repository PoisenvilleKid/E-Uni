import express from 'express';
import mongoose from 'express';

let schema = new mongoose.schema;

/* Define The Schema we will use for an Event As the 
   Program Scales We take different types into ConsiderationS*/
let eventSchema = new schema({
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
    }
})

// Give our Schema a Variable to call CRUD operations on
let Event = mongoose.model('User', eventSchema);

// Make an Event object available to the Program
export default Event;