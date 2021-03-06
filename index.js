var express = require('express');
var app = express();

var bodyParser = require('body-parser')
app.use(bodyParser.urlencoded({ extended: false }))
app.use(bodyParser.json())

app.set('view engine', 'ejs');

app.use(express.static(__dirname + '/static'));
app.use(express.static(__dirname + '/public'));

app.get('/', function(req, res){
	res.render('home');
});

app.get('/about', function(req, res){
	res.render('about');
});

app.get('/contact', function(req, res){
	res.render('contact');
});

app.get('/*', function(req, res){
	res.render('error');
});

app.listen(process.env.PORT || 3000, function(){
	console.log('Server is up and running');
});
