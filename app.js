const express = require("express");
const app = express();
// view engine setup
app.set('view engine', 'ejs');
app.use(express.static('publics'))
//Rutas
app.get("/", (req, res) => {
    res.render("index")
})
app.get("/menu", (req, res) => {
    res.render("menu")
})
app.get("/subir", (req, res) => {
    res.render("subir")
})
//Indica la base de datos
var baseDeDatos = require('../database'); 
//Iniciar server
const PORT = 5000 || process.env.PORT;
app.listen(PORT, () => {
    console.log('listening on port ' + PORT);
})

//

router.get('/get_data', function(request, response, next){
    var queryBusqueda = request.query.queryBusqueda; 

    var query = ''; //Aca iria la query de la base de datos en cuestion 
});