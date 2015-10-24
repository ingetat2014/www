<?php

/* FdrAdminBundle:MissionAffretement:recherche.html.twig */
class __TwigTemplate_982d8439e1c8e7e817205795543ef3aea34ecfed6bb97f6dc9e707cd3108b30f extends Twig_Template
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
        echo "Feuille d'Affretement|Recherche";
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        $this->displayBlock('body', $context, $blocks);
        // line 264
        echo "  
";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div  class=\"page-header\">   
    <h1>Feuille D'Affretement Recherche</h1>
</div>

<div class=\"row-fluid\">
    <h2> Mission Affrêtement Recherche  :</h2>
    <div class=\"row-fluid anime\">
        <span class=\"btn-bg\"> ";
        // line 12
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["etatfdl"]) ? $context["etatfdl"] : $this->getContext($context, "etatfdl"))), "html", null, true);
        echo " &#10174; </span> <span class=\"text-primary badge \"> ";
        echo twig_escape_filter($this->env, (isset($context["par"]) ? $context["par"] : $this->getContext($context, "par")), "html", null, true);
        echo "</span> &#10174; <span class=\"badge\"> ";
        echo twig_escape_filter($this->env, (isset($context["keyword"]) ? $context["keyword"] : $this->getContext($context, "keyword")), "html", null, true);
        echo " </span>
    </div>
</div>
";
        // line 15
        if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "rechercherFDR", array())) {
            // line 16
            echo "    ";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), 'form_start');
            echo "  
<div class=\"row-fluid\">
    <div class=\"span7 offset5\">
";
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "etatfdl", array()), 'label', array("label" => " "));
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "etatfdl", array()), 'widget');
            echo "<span class=\"alert-danger \">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "etatfdl", array()), 'errors');
            echo "</span>
";
            // line 20
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "par", array()), 'label', array("label" => " "));
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "par", array()), 'widget');
            echo "<span class=\"alert-danger \">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "par", array()), 'errors');
            echo "</span>
";
            // line 21
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "libelle", array()), 'label', array("label" => " "));
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "libelle", array()), 'widget');
            echo " <span class=\"alert-danger \">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "libelle", array()), 'errors');
            echo "</span>
";
            // line 22
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "submit", array()), 'label', array("label" => " "));
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "submit", array()), 'widget');
            echo "
    </div>
</div>
    ";
            // line 25
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), 'form_end');
            echo "    
   ";
        }
        // line 27
        echo "


<div class=\"row-fluid\">
   <table class=\"table-responsive table-bordered\">
        <thead>
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
                <th rowspan=\"2\" class=\"col-md-12\">              
                 <h1 style=\"color: transparent;width: 110px\"></h1>
                </th>
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
        // line 86
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 87
            echo "            ";
            if ($this->getAttribute($this->getAttribute($context["entity"], "client", array()), "encompte", array())) {
                // line 88
                echo "            <tr class=\"clientcompte\" style=\"background-color:#FFF4F4;font-style: italic\" title=\"Affrêtement pour un client En Compte\">
                ";
            } else {
                // line 90
                echo "            <tr>
                ";
            }
            // line 91
            echo "                   
                <td>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 93
            echo twig_escape_filter($this->env, trim((($this->getAttribute($context["entity"], "client", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "client", array()), "------")) : ("------")), "*/"), "html", null, true);
            echo "</td> 
                <td>";
            // line 94
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "clientDestinataire", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "clientDestinataire", array()), "------")) : ("------")), "html", null, true);
            echo "</td> 
                <td>";
            // line 95
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "nomresponsable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "nomresponsable", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                <td>";
            // line 96
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "telresponsable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "telresponsable", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>

                <td>";
            // line 98
            if ($this->getAttribute($context["entity"], "dateramassage", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateramassage", array()), "d-m-Y H:i"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "lieuramassage", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 100
            if ($this->getAttribute($context["entity"], "datelivraison", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "datelivraison", array()), "d-m-Y H:i"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 101
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "lieulivraison", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "lieulivraison", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>   
                <td>
                ";
            // line 103
            if (($this->getAttribute($context["entity"], "montantregle", array()) || $this->getAttribute($this->getAttribute($context["entity"], "client", array()), "encompte", array()))) {
                // line 104
                echo "                    <input type=\"checkbox\" disabled readonly checked />
                ";
            } else {
                // line 106
                echo "                    <input type=\"checkbox\" disabled readonly />
                ";
            }
            // line 108
            echo "                </td>
                <td>";
            // line 109
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "etat", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "etat", array()), "Aucun etat")) : ("Aucun etat")), "html", null, true);
            echo "</td> 
                <td>
                ";
            // line 111
            if ($this->getAttribute($context["entity"], "feuilleDeRoute", array())) {
                // line 112
                echo "                    ";
                if (($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affFDR", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "imprimerFDR", array()))) {
                    // line 113
                    echo "                <a target=\"_blank\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("feuillederoute_show", array("id" => $this->getAttribute($this->getAttribute($context["entity"], "feuilleDeRoute", array()), "id", array()))), "html", null, true);
                    echo "\">
                    <strong title=\"Feuille de route : ";
                    // line 114
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "feuilleDeRoute", array()), "etat", array()), "html", null, true);
                    echo " , Cliquer pour plus\">(";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "feuilleDeRoute", array()), "html", null, true);
                    echo ")</strong>
                </a>
                     ";
                } else {
                    // line 117
                    echo "                     <strong title=\"Feuille de route : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "feuilleDeRoute", array()), "etat", array()), "html", null, true);
                    echo "\">(";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "feuilleDeRoute", array()), "html", null, true);
                    echo ")</strong>
                ";
                }
                // line 119
                echo "                    ";
            } else {
                echo "----------
                ";
            }
            // line 121
            echo "                </td>
                <td>";
            // line 122
            if ($this->getAttribute($context["entity"], "dateGeneree", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateGeneree", array()), "d-m-Y H:i"), "html", null, true);
            }
            echo "</td>
                <td title=\"";
            // line 123
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["entity"], "user", array(), "any", false, true), "email", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["entity"], "user", array(), "any", false, true), "email", array()), "-----")) : ("-----")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "user", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "user", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                <td class=\"col-md-12\">
                    ";
            // line 125
            if ((array_key_exists("role", $context) &&  !(null === (isset($context["role"]) ? $context["role"] : $this->getContext($context, "role"))))) {
                // line 126
                echo "                    <div class=\"row-fluid\">
                        <div class=\"row-fluid\">
                            ";
                // line 128
                if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affectationVehicule", array())) {
                    // line 129
                    echo "                            <div class=\"col-md-2\">
                                
                                    <a target=\"_blank\" href=\"";
                    // line 131
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("feuillederoute_new_fdl", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\">
                                     <button class=\"btn-default\"  type=\"submit\">   <img id=\"inputButtonAfficher\" title=\"Affecter/Afficher/Modifier à la feuille de route\" src=\"";
                    // line 132
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/fdr.png"), "html", null, true);
                    echo "\" />
                                  </button>  </a> 
                                
                            </div>
                            ";
                }
                // line 137
                echo "                            ";
                if ((($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affClientCompeFDL", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affClientNnCompeFDL", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "imprimerFDL", array()))) {
                    // line 138
                    echo "                            <div class=\"col-md-2\">
                                
                                    <a target=\"_blank\" href=\"";
                    // line 140
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("missionaffretement_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\">
                                   </button>   <button class=\"btn-default\" title=\"Afficher\" type=\"submit\">   <img id=\"inputButtonAfficher\" title=\"Afficher\" src=\"";
                    // line 141
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/apercu.png"), "html", null, true);
                    echo "\" />
                                    </a> 
                               
                            </div>
                            ";
                }
                // line 146
                echo "                            ";
                if (($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upClientCompeFDL", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upClientNnCompeFDL", array()))) {
                    // line 147
                    echo "                            ";
                    if (( !($this->getAttribute($context["entity"], "etat", array()) === "annuler") &&  !($this->getAttribute($context["entity"], "etat", array()) === "orpheline"))) {
                        // line 148
                        echo "                            <div class=\"col-md-2\">
                             ";
                        // line 149
                        if (($this->getAttribute($context["entity"], "etat", array()) === "fdr-cloturer")) {
                            // line 150
                            echo "                                 ";
                            $context["etat"] = "Cliquer pour cloturer l'affretement";
                            // line 151
                            echo "                                ";
                        } else {
                            // line 152
                            echo "                                 ";
                            $context["etat"] = "Cliquer pour modifier l'affretement";
                            // line 153
                            echo "                                ";
                        }
                        // line 154
                        echo "                                <a target=\"_blank\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("missionaffretement_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                        echo "\">
                                    <button class=\"btn-default\" title=\"";
                        // line 155
                        echo twig_escape_filter($this->env, (isset($context["etat"]) ? $context["etat"] : $this->getContext($context, "etat")), "html", null, true);
                        echo "\" type=\"submit\">  <img id=\"inputButtonModifier\"  src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/modifier.png"), "html", null, true);
                        echo "\" />
                                    </button>   
                                </a> 

                            </div>
                            ";
                    }
                    // line 161
                    echo "                            ";
                }
                // line 162
                echo "                        </div>
                        <div class=\"row-fluid\">
                            ";
                // line 164
                if (($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delClientCompeFDL", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delClientNnCompeFDL", array()))) {
                    // line 165
                    echo "                            <div class=\"col-md-2\">
                                          ";
                    // line 166
                    echo                     $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form');
                    echo "
                            </div>
                            ";
                }
                // line 169
                echo "                            ";
                if ((($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "cloturerFDRAffr", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "cancelClientCompeFDL", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "cancelClientNnCompeFDL", array()))) {
                    // line 170
                    echo "                            ";
                    if (($this->getAttribute($context["entity"], "etat", array()) === "ouverte")) {
                        // line 171
                        echo "                            ";
                        if (($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "cancelClientCompeFDL", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "cancelClientNnCompeFDL", array()))) {
                            // line 172
                            echo "                            <div class=\"col-md-2\">
                                          ";
                            // line 173
                            echo                             $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["cancel_form"]) ? $context["cancel_form"] : $this->getContext($context, "cancel_form")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form');
                            echo "
                            </div>
                            ";
                        }
                        // line 176
                        echo "                            ";
                        if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "cloturerFDRAffr", array())) {
                            // line 177
                            echo "                            <div class=\"col-md-2\">
                                          ";
                            // line 178
                            echo                             $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["cloture_form"]) ? $context["cloture_form"] : $this->getContext($context, "cloture_form")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form');
                            echo "
                            </div>
                            ";
                        }
                        // line 181
                        echo "                            ";
                    }
                    // line 182
                    echo "                            ";
                }
                // line 183
                echo "                        </div>
                    </div>
                    ";
            }
            // line 186
            echo "                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 188
            echo "<tr><td colspan=\"13\"><em>Aucune mission affrêtement n'existe pour votre critère de recherche</em></td></tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        echo "        </tbody>
    </table>
</div>
<br/>
";
        // line 193
        if (($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affClientNnCompeFDL", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affClientCompeFDL", array()))) {
            // line 194
            echo "<div class=\"row-fluid\">
    <a href=\"";
            // line 195
            echo $this->env->getExtension('routing')->getPath("missionaffretement");
            echo "\" class=\"pull-right\">
        <button class=\"btn btn-default\">Revenir à la liste</button>
    </a>
</div>
";
        }
        // line 200
        echo "<script>
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
        return "FdrAdminBundle:MissionAffretement:recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  482 => 200,  474 => 195,  471 => 194,  469 => 193,  463 => 189,  457 => 188,  450 => 186,  445 => 183,  442 => 182,  439 => 181,  433 => 178,  430 => 177,  427 => 176,  421 => 173,  418 => 172,  415 => 171,  412 => 170,  409 => 169,  403 => 166,  400 => 165,  398 => 164,  394 => 162,  391 => 161,  380 => 155,  375 => 154,  372 => 153,  369 => 152,  366 => 151,  363 => 150,  361 => 149,  358 => 148,  355 => 147,  352 => 146,  344 => 141,  340 => 140,  336 => 138,  333 => 137,  325 => 132,  321 => 131,  317 => 129,  315 => 128,  311 => 126,  309 => 125,  302 => 123,  296 => 122,  293 => 121,  287 => 119,  279 => 117,  271 => 114,  266 => 113,  263 => 112,  261 => 111,  256 => 109,  253 => 108,  249 => 106,  245 => 104,  243 => 103,  238 => 101,  232 => 100,  228 => 99,  222 => 98,  217 => 96,  213 => 95,  209 => 94,  205 => 93,  201 => 92,  198 => 91,  194 => 90,  190 => 88,  187 => 87,  182 => 86,  128 => 35,  118 => 27,  113 => 25,  106 => 22,  99 => 21,  92 => 20,  85 => 19,  78 => 16,  76 => 15,  66 => 12,  57 => 5,  54 => 4,  49 => 264,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
