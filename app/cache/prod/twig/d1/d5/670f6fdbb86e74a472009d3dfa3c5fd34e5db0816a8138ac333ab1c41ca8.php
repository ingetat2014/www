<?php

/* FdrAdminBundle:Vehicule:index.html.twig */
class __TwigTemplate_d1d5670f6fdbb86e74a472009d3dfa3c5fd34e5db0816a8138ac333ab1c41ca8 extends Twig_Template
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
        echo "Vehicule|Accueil";
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
        echo "<div  class=\"page-header\"> <h1>Liste des vehicules</h1></div>
";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), 'form_start');
        echo "  
<div class=\"row-fluid\">
    <div class=\"span5 offset7\">   

";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "par", array()), 'label', array("label" => " "));
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "par", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "par", array()), 'errors');
        echo "</span>
";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "libelle", array()), 'label', array("label" => " "));
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "libelle", array()), 'widget');
        echo " <span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "libelle", array()), 'errors');
        echo "</span>

";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "submit", array()), 'label', array("label" => " "));
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "submit", array()), 'widget');
        echo "
    </div>
</div>
    ";
        // line 16
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
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 37
            echo "        <tr>
            <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 39
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "numSociete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "numSociete", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td>";
            // line 40
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "matricule", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "matricule", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td>";
            // line 41
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "type", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td>
\t\t\t\t";
            // line 43
            if ($this->getAttribute($context["entity"], "remorque", array())) {
                // line 44
                echo "                <input type=\"checkbox\" disabled readonly checked />
                ";
            } else {
                // line 46
                echo "                <input type=\"checkbox\" disabled readonly />
                ";
            }
            // line 48
            echo "            </td>
            <td>
                                    ";
            // line 50
            if (( !(null === $this->getAttribute($context["entity"], "disponibilite", array())) && $this->getAttribute($context["entity"], "disponibilite", array(), "any", true, true))) {
                // line 51
                echo "                <input type=\"checkbox\" disabled readonly checked />
                ";
            } else {
                // line 53
                echo "                <input type=\"checkbox\" disabled readonly />
                ";
            }
            // line 55
            echo "            </td>
            <td>";
            // line 56
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "vidange", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "vidange", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            ";
            // line 57
            $context["quotient"] = 0;
            // line 58
            echo "            ";
            if (($this->getAttribute($context["entity"], "vidange", array()) != 0)) {
                // line 59
                echo "            ";
                $context["quotient"] = ($this->getAttribute($context["entity"], "compteur", array()) / $this->getAttribute($context["entity"], "vidange", array()));
                // line 60
                echo "            ";
            }
            // line 61
            echo "            <td>";
            echo twig_escape_filter($this->env, twig_round((isset($context["quotient"]) ? $context["quotient"] : $this->getContext($context, "quotient")), 0, "floor"), "html", null, true);
            echo "</td>
            <td>";
            // line 62
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "nombreVidange", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "nombreVidange", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td>";
            // line 63
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "compteur", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "compteur", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td>";
            // line 64
            if ($this->getAttribute($context["entity"], "dateLancement", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateLancement", array()), "d/m/Y"), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 65
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "depot", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "depot", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td class=\"col-md-6\">
                ";
            // line 67
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affVehicule", array())) {
                // line 68
                echo "                <div class=\"col-md-2\">
                    <a target=\"_blank\" href=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vehicule_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                        <button title=\"Afficher\" type=\"submit\">
                            <img id=\"inputButtonAfficher\" title=\"Afficher\" src=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/apercu.png"), "html", null, true);
                echo "\" />
                        </button>
                    </a> 
                </div>
                
                ";
            }
            // line 77
            echo "                ";
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upVehicule", array())) {
                // line 78
                echo "                <div class=\"col-md-2\">
                    <a target=\"_blank\" href=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vehicule_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                        <button title=\"Modifier\" type=\"submit\">
                            <img id=\"inputButtonModifier\" title=\"Modifier\" src=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/modifier.png"), "html", null, true);
                echo "\" />
                        </button>
                    </a> 
                </div>
                
                ";
            }
            // line 87
            echo "               ";
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delVehicule", array())) {
                // line 88
                echo "                <div class=\"col-md-2\">
                        ";
                // line 89
                echo                 $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form');
                echo "
                </div>               
                ";
            }
            // line 92
            echo "                
                ";
            // line 93
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upVehicule", array())) {
                // line 94
                echo "                ";
                if ((twig_round((isset($context["quotient"]) ? $context["quotient"] : $this->getContext($context, "quotient")), 0, "floor") > (($this->getAttribute($context["entity"], "nombreVidange", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "nombreVidange", array()), "-----")) : ("-----")))) {
                    // line 95
                    echo "                <div class=\"col-md-2\">
                        ";
                    // line 96
                    echo                     $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["vidange_form"]) ? $context["vidange_form"] : $this->getContext($context, "vidange_form")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form');
                    echo "
                </div>    
                 ";
                }
                // line 99
                echo "                ";
            }
            // line 100
            echo "            </td>
        </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 102
            echo "<tr><td colspan=\"9\">Aucun véhicule n'existe pour le moment </td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "    </tbody>
</table>
</div>
<div class=\"span12\" style=\"text-align: center\">
    <div class=\"row-fluid\">
        <div class=\"pagination-lg\">";
        // line 109
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "</div>
    </div>
</div>
<br/>
";
        // line 113
        if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crVehicule", array())) {
            // line 114
            echo "<div class=\"row-fluid\">
    <a  href=\"";
            // line 115
            echo $this->env->getExtension('routing')->getPath("vehicule_new");
            echo "\" class=\"pull-right\">
        <button class=\"btn btn-default\">Ajouter une nouvelle entité</button>
    </a>
</div>
    ";
        }
        // line 120
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
        return "FdrAdminBundle:Vehicule:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 120,  303 => 115,  300 => 114,  298 => 113,  291 => 109,  284 => 104,  277 => 102,  270 => 100,  267 => 99,  261 => 96,  258 => 95,  255 => 94,  253 => 93,  250 => 92,  244 => 89,  241 => 88,  238 => 87,  229 => 81,  224 => 79,  221 => 78,  218 => 77,  209 => 71,  204 => 69,  201 => 68,  199 => 67,  194 => 65,  188 => 64,  184 => 63,  180 => 62,  175 => 61,  172 => 60,  169 => 59,  166 => 58,  164 => 57,  160 => 56,  157 => 55,  153 => 53,  149 => 51,  147 => 50,  143 => 48,  139 => 46,  135 => 44,  133 => 43,  128 => 41,  124 => 40,  120 => 39,  116 => 38,  113 => 37,  108 => 36,  85 => 16,  78 => 13,  70 => 11,  63 => 10,  56 => 6,  53 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
