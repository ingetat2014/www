var mainApp = angular.module("mainApp", ["ngRoute"]);
mainApp.config(function($interpolateProvider){
    $interpolateProvider.startSymbol('||');
    $interpolateProvider.endSymbol('||');
});