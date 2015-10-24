<?php

/* FdrAdminBundle:TypeConsommation:index.html.twig */
class __TwigTemplate_6d63da0d48bffde00b93199c63d3c25057df07873b2af74bfe71239f8ed92fb6 extends Twig_Template
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
        echo "TypeConsommation|Accueil";
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
        echo "<div  class=\"page-header\"> <h1>Liste des Types de Consommation</h1></div>
<div class=\"row-fluid\">
<table class=\"table-responsive records_list table-bordered table-condensed\">
    <thead>
        <tr>
            <th>Code</th>
            <th>Type</th>
            <th>Depot</th>
            <th>Produit</th>
            <th>Ville</th>
            <th>Prix Unitaire(Dhs)</th>
            
        </tr>
    </thead>
    <tbody>
        ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 21
            echo "        <tr>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "type", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td>";
            // line 24
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "depot", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "depot", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "produit", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "produit", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "ville", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "ville", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td>";
            // line 27
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "prixUnitaire", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "prixUnitaire", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td class=\"col-md-6\">
                        ";
            // line 29
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affTypeConsommation", array())) {
                // line 30
                echo "                <div class=\"col-md-2\">
                    <a target=\"_blank\" href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("typeconsommation_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                        <button title=\"Afficher\" type=\"submit\">
                            <img id=\"inputButtonAfficher\" title=\"Afficher\" src=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/apercu.png"), "html", null, true);
                echo "\" />
                        </button>
                    </a> 
                </div>
                
                         ";
            }
            // line 39
            echo "                        ";
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upTypeConsommation", array())) {
                // line 40
                echo "                <div class=\"col-md-2\">
                    <a target=\"_blank\" href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("typeconsommation_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                        <button title=\"Modifier\" type=\"submit\">
                            <img id=\"inputButtonModifier\" title=\"Modifier\" src=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/modifier.png"), "html", null, true);
                echo "\" />
                        </button>
                    </a> 
                </div>
                
                         ";
            }
            // line 49
            echo "                        ";
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delTypeConsommation", array())) {
                // line 50
                echo "                <div class=\"col-md-2\">

                        ";
                // line 52
                echo                 $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form');
                echo "
                </div>
                
                         ";
            }
            // line 56
            echo "            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "    </tbody>
</table>
</div>
<div class=\"span12\" style=\"text-align: center\">
    <div class=\"row-fluid\">
        <div class=\"pagination-lg\">";
        // line 64
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "</div>
    </div>
</div>
<br/>
        ";
        // line 68
        if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crTypeConsommation", array())) {
            // line 69
            echo "<div class=\"row-fluid\">
    <a href=\"";
            // line 70
            echo $this->env->getExtension('routing')->getPath("typeconsommation_new");
            echo "\" class=\"pull-right\">
        <button class=\"btn btn-default\">Ajouter une nouvelle entité</button>
    </a>
</div>
    ";
        }
        // line 75
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
        return "FdrAdminBundle:TypeConsommation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 75,  182 => 70,  179 => 69,  177 => 68,  170 => 64,  163 => 59,  155 => 56,  148 => 52,  144 => 50,  141 => 49,  132 => 43,  127 => 41,  124 => 40,  121 => 39,  112 => 33,  107 => 31,  104 => 30,  102 => 29,  97 => 27,  93 => 26,  89 => 25,  85 => 24,  81 => 23,  77 => 22,  74 => 21,  70 => 20,  53 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
