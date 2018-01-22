mainApp.config(['$routeProvider',function ($routeProvider) {
    console.log('----------------------------ROOTPROVIDER CALLING-------------------------------------- ');
    $routeProvider
            .when('/listUsers',
            {templateUrl:'listUsers'})
            .when('/addUser',
            {templateUrl:'editUser'})
            .when('/editUser/:id',
            {templateUrl:'editUser'
                    /*,resolve: {
                    "traitement": function($q, $timeout) {
                    var deferred = $q.defer();
                            $timeout(function(){
                            deferred.resolve({var1:'valeur1 de resolve'});
                            console.log('resolve : $routeParams : ',this);
                            }, 500);
                            
                            return deferred.promise;
                    }

                    }*/})
                    .otherwise({redirectTo: '/listUsers'});

        }]);