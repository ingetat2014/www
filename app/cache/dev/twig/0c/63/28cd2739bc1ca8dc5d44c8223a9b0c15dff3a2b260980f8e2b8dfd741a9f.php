<?php

/* FdrAdminBundle:Role:recherche.html.twig */
class __TwigTemplate_0c6328cd2739bc1ca8dc5d44c8223a9b0c15dff3a2b260980f8e2b8dfd741a9f extends Twig_Template
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
        echo "Role|Recherche";
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
    <h1>Recherche des Roles</h1>
</div>
<div class=\"row-fluid\">
    <span class=\"text-primary badge \"> ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["par"]) ? $context["par"] : $this->getContext($context, "par")), "html", null, true);
        echo "</span> | <span class=\"badge\">' ";
        echo twig_escape_filter($this->env, (isset($context["keyword"]) ? $context["keyword"] : $this->getContext($context, "keyword")), "html", null, true);
        echo "'</span>
</div>
\t";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), 'form_start');
        echo "  
<div class=\"row-fluid\">
    <div class=\"span5 offset7\">   

";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "par", array()), 'label', array("label" => " "));
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "par", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "par", array()), 'errors');
        echo "</span>
";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "libelle", array()), 'label', array("label" => " "));
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "libelle", array()), 'widget');
        echo " <span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "libelle", array()), 'errors');
        echo "</span>

";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "submit", array()), 'label', array("label" => " "));
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "submit", array()), 'widget');
        echo "
    </div>
</div>
    ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), 'form_end');
        echo "
<div class=\"row-fluid\">
        ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "accuseSuppression"), "method"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 24
            echo "    <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "</div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 26
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</div>
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
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 41
            echo "            <tr class=\"";
            echo (((twig_slice($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()), 0, array(), "array"), 5) == $context["entity"])) ? ("monRole") : (""));
            echo "\" title=\"";
            echo (((twig_slice($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()), 0, array(), "array"), 5) == $context["entity"])) ? ("Votre role") : (""));
            echo "\">
                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "nomRole", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "nomRole", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "description", array()), " !Non mentionnée ")) : (" !Non mentionnée ")), "html", null, true);
            echo "</td>
                <td class=\"col-md-4\">
                        ";
            // line 46
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affRole", array())) {
                // line 47
                echo "                    <div class=\"col-md-2\">
                        
                            <a target=\"_blank\" href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("role_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<button class=\"btn-default\" title=\"Afficher\" type=\"submit\">
                                <img id=\"inputButtonAfficher\" title=\"Afficher\" src=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/apercu.png"), "html", null, true);
                echo "\" />
\t\t\t\t\t\t\t\t </button>
                            </a> 
                       
                    </div>
                     ";
            }
            // line 57
            echo "                     ";
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upRole", array())) {
                // line 58
                echo "                    ";
                if ((twig_slice($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()), 0, array(), "array"), 5) != $context["entity"])) {
                    // line 59
                    echo "                    <div class=\"col-md-2\">
                        
                            <a target=\"_blank\" href=\"";
                    // line 61
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("role_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\">
                                <button class=\"btn-default\" title=\"Modifier\" type=\"submit\">
                                <img id=\"inputButtonModifier\" title=\"Modifier\" src=\"";
                    // line 63
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/modifier.png"), "html", null, true);
                    echo "\" />
                            
                        </button>
                                </a> 

                    </div>
                    ";
                    // line 69
                    if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delRole", array())) {
                        // line 70
                        echo "                    <div class=\"col-md-2\">
                        ";
                        // line 71
                        echo                         $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form');
                        echo "
                    </div>
                     ";
                    }
                    // line 74
                    echo "                    ";
                }
                // line 75
                echo "                    ";
            }
            echo " 
                     
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 79
            echo "<tr><td colspan=\"3\"><em>Aucune entité n'existe pour le moment</em></td></tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "        </tbody>
    </table>
</div>
<br/>
        ";
        // line 84
        if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affRole", array())) {
            // line 85
            echo "<div class=\"row-fluid\">
    <a  href=\"";
            // line 86
            echo $this->env->getExtension('routing')->getPath("role");
            echo "\" class=\"pull-right\">
        <button class=\"btn btn-default\">Revenir à la liste</button>
    </a>
</div>
";
        }
        // line 91
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
        return "FdrAdminBundle:Role:recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 91,  245 => 86,  242 => 85,  240 => 84,  234 => 80,  228 => 79,  217 => 75,  214 => 74,  208 => 71,  205 => 70,  203 => 69,  194 => 63,  189 => 61,  185 => 59,  182 => 58,  179 => 57,  170 => 51,  165 => 49,  161 => 47,  159 => 46,  154 => 44,  150 => 43,  146 => 42,  139 => 41,  134 => 40,  119 => 27,  113 => 26,  105 => 24,  100 => 23,  95 => 21,  88 => 18,  80 => 16,  73 => 15,  66 => 11,  59 => 9,  53 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
