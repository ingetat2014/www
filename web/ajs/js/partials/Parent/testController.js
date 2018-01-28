mainApp.controller("TestController", ['$scope', '$routeParams', 'ServiceFromFactory', '$rootScope', '$location',
    function ($scope, $routeParams, ServiceFromFactory, $rootScope, $location) {
        console.log('----------------------------CONTROLLER CALLING-------------------------------------- ');
        $scope.var1="test";
        console.log($scope.var1);
        $scope.dossiers = [];
        $scope.editDossier = function (id){
            console.log("editDossier id = "+id);
        }
        $scope.showDossier = function (id){
            console.log("showDossier id = "+id);
        }
        //Fct qui qui sera appelée à chq url changed
        $rootScope.$watch(function (newVal,oldVal) {
            //l'objet retourné sera la base d'appel du deuxieme fct dans le cas où il subit à un
            return $location.path();
        },
                function (newObjValueReturnedOfWatch,oldObjValueReturnedOfWatch) {
                    /*if (typeof $routeParams.id !== 'undefined' && newObjValueReturnedOfWatch!=='/listUsers') {
                        $scope.fct_utile($routeParams.id);
                    }*/
                });
        //Promise users
        ServiceFromFactory.loadUsersFromAjax().then(
                function (data) {
                    ServiceFromFactory.setUtilisateurs(data);
                    $scope.utilisateurs = ServiceFromFactory.getUtilisateurs();
                    if (typeof $routeParams.id !== 'undefined') {
                    }
                }
        , function (error) {
            //console.log('erreur loadUsersFromAjax');
        });
        //Promise nomPrenomAge
        ServiceFromFactory.ajaxResponse().then(
                function (data) {
                }
        , function (error) {
            //console.log('erreur nomPrenomAge');
        });


    }]);
