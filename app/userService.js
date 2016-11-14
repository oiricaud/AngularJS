
var app = angular.module("UserApp", []);

app.service("userService", function ($http, $q)
{
    var deferred = $q.defer();
    $http.get('/AngularDataVisualization/app/userscenario.json').then(function (data)
    {
        deferred.resolve(data);
    });
    this.getPlayers = function()
    {
        return deferred.promise;
    }
})
    .controller("userCtrl", function($scope, userService)
    {
        var promise = userService.getPlayers();
        promise.then(function (data)
        {
            $scope.team = data;
            console.log($scope.team)
        });
    });