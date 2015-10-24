<?php

/* FdrAdminBundle:Client:index.html.twig */
class __TwigTemplate_3b2982058b0bcfd16043d6008db925bf4c4744c3fb326f733890492fc5009414 extends Twig_Template
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
        echo "Client|Accueil";
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
        echo "<div  class=\"page-header\"> <h1>Liste des Clients</h1></div>

      ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), 'form_start');
        echo "  
<div class=\"row-fluid\">
    <div class=\"span5 offset7\">   

";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "par", array()), 'label', array("label" => " "));
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "par", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "par", array()), 'errors');
        echo "</span>
";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "libelle", array()), 'label', array("label" => " "));
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "libelle", array()), 'widget');
        echo " <span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "libelle", array()), 'errors');
        echo "</span>

";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "submit", array()), 'label', array("label" => " "));
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "submit", array()), 'widget');
        echo "
    </div>
</div>
    ";
        // line 17
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
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 39
            echo "        <tr>
            <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 41
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "nomentreprise", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "nomentreprise", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td>";
            // line 42
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "ville", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "ville", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td>";
            // line 43
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "tel", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "tel", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td>";
            // line 44
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "adresse", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "adresse", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td>";
            // line 45
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "cin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "cin", array()), "---")) : ("---")), "html", null, true);
            echo "</td>
            <td>";
            // line 46
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "email", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "email", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td>";
            // line 47
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "fax", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "fax", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>

            <td>
\t\t\t\t";
            // line 50
            if ($this->getAttribute($context["entity"], "encompte", array())) {
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
            <td>
\t\t\t\t";
            // line 57
            if ($this->getAttribute($context["entity"], "clientaffret", array())) {
                // line 58
                echo "                <input type=\"checkbox\" disabled readonly checked />
                ";
            } else {
                // line 60
                echo "                <input type=\"checkbox\" disabled readonly />
                ";
            }
            // line 62
            echo "            </td>
            <td>
\t\t\t\t";
            // line 64
            if ($this->getAttribute($context["entity"], "clientramass", array())) {
                // line 65
                echo "                <input type=\"checkbox\" disabled readonly checked />
                ";
            } else {
                // line 67
                echo "                <input type=\"checkbox\" disabled readonly />
                ";
            }
            // line 69
            echo "            </td>
            <td>";
            // line 70
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "numcompte", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "numcompte", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td> 
                <ul>
                ";
            // line 73
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entity"], "secteurs", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 74
                echo "                    <li>";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "</li>
                        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 76
                echo "                    <li>Pas de secteur</li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "                </ul>
            </td>
            <td class=\"col-md-9\">
                        ";
            // line 81
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affClient", array())) {
                // line 82
                echo "                <div class=\"col-md-3\">
                    <a target=\"_blank\" href=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                        <button title=\"Afficher\" type=\"submit\">
                            <img id=\"inputButtonAfficher\" title=\"Afficher\" src=\"";
                // line 85
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/apercu.png"), "html", null, true);
                echo "\" />
                        </button>
                    </a> 
                </div>
                        ";
            }
            // line 90
            echo "                        ";
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upClient", array())) {
                // line 91
                echo "                <div class=\"col-md-3\">
                    <a target=\"_blank\" href=\"";
                // line 92
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                        <button title=\"Afficher\" type=\"submit\">
                            <img id=\"inputButtonModifier\" title=\"Modifier\" src=\"";
                // line 94
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/modifier.png"), "html", null, true);
                echo "\" />
                        </button>
                    </a> 
                </div>
                        ";
            }
            // line 99
            echo "                         ";
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delClient", array())) {
                // line 100
                echo "                <div class=\" col-md-3\">

                        ";
                // line 102
                echo                 $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form');
                echo "
                </div>
                        ";
            }
            // line 105
            echo "            </td>
        </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 108
            echo "        <tr><th colspan=\"12\">Aucun client n'existe pour le moment</th></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "    </tbody>
</table>
</div>
<div class=\"span12\" style=\"text-align: center\">
    <div class=\"row-fluid\">
        <div class=\"pagination-lg\">";
        // line 115
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "</div>
    </div>
</div>
<br/>

    ";
        // line 120
        if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crClient", array())) {
            // line 121
            echo "<div class=\"row-fluid\">
    <a target=\"_blank\"  href=\"";
            // line 122
            echo $this->env->getExtension('routing')->getPath("client_new");
            echo "\" class=\"pull-right\">
        <button class=\"btn btn-default\">Ajouter une nouvelle entité</button>
    </a>
</div>
";
        }
        // line 127
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
        return "FdrAdminBundle:Client:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 127,  308 => 122,  305 => 121,  303 => 120,  295 => 115,  288 => 110,  281 => 108,  274 => 105,  268 => 102,  264 => 100,  261 => 99,  253 => 94,  248 => 92,  245 => 91,  242 => 90,  234 => 85,  229 => 83,  226 => 82,  224 => 81,  219 => 78,  212 => 76,  204 => 74,  199 => 73,  193 => 70,  190 => 69,  186 => 67,  182 => 65,  180 => 64,  176 => 62,  172 => 60,  168 => 58,  166 => 57,  162 => 55,  158 => 53,  154 => 51,  152 => 50,  146 => 47,  142 => 46,  138 => 45,  134 => 44,  130 => 43,  126 => 42,  122 => 41,  118 => 40,  115 => 39,  110 => 38,  86 => 17,  79 => 14,  71 => 12,  64 => 11,  57 => 7,  53 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
