mainApp.controller("dossierController", ['$scope','$routeParams', 'dossierService', '$rootScope', '$location',
    function ($scope, $routeParams, dossierService, $rootScope, $location) {
        console.log('----------------------------Dossier CONTROLLER CALLING-------------------------------------- ');
        $scope.dossiers = [];
        $scope.currentDossier = null;
        $scope.all = function(){
            dossierService.all().then(
                function (data) {
                    // console.log(" Data : ",data);
                    $scope.dossiers = JSON.parse(data);
                }
                , function (error) {
                    console.log('erreur dossierService.all() : '+error);
                });
        };
        $scope.new = function(){
            dossierService.new().then(
                function (data) {
                    var htmlObject = document.createElement('div');
                    htmlObject.innerHTML = data;
                    var form = htmlObject.getElementsByTagName("form")[0];
                    var htmlObject2 = document.createElement('div').appendChild(form);
                    document.getElementById("new").innerHTML ="";
                    document.getElementById("new").appendChild(form);
                     console.log(" Data new form : ",document.getElementById("new"));
                }
                , function (error) {
                    console.log('erreur dossierService.new() : '+error);
                });
        };
        $scope.all();
        //Show dossier
        $scope.show = function(id){
            $scope.currentDossier = dossierService.getDossierById($scope.dossiers,id);
            console.log("Dossier to show ",dossierService.getDossierById($scope.dossiers,id));
        };
        //Edit dossier
        $scope.edit = function(id){
            console.log("Dossier to Edit ",dossierService.getDossierById($scope.dossiers,id));
        };
    }]);