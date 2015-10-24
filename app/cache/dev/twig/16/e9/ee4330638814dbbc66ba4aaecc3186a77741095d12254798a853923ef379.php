<?php

/* FdrAdminBundle:MissionAffretement:apercu.html.twig */
class __TwigTemplate_16e9ee4330638814dbbc66ba4aaecc3186a77741095d12254798a853923ef379 extends Twig_Template
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
        <meta name=\"description\" content=\"ismailkomay\"/>
        <meta name=\"author\" content=\"ismailkomay\"/>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <!--link type=\"text/css\" rel=\"stylesheet\" href=\"./imprime.css\" /-->
        <style type=\"text/css\">
            table fieldset table tr td,table fieldset table tr th{
                padding-bottom: 5px;
                width: 200px;
                background-color: transparent;
                max-width: 200px;
                margin-left: 10px;
                margin-right: 10px;
                vertical-align: top;
            }
            tr{
                padding-bottom: 5px;
            }
            legend{
                color: blue;background-color: white;border:1px outset #FBE1E1;padding: 8px;
                alignment-adjust: central;
                text-align: center;
                 float: inside;
            }
            span.nb{
                font-size: xx-small;
                color: #0000A8;
            }
            h2{
                position: absolute;text-align: center;float: inside;color:#699FCD;font-style:italic;
            }
            fieldset{
                border:1px outset #FBE1E1;padding: 5px;margin: 5px;
            }

           hr {width: 100%; border: none; background-color: #DDDDFF; border-top: solid 1mm #F00; padding: 2mm}
        </style>
        
    </head>
    <body>
        <img src=\"./bundles/fdradmin/images/ctm.png\" alt=\"CTM\" title=\"CTM ME\" />
        <h2>
            Imprimé De Feuille d'Affrêtement (";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "html", null, true);
        echo ")</h2>
        <hr/>
            
        <table>
            <tr>
                <td>
        <fieldset >
            <legend >Information sur impression : <span class=\"nb\">[[page_nb]] page(s)</span></legend>
            <table>
                <tr><th>Code de la feuille  </th><td> ";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td></tr>
                <tr><th>Etat de la feuille  </th><td>";
        // line 57
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array())), "html", null, true);
        echo "</td> </tr>
                <tr>
                    <th>Date/Heure d'impression  </th>
                    <td>";
        // line 60
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d-m-Y H:i"), "html", null, true);
        echo "</td> </tr>
                <tr>
                    <th>Utilisateur </th>
                    <td>";
        // line 63
        echo twig_escape_filter($this->env, ((((($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()) . " ") . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array())) . " (") . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "matricule", array())) . ")"), "html", null, true);
        echo "</td></tr>
            </table>
        </fieldset>
                </td>
            </tr>
            <tr>
                <td>
        
        <fieldset >
            <legend >Client </legend>
            <table>
                                <tr>
                                    <th>Coordonnés Client </th>
                                    <td>";
        // line 76
        echo twig_escape_filter($this->env, trim((($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "client", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "client", array()), "------")) : ("------")), "*/"), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Client Destinataire </th>
                                    <td>";
        // line 80
        echo twig_escape_filter($this->env, trim((($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientDestinataire", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientDestinataire", array()), "------")) : ("------")), "*/"), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Nom du responsable </th>
                                    <td>";
        // line 84
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "nomresponsable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "nomresponsable", array()), "------")) : ("------")), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Tél. du responsable  </th>
                                    <td>";
        // line 88
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "telresponsable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "telresponsable", array()), "------")) : ("------")), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Documents joints </th>
                                    <td>
        ";
        // line 93
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ecc", array())) {
            echo " ECC,&nbsp;";
        }
        // line 94
        echo "        ";
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ebl", array())) {
            echo " EBL,&nbsp;";
        }
        // line 95
        echo "        ";
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ect", array())) {
            echo " ECT,&nbsp;";
        }
        // line 96
        echo "        ";
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "espece", array())) {
            echo " Espèce,&nbsp;";
        }
        // line 97
        echo "        ";
        if ((($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "autredoc", array()) && $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "autredoc", array(), "any", true, true)) &&  !null)) {
            echo "et autre : ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "autredoc", array()), "html", null, true);
        }
        // line 98
        echo "                                    </td>
                                </tr>
                                <tr>
                                    <th>Etat de Montant</th>
                                    <td>
 ";
        // line 103
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "montantregle", array()) || $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "client", array()), "encompte", array()))) {
            // line 104
            echo "                                        Réglé
 ";
        } else {
            // line 106
            echo "                                        Non réglé
";
        }
        // line 108
        echo "
                                    </td>
                                </tr>
                        </table>
        </fieldset>
                </td>
            </tr>
            <tr>
                <td>
        <fieldset style=\"border:1px outset #FBE1E1;padding: 5px;margin: 5px;;width: 50px\">
            <legend >Ramassage  </legend>
            <table>
                                <tr>
                                    <th>Date de Ramassage </th>
                                    <td>";
        // line 122
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateramassage", array()), "d-m-Y H:i"), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Lieu de Ramassage </th>
                                    <td>";
        // line 126
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "lieuramassage", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "lieuramassage", array()), "------")) : ("------")), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Type Vehicule demandé </th>
                                    <td>";
        // line 130
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "typeVehicule", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "typeVehicule", array()), "------")) : ("------")), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Nature de marchandises </th>
                                    <td>";
        // line 134
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "naturemarchandise", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "naturemarchandise", array()), "------")) : ("------")), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Nombre de colis</th>
                                    <td>";
        // line 138
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "nbrecolis", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "nbrecolis", array()), "0")) : ("0")), "html", null, true);
        echo "</td>
                                </tr>
                        </table>
        </fieldset>
                </td>
            </tr>
            <tr>
                <td>
        <fieldset >
            <legend >Livraison  </legend>
            <table>
                                <tr>
                                    <th>Date de Livraison </th>
                                    <td>";
        // line 151
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datelivraison", array()), "d-m-Y H:i"), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Lieu de Livraison </th>
                                    <td>";
        // line 155
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "lieulivraison", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "lieulivraison", array()), "------")) : ("------")), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Bon de livraison </th>
                                    <td>";
        // line 159
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "bonlivraison", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "bonlivraison", array()), "------")) : ("------")), "html", null, true);
        echo "</td>
                                </tr>

                                <tr>
                                    <th>Numéro d'expédition </th>
                                    <td>";
        // line 164
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "numexpedition", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "numexpedition", array()), "------")) : ("------")), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Nombre de Manutentions </th>
                                    <td>";
        // line 168
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "nombreManutentionVoulu", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "nombreManutentionVoulu", array()), "0")) : ("0")), "html", null, true);
        echo "</td>
                                </tr>
                        </table>
        </fieldset>
                </td> </tr>
            <tr><td>
    
        <fieldset >
            <legend >Assurances/Banque   </legend>
            <table>
                                <tr>
                                    <th>Valeur Assurance(Dhs) </th>
                                    <td>";
        // line 180
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "valdeclassurance", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "valdeclassurance", array()), "0")) : ("0")), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Nom de la banque</th>
                                    <td>";
        // line 184
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "nombnq", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "nombnq", array()), "------")) : ("------")), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Numéro de chèque</th>
                                    <td>";
        // line 188
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "numcheque", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "numcheque", array()), "------")) : ("------")), "html", null, true);
        echo "</td>
                                </tr>
                        </table> 
        </fieldset>
                </td>
            </tr>
        </table>
        <page_footer>
    <hr/> &copy; Copyright &copy;  ";
        // line 196
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " / <a href=\"http://www.ctm-messagerie.ma/\" title=\"ctmMess\">CTM Messagerie</a>
    </page_footer>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "FdrAdminBundle:MissionAffretement:apercu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 196,  303 => 188,  296 => 184,  289 => 180,  274 => 168,  267 => 164,  259 => 159,  252 => 155,  245 => 151,  229 => 138,  222 => 134,  215 => 130,  208 => 126,  201 => 122,  185 => 108,  181 => 106,  177 => 104,  175 => 103,  168 => 98,  162 => 97,  157 => 96,  152 => 95,  147 => 94,  143 => 93,  135 => 88,  128 => 84,  121 => 80,  114 => 76,  98 => 63,  92 => 60,  86 => 57,  82 => 56,  70 => 47,  28 => 8,  19 => 1,);
    }
}
