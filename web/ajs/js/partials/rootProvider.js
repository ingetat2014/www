mainApp.config(['$routeProvider',function ($routeProvider) {
    console.log('----------------------------ROOTPROVIDER CALLING-------------------------------------- ');
    $routeProvider
            .when('/showDossier',
            {templateUrl:'showDossier'})
            .when('/listDossier',
            {templateUrl:'listDossier'})
            .when('/showDossier',
            {templateUrl:'editDossier'})
            .when('/editDossier/:id',
            {templateUrl:'editDossier'
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
                    .otherwise({redirectTo: '/listDossier'});

        }]);
