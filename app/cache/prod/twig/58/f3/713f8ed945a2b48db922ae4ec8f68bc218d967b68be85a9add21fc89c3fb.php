<?php

/* FdrAdminBundle:Vehicule:recherche.html.twig */
class __TwigTemplate_58f3713f8ed945a2b48db922ae4ec8f68bc218d967b68be85a9add21fc89c3fb extends Twig_Template
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
        echo "Vehicule|Recherche";
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div  class=\"page-header\"> <h1>Recherche des vehicules</h1></div>
<div class=\"row-fluid\">
    <span class=\"text-primary badge \"> ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["par"]) ? $context["par"] : $this->getContext($context, "par")), "html", null, true);
        echo "</span> | <span class=\"badge\">' ";
        echo twig_escape_filter($this->env, (isset($context["keyword"]) ? $context["keyword"] : $this->getContext($context, "keyword")), "html", null, true);
        echo "'</span>
</div>
";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), 'form_start');
        echo "  
<div class=\"row-fluid\">
    <div class=\"span5 offset7\">   

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
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "submit", array()), 'label', array("label" => " "));
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "submit", array()), 'widget');
        echo "
    </div>
</div>
    ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), 'form_end');
        echo "
<div class=\"row-fluid\">
<table class=\"table-responsive records_list table-bordered table-condensed\">
    <thead>
        <tr>
            <th>Code</th>
            <th>Num. Société</th>
            <th>Matricule</th>
            <th>Type</th>
            <th>Remorque</th>
            <th>Dispnibilite</th>
            <th>Vidange(Km.)</th>
            <th>Vidange(s) demandé(s)</th>
            <th>Vidange(s) effectué(s)</th>
            <th>Compteur(Km.)</th>
            <th>Date de Lancement</th>
            <th>Depot</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 40
            echo "        <tr>
            <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 42
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "numSociete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "numSociete", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td>";
            // line 43
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "matricule", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "matricule", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td>";
            // line 44
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "type", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td>
\t\t\t\t";
            // line 46
            if ($this->getAttribute($context["entity"], "remorque", array())) {
                // line 47
                echo "                <input type=\"checkbox\" disabled readonly checked />
                ";
            } else {
                // line 49
                echo "                <input type=\"checkbox\" disabled readonly />
                ";
            }
            // line 51
            echo "            </td>
            <td>
                                    ";
            // line 53
            if (( !(null === $this->getAttribute($context["entity"], "disponibilite", array())) && $this->getAttribute($context["entity"], "disponibilite", array(), "any", true, true))) {
                // line 54
                echo "                <input type=\"checkbox\" disabled readonly checked />
                ";
            } else {
                // line 56
                echo "                <input type=\"checkbox\" disabled readonly />
                ";
            }
            // line 58
            echo "            </td>
            <td>";
            // line 59
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "vidange", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "vidange", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            ";
            // line 60
            $context["quotient"] = 0;
            // line 61
            echo "            ";
            if (($this->getAttribute($context["entity"], "vidange", array()) != 0)) {
                // line 62
                echo "            ";
                $context["quotient"] = ($this->getAttribute($context["entity"], "compteur", array()) / $this->getAttribute($context["entity"], "vidange", array()));
                // line 63
                echo "            ";
            }
            // line 64
            echo "            <td>";
            echo twig_escape_filter($this->env, twig_round((isset($context["quotient"]) ? $context["quotient"] : $this->getContext($context, "quotient")), 0, "floor"), "html", null, true);
            echo "</td>
            <td>";
            // line 65
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "nombreVidange", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "nombreVidange", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td>";
            // line 66
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "compteur", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "compteur", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td>";
            // line 67
            if ($this->getAttribute($context["entity"], "dateLancement", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateLancement", array()), "d/m/Y"), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 68
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "depot", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "depot", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td class=\"col-md-6\">
                ";
            // line 70
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affVehicule", array())) {
                // line 71
                echo "                <div class=\"col-md-2\">
                    <a target=\"_blank\" href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vehicule_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                        <button title=\"Afficher\" type=\"submit\">
                            <img id=\"inputButtonAfficher\" title=\"Afficher\" src=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/apercu.png"), "html", null, true);
                echo "\" />
                        </button>
                    </a> 
                </div>
                
                ";
            }
            // line 80
            echo "                ";
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upVehicule", array())) {
                // line 81
                echo "                <div class=\"col-md-2\">
                    <a target=\"_blank\" href=\"";
                // line 82
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vehicule_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                        <button title=\"Modifier\" type=\"submit\">
                            <img id=\"inputButtonModifier\" title=\"Modifier\" src=\"";
                // line 84
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/modifier.png"), "html", null, true);
                echo "\" />
                        </button>
                    </a> 
                </div>
                
                ";
            }
            // line 90
            echo "               ";
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delVehicule", array())) {
                // line 91
                echo "                <div class=\"col-md-2\">
                        ";
                // line 92
                echo                 $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form');
                echo "
                </div>               
                ";
            }
            // line 95
            echo "                
                ";
            // line 96
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upVehicule", array())) {
                // line 97
                echo "                ";
                if ((twig_round((isset($context["quotient"]) ? $context["quotient"] : $this->getContext($context, "quotient")), 0, "floor") > (($this->getAttribute($context["entity"], "nombreVidange", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "nombreVidange", array()), "-----")) : ("-----")))) {
                    // line 98
                    echo "                <div class=\"col-md-2\">
                        ";
                    // line 99
                    echo                     $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["vidange_form"]) ? $context["vidange_form"] : $this->getContext($context, "vidange_form")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form');
                    echo "
                </div>    
                 ";
                }
                // line 102
                echo "                ";
            }
            // line 103
            echo "            </td>
        </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 105
            echo "<tr><td colspan=\"9\">Aucun véhicule n'existe pour le moment </td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "    </tbody>
</table>
</div>
<div class=\"span12\" style=\"text-align: center\">
    <div class=\"row-fluid\">
        <div class=\"pagination-lg\">";
        // line 112
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "</div>
    </div>
</div>
<br/>
";
        // line 116
        if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crVehicule", array())) {
            // line 117
            echo "<div class=\"row-fluid\">
    <a  href=\"";
            // line 118
            echo $this->env->getExtension('routing')->getPath("vehicule_new");
            echo "\" class=\"pull-right\">
        <button class=\"btn btn-default\">Ajouter une nouvelle entité</button>
    </a>
</div>
    ";
        }
        // line 123
        echo "<script>
    \$('* [id=\"form_supprimer\"]').each(function() {
        var c = \$(this).parent().parent().parent();
        \$(this).confirm({
            title: \"<span class='text-danger header-logo'>Confirmation de suppression : <span class='badge help-block' title='Si vous confirmez; cette feuille ne sera plus recupérée'> ( Action irréversible ? )</span></span>\",
            text: \"<div class='text-danger'>Voulez-vous vraiment supprimer  ? </div>\",
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
    \$('* [id=\"form_vidange\"]').each(function() {
        var c = \$(this).parent().parent().parent();
        \$(this).confirm({
            title: \"<span class='text-danger header-logo'>Confirmation de vidange : <span class='badge help-block'> ( Action irréversible ? )</span></span>\",
            text: \"<div class='text-danger'>Voulez-vous vraiment effectuer le vidange  ? </div>\",
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
            confirmButtonClass: \"btn-warning\"
        });
    }
    );
</script>

";
    }

    public function getTemplateName()
    {
        return "FdrAdminBundle:Vehicule:recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 123,  311 => 118,  308 => 117,  306 => 116,  299 => 112,  292 => 107,  285 => 105,  278 => 103,  275 => 102,  269 => 99,  266 => 98,  263 => 97,  261 => 96,  258 => 95,  252 => 92,  249 => 91,  246 => 90,  237 => 84,  232 => 82,  229 => 81,  226 => 80,  217 => 74,  212 => 72,  209 => 71,  207 => 70,  202 => 68,  196 => 67,  192 => 66,  188 => 65,  183 => 64,  180 => 63,  177 => 62,  174 => 61,  172 => 60,  168 => 59,  165 => 58,  161 => 56,  157 => 54,  155 => 53,  151 => 51,  147 => 49,  143 => 47,  141 => 46,  136 => 44,  132 => 43,  128 => 42,  124 => 41,  121 => 40,  116 => 39,  93 => 19,  86 => 16,  78 => 14,  71 => 13,  64 => 9,  57 => 7,  53 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
