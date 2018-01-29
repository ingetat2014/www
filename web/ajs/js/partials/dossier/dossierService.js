mainApp.service('dossierService', ['dossierFactory',function (dossierFactory) {
    //les services s'appellent une seule fois(Singleton)
    //Rmq : Eviter d'appler les this dans des fonctions utilisables uniquement dans le backEnd :  il suffit de parmétriser les argument des fonctions
    console.log('----------------------------DOSSIER SERVICE CALLING-------------------------------------- ');
    this.all = function(){
        return dossierFactory.all();
    };
    this.new = function(){
        return dossierFactory.new();
    };
    this.getDossierById = function (arr,idElt) {
        return (arr.length>0)? (arr.filter(function (f) {
            //todo ifNull or has not id property
            return f.id == idElt;
        })[0]):[];
    };
}]);