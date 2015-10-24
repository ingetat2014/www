<?php

/* FdrAdminBundle:Role:index.html.twig */
class __TwigTemplate_c40a710d0c07ed66624ef7c42ddf587c0d0ab7dc3a219de46dae3b1690214ad7 extends Twig_Template
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
        echo "Role|Accueil";
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
        echo "<div  class=\"page-header\">   
    <h1>Liste des Roles</h1>
</div>
\t";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), 'form_start');
        echo "  
<div class=\"row-fluid\">
    <div class=\"span5 offset7\">   

";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "par", array()), 'label', array("label" => " "));
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "par", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "par", array()), 'errors');
        echo "</span>
";
        // line 13
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), 'form_end');
        echo "
<div class=\"row-fluid\">

    <table class=\"table-responsive records_list table-bordered table-condensed\">
        <thead>
            <tr>
                <th>Code</th>
                <th>Nom Du Role</th>
                <th>Description</th>
                
            </tr>
        </thead>
        <tbody>
        ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 32
            echo "            <tr class=\"";
            echo (((twig_slice($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()), 0, array(), "array"), 5) == $context["entity"])) ? ("monRole") : (""));
            echo "\" title=\"";
            echo (((twig_slice($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()), 0, array(), "array"), 5) == $context["entity"])) ? ("Votre role") : (""));
            echo "\">
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "nomRole", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "nomRole", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "description", array()), " !Non mentionnée ")) : (" !Non mentionnée ")), "html", null, true);
            echo "</td>
                <td class=\"col-md-4\">
                        ";
            // line 37
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affRole", array())) {
                // line 38
                echo "                    <div class=\"col-md-2\">
                        
                            <a target=\"_blank\" href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("role_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<button class=\"btn-default\" title=\"Afficher\" type=\"submit\">
                                <img id=\"inputButtonAfficher\" title=\"Afficher\" src=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/apercu.png"), "html", null, true);
                echo "\" />
\t\t\t\t\t\t\t\t </button>
                            </a> 
                       
                    </div>
                     ";
            }
            // line 48
            echo "                     ";
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upRole", array())) {
                // line 49
                echo "                    ";
                if ((twig_slice($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()), 0, array(), "array"), 5) != $context["entity"])) {
                    // line 50
                    echo "                    <div class=\"col-md-2\">
                        
                            <a target=\"_blank\" href=\"";
                    // line 52
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("role_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\">
                                <button class=\"btn-default\" title=\"Modifier\" type=\"submit\">
                                <img id=\"inputButtonModifier\" title=\"Modifier\" src=\"";
                    // line 54
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/modifier.png"), "html", null, true);
                    echo "\" />
                            
                        </button>
                                </a> 

                    </div>
                    ";
                    // line 60
                    if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delRole", array())) {
                        // line 61
                        echo "                    <div class=\"col-md-2\">
                        ";
                        // line 62
                        echo                         $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form');
                        echo "
                    </div>
                     ";
                    }
                    // line 65
                    echo "                    ";
                }
                // line 66
                echo "                    ";
            }
            echo " 
                     
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 70
            echo "<tr><td colspan=\"3\"><em>Aucune entité n'existe pour le moment</em></td></tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "        </tbody>
    </table>
</div>
<div class=\"row-fluid\">
    <div class=\"pagination-lg\">";
        // line 75
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "</div>
</div>

<br/>
       ";
        // line 79
        if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crRole", array())) {
            // line 80
            echo "<div class=\"row-fluid\">
    <a href=\"";
            // line 81
            echo $this->env->getExtension('routing')->getPath("role_new");
            echo "\" class=\"pull-right\">
        <button class=\"btn btn-default\">Ajouter une nouvelle entité</button>
    </a>
</div>
    ";
        }
        // line 86
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
        return "FdrAdminBundle:Role:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 86,  221 => 81,  218 => 80,  216 => 79,  209 => 75,  203 => 71,  197 => 70,  186 => 66,  183 => 65,  177 => 62,  174 => 61,  172 => 60,  163 => 54,  158 => 52,  154 => 50,  151 => 49,  148 => 48,  139 => 42,  134 => 40,  130 => 38,  128 => 37,  123 => 35,  119 => 34,  115 => 33,  108 => 32,  103 => 31,  87 => 18,  80 => 15,  72 => 13,  65 => 12,  58 => 8,  53 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
