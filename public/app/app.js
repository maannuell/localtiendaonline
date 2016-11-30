var app = angular.module('productosmodulo', [], function($interpolateProvider){
     $interpolateProvider.startSymbol('<%');
     $interpolateProvider.endSymbol('%>');
});//Modulo


 
app.constant('API_URL', 'http://localhost/proyectoTienda5/public/api/v1/');



