const port = 8082

var express = require('express');
var app = express();

var Chance = require('chance');
var chance = new Chance();

// root 
app.get('/', function(req, res){
  res.send(generateAnimals());
});

app.get('/name/:name', function(req, res){
  var name = req.params.name;
  res.send('<h1>Hello ' + name + ' !</h1>');
});


app.listen(port, function(){
  console.log(`Example app listening on port : ${port}`);
});


function generateAnimals(){
  var nbAnimals = 8;
  var animals = [];

  for(var i = 0; i < nbAnimals; ++i){
    animals.push({name: chance.animal()});
  }

  return animals;
}