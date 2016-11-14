
var App = angular.module('App', []);

App.controller('TodoCtrl', function($scope, $http) {
    $http.get('<?php echo base_url(JS."graphs/userscenario.json");?>')
        .then(function(res){
            $scope.todos = res.data;
        });
});