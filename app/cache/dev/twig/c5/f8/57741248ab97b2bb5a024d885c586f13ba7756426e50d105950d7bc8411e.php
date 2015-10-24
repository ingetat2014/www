<?php

/* FdrAdminBundle:Depot:recherche.html.twig */
class __TwigTemplate_c5f857741248ab97b2bb5a024d885c586f13ba7756426e50d105950d7bc8411e extends Twig_Template
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
        echo "Depot|Recherche";
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
        echo "<div class=\"page-header\"><h2> Recherche des depots</h2></div>
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
                <th>Libelle</th>
                <th>Ville</th>
                <th>Adresse</th>
                <th>Filiale</th>
                <th>Ayant Station</th>
                
            </tr>
        </thead>
        <tbody>
        ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 35
            echo "            <tr>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "libelle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "libelle", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "ville", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "ville", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            if ($this->getAttribute($context["entity"], "adresse", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "date", array()), "Y/m/d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "filiale", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "filiale", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "station", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "station", array()), "Non")) : ("Non")), "html", null, true);
            echo "</td>

                <td class=\"col-md-6\">
                                    ";
            // line 44
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affDepot", array())) {
                // line 45
                echo "                    <div class=\"col-md-2\">
                        
                            <a target=\"_blank\" href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("depot_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<button class=\"btn-default\" title=\"Afficher\" type=\"submit\">
                                <img id=\"inputButtonAfficher\" title=\"Afficher\" src=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/apercu.png"), "html", null, true);
                echo "\" />
\t\t\t\t\t\t\t\t </button>
                            </a> 
                       
                    </div>
                                    ";
            }
            // line 55
            echo "                          ";
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upDepot", array())) {
                // line 56
                echo "                    <div class=\"col-md-2\">
                        
                            <a target=\"_blank\"  href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("depot_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<button class=\"btn-default\" title=\"Modifier\" type=\"submit\">
                                <img id=\"inputButtonModifier\" title=\"Modifier\" src=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/modifier.png"), "html", null, true);
                echo "\" />
\t\t\t\t\t\t\t\t </button>
                            </a> 
                       
                    </div>
                                    ";
            }
            // line 66
            echo "                                ";
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delDepot", array())) {
                echo "    
                    <div class=\"col-md-2\">
                        ";
                // line 68
                echo                 $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form');
                echo "
                    </div>
                                    ";
            }
            // line 71
            echo "                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 73
            echo "<tr><td colspan=\"6\"><em>Aucun depôt n'existe pour le moment</em></td></tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "        </tbody>
    </table>
</div>


<br/>          
       ";
        // line 80
        if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affDepot", array())) {
            // line 81
            echo "<div class=\"row-fluid\">
    <a  href=\"";
            // line 82
            echo $this->env->getExtension('routing')->getPath("depot");
            echo "\" class=\"pull-right\">
        <button class=\"btn btn-default\">Revenir à la liste</button>
    </a>
</div>
";
        }
        // line 87
        echo "
<script>
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
        return "FdrAdminBundle:Depot:recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 87,  226 => 82,  223 => 81,  221 => 80,  213 => 74,  207 => 73,  200 => 71,  194 => 68,  188 => 66,  179 => 60,  174 => 58,  170 => 56,  167 => 55,  158 => 49,  153 => 47,  149 => 45,  147 => 44,  141 => 41,  137 => 40,  131 => 39,  127 => 38,  123 => 37,  119 => 36,  116 => 35,  111 => 34,  93 => 19,  86 => 16,  78 => 14,  71 => 13,  64 => 9,  57 => 7,  53 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
