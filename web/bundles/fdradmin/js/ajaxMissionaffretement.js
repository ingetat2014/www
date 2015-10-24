function raffClientsAffr(valeur)
{
var divSortie ="fdr_adminbundle_missionaffretement_client";
var idChampsCntrl =valeur;
var method = "GET";
var fichierParh = "http://"+document.getElementById("varUrlAccueil").value+"/php/test.php";
var paramUrl = "encompte";
var nomMethode = "raffClientsAffr";
var ajaxRequest=maVarAjaxRaffClientsAffr(divSortie,idChampsCntrl,method,fichierParh,paramUrl,nomMethode);
}
function maVarAjaxRaffClientsAffr(divSortie,idChampsCntrl,method,fichierParh,paramUrl,nomMethode){
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
if(ajaxRequest.readyState === 4 && ajaxRequest.status===200){
var ajaxDisplay = document.getElementById(divSortie);
ajaxDisplay.innerHTML = ajaxRequest.responseText;
}
};
var idchamps = (document.getElementById(idChampsCntrl))?document.getElementById(idChampsCntrl):idChampsCntrl;
ajaxRequest.open(method, fichierParh+"?"+paramUrl+"="+(idchamps.value?idchamps.value:idchamps)+"&nomMethode="+nomMethode, true);
ajaxRequest.send();
return ajaxRequest; 
}