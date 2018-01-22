mainApp.controller("TestController", ['$scope', '$routeParams', 'ServiceFromFactory', '$rootScope', '$location','diValue',
    function ($scope, $routeParams, ServiceFromFactory, $rootScope, $location,diValue) {
        console.log('----------------------------CONTROLLER CALLING-------------------------------------- ');
        $scope.soumettre="Soumettre";
        $scope.limite = 10;
        $scope.student = {
            firstName: "IsmailKomay",
            lastName: "ASSAL",
            fees: 500,

            subjects: [
                {name: 'Physics', marks: 70},
                {name: 'Chemistry', marks: 80},
                {name: 'Math', marks: 65},
                {name: 'English', marks: 75},
                {name: 'Hindi', marks: 67}
            ],

            fullName: function () {
                var studentObject;
                studentObject = $scope.student;
                return studentObject.firstName + " " + studentObject.lastName;
            }

        };
        $scope.factoryResult = ServiceFromFactory.moitieService2($scope.student.firstName);
        $scope.diValue = diValue;
        $scope.routeParams = $routeParams;
        $scope.utilisateurs = ServiceFromFactory.getUtilisateurs();
        $scope.currentUser = typeof $routeParams.id !== 'undefined'?ServiceFromFactory.getCurrentUser():{};
        $scope.temp = {};
        //Fct qui qui sera appelée à chq url changed
        $rootScope.$watch(function (newVal,oldVal) {
            //l'objet retourné sera la base d'appel du deuxieme fct dans le cas où il subit à un
            return $location.path();
        },
                function (newObjValueReturnedOfWatch,oldObjValueReturnedOfWatch) {
                    if (typeof $routeParams.id !== 'undefined' && newObjValueReturnedOfWatch!=='/listUsers') {
                        $scope.fct_utile($routeParams.id);
                    }
                });
        //Promise users
        ServiceFromFactory.loadUsersFromAjax().then(
                function (data) {
                    ServiceFromFactory.setUtilisateurs(data);
                    $scope.utilisateurs = ServiceFromFactory.getUtilisateurs();
                    if (typeof $routeParams.id !== 'undefined') {
                        $scope.fct_utile($routeParams.id);
                    }
                }
        , function (error) {
            //console.log('erreur loadUsersFromAjax');
        });
        //Promise nomPrenomAge
        ServiceFromFactory.ajaxResponse().then(
                function (data) {
                    $scope.nomPrenomAge = data;
                }
        , function (error) {
            //console.log('erreur nomPrenomAge');
        });


        //Evts
        $scope.prepareEdit = function (id) {
            $scope.fct_utile(id);
            $scope.soumettre='Edit';
        };
        $scope.editOrAdd = function (id) {
            
            if(typeof id==='undefined'){
                ServiceFromFactory.add( $scope.currentUser);
            }else{
                ServiceFromFactory.add( ServiceFromFactory.getCurrentUser(id));
            }
        };
        $scope.prepareAdd = function (id) {
            $scope.currentUser={username:'defaultUserName',ville : 'defaultVille'};
            $scope.soumettre='Add';
            ServiceFromFactory.setCurrentUser(id);
            $scope.currentUser=ServiceFromFactory.getCurrentUser();
        };
        $scope.add = function () {
            ServiceFromFactory.add( $scope.currentUser);
        };
        $scope.delete = function (id) {
            ServiceFromFactory.delete( id);
        };
        $scope.reset = function () {
            if(typeof $scope.temp !=='undefined'){
            $scope.currentUser.username = $scope.temp.username;
            $scope.currentUser.ville = $scope.temp.ville;
            ServiceFromFactory.setCurrentUser($scope.currentUser.id);
            $scope.currentUser = ServiceFromFactory.getCurrentUser();
           }
        };
        $scope.lister = function(){
            ServiceFromFactory.setCurrentUser();
            $scope.currentUser = ServiceFromFactory.getCurrentUser();
        };

        $scope.fct_utile = function (routeParamsId) {
            ServiceFromFactory.setCurrentUser(routeParamsId);
            $scope.currentUser = ServiceFromFactory.getCurrentUser();
            $scope.temp = angular.copy($scope.currentUser);
        };
    }]);





















//DI
//ismailObj.cin = 'Modifié cin ';
mainApp.value('diValue', ismailObj);

