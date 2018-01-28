mainApp.controller("dossierController", ['$scope','$routeParams', 'dossierService', '$rootScope', '$location',
    function ($scope, $routeParams, dossierService, $rootScope, $location) {
        console.log('----------------------------Dossier CONTROLLER CALLING-------------------------------------- ');
        $scope.dossiers = []
        dossierService.all().then(
            function (data) {
                console.log(" Data : ",data);
                $scope.dossiers = JSON.parse(data);
               // console.log( JSON.parse(data)[0]);
            }
            , function (error) {
                console.log('erreur dossierService.ajaxResponse() : '+error);
            });
    }]);