mainApp.service('ServiceFromFactory', ['Factory1',function (Factory1) {
     //les services s'appellent une seule fois(Singleton)
     //Rmq : Eviter d'appler les this dans des fonctions utilisables uniquement dans le backEnd :  il suffit de parmétriser les argument des fonctions
     console.log('----------------------------SERVICE CALLING-------------------------------------- ');
    this.utilisateurs = [];
    this.currentUser = {};
    
    this.loadUsersFromAjax = function(){
        //todo comment appeler le controller apres lexecution du service get $http (use then de promise)
        return Factory1.loadUsersFromAjax();
    };
    this.loadUsersFromAjax();
    
    this.getCurrentUser = function () {
        /*if (typeof routeParamsId !== 'undefined')
        { 
            this.setCurrentUser(routeParamsId);
        }*/
        return  this.currentUser;
    };
    this.setCurrentUser = function (id) {
        this.currentUser = (typeof id !== 'undefined')?this.getUser(id):{};
    };
    this.tierService1 = function (str) {
        return Factory1.longueur(str) / 3;
    };
    this.moitieService2 = function (str) {
        return Factory1.longueur(str) / 2;
    };
    this.getUtilisateurs = function () {
        return  this.utilisateurs;
    };
    this.setUtilisateurs = function (arrObj) {
        this.utilisateurs =arrObj ;
    };
    this.getUser = function (idElt) {
        var result = this.getObjFromArrayById(idElt);
        return result;
    };

    //CRUD
    /*****delete****/
    this.delete = function (id) {
        this.utilisateurs.splice(this.getIndexFromArrayById(this.utilisateurs, id), 1);
    };
    this.reset = function (id) {
        console.log('reset Service');
    };
    this.edit = function (obj) {
        console.log('edit Service obj : ', this.currentUser);
    };
    this.add = function (obj) {
        //todo ça ne marchera jamais si on n'a pas fait track by $index ceci d'une part d'autre part probleme de binding l'obj editable sera ecrasé
        //temp = angular.copy(this.currentUser);
        obj.id = this.utilisateurs.length+1;
        this.utilisateurs.push(obj);
    };
    this.getObjFromArrayById = function ( idElt) {
        return this.utilisateurs.filter(function (v) {
            return v.id == idElt;
        })[0];
    };
    this.getIndexFromArrayById = function (array, content) {
        return array.map(x => x.id).indexOf(content);
    };
    this.ajaxResponse = function(){
        return Factory1.ajaxResponse();
    };
}]);