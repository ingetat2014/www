<?php

/* FdrAdminBundle:FeuilleDeRoute:apercuu.html.twig */
class __TwigTemplate_b581ac57936bcfd3268fcca68a766a0ef4284a6067c12507319ccce2e23358b2 extends Twig_Template
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
           hr {width: 100%; border: none; background-color: #DDDDFF; border-top: solid 1mm #F00; padding: 2mm}
        </style>
    </head>
    <body>
        <img src=\"./bundles/fdradmin/images/ctm.png\" alt=\"CTM\" title=\"CTM ME\" />
       <h2>Imprimé de Feuille de route (";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "html", null, true);
        echo ")</h2><hr/>
        
        <table>
            <tr>
                <td>
                    <fieldset>
                        <legend >Information sur impression : <span class=\"nb\">[[page_nb]] page(s)</span></legend>
                        <table>
                            <tr><th>Code de la feuille  </th><td> ";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td></tr>
                            <tr><th>Etat de la feuille  </th><td>";
        // line 63
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array())), "html", null, true);
        echo "</td> </tr>
                            <tr>
                                <th>Date/Heure d'impression  </th>
                                <td>";
        // line 66
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d-m-Y H:i"), "html", null, true);
        echo "</td> </tr>
                            <tr>
                                <th>Utilisateur </th>
                                <td>";
        // line 69
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
        // line 83
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateDebutMission", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateDebutMission", array()), "d-m-Y H:i"), "html", null, true);
        }
        echo "</td>
                            </tr>
                            ";
        // line 85
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()) === "cloturer")) {
            // line 86
            echo "                            <tr>
                                <th>Date Fin de mission </th>
                                <td>";
            // line 88
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateFinMission", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateFinMission", array()), "d-m-Y H:i"), "html", null, true);
            }
            echo "</td>
                            </tr>
                            ";
        }
        // line 91
        echo "                            <tr>
                                <th>Dépôt-Filiale </th>
                                <td>";
        // line 93
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "depot", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "depot", array()), "------")) : ("------")), "html", null, true);
        echo "</td>
                            </tr>
                            ";
        // line 95
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "missionAffretement", array())) {
            // line 96
            echo "                            <tr>
                                <th>Date/Lieu de Ramassage </th>
                                <td>";
            // line 98
            echo twig_escape_filter($this->env, ((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "missionAffretement", array()), "dateramassage", array()), "d-m-Y H:i") . " / ") . (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "missionAffretement", array(), "any", false, true), "lieuramassage", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "missionAffretement", array(), "any", false, true), "lieuramassage", array()), "------")) : ("------"))), "html", null, true);
            echo "</td>
                            </tr>
                            <tr>
                                <th>Date/Lieu de Livraison </th>
                                <td>";
            // line 102
            echo twig_escape_filter($this->env, ((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "missionAffretement", array()), "datelivraison", array()), "d-m-Y H:i") . " / ") . (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "missionAffretement", array(), "any", false, true), "lieulivraison", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "missionAffretement", array(), "any", false, true), "lieulivraison", array()), "------")) : ("------"))), "html", null, true);
            echo "</td>
                            </tr>
                            ";
        }
        // line 105
        echo "                            <tr>
                                <th>Vehicule  </th>
                                <td>";
        // line 107
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
        // line 111
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "compteurReel", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "compteurReel", array()), "------")) : ("------")), "html", null, true);
        echo "</td>
                            </tr>
                            ";
        // line 113
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()) === "cloturer")) {
            // line 114
            echo "                            <tr>
                                <th>Compteur final </th>
                                <td>";
            // line 116
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "compteurFinal", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "compteurFinal", array()), "------")) : ("------")), "html", null, true);
            echo "</td>
                            </tr>
                            ";
        }
        // line 119
        echo "                            <tr>
                                <th>Prestation </th>
                                <td>
                                  ";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "typePrestation", array()), "html", null, true);
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "missionAffretement", array())) {
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "missionAffretement", array()), "html", null, true);
            echo ") ";
        }
        // line 123
        echo "                                </td>
                            </tr>
                            ";
        // line 125
        if ( !$this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "missionAffretement", array())) {
            // line 126
            echo "                            <tr>
                                <th>Secteur(s) </th>
                                <td>
                ";
            // line 129
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
                // line 130
                echo "                                        - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["secteur"], "libelle", array()), "html", null, true);
                echo " ";
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo " <br/>";
                }
                // line 131
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
                // line 132
                echo "                                       
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['secteur'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "                                    </td>
                            </tr>                                                     
                            ";
        } else {
            // line 137
            echo "                            <tr>
                                <th>Client Expéditeur  </th>
                                <td>
                                    <strong><font style=\"color: ";
            // line 140
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
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "missionAffretement", array()), "clientDestinataire", array()), "html", null, true);
            echo "</font></strong>
                                </td>
                            </tr>
                            <tr>
                                <th>Bon de livraison / Numéro d'expédition </th>
                                <td>";
            // line 151
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "missionAffretement", array(), "any", false, true), "bonlivraison", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "missionAffretement", array(), "any", false, true), "bonlivraison", array()), "------")) : ("------")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "missionAffretement", array(), "any", false, true), "numexpedition", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "missionAffretement", array(), "any", false, true), "numexpedition", array()), "------")) : ("------")), "html", null, true);
            echo "</td>
                            </tr>
                            <tr>
                                <th>Nature de colis/Qte </th>
                                <td>";
            // line 155
            echo twig_escape_filter($this->env, (((($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "missionAffretement", array(), "any", false, true), "naturemarchandise", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "missionAffretement", array(), "any", false, true), "naturemarchandise", array()), "--")) : ("--")) . " / ") . (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "missionAffretement", array(), "any", false, true), "nbrecolis", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "missionAffretement", array(), "any", false, true), "nbrecolis", array()), "--")) : ("--"))), "html", null, true);
            echo "</td>
                            </tr>
                            <tr>
                                <th>Nom/Tel du responsable </th>
                                <td>";
            // line 159
            echo twig_escape_filter($this->env, (((($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "missionAffretement", array(), "any", false, true), "nomresponsable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "missionAffretement", array(), "any", false, true), "nomresponsable", array()), "--")) : ("--")) . " / ") . (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "missionAffretement", array(), "any", false, true), "telresponsable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "missionAffretement", array(), "any", false, true), "telresponsable", array()), "--")) : ("--"))), "html", null, true);
            echo "</td>
                            </tr>
                            <tr>
                                <th>Etat de Montant</th>
                                <td>
 ";
            // line 164
            if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "missionAffretement", array()), "montantregle", array()) || $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "missionAffretement", array()), "client", array()), "encompte", array()))) {
                // line 165
                echo "                                    Réglé
 ";
            } else {
                // line 167
                echo "                                    Non réglé
";
            }
            // line 169
            echo "
                                </td>
                            </tr>
                            
                           ";
        }
        // line 174
        echo "                        </table>
                    </fieldset>
                </td></tr>
            <tr><td>
        ";
        // line 178
        if ( !$this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "missionAffretement", array())) {
            // line 179
            echo "
                    <fieldset style=\"width: auto;max-width: 190px;\"><legend>Clients</legend>
                        <table>
                            <tr><th style=\"color: #0000A8\">Participants : </th> <th style=\"color: #EC0000\">Non Concernés : </th></tr>
                            <tr>
                                <td>
                                   
                ";
            // line 186
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
                // line 187
                echo "                 <font style=\"color: ";
                if ($this->getAttribute($this->getAttribute($context["cl"], "client", array()), "encompte", array())) {
                    echo "blue ";
                } else {
                    echo "black ";
                }
                echo "\" >- ";
                echo twig_escape_filter($this->env, trim($this->getAttribute($context["cl"], "client", array()), "*/"), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cl"], "secteur", array()), "html", null, true);
                echo ")</font>
                 ";
                // line 188
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo " <br/>";
                }
                // line 189
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
                // line 190
                echo "                Aucun client n'a été spécifié
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cl'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 192
            echo "                                    
                                </td>
                                <td>
                ";
            // line 195
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "clientFdrFs", array()));
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
                // line 196
                echo "                <font style=\"color: ";
                if ($this->getAttribute($this->getAttribute($context["cl"], "client", array()), "encompte", array())) {
                    echo "blue ";
                } else {
                    echo "black ";
                }
                echo "\" >- ";
                echo twig_escape_filter($this->env, trim($this->getAttribute($context["cl"], "client", array()), "*/"), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cl"], "secteur", array()), "html", null, true);
                echo ")</font>
                ";
                // line 197
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo " <br/>";
                }
                // line 198
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
                // line 199
                echo "                Aucun client n'a été spécifié
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cl'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 201
            echo "                                </td>
                            </tr>
                        </table>
                    </fieldset>

       ";
        }
        // line 207
        echo "                </td> </tr>
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
    <hr/> &copy; Copyright &copy;  ";
        // line 407
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " / <a href=\"http://www.ctm-messagerie.ma/\" title=\"ctmMess\">CTM Messagerie</a>
    </page_footer>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "FdrAdminBundle:FeuilleDeRoute:apercuu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  927 => 407,  923 => 405,  914 => 398,  907 => 396,  898 => 395,  895 => 394,  891 => 393,  872 => 376,  865 => 374,  856 => 373,  853 => 372,  849 => 371,  834 => 358,  821 => 349,  817 => 348,  809 => 347,  805 => 346,  801 => 345,  797 => 344,  792 => 342,  788 => 341,  784 => 340,  780 => 339,  770 => 338,  728 => 298,  724 => 296,  717 => 294,  709 => 291,  705 => 290,  701 => 289,  697 => 288,  691 => 287,  687 => 286,  683 => 285,  679 => 284,  676 => 283,  671 => 282,  658 => 272,  655 => 271,  653 => 270,  648 => 267,  644 => 265,  637 => 263,  629 => 260,  625 => 259,  619 => 258,  615 => 257,  612 => 256,  607 => 255,  598 => 249,  595 => 248,  592 => 247,  590 => 246,  584 => 242,  575 => 238,  569 => 234,  566 => 233,  557 => 229,  551 => 225,  549 => 224,  544 => 221,  537 => 219,  524 => 218,  517 => 217,  499 => 216,  493 => 213,  485 => 207,  477 => 201,  470 => 199,  457 => 198,  453 => 197,  440 => 196,  422 => 195,  417 => 192,  410 => 190,  397 => 189,  393 => 188,  380 => 187,  362 => 186,  353 => 179,  351 => 178,  345 => 174,  338 => 169,  334 => 167,  330 => 165,  328 => 164,  320 => 159,  313 => 155,  304 => 151,  296 => 146,  281 => 140,  276 => 137,  271 => 134,  264 => 132,  251 => 131,  244 => 130,  226 => 129,  221 => 126,  219 => 125,  215 => 123,  208 => 122,  203 => 119,  197 => 116,  193 => 114,  191 => 113,  186 => 111,  174 => 107,  170 => 105,  164 => 102,  157 => 98,  153 => 96,  151 => 95,  146 => 93,  142 => 91,  134 => 88,  130 => 86,  128 => 85,  121 => 83,  104 => 69,  98 => 66,  92 => 63,  88 => 62,  77 => 54,  28 => 8,  19 => 1,);
    }
}
