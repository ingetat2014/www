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

function validerForm(){
    var c = document.getElementById('fdr_adminbundle_feuillederoute_compteurReel');
    var compteur = c.value;
    if (compteur < comptrReel || compteur > comptrReel + 20)
    {
        c.setAttribute('style', 'border-top:2px solid red;border-bottom:2px solid red;border-left:2px solid red;border-right:2px solid red;');
        c.value = 'Le compteur doit être suppérieur à ' + comptrReel;
        alert("Le compteur doit être suppérieur à " + comptrReel);
        return false;
    }
    else
    {
        return true;
    }
}
function hideClient(){
    $res = $('#fdr_adminbundle_feuillederoute_typePrestation option:selected').text();
    if ($res.toLowerCase().indexOf("ram") <= -1)
    {
        $('#fdr_adminbundle_feuillederoute_clients').hide();
    }

}
function changerManOuChauff(id){

    var res = id.split("_");
    var manlst = "#fdr_adminbundle_feuillederoute_manutentions_" + res[res.length - 2] + "_manutentionnaire";
    var chaufflst = "#fdr_adminbundle_feuillederoute_manutentions_" + res[res.length - 2] + "_chauffeur";
    var nbreManu = "#fdr_adminbundle_feuillederoute_manutentions_" + res[res.length - 2] + "_nombreManutentions";
    var ayanyManut = "#fdr_adminbundle_feuillederoute_manutentions_" + res[res.length - 2] + "_ayantManutentions";
    $(manlst).hide();
    $(chaufflst).hide();
    $(nbreManu).hide();
    if (document.getElementById(id).value === 'chauffeur')
    {
        $(manlst).hide();
        $(manlst).attr('required', false);
        $(chaufflst).show();
        $(chaufflst).attr('required', true);
        $(ayanyManut).show();
    }
    else if (document.getElementById(id).value === 'manutentionnaire')
    {
        $(ayanyManut).hide();
        $(manlst).show();
        $(manlst).attr('required', true);
        $(chaufflst).hide();
        $(chaufflst).attr('required', false);
        $(nbreManu).show();
    }
    else
    {
        $(manlst).prop('required', false);
        $(chaufflst).prop('required', false);
        $(ayanyManut).hide();
        $(manlst).hide();
        $(chaufflst).hide();
        $(nbreManu).hide();
    }
}

function ayantManutention(id) {

    var res = id.split("_");
    var nbreManu = "#fdr_adminbundle_feuillederoute_manutentions_" + res[res.length - 2] + "_nombreManutentions";
    $(nbreManu).hide();
    if (document.getElementById(id).checked)
    {
        $(nbreManu).show();

    }
    else
    {
        $(nbreManu).hide();
    }
}
