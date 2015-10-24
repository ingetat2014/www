
    $('#fdr_adminbundle_feuillederoute_dateGeneree_date').datetimepicker({
        format: "Y-m-d",
        timepicker: false,
        datepicker: true
    });
    $('#fdr_adminbundle_feuillederoute_dateGeneree_time').datetimepicker({
        format: "H:i",
        timepicker: true,
        datepicker: false,
        step:5
    });
    //----------------------------------------------------
    $('#fdr_adminbundle_feuillederoute_dateDebutMission_date').datetimepicker({
        format: "Y-m-d",
        timepicker: false,
        datepicker: true
    });
    $('#fdr_adminbundle_feuillederoute_dateDebutMission_time').datetimepicker({
        format: "H:i",
        timepicker: true,
        datepicker: false,
        step:5
    });
    //--------------------------------------------------------------------
    $('#fdr_adminbundle_feuillederoute_dateFinMission_date').datetimepicker({
        format: "Y-m-d",
        timepicker: false,
        datepicker: true
    });
    $('#fdr_adminbundle_feuillederoute_dateFinMission_time').datetimepicker({
        format: "H:i",
        timepicker: true,
        datepicker: false,
        step:5
    });
     //boncarburant--------------------------------------
       $('#fdr_adminbundle_boncarburanthuile_date_date').datetimepicker({
        format: "Y-m-d",
        timepicker: false,
        datepicker: true
    });
    $('#fdr_adminbundle_boncarburanthuile_date_time').datetimepicker({
        format: "H:i",
        timepicker: true,
        datepicker: false,
        step:5
    });
    //indisponibilite--------------------------------------------
       $('#fdr_adminbundle_indisponibilite_datedebut_date').datetimepicker({
        format: "Y-m-d",
        timepicker: false,
        datepicker: true
    });
    $('#fdr_adminbundle_indisponibilite_datedebut_time').datetimepicker({
        format: "H:i",
        timepicker: true,
        datepicker: false,
        step:5
    });
	//--------------------------------
	   $('#fdr_adminbundle_indisponibilite_datefin_date').datetimepicker({
        format: "Y-m-d",
        timepicker: false,
        datepicker: true
    });
    $('#fdr_adminbundle_indisponibilite_datefin_time').datetimepicker({
        format: "H:i",
        timepicker: true,
        datepicker: false,
        step:5
    });
    //Miss affret-----------------
        $('#fdr_adminbundle_missionaffretement_datelivraison_date').datetimepicker({
        format: "Y-m-d",
        timepicker: false,
        datepicker: true
    });
    $('#fdr_adminbundle_missionaffretement_datelivraison_time').datetimepicker({
        format: "H:i",
        timepicker: true,
        datepicker: false,
        step:5
    });
	//--------------------------------
	   $('#fdr_adminbundle_missionaffretement_dateramassage_date').datetimepicker({
        format: "Y-m-d",
        timepicker: false,
        datepicker: true
    });
    $('#fdr_adminbundle_missionaffretement_dateramassage_time').datetimepicker({
        format: "H:i",
        timepicker: true,
        datepicker: false,
        step:5
    });
    //Modif.--------------------------------------
    $('#fdr_adminbundle_modification_dateMaj_date').datetimepicker({
        format: "Y-m-d",
        timepicker: false,
        datepicker: true
    });
    $('#fdr_adminbundle_modification_dateMaj_time').datetimepicker({
        format: "H:i",
        timepicker: true,
        datepicker: false,
        step:5
    });
    //Peage--------------------------------------------
    $('#fdr_adminbundle_peage_datePassage_date').datetimepicker({
        format: "Y-m-d",
        timepicker: false,
        datepicker: true
    });
    $('#fdr_adminbundle_peage_datePassage_time').datetimepicker({
        format: "H:i",
        timepicker: true,
        datepicker: false,
        step:5
    });
    
    //Chauffeur -----------------------
    $('#fdr_adminbundle_chauffeur_dateembauche').datetimepicker({
        format: "Y-m-d",
        timepicker: false,
        datepicker: true
    });
    //Vehicule
    $('#fdr_adminbundle_vehicule_dateLancement').datetimepicker({
        format: "Y-m-d",
        timepicker: false,
        datepicker: true
    });
    //---------User
    $('#fdr_adminbundle_user_expiresAt_date').datetimepicker({
        format: "Y-m-d",
        timepicker: false,
        datepicker: true
    });
    $('#fdr_adminbundle_user_expiresAt_time').datetimepicker({
        format: "H:i",
        timepicker: true,
        datepicker: false,
        step:5
    });
    
     //---------Reporting
    $('#form_dateDebut').datetimepicker({
        format: "Y-m-d",
        timepicker: false,
        datepicker: true
    });
    $('#form_dateFin').datetimepicker({
        format: "Y-m-d",
        timepicker: false,
        datepicker: true
    });
    
    //Parametrage
    $('#fdr_adminbundle_parametrage_heureDejeuner').datetimepicker({
        format: "H:i",
        timepicker: true,
        datepicker: false,
        step:5
    });
    $('#fdr_adminbundle_parametrage_heureDiner').datetimepicker({
        format: "H:i",
        timepicker: true,
        datepicker: false,
        step:5
    });
    $('#fdr_adminbundle_parametrage_debutNuit').datetimepicker({
        format: "H:i",
        timepicker: true,
        datepicker: false,
        step:5
    });
    $('#fdr_adminbundle_parametrage_finNuit').datetimepicker({
        format: "H:i",
        timepicker: true,
        datepicker: false,
        step:5
    });
    daterLesBons();
    function daterLesBons ()
    {
    //Bons Carburant
    $("*[id*='fdr_adminbundle_feuillederoute_bonCarburantHuiles'").hover(function (){
        //alert($(this).attr('id'));
    var res =$(this).attr('id').split("_");  
    
    var dateBon = "fdr_adminbundle_feuillederoute_bonCarburantHuiles_"+res[res.length-3]+"_date_date";
    var timeBon = "fdr_adminbundle_feuillederoute_bonCarburantHuiles_"+res[res.length-3]+"_date_time";
        if($(this).attr('id')===dateBon)
    {
        $("#"+dateBon).datetimepicker({
        format: "Y-m-d",
        timepicker: false,
        datepicker: true
       });
    }
    else if($(this).attr('id')===timeBon)
    {
       $("#"+timeBon).datetimepicker({
        format: "H:i",
        timepicker: true,
        datepicker: false,
        step:5
    }); 
    }
    });
     //Bons Peage
    $("*[id*='fdr_adminbundle_feuillederoute_peages'").hover(function (){
        //alert($(this).attr('id'));
    var res =$(this).attr('id').split("_");  
    
    var dateBon = "fdr_adminbundle_feuillederoute_peages_"+res[res.length-3]+"_datePassage_date";
    var timeBon = "fdr_adminbundle_feuillederoute_peages_"+res[res.length-3]+"_datePassage_time";
        if($(this).attr('id')===dateBon)
    {
        $("#"+dateBon).datetimepicker({
        format: "Y-m-d",
        timepicker: false,
        datepicker: true
       });
    }
    else if($(this).attr('id')===timeBon)
    {
       $("#"+timeBon).datetimepicker({
        format: "H:i",
        timepicker: true,
        datepicker: false,
        step:5
    }); 
    }
    });
    }
    
    