var express = require('express'); //Getting the framework express

var path = require('path'); //Helps us with putting together paths
var blogEngine = require('./lib/blogengine/blogengine.js');

/*
  ROUTES
*/
var routes = require('./routes/index');
var blog = require('./routes/blog');

var app = express();


//View engine setup
app.set('views', path.join(__dirname, 'views')); // Set the view directory to /views
app.set('view engine', 'jade'); //Use jade as templating engine

app.use('/', routes); //use the routes var if weget a request on the '/' (the root directory of the site)
app.use('/blog', blog);

app.get('/article/:id', function(req, res){
	var entry = blogEngine.getBlogEntry(req.params.id);
	res.render('article', {title: entry.title, blog:entry});
});

/*app.get('/', function (req, res) { //Setting a route for the root directory on the site
  res.send('Hello World!'); //res = respond, how the server should respond to your request.
});*/

var server = app.listen(3000, function () {
  var host = server.address().address;
  var port = server.address().port;

  console.log('Example app listening at http://%s:%s', host, port);
});
