<?php

/* FdrAdminBundle:Vehiculee:index.html.twig */
class __TwigTemplate_c4562d5aa26ebc0908c19bc1fd5e8d4b7f17736112f9e3a4ee65a4e0e78eb5c7 extends Twig_Template
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
            
        </tr>
    </thead>
    <tbody>
        ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 26
            echo "        <tr>
            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 28
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "numSociete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "numSociete", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "matricule", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "matricule", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td>";
            // line 30
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "type", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td>
\t\t\t\t";
            // line 32
            if ($this->getAttribute($context["entity"], "remorque", array())) {
                // line 33
                echo "                <input type=\"checkbox\" disabled readonly checked />
                ";
            } else {
                // line 35
                echo "                <input type=\"checkbox\" disabled readonly />
                ";
            }
            // line 37
            echo "            </td>
            <td>
                                    ";
            // line 39
            if (( !(null === $this->getAttribute($context["entity"], "disponibilite", array())) && $this->getAttribute($context["entity"], "disponibilite", array(), "any", true, true))) {
                // line 40
                echo "                <input type=\"checkbox\" disabled readonly checked />
                ";
            } else {
                // line 42
                echo "                <input type=\"checkbox\" disabled readonly />
                ";
            }
            // line 44
            echo "            </td>
            <td>";
            // line 45
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "vidange", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "vidange", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            ";
            // line 46
            $context["quotient"] = 0;
            // line 47
            echo "            ";
            if (($this->getAttribute($context["entity"], "vidange", array()) != 0)) {
                // line 48
                echo "            ";
                $context["quotient"] = ($this->getAttribute($context["entity"], "compteur", array()) / $this->getAttribute($context["entity"], "vidange", array()));
                // line 49
                echo "            ";
            }
            // line 50
            echo "            <td>";
            echo twig_escape_filter($this->env, twig_round((isset($context["quotient"]) ? $context["quotient"] : $this->getContext($context, "quotient")), 0, "floor"), "html", null, true);
            echo "</td>
            <td>";
            // line 51
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "nombreVidange", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "nombreVidange", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td>";
            // line 52
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "compteur", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "compteur", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td>";
            // line 53
            if ($this->getAttribute($context["entity"], "dateLancement", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateLancement", array()), "d/m/Y"), "html", null, true);
            }
            echo "</td>
            <td class=\"col-md-4\">
                ";
            // line 55
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affVehicule", array())) {
                // line 56
                echo "                <div class=\"col-md-2\">
                    <a target=\"_blank\" href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vehicule_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                        <button title=\"Afficher\" type=\"submit\">
                            <img id=\"inputButtonAfficher\" title=\"Afficher\" src=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/apercu.png"), "html", null, true);
                echo "\" />
                        </button>
                    </a> 
                </div>
                
                ";
            }
            // line 65
            echo "                ";
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upVehicule", array())) {
                // line 66
                echo "                <div class=\"col-md-2\">
                    <a target=\"_blank\" href=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vehicule_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                        <button title=\"Modifier\" type=\"submit\">
                            <img id=\"inputButtonModifier\" title=\"Modifier\" src=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/modifier.png"), "html", null, true);
                echo "\" />
                        </button>
                    </a> 
                </div>
                
                ";
            }
            // line 75
            echo "               ";
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delVehicule", array())) {
                // line 76
                echo "                <div class=\"col-md-2\">
                        ";
                // line 77
                echo                 $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form');
                echo "
                </div>               
                ";
            }
            // line 80
            echo "                
                ";
            // line 81
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upVehicule", array())) {
                // line 82
                echo "                ";
                if ((twig_round((isset($context["quotient"]) ? $context["quotient"] : $this->getContext($context, "quotient")), 0, "floor") > (($this->getAttribute($context["entity"], "nombreVidange", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "nombreVidange", array()), "-----")) : ("-----")))) {
                    // line 83
                    echo "                <div class=\"col-md-2\">
                        ";
                    // line 84
                    echo                     $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["vidange_form"]) ? $context["vidange_form"] : $this->getContext($context, "vidange_form")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form');
                    echo "
                </div>    
                 ";
                }
                // line 87
                echo "                ";
            }
            // line 88
            echo "            </td>
        </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 90
            echo "<tr><td colspan=\"9\">Aucun véhicule n'existe pour le moment </td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "    </tbody>
</table>
</div>
<div class=\"span12\" style=\"text-align: center\">
    <div class=\"row-fluid\">
        <div class=\"pagination-lg\">";
        // line 97
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "</div>
    </div>
</div>
<br/>
";
        // line 101
        if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crVehicule", array())) {
            // line 102
            echo "<div class=\"row-fluid\">
    <a  href=\"";
            // line 103
            echo $this->env->getExtension('routing')->getPath("vehicule_new");
            echo "\" class=\"pull-right\">
        <button class=\"btn btn-default\">Ajouter une nouvelle entité</button>
    </a>
</div>
    ";
        }
        // line 108
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
        return "FdrAdminBundle:Vehiculee:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 108,  266 => 103,  263 => 102,  261 => 101,  254 => 97,  247 => 92,  240 => 90,  233 => 88,  230 => 87,  224 => 84,  221 => 83,  218 => 82,  216 => 81,  213 => 80,  207 => 77,  204 => 76,  201 => 75,  192 => 69,  187 => 67,  184 => 66,  181 => 65,  172 => 59,  167 => 57,  164 => 56,  162 => 55,  155 => 53,  151 => 52,  147 => 51,  142 => 50,  139 => 49,  136 => 48,  133 => 47,  131 => 46,  127 => 45,  124 => 44,  120 => 42,  116 => 40,  114 => 39,  110 => 37,  106 => 35,  102 => 33,  100 => 32,  95 => 30,  91 => 29,  87 => 28,  83 => 27,  80 => 26,  75 => 25,  53 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
