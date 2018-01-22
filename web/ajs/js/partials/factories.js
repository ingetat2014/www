mainApp.factory('Factory1',['$http','$q',function($http,$q){
    //Rmq la nomenclature doit être normalisée
    console.log('----------------------------FACTORY CALLING-------------------------------------- ');
var factory={};
factory.longueur = function(str){
return str.length;
};
factory.ajaxResponse = function(){
    var deferred = $q.defer();
        $http.get('backEnd/serverside.php?req=nomPrenomAge')
                .success(function (response) {
                        deferred.resolve(response);
             }).error(function(data, status, headers, config){deferred.reject('error on retrieving data-loadUsersFromAjax ');
             });
    return deferred.promise;
};
factory.loadUsersFromAjax = function(){
    utilisateurs = [];
    var deferred = $q.defer();
        $http.get('backEnd/serverside.php?req=utilisateurs')
                .success(function (response) {
                  //  angular.forEach(response, function (value, key) { });
                        utilisateurs =response;
                   
                        deferred.resolve(utilisateurs);
             }).error(function(data, status, headers, config){deferred.reject('error on retrieving data-loadUsersFromAjax ');
             });
    return deferred.promise;
    };
return factory;
}]);