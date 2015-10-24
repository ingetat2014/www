jQuery(function() {
    $(".desactiver-champs *").attr('disabled', 'disabled');
    $(":text,:password,input[type='email']").addClass("input-sm");
    $("legend[class!='subfieldset']").addClass("alert-info");
    $(".page,.first,.next,.last,.previous").addClass("btn btn-default supp");
    $(".page,.current").addClass("supp");
    $('#actualiser_client_nn_compte').click(function() {
        $('#fdr_adminbundle_missionaffretement_client').css({'border-color': 'green'});
    });

});

/***********Menu*****************/
$('a#profil').click(function(b) {
    e.preventDefault();
});
$('a#autreGestion').click(function(e) {
    e.preventDefault();
});

/***********Stylesheet**************/
$("select#fdr_adminbundle_missionaffretement_client option").each(function() {

    if ((this.text.substr(0, 2)) === "*/")
    {
        $(this).text(this.text.substr(2)).addClass("colorerOption");
    }
});

$("select#fdr_adminbundle_missionaffretement_client").change(
        function() {

            if ($("option:selected").hasClass("colorerOption"))
            {
                $("#infoencompte").remove();
                $('#fdr_adminbundle_missionaffretement_montantregle').prop('disabled', true);
                $('#fdr_adminbundle_missionaffretement_montantregle').prop('checked', true);
                $("select#fdr_adminbundle_missionaffretement_client option:selected").append("<div class='span1' class='colorerOption' id='infoencompte'> | en compte</div>");
            }
            else
            {
                $("#infoencompte").remove();
                $('#fdr_adminbundle_missionaffretement_montantregle').prop('disabled', false);
                //$('#fdr_adminbundle_missionaffretement_montantregle').attr('selected',false);
            }

        });

if ($("#fdr_adminbundle_missionaffretement_client option:selected").hasClass("colorerOption"))

{
    $("#infoencompte").remove();
    $("#fdr_adminbundle_missionaffretement_client option:selected").append("<div class='span1' class='colorerOption' id='infoencompte'> | en compte</div>");
    $('#fdr_adminbundle_missionaffretement_montantregle').prop('disabled', true);
    $('#fdr_adminbundle_missionaffretement_montantregle').prop('checked', true);
}
else
{
    $('#fdr_adminbundle_missionaffretement_montantregle').prop('disabled', false);
    $("#infoencompte").remove();
}

/***********edit-typeConsomm*******/

/***********edit-fdr*******/
/*
 $("select#fdr_adminbundle_feuillederoute_clients option").each(function() {
    if (this.text === $('#fdr_adminbundle_missionaffretement_hid_clientsFdrF').val())
    {
        $(this).prop("selected", true);
    }
    else
    {
        $(this).prop("selected", false);
    }
});
*/
/***********edit-user*******/
$("select#fdr_userbundle_user_roles option").each(function() {
    if (this.text === $('#fdr_userbundle_user_hid_role').val())
    {
        $(this).prop("selected", true);
    }
    else
    {
        $(this).prop("selected", false);
    }
});
/***********-fdr*******/
$("select#fdr_adminbundle_feuillederoute_typePrestation option").each(function() {
    if (this.text.toLowerCase().indexOf('aff') > -1)
        $("select#fdr_adminbundle_feuillederoute_typePrestation option[value='" + this.value + "']").hide();
});
/****************secteur*****************/
$("select#fdr_adminbundle_secteur_typePrestations option").each(function() {
    if (this.text.toLowerCase().indexOf('aff') > -1)
        $("select#fdr_adminbundle_secteur_typePrestations option[value='" + this.value + "']").hide();
});

/**************************Fin************************/