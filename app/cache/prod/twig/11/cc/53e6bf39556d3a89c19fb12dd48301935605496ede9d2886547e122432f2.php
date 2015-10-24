<?php

/* FdrAdminBundle:FeuilleDeRoute:recherche.html.twig */
class __TwigTemplate_11cc53e6bf39556d3a89c19fb12dd48301935605496ede9d2886547e122432f2 extends Twig_Template
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
        echo "Feuille De Route|Recherche";
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"row-fluid\">
    <h2> Feuilles De Route Recherche  :</h2>
    <div class=\"row-fluid anime\">
        <span class=\"btn-bg\"> ";
        // line 10
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["etatfdr"]) ? $context["etatfdr"] : $this->getContext($context, "etatfdr"))), "html", null, true);
        echo " &#10174; </span> <span class=\"text-primary badge \"> ";
        echo twig_escape_filter($this->env, (isset($context["par"]) ? $context["par"] : $this->getContext($context, "par")), "html", null, true);
        echo "</span> &#10174; <span class=\"badge\"> ";
        echo twig_escape_filter($this->env, ((((isset($context["keyword"]) ? $context["keyword"] : $this->getContext($context, "keyword")) == "*-*")) ? ("Toutes") : ((isset($context["keyword"]) ? $context["keyword"] : $this->getContext($context, "keyword")))), "html", null, true);
        echo " </span>
    </div>
</div>
    ";
        // line 13
        if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "rechercherFDR", array())) {
            // line 14
            echo "    ";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), 'form_start');
            echo "  
<div class=\"row-fluid\">
    <div class=\"span7 offset5\">
";
            // line 17
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "etatfdr", array()), 'label', array("label" => " "));
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "etatfdr", array()), 'widget');
            echo "<span class=\"alert-danger \">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "etatfdr", array()), 'errors');
            echo "</span>
";
            // line 18
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "par", array()), 'label', array("label" => " "));
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "par", array()), 'widget');
            echo "<span class=\"alert-danger \">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "par", array()), 'errors');
            echo "</span>
";
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "libelle", array()), 'label', array("label" => " "));
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "libelle", array()), 'widget');
            echo " <span class=\"alert-danger \">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "libelle", array()), 'errors');
            echo "</span>
";
            // line 20
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "submit", array()), 'label', array("label" => " "));
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "submit", array()), 'widget');
            echo "
    </div>
</div>
    ";
            // line 23
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), 'form_end');
            echo " 
    ";
        }
        // line 25
        echo "<div class=\"row-fluid\">
    ";
        // line 26
        if ((($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crFDR", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crFDRPanne", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crFDRAutrAgence", array()))) {
            // line 27
            echo "    <div class=\"span3\">

        <a target=\"_blank\" href=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("feuillederoute_new");
            echo "\">
            <button class=\"btn btn-default\">
                Ajouter une nouvelle entit&eacute;
            </button>
        </a>
    </div>
";
        }
        // line 36
        echo "         ";
        if (((($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upFDR", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crFDRPanne", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "cloturerFDR", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "UpCloturerFDR", array()))) {
            // line 37
            echo "    <div class=\"span3\">

            ";
            // line 39
            if ( !($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") === "feuillederoute_all")) {
                // line 40
                echo "        <a href=\"";
                echo $this->env->getExtension('routing')->getPath("feuillederoute_all");
                echo "\">
            <button class=\"btn btn-default\">

                Afficher toutes les feuilles de route
            </button>
        </a>
               ";
            } else {
                // line 47
                echo "        <a href=\"";
                echo $this->env->getExtension('routing')->getPath("feuillederoute");
                echo "\">
            <button class=\"btn btn-default\">
                Revenir à la liste des fdr ouvertes
            </button>
        </a>
               ";
            }
            // line 53
            echo "        </button>
        </a>
    </div>
        ";
        }
        // line 57
        echo "</div>
<br/>
<div class=\"row-fluid\">
    <table class=\"table-responsive table-bordered\">
        <thead>
            <tr>
                <th>Code</th>
                <th>Depot/Filiale</th>
                <th>D&eacute;but_Mission</th>
                <th>Chauffeur(s)/Manutentionnaire(s)</th>
                <th>Nb.Manu.</th>
                <th>V&eacute;hicule</th>
                <th>Compteur r&eacute;el(Km)</th>
                <th>Prestation</th>
                <th>Etat</th>
                <th>Date d'ouverture de Feuille</th>
                <th>Propriétaire</th>
                <th><h1 style=\"color: transparent;width: 100px\"></h1></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 78
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 79
            echo "            <tr>
                <td>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "depot", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 82
            if ($this->getAttribute($context["entity"], "dateDebutMission", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebutMission", array()), "d-m-Y H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ol>
                ";
            // line 85
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entity"], "manutentions", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["man"]) {
                // line 86
                echo "                        <li><input type=\"text\" value=\"";
                echo twig_escape_filter($this->env, $context["man"], "html", null, true);
                echo "\" size=\"35\" readonly/></li>                     
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['man'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "                    </ol>
                </td>
                <td>";
            // line 90
            if ($this->getAttribute($context["entity"], "nombreManutention", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombreManutention", array()), "html", null, true);
                echo " ";
            } else {
                echo " 0 ";
            }
            echo "</td>
                <td>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "vehicule", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "compteurReel", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "typePrestation", array()), "html", null, true);
            echo "
                    ";
            // line 94
            if ($this->getAttribute($context["entity"], "missionaffretement", array())) {
                // line 95
                echo "                    ";
                if ((($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affClientCompeFDL", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affClientNnCompeFDL", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "imprimerFDL", array()))) {
                    // line 96
                    echo "                <a target=\"_blank\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("missionaffretement_show", array("id" => $this->getAttribute($this->getAttribute($context["entity"], "missionAffretement", array()), "id", array()))), "html", null, true);
                    echo "\">
                    <strong title=\"Feuille affrêtement : ";
                    // line 97
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "missionaffretement", array()), "etat", array()), "html", null, true);
                    echo ",Nombre Manutentions:";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "missionaffretement", array()), "nombreManutentionVoulu", array()), "html", null, true);
                    echo ", Cliquer pour plus\">(";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "missionaffretement", array()), "html", null, true);
                    echo ")</strong>
                </a>
                ";
                }
                // line 100
                echo "                ";
            }
            // line 101
            echo "                </td>
                <td>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "etat", array()), "html", null, true);
            echo "<span class=\"bg-info\">";
            echo (($this->getAttribute($context["entity"], "fdrInstance", array())) ? (" (en instance)") : (""));
            echo "</span></td>
                <td>";
            // line 103
            if ($this->getAttribute($context["entity"], "dateGeneree", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateGeneree", array()), "d-m-Y H:i"), "html", null, true);
            }
            echo "</td>
                <td title=\"";
            // line 104
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["entity"], "user", array(), "any", false, true), "email", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["entity"], "user", array(), "any", false, true), "email", array()), "-----")) : ("-----")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "user", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "user", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                <td class=\"col-md-12\">
                     ";
            // line 106
            if ((array_key_exists("role", $context) &&  !(null === (isset($context["role"]) ? $context["role"] : $this->getContext($context, "role"))))) {
                // line 107
                echo "                        ";
                if (($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affFDR", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "imprimerFDR", array()))) {
                    // line 108
                    echo "                        <div class=\"col-md-2\">
                            
                                <a target=\"_blank\" href=\"";
                    // line 110
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("feuillederoute_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\">
                                  <button class=\"btn-default\" title=\"Afficher\" type=\"submit\">  <img id=\"inputButtonAfficher\" title=\"Afficher\" src=\"";
                    // line 111
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/apercu.png"), "html", null, true);
                    echo "\" />
                               </button>  </a> 
                           
                        </div>
                        ";
                }
                // line 116
                echo "                        ";
                if ((($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "editCompteur", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affectationChauffManu", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affectationVehicule", array()))) {
                    // line 117
                    echo "                          ";
                    if ( !(twig_lower_filter($this->env, $this->getAttribute($context["entity"], "etat", array())) === "annuler")) {
                        // line 118
                        echo "                                    ";
                        if ( !$this->getAttribute($context["entity"], "missionAffretement", array())) {
                            // line 119
                            echo "                                    ";
                            if (( !(twig_lower_filter($this->env, $this->getAttribute($context["entity"], "etat", array())) === "orpheline") &&  !(twig_slice($this->env, twig_lower_filter($this->env, $this->getAttribute($context["entity"], "typePrestation", array())), 0, 3) === "aff"))) {
                                // line 120
                                echo "                        <div class=\"col-md-2\">
                           
                                <a target=\"_blank\" href=\"";
                                // line 122
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("feuillederoute_editdebut", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                                echo "\">
                                    <button class=\"btn-default\" type=\"submit\"> <img id=\"inputButtonAfficher\" title=\"Editer le d&eacute;but de mission (";
                                // line 123
                                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "typePrestation", array()), "html", null, true);
                                echo ")\" src=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/modifier.png"), "html", null, true);
                                echo "\" />
                            </button>    </a>
                            
                        </div>
                                    ";
                            }
                            // line 128
                            echo "                                    ";
                        } else {
                            // line 129
                            echo "                        <div class=\"col-md-2\">
                            
                                <a target=\"_blank\" href=\"";
                            // line 131
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("feuillederoute_new_fdl", array("id" => $this->getAttribute($this->getAttribute($context["entity"], "missionAffretement", array()), "id", array()))), "html", null, true);
                            echo "\">
                                 <button class=\"btn-default\" type=\"submit\">   <img id=\"inputButtonAfficher\" title=\"Editer le d&eacute;but de mission de l'affrêtement (";
                            // line 132
                            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "missionAffretement", array()), "html", null, true);
                            echo ")\" src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/modifier.png"), "html", null, true);
                            echo "\" />
                              </button>  </a> 
                            
                        </div>
                                    ";
                        }
                        // line 137
                        echo "                    ";
                    }
                    // line 138
                    echo "

                        ";
                }
                // line 141
                echo "
                        ";
                // line 142
                if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "cloturerFDR", array())) {
                    // line 143
                    echo "                    
                       ";
                    // line 144
                    if ((($this->getAttribute($context["entity"], "etat", array()) === "cloturer") || (($this->getAttribute($context["entity"], "etat", array()) === "ouverte") &&  !$this->getAttribute($context["entity"], "fdrInstance", array())))) {
                        echo "                      
                        <div class=\"col-md-2\">
                            <a target=\"_blank\"  href=\"";
                        // line 146
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("feuillederoute_updatecloture", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                        echo "\">
                            <button class=\"btn-default\" title=\"";
                        // line 147
                        if ( !($this->getAttribute($context["entity"], "etat", array()) === "cloturer")) {
                            echo "Clôturer";
                        } else {
                            echo "Modifier la clôture";
                        }
                        echo "\" type=\"submit\">
                                
                                    C
                              </button>  </a> 
                            
                        </div>
                        ";
                    }
                    // line 154
                    echo "                        ";
                }
                // line 155
                echo "                        ";
                if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "cancelFDR", array())) {
                    // line 156
                    echo "                        ";
                    if (($this->getAttribute($context["entity"], "etat", array()) === "ouverte")) {
                        // line 157
                        echo "                        <div class=\"col-md-2\">
                                ";
                        // line 158
                        echo                         $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["cancel_form"]) ? $context["cancel_form"] : $this->getContext($context, "cancel_form")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form');
                        echo "
                        </div>
                        ";
                    }
                    // line 161
                    echo "                        ";
                }
                // line 162
                echo "                        ";
                if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delFDR", array())) {
                    // line 163
                    echo "                        <div class=\"col-md-2\">
                                ";
                    // line 164
                    echo                     $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form');
                    echo "
                        </div>
                        ";
                }
                // line 167
                echo "                    ";
            }
            // line 168
            echo "                </td>
            </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 170
            echo "<tr> <td colspan=\"11\">Aucune feuille de route répond à votre recherche :
                    <a href=\"";
            // line 171
            echo $this->env->getExtension('routing')->getPath("feuillederoute");
            echo "\"> Revenir à la liste</a>
                </td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "        </tbody>
    </table>
</div>

<script>
    \$('* [id*=\"form_supprimerFdr_\"]').each(function() {
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
    \$('* [id*=\"form_annulerFdr_\"]').each(function() {
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
</script>
    ";
    }

    public function getTemplateName()
    {
        return "FdrAdminBundle:FeuilleDeRoute:recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  464 => 174,  455 => 171,  452 => 170,  445 => 168,  442 => 167,  436 => 164,  433 => 163,  430 => 162,  427 => 161,  421 => 158,  418 => 157,  415 => 156,  412 => 155,  409 => 154,  395 => 147,  391 => 146,  386 => 144,  383 => 143,  381 => 142,  378 => 141,  373 => 138,  370 => 137,  360 => 132,  356 => 131,  352 => 129,  349 => 128,  339 => 123,  335 => 122,  331 => 120,  328 => 119,  325 => 118,  322 => 117,  319 => 116,  311 => 111,  307 => 110,  303 => 108,  300 => 107,  298 => 106,  291 => 104,  285 => 103,  279 => 102,  276 => 101,  273 => 100,  263 => 97,  258 => 96,  255 => 95,  253 => 94,  249 => 93,  245 => 92,  241 => 91,  232 => 90,  228 => 88,  219 => 86,  215 => 85,  207 => 82,  203 => 81,  199 => 80,  196 => 79,  191 => 78,  168 => 57,  162 => 53,  152 => 47,  141 => 40,  139 => 39,  135 => 37,  132 => 36,  122 => 29,  118 => 27,  116 => 26,  113 => 25,  108 => 23,  101 => 20,  94 => 19,  87 => 18,  80 => 17,  73 => 14,  71 => 13,  61 => 10,  56 => 7,  50 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
