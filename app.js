var express = require('express'); //Getting the framework express

var path = require('path'); //Helps us with putting together paths
var hbs = require('hbs');
var blogEngine = require('./lib/blogengine/blogengine');

/*
  ROUTES
*/
var routes = require('./routes/index');
var blogRoute = require('./routes/blog'); //Alla routes som har med blog funktionen att göra.

var app = express();

app.use(express.static('public')); //setting the public directory as standard for views to look for img etc etc

//View engine setup
app.set('views', path.join(__dirname, 'views')); // Set the view directory to /views
app.set('view engine', 'html'); //Use jade as templating engine
app.engine('html', hbs.__express);

app.use('/', routes); //use the routes var if weget a request on the '/' (the root directory of the site)
app.use('/blog', blogRoute.list);
app.use('/article/:id', blogRoute.single);

//app.use('/blog', blog);

/*app.get('/article/:id', function(req, res){
	var entry = blogEngine.getBlogEntry(req.params.id);
	res.render('article', {title: entry.title, blog:entry});
});*/

/*app.get('/', function (req, res) { //Setting a route for the root directory on the site
  res.send('Hello World!'); //res = respond, how the server should respond to your request.
});*/

var server = app.listen(3000, function () {
  var host = server.address().address;
  var port = server.address().port;

  console.log('Example app listening at http://%s:%s', host, port);
});
