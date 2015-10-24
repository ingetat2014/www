<?php

/* FdrAdminBundle:Chauffeur:index.html.twig */
class __TwigTemplate_ccc5c664c7779f29aabed066b3e223a28ea752ee10bfce703d30829655119917 extends Twig_Template
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
        echo "Chauffeur|Accueil";
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
        echo "<div class=\"page-header\"><h2> Liste des Chauffeurs</h2></div>
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
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 38
            echo "            <tr>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "nom", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "nom", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "prenom", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "prenom", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "tel", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "tel", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "matricule", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "matricule", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "cin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "cin", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "adresse", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "adresse", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>               
                <td>
                ";
            // line 47
            if ($this->getAttribute($context["entity"], "disponibilite", array())) {
                // line 48
                echo "                    <input type=\"checkbox\" disabled readonly checked />
                ";
            } else {
                // line 50
                echo "                    <input type=\"checkbox\" disabled readonly />
                ";
            }
            // line 52
            echo "                </td>
                <td>";
            // line 53
            if ($this->getAttribute($context["entity"], "dateembauche", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateembauche", array()), "d/m/Y"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "typeConvention", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "typeConvention", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td> 
                <td>";
            // line 55
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "etatContrat", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "etatContrat", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td> 
                <td>
                ";
            // line 57
            if ($this->getAttribute($context["entity"], "conventionne", array())) {
                // line 58
                echo "                    <input type=\"checkbox\" disabled readonly checked />
                ";
            } else {
                // line 60
                echo "                    <input type=\"checkbox\" disabled readonly />
                ";
            }
            // line 62
            echo "                </td>
                <td>";
            // line 63
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "depot", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "depot", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td> 
               <td class=\"col-md-6\">
                    ";
            // line 65
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affChauffeur", array())) {
                // line 66
                echo "                    <div class=\"col-md-2\">
                        
                          <a target=\"_blank\"  href=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chauffeur_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                                <button class=\"btn-default\" title=\"Afficher\" type=\"submit\">  <img id=\"inputButtonAfficher\" title=\"Afficher\" src=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/apercu.png"), "html", null, true);
                echo "\" />
                             </button></a> 
                       
                    </div>
                   ";
            }
            // line 74
            echo "                    ";
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upChauffeur", array())) {
                // line 75
                echo "                    <div class=\"col-md-2\">
                       
                            <a target=\"_blank\"  href=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chauffeur_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                                <button class=\"btn-default\" title=\"Modifier\" type=\"submit\"> <img id=\"inputButtonModifier\" title=\"Modifier\" src=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/modifier.png"), "html", null, true);
                echo "\" />
                            </button> </a> 
                       
                    </div>
                    ";
            }
            // line 83
            echo "                    ";
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delChauffeur", array())) {
                // line 84
                echo "                    <div class=\"col-md-2\">
                        ";
                // line 85
                echo                 $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form');
                echo "
                    </div>
                    ";
            }
            // line 88
            echo "                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 90
            echo "<tr><td colspan=\"12\"><em>Aucun chauffeur n'existe pour le moment</em></td></tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "        </tbody>
    </table>
</div>
<div class=\"span12\" style=\"text-align: center\">
<div class=\"row-fluid\">
    <div class=\"pagination-lg\">";
        // line 96
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "</div>
</div>
</div>
<br/>
";
        // line 100
        if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crChauffeur", array())) {
            // line 101
            echo "<div class=\"row-fluid\">
    <a target=\"_blank\" href=\"";
            // line 102
            echo $this->env->getExtension('routing')->getPath("chauffeur_new");
            echo "\" class=\"pull-right\">
        <button class=\"btn btn-default\">Ajouter une nouvelle entité</button>
    </a>
</div>
";
        }
        // line 107
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
        return "FdrAdminBundle:Chauffeur:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 107,  273 => 102,  270 => 101,  268 => 100,  261 => 96,  254 => 91,  248 => 90,  241 => 88,  235 => 85,  232 => 84,  229 => 83,  221 => 78,  217 => 77,  213 => 75,  210 => 74,  202 => 69,  198 => 68,  194 => 66,  192 => 65,  187 => 63,  184 => 62,  180 => 60,  176 => 58,  174 => 57,  169 => 55,  165 => 54,  159 => 53,  156 => 52,  152 => 50,  148 => 48,  146 => 47,  141 => 45,  137 => 44,  133 => 43,  129 => 42,  125 => 41,  121 => 40,  117 => 39,  114 => 38,  109 => 37,  85 => 16,  78 => 13,  70 => 11,  63 => 10,  56 => 6,  53 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
