<?php

/* FdrAdminBundle:Manutentionnaire:index.html.twig */
class __TwigTemplate_f791e0a373dd2b79d1e79da1b9cf37161a766a2f0c9e5bf4bdc0d1b55dbd2e62 extends Twig_Template
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
        echo "Manutentionnaire|Accueil";
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
        echo "<div  class=\"page-header\"> <h1>Liste des Manutentionnaires</h1></div>
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
            <th>Nom</th>
            <th>Prenom</th>
            <th>Matricule</th>
            <th>Disponibilité</th>
            <th>Type</th>
            <th>Cin</th>
            <th>Tel</th>
            <th>Adresse</th>
            <th>Etat Contrat</th>
            
        </tr>
    </thead>
    <tbody>
        ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 36
            echo "        <tr>
            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 38
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "nom", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "nom", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td>";
            // line 39
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "prenom", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "prenom", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td>";
            // line 40
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "matricule", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "matricule", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td>
                ";
            // line 42
            if ($this->getAttribute($context["entity"], "disponibilite", array())) {
                // line 43
                echo "                <input type=\"checkbox\" disabled readonly checked />
                ";
            } else {
                // line 45
                echo "                <input type=\"checkbox\" disabled readonly />
                ";
            }
            // line 47
            echo "            </td>
            <td>";
            // line 48
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "type", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td>";
            // line 49
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "cin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "cin", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td>";
            // line 50
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "tel", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "tel", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td>";
            // line 51
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "adresse", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "adresse", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td>";
            // line 52
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "etatContrat", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "etatContrat", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
           <td class=\"col-md-4\">
                        ";
            // line 54
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affManutentionnaire", array())) {
                // line 55
                echo "                <div class=\"col-md-2\">
                    <a target=\"_blank\"  href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("manutentionnaire_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                        <button title=\"Afficher\" type=\"submit\">
                            <img id=\"inputButtonAfficher\" title=\"Afficher\" src=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/apercu.png"), "html", null, true);
                echo "\" />
                        </button>
                    </a> 
                </div>
                
                        ";
            }
            // line 64
            echo "                        ";
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upManutentionnaire", array())) {
                // line 65
                echo "                <div class=\"col-md-2\">
                    <a target=\"_blank\"  href=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("manutentionnaire_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                        <button title=\"Modifier\" type=\"submit\">
                            <img id=\"inputButtonModifier\" title=\"Modifier\" src=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/modifier.png"), "html", null, true);
                echo "\" />
                        </button>
                    </a> 
                </div>
                
                        ";
            }
            // line 74
            echo "                       ";
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delManutentionnaire", array())) {
                // line 75
                echo "                <div class=\"col-md-2\">

                        ";
                // line 77
                echo                 $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form');
                echo "
                </div>
                
                        ";
            }
            // line 81
            echo "            </td>
        </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 83
            echo "<tr><td colspan=\"11\"><em>Aucun manutentionnaire n'existe pour le moment</em></td></tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "    </tbody>
</table>
</div>
<div class=\"span12\" style=\"text-align: center\">
    <div class=\"row-fluid\">
        <div class=\"pagination-lg\">";
        // line 89
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "</div>
    </div>
</div>
<br/>
    ";
        // line 93
        if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crManutentionnaire", array())) {
            // line 94
            echo "<div class=\"row-fluid\">
    <a target=\"_blank\" href=\"";
            // line 95
            echo $this->env->getExtension('routing')->getPath("manutentionnaire_new");
            echo "\" class=\"pull-right\">
        <button class=\"btn btn-default\">Ajouter une nouvelle entité</button>
    </a>
</div>
    ";
        }
        // line 100
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
</script>
";
    }

    public function getTemplateName()
    {
        return "FdrAdminBundle:Manutentionnaire:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 100,  251 => 95,  248 => 94,  246 => 93,  239 => 89,  232 => 84,  226 => 83,  219 => 81,  212 => 77,  208 => 75,  205 => 74,  196 => 68,  191 => 66,  188 => 65,  185 => 64,  176 => 58,  171 => 56,  168 => 55,  166 => 54,  161 => 52,  157 => 51,  153 => 50,  149 => 49,  145 => 48,  142 => 47,  138 => 45,  134 => 43,  132 => 42,  127 => 40,  123 => 39,  119 => 38,  115 => 37,  112 => 36,  107 => 35,  85 => 16,  78 => 13,  70 => 11,  63 => 10,  56 => 6,  53 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
