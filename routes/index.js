var express = require('express');
var router = express.Router();

router.get('/', function(req, res){ //Setting a route for the root directory on the site
  res.render('index', {title: 'Hey', message: 'Hello there!'});//res = respond, how the server should respond to your request.
});

module.exports = router; //module exports is what we want to send back to the file who used this file.
