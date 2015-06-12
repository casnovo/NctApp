var app = angular.module("nctApp", []);
app.controller("dataCtrl", function ($scope, $http) {
    $scope.name = "datacontroller";
    $scope.ver = "1.0";
    $http.get("js/package.json")
        .success(function (response) {
            $scope.names = response.data;

        });
app.controller("keCtrl", function ($scope, $http){
    $scope.name = "datacontroller";
    $scope.ver = "1.0";
});


});