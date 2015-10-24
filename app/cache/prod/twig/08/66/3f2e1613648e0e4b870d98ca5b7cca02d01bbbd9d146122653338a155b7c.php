<?php

/* FdrAdminBundle:Chauffeur:recherche.html.twig */
class __TwigTemplate_08663f2e1613648e0e4b870d98ca5b7cca02d01bbbd9d146122653338a155b7c extends Twig_Template
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
        echo "Chauffeur|Recherche";
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
        echo "<div class=\"page-header\"><h2> Recherche des Chauffeurs</h2></div>

<div class=\"row-fluid anime\">
    <span class=\"text-primary badge \"> ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["par"]) ? $context["par"] : $this->getContext($context, "par")), "html", null, true);
        echo "</span> &#10174; <span class=\"badge\"> ";
        echo twig_escape_filter($this->env, (isset($context["keyword"]) ? $context["keyword"] : $this->getContext($context, "keyword")), "html", null, true);
        echo " </span>
</div>
  ";
        // line 10
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
    <table class=\"table-responsive records_list table-bordered table-condensed\">
        <thead>
            <tr>
                <th>Code</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Telephone</th>
                <th>Matricule</th>
                <th>CIN</th>
                <th>Adresse</th>
                <th>Disponibilite</th>
                <th>Date d'embauche</th>
                <th>Type de Convention</th>
                <th>Etat de contrat</th>
                <th>Conventionné</th>
                <th>Depot</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 43
            echo "            <tr>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "nom", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "nom", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "prenom", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "prenom", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "tel", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "tel", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "matricule", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "matricule", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "cin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "cin", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "adresse", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "adresse", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>               
                <td>
                ";
            // line 52
            if ($this->getAttribute($context["entity"], "disponibilite", array())) {
                // line 53
                echo "                    <input type=\"checkbox\" disabled readonly checked />
                ";
            } else {
                // line 55
                echo "                    <input type=\"checkbox\" disabled readonly />
                ";
            }
            // line 57
            echo "                </td>
                <td>";
            // line 58
            if ($this->getAttribute($context["entity"], "dateembauche", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateembauche", array()), "d/m/Y"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 59
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "typeConvention", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "typeConvention", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td> 
                <td>";
            // line 60
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "etatContrat", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "etatContrat", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td> 
                <td>
                ";
            // line 62
            if ($this->getAttribute($context["entity"], "conventionne", array())) {
                // line 63
                echo "                    <input type=\"checkbox\" disabled readonly checked />
                ";
            } else {
                // line 65
                echo "                    <input type=\"checkbox\" disabled readonly />
                ";
            }
            // line 67
            echo "                </td>
                <td>";
            // line 68
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "depot", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "depot", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td> 
               <td class=\"col-md-6\">
                    ";
            // line 70
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affChauffeur", array())) {
                // line 71
                echo "                    <div class=\"col-md-2\">
                        
                          <a target=\"_blank\"  href=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chauffeur_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                                <button class=\"btn-default\" title=\"Afficher\" type=\"submit\">  <img id=\"inputButtonAfficher\" title=\"Afficher\" src=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/apercu.png"), "html", null, true);
                echo "\" />
                             </button></a> 
                       
                    </div>
                   ";
            }
            // line 79
            echo "                    ";
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upChauffeur", array())) {
                // line 80
                echo "                    <div class=\"col-md-2\">
                       
                            <a target=\"_blank\"  href=\"";
                // line 82
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chauffeur_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                                <button class=\"btn-default\" title=\"Modifier\" type=\"submit\"> <img id=\"inputButtonModifier\" title=\"Modifier\" src=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/modifier.png"), "html", null, true);
                echo "\" />
                            </button> </a> 
                       
                    </div>
                    ";
            }
            // line 88
            echo "                    ";
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delChauffeur", array())) {
                // line 89
                echo "                    <div class=\"col-md-2\">
                        ";
                // line 90
                echo                 $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form');
                echo "
                    </div>
                    ";
            }
            // line 93
            echo "                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 95
            echo "<tr><td colspan=\"12\"><em>Aucun chauffeur n'existe pour votre recherche</em></td></tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "        </tbody>
    </table>
</div>
<div class=\"span12\" style=\"text-align: center\">
<div class=\"row-fluid\">
    <div class=\"pagination-lg\">";
        // line 101
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "</div>
</div>
</div>
<br/>
";
        // line 105
        if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affChauffeur", array())) {
            // line 106
            echo "<div class=\"row-fluid\">
    <a  href=\"";
            // line 107
            echo $this->env->getExtension('routing')->getPath("chauffeur");
            echo "\" class=\"pull-right\">
        <button class=\"btn btn-default\">Revenir à la liste</button>
    </a>
</div>
";
        }
        // line 112
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
        return "FdrAdminBundle:Chauffeur:recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 112,  283 => 107,  280 => 106,  278 => 105,  271 => 101,  264 => 96,  258 => 95,  251 => 93,  245 => 90,  242 => 89,  239 => 88,  231 => 83,  227 => 82,  223 => 80,  220 => 79,  212 => 74,  208 => 73,  204 => 71,  202 => 70,  197 => 68,  194 => 67,  190 => 65,  186 => 63,  184 => 62,  179 => 60,  175 => 59,  169 => 58,  166 => 57,  162 => 55,  158 => 53,  156 => 52,  151 => 50,  147 => 49,  143 => 48,  139 => 47,  135 => 46,  131 => 45,  127 => 44,  124 => 43,  119 => 42,  95 => 21,  88 => 18,  80 => 16,  73 => 15,  65 => 10,  58 => 8,  53 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
