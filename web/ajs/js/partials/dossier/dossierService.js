mainApp.service('dossierService', ['dossierFactory',function (dossierFactory) {
    //les services s'appellent une seule fois(Singleton)
    //Rmq : Eviter d'appler les this dans des fonctions utilisables uniquement dans le backEnd :  il suffit de parmétriser les argument des fonctions
    console.log('----------------------------DOSSIER SERVICE CALLING-------------------------------------- ');
    this.all = function(){
        return dossierFactory.all();
    };
}]);