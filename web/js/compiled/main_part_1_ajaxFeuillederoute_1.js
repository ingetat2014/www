changerPrestation();
function changerPrestation() {
    var divSortie = "fdr_adminbundle_feuillederoute_secteurs";
    var idChampsCntrl = "fdr_adminbundle_feuillederoute_typePrestation";
    if(document.getElementById(divSortie)!==null && document.getElementById(idChampsCntrl)!==null && $('#fdr_adminbundle_feuillederoute_secteurs, label[for="fdr_adminbundle_feuillederoute_secteurs"]')!==null)
    {
    $('#fdr_adminbundle_feuillederoute_secteurs, label[for="fdr_adminbundle_feuillederoute_secteurs"]').show();
    var method = "GET";
    var fichierParh = "http://" + document.getElementById("varUrlAccueil").value + "/php/test.php";
    var paramUrl = "typeprestation_id";
    var nomMethode = "secteursDePrestation";
    var ajaxRequest = maVarAjaxChangerPrestation(divSortie, idChampsCntrl, method, fichierParh, paramUrl, nomMethode);
        
     }
}

function maVarAjaxChangerPrestation(divSortie, idChampsCntrl, method, fichierParh, paramUrl, nomMethode) {
    var ajaxRequest; // The variable that makes Ajax possible!
    try {

        ajaxRequest = new XMLHttpRequest();
    } catch (e) {

        try {
            ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            try {
                ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {

                alert("Your browser broke!");
                return false;
            }
        }
    }
    ajaxRequest.onreadystatechange = function() {
        if (ajaxRequest.readyState === 4 && ajaxRequest.status === 200) {
            var ajaxDisplay = document.getElementById(divSortie);
            if(ajaxDisplay){
            ajaxDisplay.innerHTML = ajaxRequest.responseText;
            var selectSec = document.getElementById('fdr_adminbundle_feuillederoute_secteurs');
            var tsSelectSec = document.getElementById('fdr_adminbundle_feuillederoute_hid_secteurs');
            if (tsSelectSec !== null) {
                var tsSecSel = tsSelectSec.value.split('@');
                var cntt=0;
                for (var i = 0; i < selectSec.options.length; i++)
                {
                    cntt = cntt+1;
                    //select secteurs
                    var o = selectSec.options[i];
                    for (var j = 0; j < tsSecSel.length; j++) {
                        
                        if (o.value === tsSecSel[j]) {
                            o.selected = true;
                            
                            break;
                        }
                        else {
                            continue;
                        }

                    }
                }
                if(cntt===selectSec.options.length){changerClient();}
                
            }
        }
        }
    };
    var idchamps = (document.getElementById(idChampsCntrl)) ? document.getElementById(idChampsCntrl) : idChampsCntrl;
    ajaxRequest.open(method, fichierParh + "?" + paramUrl + "=" + (idchamps.value ? idchamps.value : idchamps) + "&nomMethode=" + nomMethode, true);
    ajaxRequest.send();
    
    return ajaxRequest;
}
function changerClient() {
    var divSortie = "fdr_adminbundle_feuillederoute_clients";
    var idChampsCntrl = "fdr_adminbundle_feuillederoute_secteurs";
    var method = "GET";
    var fichierParh = "http://" + document.getElementById("varUrlAccueil").value + "/php/test.php";
    var paramUrl = "secteur_id";
    var nomMethode = "clientsDeSecteur";
    var secteurs = document.getElementById("fdr_adminbundle_feuillederoute_secteurs");
    var total = "";
    for (i = 0; i < secteurs.options.length; i++)
    {
        if (secteurs.options[i].selected)
        {
            total = secteurs.options[i].value + "|" + total;

        }
    }
    $('#fdr_adminbundle_feuillederoute_clients').show();
    var ajaxRequest = maVarAjaxChangerClient(divSortie, total, method, fichierParh, paramUrl, nomMethode);

}

function maVarAjaxChangerClient(divSortie, total, method, fichierParh, paramUrl, nomMethode) {
    var ajaxRequest; // The variable that makes Ajax possible!
    try {
        ajaxRequest = new XMLHttpRequest();
    } catch (e) {

        try {
            ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            try {
                ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {

                alert("Your browser broke!");
                return false;
            }
        }
    }
    ajaxRequest.onreadystatechange = function() {
        if (ajaxRequest.readyState === 4 && ajaxRequest.status === 200) {
            var ajaxDisplay = document.getElementById(divSortie);
            ajaxDisplay.innerHTML = ajaxRequest.responseText;
            
                //select clients
                var fdrTsClSel = document.getElementById('fdr_adminbundle_feuillederoute_hid_clientsFdrSelected');
               if(fdrTsClSel!==null){
                   
                   var cntt=0;
               var tsClientsSel = fdrTsClSel.value.split('@');
                for (var k = 0; k < tsClientsSel.length; k++){
                    cntt++;
                    var selligne = tsClientsSel[k].split("-");  
                }
                if(cntt===tsClientsSel.length){
                     $("*[id*='fdr_adminbundle_feuillederoute_clients_']").each(function (){
                         var res = $(this).attr('id').split('_');
                         for (var k = 0; k < tsClientsSel.length; k++){
                    cntt++;
                    var selligne = tsClientsSel[k].split("-");
                    //alert(selligne[1] + "-" + selligne[3]+" === "+$(this).val());
                    if(selligne[1] + "-" + selligne[3] === $(this).val())
                    {
                        $(this).attr('checked',false);
                        break;
                    }
                    else
                    {
                        continue;
                    }
                }
                     });
                    //inverser
                     $("*[id*='fdr_adminbundle_feuillederoute_clients_']").each(function (){
                        // alert($(this).attr('checked'));
                      if($(this).is(':checked'))$(this).prop('checked', false);
                      else $(this).prop('checked', true);
                      fdrTsClSel.value="";
                     });
               }
            }

        }
    };
    ajaxRequest.open(method, fichierParh + "?" + paramUrl + "=" + total + "&nomMethode=" + nomMethode, true);

    ajaxRequest.send();
    return ajaxRequest;
}

function chargerCompteur() {
    var divSortie = "fdr_adminbundle_feuillederoute_compteurReel";
    var idChampsCntrl = "fdr_adminbundle_feuillederoute_vehicule";
    var method = "GET";
    var fichierParh = "http://" + document.getElementById("varUrlAccueil").value + "/php/test.php";
    var paramUrl = "vehicule_id";
    var nomMethode = "compteurVehicule";
    var ajaxRequest = maVarAjaxChargerCompteur(divSortie, idChampsCntrl, method, fichierParh, paramUrl, nomMethode);
    
}
if(document.getElementById("fdr_adminbundle_feuillederoute_compteurReel"))
var compteurNormal = document.getElementById("fdr_adminbundle_feuillederoute_compteurReel").value;
function maVarAjaxChargerCompteur(divSortie, idChampsCntrl, method, fichierParh, paramUrl, nomMethode) {
    var ajaxRequest; // The variable that makes Ajax possible!

    try {

        ajaxRequest = new XMLHttpRequest();
    } catch (e) {

        try {
            ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            try {
                ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {

                alert("Your browser broke!");
                return false;
            }
        }
    }
    ajaxRequest.onreadystatechange = function() {
        if (ajaxRequest.readyState === 4 && ajaxRequest.status === 200) {
            var ajaxDisplay = document.getElementById(divSortie);
            if(ajaxDisplay){
            document.getElementById(divSortie).value = parseInt(ajaxRequest.responseText);
            compteurNormal = parseInt(ajaxRequest.responseText);
        }
        }
    };
    var idchamps = document.getElementById(idChampsCntrl);
    ajaxRequest.open(method, fichierParh + "?" + paramUrl + "=" + idchamps.value + "&nomMethode=" + nomMethode, true);
    ajaxRequest.send();
    return ajaxRequest;
}

function chargerTypeConsommation(index) {

    var divSortie = "fdr_adminbundle_feuillederoute_bonCarburantHuiles_" + index + "_typeConsommation";
    var idChampsCntrl = "fdr_adminbundle_feuillederoute_bonCarburantHuiles_" + index + "_ville";
    var method = "GET";
    var fichierParh = "http://" + document.getElementById("varUrlAccueil").value + "/php/test.php";
    var paramUrl = "ville_id";
    var nomMethode = "typeConsommation";
    var ajaxRequest = maVarAjaxChargerTypeConsommation(divSortie, idChampsCntrl, method, fichierParh, paramUrl, nomMethode);
}

function maVarAjaxChargerTypeConsommation(divSortie, idChampsCntrl, method, fichierParh, paramUrl, nomMethode) {
    var ajaxRequest; // The variable that makes Ajax possible!
    try {

        ajaxRequest = new XMLHttpRequest();
    } catch (e) {

        try {
            ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            try {
                ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {

                alert("Your browser broke!");
                return false;
            }
        }
    }
    ajaxRequest.onreadystatechange = function() {
        if (ajaxRequest.readyState === 4 && ajaxRequest.status === 200) {
            var ajaxDisplay = document.getElementById(divSortie);
            ajaxDisplay.innerHTML = ajaxRequest.responseText;
        }
    };
    var idchamps = (document.getElementById(idChampsCntrl)) ? document.getElementById(idChampsCntrl) : idChampsCntrl;
    ajaxRequest.open(method, fichierParh + "?" + paramUrl + "=" + (idchamps.value ? idchamps.value : idchamps) + "&nomMethode=" + nomMethode, true);
    ajaxRequest.send();
    return ajaxRequest;
}

function changerFiliale() {
    var divSortie = "fdr_adminbundle_feuillederoute_depot";
    var idChampsCntrl = "fdr_adminbundle_feuillederoute_filiale";
    var method = "GET";
    var fichierParh = "http://" + document.getElementById("varUrlAccueil").value + "/php/test.php";
    var paramUrl = "filiale_id";
    var nomMethode = "depotsDeFiliale";
    var ajaxRequest = maVarAjaxChangerFiliale(divSortie, idChampsCntrl, method, fichierParh, paramUrl, nomMethode);
}

function maVarAjaxChangerFiliale(divSortie, idChampsCntrl, method, fichierParh, paramUrl, nomMethode) {
    var ajaxRequest; // The variable that makes Ajax possible!
    try {

        ajaxRequest = new XMLHttpRequest();
    } catch (e) {

        try {
            ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            try {
                ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {

                alert("Your browser broke!");
                return false;
            }
        }
    }
    ajaxRequest.onreadystatechange = function() {
        if (ajaxRequest.readyState === 4 && ajaxRequest.status === 200) {
            var ajaxDisplay = document.getElementById(divSortie);
            ajaxDisplay.innerHTML = ajaxRequest.responseText;
        }
    };
    var idchamps = (document.getElementById(idChampsCntrl)) ? document.getElementById(idChampsCntrl) : idChampsCntrl;
    ajaxRequest.open(method, fichierParh + "?" + paramUrl + "=" + (idchamps.value ? idchamps.value : idchamps) + "&nomMethode=" + nomMethode, true);
    ajaxRequest.send();
    return ajaxRequest;
}

function changerVille(index)
{
    var res = index.split("_");
    var divSortie = "fdr_adminbundle_feuillederoute_bonCarburantHuiles_" + res[res.length - 2] + "_typeConsommation";
    var idChampsCntrl = "fdr_adminbundle_feuillederoute_bonCarburantHuiles_" + res[res.length - 2] + "_ville";
    var method = "GET";
    var fichierParh = "http://" + document.getElementById("varUrlAccueil").value + "/php/test.php";
    var paramUrl = "ville_id";
    var nomMethode = "changerVille";
    var ajaxRequest = maVarAjaxChangerVille(divSortie, idChampsCntrl, method, fichierParh, paramUrl, nomMethode);
}

function maVarAjaxChangerVille(divSortie, idChampsCntrl, method, fichierParh, paramUrl, nomMethode) {
    var ajaxRequest; // The variable that makes Ajax possible!
    try {
// Opera 8.0+, Firefox, Safari
        ajaxRequest = new XMLHttpRequest();
    } catch (e) {
// Internet Explorer Browsers
        try {
            ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            try {
                ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {
// Something went wrong
                alert("Your browser broke!");
                return false;
            }
        }
    }
    ajaxRequest.onreadystatechange = function() {
        if (ajaxRequest.readyState == 4 && ajaxRequest.status == 200) {
            var ajaxDisplay = document.getElementById(divSortie);
            ajaxDisplay.innerHTML = ajaxRequest.responseText;
        }
    };
    var idchamps = document.getElementById(idChampsCntrl);
    ajaxRequest.open(method, fichierParh + "?" + paramUrl + "=" + idchamps.value + "&nomMethode=" + nomMethode, true);
    ajaxRequest.send();
    return ajaxRequest;
}

function changerTypeIntExt(index)
{
    var res = index.split("_");

    var divSortie = "fdr_adminbundle_feuillederoute_bonCarburantHuiles_" + res[res.length - 2] + "_typeConsommation";//
    var idChampsCntrl = "fdr_adminbundle_feuillederoute_bonCarburantHuiles_" + res[res.length - 2] + "_type";
    var idVille = "fdr_adminbundle_feuillederoute_bonCarburantHuiles_" + res[res.length - 2] + "_ville";

    var method = "GET";
    var fichierParh = "http://" + document.getElementById("varUrlAccueil").value + "/php/test.php";
    var paramUrl = "type";
    var nomMethode = "changerTypeIntExt";
    var ajaxRequest = maVarAjaxChangerTypeIntExt(divSortie, idChampsCntrl, method, fichierParh, paramUrl, nomMethode, idVille);
}

function maVarAjaxChangerTypeIntExt(divSortie, idChampsCntrl, method, fichierParh, paramUrl, nomMethode, idVille) {
    var ajaxRequest; // The variable that makes Ajax possible!
    try {
// Opera 8.0+, Firefox, Safari
        ajaxRequest = new XMLHttpRequest();
    } catch (e) {
// Internet Explorer Browsers
        try {
            ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            try {
                ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {
// Something went wrong
                alert("Your browser broke!");
                return false;
            }
        }
    }
    ajaxRequest.onreadystatechange = function() {
        if (ajaxRequest.readyState === 4 && ajaxRequest.status === 200) {
            var ajaxDisplay = document.getElementById(divSortie);
            ajaxDisplay.innerHTML = ajaxRequest.responseText;
        }
    };
    var idchamps = document.getElementById(idChampsCntrl).value + "/" + document.getElementById(idVille).value;
    ajaxRequest.open(method, fichierParh + "?" + paramUrl + "=" + idchamps + "&nomMethode=" + nomMethode, true);

    ajaxRequest.send();
    return ajaxRequest;
}

function calculerMontant(index)
{
    var res = index.split("_");
    var divSortie = "fdr_adminbundle_feuillederoute_bonCarburantHuiles_" + res[res.length - 2] + "_montant/";
    divSortie += "fdr_adminbundle_feuillederoute_bonCarburantHuiles_" + res[res.length - 2] + "_prixUnitaire"
    var idChampsCntrl = "fdr_adminbundle_feuillederoute_bonCarburantHuiles_" + res[res.length - 2] + "_typeConsommation";
    var quantite = "fdr_adminbundle_feuillederoute_bonCarburantHuiles_" + res[res.length - 2] + "_quantite";
    var method = "GET";
    var fichierParh = "http://" + document.getElementById("varUrlAccueil").value + "/php/test.php";
    var paramUrl = "depot_id";
    var nomMethode = "calculerMontant";
    var ajaxRequest = maVarAjaxCalculerMontant(divSortie, idChampsCntrl, method, fichierParh, paramUrl, nomMethode, quantite);

}


function maVarAjaxCalculerMontant(divSortie, idChampsCntrl, method, fichierParh, paramUrl, nomMethode, quantite) {
    var ajaxRequest; // The variable that makes Ajax possible!
    try {
// Opera 8.0+, Firefox, Safari
        ajaxRequest = new XMLHttpRequest();
    } catch (e) {
// Internet Explorer Browsers
        try {
            ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            try {
                ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {
// Something went wrong
                alert("Your browser broke!");
                return false;
            }
        }
    }
    ajaxRequest.onreadystatechange = function() {
        if (ajaxRequest.readyState === 4 && ajaxRequest.status === 200) {
            var divSorties = divSortie.split("/");
            var responses = ajaxRequest.responseText.split("/");
            document.getElementById(divSorties[0]).value = responses[0];
            document.getElementById(divSorties[1]).value = responses[1];
            //alert(response);

        }
    };
    var idchamps = document.getElementById(idChampsCntrl).value + "/" + document.getElementById(quantite).value;
    ajaxRequest.open(method, fichierParh + "?" + paramUrl + "=" + idchamps + "&nomMethode=" + nomMethode, true);
    ajaxRequest.send();
    return ajaxRequest;
}
function fdr_panne() {
    var peut = parseInt("0"+$('#fdr_adminbundle_feuillederoute_fdr_panne').val());
    if(peut!==1)
    {
        var datedebutMission = $("#fdr_adminbundle_feuillederoute_dateDebutMission_date").val();
        var daba = new Date();        
        var dateDebut = new Date(datedebutMission);
        var anterieure = (daba.getYear()>dateDebut.getYear())?true:(daba.getMonth()>dateDebut.getMonth()) ?true:(daba.getDate()>dateDebut.getDate())?true:false;
        if(anterieure)
        {
            alert("Vous n'avez pas le droit de saisir une date antérieure");
            $("#fdr_adminbundle_feuillederoute_dateDebutMission_date").val(null);
        }
    }
    return false;
}

function differencierCompteur() {
    var max=($('#fdr_adminbundle_feuillederoute_param_diff_km')!==null)?parseInt($('#fdr_adminbundle_feuillederoute_param_diff_km').text()):10;
    var divSortie = "fdr_adminbundle_feuillederoute_compteurReel";
    var diff = document.getElementById(divSortie).value - compteurNormal;
    if (diff < 0)
    {
        $("input[id='" + divSortie + "']").css('border-color', 'red');
        if (window.confirm('Ce compteur [' + document.getElementById(divSortie).value + '] est inférieur à celui mentionnée sur le véhicule [' + compteurNormal + ']' + ' \n Vous voulez confirmer ce compteur ?') === true) {
            return true;
        } else
            return false;
    }
    else if (diff > max)
    {
        $("input[id='" + divSortie + "']").css('border-color', 'red');
        if (window.confirm('Ce compteur [' + document.getElementById(divSortie).value + '] est supérieur à celui mentionnée sur le véhicule [' + compteurNormal + ']' + ' : Différence dépasse les '+max+'km \n Vous voulez confirmer ce compteur ?') === true) {
            return true;
        } else
            return false;
    }


}