<?php

/* FdrAdminBundle:FeuilleDeRoute:apercu.html.twig */
class __TwigTemplate_48cfa6de0c1278be36c5aea6e4944d9722d1b8d1d5ebb59692fc65967e819e29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
        <meta name=\"description\" content=\"\"/>
        <meta name=\"author\" content=\"\"/>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <!--link type=\"text/css\" rel=\"stylesheet\" href=\"./imprime.css\" /-->
        <style type=\"text/css\">
            table fieldset table tr td,table fieldset table tr th{
                padding-bottom: 1px;
                width: 280px;
                background-color: transparent;
                max-width: 280px;
                margin-left: 10px;
                margin-right: 10px;
                vertical-align: top;
            }
            tr,table tr td table tr th{
                padding: 3px;
            }
            legend{
                color: blue;
                background-color: white;
                border:1px outset #FBE1E1;
                padding: 8px;
                alignment-adjust: central;
                text-align: center;
                float: right;
            }
            span.nb{
                font-size: xx-small;
                color: #0000A8;
            }
            h2{
                position: absolute;
                text-align: center;
                float: inside;
                color:#699FCD;
                font-style:italic;
            }
            fieldset{
                border:1px outset #FBE1E1;
                padding: 2px;
                margin: 2px;
                width: 300px;
            }
           hr.header {
               width: 100%;
               border: none;
               background-color: #DDDDFF;
               border-top: solid 0.2mm #F00;
               padding: 2mm;
           }
           textarea:first-child{
               background-color: yellow;
               font-weight: bolder;
           }
        </style>
        
    </head>
    <body>
        
        <img src=\"./bundles/fdradmin/images/ctm.png\" alt=\"CTM\" title=\"CTM ME\" />
        <h2>Imprimé de Feuille de route (";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "html", null, true);
        echo ")</h2><hr class=\"header\"/>
        
        <table>
            <tr>
                <td>
                    <fieldset>
                        <legend >Information sur impression : <span class=\"nb\">[[page_nb]] page(s)</span></legend>
                        <table>
                            <tr><th>Code de la feuille  </th><td> ";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td></tr>
                            <tr><th>Etat de la feuille  </th><td>";
        // line 75
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array())), "html", null, true);
        echo "</td> </tr>
                            <tr>
                                <th>Date/Heure d'impression  </th>
                                <td>";
        // line 78
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d-m-Y H:i"), "html", null, true);
        echo "</td> </tr>
                            <tr>
                                <th>Utilisateur </th>
                                <td>";
        // line 81
        echo twig_escape_filter($this->env, ((((($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()) . " ") . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array())) . " (") . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "matricule", array())) . ")"), "html", null, true);
        echo "</td></tr>
                        </table>
                    </fieldset>
                </td>
            </tr>

            <tr>
                <td>
                    <fieldset>
                        <legend >Déroulement de mission</legend>
                        <table>

                            <tr>
                                <th>Date début de mission </th>
                                <td>";
        // line 95
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateDebutMission", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateDebutMission", array()), "d-m-Y H:i"), "html", null, true);
        }
        echo "</td>
                            </tr>
                            ";
        // line 97
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()) === "cloturer")) {
            // line 98
            echo "                            <tr>
                                <th>Date Fin de mission </th>
                                <td>";
            // line 100
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateFinMission", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateFinMission", array()), "d-m-Y H:i"), "html", null, true);
            }
            echo "</td>
                            </tr>
                            ";
        }
        // line 103
        echo "                            <tr>
                                <th>Dépôt-Filiale </th>
                                <td>";
        // line 105
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "depot", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "depot", array()), "------")) : ("------")), "html", null, true);
        echo "</td>
                            </tr>
                            ";
        // line 107
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "missionAffretement", array())) {
            // line 108
            echo "                            <tr>
                                <th>Date/Lieu de Ramassage </th>
                                <td>";
            // line 110
            echo twig_escape_filter($this->env, ((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "missionAffretement", array()), "dateramassage", array()), "d-m-Y H:i") . " / ") . (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "missionAffretement", array(), "any", false, true), "lieuramassage", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "missionAffretement", array(), "any", false, true), "lieuramassage", array()), "------")) : ("------"))), "html", null, true);
            echo "</td>
                            </tr>
                            <tr>
                                <th>Date/Lieu de Livraison </th>
                                <td>";
            // line 114
            echo twig_escape_filter($this->env, ((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "missionAffretement", array()), "datelivraison", array()), "d-m-Y H:i") . " / ") . (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "missionAffretement", array(), "any", false, true), "lieulivraison", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "missionAffretement", array(), "any", false, true), "lieulivraison", array()), "------")) : ("------"))), "html", null, true);
            echo "</td>
                            </tr>
                            ";
        }
        // line 117
        echo "                            <tr>
                                <th>Vehicule  </th>
                                <td>";
        // line 119
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "vehicule", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "vehicule", array()), "------")) : ("------")), "html", null, true);
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "missionAffretement", array())) {
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "missionAffretement", array()), "typeVehicule", array()), "html", null, true);
            echo ")";
        }
        echo "</td>
                            </tr>
                            <tr>
                                <th>Compteur réel </th>
                                <td>";
        // line 123
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "compteurReel", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "compteurReel", array()), "------")) : ("------")), "html", null, true);
        echo "</td>
                            </tr>
                            ";
        // line 125
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()) === "cloturer")) {
            // line 126
            echo "                            <tr>
                                <th>Compteur final </th>
                                <td>";
            // line 128
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "compteurFinal", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "compteurFinal", array()), "------")) : ("------")), "html", null, true);
            echo "</td>
                            </tr>
                            ";
        }
        // line 131
        echo "                            <tr>
                                <th>Prestation </th>
                                <td>
                                  ";
        // line 134
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "typePrestation", array()), "html", null, true);
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "missionAffretement", array())) {
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "missionAffretement", array()), "html", null, true);
            echo ") ";
        }
        // line 135
        echo "                                </td>
                            </tr>
                            ";
        // line 137
        if ( !$this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "missionAffretement", array())) {
            // line 138
            echo "                            <tr>
                                <th>Secteur(s) </th>
                                <td>
                ";
            // line 141
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "secteurs", array()));
            $context['_iterated'] = false;
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["secteur"]) {
                // line 142
                echo "                                        - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["secteur"], "libelle", array()), "html", null, true);
                echo " ";
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo " <br/>";
                }
                // line 143
                echo "                ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 144
                echo "                                       
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['secteur'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 146
            echo "                                    </td>
                            </tr>                                                     
                            ";
        } else {
            // line 149
            echo "                            <tr>
                                <th>Client Expéditeur  </th>
                                <td>
                                    <strong><font style=\"color: ";
            // line 152
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "missionAffretement", array()), "client", array()), "encompte", array())) {
                echo "blue ";
            } else {
                echo "black ";
            }
            echo "\" >";
            echo twig_escape_filter($this->env, trim($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "missionAffretement", array()), "client", array()), "*/"), "html", null, true);
            echo "</font></strong>
                                </td>
                            </tr>
                            <tr>
                                <th>Client Destinataire  </th>
                                <td>
                                    <strong><font style=\"color:black\">";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "missionAffretement", array()), "clientDestinataire", array()), "html", null, true);
            echo "</font></strong>
                                </td>
                            </tr>
                            <tr>
                                <th>Bon de livraison / Numéro d'expédition </th>
                                <td>";
            // line 163
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "missionAffretement", array(), "any", false, true), "bonlivraison", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "missionAffretement", array(), "any", false, true), "bonlivraison", array()), "------")) : ("------")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "missionAffretement", array(), "any", false, true), "numexpedition", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "missionAffretement", array(), "any", false, true), "numexpedition", array()), "------")) : ("------")), "html", null, true);
            echo "</td>
                            </tr>
                            <tr>
                                <th>Nature de colis/Qte </th>
                                <td>";
            // line 167
            echo twig_escape_filter($this->env, (((($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "missionAffretement", array(), "any", false, true), "naturemarchandise", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "missionAffretement", array(), "any", false, true), "naturemarchandise", array()), "--")) : ("--")) . " / ") . (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "missionAffretement", array(), "any", false, true), "nbrecolis", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "missionAffretement", array(), "any", false, true), "nbrecolis", array()), "--")) : ("--"))), "html", null, true);
            echo "</td>
                            </tr>
                            <tr>
                                <th>Nom/Tel du responsable </th>
                                <td>";
            // line 171
            echo twig_escape_filter($this->env, (((($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "missionAffretement", array(), "any", false, true), "nomresponsable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "missionAffretement", array(), "any", false, true), "nomresponsable", array()), "--")) : ("--")) . " / ") . (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "missionAffretement", array(), "any", false, true), "telresponsable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "missionAffretement", array(), "any", false, true), "telresponsable", array()), "--")) : ("--"))), "html", null, true);
            echo "</td>
                            </tr>
                            <tr>
                                <th>Etat de Montant</th>
                                <td>
 ";
            // line 176
            if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "missionAffretement", array()), "montantregle", array()) || $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "missionAffretement", array()), "client", array()), "encompte", array()))) {
                // line 177
                echo "                                    Réglé
 ";
            } else {
                // line 179
                echo "                                    Non réglé
";
            }
            // line 181
            echo "
                                </td>
                            </tr>
                            
                           ";
        }
        // line 186
        echo "                        </table>
                    </fieldset>
                </td></tr>
            </table>
        ";
        // line 190
        if ( !$this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "missionAffretement", array())) {
            // line 191
            echo "    <legend style=\"padding-top: 2px;padding-bottom: 2px;padding-left: 5px;padding-right: 5px;margin: 2px;\">Les clients <span class=\"nb\"> (Total : ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "clientFdrVs", array())), "html", null, true);
            echo ")</span> </legend>
       <div style=\"width: 100%;display: inline-block;\" disabled>
           ";
            // line 193
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "clientFdrVs", array()));
            $context['_iterated'] = false;
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["cl"]) {
                // line 194
                echo "           ";
                if (((0 == $this->getAttribute($context["loop"], "index0", array()) % 3) &&  !$this->getAttribute($context["loop"], "first", array()))) {
                    echo " <hr style=\"color: transparent;margin:-10px;padding: 5mm;\"/>";
                }
                echo " 
           
           <textarea class=\"apercu\" rows=\"1\" cols=\"25\" style=\";margin-bottom:0px;text-align: left;background-color: #FFFFFF;border:2px solid black;color:";
                // line 196
                if ($this->getAttribute($this->getAttribute($context["cl"], "client", array()), "encompte", array())) {
                    echo "blue ";
                } else {
                    echo "black ";
                }
                echo "\">
            ";
                // line 197
                echo twig_escape_filter($this->env, ((twig_upper_filter($this->env, $this->getAttribute($context["loop"], "index", array())) . ". ") . twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, trim($this->getAttribute($context["cl"], "client", array()), "*/")))), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["cl"], "secteur", array()))), "html", null, true);
                echo ")
           </textarea>
                     
                 
                ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 202
                echo "           <input type=\"text\" value=\"Aucun client n'a été spécifié\"/>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cl'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 204
            echo "        </div>
                        
       ";
        }
        // line 207
        echo "                <table>
            <tr> <td>

                    <fieldset><legend>Chauffeur(s)/Manutentionnaire(s) </legend>
                        <table>
                            <tr>
                                <td>Nombre de manutentions : ";
        // line 213
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombreManutention", array()), "html", null, true);
        echo " </td>
                                <td>
                                   
                ";
        // line 216
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "manutentions", array()));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["man"]) {
            // line 217
            echo "                                       - ";
            echo twig_escape_filter($this->env, $context["man"], "html", null, true);
            echo " ";
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo " <br/>";
            }
            // line 218
            echo "                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 219
            echo "                                        Aucun
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['man'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 221
        echo "                                </td>
                            </tr>

   ";
        // line 224
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomManExterne1", array())) {
            // line 225
            echo "                            <tr>
                                <th>Manutentionnaire externe </th>
                                <td>

                ";
            // line 229
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomManExterne1", array()), "html", null, true);
            echo " CIN: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cinManExterne1", array()), "html", null, true);
            echo "
                                </td>
                            </tr>
    ";
        }
        // line 233
        echo "    ";
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomManExterne2", array())) {
            // line 234
            echo "                            <tr>
                                <th>Manutentionnaire externe </th>
                                <td>

                ";
            // line 238
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomManExterne2", array()), "html", null, true);
            echo " CIN: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cinManExterne2", array()), "html", null, true);
            echo "
                                </td>
                            </tr>
    ";
        }
        // line 242
        echo "                        </table>
                    </fieldset>
                </td></tr>
            <tr><td>
        ";
        // line 246
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()) === "cloturer")) {
            // line 247
            echo "                    ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "peages", array())) > 0)) {
                // line 248
                echo "                        <table border=\"1px\" bordercolor=\"#FBE1E1\" style=\"padding: 2px;\">
                            <tr border=\"0px\" ><td style=\"background-color: #FFECEC\" rowspan=\"";
                // line 249
                echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "peages", array())) + 1), "html", null, true);
                echo "\">Bons Peage</td>
                            <th style=\"background-color: #EAEAFF\">Numéro</th>
                            <th style=\"background-color: #EAEAFF\">Date passage</th>
                            <th style=\"background-color: #EAEAFF;width: 30px;\">Lieu passage</th>
                            <th style=\"background-color: #EAEAFF\">Montant </th>
                            </tr>
                            ";
                // line 255
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "peages", array()));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["bonPeage"]) {
                    // line 256
                    echo "                            <tr>
                                <td style=\"width: 100px;\">";
                    // line 257
                    echo twig_escape_filter($this->env, $this->getAttribute($context["bonPeage"], "numCarte", array()), "html", null, true);
                    echo "</td>
                                <td style=\"width: 120px;\">";
                    // line 258
                    if ($this->getAttribute($context["bonPeage"], "datePassage", array())) {
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["bonPeage"], "datePassage", array()), "d-m-Y H:i"), "html", null, true);
                    }
                    echo "</td>
                                <td style=\"width: 140px;\">";
                    // line 259
                    echo twig_escape_filter($this->env, $this->getAttribute($context["bonPeage"], "lieu", array()), "html", null, true);
                    echo "</td>
                                <td style=\"width: 100px;\">";
                    // line 260
                    echo twig_escape_filter($this->env, ($this->getAttribute($context["bonPeage"], "montant", array()) . " Dhs"), "html", null, true);
                    echo "</td>
                            </tr>
                              ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 263
                    echo "                            <tr><td colspan=\"3\">Aucun bon de péage n'a été enregistré.</td></tr>\t
                              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bonPeage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 265
                echo "                        </table>
                    ";
            }
            // line 267
            echo "                </td>
            </tr>
            <tr><td>
                       ";
            // line 270
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "bonCarburantHuiles", array())) > 0)) {
                // line 271
                echo "                        <table border=\"1px\" bordercolor=\"#FBE1E1\" style=\"padding: 2px;\">
                            <tr><td style=\"background-color: #FFECEC\" rowspan=\"";
                // line 272
                echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "bonCarburantHuiles", array())) + 1), "html", null, true);
                echo "\">Bons de<br/> Carburants<br/> et Huiles</td>
                            <th style=\"background-color: #EAEAFF\">Numéro</th>
                            <th style=\"background-color: #EAEAFF\">Lieu prise</th>
                            <th style=\"background-color: #EAEAFF\">Ville prise</th>
                            <th style=\"background-color: #EAEAFF;\">Date prise</th>
                            <th style=\"background-color: #EAEAFF\">Qté(L)</th>
                            <th style=\"background-color: #EAEAFF\">P.U.</th>
                            <th style=\"background-color: #EAEAFF\">Montant</th>
                            <th style=\"background-color: #EAEAFF\">Compteur</th>
                            </tr>
                            ";
                // line 282
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "bonCarburantHuiles", array()));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["bon"]) {
                    // line 283
                    echo "                            <tr>
                                <td style=\"width: 40px;\">";
                    // line 284
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["bon"], "numCarte", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["bon"], "numCarte", array()), "-----")) : ("-----")), "html", null, true);
                    echo "</td>
                                <td style=\"width: 80px;\">";
                    // line 285
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["bon"], "lieu", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["bon"], "lieu", array()), "-----")) : ("-----")), "html", null, true);
                    echo "</td>
                                <td style=\"width: 80px;\">";
                    // line 286
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["bon"], "ville", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["bon"], "ville", array()), "-----")) : ("-----")), "html", null, true);
                    echo "</td>
                                <td style=\"width: 80px;\">";
                    // line 287
                    if ($this->getAttribute($context["bon"], "date", array())) {
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["bon"], "date", array()), "Y/m/d H:i"), "html", null, true);
                    }
                    echo "</td>
                                <td style=\"width: 30px;\">";
                    // line 288
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["bon"], "quantite", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["bon"], "quantite", array()), "-----")) : ("-----")), "html", null, true);
                    echo "</td>
                                <td style=\"width: 50px;\">";
                    // line 289
                    echo twig_escape_filter($this->env, ($this->getAttribute($context["bon"], "prixUnitaire", array()) . _twig_default_filter(" Dhs", "-----")), "html", null, true);
                    echo "</td>
                                <td style=\"width: 50px;\">";
                    // line 290
                    echo twig_escape_filter($this->env, ($this->getAttribute($context["bon"], "montant", array()) . _twig_default_filter(" Dhs", "-----")), "html", null, true);
                    echo "</td>               
                                <td style=\"width: 40px;\">";
                    // line 291
                    echo twig_escape_filter($this->env, $this->getAttribute($context["bon"], "compteur", array()), "html", null, true);
                    echo "</td>
                            </tr>
                            ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 294
                    echo "                            <tr><td colspan=\"8\">Aucun bon de Carburant n'a été enregistré.</td></tr>
                             ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bon'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 296
                echo "                        </table>
                    ";
            }
            // line 298
            echo "                </td>
            </tr>
            <tr><td>


                        <table border=\"1px\" bordercolor=\"#FBE1E1\" style=\"padding: 2px;\">
                             <tr>
                             <th style=\"background-color: #F2F2FF;text-align: center;\" colspan=\"11\">Synthèse des calculs</th> 
                             </tr>
                            <tr>
                             <th style=\"background-color: #EAEAFF\" rowspan=\"2\">Différence</th>                      
                                <th style=\"background-color: #EAEAFF\" rowspan=\"2\">Distance</th>                              

                                <th style=\"background-color: #EAEAFF\" rowspan=\"2\">Qté<br/>totale</th>                              

                                <th style=\"background-color: #EAEAFF\" rowspan=\"2\">Nbre<br/>prises</th>                         

                                <th style=\"background-color: #EAEAFF\" rowspan=\"2\">Nbre<br/>jours</th>                              

                                                             

                                <th style=\"background-color: #EAEAFF\" colspan=\"4\">Bénificier de :</th>

                                <th style=\"background-color: #EAEAFF\" colspan=\"2\">Montant total </th>
                            </tr>
                            <tr>
                                <td style=\"background-color: #EAEAFF\">Petit Déj.</td> 
                                
                                <td style=\"background-color: #EAEAFF\">Repas</td>
                                
                                <td style=\"background-color: #EAEAFF\">Découch.</td> 
                                <td style=\"background-color: #EAEAFF\">Prim. <br/>Remorq.</td> 
                                
                                
                                <td style=\"background-color: #EAEAFF\">Carburant</td> 
                               
                                <td style=\"background-color: #EAEAFF\">Péage</td> 
                               
                            </tr>
                            <tr>
                                <td style=\"background-color:";
            // line 338
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "calcDiffKm", array()) > 10)) {
                echo "red";
            } else {
                echo "transparent";
            }
            echo "\">";
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "calcDiffKm", array()) . _twig_default_filter(" Km", "------")), "html", null, true);
            echo "</td>
                                <td style=\"width: 50px;\">";
            // line 339
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "calcKmParcourus", array()) . _twig_default_filter(" Km", "------")), "html", null, true);
            echo "</td>
                                <td style=\"width: 40px;\">";
            // line 340
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "calcQuantite", array()) . _twig_default_filter(" L", "------")), "html", null, true);
            echo "</td>
                                <td style=\"width: 40px;\">";
            // line 341
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "calcPrise", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "calcPrise", array()), "------")) : ("------")), "html", null, true);
            echo "</td>
                                <td style=\"width: 30px;\">";
            // line 342
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "calcNbJours", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "calcNbJours", array()), "------")) : ("------")), "html", null, true);
            echo "</td> 
                                
                                <td style=\"width: 40px;\">";
            // line 344
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "calcNbPetitDej", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "calcNbPetitDej", array()), "------")) : ("------")), "html", null, true);
            echo "</td>
                                <td style=\"width: 40px;\">";
            // line 345
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "calcNbRepas", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "calcNbRepas", array()), "------")) : ("------")), "html", null, true);
            echo "</td>
                                <td style=\"width: 40px;\">";
            // line 346
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "calcNbDecoucher", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "calcNbDecoucher", array()), "------")) : ("------")), "html", null, true);
            echo "</td>
                                <td style=\"width: 40px;\">";
            // line 347
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "primeRemorque", array())) {
                echo "Oui";
            } else {
                echo "Non";
            }
            echo "</td>
                                <td style=\"width: 70px;\">";
            // line 348
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "calcMontantCarburant", array()) . _twig_default_filter(" Dhs", "------")), "html", null, true);
            echo "</td>
                                <td style=\"width: 60px;\">";
            // line 349
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "calcMontantPeage", array()) . _twig_default_filter(" Dhs", "------")), "html", null, true);
            echo "</td>
                            </tr>
                            
                            
                                
                            
                        </table>
                </td></tr>
        </table>
        ";
        } else {
            // line 358
            echo " 

        <table><tr><th>Compteur final : &nbsp;.............</th></tr>
            <tr><td border=\"0px\">
                    <table border=\"1px\" bordercolor=\"#FBE1E1\" style=\"padding: 2px;\">
                        <tr border=\"0px\" ><td style=\"background-color: #FFECEC\" rowspan=\"5\">Bons De Peage</td>
                            <th style=\"background-color: #EAEAFF\">Numéro</th>
                            <th style=\"background-color: #EAEAFF\">Date de passage</th>
                            <th style=\"background-color: #EAEAFF\">Lieu de passage</th>
                            <th style=\"background-color: #EAEAFF\">Montant </th>
                            <th rowspan=\"5\" border=\"0px\">Remarques &agrave; ajouter :<br/>
                                <textarea class=\"desactiver-champs\" cols=\"18\" rows=\"5\" placeholder=\"\" ></textarea></th>
                        </tr>    
            ";
            // line 371
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(0, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 372
                echo "                        <tr>
                ";
                // line 373
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(range(0, 3));
                foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                    echo "<td>&nbsp;</td>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 374
                echo "                        </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 376
            echo "                    </table>
                </td> 
            </tr>
            <tr>
                <td>

                    <table border=\"1px\" bordercolor=\"#FBE1E1\" style=\"padding: 2px;\">
                        <tr><td rowspan=\"5\" style=\"background-color: #FFECEC\">Bons de<br/> Carburants<br/> et Huiles</td>
                            <th style=\"background-color: #EAEAFF\">Numéro</th>
                            <th style=\"background-color: #EAEAFF\">Lieu de prise</th>
                            <th style=\"background-color: #EAEAFF\">Ville de prise</th>
                            <th style=\"background-color: #EAEAFF\">Date de prise</th>
                            <th style=\"background-color: #EAEAFF\">Qté(L)</th>
                            <th style=\"background-color: #EAEAFF\">P.U.</th>
                            <th style=\"background-color: #EAEAFF\">Montant</th>
                            <th style=\"background-color: #EAEAFF\">Compteur</th>
                        </tr> 
            ";
            // line 393
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(0, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 394
                echo "                        <tr>
                ";
                // line 395
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(range(0, 7));
                foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                    echo "<td>&nbsp;</td>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 396
                echo "                        </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 398
            echo "                    </table>
                </td></tr>
            
        </table>
    </td></tr>
</table>
          ";
        }
        // line 405
        echo "
<page_footer>
     &copy; Copyright &copy;  ";
        // line 407
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " / <a href=\"http://www.ctm-messagerie.ma/\" title=\"ctmMess\">CTM Messagerie</a>
    </page_footer>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "FdrAdminBundle:FeuilleDeRoute:apercu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  879 => 407,  875 => 405,  866 => 398,  859 => 396,  850 => 395,  847 => 394,  843 => 393,  824 => 376,  817 => 374,  808 => 373,  805 => 372,  801 => 371,  786 => 358,  773 => 349,  769 => 348,  761 => 347,  757 => 346,  753 => 345,  749 => 344,  744 => 342,  740 => 341,  736 => 340,  732 => 339,  722 => 338,  680 => 298,  676 => 296,  669 => 294,  661 => 291,  657 => 290,  653 => 289,  649 => 288,  643 => 287,  639 => 286,  635 => 285,  631 => 284,  628 => 283,  623 => 282,  610 => 272,  607 => 271,  605 => 270,  600 => 267,  596 => 265,  589 => 263,  581 => 260,  577 => 259,  571 => 258,  567 => 257,  564 => 256,  559 => 255,  550 => 249,  547 => 248,  544 => 247,  542 => 246,  536 => 242,  527 => 238,  521 => 234,  518 => 233,  509 => 229,  503 => 225,  501 => 224,  496 => 221,  489 => 219,  476 => 218,  469 => 217,  451 => 216,  445 => 213,  437 => 207,  432 => 204,  425 => 202,  405 => 197,  397 => 196,  389 => 194,  371 => 193,  365 => 191,  363 => 190,  357 => 186,  350 => 181,  346 => 179,  342 => 177,  340 => 176,  332 => 171,  325 => 167,  316 => 163,  308 => 158,  293 => 152,  288 => 149,  283 => 146,  276 => 144,  263 => 143,  256 => 142,  238 => 141,  233 => 138,  231 => 137,  227 => 135,  220 => 134,  215 => 131,  209 => 128,  205 => 126,  203 => 125,  198 => 123,  186 => 119,  182 => 117,  176 => 114,  169 => 110,  165 => 108,  163 => 107,  158 => 105,  154 => 103,  146 => 100,  142 => 98,  140 => 97,  133 => 95,  116 => 81,  110 => 78,  104 => 75,  100 => 74,  89 => 66,  28 => 8,  19 => 1,);
    }
}
