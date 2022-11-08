//Inserta el modulo mysql en este archivo
const mysql = require('mysql'); 

//Conecta base de datos 
var conexion = mysql.createConnection({
    //Configuracion de la base de datos
    host : 'localhost', 
    database: '', //Nombre de la base de datos 
    user : 'root',
    password: ''
}); 

//Verificacion de conexion con la base de datos
connection.connect(function(error){
    if(error){
        throw error;
    }else{
        console.log('Conexion asegurada con la base de datos'); 
    }
});

module.exports = conexion;