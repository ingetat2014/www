$("#fdr_adminbundle_role_crudAdmin:checkbox").change(function() {
    if ($(this).is(':checked')) {
        crudAdmin(true);
    } else {
        crudAdmin(false);
    }
});
$("#crudFDR:checkbox").change(function() {
    if ($(this).is(':checked')) {
        crudFdr(true);
    } else {
        crudFdr(false);
    }
});
$("#gestionGlobaleFDR:checkbox").change(function() {
    if ($(this).is(':checked')) {
        gestionGlobaleFDR(true);
    } else {
        gestionGlobaleFDR(false);
    }
});
$("#panneFDR:checkbox").change(function() {
    if ($(this).is(':checked')) {
        panneFDR(true);
    } else {
        panneFDR(false);
    }
});
$("#autreAgenceFDR:checkbox").change(function() {
    if ($(this).is(':checked')) {
        autreAgenceFDR(true);
    } else {
        autreAgenceFDR(false);
    }
});
$("#autreFDR:checkbox").change(function() {
    if ($(this).is(':checked')) {
        autreFDR(true);
    } else {
        autreFDR(false);
    }
});
$("#crudFDL:checkbox").change(function() {
    if ($(this).is(':checked')) {
        crudFdl(true);
    } else {
        crudFdl(false);
    }
});
$("#clientCmpteFDL:checkbox").change(function() {
    if ($(this).is(':checked')) {
        clientCmpteFDL(true);
    } else {
        clientCmpteFDL(false);
    }
});
$("#clientNnCmpteFDL:checkbox").change(function() {
    if ($(this).is(':checked')) {
        clientNnCmpteFDL(true);
    } else {
        clientNnCmpteFDL(false);
    }
});
$("#accusRecFDL:checkbox").change(function() {
    if ($(this).is(':checked')) {
        accusRecFDL(true);
    } else {
        accusRecFDL(false);
    }
});
$("#autreFDL:checkbox").change(function() {
    if ($(this).is(':checked')) {
        autreFDL(true);
    } else {
        autreFDL(false);
    }
});


$("#crudClient:checkbox").change(function() {
    if ($(this).is(':checked')) {
        crudClient(true);
    } else {
        crudClient(false);
    }
});
$("#crudVehicule:checkbox").change(function() {
    if ($(this).is(':checked')) {
        crudVehicule(true);
    } else {
        crudVehicule(false);
    }
});
$("#crudChauffeur:checkbox").change(function() {
    if ($(this).is(':checked')) {
        crudChauffeur(true);
    } else {
        crudChauffeur(false);
    }
});
$("#crudUtilisateur:checkbox").change(function() {
    if ($(this).is(':checked')) {
        crudUtilisateur(true);
    } else {
        crudUtilisateur(false);
    }
});
$("#crudDepot:checkbox").change(function() {
    if ($(this).is(':checked')) {
        crudDepot(true);
    } else {
        crudDepot(false);
    }
});
$("#crudFiliale:checkbox").change(function() {
    if ($(this).is(':checked')) {
        crudFiliale(true);
    } else {
        crudFiliale(false);
    }
});
$("#crudIndisponibilite:checkbox").change(function() {
    if ($(this).is(':checked')) {
        crudIndisponibilite(true);
    } else {
        crudIndisponibilite(false);
    }
});
$("#crudSecteur:checkbox").change(function() {
    if ($(this).is(':checked')) {
        crudSecteur(true);
    } else {
        crudSecteur(false);
    }
});
$("#crudTypePrestation:checkbox").change(function() {
    if ($(this).is(':checked')) {
        crudTypePrestation(true);
    } else {
        crudTypePrestation(false);
    }
});
$("#crudTypeConsommation:checkbox").change(function() {
    if ($(this).is(':checked')) {
        crudTypeConsommation(true);
    } else {
        crudTypeConsommation(false);
    }
});
$("#crudPeage:checkbox").change(function() {
    if ($(this).is(':checked')) {
        crudPeage(true);
    } else {
        crudPeage(false);
    }
});
$("#crudBonCarburantHuile:checkbox").change(function() {
    if ($(this).is(':checked')) {
        crudBonCarburantHuile(true);
    } else {
        crudBonCarburantHuile(false);
    }
});
$("#crudManutentionnaire:checkbox").change(function() {
    if ($(this).is(':checked')) {
        crudManutentionnaire(true);
    } else {
        crudManutentionnaire(false);
    }
});
$("#crudRole:checkbox").change(function() {
    if ($(this).is(':checked')) {
        crudRole(true);
    } else {
        crudRole(false);
    }
});
$("#crudVille:checkbox").change(function() {
    if ($(this).is(':checked')) {
        crudVille(true);
    } else {
        crudVille(false);
    }
});
$("#crudParamEtModif:checkbox").change(function() {
    if ($(this).is(':checked')) {
        crudParamEtModif(true);
    } else {
        crudParamEtModif(false);
    }
});
//-----------
var crudAdmin = function(etat) {
    crudChauffeur(etat);
    crudClient(etat);
    crudDepot(etat);
    crudFiliale(etat);
    crudIndisponibilite(etat);
    crudManutentionnaire(etat);
    crudRole(etat);
    crudVille(etat);
    crudSecteur(etat);
    crudTypeConsommation(etat);
    crudPeage(etat);
    crudBonCarburantHuile(etat);
    crudTypePrestation(etat);
    crudUtilisateur(etat);
    crudVehicule(etat);
    crudFdl(etat);
    crudFdr(etat);
    crudParamEtModif(etat);

};
var crudFdr = function(etat) {
    $("#crudFDR:checkbox").prop('checked', etat);
    $("#gestionGlobaleFDR:checkbox").prop('checked', etat);
    $("#panneFDR:checkbox").prop('checked', etat);
    $("#panneFDR:checkbox").prop('checked', etat);
    $("#autreAgenceFDR:checkbox").prop('checked', etat);
    $("#autreFDR:checkbox").prop('checked', etat);
    gestionGlobaleFDR(etat);
    panneFDR(etat);
    autreAgenceFDR(etat);
    autreFDR(etat);
};
var gestionGlobaleFDR = function(etat) {

    $("#fdr_adminbundle_role_affFDR:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_crFDR:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_upFDR:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_delFDR:checkbox").prop('checked', etat);
};
var panneFDR = function(etat) {

    $("#fdr_adminbundle_role_affFDRPanne:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_crFDRPanne:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_upFDRPanne:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_delFDRPanne:checkbox").prop('checked', etat);
};
var autreAgenceFDR = function(etat) {

    $("#fdr_adminbundle_role_affFDRAutrAgence:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_crFDRAutrAgence:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_upFDRAutrAgence:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_delFDRAutrAgence:checkbox").prop('checked', etat);
};
var autreFDR = function(etat) {

    $("#fdr_adminbundle_role_cloturerFDR:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_upCloturerFDR:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_cancelFDR:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_editCompteur:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_rechercherFDR:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_imprimerFDR:checkbox").prop('checked', etat);
};
var crudFdl = function(etat) {
    $("#crudFDL:checkbox").prop('checked', etat);
    $("#clientCmpteFDL:checkbox").prop('checked', etat);
    $("#clientNnCmpteFDL:checkbox").prop('checked', etat);
    $("#accusRecFDL:checkbox").prop('checked', etat);
    $("#autreFDL:checkbox").prop('checked', etat);
    clientCmpteFDL(etat);
    clientNnCmpteFDL(etat);
    accusRecFDL(etat);
    autreFDL(etat);
};
var clientCmpteFDL = function(etat) {

    $("#fdr_adminbundle_role_affClientCompeFDL:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_crClientCompeFDL:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_upClientCompeFDL:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_delClientCompeFDL:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_cancelClientCompeFDL:checkbox").prop('checked', etat);
};
var clientNnCmpteFDL = function(etat) {

    $("#fdr_adminbundle_role_affClientNnCompeFDL:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_crClientNnCompeFDL:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_upClientNnCompeFDL:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_delClientNnCompeFDL:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_cancelClientNnCompeFDL:checkbox").prop('checked', etat);
};
var accusRecFDL = function(etat) {

    $("#fdr_adminbundle_role_confRecDocCtm:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_confRecDocClient:checkbox").prop('checked', etat);
};
var autreFDL = function(etat) {

    $("#fdr_adminbundle_role_affectationVehicule:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_affectationChauffManu:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_cloturerFDRAffr:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_editerPercentAssurParam:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_rechercherFDL:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_imprimerFDL:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_ttEtatAfficherParFdl:checkbox").prop('checked', etat);
};
var crudClient = function(etat) {
    $("#crudClient:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_affClient:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_crClient:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_upClient:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_delClient:checkbox").prop('checked', etat);
};
var crudVehicule = function(etat) {
    $("#crudVehicule:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_affVehicule:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_crVehicule:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_upVehicule:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_delVehicule:checkbox").prop('checked', etat);
};
var crudChauffeur = function(etat) {
    $("#crudChauffeur:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_affChauffeur:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_crChauffeur:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_upChauffeur:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_delChauffeur:checkbox").prop('checked', etat);
};
var crudUtilisateur = function(etat) {
    $("#crudUtilisateur:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_affUtilisateur:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_crUtilisateur:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_upUtilisateur:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_delUtilisateur:checkbox").prop('checked', etat);
};
var crudDepot = function(etat) {
    $("#crudDepot:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_affDepot:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_crDepot:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_upDepot:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_delDepot:checkbox").prop('checked', etat);
};
var crudFiliale = function(etat) {
    $("#crudFiliale:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_affFiliale:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_crFiliale:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_upFiliale:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_delFiliale:checkbox").prop('checked', etat);
};
var crudIndisponibilite = function(etat) {
    $("#crudIndisponibilite:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_affIndisponibilite:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_crIndisponibilite:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_upIndisponibilite:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_delIndisponibilite:checkbox").prop('checked', etat);
};
var crudSecteur = function(etat) {
    $("#crudSecteur:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_affSecteur:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_crSecteur:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_upSecteur:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_delSecteur:checkbox").prop('checked', etat);
};
var crudTypePrestation = function(etat) {
    $("#crudTypePrestation:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_affTypePrestation:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_crTypePrestation:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_upTypePrestation:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_delTypePrestation:checkbox").prop('checked', etat);
};
var crudTypeConsommation = function(etat) {
    $("#crudTypeConsommation:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_affTypeConsommation:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_crTypeConsommation:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_upTypeConsommation:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_delTypeConsommation:checkbox").prop('checked', etat);
};
var crudPeage = function(etat) {
    $("#crudPeage:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_affPeage:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_crPeage:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_upPeage:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_delPeage:checkbox").prop('checked', etat);
};
var crudBonCarburantHuile = function(etat) {
    $("#crudBonCarburantHuile:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_affBonCarburantHuile:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_crBonCarburantHuile:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_upBonCarburantHuile:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_delBonCarburantHuile:checkbox").prop('checked', etat);
};
var crudManutentionnaire = function(etat) {
    $("#crudManutentionnaire:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_affManutentionnaire:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_crManutentionnaire:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_upManutentionnaire:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_delManutentionnaire:checkbox").prop('checked', etat);
};
var crudVille = function(etat) {
    $("#crudVille:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_affVille:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_crVille:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_upVille:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_delVille:checkbox").prop('checked', etat);
};
var crudRole = function(etat) {
    $("#crudRole:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_affRole:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_crRole:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_upRole:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_delRole:checkbox").prop('checked', etat);
};
var crudParamEtModif = function(etat) {
    $("#crudParamEtModif:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_editerPlageHoraireParam:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_affModification:checkbox").prop('checked', etat);
    $("#fdr_adminbundle_role_delModification:checkbox").prop('checked', etat);
};