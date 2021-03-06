jQuery(document).ready(function() {
    $.widget( "custom.combobox", {
      _create: function() {
        this.wrapper = $( "<div class='row-fluid'>" )
          .addClass( "span9 custom-combobox" )
          .insertBefore( this.element );
        this.element.hide();
        this._createAutocomplete();
        this._createShowAllButton();
      },
 
      _createAutocomplete: function() {
        var selected = this.element.children( ":selected" ),
                value = selected.val() ? selected.text() : "";
        this.input = $( "<input/>" )
          .appendTo(this.wrapper )
          .val( value )
          .attr({"size":"22px","placeholder":(this.element.attr('title')?this.element.attr('title'):"..."),"title":"Taper un mot clé ou utiliser les flèches pour "+this.element.attr('title'),"required":this.element.attr('required')})
          .addClass( "custom-combobox-input ui-widget ui-widget-content ui-state-default ui-corner-left" )
          .autocomplete({
            delay: 0,
            minLength: 0,
            source: $.proxy( this, "_source" )
          })
          .tooltip({
            tooltipClass: "ui-state-highlight"
          });
 
        this._on(this.input, {
          autocompleteselect: function( event, ui ) {
              if(true){
              if(ui.item.option.getAttribute("class")==="colorerOption"){ 
                var texto =  ui.item.option.text.split("|");
                if(texto[texto.length-1]===" en compte") texto.pop();
                ui.item.option.text = texto.join("|");
                $('#fdr_adminbundle_missionaffretement_montantregle').prop('disabled', true);
                $('#fdr_adminbundle_missionaffretement_montantregle').prop('checked', true);
                ui.item.option.text += "| en compte";
              }
              else{
                var texto =  ui.item.option.text.split("|");
                if(texto[texto.length-1]===" en compte") texto.pop();
                ui.item.option.text = texto.join("|");
                $('#fdr_adminbundle_missionaffretement_montantregle').prop('disabled', false);
              }
          }
            ui.item.option.selected = true;
            this._trigger( "select", event, {
              item: ui.item.option
            });
          },
 
          autocompletechange: "_removeIfInvalid"
        });
      },
 
      _createShowAllButton: function() {
        var input = this.input,
          wasOpen = false;
 
        $( "<a>" )
          .attr( "tabIndex", -1 )
          .attr( "title", "Afficher tous les éléments" )
          .tooltip()
          .appendTo( this.wrapper )
          .button({
            icons: {
              primary: "ui-icon-triangle-1-s"
            },
            text: false
          })
          .removeClass( "ui-corner-all" )
          .addClass( "custom-combobox-toggle ui-corner-right" )
          .mousedown(function() {
            wasOpen = input.autocomplete( "widget" ).is( ":visible" );
          })
          .click(function() {
              
            input.focus();
 
            // Close if already visible
            if ( wasOpen ) {
              return;
            }
            input.autocomplete( "search", "" );
          });
      },
      _source: function( request, response ) {
        var matcher = new RegExp( $.ui.autocomplete.escapeRegex(request.term), "i" );
        response( this.element.children( "option" ).map(function() {
          var text = $( this ).text();
          if ( this.value && ( !request.term || matcher.test(text) ) )
            return {
              label: text,
              value: text,
              option: this
            };
        }) );
      },
      _removeIfInvalid: function( event, ui ) {
        if ( ui.item ) {           
            chargerCompteur();
           return;
        }
        var value = this.input.val(),
          valueLowerCase = value.toLowerCase(),
          valid = false;
        this.element.children( "option" ).each(function() {
          if ( $( this ).text().toLowerCase() === valueLowerCase ) {
            this.selected = valid = true;
             chargerCompteur();
             
            return false;
          }
        });
 
        // Found a match, nothing to do
        if ( valid) {
            chargerCompteur();
          return;
        }
 
        // Remove invalid value
        this.input
          .val( "" )
          .attr( "title", "" )
          //.attr( "title", value + " est invalide " )
          .tooltip( "open" );
        this.element.val( "" );
        this._delay(function() {
          this.input.tooltip( "close" ).attr( "title", "machin" );
        }, 2500 );
        this.input.autocomplete( "instance" ).term = "";
      },
 
      _destroy: function() {
        this.wrapper.remove();
        this.element.show();
      }
    });
   // $( "select" ).combobox();
    $( "select#fdr_adminbundle_feuillederoute_vehicule" ).combobox();
    $( "select#fdr_adminbundle_missionaffretement_client" ).combobox();
    $( "select#fdr_adminbundle_missionaffretement_typeVehicule" ).combobox();
    $( "select#fdr_userbundle_user_depot" ).combobox();
    $( "select#fdr_userbundle_user_roles" ).combobox();
    $( "select#fos_user_registration_form_depot" ).combobox();
    $( "select#fos_user_registration_form_roles" ).combobox();
    $( "#toggle" ).click(function() {
    });
  });