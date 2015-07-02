var app = angular.module("nctApp", []);

app.controller("dataCtrl", function ($scope, $http) {
    name = "datacontroller";
    ver = "1.0";
    $http.get("js/package.json")
        .success(function (response) {
            $scope.names = response.data;

        });
});


app.controller("frmCtrl", function ($scope, $http){

    $scope.value = "";
    name = "fromController";
    $http.get("../php/unitCtrl.php")
        .success(function (response) {

            $scope.datasUnit = response;


        });
    $http.get("../php/cmCtrl.php")
        .success(function (response) {

            $scope.datasCm = response;

        });
    $http.get("../php/keCtrl.php")
        .success(function (response) {
            $scope.i=0;
            $scope.datasKe = response;
            console.log($scope.datasKe);
        });
    $scope.submitMyForm=function(fields){

        this.field = fields;/* while compiling form , angular created this object*/
        fields.rdate = $("#rdate").val();
        fields.rtime = $("#rtime").val();
        fields.sdate = $("#sdate").val();
        fields.stime = $("#stime").val();

        var data =  fields;


       /* post to server*/
        console.log(data);




    }

});


