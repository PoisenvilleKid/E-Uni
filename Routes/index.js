import express from 'express';
import path from 'path';
const router = express.Router();

// Direct User to when they first go to the localhost.. direct them to the login page to login or register
router.get('/', function(req,res){
    res.sendFile(path.join((path.dirname(require.main.filename)),'User/Login.html'));
});

//On click take user to registration page
router.get('/Register.html', function(req,res){
    res.sendFile(path.join((path.dirname(require.main.filename)),'User/Register.html'));
});

// On click take user to login page
router.get('/Login.html', function(req,res){
    res.sendFile(path.join((path.dirname(require.main.filename)),'User/Login.html'));
});

// Export the pathway requested from user
export default router;