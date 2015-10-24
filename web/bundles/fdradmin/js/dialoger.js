jQuery(function() {
$("#usermanuel").dialog({
        autoOpen: false,
        icon: "ui-icon-pencil",
        buttons: {
            Fermer: function() {
                $(this).dialog("close");
            }
        }
    });
  
    
    $("#opener").click(function() {
        $("#usermanuel").dialog("open");
    });
    $("#info_add_client_nn_compte").dialog({
        autoOpen: false,
        icon: "ui-icon-pencil",
        minWidth: 350,
        buttons: {
            Fermer: function() {
                $(this).dialog("close");
            }
        }
    });
    $("#add_client_nn_compte").click(function() {
        $("#info_add_client_nn_compte").dialog("open");
    });
    });