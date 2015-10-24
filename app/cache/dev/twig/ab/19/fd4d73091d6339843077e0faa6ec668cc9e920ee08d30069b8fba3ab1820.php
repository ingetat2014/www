<?php

/* FdrAdminBundle:Manutentionnaire:recherche.html.twig */
class __TwigTemplate_ab19fd4d73091d6339843077e0faa6ec668cc9e920ee08d30069b8fba3ab1820 extends Twig_Template
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
        echo "Manutentionnaire|Recherche";
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
        echo "<div  class=\"page-header\"> <h1>Recherche des Manutentionnaires</h1></div>
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
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "par", array()), 'label', array("label" => " "));
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "par", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "par", array()), 'errors');
        echo "</span>
";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "libelle", array()), 'label', array("label" => " "));
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "libelle", array()), 'widget');
        echo " <span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "libelle", array()), 'errors');
        echo "</span>

";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "submit", array()), 'label', array("label" => " "));
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "submit", array()), 'widget');
        echo "
    </div>
</div>
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
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "nom", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "nom", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td>";
            // line 42
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "prenom", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "prenom", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td>";
            // line 43
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "matricule", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "matricule", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td>
                ";
            // line 45
            if ($this->getAttribute($context["entity"], "disponibilite", array())) {
                // line 46
                echo "                <input type=\"checkbox\" disabled readonly checked />
                ";
            } else {
                // line 48
                echo "                <input type=\"checkbox\" disabled readonly />
                ";
            }
            // line 50
            echo "            </td>
            <td>";
            // line 51
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "type", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td>";
            // line 52
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "cin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "cin", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td>";
            // line 53
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "tel", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "tel", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td>";
            // line 54
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "adresse", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "adresse", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td>";
            // line 55
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "etatContrat", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "etatContrat", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td class=\"col-md-4\">
                        ";
            // line 57
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affManutentionnaire", array())) {
                // line 58
                echo "                <div class=\"col-md-2\">
                    <a target=\"_blank\"  href=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("manutentionnaire_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                        <button title=\"Afficher\" type=\"submit\">
                            <img id=\"inputButtonAfficher\" title=\"Afficher\" src=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/apercu.png"), "html", null, true);
                echo "\" />
                        </button>
                    </a> 
                </div>
                
                        ";
            }
            // line 67
            echo "                        ";
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upManutentionnaire", array())) {
                // line 68
                echo "                <div class=\"col-md-2\">
                    <a target=\"_blank\"  href=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("manutentionnaire_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                        <button title=\"Modifier\" type=\"submit\">
                            <img id=\"inputButtonModifier\" title=\"Modifier\" src=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/modifier.png"), "html", null, true);
                echo "\" />
                        </button>
                    </a> 
                </div>
                
                        ";
            }
            // line 77
            echo "                       ";
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delManutentionnaire", array())) {
                // line 78
                echo "                <div class=\"col-md-2\">

                        ";
                // line 80
                echo                 $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form');
                echo "
                </div>
                
                        ";
            }
            // line 84
            echo "            </td>
        </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 86
            echo "<tr><td colspan=\"11\"><em>Aucun manutentionnaire n'existe pour votre recherche</em></td></tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "    </tbody>
</table>
</div>
<div class=\"span12\" style=\"text-align: center\">
    <div class=\"row-fluid\">
        <div class=\"pagination-lg\">";
        // line 92
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "</div>
    </div>
</div>
<br/>
    ";
        // line 96
        if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affManutentionnaire", array())) {
            // line 97
            echo "<div class=\"row-fluid\">
    <a  href=\"";
            // line 98
            echo $this->env->getExtension('routing')->getPath("manutentionnaire");
            echo "\" class=\"pull-right\">
        <button class=\"btn btn-default\">Revenir à la liste</button>
    </a>
</div>
";
        }
        // line 103
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
        return "FdrAdminBundle:Manutentionnaire:recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 103,  256 => 98,  253 => 97,  251 => 96,  244 => 92,  237 => 87,  231 => 86,  224 => 84,  217 => 80,  213 => 78,  210 => 77,  201 => 71,  196 => 69,  193 => 68,  190 => 67,  181 => 61,  176 => 59,  173 => 58,  171 => 57,  166 => 55,  162 => 54,  158 => 53,  154 => 52,  150 => 51,  147 => 50,  143 => 48,  139 => 46,  137 => 45,  132 => 43,  128 => 42,  124 => 41,  120 => 40,  117 => 39,  112 => 38,  87 => 17,  79 => 15,  72 => 14,  64 => 9,  57 => 7,  53 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
