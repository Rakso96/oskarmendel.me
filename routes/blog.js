var express = require('express');
var router = express.Router();
var blogEngine = require('../lib/blogengine/blogengine.js');

router.get('/blog', function(req, res){
	
});

/*router.get('/article/:id', function(req, res){
	var entry = blogEngine.getBlogEntry(req.params.id);
	res.render('article', {title:entry.title, blog:entry});
});*/

module.exports = router;