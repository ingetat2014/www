mainApp.factory('dossierFactory',['$http','$q',function($http,$q){
    //Rmq la nomenclature doit être normalisée
    console.log('----------------------------Dossier FACTORY CALLING-------------------------------------- ');
    var factory={};
    factory.all = function(){
        var deferred = $q.defer();
        $http.get('allDossiersToJson')
            .success(function (response) {
                deferred.resolve(response);
            }).error(function(data, status, headers, config){
                deferred.reject('error on retrieving data-loadUsersFromAjax '+data);
        });
        return deferred.promise;
    };
    return factory;
}]);