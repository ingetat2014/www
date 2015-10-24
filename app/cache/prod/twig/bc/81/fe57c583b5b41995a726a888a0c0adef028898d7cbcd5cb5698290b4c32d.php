<?php

/* FdrAdminBundle:FeuilleDeRoute:index.html.twig */
class __TwigTemplate_bc81fe57c583b5b41995a726a888a0c0adef028898d7cbcd5cb5698290b4c32d extends Twig_Template
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
        echo "Feuille De Route|Accueil";
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "

";
        // line 6
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<div  class=\"page-header\"> <h1> Liste des Feuilles De Route</h1></div>
    ";
        // line 8
        if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "rechercherFDR", array())) {
            // line 9
            echo "    ";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), 'form_start');
            echo "  
<div class=\"row-fluid\">
    <div class=\"span7 offset5\">
";
            // line 12
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "etatfdr", array()), 'label', array("label" => " "));
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "etatfdr", array()), 'widget');
            echo "<span class=\"alert-danger \">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "etatfdr", array()), 'errors');
            echo "</span>
";
            // line 13
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "par", array()), 'label', array("label" => " "));
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "par", array()), 'widget');
            echo "<span class=\"alert-danger \">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "par", array()), 'errors');
            echo "</span>
";
            // line 14
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "libelle", array()), 'label', array("label" => " "));
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "libelle", array()), 'widget');
            echo " <span class=\"alert-danger \">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "libelle", array()), 'errors');
            echo "</span>
";
            // line 15
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "submit", array()), 'label', array("label" => " "));
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "submit", array()), 'widget');
            echo "
    </div>
</div>
    ";
            // line 18
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), 'form_end');
            echo " 
    ";
        }
        // line 20
        echo "
<div class=\"row-fluid\">
    ";
        // line 22
        if ((($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crFDR", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crFDRPanne", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crFDRAutrAgence", array()))) {
            // line 23
            echo "    <div class=\"span3\">

        <a target=\"_blank\" href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("feuillederoute_new");
            echo "\">
            <button class=\"btn btn-default\">
                Ajouter une nouvelle entit&eacute;
            </button>
        </a>
    </div>
";
        }
        // line 32
        echo "        ";
        if (((($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upFDR", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crFDRPanne", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "cloturerFDR", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "UpCloturerFDR", array()))) {
            // line 33
            echo "    <div class=\"span3\">

            ";
            // line 35
            if ( !($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") === "feuillederoute_all")) {
                // line 36
                echo "        <a href=\"";
                echo $this->env->getExtension('routing')->getPath("feuillederoute_all");
                echo "\">
            <button class=\"btn btn-default\">

                Afficher toutes les feuilles de route
            </button>
        </a>
               ";
            } else {
                // line 43
                echo "        <a href=\"";
                echo $this->env->getExtension('routing')->getPath("feuillederoute");
                echo "\">
            <button class=\"btn btn-default\">
                Revenir à la liste des fdr ouvertes
            </button>
        </a>
               ";
            }
            // line 49
            echo "        </button>
        </a>
    </div>
        ";
        }
        // line 53
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
        // line 75
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 76
            echo "            <tr>
                <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 78
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "depot", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "depot", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                <td>";
            // line 79
            if ($this->getAttribute($context["entity"], "dateDebutMission", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebutMission", array()), "d-m-Y H:i"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ol>
                ";
            // line 82
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entity"], "manutentions", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["man"]) {
                // line 83
                echo "                        <li><input type=\"text\" value=\"";
                echo twig_escape_filter($this->env, $context["man"], "html", null, true);
                echo "\" size=\"35\" readonly/></li>  
                         ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 84
                echo " - Aucune affectation ( Erreur inintentionnelle. )
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['man'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "                    </ol>
                </td>
                <td>";
            // line 88
            if ($this->getAttribute($context["entity"], "nombreManutention", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombreManutention", array()), "html", null, true);
                echo " ";
            } else {
                echo " 0 ";
            }
            echo "</td>
                <td>";
            // line 89
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "vehicule", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "vehicule", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                <td>";
            // line 90
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "compteurReel", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "compteurReel", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                <td>";
            // line 91
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "typePrestation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "typePrestation", array()), "-----")) : ("-----")), "html", null, true);
            echo " 
                 ";
            // line 92
            if ($this->getAttribute($context["entity"], "missionaffretement", array())) {
                // line 93
                echo "                    ";
                if ((($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affClientCompeFDL", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affClientNnCompeFDL", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "imprimerFDL", array()))) {
                    // line 94
                    echo "                <a target=\"_blank\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("missionaffretement_show", array("id" => $this->getAttribute($this->getAttribute($context["entity"], "missionAffretement", array()), "id", array()))), "html", null, true);
                    echo "\">
                    <strong title=\"Feuille affrêtement : ";
                    // line 95
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "missionaffretement", array()), "etat", array()), "html", null, true);
                    echo ",Nombre Manutentions:";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "missionaffretement", array()), "nombreManutentionVoulu", array()), "html", null, true);
                    echo ", Cliquer pour plus\">(";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "missionaffretement", array()), "html", null, true);
                    echo ")</strong>
                </a>
                ";
                }
                // line 98
                echo "                ";
            }
            // line 99
            echo "                </td>
                <td>";
            // line 100
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "etat", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "etat", array()), "-----")) : ("-----")), "html", null, true);
            echo " <span class=\"bg-info\">";
            echo (($this->getAttribute($context["entity"], "fdrInstance", array())) ? (" (en instance)") : (""));
            echo "</span></td>
                <td>";
            // line 101
            if ($this->getAttribute($context["entity"], "dateGeneree", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateGeneree", array()), "d-m-Y H:i"), "html", null, true);
            }
            echo "</td>
                <td title=\"";
            // line 102
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["entity"], "user", array(), "any", false, true), "email", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["entity"], "user", array(), "any", false, true), "email", array()), "-----")) : ("-----")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "user", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "user", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                <td class=\"col-md-12\">
                     ";
            // line 104
            if ((array_key_exists("role", $context) &&  !(null === (isset($context["role"]) ? $context["role"] : $this->getContext($context, "role"))))) {
                // line 105
                echo "                        ";
                if (($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affFDR", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "imprimerFDR", array()))) {
                    // line 106
                    echo "                        <div class=\"col-md-2\">
                            
                                <a target=\"_blank\" href=\"";
                    // line 108
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("feuillederoute_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\">
                                  <button class=\"btn-default\" title=\"Afficher\" type=\"submit\">  <img id=\"inputButtonAfficher\" title=\"Afficher\" src=\"";
                    // line 109
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/apercu.png"), "html", null, true);
                    echo "\" />
                               </button>  </a> 
                           
                        </div>
                        ";
                }
                // line 114
                echo "                        ";
                if ((($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "editCompteur", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affectationChauffManu", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affectationVehicule", array()))) {
                    // line 115
                    echo "
                                    ";
                    // line 116
                    if ( !$this->getAttribute($context["entity"], "missionAffretement", array())) {
                        // line 117
                        echo "                                    ";
                        if (( !(twig_lower_filter($this->env, $this->getAttribute($context["entity"], "etat", array())) === "orpheline") ||  !(twig_slice($this->env, twig_lower_filter($this->env, $this->getAttribute($context["entity"], "typePrestation", array())), 0, 3) === "aff"))) {
                            // line 118
                            echo "                        <div class=\"col-md-2\">
                           
                                <a target=\"_blank\" href=\"";
                            // line 120
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("feuillederoute_editdebut", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                            echo "\">
                                    <button class=\"btn-default\" type=\"submit\"> <img id=\"inputButtonAfficher\" title=\"Editer le d&eacute;but de mission (";
                            // line 121
                            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "typePrestation", array()), "html", null, true);
                            echo ")\" src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/modifier.png"), "html", null, true);
                            echo "\" />
                            </button>    </a>
                            
                        </div>
                                    ";
                        }
                        // line 126
                        echo "                                    ";
                    } else {
                        // line 127
                        echo "                        <div class=\"col-md-2\">
                            
                                <a target=\"_blank\" href=\"";
                        // line 129
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("feuillederoute_new_fdl", array("id" => $this->getAttribute($this->getAttribute($context["entity"], "missionAffretement", array()), "id", array()))), "html", null, true);
                        echo "\">
                                 <button class=\"btn-default\" type=\"submit\">   <img id=\"inputButtonAfficher\" title=\"Editer le d&eacute;but de mission de l'affrêtement (";
                        // line 130
                        echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "missionAffretement", array()), "html", null, true);
                        echo ")\" src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/modifier.png"), "html", null, true);
                        echo "\" />
                              </button>  </a> 
                            
                        </div>
                                    ";
                    }
                    // line 135
                    echo "

                        ";
                }
                // line 138
                echo "
                        ";
                // line 139
                if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "cloturerFDR", array())) {
                    // line 140
                    echo "                         ";
                    if ((($this->getAttribute($context["entity"], "etat", array()) === "cloturer") || (($this->getAttribute($context["entity"], "etat", array()) === "ouverte") &&  !$this->getAttribute($context["entity"], "fdrInstance", array())))) {
                        // line 141
                        echo "                        <div class=\"col-md-2\">
                            <a target=\"_blank\"  href=\"";
                        // line 142
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("feuillederoute_updatecloture", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                        echo "\">
                            <button class=\"btn-default\" title=\"";
                        // line 143
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
                    // line 150
                    echo "                        ";
                }
                // line 151
                echo "                        ";
                if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "cancelFDR", array())) {
                    // line 152
                    echo "                        ";
                    if (($this->getAttribute($context["entity"], "etat", array()) === "ouverte")) {
                        // line 153
                        echo "                        <div class=\"col-md-2\">
                                ";
                        // line 154
                        echo                         $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["cancel_form"]) ? $context["cancel_form"] : $this->getContext($context, "cancel_form")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form');
                        echo "
                        </div>
                        ";
                    }
                    // line 157
                    echo "                        ";
                }
                // line 158
                echo "                        ";
                if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delFDR", array())) {
                    // line 159
                    echo "                        <div class=\"col-md-2\">
                                ";
                    // line 160
                    echo                     $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form');
                    echo "
                        </div>
                        ";
                }
                // line 163
                echo "                    ";
            }
            // line 164
            echo "                </td>
            </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 167
            echo "            ";
            $context["etat"] = "(ouverte)";
            // line 168
            echo "            ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") === "feuillederoute_all")) {
                // line 169
                echo "            ";
                $context["etat"] = "";
                // line 170
                echo "            ";
            }
            // line 171
            echo "            <tr> <td colspan=\"11\">Aucune feuille de route ";
            echo twig_escape_filter($this->env, (isset($context["etat"]) ? $context["etat"] : $this->getContext($context, "etat")), "html", null, true);
            echo " n'existe pour le moment</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "        </tbody>
    </table>
</div>
<div class=\"span12\" style=\"text-align: center\">
    <div class=\"row-fluid\">
        <div class=\"pagination-lg\">";
        // line 178
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "</div>
    </div>
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
        return "FdrAdminBundle:FeuilleDeRoute:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  472 => 178,  465 => 173,  456 => 171,  453 => 170,  450 => 169,  447 => 168,  444 => 167,  437 => 164,  434 => 163,  428 => 160,  425 => 159,  422 => 158,  419 => 157,  413 => 154,  410 => 153,  407 => 152,  404 => 151,  401 => 150,  387 => 143,  383 => 142,  380 => 141,  377 => 140,  375 => 139,  372 => 138,  367 => 135,  357 => 130,  353 => 129,  349 => 127,  346 => 126,  336 => 121,  332 => 120,  328 => 118,  325 => 117,  323 => 116,  320 => 115,  317 => 114,  309 => 109,  305 => 108,  301 => 106,  298 => 105,  296 => 104,  289 => 102,  283 => 101,  277 => 100,  274 => 99,  271 => 98,  261 => 95,  256 => 94,  253 => 93,  251 => 92,  247 => 91,  243 => 90,  239 => 89,  230 => 88,  226 => 86,  219 => 84,  211 => 83,  206 => 82,  198 => 79,  194 => 78,  190 => 77,  187 => 76,  182 => 75,  158 => 53,  152 => 49,  142 => 43,  131 => 36,  129 => 35,  125 => 33,  122 => 32,  112 => 25,  108 => 23,  106 => 22,  102 => 20,  97 => 18,  90 => 15,  83 => 14,  76 => 13,  69 => 12,  62 => 9,  60 => 8,  57 => 7,  51 => 6,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
