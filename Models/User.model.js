import express from 'express';
import mongoose from 'mongoose';
import Event from './User.model';

let Schema = mongoose.Schema;

/* Define The Schema for a User in E-Uni that will have the following fields.
   Username, Phone Number, Email, and Events array will be unique to each user
   We will specify whether or not they are an admin or not */
let userSchema = new Schema({
    username: {
        type:String,
        required: true,
        index: {unique: true}
    },
    password: {
        type:String,
        required: true
    },
    admin: {
        type:Boolean
    },
    firstName: {
        type:String,
        required: true
    },
    lastName: {
        type:String,
        required: true
    },
    major: {
        type:String,
        required: true
    },
    classification: {
        type:String,
        required: true
    },
    phoneNumber: {
        type:String,
        required:true,
        index:{unique: true}
    },
    gender: {
        type:String,
        required:true
    },
    Events: {
        type: [Event],
        required:true
    }
});

// Give our Schema a Variable to call CRUD operations on
let User = mongoose.model('User', userSchema);

// Make a User object available to the Program
export default User;