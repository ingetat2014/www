function changerPrestation()
{
$('#fdr_adminbundle_feuillederoute_secteurs, label[for="fdr_adminbundle_feuillederoute_secteurs"]').show();

var divSortie ="fdr_adminbundle_feuillederoute_secteurs";
var idChampsCntrl ="fdr_adminbundle_feuillederoute_typePrestation";
var method = "GET";
var fichierParh = "../../php/test.php";
var paramUrl = "typeprestation_id";
var nomMethode = "secteursDePrestation";
var ajaxRequest=maVarAjax(divSortie,idChampsCntrl,method,fichierParh,paramUrl,nomMethode);
}
//
function chargerChauffeur()
{
    
var divSortie ="fdr_adminbundle_feuillederoute_chauffeur2";
var idChampsCntrl ="fdr_adminbundle_feuillederoute_chauffeur1";
var method = "GET";
var fichierParh = "../../php/test.php";
var paramUrl = "chauff_id";
var nomMethode = "chauffeur";
var ajaxRequest=maVarAjax(divSortie,idChampsCntrl,method,fichierParh,paramUrl,nomMethode);

}
//
function changerClient()
{
//$('#fdr_adminbundle_feuillederoute_clientRamassage, label[for="fdr_adminbundle_feuillederoute_clientRamassage"]').show();
//var divSortie ="fdr_adminbundle_feuillederoute_clientRamassage";

var divSortie ="fdr_adminbundle_feuillederoute_clients";
var idChampsCntrl ="fdr_adminbundle_feuillederoute_secteurs";
var method = "GET";
var fichierParh = "../../php/test.php";
var paramUrl = "secteur_id";
var nomMethode = "clientsDeSecteur";
//var ajaxRequest=maVarAjax(divSortie,idChampsCntrl,method,fichierParh,paramUrl,nomMethode);
var secteurs= document.getElementById("fdr_adminbundle_feuillederoute_secteurs");
var total="";
for(i=0;i<secteurs.options.length;i++)
	{ 
		if (secteurs.options[i].selected)
		{ 
			total = secteurs.options[i].value+"|"+total;
                        
		}
	}
        $('#fdr_adminbundle_feuillederoute_clients').show();
   var ajaxRequest=maVarAjaxClient(divSortie,total,method,fichierParh,paramUrl,nomMethode);
 
}

function hideClient()
{
    $res= $('#fdr_adminbundle_feuillederoute_typePrestation option:selected').text();
    if($res.toLowerCase().indexOf("ram")<=-1)
    {
        $('#fdr_adminbundle_feuillederoute_clients').hide();
    }

}
var comptrReel=0;
function chargerCompteur()
{
var divSortie ="fdr_adminbundle_feuillederoute_compteurReel";
var idChampsCntrl ="fdr_adminbundle_feuillederoute_vehicule";
var method = "GET";
var fichierParh = "../../php/test.php";
var paramUrl = "vehicule_id";
var nomMethode = "compteurVehicule";
var ajaxRequest=compteur(divSortie,idChampsCntrl,method,fichierParh,paramUrl,nomMethode);
}
function compteur(divSortie,idChampsCntrl,method,fichierParh,paramUrl,nomMethode)
{
     var ajaxRequest; // The variable that makes Ajax possible!
     try{
     // Opera 8.0+, Firefox, Safari
     ajaxRequest = new XMLHttpRequest();
     }catch (e){
     // Internet Explorer Browsers
     try{
     ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
     }catch (e) {
     try{
     ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
     }catch (e){
     // Something went wrong
     alert("Your browser broke!");
     return false;
     }
     }
     }
     ajaxRequest.onreadystatechange = function(){
     if(ajaxRequest.readyState == 4 && ajaxRequest.status==200){
     var ajaxDisplay = document.getElementById(divSortie);
//     var response=ajaxRequest.responseText.split("</font>");
//     var vehicule=parseInt(response[1]);
//     comptrReel=vehicule;
//     ajaxDisplay.innerHTML = vehicule;
      
     document.getElementById(divSortie).value=parseInt(ajaxRequest.responseText);
     }
     }
     var idchamps = document.getElementById(idChampsCntrl);
     ajaxRequest.open(method, fichierParh+"?"+paramUrl+"="+idchamps.value+"&nomMethode="+nomMethode, true);
     ajaxRequest.send();
     return ajaxRequest; 
}

//
function validerCompteurReel()
{
     var c=document.getElementById('fdr_adminbundle_feuillederoute_compteurReel');
    var compteur=c.value;
    var max=+comptrReel+20;
   if(compteur<comptrReel|| compteur>max)
   {
    c.setAttribute('style', 'border-top:2px solid red;border-bottom:2px solid red;border-left:2px solid red;border-right:2px solid red;');
    c.value='Le compteur doit être suppérieur à '+comptrReel+' est inférieur à '+max;
    alert("Le compteur doit être suppérieur à "+comptrReel+" est inférieur à "+max);
    return false;
   }
   else 
   {
       alert(comptrReel);
    //return true;
    
   }
}

function getVilleId(i)
{
    var v=i.id;
    /([0-9]+)/.exec(v);
    chargerTypeConsommation(RegExp.$1);

}


function validerForm()
{
    var c=document.getElementById('fdr_adminbundle_feuillederoute_compteurReel');
    var compteur=c.value;
   if(compteur<comptrReel || compteur>comptrReel+20)
   {
    c.setAttribute('style', 'border-top:2px solid red;border-bottom:2px solid red;border-left:2px solid red;border-right:2px solid red;');
    c.value='Le compteur doit être suppérieur à '+comptrReel;
    alert("Le compteur doit être suppérieur à "+comptrReel);
    return false;
   }
   else 
   {
    return true;
   }
}
//
function validerFormCloture()
{
    
}

///
function maVarAjax(divSortie,idChampsCntrl,method,fichierParh,paramUrl,nomMethode){
   var ajaxRequest; // The variable that makes Ajax possible!
try{
// Opera 8.0+, Firefox, Safari
ajaxRequest = new XMLHttpRequest();
}catch (e){
// Internet Explorer Browsers
try{
ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
}catch (e) {
try{
ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
}catch (e){
// Something went wrong
alert("Your browser broke!");
return false;
}
}
}
ajaxRequest.onreadystatechange = function(){
if(ajaxRequest.readyState == 4 && ajaxRequest.status==200){
var ajaxDisplay = document.getElementById(divSortie);
ajaxDisplay.innerHTML = ajaxRequest.responseText;
}
}
var idchamps = (document.getElementById(idChampsCntrl))?document.getElementById(idChampsCntrl):idChampsCntrl;
ajaxRequest.open(method, fichierParh+"?"+paramUrl+"="+(idchamps.value?idchamps.value:idchamps)+"&nomMethode="+nomMethode, true);
ajaxRequest.send();
return ajaxRequest; 
}

//$('#fdr_adminbundle_manutention_chauffeur').hide();
//$('#fdr_adminbundle_manutention_manutentionnaire').hide();
//$('#fdr_adminbundle_manutention_nombreManutentions').hide();
function changerManOuChauff(id)
{
    
var res = id.split("_");
var manlst = "#fdr_adminbundle_feuillederoute_manutentions_"+res[res.length-2]+"_manutentionnaire";
var chaufflst ="#fdr_adminbundle_feuillederoute_manutentions_"+res[res.length-2]+"_chauffeur";
var nbreManu ="#fdr_adminbundle_feuillederoute_manutentions_"+res[res.length-2]+"_nombreManutentions";
var ayanyManut= "#fdr_adminbundle_feuillederoute_manutentions_"+res[res.length-2]+"_ayantManutentions";
$(manlst).hide();
$(chaufflst).hide();
$(nbreManu).hide();
if(document.getElementById(id).value==='chauffeur')
{
    $(manlst).hide();
    $(manlst).attr('required',false);
    $(chaufflst).show();
    $(chaufflst).attr('required',true);
    $(ayanyManut).show();
}
else if(document.getElementById(id).value==='manutentionnaire')
{
    $(ayanyManut).hide();
    $(manlst).show();
    $(manlst).attr('required',true);
    $(chaufflst).hide();
    $(chaufflst).attr('required',false);
    $(nbreManu).show();
}
else
{
    $(manlst).prop('required',false);
    $(chaufflst).prop('required',false);
    $(ayanyManut).hide();
    $(manlst).hide();
    $(chaufflst).hide();
    $(nbreManu).hide();
}
}

function ayantManutention(id)
{
    
var res = id.split("_");
var nbreManu ="#fdr_adminbundle_feuillederoute_manutentions_"+res[res.length-2]+"_nombreManutentions";
$(nbreManu).hide();
if(document.getElementById(id).checked)
{
    $(nbreManu).show();
    
}
else
{
    $(nbreManu).hide();
}
}


function maVarAjaxClient(divSortie,total,method,fichierParh,paramUrl,nomMethode){
   var ajaxRequest; // The variable that makes Ajax possible!
try{
ajaxRequest = new XMLHttpRequest();
}catch (e){
// Internet Explorer Browsers
try{
ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
}catch (e) {
try{
ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
}catch (e){
// Something went wrong
alert("Your browser broke!");
return false;
}
}
}
ajaxRequest.onreadystatechange = function(){
if(ajaxRequest.readyState == 4 && ajaxRequest.status==200){
var ajaxDisplay = document.getElementById(divSortie);
ajaxDisplay.innerHTML = ajaxRequest.responseText;
}
}
//var idchamps = document.getElementById(idChampsCntrl);
ajaxRequest.open(method, fichierParh+"?"+paramUrl+"="+total+"&nomMethode="+nomMethode, true);

ajaxRequest.send();
return ajaxRequest; 
}

function afficherVille()
{
    var type=document.getElementById("fdr_adminbundle_typeconsommation_type").value;
    if(type==="interne")
    {
     $("select#"+"fdr_adminbundle_typeconsommation_depot,label[for='fdr_adminbundle_typeconsommation_depot']").show(200);
     document.getElementById('fdr_adminbundle_typeconsommation_depot').disabled = false; 
    }
    else if(type==="total")
    {
        $("select#"+"fdr_adminbundle_typeconsommation_depot,label[for='fdr_adminbundle_typeconsommation_depot']").hide(200);
        $("select#"+"fdr_adminbundle_typeconsommation_depot option[value='']");
       document.getElementById('fdr_adminbundle_typeconsommation_depot').disabled = true;
        
    }
}

function chargerVille()
{
    
var divSortie ="fdr_adminbundle_typeconsommation_ville";
var idChampsCntrl ="fdr_adminbundle_typeconsommation_depot";
var method = "GET";
var fichierParh = "../../php/test.php";
var paramUrl = "depot_id";
var nomMethode = "villeTypeConsommation";
var ajaxRequest=maVarAjax(divSortie,idChampsCntrl,method,fichierParh,paramUrl,nomMethode);
}

function chargerTypeConsommation(index)
{

var divSortie ="fdr_adminbundle_feuillederoute_bonCarburantHuiles_"+index+"_typeConsommation";
var idChampsCntrl ="fdr_adminbundle_feuillederoute_bonCarburantHuiles_"+index+"_ville";
var method = "GET";
var fichierParh = "../../php/test.php";
var paramUrl = "ville_id";
var nomMethode = "typeConsommation";
var ajaxRequest=maVarAjax(divSortie,idChampsCntrl,method,fichierParh,paramUrl,nomMethode);
}

/**/
function raffClientsAffr(valeur)
{
var divSortie ="fdr_adminbundle_missionaffretement_client";
var idChampsCntrl =valeur;
var method = "GET";
var fichierParh = "../../php/test.php";
var paramUrl = "encompte";
var nomMethode = "raffClientsAffr";
var ajaxRequest=maVarAjax(divSortie,idChampsCntrl,method,fichierParh,paramUrl,nomMethode);
}
function changerFiliale()
{
var divSortie ="fdr_adminbundle_feuillederoute_depot";
var idChampsCntrl ="fdr_adminbundle_feuillederoute_filiale";
var method = "GET";
var fichierParh = "../../php/test.php";
var paramUrl = "filiale_id";
var nomMethode = "depotsDeFiliale";
var ajaxRequest=maVarAjax(divSortie,idChampsCntrl,method,fichierParh,paramUrl,nomMethode);
}

function etat()
{
    
    if(document.getElementById("form_type").value==="chauffeurX")
    {
        $('#form_vehicules').hide(200);
        $('#form_vehicules').attr('required',false);
        $('#form_chauffeurs').show(200);
        $('#form_chauffeurs').attr('required',true);
        
    }
    else if (document.getElementById("form_type").value==="vehiculeX")
    {
        $('#form_chauffeurs').hide(200);
        $('#form_chauffeurs').attr('required',false);
       $('#form_vehicules').show(200);
       $('#form_vehicules').attr('required',true);
    }
    else if ((document.getElementById("form_type").value==="vehicule") ||(document.getElementById("form_type").value==="chauffeur")||(document.getElementById("form_type").value==="typeVehicule"))
    {
        $('#form_vehicules').hide(200);
        $('#form_chauffeurs').hide(200);
    }
}
/*******************************/

/*******************************/

