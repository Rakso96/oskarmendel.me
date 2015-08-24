var express = require('express');
var router = express.Router();
var blogEngine = require('../lib/blogengine/blogengine');

//get the whole list of blog entries.
exports.list = function (req, res){
	res.render('blog', {title: 'Hey', message: 'Hello there!', entries:blogEngine.getBlogEntries()});
};

//get single entry.
exports.single = function(req, res){
	var entry = blogEngine.getBlogEntry(req.params.id); //get the specific entry fron blogEngine
    res.render('article',{title:entry.title, body:entry.body}); //Render the article and spit in the title and body content
}
