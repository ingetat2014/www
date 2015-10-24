<?php

/* FdrAdminBundle:Client:recherche.html.twig */
class __TwigTemplate_6ffa6bd34e52414a5bbdfe30652781bf851a1e7838f08f8fac10de09b00aa659 extends Twig_Template
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
        echo "Client|Recherche";
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
        echo "<div  class=\"page-header\"> <h1>Recherche des Clients</h1></div>
<div class=\"row-fluid anime\">
    <span class=\"text-primary badge \"> ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["par"]) ? $context["par"] : $this->getContext($context, "par")), "html", null, true);
        echo "</span> &#10174; <span class=\"badge\"> ";
        echo twig_escape_filter($this->env, (isset($context["keyword"]) ? $context["keyword"] : $this->getContext($context, "keyword")), "html", null, true);
        echo " </span>
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
            <th>Nom d'entreprise/Physique</th>
            <th>Ville</th>
            <th>Telephone</th>
            <th>Adresse</th>
            <th>CIN.</th>
            <th>Email</th>
            <th>Fax</th>                
            <th>Encompte</th>
            <th>Client-Affret</th>
            <th>Client-Ram</th>
            <th>Num.Compte</th>
            <th>Secteur(s)</th>
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
            echo "        <tr>
            <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 43
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "nomentreprise", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "nomentreprise", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td>";
            // line 44
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "ville", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "ville", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td>";
            // line 45
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "tel", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "tel", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td>";
            // line 46
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "adresse", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "adresse", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td>";
            // line 47
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "cin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "cin", array()), "---")) : ("---")), "html", null, true);
            echo "</td>
            <td>";
            // line 48
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "email", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "email", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td>";
            // line 49
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "fax", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "fax", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>

            <td>
\t\t\t\t";
            // line 52
            if ($this->getAttribute($context["entity"], "encompte", array())) {
                // line 53
                echo "                <input type=\"checkbox\" disabled readonly checked />
                ";
            } else {
                // line 55
                echo "                <input type=\"checkbox\" disabled readonly />
                ";
            }
            // line 57
            echo "            </td>
            <td>
\t\t\t\t";
            // line 59
            if ($this->getAttribute($context["entity"], "clientaffret", array())) {
                // line 60
                echo "                <input type=\"checkbox\" disabled readonly checked />
                ";
            } else {
                // line 62
                echo "                <input type=\"checkbox\" disabled readonly />
                ";
            }
            // line 64
            echo "            </td>
            <td>
\t\t\t\t";
            // line 66
            if ($this->getAttribute($context["entity"], "clientramass", array())) {
                // line 67
                echo "                <input type=\"checkbox\" disabled readonly checked />
                ";
            } else {
                // line 69
                echo "                <input type=\"checkbox\" disabled readonly />
                ";
            }
            // line 71
            echo "            </td>
            <td>";
            // line 72
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "numcompte", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "numcompte", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td> 
                <ul>
                ";
            // line 75
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entity"], "secteurs", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 76
                echo "                    <li>";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "</li>
                        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 78
                echo "                    <li>Pas de secteur</li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "                </ul>
            </td>
            <td class=\"col-md-9\">
                        ";
            // line 83
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affClient", array())) {
                // line 84
                echo "                <div class=\"col-md-3\">
                    <a target=\"_blank\" href=\"";
                // line 85
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                        <button title=\"Afficher\" type=\"submit\">
                            <img id=\"inputButtonAfficher\" title=\"Afficher\" src=\"";
                // line 87
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/apercu.png"), "html", null, true);
                echo "\" />
                        </button>
                    </a> 
                </div>
                        ";
            }
            // line 92
            echo "                        ";
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upClient", array())) {
                // line 93
                echo "                <div class=\"col-md-3\">
                    <a target=\"_blank\" href=\"";
                // line 94
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                        <button title=\"Afficher\" type=\"submit\">
                            <img id=\"inputButtonModifier\" title=\"Modifier\" src=\"";
                // line 96
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/modifier.png"), "html", null, true);
                echo "\" />
                        </button>
                    </a> 
                </div>
                        ";
            }
            // line 101
            echo "                         ";
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delClient", array())) {
                // line 102
                echo "                <div class=\" col-md-3\">

                        ";
                // line 104
                echo                 $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form');
                echo "
                </div>
                        ";
            }
            // line 107
            echo "            </td>
        </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 110
            echo "        <tr><td colspan=\"13\">Aucun client n'existe pour votre recherche</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "    </tbody>
</table>
</div>
<div class=\"span12\" style=\"text-align: center\">
    <div class=\"row-fluid\">
        <div class=\"pagination-lg\">";
        // line 117
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "</div>
    </div>
</div>
<br/>
";
        // line 121
        if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affClient", array())) {
            // line 122
            echo "<div class=\"row-fluid\">
    <a  href=\"";
            // line 123
            echo $this->env->getExtension('routing')->getPath("client");
            echo "\" class=\"pull-right\">
        <button class=\"btn btn-default\">Revenir à la liste</button>
    </a>
</div>
";
        }
        // line 128
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
        return "FdrAdminBundle:Client:recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 128,  314 => 123,  311 => 122,  309 => 121,  302 => 117,  295 => 112,  288 => 110,  281 => 107,  275 => 104,  271 => 102,  268 => 101,  260 => 96,  255 => 94,  252 => 93,  249 => 92,  241 => 87,  236 => 85,  233 => 84,  231 => 83,  226 => 80,  219 => 78,  211 => 76,  206 => 75,  200 => 72,  197 => 71,  193 => 69,  189 => 67,  187 => 66,  183 => 64,  179 => 62,  175 => 60,  173 => 59,  169 => 57,  165 => 55,  161 => 53,  159 => 52,  153 => 49,  149 => 48,  145 => 47,  141 => 46,  137 => 45,  133 => 44,  129 => 43,  125 => 42,  122 => 41,  117 => 40,  93 => 19,  86 => 16,  78 => 14,  71 => 13,  64 => 9,  57 => 7,  53 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
