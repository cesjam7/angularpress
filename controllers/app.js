//para hacer uso de $resource debemos colocarlo al crear el modulo
var app = angular.module("app", ["ngSanitize"]);
 
//con dataResource inyectamos la factoría
app.controller("MyController", function ($scope, $http) {
    //hacemos uso de $http para obtener los datos del json
    $http.get('http://localhost/angularpress/api/get_posts/').success(function (data) {
        //Convert data to array.
        //datos lo tenemos disponible en la vista gracias a $scope
        $scope.datos = data.posts;
        console.log(data);
    });
})