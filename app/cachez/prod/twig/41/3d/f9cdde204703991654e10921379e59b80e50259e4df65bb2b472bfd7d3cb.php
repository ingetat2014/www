<?php

/* FdrAdminBundle:MissionAffretement:index.html.twig */
class __TwigTemplate_413df9cdde204703991654e10921379e59b80e50259e4df65bb2b472bfd7d3cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Feuille d'Affretement|Accueil";
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div  class=\"page-header\">   
    <h1>Liste des Feuilles D'Affretement</h1>
</div>
";
        // line 9
        if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "rechercherFDR", array())) {
            // line 10
            echo "     ";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), 'form_start');
            echo "  
<div class=\"row-fluid\">
    <div class=\"span7 offset5\">
";
            // line 13
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "etatfdl", array()), 'label', array("label" => " "));
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "etatfdl", array()), 'widget');
            echo "<span class=\"alert-danger \">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "etatfdl", array()), 'errors');
            echo "</span>
";
            // line 14
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "par", array()), 'label', array("label" => " "));
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "par", array()), 'widget');
            echo "<span class=\"alert-danger \">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "par", array()), 'errors');
            echo "</span>
";
            // line 15
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "libelle", array()), 'label', array("label" => " "));
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "libelle", array()), 'widget');
            echo " <span class=\"alert-danger \">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "libelle", array()), 'errors');
            echo "</span>
";
            // line 16
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "submit", array()), 'label', array("label" => " "));
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "submit", array()), 'widget');
            echo "
    </div>
</div>
    ";
            // line 19
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), 'form_end');
            echo " 
  ";
        }
        // line 21
        if (($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crClientCompeFDL", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crClientNnCompeFDL", array()))) {
            // line 22
            echo "
<div class=\"row-fluid\">
    <a target=\"_blank\"  href=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("missionaffretement_new");
            echo "\" class=\"pull-left\">
        <button class=\"btn btn-default\"> Ajouter une nouvelle entité</button>
    </a>
</div>
";
        }
        // line 29
        echo "<br/>
<div class=\"row-fluid\">
   <table class=\"table-responsive table-bordered\">
       <thead class=\"\">
           <tr>               
                <th rowspan=\"2\" class=\"sorted\">
                 ";
        // line 35
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Code", "id");
        echo "
                </th>
                <th  colspan=\"2\">Clients</th>
                <th  colspan=\"2\">Info. Responsable</th>
                <th  colspan=\"2\">Ramassage</th>
                <th  colspan=\"2\">Livraison</th>
                <th rowspan=\"2\" >
                    Montant réglé
                </th>
                <th rowspan=\"2\" >
                    Etat
                </th>
                <th rowspan=\"2\">FDR Associée</th>
                <th rowspan=\"2\">
                Date d'ouverture
                </th>
                <th rowspan=\"2\">Propriétaire</th>
                <th rowspan=\"2\">
                    ";
        // line 53
        if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "ttEtatAfficherParFdl", array())) {
            // line 54
            echo "                    ";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["filtre_form"]) ? $context["filtre_form"] : $this->getContext($context, "filtre_form")), 'form_start');
            echo "  
        <div class=\"row-fluid\">
             ";
            // line 56
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filtre_form"]) ? $context["filtre_form"] : $this->getContext($context, "filtre_form")), "affichertous", array()), 'label', array("label" => " "));
            echo "
             ";
            // line 57
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filtre_form"]) ? $context["filtre_form"] : $this->getContext($context, "filtre_form")), "affichertous", array()), 'widget');
            echo "
            <span class=\"alert-danger \">";
            // line 58
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filtre_form"]) ? $context["filtre_form"] : $this->getContext($context, "filtre_form")), "affichertous", array()), 'errors');
            echo "</span>
        </div>
    ";
            // line 60
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["filtre_form"]) ? $context["filtre_form"] : $this->getContext($context, "filtre_form")), 'form_end');
            echo "  
        ";
        } else {
            // line 62
            echo "        <h1 style=\"color: transparent;width: 110px\"></h1>
        ";
        }
        // line 64
        echo "        </th>
        </tr>
        <tr>
            <th rowspan=\"2\">
                Exp.
            </th>
            <th rowspan=\"2\" >
                Dest.
            </th>

            <th rowspan=\"2\" >
                Nom
            </th>
            <th rowspan=\"2\">
                Tél.
            </th>
            <th>
                Date__RAM.
            </th>
            <th >
                Lieu
            </th>
            <th >
                Date__LIVR.
            </th>
            <th>
                Lieu
            </th>
            

        </tr>
        </thead>
        <tbody>
        ";
        // line 97
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 98
            echo "                ";
            if ($this->getAttribute($this->getAttribute($context["entity"], "client", array()), "encompte", array())) {
                // line 99
                echo "            <tr class=\"clientcompte\" style=\"background-color:#FFF4F4;font-style: italic\" title=\"Affrêtement pour un client En Compte\">
                ";
            } else {
                // line 101
                echo "            <tr>
                ";
            }
            // line 102
            echo "                   
                <td>";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 104
            echo twig_escape_filter($this->env, trim((($this->getAttribute($context["entity"], "client", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "client", array()), "------")) : ("------")), "*/"), "html", null, true);
            echo "</td> 
                <td>";
            // line 105
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "clientDestinataire", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "clientDestinataire", array()), "------")) : ("------")), "html", null, true);
            echo "</td> 
                <td>";
            // line 106
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "nomresponsable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "nomresponsable", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                <td>";
            // line 107
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "telresponsable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "telresponsable", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>

                <td>";
            // line 109
            if ($this->getAttribute($context["entity"], "dateramassage", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateramassage", array()), "d-m-Y H:i"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "lieuramassage", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 111
            if ($this->getAttribute($context["entity"], "datelivraison", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "datelivraison", array()), "d-m-Y H:i"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 112
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "lieulivraison", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "lieulivraison", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>  
                <td>
                ";
            // line 114
            if (($this->getAttribute($context["entity"], "montantregle", array()) || $this->getAttribute($this->getAttribute($context["entity"], "client", array()), "encompte", array()))) {
                // line 115
                echo "                    <input type=\"checkbox\" disabled readonly checked />
                ";
            } else {
                // line 117
                echo "                    <input type=\"checkbox\" disabled readonly />
                ";
            }
            // line 119
            echo "                </td>
                <td>";
            // line 120
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "etat", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "etat", array()), "Aucun etat")) : ("Aucun etat")), "html", null, true);
            echo "</td>
                <td>
                ";
            // line 122
            if ($this->getAttribute($context["entity"], "feuilleDeRoute", array())) {
                // line 123
                echo "                    ";
                if (($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affFDR", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "imprimerFDR", array()))) {
                    // line 124
                    echo "                <a target=\"_blank\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("feuillederoute_show", array("id" => $this->getAttribute($this->getAttribute($context["entity"], "feuilleDeRoute", array()), "id", array()))), "html", null, true);
                    echo "\">
                    <strong title=\"Feuille de route : ";
                    // line 125
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "feuilleDeRoute", array()), "etat", array()), "html", null, true);
                    echo " , Cliquer pour plus\">(";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "feuilleDeRoute", array()), "html", null, true);
                    echo ")</strong>
                </a>
                     ";
                } else {
                    // line 128
                    echo "                     <strong title=\"Feuille de route : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "feuilleDeRoute", array()), "etat", array()), "html", null, true);
                    echo "\">(";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "feuilleDeRoute", array()), "html", null, true);
                    echo ")</strong>
                ";
                }
                // line 130
                echo "                    ";
            } else {
                echo "----------
                ";
            }
            // line 132
            echo "                </td>
                <td>";
            // line 133
            if ($this->getAttribute($context["entity"], "dateGeneree", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateGeneree", array()), "d-m-Y H:i"), "html", null, true);
            }
            echo "</td>
                <td title=\"";
            // line 134
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["entity"], "user", array(), "any", false, true), "email", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["entity"], "user", array(), "any", false, true), "email", array()), "-----")) : ("-----")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "user", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "user", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                <td class=\"col-md-12\">
                    ";
            // line 136
            if ((array_key_exists("role", $context) &&  !(null === (isset($context["role"]) ? $context["role"] : $this->getContext($context, "role"))))) {
                // line 137
                echo "                    <div class=\"row-fluid\">
                        <div class=\"row-fluid\">
                            ";
                // line 139
                if (($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affectationVehicule", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "editCompteur", array()))) {
                    // line 140
                    echo "                            ";
                    if (( !($this->getAttribute($context["entity"], "etat", array()) === "annuler") &&  !($this->getAttribute($context["entity"], "etat", array()) === "orpheline"))) {
                        // line 141
                        echo "                            <div class=\"col-md-2\">

                                <a target=\"_blank\" href=\"";
                        // line 143
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("feuillederoute_new_fdl", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                        echo "\">
                                    <button class=\"btn-default\"  type=\"submit\"> <img id=\"inputButtonAfficher\" title=\"Affecter/Afficher/Modifier à la feuille de route\" src=\"";
                        // line 144
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/fdr.png"), "html", null, true);
                        echo "\" />
                                    </button>   </a> 

                            </div>
                            ";
                    }
                    // line 149
                    echo "                            ";
                }
                // line 150
                echo "                            ";
                if ((($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affClientCompeFDL", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affClientNnCompeFDL", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "imprimerFDL", array()))) {
                    // line 151
                    echo "                            <div class=\"col-md-2\">

                                <a target=\"_blank\" href=\"";
                    // line 153
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("missionaffretement_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\">
                                    <button class=\"btn-default\" title=\"Afficher\" type=\"submit\"> <img id=\"inputButtonAfficher\" title=\"Afficher\" src=\"";
                    // line 154
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/apercu.png"), "html", null, true);
                    echo "\" />
                                    </button>  </a> 

                            </div>
                            ";
                }
                // line 159
                echo "                            ";
                if (($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upClientCompeFDL", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upClientNnCompeFDL", array()))) {
                    // line 160
                    echo "                            ";
                    if (( !($this->getAttribute($context["entity"], "etat", array()) === "annuler") &&  !($this->getAttribute($context["entity"], "etat", array()) === "orpheline"))) {
                        // line 161
                        echo "                            <div class=\"col-md-2\">
                             ";
                        // line 162
                        if (($this->getAttribute($context["entity"], "etat", array()) === "fdr-cloturer")) {
                            // line 163
                            echo "                                 ";
                            $context["etat"] = "Cliquer pour cloturer l'affretement";
                            // line 164
                            echo "                                ";
                        } else {
                            // line 165
                            echo "                                 ";
                            $context["etat"] = "Cliquer pour modifier l'affretement";
                            // line 166
                            echo "                                ";
                        }
                        // line 167
                        echo "                                <a target=\"_blank\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("missionaffretement_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                        echo "\">
                                    <button class=\"btn-default\" title=\"";
                        // line 168
                        echo twig_escape_filter($this->env, (isset($context["etat"]) ? $context["etat"] : $this->getContext($context, "etat")), "html", null, true);
                        echo "\" type=\"submit\">  <img id=\"inputButtonModifier\"  src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/modifier.png"), "html", null, true);
                        echo "\" />
                                    </button>   
                                </a> 

                            </div>
                            ";
                    }
                    // line 174
                    echo "                            ";
                }
                // line 175
                echo "                        </div>
                        <div class=\"row-fluid\">
                            ";
                // line 177
                if (($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delClientCompeFDL", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delClientNnCompeFDL", array()))) {
                    // line 178
                    echo "                            <div class=\"col-md-2\">
                                          ";
                    // line 179
                    echo                     $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form');
                    echo "
                            </div>
                            ";
                }
                // line 182
                echo "                            ";
                if ((($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "cloturerFDRAffr", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "cancelClientCompeFDL", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "cancelClientNnCompeFDL", array()))) {
                    // line 183
                    echo "                            ";
                    if (($this->getAttribute($context["entity"], "etat", array()) === "ouverte")) {
                        // line 184
                        echo "                            ";
                        if (($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "cancelClientCompeFDL", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "cancelClientNnCompeFDL", array()))) {
                            // line 185
                            echo "                            <div class=\"col-md-2\">
                                          ";
                            // line 186
                            echo                             $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["cancel_form"]) ? $context["cancel_form"] : $this->getContext($context, "cancel_form")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form');
                            echo "
                            </div>
                            ";
                        }
                        // line 189
                        echo "                            ";
                        if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "cloturerFDRAffr", array())) {
                            // line 190
                            echo "                            <div class=\"col-md-2\">
                                          ";
                            // line 191
                            echo                             $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["cloture_form"]) ? $context["cloture_form"] : $this->getContext($context, "cloture_form")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form');
                            echo "
                            </div>
                            ";
                        }
                        // line 194
                        echo "                            ";
                    }
                    // line 195
                    echo "                            ";
                }
                // line 196
                echo "                        </div>
                    </div>
                    ";
            }
            // line 199
            echo "                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 201
            echo "<tr><td colspan=\"16\"><em>Aucune mission affrêtement n'existe pour le moment</em></td></tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 202
        echo "        </tbody>
    </table>
</div>
<div class=\"span12\" style=\"text-align: center\">
    <div class=\"row-fluid\">
        <div class=\"pagination-lg\">";
        // line 207
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "</div>
    </div>
</div>


<script>
    \$('* [id*=\"form_supprimerFdl_\"]').each(function() {
        var c = \$(this).parent().parent().parent();
        \$(this).confirm({
            title: \"<span class='text-danger header-logo'>Confirmation de suppression : <span class='badge help-block' title='Si vous confirmez; cette feuille ne sera plus recupérée'> ( Action irréversible ? )</span></span>\",
            text: \"<div class='text-danger'>Voulez-vous vraiment supprimer cette feuille ? </div>\",
            post: true,
            confirm: function(button) {
                button.fadeOut(500).fadeIn(500);
                c.submit();
            },
            cancel: function(button) {
                button.fadeOut(500).fadeIn(500);
                button.preventDefault();
            },
            confirmButton: \"Oui, J'en veux\",
            cancelButton: \"Non, Merci\",
            confirmButtonClass: \"btn-danger\"
        });
    }
    );

    \$('* [id*=\"form_annulerFdl_\"]').each(function() {
        var c = \$(this).parent().parent().parent();
        \$(this).confirm({
            title: \"<span class='text-danger header-logo'>Confirmation d'Annulation : <span class='badge help-block' title='Si vous confirmez; cette feuille ne sera plus restaurée'> ( Action irréversible ? )</span></span>\",
            text: \"<div class='text-danger'>Voulez-vous vraiment Annuler cette feuille ? </div>\",
            post: true,
            confirm: function(button) {
                button.fadeOut(500).fadeIn(500);
                c.submit();
            },
            cancel: function(button) {
                button.fadeOut(500).fadeIn(500);
                button.preventDefault();
            },
            confirmButton: \"Oui, J'en veux\",
            cancelButton: \"Non,Merci\",
            confirmButtonClass: \"btn-warning\"
        });
    }
    );

    \$('* [id*=\"form_cloturerFdl_\"]').each(function() {
        var c = \$(this).parent().parent().parent();
        \$(this).confirm({
            title: \"<span class='text-danger header-logo'>Confirmation de clôture : <span class='badge help-block' title='Si vous confirmez; cette feuille ne sera plus ouverte'> ( Action irréversible ? )</span></span>\",
            text: \"<div class='text-success'>Voulez-vous vraiment clôturer cette feuille ? </div>\",
            post: true,
            confirm: function(button) {
                button.fadeOut(500).fadeIn(500);
                c.submit();
            },
            cancel: function(button) {
                button.fadeOut(500).fadeIn(500);
                button.preventDefault();
            },
            confirmButton: \"Oui, J'en veux\",
            cancelButton: \"Non,Merci\",
            confirmButtonClass: \"btn btn-success\"
        });
    }
    );
</script>
    ";
    }

    public function getTemplateName()
    {
        return "FdrAdminBundle:MissionAffretement:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  502 => 207,  495 => 202,  489 => 201,  482 => 199,  477 => 196,  474 => 195,  471 => 194,  465 => 191,  462 => 190,  459 => 189,  453 => 186,  450 => 185,  447 => 184,  444 => 183,  441 => 182,  435 => 179,  432 => 178,  430 => 177,  426 => 175,  423 => 174,  412 => 168,  407 => 167,  404 => 166,  401 => 165,  398 => 164,  395 => 163,  393 => 162,  390 => 161,  387 => 160,  384 => 159,  376 => 154,  372 => 153,  368 => 151,  365 => 150,  362 => 149,  354 => 144,  350 => 143,  346 => 141,  343 => 140,  341 => 139,  337 => 137,  335 => 136,  328 => 134,  322 => 133,  319 => 132,  313 => 130,  305 => 128,  297 => 125,  292 => 124,  289 => 123,  287 => 122,  282 => 120,  279 => 119,  275 => 117,  271 => 115,  269 => 114,  264 => 112,  258 => 111,  254 => 110,  248 => 109,  243 => 107,  239 => 106,  235 => 105,  231 => 104,  227 => 103,  224 => 102,  220 => 101,  216 => 99,  213 => 98,  208 => 97,  173 => 64,  169 => 62,  164 => 60,  159 => 58,  155 => 57,  151 => 56,  145 => 54,  143 => 53,  122 => 35,  114 => 29,  106 => 24,  102 => 22,  100 => 21,  95 => 19,  88 => 16,  81 => 15,  74 => 14,  67 => 13,  60 => 10,  58 => 9,  53 => 6,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
