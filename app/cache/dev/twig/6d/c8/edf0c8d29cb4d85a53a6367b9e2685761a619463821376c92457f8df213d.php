<?php

/* FdrAdminBundle:Chauffeurr:recherche.html.twig */
class __TwigTemplate_6dc8edf0c8d29cb4d85a53a6367b9e2685761a619463821376c92457f8df213d extends Twig_Template
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
            </tr>
        </thead>
        <tbody>
        ";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 42
            echo "            <tr>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "nom", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "nom", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "prenom", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "prenom", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "tel", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "tel", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "matricule", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "matricule", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "cin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "cin", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "adresse", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "adresse", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>               
                <td>
                ";
            // line 51
            if ($this->getAttribute($context["entity"], "disponibilite", array())) {
                // line 52
                echo "                    <input type=\"checkbox\" disabled readonly checked />
                ";
            } else {
                // line 54
                echo "                    <input type=\"checkbox\" disabled readonly />
                ";
            }
            // line 56
            echo "                </td>
                <td>";
            // line 57
            if ($this->getAttribute($context["entity"], "dateembauche", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateembauche", array()), "d/m/Y"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 58
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "typeConvention", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "typeConvention", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td> 
                <td>";
            // line 59
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "etatContrat", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "etatContrat", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td> 
                <td>
                ";
            // line 61
            if ($this->getAttribute($context["entity"], "conventionne", array())) {
                // line 62
                echo "                    <input type=\"checkbox\" disabled readonly checked />
                ";
            } else {
                // line 64
                echo "                    <input type=\"checkbox\" disabled readonly />
                ";
            }
            // line 66
            echo "                </td>
               <td class=\"col-md-6\">
                    ";
            // line 68
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affChauffeur", array())) {
                // line 69
                echo "                    <div class=\"col-md-2\">
                        
                          <a target=\"_blank\"  href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chauffeur_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                                <button class=\"btn-default\" title=\"Afficher\" type=\"submit\">  <img id=\"inputButtonAfficher\" title=\"Afficher\" src=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/apercu.png"), "html", null, true);
                echo "\" />
                             </button></a> 
                       
                    </div>
                   ";
            }
            // line 77
            echo "                    ";
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upChauffeur", array())) {
                // line 78
                echo "                    <div class=\"col-md-2\">
                       
                            <a target=\"_blank\"  href=\"";
                // line 80
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chauffeur_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                                <button class=\"btn-default\" title=\"Modifier\" type=\"submit\"> <img id=\"inputButtonModifier\" title=\"Modifier\" src=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/modifier.png"), "html", null, true);
                echo "\" />
                            </button> </a> 
                       
                    </div>
                    ";
            }
            // line 86
            echo "                    ";
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delChauffeur", array())) {
                // line 87
                echo "                    <div class=\"col-md-2\">
                        ";
                // line 88
                echo                 $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form');
                echo "
                    </div>
                    ";
            }
            // line 91
            echo "                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 93
            echo "<tr><td colspan=\"12\"><em>Aucun chauffeur n'existe pour votre recherche</em></td></tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "        </tbody>
    </table>
</div>

<div class=\"row-fluid\">
    <div class=\"pagination-lg\">";
        // line 99
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "</div>
</div>
<br/>
";
        // line 102
        if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affChauffeur", array())) {
            // line 103
            echo "<div class=\"row-fluid\">
    <a  href=\"";
            // line 104
            echo $this->env->getExtension('routing')->getPath("chauffeur");
            echo "\" class=\"pull-right\">
        <button class=\"btn btn-default\">Revenir à la liste</button>
    </a>
</div>
";
        }
        // line 109
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
        return "FdrAdminBundle:Chauffeurr:recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 109,  277 => 104,  274 => 103,  272 => 102,  266 => 99,  259 => 94,  253 => 93,  246 => 91,  240 => 88,  237 => 87,  234 => 86,  226 => 81,  222 => 80,  218 => 78,  215 => 77,  207 => 72,  203 => 71,  199 => 69,  197 => 68,  193 => 66,  189 => 64,  185 => 62,  183 => 61,  178 => 59,  174 => 58,  168 => 57,  165 => 56,  161 => 54,  157 => 52,  155 => 51,  150 => 49,  146 => 48,  142 => 47,  138 => 46,  134 => 45,  130 => 44,  126 => 43,  123 => 42,  118 => 41,  95 => 21,  88 => 18,  80 => 16,  73 => 15,  65 => 10,  58 => 8,  53 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
